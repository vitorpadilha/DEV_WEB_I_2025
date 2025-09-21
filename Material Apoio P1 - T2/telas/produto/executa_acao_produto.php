<?
  include("../../service/produto.service.php");
  $acao = $_POST['acao'];
  $nome = isset($_POST['nome'])?$_POST['nome']:null;
  $fabricante = isset($_POST['fabricante'])?$_POST['fabricante']:null;
  $preco = isset($_POST['preco'])?$_POST['preco']:null;
  $id = isset($_POST['id'])?$_POST['id']:null;
  if($acao=="cadastrar") {
    cadastrarProduto($nome, $fabricante, $preco);
    echo "Cadastrado com sucesso";
  }
  else if($acao=="alterar") {
    alterarProduto($id, $nome, $fabricante, $preco);
    echo "Alterado com sucesso";
  }
  else if($acao=="remover") {
    removerProduto($id);
    echo "Removido com sucesso";
  }
  else {
    echo "Ação inválida";
  }
?>