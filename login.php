<?php   
    
    session_start();
    // essa parte sera substituida por uma consukta a uma tabela de usuarios do banco de dados
    $usuarioBd = "luisdalle";
    $senhaBd = md5("123456");

    $usuario = $_REQUEST['usuario'];
    $senha = md5($_REQUEST['senha']);

    if($senhaBd == $senha) {
       
        $_SESSION['usuario'] = $usuarioBd;
        header("Location: pesquisar.php");
    } else {
        header("Location: index.php");
    }

    
?>