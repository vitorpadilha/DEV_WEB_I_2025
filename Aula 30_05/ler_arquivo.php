<?php

$arquivo = fopen("meu_arquivo.txt","r");

if($arquivo) {

    $conteudo = file_get_contents("meu_arquivo.txt");
    var_dump($conteudo);

    fclose($arquivo);
}

?>