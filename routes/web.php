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
    return 'Teste Prático Velty... ' . $router->app->version();
});

$router->group(['prefix' => 'clientes'], function () use ($router) {

    $router->get('/', 'ClienteController@index');
    $router->get('/{cliente}', 'ClienteController@show');
    $router->post('/', 'ClienteController@store');
    $router->put('/{cliente}', 'ClienteController@update');
    $router->delete('/{cliente}', 'ClienteController@destroy');
});

$router->group(['prefix' => 'predios'], function () use ($router) {

    $router->get('/', 'PrediosController@index');
    $router->get('/{predio}', 'PrediosController@show');
    $router->post('/', 'PrediosController@store');
    $router->put('/{predio}', 'PrediosController@update');
    $router->delete('/{predio}', 'PrediosController@destroy');
});

$router->group(['prefix' => 'salas'], function () use ($router) {

    $router->get('/', 'SalasController@index');
    $router->get('/{sala}', 'SalasController@show');
    $router->post('/', 'SalasController@store');
    $router->put('/{sala}', 'SalasController@update');
    $router->delete('/{sala}', 'SalasController@destroy');
});


$router->group(['prefix' => 'tipagemsalas'], function () use ($router) {

    $router->get('/', 'TipagemSalasController@index');
    $router->get('/{tipagemsala}', 'TipagemSalasController@show');
    $router->post('/', 'TipagemSalasController@store');
    $router->put('/{tipagemsals}', 'TipagemSalasController@update');
    $router->delete('/{tipagemsala}', 'TipagemSalasController@destroy');
});