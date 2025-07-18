<?php

    abstract class ClassePai {
        public $id;
        private $nomeArquivo="";
        const SEPARADOR = "#";
        public function __construct($id, $nomeArquivo) {
            $this->id = $id;
            $this->nomeArquivo = $nomeArquivo;
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
        public function alterar() {
            //TODO: Alterar linha do funcionário funcionário no arquivo.
        }
    }

?>