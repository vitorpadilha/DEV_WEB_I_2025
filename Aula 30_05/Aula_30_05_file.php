<?php

$arquivo = fopen("meu_arquivo.txt","w");

if($arquivo){
    fwrite($arquivo, "Seu nome");
    fclose($arquivo);
}
?>