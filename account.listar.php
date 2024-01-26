<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>

    <?php
    //include('menu.php');

    if(isset($_SESSION['msg'])){
        echo "<p class= alert>$_SESSION[msg]</p>";
        unset($_SESSION['msg']);
    }
    require('account.connect.php');
    $accounts = mysqli_query($cad, "Select * from `tb_account`");
    while ($account = mysqli_fetch_array($accounts)){
        
        echo "<div class=box>";
        echo "<p>Código: $account[username]</p>";
        echo "<p>Título: $account[cpf_cnpj]</p>";
        echo "<p>Autor: $account[email]</p>";
        echo "<p>Editora: $account[cmail]</p>";
        echo "<p>Ano de publicação: $account[password]</p>";
        echo "<p>Número de páginas: $account[password]</p>";
        echo "<p><a href=alterar.php?codigo=$account[codigo]>Alterar</a></p>";
       
       echo "<p><a href=javascript:excluir($account[codigo])>Excluir</a></p>";
        echo "</div>";
        

    }
    ?>
   
    
    <script>
        function excluir(codigo){
            resp =confirm('Deseja excluir o registro'+codigo+'?');
            if(resp == true){
                window.location = "excluir.php?codigo="+codigo;
            }
        }
        </script>
</body>
</html>