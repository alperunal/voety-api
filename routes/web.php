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
if (app()->environment('local')) {
    header('Access-Control-Allow-Origin: http://localhost:8080');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Origin, Accept, Content-Type, Authorization, X-Requested-With, Application');
}

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix' => 'v1'], function () use ($router) {
    $router->get('lineups',  ['uses' => 'LineupController@showAllLineups']);
  
    $router->get('lineups/{id}', ['uses' => 'LineupController@showOneLineup']);
  
    $router->post('lineups', ['uses' => 'LineupController@create']);
  
    $router->options('lineups', function() {
        return http_response_code(200);
    });

    // $router->delete('lineups/{id}', ['uses' => 'LineupController@delete']);
  
    // $router->put('lineups/{id}', ['uses' => 'LineupController@update']);
});
