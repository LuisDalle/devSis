<?php
include 'conexao.php';
/*
$sql = "UPDATE tb_pessoas SET nome = :nome, idade = :idade, email = :email WHERE tb_pessoas.id = :id";

$id = $_REQUEST['id'];
$nome = $_REQUEST['nome'];
$idade = $_REQUEST['idade'];
$email = $_REQUEST['email'];
$statement = $pdo->prepare($sql);

$statement->bindParam(":nome", $nome);
$statement->bindParam(":idade", $idade);
$statement->bindParam(":email", $email);
$statement->bindParam(":id", $id);
$statement->execute();
*/
//header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="atualiza2.php">
        Nome: <input type="text" name="nome" required> <br>
        Idade: <input type="number" name="idade" required> <br>
        Email: <input type="text" name="email" required> <br>
        <input type="submit" value="Salvar">
        <input type="reset" value="Apagar">

    </form>
</body>
</html>


