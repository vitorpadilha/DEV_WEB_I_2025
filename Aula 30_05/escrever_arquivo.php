<?php
$array = ["Vitor","Fulano", "Ciclano"];

$arquivo = fopen("novo_arquivo.txt","w");

$nome = readline("Informe seu nome: \n");
array_push($array,$nome);

if($arquivo) {
    fwrite($arquivo,implode("\n",$array));
    fclose($arquivo);
}
?>