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

Route::get('/', function () {
    return view('frontpage');
});


Route::get('/','barangcrud@index');


Route::get('/tambah','barangcrud@showinput');





Route::post('/insert','barangcrud@insert');


Route::get('/edit/{id}','barangcrud@editshow');



Route::post('/editupdate','barangcrud@editupdate');

Route::get('/deldestroy/{id}', 'barangcrud@deldestroy');


// search form

Route::post('/search', 'barangcrud@searchpost');
