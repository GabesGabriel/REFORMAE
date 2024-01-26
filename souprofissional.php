<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/souprofissionall.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title></title>
</head>
<body>

    <?php
    $linkinho = 'http://localhost/site_reformae-main/index/';
    $linkText = 'ÍNICIO';
    $linkinho1 = 'http://localhost/site_reformae-main/Calendario/calendario.html';
    $linkText1 = 'CALENDÁRIO';
    $linkinho2 = 'http://localhost/site_reformae-main/Or%c3%a7amento/calcc.html';
    $linkText2 = 'ORÇAMENTO';
    $linkinho3 = 'http://localhost/site_reformae-main/paginaPesquisa/suporte.html';
    $linkText3 = 'SUPORTE';
    $linkinho4 = 'http://localhost/site_reformae-main/paginaPesquisa/pesquisa.html';
    $linkText4 = 'VOLTAR';
    

    if(isset($_SESSION['msg'])){
        echo "<p class= alert>$_SESSION[msg]</p>";
        unset($_SESSION['msg']);
    }
    require('connect.php');
    $profissionais = mysqli_query($profissa, "Select * from `tb_profissionais`");
    while ($profissa = mysqli_fetch_array($profissionais)){
        
        echo "<div class=perfilprofissa>";
            echo "<fieldset class=dadospri>";
                echo "<img class=fotoperfil src=$profissa[fotoperfil_url]>";
                echo "<p class=nome>$profissa[nome]</p>";
                echo "<p class=descricao>$profissa[descricao]</p>";
                echo "<hr class=space>";
                echo "<div class=eemail>";
                    echo "<span class=material-symbols-outlined>mail";
                    echo "</span>";
                    echo "<div style=display:block;>";
                        echo "<p class=demail>E-MAIL</p>";
                        echo "<p class=email>$profissa[email]</p>";
                    echo "</div>";
                echo "</div>";
                echo "<div class=eemail>";
                    echo "<span class=material-symbols-outlined>
                    phone_iphone";
                    echo "</span>";
                    echo "<div style=display:block;>";
                        echo "<p class=demail>CELULAR</p>";
                        echo "<p class=email>$profissa[celular]</p>";
                    echo "</div>";
                echo "</div>";
                echo "<div class=eemail>";
                    echo "<span class=material-symbols-outlined>call";
                    echo "</span>";
                    echo "<div style=display:block;>";
                        echo "<p class=demail>TELEFONE</p>";
                        echo "<p class=email>$profissa[telefone]</p>";
                    echo "</div>";
                echo "</div>";
                echo "<div class=eemail>";
                    echo "<span class=material-symbols-outlined>calendar_month";
                    echo "</span>";
                    echo "<div style=display:block;>";
                        echo "<p class=demail>DATA DE NASCIMENTO</p>";
                        echo "<p class=email>$profissa[datanasc]</p>";
                    echo "</div>";
                echo "</div>";
                echo "<div class=eemail>";
                    echo "<span class=material-symbols-outlined>location_on";
                    echo "</span>";
                    echo "<div style=display:block;>";
                        echo "<p class=demail>LOCALIZAÇÃO</p>";
                        echo "<p class=email>$profissa[localiza]</p>";
                    echo "</div>";
                echo "</div>";
            echo "</fieldset>";

            echo "<fieldset class=dadossec>";
                echo "<header class=menu>";
                    echo "<div style=display:block;>";
                        echo "<h1 class=sobremim>Sobre mim</h1>";
                        echo "<hr class=eu>";
                    echo "</div>";
                    echo "<div class=menun>";
                        echo "<ul class=links>";
                            echo '<a class=link1 href="' . $linkinho . '">' . $linkText . '</a>';
                            echo '<a class=link href="' . $linkinho1 . '">' . $linkText1 . '</a>';
                            echo '<a class=link href="' . $linkinho2 . '">' . $linkText2 . '</a>';
                            echo '<a class=link href="' . $linkinho3 . '">' . $linkText3 . '</a>';
                            echo '<a class=link href="' . $linkinho4 . '">' . $linkText4 . '</a>';
                        echo "</ul>";
                    echo "</div>";
                echo "</header>";
                echo "<p class=servicos>$profissa[servico]</p>";
                echo "<div style=display:flex;>";
                    echo "<div class=blocohabi>";
                        echo "<p class=dehabi>HABILIDADES</p>";
                        echo "<p class=habilidades style=padding-top:2px;>$profissa[habilidades]</p>";
                    echo "</div>";
                    echo "<div class=blocobranca>";
                        echo "<p class=decobranca>COBRO POR</p>";
                        echo "<p class=cobranca>$profissa[cobranca]</p>";
                    echo "</div>";
                    echo "<div class=blocobranca>";
                        echo "<p class=decobranca>CPF ou CNPJ</p>";
                        echo "<p class=cobranca>$profissa[cpf_cnpj]</p>";
                    echo "</div>";
                echo "</div>";
                echo "<h1 class=port>Meu Portfólio</h1>";
                echo "<div class=imagens style=display:flex;>";
                    echo "<img class=imagemm src=$profissa[url]>";
                echo "</div>";
            echo "</fieldset>";

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