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
    return Redirect('register');
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'register' => 'RegisterController'
    //'password' => 'Auth\PasswordController'
]);

Route::get('myroute', 'RouteController@index');
Route::get('myroute/view', 'RouteController@view');
get('myroute/show/{id}', 'RouteController@show');

Route::post('myroute/post', 'RouteController@post');


Route::controller('sample', 'SampleController');
Route::controller('user', 'UserController');

Route::group(['prefix' => 'admin'], function () {
    Route::controller('post', 'Admin\PostController');
});
