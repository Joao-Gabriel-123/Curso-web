<?php

$objeto = null;

//$objeto->total() -> fatal error 

if(isset($objeto) && $objeto != null){
    $objeto->total();
}

$objeto?->total();

?>

