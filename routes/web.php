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
    $crew =[
        'Anastasia',
        'Gabriele',
        'Legolas',
        'Ghimli',
        'Luciana',     
    ];
    return view('home', compact('crew'));
});

Route::get('/about', function (){
    return view('about');
})->name('about');


Route::get('/products', function (){
    return view('products');
})->name('products');