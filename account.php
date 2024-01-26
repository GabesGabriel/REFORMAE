<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar conta</title>

    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&family=Roboto&display=swap" rel="stylesheet">

    <!--JS & jQuery-->
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        //include('menu.php');
        @session_start();
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
    
            require('account.listar.php');
        } 
    ?>

    <div class="menu">
        <div class="logo">
            <h1> <img src="img/logoReformae.png"  style=" height:40px; width: 40px;"> REFORMAÊ</h1>
        </div>
        
        <ul>
        
            <a href="inicio.html">
                <li>INÍCIO</li>
            </a>
        
            <a href="suporte.html">
                <li>SUPORTE</li>
            </a>
        
            <a href="account.html">
                <li>INSCREVA-SE</li>
            </a>
        
            <a href="login.html">
                <li>ENTRAR</li>
            </a>
        
        </ul>
        </div>

<div class="mexe"> 
    <div id="container">
        <div class="banner">
            <img src="img/teslog.png" alt="imagem-login"style="height:260px; width: 260px;">
            <p style="color: #fff;">
                Seja bem vindo, acesse e aproveite todo o conteúdo,
                <br>somos uma equipe de profissionais empenhados em
                <br>trazer o melhor conteúdo direcionado a você usuário. 
            </p>
        </div>

        <div class="box-login">
            <h1 style=" color: #004AAD;">Junte-se a nós,<br>Crie hoje a sua conta!</h1>
            <form class= "formu" action="account.act.php" method="post" enctype="multipart/form-data" style="text-align: center;width: 300px;">
                <input type="text" name="username" id="username" placeholder="nome completo" required>
                <input type="text" name="cpf_cnpj" id="cpf_cnpj" placeholder="CPF ou CNPJ" required>
                <input type="email" name="email" id="email" placeholder="e-mail" required>
                <input type="email" name="cmail" id="cmail" placeholder="confirmar o e-mail" required>
                <input type="password" name="password" id="password" placeholder="senha" required>
                <input type="password" name="cpassword" id="cpassword" placeholder="confirmar a senha" required>
                <button><input class="botao" id="botao" type="submit" value="Enviar"></button>
            </form>
        </div>
    </div>
</div>
    <a href="login.html">
        <div id="bubble">
            <img src="img/user.png" alt="icone-usuário" title="fazer-login">
        </div>
    </a>

    <script>
        $('#termo').click(() => {
            const div = $('<div>').attr('style',`
                position: absolute;
                width: 65%;
                height: 420px;
                border-radius: 10px;
                background: #fff; 

                color: #3d3d3d;

                -webkit-box-shadow: 0px 0px 6px -1px #000000; 
                box-shadow: 0px 0px 6px -1px #000000;

                display: flex;
                flex-direction: column;
                justify-content: space-evenly;
                align-items: center;
            `)

            $(div).addClass('termo')

            $(div).append(`Eu entendo e aceitos os termos impostos pela plataforma...`)

            $(div).append(
                $('<button>Ok</button>').click(() => {
                    div.hide()
                })
            )
            
            $('body').append(div)
        })
    </script>
</body>
</html>