<?php

    require('connect.php');

    extract($_POST);
    $busca = mysqli_query($use, "Select * from `tb_user` where `email`= '$email';");
    if ($busca->num_rows == 1) {
        $usuario = mysqli_fetch_array($busca);
        $senha = md5($senha);
        if ($usuario['senha'] == $senha){
            session_start();
            $_SESSION['logado'] = true;
            $_SESSION['nome'] = $usuario['nome'];
            header("location:../paginaPesquisa/pesquisa.html");
        } else{
            $msg = "Email ou senha incorretos!";
            header("location:login.php");
        }
    }
session_start();
$_SESSION['msg'] = $msg;
?>