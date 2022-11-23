<?php

use App\Models\Books;
use Illuminate\Support\Facades\Route;

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

Route::get('/add', function () {
    $book = new Books();
    return view('create', ["book" => $book]);
});

Route::post('/add', function () {
    $title = Request::Input('title');
    $author = Request::Input('author');
    $price = Request::Input('price');
    $image = Request::file('img');
    $book = new Books();
    $book->title = $title;
    $book->author = $author;
    $book->price = $price;
    $imgPath = "img/" . $image->getClientOriginalName();
    $image->move('img', $image->getClientOriginalName());
    $book->img = $imgPath;
    $book->save();
    return redirect('/views');
});
Route::get('/views', function () {
    $book = Books::all();
    return view('views', ["book" => $book]);
});

Route::get('/edit/{id}', function ($id) {
    $book = Books::find($id);
    return view('edit', ["book" => $book]);
});
Route::post('/edit/', function () {
    $id = Request::Input('id');
    $title = Request::Input('title');
    $author = Request::Input('author');
    $price = Request::Input('price');
    $image = Request::file('img');
    $book = Books::find($id);
    $imgPath = "img/" . $image->getClientOriginalName();
    $image->move('img', $image->getClientOriginalName());
    if (file_exists($image)) {
        unlink($imgPath);
    }
    $book->img = $imgPath;
    $book->title = $title;
    $book->author = $author;
    $book->price = $price;
    $book->save();
    return redirect('/views');
});

Route::get('delete/{id}', function ($id) {
    $book = Books::find($id);
    $book->delete();
    return redirect('/views');
});
