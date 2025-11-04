<?php
  require_once __DIR__ . "/GenericController.php";
require_once __DIR__ . "/../model/livro.class.php";
class LivroController implements GenericController{
    
    function cadastrar($dadosRecebidos){
        $livro = new Livro(
            null,
            $dadosRecebidos->titulo,
            $dadosRecebidos->autor,
            $dadosRecebidos->editora,
            $dadosRecebidos->anoPublicacao,
            $dadosRecebidos->genero,
            $dadosRecebidos->localizacao,
            $dadosRecebidos->ISSN
        );
        $livro->cadastrar();
    }
    function listar($dadosRecebidos){
        return Livro::listar($dadosRecebidos);
    }
    function alterar($dadosRecebidos){
        $livro = new Livro(
            $dadosRecebidos->id,
            $dadosRecebidos->titulo,
            $dadosRecebidos->autor,
            $dadosRecebidos->editora,
            $dadosRecebidos->anoPublicacao,
            $dadosRecebidos->genero,
            $dadosRecebidos->localizacao,
            $dadosRecebidos->ISSN
        );
        $livro->alterar();
    }
    function remover($dadosRecebidos){
        $livro = new Livro(
            $dadosRecebidos->id,
            $dadosRecebidos->titulo,
            $dadosRecebidos->autor,
            $dadosRecebidos->editora,
            $dadosRecebidos->anoPublicacao,
            $dadosRecebidos->genero,
            $dadosRecebidos->localizacao,
            $dadosRecebidos->ISSN
        );
        $livro->remover();
    }
}

?>