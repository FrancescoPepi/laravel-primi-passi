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
    $msg = 'Benvenuto utente!';
    return view('homepage', compact('msg'));
})->name('homepage');

Route::get('page2', function () {
    $msg = 'Benvenuto nella pagina 2';
    return view('page2', compact('msg'));
})->name('page2');