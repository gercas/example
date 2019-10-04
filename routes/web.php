<?php

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
$url = url()->current();
$url = str_replace('http://127.0.0.1/example', '', $url);
Route::any('/login','loginMain@login');
Route::any('/sign-out','loginMain@out');
Route::any('/admin','adminMain@metod_insert');
