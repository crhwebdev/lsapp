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
    return view('welcome');
});

/*
Route::get('/hello', function () {
    return '<h1>Hello world</h1>';
});
*/

Route::get('/about', function (){
    // returns a view from pages/about.blade.php
    // can use slash or dot format when refering to view

    return view('pages.about');
});

// Route that demonstrates inserting dynamic values into route
Route::get('users/{id}', function($id){
    return 'This is user '.$id;
});