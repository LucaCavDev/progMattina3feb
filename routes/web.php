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

Route::get('/', 'DrinkController@index')
    -> name('drinks-index');

Route::get('/drink/{id}', 'DrinkController@show')
    -> name('drink-show');

//create
Route::get('/create/drink', 'DrinkController@create')
    -> name('drink-create');
Route::post('/store/drink', 'DrinkController@store')
-> name('drink-store');

Route::get('/edit/drink/{id}', 'DrinkController@edit')
    -> name('drink-edit');
Route::post('/update/drink/{id}', 'DrinkController@update') 
    -> name('drink-update');

Route::get('/delete/drink/{id}', 'DrinkController@delete')
    -> name('drink-delete');
