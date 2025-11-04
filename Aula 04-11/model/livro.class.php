<?php
require_once("./classe_pai.php");
class Livro extends ClassePai {

    public $titulo;
    public $autor;
    public $editora;
    public $anoPublicacao;
    public $genero;
    public $localizacao;
    public $ISSN;

    public function __construct($id, $titulo, $autor, $editora, $anoPublicacao, $genero, $localizacao, $ISSN) {
        parent::__construct($id);
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->editora = $editora;
        $this->anoPublicacao = $anoPublicacao;
        $this->genero = $genero;
        $this->localizacao = $localizacao;
        $this->ISSN = $ISSN;
    }

    static public function listar($filtros=[]) {
        $listaLivros = [];
        array_push($listaLivros, new Livro(1, "1984", "George Orwell", "Companhia das Letras", 1949, "Distopia", "A1", "1234-5678"));
        array_push($listaLivros, new Livro(2, "O Senhor dos Anéis", "J.R.R. Tolkien", "HarperCollins", 1954, "Fantasia", "B2", "2345-6789"));
        return $listaLivros;    
    }
}
?>