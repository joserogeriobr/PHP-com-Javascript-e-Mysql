<?php

    include_once('conexao.php');
    
    $nome_aluno=$_POST['nome_aluno'];
    $matricula=$_POST['matricula'];

    $sql = 'INSERT INTO tb_alunos(nome_aluno,matricula) VALUES (:nome_aluno,:matricula)';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome_aluno',$nome_aluno);
    $stmt->bindParam(':matricula',$matricula);
    $stmt->execute();