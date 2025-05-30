<?php
//array_map();
//array_filter();

$array=[
    ["nome"=>"Vitor", "sobrenome"=>"Padilha"],//0
    ["nome"=>"Vitor", "sobrenome"=>"Silva"],//1
    ["nome"=>"Ciclano", "sobrenome"=>"Padilha"],//2
    ["nome"=>"Ciclano", "sobrenome"=>"Silva"]];

$arrayResult = array_map(
    function ($valor, $indice) {
        //["nome"=>"Vitor", "sobrenome"=>"Padilha"]
        $valor["nomeCompleto"] = $valor["nome"]." ".$valor["sobrenome"];
        //["nome"=>"Vitor", "sobrenome"=>"Padilha", "nomeCompleto" => "Vitor Padilha"]
        return $valor;
    },
    $array    
);

/*
[    ["nome"=>"Vitor", "sobrenome"=>"Padilha", "nomeCompleto" => "Vitor Padilha"],
    "Vitor Silva",
    "Ciclano Padilha",
    "Ciclano Silva"]
*/
?>