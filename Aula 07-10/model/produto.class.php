<?php
    class Produto extends ClassePai {
        public $nome;
        public $preco;

        function montaLinhaDados()
        {
            return $this->id.self::SEPARADOR.$this->nome.self::SEPARADOR.$this->preco;
        }
    }

?>