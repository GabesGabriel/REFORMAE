<?php

 if (!$profissa = mysqli_connect('localhost', 'root', '', 'bd_profissionais')){
    echo "Erro ao acessar a base de dados";
 }
 mysqli_query($profissa, "SET NAMES utf8");
 
?>