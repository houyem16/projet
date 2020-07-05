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

$router->group(['prefix'=>'api'],function ($router){
    $router->get('utilisateur','utilisateurController@showAllutilisateur');
    $router->post('user/login','utilisateurController@login');
    $router->post('user/register','utilisateurController@register');
    $router->get('projet','projetController@showAllprojet');
    $router->get('projet/{id}','projetController@showprojet');
    $router->post('ajouterprojet','projetController@ajouterp');
    $router->post('uploadimage','projetController@uploadimage');
    $router->post('user/detailuser','utilisateurController@detailuser');
    $router->post('user/userprojets','utilisateurController@userprojets');
    $router->post('paiement','utilisateurController@paiement');
    $router->post('alimenter','utilisateurController@alimenter');





});