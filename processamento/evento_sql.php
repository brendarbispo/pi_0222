<?php
include('conexao.php');

switch ($_POST['acao']) {
    case 'criar':
        $nome = $_POST['nome'];
        $desc = $_POST['descriscao'];
        $preco = $_POST['preco'];
        $desconto = $_POST['acao'];
        $ativo = $_POST['acao'];
        $categoria_id = $_POST['categoria_id'];

        $quantidade = $_POST['quantidade'];


        $sql = 'INSERT INTO PRODUTO (PRODUTO_NOME, PRODUTO_DESC, ...) VALUES ( "$nome", "$desc",  ';

        $id = $conexao->query($sql);

        $sql = 'INSERT INTO PRODUTO_ESTOQUE (PRODUTO_ID, PRODUTO_QTD) VALUES ( $id, $quantidade);';

        $conexao->query($sql);

        //TODO CAMINHO IMAGEM

        $imagem_url = "teste";

        $sql = 'INSERT INTO PRODUTO_IMAGEM (IMAGEM_ORDEM, IMAGEM_URL, PRODUTO_ID) VALUES ( 0, "$imagem_url", $id);';

        $conexao->query($sql);


        break;
    case 'editar':

        break;

    default:
}

$sql = 'SELECT * FROM PRODUTO';
$resposta = $conexao->query($sql);
var_dump($resposta);
