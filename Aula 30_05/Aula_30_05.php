<?php
//array_map();
//array_filter();

$array=[
    ["nome"=>"Vitor", "sobrenome"=>"Padilha"],//0
    ["nome"=>"Vitor", "sobrenome"=>"Silva"],//1
    ["nome"=>"Ciclano", "sobrenome"=>"Padilha"],//2
    ["nome"=>"Ciclano", "sobrenome"=>"Silva"]];

$arrayResult = array_filter(
    $array,
    function ($valor, $indice) {
        return $valor["sobrenome"]=="Padilha" && $indice>2;
    }
);/*[]

    */

?>