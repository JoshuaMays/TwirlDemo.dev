<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

Route::get('/about', function()
{
    return View::make('about');
});

Route::get('/stylists', function()
{
    return View::make('stylists');
});

Route::get('/services', function()
{
    return View::make('services');
});

Route::get('/products', function()
{
    return View::make('products');
});

Route::get('/gallery', function()
{
    return View::make('gallery');
});

Route::get('/find-twirl', function()
{
    return View::make('find');
});

Route::get('/contact', function()
{
    return View::make('contact');
});

Route::get('/press', function()
{
    return View::make('press');
});

Route::get('/policies', function()
{
    return View::make('policies');
});

Route::get('/careers', function()
{
    return View::make('careers');
});

Route::get('/hair-model', function()
{
    return View::make('hair-model');
});

/* RESOURCE CONTROLLER ROUTES */

Route::resource('stylists', 'StylistsController');