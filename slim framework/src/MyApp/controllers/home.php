<?php

namespace MyApp\controllers;

class Home {
    //protected $container;
    protected $view;

    public function __construct($view){
        $this->view = $view;
    }

    public function index($request, $response){
        //$view = $this->container->get('view')
        var_dump($this->view);

        return $response->write('Teste index');
    }
}


?>