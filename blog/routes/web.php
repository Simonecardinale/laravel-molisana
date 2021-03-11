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

    $pasta_lunga = array_filter($pasta, function($item){
        // dump($item);
        return $item['tipo'] == 'lunga';
    });
    $pasta_corta = array_filter($pasta, function($item){
        // dump($item);
        return $item['tipo'] == 'corta';
    });
    $pasta_cortissima = array_filter($pasta, function($item){
        // dump($item);
        return $item['tipo'] == 'cortissima';
    });

    $tipoPasta = [
        'tipologiaPasta'=> [
            'lunga'=> $pasta_lunga,
            'corta'=> $pasta_corta,
            'cortissima'=> $pasta_cortissima,
        ]
    ];

    return view('prodotti', $data, $tipoPasta);
}) -> name('pagina-prodotti');

Route::get('/news', function () {
    $blog = config('blog');
    $data = ['blog' => $blog];
    return view('news', $data);
}) -> name('pagina-news');


Route::get('/dettaglio/{id}', function ($id) {
    $pasta = config('pasta');

    if(is_numeric($id) && $id >= 0 && $id < count($pasta)){

        $data = ['formato' => $pasta[$id]];
        // dd($pasta[$id]);
        return view('dettaglio', $data);
    } else {
        abort('404');
    }

}) -> name('pagina-dettaglio');



