<?php

class Produto {
    public function __construct (
        public string $nome = '',
        public float $valor = 0        
        
    ){}
}

$produto = new Produto('Notebook', 4000);

$produto2 = new Produto(valor: 2000, nome: 'Smartphone');
?>