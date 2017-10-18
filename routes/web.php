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

Auth::routes();
    Route::middleware('auth')->group(function(){
    Route::get('/','CriteratingController@index');
    Route::get('/criteratings','CriteratingController@index')->name('criteratings');
    Route::get('/criteratings/new', 'CriteratingController@newCriterating')->name('new_criterating');
    Route::post('/criteratings/new', 'CriteratingController@newCriterating')->name('create_criterating');
    Route::get('/criteratings/{criterating_id}', 'CriteratingController@show')->name('show_criterating');
    Route::get('/criteratings/edit/{criterating_id}', 'CriteratingController@edit')->name('edit_criterating');
    Route::post('/criteratings/edit/{criterating_id}', 'CriteratingController@modify')->name('update_criterating');
});

