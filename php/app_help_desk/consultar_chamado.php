<?php 
require_once "validador_acesso.php";
  
?>

<?php

  //array de chamados

  $chamados = array();
  //http://php.net/manual/pt_BR/function.fopen.php
  //abrir arquivo.hd
  $arquivo = fopen('arquivo.hd','r');

  //enquato houverem registros (linhas) a serem recuperados
  while(!feof($arquivo)){ //testa pelo fim do arquivo
    //linhas
    $registro = fgets($arquivo);//recupera a linha
    $chamados[] = $registro;
  }

  //fechando o arquivo.hd
  fclose($arquivo);

?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="logoff.php" class="nav-link">
          SAIR
          </a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <?php
              //chamados
              $chamados = array();

              //abrir o arquivo.hd
              $arquivo = fopen('arquivo.hd', 'r');

              //enquanto houver registros (linhas) a serem recuperados
              while(!feof($arquivo)) { //testa pelo fim de um arquivo
                //linhas  
                $registro = fgets($arquivo);

                $registro_dados = explode('#', $registro);

                if($_SESSION['perfil_id'] == '2'){
                  if($registro_dados[0] != $_SESSION['id']){
                    continue;
                  }
                }
                if(count($registro_dados) < 3) {
                  continue;
              }

                $chamados[] = $registro_dados;
              }


              //fechar o arquivo aberto
              fclose($arquivo);
              
            ?>

            <?php foreach($chamados as $card) { ?>
              
              <div class="card-body">
                    <div class="card mb-3 bg-light">
                        <div class="card-body">
                            <h5 class="card-title"><?=$card[1]?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?=$card[2]?></h6>
                            <p class="card-text"><?=$card[3]?></p>
                        </div>
                    </div>
              </div>

            <?php } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a href="home.php" class="btn btn-lg btn-warning btn-block">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>