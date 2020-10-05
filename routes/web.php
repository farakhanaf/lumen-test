<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/product', 'ProductController@get');

//$router->get('/products/{id}', 'ProductController@getUser');
$router->get('/products/cat1/{cat1}/cat2/{cat2}', 'ProductController@getProduct');

// To use the Str::random call this first
use Illuminate\Support\Str;

// Generate Application Key
$router->get('/key', function () {
    $random = Str::random(32);
    return $random;
});

$router->get('/foo', function () {
    return 'Hello friend, this is a get method.';
});

$router->post('/bar', function () {
    return 'Hello friend, now this is a post method.';
});

$router->post('/register', 'AuthController@register');
$router->post('/login', 'AuthController@login');
$router->post('/user/{id}', 'UserController@show');
