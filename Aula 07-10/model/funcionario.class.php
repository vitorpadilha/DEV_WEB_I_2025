<?php
    include("class_pai.class.php");
    class Funcionario extends ClassePai {
        public $nome;
        public $telefone;
        public $salario;

        public function __construct($id, $nome, $salario, $telefone) {
            parent::__construct($id);
            $this->nome = $nome;
            $this->salario = $salario;
            $this->telefone = $telefone;
        }

        function montaLinhaDados()
        {
            return $this->id.self::SEPARADOR.$this->nome.self::SEPARADOR.$this->salario.self::SEPARADOR.$this->telefone;
        }
        static public function transformaEmObjeto($arrayDeDados){
            return new Funcionario($arrayDeDados[0], $arrayDeDados[1], $arrayDeDados[2], $arrayDeDados[3]);
        }
        static public function retornoNomeArquivo() {
            return "../db/funcionario.txt";
        }
    }
?>