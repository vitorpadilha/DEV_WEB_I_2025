<?php
require_once("./GenericController.php");
require_once("../model/livro.class.php");
class LivroController implements GenericController{
    
    function cadastrar($dadosRecebidos){
        
    }
    function listar($dadosRecebidos){
        return Livro::listar($dadosRecebidos);
    }
    function alterar($dadosRecebidos){
        
    }
    function remover($dadosRecebidos){
        
    }
}

?>