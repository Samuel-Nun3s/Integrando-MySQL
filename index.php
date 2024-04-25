<?php
    // Inclua o arquivo de conexao com o banco de dados
    include("conexao.php");//

    // id, nome, nascimento, nascionalidade

    // Dados a serem inseridos
    $nome = 'Samuel Nunes';
    $nascimento = '2006-01-02';
    $nacionalidade = 'Brasil';

    // Query para inserir os dados
    $insert = "INSERT INTO pessoas(nome, nascimento, nacionalidade) VALUES ('$nome', '$nascimento', '$nacionalidade')";

    // Executar a query
    if (mysqli_query($mysqli, $insert)) {
        print "Dados inseridos com sucesso!";
    }
    else {
        print "Erro ao inserir dados: " . mysqli_error($mysqli);
    }

    // Fechar a conexão com o banco de dados
    mysqli_close($mysqli);
?>