<?php
include 'conexao.php';
//inplementação do inserir

    $nome = $_REQUEST['tx_nome'];
    $idade = $_REQUEST['nr_idade'];
    $email = $_REQUEST['tx_email'];
    $id = $_REQUEST['id_pessoa'];

// testa se id é vazio ou nao
    if($id != null) {
        $sql = "UPDATE tb_pessoa SET tx_nome = :nome, nr_idade = :idade, tx_email = :email WHERE id_pessoa = :id";
        $statement = $pdo->prepare($sql);
        $statement->bindParam(":id", $id);
    } else {
        $sql = "INSERT INTO tb_pessoa ( tx_nome, nr_idade, tx_email) VALUES (:nome, :idade, :email)";
        $statement = $pdo->prepare($sql);
    }

    $statement->bindParam(":nome", $nome);
    $statement->bindParam(":idade", $idade);
    $statement->bindParam(":email", $email);
    $statement->execute();

    header("Location: index.php");
?>