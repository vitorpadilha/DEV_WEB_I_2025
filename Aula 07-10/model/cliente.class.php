<?php
    class Cliente extends ClassePai {
        public $nome;
        public $telefone;

        function montaLinhaDados()
        {
            return $this->id.self::SEPARADOR.$this->nome.self::SEPARADOR.$this->telefone;
        }
    }
    
?>