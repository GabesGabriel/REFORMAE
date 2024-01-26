<?php

extract($_FILES);
extract($_POST);

require('account.connect.php');
if(form_is_ok){
  
  mysqli_query($cad, "INSERT INTO `tb_account`(`codigo`, `username`, `cpf_cnpj`, `email`, `cmail`,`password`, `cpassword`)
 VALUES (NULL, '$username', '$cpf_cnpj', '$email', '$cmail', '$password', '$cpassword');");
  $msg = "<div class=\"alerta\">Incluído com sucesso!!!</div>";
} else {
    $msg = "<div class=\"alerta\">Erro ao incluir!</div>";
}

session_start();
$_SESSION['msg']= $msg;

 header("location:account.listar.php");

?>