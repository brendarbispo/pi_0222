<?php
include('conexao.php');

$sql = 'SELECT * FROM CATEGORIA';

$resposta = $conexao->query($sql);

while ($linha = $resposta->fetch_array(MYSQLI_ASSOC)) {
    echo "<p> {$linha['CATEGORIA_ID']} - {$linha['CATEGORIA_NOME']} - {$linha['CATEGORIA_DESC']} </p>";
}


var_dump($resposta);
