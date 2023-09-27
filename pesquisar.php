<?php
    include 'autenticado.php';
    include 'conexao.php';

    $sql = "SELECT * FROM tb_pessoa";

    # Consulta no bacno de dados
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $dados = $statement->fetchAll(PDO::FETCH_OBJ);

    # edição
    $dadosEdit= null;
    if(isset($_REQUEST['id_pessoa'])) {
        $id = $_REQUEST['id_pessoa'];
        $sqlEdit = " SELECT * FROM tb_pessoa WHERE id_pessoa = :id";
        $statement = $pdo->prepare($sqlEdit);
        $statement->bindParam(":id", $id);
        $statement->execute();
        $dadosEdit = $statement->fetch(PDO::FETCH_OBJ);
    }


    //var_dump($dados);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="">
    <title>Document</title>
</head>
<body>
    <a href="logout.php">Sair</a>
    <form method="get" action="inserir.php">

    <input type="hidden" name="id_pessoa"           value="<?php echo $dadosEdit != null ? $dadosEdit->id_pessoa  : '' ?>">
        Nome: <input type="text" name="tx_nome"     value="<?php echo $dadosEdit != null ? $dadosEdit->tx_nome  : '' ?>"> <br>
        Idade: <input type="number" name="nr_idade" value="<?php echo $dadosEdit != null ? $dadosEdit->nr_idade : '' ?>"> <br>
        Email: <input type="text" name="tx_email"   value="<?php echo $dadosEdit != null ? $dadosEdit->tx_email : '' ?>">  <br>
        <input type="submit" name="Salvar">
        <input type="reset" name="Apagar"> 
        <br> <br>
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
                <td><?php echo $linha->id_pessoa ?></td>
                <td><?php echo $linha->tx_nome ?></td>
                <td><?php echo $linha->nr_idade ?></td>
                <td><?php echo $linha->tx_email ?></td>
                <td>
                    <a href="index.php?id_pessoa=<?php echo $linha->id_pessoa ?>">Editar</a> | 
                    <a href="excluir.php?id_pessoa=<?php echo $linha->id_pessoa ?>">Excluir</a> </a>
                </td>

            </tr> 
        <?php } ?>

        
    </table>
</body>
</html>