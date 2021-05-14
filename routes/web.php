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
    return view('home')->with('comics', config('comics'));
})->name('home');

Route::get('/single/{id}', function ($id) { //creo la rotta del singolo fumetto passando il parametro id
    $comics = config('comics'); //salvo l'array nella variabile
    return view('single')->with('comic', $comics[$id]); //primo parametro with nome variabile, secondo è il valore della variabile
})->name('detail'); //do il nome alla rotta

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

