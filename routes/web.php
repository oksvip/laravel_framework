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

Route::get('/', function () {return view('home.pages.home');})->name('index');
Route::resource('breadcrumbs', 'BreadcrumbsController', ['only' => ['index']]);
Route::resource('users', 'UsersController', ['only' => ['index']]);
Route::resource('articles', 'ArticlesController', ['only' => ['index']]);