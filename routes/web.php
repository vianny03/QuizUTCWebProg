<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GiantBookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [GiantBookController::class, 'index'])->name('Home');
Route::get('/detail/{id}', [GiantBookController::class, 'detail'])->name('detail');
Route::get('/category/{id}', [GiantBookController::class, 'category'])->name('category');
Route::get('/publishers', [GiantBookController::class, 'publisher'])->name('publishers');
Route::get('/publishers/{id}', [GiantBookController::class, 'publisherBooks'])->name('publisherBooks');
Route::get('/contact', [GiantBookController::class, 'contact'])->name('contact');
