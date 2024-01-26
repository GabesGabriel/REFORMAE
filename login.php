<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reformaê - Login</title>

    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/media.css">

  
</head>
<body>
    
</body>
</html>
<?php
    @session_start();
    if (isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>

        </div>


        <div class="menu">
        
        <div class="logo">
            <img class="imgLogo"  src="img/logo.png">
            <h1>REFORMAÊ</h1>
        </div>
        
        <ul>
        
            <a href="index.html">
                <li>INÍCIO</li>
            </a>
        
            <a href="../paginaPesquisa/suporte.html">
                <li>SUPORTE</li>
            </a>
        
            <a href="cadastro.php">
                <li>INSCREVA-SE</li>
            </a>
        
            <a href="login.php">
                <li>ENTRAR</li>
            </a>
        
        </ul>
        </div>

        
<div class="mexe"> 
    <div id="container">
        
        <div class="banner">
            <img src="img/teslog.png" alt="imagem-login" style="height:190px; weight: 190px;">
            <p style="color: #fff; font-weight: 400;">
                Seja bem vindo, acesse e aproveite todo o conteúdo,
                <br>somos uma equipe de profissionais empenhados em
                <br>trazer o melhor conteúdo direcionado a você, usuário. 
            </p>
        </div>

        <div class="box-login">
           

            <div class="box">
                <h2>Faça o seu login agora!</h2>
                <br>
                <form action="login.act.php" method="post" enctype="multipart/form-data">
                <p class="pemail">Email: <input class="nome" type="text" name="email" id=""></p>
                <p class="psenha">Senha: <input class="senha" type="password" name="senha" id=""></p>
                <p class="espaçoButtonEntrar"><input class="button" type="submit" value="entrar" id="entrar" name="entrar"></p>
                </form>

                <a href="password.html">
                    <p>Esqueceu a sua senha?</p>
                </a>

                <a href="cadastro.php">
                    <p>Criar uma conta</p>
                </a>
                <br>
                <div class="social">
                    <img src="img/facebook.png" alt="facebook">
                    <img src="img/google.png" alt="google">
                    <img src="img/twitter.png" alt="twitter">
                    <img src="img/github.png" alt="github">
                </div>
            </div>
        </div>