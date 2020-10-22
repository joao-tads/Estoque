<?php
    require "SessionController.php";

    session_start();

    $email = $_POST['email'];

    $senha = $_POST['senha'];

    echo $email;
    echo $senha;


    $sql = "SELECT * FROM Usuarios WHERE email = {$email} AND senha = {$senha};"
    
    $sql = @mysql_fetch_array($sql);

    echo $sql;
    
    if ($sql) {
        $_SESSION['User'] = @mysql_fetch_array($sql);
        header("Location: ../View/home.php");
    } else {
        alert("E-mail ou senha incorretos!!!");
        header("Location: index.php");
    }
?>