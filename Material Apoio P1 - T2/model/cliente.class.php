<?php
    class Cliente extends ClassePai {
        public $nome;
        public $email;
        public $telefone;
        const SEPARADOR = "#";
        const NOME_ARQUIVO = "../../db/cliente.txt";
        public function __construct($id, $nome, $telefone) {
            parent::__construct($id, self::NOME_ARQUIVO);
            $this->nome = $nome;
            $this->telefone = $telefone;
        }
        function montaLinhaDados()
        {
            return $this->id.self::SEPARADOR.$this->nome.self::SEPARADOR.$this->telefone;
        }
        static public function pegaPorId($id) {
            $arquivo = fopen("../../db/cliente.txt", "r");
            while(!feof($arquivo)){
                $linha = fgets($arquivo);
                if(empty($linha))
                    continue;
                $dados = explode(self::SEPARADOR, $linha);
                if($dados[0] == $id){
                    fclose($arquivo);
                    return new Cliente($dados[0], $dados[1], $dados[2]);
                }
            }
            fclose($arquivo);
        }
        static public function listar($filtroNome) {
            $arquivo = fopen("../../db/cliente.txt", "r");
            $retorno = [];
            while(!feof($arquivo)){
                $linha = fgets($arquivo);
                if(empty($linha))
                    continue;
                $dados = explode(self::SEPARADOR, $linha);
                if(str_contains($dados[1], $filtroNome)){
                    array_push($retorno, new Cliente($dados[0], $dados[1], $dados[2]));
                }
                
            }
            return $retorno;
        }
    }
    
?>