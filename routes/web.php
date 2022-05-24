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
#Get Obtener
#Post Crear
#Put Modificar
#Delete Eliminar
$router->get('/Hola', function () use ($router) {
    return $router->app->version();
});
$router->get('/Saludo', function(){
    return 'Hola, Mi nombre es Carlos Dz';
});
$router->post('/Saludos', function(){
    return 'Hola, Estoy creando mi primer saludo :O';
});
$router->put('/Put', function(){
    return 'Estoy modificandoo por primera vez';
});
$router->delete('/Eliminar', function(){
    return 'Estoy eliminando algo por primera vez';
});
