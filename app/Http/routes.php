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
    return view('welcome');
});


/*Route::group( ['prefix'=>'v1'], function() {
    Route::controller('post', 'PostController');
});*/
    //Route::controller('post', 'PostController');

Route::group( ['prefix'=>'admin'], function() {
        Route::controller('post', 'Admins\PostController');
});

/*Route::get('/myroute', function() {
    return 'My Route';
});

Route::get('/myroute/test', function () {
    return Session::token();
});

Route::post('/myroute/test', function () {
    return 'Test Post';
});

Route::put('/myroute/test', function () {
    return 'Test Update';
});

Route::delete('/myroute/test', function () {
    return 'Test Delete';
});*/