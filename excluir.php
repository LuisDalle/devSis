<?php
 include 'conexao.php';
 
 $id = $_REQUEST['id_pessoa'];
 $sql = "DELETE FROM tb_pessoa WHERE id_pessoa= :id ";
 $statement = $pdo->prepare($sql);
 $statement->bindParam(":id", $id);
 $statement->execute();

 header("Location: index.php");


?>