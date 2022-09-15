<?php
include('conexao.php');

if (isset($_GET["acao"])) {
    if($_GET["acao"] == "deletar"){
        $id = $_GET["id"];

        $sql = "DELETE FROM CATEGORIA WHERE CATEGORIA_ID = " . $id;
        
        $resposta = $conexao->query($sql);

        var_dump($sql);

        var_dump($res);

        //header("Location: ../categorias.php");
        //exit();
    }
}

if(isset($_POST["acao"])){
    switch ($_POST['acao']) {
        case 'criar':
            $nome = $_POST['nome'];
            $desc = $_POST['descricao'];
    
            $sql = "INSERT INTO CATEGORIA (CATEGORIA_NOME, CATEGORIA_DESC) VALUES ( '{$nome}', '{$desc}');";
    
            $id = $conexao->query($sql);
            header("Location: ../index.php");
            exit();
    
            break;
    
        case 'editar':
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $desc = $_POST['descricao'];
    
            $sql = "UPDATE CATEGORIA SET CATEGORIA_NOME = '{$nome}', CATEGORIA_DESC = '{$desc}' WHERE CATEGORIA_ID = '{$id}';";
    
            $id = $conexao->query($sql);
            header("Location: ../categorias.php");
            exit();
    
            break;
    }
}

