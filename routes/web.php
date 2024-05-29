<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MyFirstController;

/* Chiamata di tipo get con parametri */
Route::get('/hello/{param}/{param2}', function ($p1, $p2) {
    /* return "ciaociao, param: " . $p1 . " param2: " . $p2; */
    /* return view('welcome'); */
});


/* Chiamata di tipo get a pagina hello-view.blade.php */
/* Route::get('/hello-view', function () {

    $model = [
        'param1' => 'Hello',
        'param2' => 'World',

    ];
    return view('hello-view', $model);
}); */

Route::get('/hello', 'App\Http\Controllers\MyFirstController@index');
Route::get('/hello-controller-query-string', 'App\Http\Controllers\MyFirstController@indexWithQueryString');


