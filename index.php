<?php
    include 'conexao.php';

    $sql = "SELECT * FROM tb_pessoas";

    $statement = $pdo->prepare($sql);
    $statement->execute();
    $dados = $statement->fetchAll(PDO::FETCH_OBJ);

    //var_dump($dados);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="get" action="inserir.php">
        Nome: <input type="text" name="nome" required> <br>
        Idade: <input type="number" name="idade" required> <br>
        Email: <input type="text" name="email" required> <br>
        <input type="submit" value="Salvar">
        <input type="reset" value="Apagar">

    </form>


    <table width=100% border=1px solid> 
        <tr> 
            <th>ID</th>
            <th>NOME</th>
            <th>IDADE</th>
            <th>EMAIL</th>
            <th>AÇÃO</th>
        </tr>
        <?php foreach($dados as $linha) { ?>
            
            <tr>
                <td><?php echo $linha->id ?></td>
                <td><?php echo $linha->nome ?></td>
                <td><?php echo $linha->idade ?></td>
                <td><?php echo $linha->email ?></td>
                <td>
                    <a target="_blank" href="atualiza.php?id=<?php echo $linha->id?>&nome=<?php echo $linha->nome ?>&idade=<?php echo $linha->idade ?>&email=<?php echo $linha->email ?>">Editar</a> |
                    <a href="excluir.php?id=<?php echo $linha->id ?>">Excluir</a> </a>
                </td>

            </tr> 
        <?php } ?>

        
    </table>
</body>
</html>