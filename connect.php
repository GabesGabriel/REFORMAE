<?php

 if (!$use = mysqli_connect('localhost', 'root', '', 'bd_cadastro')){
    echo "Erro ao acessar a base de dados";
 }
 mysqli_query($use, "SET NAMES utf8");
 
 ?>