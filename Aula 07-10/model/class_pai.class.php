<?php

    abstract class ClassePai {
        public $id;
        private $nomeArquivo="";
        const SEPARADOR = "#";
        public function __construct($id) {
            $this->id = $id;
        }
        abstract function montaLinhaDados();

        public function encontraUltimoId(){
            $arquivo = fopen($this->nomeArquivo, "r");
            $idTemp = 1;
            while(!feof($arquivo)){
                $linha = fgets($arquivo);
                if(empty($linha))
                    continue;
                $dados = explode(self::SEPARADOR, $linha);
                $idTemp = intval($dados[0])+1;
            }
            $this->id=$idTemp;
        }
        public function cadastrar() {
            $this->encontraUltimoId();
            //TODO: Cadastrar  no arquivo.
            $arquivo = fopen($this->nomeArquivo, "a");
            fwrite($arquivo, $this->montaLinhaDados()."\n");
            fclose($arquivo);
        }
        public function remover() {
            //TODO: Remover funcionário do arquivo.
        }
        static abstract public function transformaEmObjeto($arrayDeDados);
        static abstract public function retornoNomeArquivo();
        static public function listar() {
            $arquivo = fopen(self::retornoNomeArquivo(), "r");
            $retorno = [];
            while(!feof($arquivo)){
                $linha = fgets($arquivo);
                if(empty($linha))
                    continue;
                $dados = explode(self::SEPARADOR, $linha);
                array_push($retorno, self::transformaEmObjeto($dados));
            }
            return $retorno;
        }
        public function alterar() {
            //TODO: Alterar linha do funcionário funcionário no arquivo.
        }
    }

?>