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

$app->get('/', ['uses' => 'TopController@index']);
/*
$app->get('/', function () use ($app) {
    return $app->welcome();
});
*/
$app->get('/sobject/{name}', ['uses' => 'SobjectController@describe']);
$app->put('/sobject/{name}/bulk_update', 'SobjectController@bulkUpdate');
$app->get('/product', ['uses' => 'ProductController@index']);
$app->post('products', function() use($app){
  $data = Request::all();
  return json_encode($data);
});
