<?php
include 'conexao.php';
//inplementação do inserir
$nome = $_REQUEST['nome'];
$idade = $_REQUEST['idade'];
$email = $_REQUEST['email'];
$sql = "INSERT INTO tb_pessoas ( nome, idade, email) VALUES (:nome, :idade, :email)";

$statement = $pdo->prepare($sql);
$statement->bindParam(":nome", $nome);
$statement->bindParam(":idade", $idade);
$statement->bindParam(":email", $email);
$statement->execute();

header("Location: index.php");

?>