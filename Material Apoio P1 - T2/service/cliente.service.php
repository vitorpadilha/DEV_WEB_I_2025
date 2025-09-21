<?php
    include("../../model/cliente.class.php");
    function cadastrarCliente($nome, $email, $telefone) {
        $cliente = new Cliente(null, $nome, $email, $telefone);
        $cliente->cadastrar();

    }

    function pegaClientePeloId($id) {
        return Cliente::pegaPorId($id);
    }

    function alterarCliente($id, $novoNome, $novoEmail, $novoTelefone) {
        $cliente = Cliente::pegaPorId($id);
        if ($cliente) {
            $cliente->nome = $novoNome;
            $cliente->email = $novoEmail;
            $cliente->telefone = $novoTelefone;
            $cliente->alterar();
        }
    }

    function removerCliente($id) {
        $cliente = Cliente::pegaPorId($id);
        if ($cliente) {
            $cliente->remover();
        }
    }


    function listarCliente($filtroNome) {
        $clientes = Cliente::listar($filtroNome);
        echo "<table><thead><tr><th>Nome</th><th>Email</th><th>Telefone</th>";
        echo "<th>Ações</th>";//NOVA LINHA
        echo "</tr></thead><tbody>";
        foreach($clientes as $cliente) {
            echo "<tr><td>".$cliente->nome."</td>";
            echo "<td>".$cliente->email."</td>";
            echo "<td>".$cliente->telefone."</td>";
            echo "<td><a href='http://localhost:81/Aula%2007-10/telas/cliente/cadastro_cliente.php?id=".$cliente->id."'>Alterar</a></td>";
            echo "</tr>";
        }
        echo "</tbody></table>";

    }


    function listarTodosClientes() {
        return Cliente::listar("");
    }

?>