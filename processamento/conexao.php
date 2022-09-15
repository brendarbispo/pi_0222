<?php

//CONEXAO COM O BANCO DE DADOS::

    define('HOST', '144.22.244.104');
    define('PORT', '3306');
    define('USER', 'Bravo4Fun');
    define('PASS', 'Bravo4Fun');
    define('BASE', 'Bravo4Fun');
    $dsn = 'mysql:host=' . HOST . ';dbname=' . BASE . ';port=' . PORT;           
    $conexao = new PDO($dsn, USER, PASS);