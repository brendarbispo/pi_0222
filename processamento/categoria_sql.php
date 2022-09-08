<?php
include('conexao.php');

switch ($_POST['acao']) {
    case 'criar':
        $nome = $_POST['nome'];
        $desc = $_POST['descricao'];

        $sql = "INSERT INTO CATEGORIA (CATEGORIA_NOME, CATEGORIA_DESC) VALUES ( '{$nome}', '{$desc}');";

        $id = $conexao->query($sql);
        header("Location: ../index.php");
        exit();

        break;
    }