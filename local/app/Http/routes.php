<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/home', function () {
    return Redirect::to('/', 301);
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/products', function () {
    return view('pages.products');
});

Route::get('/service', function () {
    return view('pages.service');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/service.html', function(){ 
    return Redirect::to('/service', 301); 
});

Route::get('/index.html', function(){ 
    return Redirect::to('/', 301); 
});

Route::get('/products.html', function(){ 
    return Redirect::to('/products', 301); 
});

Route::get('/contact.html', function(){ 
    return Redirect::to('/contact', 301); 
});

Route::get('/about.html', function(){ 
    return Redirect::to('/about', 301); 
});