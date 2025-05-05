<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../../vendor/autoload.php';

$app = new \Slim\App();

//tipos de respostas: json, xml, texto, cabeçalho

$app->get('/header', function(Request $request, Response $response) {

	$response->getBody()->write('Esse é um retorno header');
	$response->withHeader('allow', 'put')->withAddedHeader('content-legth', 30);

} );

$app->get('/json', function(Request $request, Response $response) {

	$texto = ['nome' => 'Roberto', 'idade' => 27];
	$texto_json = json_encode($texto);

	$response->getBody()->write("$texto_json");
	return $response->withHeader('content-type', 'application/json');

} );

$app->get('/xml', function(Request $request, Response $response) {

	$xml = file_get_contents('teste.xml');
	$response->getBody()->write("$xml");

	return $response->withHeader('content-type', 'application/xml');

} );

$app->run();

