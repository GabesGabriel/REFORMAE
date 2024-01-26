<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profissional.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> 
</head>
<body>

    <?php

        @session_start();
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
    
            require('souprofissional.php');
        }
        
    ?>

    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="img/logo.png" alt="" class="imagem">
                </span>

                <div class="text logo-text">
                    <span class="name">REFORMAÊ</span>
                    <span class="profession">Sou Profissional</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">


                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="../paginaPesquisa/pesquisa.html">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Início</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../Orçamento/calcc.html">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Orçamentos</span>
                        </a>
                    </li>

                  

                    <li class="nav-link">
                        <a href="../Calendario/calendario.html">
                            <i class='bx bx-heart icon' ></i>
                            <span class="text nav-text">Calendário</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../controle/controle.html">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Controle Financeiro</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="../paginaPesquisa/pesquisa.html">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Sair</span>
                    </a>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="formulario">
        <h1 class="title">Crie seu perfil do Profissional</h1>
        <form style="display:flex;" action="profissional.act.php" method="post" enctype="multipart/form-data">
            <fieldset class="dados-pessoais">
                <h1 class="title2">Dados Pessoais</h1>
                <div>
                    <img id="img" src="choose.png" class="fotoperfil">
                </div>
                <label for="fileUpload" style="font-weight: 600;">Anexe sua foto</label><br>
                <input type="file" name="fotoperfil" id="input">
                <div class="input-container">
                    <input type="text" name="nome" id="input" required="">
                    <label for="input" class="label">Seu nome completo</label>
                    <div class="underline"></div>
                </div>
                <div class="input-container">
                    <label for="input" class="label" style="padding-top: 5px;">Sua data de nascimento</label>
                    <input type="date" name="datanasc" id="input datepicker" required="">
                </div>
                <div class="input-container">
                    <input type="text" name="descricao" id="input" required="">
                    <label for="input" class="label">Escreva uma descrição curta (Ex: Profissional de obras em geral)</label>
                    <div class="underline"></div>
                </div>
                <div class="input-container">
                    <input type="text" name="cpf_cnpj" id="input" required="">
                    <label for="input" class="label">CPF /CNPJ</label>
                    <div class="underline"></div>
                </div>
                <h1 class="title3">Dados de Contato</h1>
                <div class="input-container">
                    <input type="text" name="email" id="input" required="">
                    <label for="input" class="label">Email</label>
                    <div class="underline"></div>
                </div>
                <div class="input-container">
                    <input type="text" name="celular" id="input" required="">
                    <label for="input" class="label">Celular</label>
                    <div class="underline"></div>
                </div>
                <div class="input-container">
                    <input type="text" name="telefone" id="input" required="">
                    <label for="input" class="label">Telefone</label>
                    <div class="underline"></div>
                </div>
            </fieldset>
            <fieldset class="dados-profissionais">
                <h1 class="title2">Dados Profissionais</h1>
                <div class="input-container">
                    <input type="text" name="servico" id="input" required="" style="white-space: pre-line;">
                    <label for="input" class="label" style="white-space: pre-line;">Descreva os serviços que você presta promovendo seu trabalho</label>
                    <div class="underline"></div>
                </div>
                <div class="input-container">
                    <label for="input" class="label">Selecione habilidades que você tenha (escolha uma ou mais)</label><br>
                    <div>
                        <ul id="opcoes" style="display:flex;">
                            <fieldset style="border: none;margin-top:20px;">
                                <li onclick="toggleSelection(this)" class="opc" data-value="Alvenaria ">Alvenaria</li><br>
                                <li onclick="toggleSelection(this)" class="opc" data-value="  Azulejista ">Azulejista</li><br>
                                <li onclick="toggleSelection(this)" class="opc" data-value="  Acabamento ">Acabamento</li><br>
                            </fieldset>
                            <fieldset id="opcoes" style="padding-left: 25px;border: none;">
                                <li onclick="toggleSelection(this)" class="opc" data-value="  Manutenção Predial ">Manutenção Predial</li><br>
                                <li onclick="toggleSelection(this)" class="opc" data-value="  Obra de Arte Corrente ">Obra de Arte Corrente</li><br>
                            </fieldset>
                        </ul>
                        <input type="hidden" id="selectedOptions" name="habilidades">
                        <script src="js/habilidades.js"></script>
                        <script>
                            function toggleSelection(li) {
                            li.classList.toggle("selected");
                            }
                        </script>
                    </div>
                </div>
                <div class="input-container">
                    <input type="text" name="cobranca" id="input" required="">
                    <label for="input" class="label">Escreva a forma pela qual você cobra (por Diária ou/e Empreitada)</label>
                    <div class="underline"></div>
                </div>
                <div class="input-container">
                    <input type="text" name="localiza" id="input" required="">
                    <label for="input" class="label">Sua localização (cidade onde trabalha)</label>
                    <div class="underline"></div>
                </div>
                <br><div class="input-container">
                    <label for="fileUpload" style="text-align:left;font-size:17px;">Anexe aqui imagens de trabalhos antigos, que representem seu trabalho</label>
                    <input type="file" name="trabalhos[]" id="upload" multiple>
                    <div id="preview"></div>
                    <script src="js/fotos.js"></script>
                </div>
                <input class = "botao" type="submit" value="CRIAR PERFIL">
            </fieldset>
        </form>
    </div>
    <script src="js/perfil.js"></script>
    </section>

    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");


    toggle.addEventListener("click" , () =>{
        sidebar.classList.toggle("close");
    })

    searchBtn.addEventListener("click" , () =>{
        sidebar.classList.remove("close");
    })

    modeSwitch.addEventListener("click" , () =>{
        body.classList.toggle("dark");
    
        if(body.classList.contains("dark")){
            modeText.innerText = "Light mode";
        }else{
            modeText.innerText = "Dark mode";
        }
    });
    </script>

</body>
</html>
