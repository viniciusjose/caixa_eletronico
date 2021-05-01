<?php 
    $dsn = "mysql:dbname=projeto_caixa_eletronico;dbhost=localhost";
    $dbuser = "root";
    $dbpass = "";

    try {
        $database = new PDO($dsn, $dbuser, $dbpass);
    } catch (PDOException $e) {
        echo "Erro ao conectar com o banco de dados: ".$e->getMessage();
    }
?>