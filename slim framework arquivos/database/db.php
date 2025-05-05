<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Illuminate\Database\Capsule\Manager as Capsule;

require '../../vendor/autoload.php';

$app = new \Slim\App();

$container = $app->getContainer();
$container['db'] = function(){

	$capsule = new Capsule;

	$capsule->addConnection([
		'driver' => 'mysql',
		'host' => 'localhost',
		'database' => 'slim',
		'username' => 'root',
		'password' => '',
		'charset' => 'utf8',
		'collation' => 'utf8_unicode_ci',
		'prefix' => '',
	]);

	$capsule->setAsGlobal();

	$capsule->bootEloquent();

	return $capsule;

};

$app->get('/usuarios', function(Request $request, Response $response){

	$db = $this->get('db');

	//criar tabelas

	/*
	$db->schema()->dropIfExists('usuarios');
	$db->schema()->create('usuarios', function($table){

		$table->increments('id');
		$table->string('nome');
		$table->string('email');
		$table->timestamps();

	});*/

	//inserir dados

	/*
	$db->table('usuarios')->insert([
		'nome' => 'Jamilton Damasceno',
		'email' => 'jamilton@teste.com'
	]);*/

	//atualizar dados

	/*
	$db->table('usuarios')->where('id', 1)->update([
		'nome' => 'Jamilton Damasceno'
	]);
	*/

	//deletar dados

	/*
	$db->table('usuarios')->where('id', 1)->delete();
	*/

	//listar dados

	$usuarios = $db->table('usuarios')->get();
	foreach($usuarios as $key => $usuario){
		echo $usuario->nome . '<br>';
	}

});

$app->run();