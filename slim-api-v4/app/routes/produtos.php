<?php

declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;
use App\Models\Produto;
use Prophecy\Argument;

require __DIR__ . '../../../db.php';

//ORM -> Object relational Mapper (Mapeador de objeto relacionável)
//Illuminate -> Eloquent

$app->group('/api/v1', function($group){

    //lista os produtos existentes
    $group->get('/produtos/lista', function(Request $request, Response $response){

        $produtos = Produto::get();
        $prod_json = json_encode($produtos);

        $response->getBody()->write($prod_json);
        return $response->withHeader('content-type', 'application/json');

    });

    //adiciona um novo produto ao banco de dados
    $group->post('/produtos/adiciona', function(Request $request, Response $response){

        $dados = $request->getParsedBody();

        //validar dados...

        $produto = Produto::create($dados);
        $prod_json = json_encode($produto);

        $response->getBody()->write($prod_json);
        return $response->withHeader('content-type', 'application/json');

    });

    //recupera um produto pelo id
    $group->get('/produtos/lista/{id}', function(Request $request, Response $response, $args){

        $produtos = Produto::findOrFail($args['id']);
        $prod_json = json_encode($produtos);

        $response->getBody()->write($prod_json);
        return $response->withHeader('content-type', 'application/json');

    });
    
    //atualiza os valores de um produto pelo id
    $group->put('/produtos/atualiza/{id}', function(Request $request, Response $response, $args){

        $dados = $request->getParsedBody();

        //validar dados...

        $produtos = Produto::findOrFail($args['id']);
        $produtos->update($dados);
        $prod_json = json_encode($produtos);

        $response->getBody()->write($prod_json);
        return $response->withHeader('content-type', 'application/json');

    });

    //remove um produto pelo id
    $group->get('/produtos/remove/{id}', function(Request $request, Response $response, $args){

        $produtos = Produto::findOrFail($args['id']);

        //validar se é o produto correto

        $produtos->delete();
        $prod_json = json_encode($produtos);

        $response->getBody()->write($prod_json);
        return $response->withHeader('content-type', 'application/json');

    });

});