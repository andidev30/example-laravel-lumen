<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('hello', function () {
        return "Hello This is Api";
    });
    $router->get('categories', 'CategoryController@index');
    $router->get('category/{id}', 'CategoryController@view');
    $router->post('categories', 'CategoryController@store');
    $router->patch('category/{id}', 'CategoryController@update');
    $router->delete('category/{id}', 'CategoryController@delete');
});


$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/hello', function () use ($router) {
    return "Hello World";
});
