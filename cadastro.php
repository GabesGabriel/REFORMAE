<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reformaê - Cadastro</title>

    
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&family=Roboto&display=swap" rel="stylesheet">

   
</head>
<body>


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
            <img src="img/teslog.png" alt="imagem-login"style="height:190px; weight: 190px;">
            <p style="color: #fff;">
            Seja bem vindo, acesse e aproveite todo o conteúdo,
                <br>somos uma equipe de profissionais empenhados em
                <br>trazer o melhor conteúdo direcionado a você, usuário. 
            </p>
        </div>

        <div class="box-login">
            <h1 style=" color: #004AAD;">Junte-se a nós,<br>Crie hoje a sua conta!</h1>

            <div class="box-account">
            <form class="formu" action="cadastro.act.php" method="post" enctype="multipart/form-data">
            <p class="pemail">Nome: <input class="nome" type="text" name="nome" id=""></p>
            <p class="pemail">Email: <input class="nome" type="text" name="email" id=""></p>
            <p class="psenha">Senha: <input class="senha" type="password" name="senha" id=""></p>

                <p class="espaçoButtonEntrar"><input class="button" type="submit" value="Criar conta"></p>
               
                
                </form>

            </div>
        </div>
    </div>
</div>
   

  
</body>
</html>