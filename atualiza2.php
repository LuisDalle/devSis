<?php
include 'conexao.php';

$sql = "UPDATE tb_pessoas SET nome = :nome, idade = :idade, email = :email WHERE id = :id";


$id = $_REQUEST['id'];
$nome = $_REQUEST['nome'];
$idade = $_REQUEST['idade'];
$email = $_REQUEST['email'];
$statement = $pdo->prepare($sql);

$statement->bindParam(":nome", $nome);
$statement->bindParam(":idade", $idade);
$statement->bindParam(":email", $email);
$statement->bindParam(":id", $id);
//$statement->execute([':nome' => $nome, ':idade' => $idade, ':email' => $email, ':id' => $id]);
$statement->execute();
 
header("Location: index.php");
?>