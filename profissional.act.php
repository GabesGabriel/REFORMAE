<?php
extract($_FILES);
extract($_POST);

$trabalhos_urls = array(); // Array para armazenar as URLs das imagens de trabalhos
$fotoperfil_url = ''; // Variável para armazenar a URL da imagem do fotoperfil

require('connect.php');

// Verifica se a imagem do fotoperfil foi enviada
if (!empty($_FILES['fotoperfil']['name'])) {
    $fotoperfil_file = $_FILES['fotoperfil']['name'];
    $fotoperfil_tmpFilePath = $_FILES['fotoperfil']['tmp_name'];

    $fotoperfil_url = "imagens/" . md5(time() . $fotoperfil_file) . ".jpg";

    if (move_uploaded_file($fotoperfil_tmpFilePath, $fotoperfil_url)) {
        // Imagem do fotoperfil foi carregada com sucesso
    }
}

// Verifica se algum arquivo foi enviado em trabalhos[]
if (!empty($_FILES['trabalhos']['name'][0])) {
    $fileCount = count($_FILES['trabalhos']['name']);

    for ($i = 0; $i < $fileCount; $i++) {
        $file = $_FILES['trabalhos']['name'][$i];
        $tmpFilePath = $_FILES['trabalhos']['tmp_name'][$i];

        $url = "imagens/" . md5(time() . $file) . ".jpg";

        if (move_uploaded_file($tmpFilePath, $url)) {
            $trabalhos_urls[] = $url;
        }
    }
}

// Insere as URLs das imagens no banco de dados
if (!empty($trabalhos_urls)) {
    foreach ($trabalhos_urls as $url) {
        mysqli_query($profissa, "INSERT INTO `tb_profissionais`(`codigo`, `fotoperfil_url`, `nome`, `datanasc`, `descricao`, `cpf_cnpj`, `email`, `celular`, `telefone`, `servico`, `habilidades`, `cobranca`, `url`, `localiza`)
        VALUES (NULL, '$fotoperfil_url', '$nome', '$datanasc', '$descricao', '$cpf_cnpj', '$email', '$celular', '$telefone', '$servico', '$habilidades', '$cobranca', '$url', '$localiza');");
    }

    $msg = "<div class=\"alerta\">Incluído com sucesso!!!</div>";
} else {
    $msg = "<div class=\"alerta\">Erro ao incluir!</div>";
}

session_start();
$_SESSION['msg'] = $msg;

header("location:souprofissional.php");
?>