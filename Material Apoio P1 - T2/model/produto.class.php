<?php
    class Produto extends ClassePai {
        public $nome;
        public $preco;
        const SEPARADOR = "#";
        const NOME_ARQUIVO = "../../db/produto.txt";
        public function __construct($id, $nome, $preco) {
            parent::__construct($id, self::NOME_ARQUIVO);
            $this->nome = $nome;
            $this->preco = $preco;
        }
        function montaLinhaDados()
        {
            return $this->id.self::SEPARADOR.$this->nome.self::SEPARADOR.$this->preco;
        }
        static public function pegaPorId($id) {
            $arquivo = fopen("../../db/funcionario.txt", "r");
            while(!feof($arquivo)){
                $linha = fgets($arquivo);
                if(empty($linha))
                    continue;
                $dados = explode(self::SEPARADOR, $linha);
                if($dados[0] == $id){
                    fclose($arquivo);
                    return new Funcionario($dados[0], $dados[1], $dados[2], $dados[3]);
                }
            }
            fclose($arquivo);
        }
        static public function listar($filtroNome) {
            $arquivo = fopen("../../db/funcionario.txt", "r");
            $retorno = [];
            while(!feof($arquivo)){
                $linha = fgets($arquivo);
                if(empty($linha))
                    continue;
                $dados = explode(self::SEPARADOR, $linha);
                if(str_contains($dados[1], $filtroNome)){
                    array_push($retorno, new Funcionario($dados[0], $dados[1], $dados[2], $dados[3]));
                }
                
            }
            return $retorno;
        }

        
    }

?>