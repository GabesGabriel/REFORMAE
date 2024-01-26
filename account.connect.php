<?php

    if (!$cad = mysqli_connect('localhost', 'root', '', 'bd_account')){
        echo "Erro ao acessar a base de dados";
    }
    mysqli_query($cad, "SET NAMES utf8");
 
 ?>