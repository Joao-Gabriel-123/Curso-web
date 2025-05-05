<?php


declare(strict_types=1);

use Illuminate\Database\Capsule\Manager as Capsule;
use App\Application\Handlers\HttpErrorHandler;
use App\Application\Handlers\ShutdownHandler;
use App\Application\ResponseEmitter\ResponseEmitter;
use App\Application\Settings\SettingsInterface;
use DI\ContainerBuilder;
use Slim\Factory\AppFactory;
use Slim\Factory\ServerRequestCreatorFactory;

require __DIR__ . '/vendor/autoload.php';

// Instantiate PHP-DI ContainerBuilder
$containerBuilder = new ContainerBuilder();

if (false) { // Should be set to true in production
	$containerBuilder->enableCompilation(__DIR__ . '/../var/cache');
}

// Set up settings
$settings = require __DIR__ . '/app/settings.php';
$settings($containerBuilder);

// Set up dependencies
$dependencies = require __DIR__ . '/app/dependencies.php';
$dependencies($containerBuilder);

// Set up repositories
$repositories = require __DIR__ . '/app/repositories.php';
$repositories($containerBuilder);

// Build PHP-DI Container instance
$container = $containerBuilder->build();

$db = $container->get('db');
$schema = $db->schema();
$tabela = 'produtos';

if(!($schema->hasTable($tabela))){
	$schema->create($tabela, function($table){

		$table->increments('id');
		$table->string('titulo', 100);
		$table->text('descricao');
		$table->decimal('preco', 11, 2);
		$table->string('fabricante', 60);
		$table->timestamps();
	
	
	});
}

/*
$db->table($tabela)->insert([
	'titulo' => 'Smartphone Galaxy S25',
	'descricao' => 'Tela 6.3" Android 5G - Samsung',
	'preco' => 9999.99,
	'fabricante' => 'Samsung',
	'created_at' => '2025-01-05',
	'updated_at' => '2025-01-05'
]);

$db->table($tabela)->insert([
	'titulo' => 'Smartphone Moto G15',
	'descricao' => 'Tela 6.3" Android 5G - Motorola',
	'preco' => 1999.99,
	'fabricante' => 'Motorola',
	'created_at' => '2024-04-13',
	'updated_at' => '2024-04-13'
]);
*/
