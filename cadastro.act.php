<?php

    extract($_POST);
    require('connect.php');
    $senha = md5($senha);
    $busca = mysqli_query($use, "Select * from `tb_user` where `email` = '$email';");
    //var_dump($busca);
    if ($busca->num_rows != 0){
        echo $msg = "Email já utilizado!";
        //header("location:cad_user.php");
    } else {
    if (mysqli_query($use, "INSERT INTO `tb_user`
    (`codigo`, `nome`,`email`, `senha`) VALUES
    (NULL, '$nome', '$email', '$senha');")){
         header("location:login.php");
        } else {
         header("location:cadastro.php");
        }
        

    }
    
    @session_start();
    $_SESSION['msg'] = $msg;
    
?>