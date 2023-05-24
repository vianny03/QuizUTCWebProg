<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Book;
use App\Models\Detail;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GiantBookController extends Controller
{
    public function index(){

        $categorylist = Category::all();
        $booklist = Book::all();
        return view('welcome', 
        ['category' => $categorylist->toarray(),
        'book' => $booklist->toarray()]);
    }

    public function detail($id){
        $categorylist = Category::all();
        $book = Book::join('publishers', 'books.publisher_id', '=', 'publishers.id')
                -> where('books.id', $id)
                -> first();
        // dd($book);
        return view('details', [
            'category' => $categorylist->toarray(),
            'book' => $book
        ]);
    }

    public function category($id){
        $categorylist = Category::all();
        $bookList = Detail::join('books', 'details.book_id', "=",  'books.id')
                    ->join('categories', 'details.category_id', "=", 'categories.id')
                    ->where('categories.id', $id)
                    ->select('books.*', 'books.id as book_id')
                    ->get();
        $categoryInfo = Category::find($id);
        return view('category', [
            'category' => $categorylist->toarray(),
            'book' => $bookList->toarray(),
            'categoryInfo' => $categoryInfo
        ]);
    }

    public function publisher(){
        $categorylist = Category::all();
        $publisherlist = Publisher::all();

        return view('publishers', [
            'category' => $categorylist->toarray(),
            'publisher' => $publisherlist->toarray()
        ]);
    }

    public function publisherBooks($id){
        $categorylist = Category::all();
        $booklist = Book::join('publishers', 'books.publisher_id', '=', 'publishers.id')
                    ->where('publishers.id', $id)
                    ->select('books.*', 'books.id as book_id')
                    ->get();
        $publisherInfo = Publisher::find($id);
        return view('publisherBooks', [
            'category' => $categorylist->toarray(),
            'book' => $booklist->toarray(),
            'publisherInfo' => $publisherInfo
        ]);
    }

    public function contact(){
        $categorylist = Category::all();
        return view('contact', [
            'category' => $categorylist->toarray()
        ]);
    }

}
