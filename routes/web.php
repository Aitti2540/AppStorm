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
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@index');
Route::get('portfolio','PagesController@portfolio');
Route::get('success','PagesController@success');
Route::get('benefit','PagesController@benefit');
Route::get('awards','PagesController@awards');
Route::get('join-up','PagesController@joinup');
Route::get('position-required','PagesController@required');
Route::get('vision','PagesController@vision');
Route::get('mission','PagesController@mission');












