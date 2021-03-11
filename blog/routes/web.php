<?php

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

Route::get('/', function () {
    return view('home');
}) -> name('pagina-home');

Route::get('/prodotti', function () {
    $pasta = config('pasta');
        $data = ['pasta' => $pasta];
    return view('prodotti', $data);
}) -> name('pagina-prodotti');

Route::get('/news', function () {
    $blog = config('blog');
    $data = ['blog' => $blog];
    return view('news', $data);
}) -> name('pagina-news');


Route::get('/dettaglio/{id}', function ($id) {
    $pasta = config('pasta');
    $data = ['formato' => $pasta[$id]];
    // dd($pasta[$id]);
    return view('dettaglio', $data);
}) -> name('pagina-dettaglio');



