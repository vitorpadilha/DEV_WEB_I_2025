<?php
    include("../../model/produto.class.php");
    function cadastrarProduto($nome, $preco, $descricao) {
        $produto = new Produto(null, $nome, $preco, $descricao);
        $produto->cadastrar();

    }

    function pegaProdutoPeloId($id) {
        return Produto::pegaPorId($id);
    }

    function alterarProduto($id, $novoNome, $novoPreco, $novoDescricao) {
        $produto = Produto::pegaPorId($id);
        if ($produto) {
            $produto->nome = $novoNome;
            $produto->preco = $novoPreco;
            $produto->descricao = $novoDescricao;
            $produto->alterar();
        }
    }

    function removerProduto($id) {
        $produto = Produto::pegaPorId($id);
        if ($produto) {
            $produto->remover();
        }
    }

    function listarProduto($filtroNome) {
        $produtos = Produto::listar($filtroNome);
        echo "<table><thead><tr><th>Nome</th><th>Preço</th><th>Descrição</th>";
        echo "<th>Ações</th>";//NOVA LINHA
        echo "</tr></thead><tbody>";
        foreach($produtos as $produto) {
            echo "<tr><td>".$produto->nome."</td>";
            echo "<td>".$produto->preco."</td>";
            echo "<td>".$produto->descricao."</td>";
            echo "<td><a href='http://localhost:81/Aula%2007-10/telas/produto/cadastro_produto.php?id=".$produto->id."'>Alterar</a></td>";
            echo "</tr>";
        }
        echo "</tbody></table>";

    }


    function listarTodosProdutos() {
        return Produto::listar("");
    }

?>