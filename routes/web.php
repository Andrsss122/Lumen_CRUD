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

//autores

$router->get('/autores', 'AutorController@getAll');
$router->post('/autores/new', 'AutorController@create');
$router->delete('/autores/destroy/{id}', 'AutorController@destroy');
$router->get('/autores/{id}', 'AutorController@getById');
$router->put('/autores/update/{id}', 'AutorController@update');

//cities

$router->get('/cities', 'CitiesController@getAll');
$router->post('/cities/new', 'CitiesController@create');
$router->delete('/cities/destroy/{id}', 'CitiesController@destroy');
$router->get('/cities/{id}', 'CitiesController@getById');
$router->put('/cities/update/{id}', 'CitiesController@update');

//libro

$router->get('/libro', 'LibroController@getAll');
$router->post('/libro/new', 'LibroController@create');
$router->delete('/libro/destroy/{id}', 'LibroController@destroy');
$router->get('/libro/{id}', 'LibroController@getById');
$router->put('/libro/update/{id}', 'LibroController@update');

//states

$router->get('/states', 'StatesController@getAll');
$router->post('/states/new', 'StatesController@create');
$router->delete('/states/destroy/{id}', 'StatesController@destroy');
$router->get('/states/{id}', 'StatesController@getById');
$router->put('/states/update/{id}', 'StatesController@update');



