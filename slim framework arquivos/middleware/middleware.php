<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../../vendor/autoload.php';

$app = new \Slim\App();

//middleware

$app->add( function($request, $response, $next){

	$response->getBody()->write('início camada 1 <br>');

	//return $next($request, $response);
	$response = $next($request, $response);

	$response->write('<br> fim camada 1 <br>');
	return $response;

});

$app->add( function($request, $response, $next){

	$response->getBody()->write('início camada 2 <br>');

	$response = $next($request, $response);

	$response->write('fim camada 2 <br>');
	return $response;

});

$app->get('/usuarios', function(Request $request, Response $response) {

	$response->getBody()->write('usuarios');

} );

$app->get('/postagens', function(Request $request, Response $response) {

	$response->getBody()->write('postagens');

} );

$app->run();

