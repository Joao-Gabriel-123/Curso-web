<?php

declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use App\Application\Settings\SettingsInterface;
use DI\ContainerBuilder;
use Psr\Container\ContainerInterface;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;
use App\Models\Produto;
use App\Models\Usuario;
use Prophecy\Argument;
use Firebase\JWT\JWT;

require __DIR__ . '../../../db.php';

//ORM -> Object relational Mapper (Mapeador de objeto relacionável)
//Illuminate -> Eloquent

//rotas para geração de token
$app->post('/api/token', function(Request $request, Response $response){

    require __DIR__ . '../../../db.php';

    $dados = $request->getParsedBody();

    $email = isset($dados['email']) ? $email = $dados['email'] : null;
    $senha = isset($dados['senha']) ? $senha = $dados['senha'] : null;

    $usuario = Usuario::where('email', $email)->first();
    $usuario_arr = ['id' => $usuario->id, 'nome' => $usuario->nome, 'email' => $usuario->email, 'senha' => $usuario->senha];

    if( !(is_null($usuario)) && (md5($senha) === $usuario->senha)){
       
        //gerar token
        $secretkey = $container->get('secretKey');;
        $ChaveAcesso = JWT::encode($usuario_arr, $secretkey, 'HS384');

        $chave_json = json_encode($ChaveAcesso);

        $response->getBody()->write($chave_json);
        return $response->withHeader('content-type', 'application/json');
    }

    $response->getBody()->write(json_encode(['status' => 'Erro']));
    //$response->getBody()->write(json_encode($usuario_arr));
    return $response->withHeader('content-type', 'application/json');

});