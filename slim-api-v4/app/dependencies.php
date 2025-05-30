<?php

declare(strict_types=1);

use App\Application\Settings\SettingsInterface;
use DI\Container;
use DI\ContainerBuilder;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\UidProcessor;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;
use Illuminate\Database\Capsule\Manager as Capsule;

return function (ContainerBuilder $containerBuilder) {
    $containerBuilder->addDefinitions([
        LoggerInterface::class => function (ContainerInterface $c) {
            $settings = $c->get(SettingsInterface::class);

            $loggerSettings = $settings->get('logger');
            $logger = new Logger($loggerSettings['name']);

            $processor = new UidProcessor();
            $logger->pushProcessor($processor);

            $handler = new StreamHandler($loggerSettings['path'], $loggerSettings['level']);
            $logger->pushHandler($handler);

            return $logger;
        },

        'db' => function(ContainerInterface $c){
            $settings = $c->get(SettingsInterface::class);
            $db_settings = $settings->get('db');

            $capsule = new Capsule;
		
            $capsule->addConnection($db_settings);
        
            $capsule->setAsGlobal();
        
            $capsule->bootEloquent();
        
            return $capsule;

        },

        'secretKey' => function(ContainerInterface $c){
            $settings = $c->get(SettingsInterface::class);
            $sk_settings = $settings->get('secretKey');

            return $sk_settings;

        }
    ]);
};
