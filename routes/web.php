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
});

Route::view('post/add', 'posts.add');
Route::view('post/list', 'posts.list');
Route::view('post/perolehan-list', 'posts.perolehan');
Route::view('post/peserta-list', 'posts.peserta');
Route::get('post/edit/{id}', function ($id) {
    return view('posts.edit', ['id' => $id]);
});
