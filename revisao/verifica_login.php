<?php
//


session_start();


    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if ($login== "Vitor" AND $senha== "321") {
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        header('Location: index.phtml');
        echo"entrou";
//return true;
    }

    else{
        header('Location: index.phtml');
//return false;
    }




//include("cabecalho.php")           USAR NO TCC
//include("rodape.php")

// select * from produto where nome_produto like '\a\' --> tenha a em algum lugar