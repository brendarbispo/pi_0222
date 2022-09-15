<?php

//AUTENTICACAO::
/*
- capturar as infos inseridas
- enviar para o servidos em forma de post
- verificar no banco de dados se ha informacoes identicas ao email 
- caso haja verificar se senha compativel
- se sim confirmar acesso (outra pagina)
- caso nao, apresentar erro 
*/

include('conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

//buscar email e senha da tabela administrador enqanto email for igual::

$admin = $conexao->query("SELECT ADM_EMAIL, ADM_SENHA FROM ADMINISTRADOR WHERE ADM_EMAIL = '" .  $email . "'")->fetch(PDO::FETCH_ASSOC);

if ($admin) {

    $senha_db = $admin['ADM_SENHA'];

    //TODO: pesquisar sobre criptografia de senha

    if ($senha == $senha_db) {

        echo "Autenticado com sucesso!";
    } else {

        echo "Verifique as informacoes e tente novamente!";
    }
} else {

    echo "Verifique as informacoes e tente novamente!";
}
