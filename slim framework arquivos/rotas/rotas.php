<?php

require_once '../vendor/autoload.php';

$app = new \Slim\App;

$app->get('/', function(){
    echo 'Página principal';
});

$app->get('/postagens[/{ano}[/{mes}]]', function($request, $response){

    $ano = '' != $request->getAttribute('ano') ? $request->getAttribute('ano') : '';
    $mes = '' != $request->getAttribute('mes') ? $request->getAttribute('mes') : '';

    echo 'Lista postagens';

    if($ano != ''){
        echo "<br>Ano: $ano";
    }

    if($mes != ''){
        echo "<br>Mês: $mes";
    }

});

$app->get('/usuarios[/{id}]', function($request, $response){
    $id = $request->getAttribute('id');

    echo 'Lista usuarios ou id: ' . $id;
});

$app->get('/tweets[/{itens:.*}]', function($request, $response){
    $itens = $request->getAttribute('itens');
    $itens = explode('/', $itens);

    echo 'tweets: <br>';

    foreach($itens as $key => $i){
        echo "<br> tweet $key: $i";
    }

})->setName('tweets');

$app->get('/twitter', function($request, $response){
    $path = $this->get('router')->pathFor('tweets', ['itens' => 'Elon Musk']);
    echo("location: $path");

});

$app->group('/v1', function(){

    $this->get('/usuarios', function(){
        echo 'Lista usuarios';
    });

    $this->get('/postagens', function(){
        echo 'lista postagens';
    });

});

$app->run();







?>