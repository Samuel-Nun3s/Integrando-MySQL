<?php 
    // Declarando Banco de Dados
    $hostname = "localhost";
    $banco_de_dados = "teste";
    $usuario = "root";
    $senha = "";

    // Fazendo a conexao
    $mysqli = new mysqli($hostname, $usuario, $senha, $banco_de_dados);
    if ($mysqli -> connect_errno) {
        print "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    else {
        print "Conectado ao Banco de Dados";
    }
?>