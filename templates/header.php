<?php

include_once "helpers/url.php";
include_once "Model/config.php";

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlackStore</title>
    <link rel="short icon" href="<?= $BASE_URL ?>/Imgs/ImgSection.webp">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/views/Css/style.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/views/Css/media.css">
</head>

<body>

    <header class="header">
        <div class="title-header">
            <h1>BlackStore</h1>
        </div><!--title-header-->
        <nav id="top" class="nav">
            <ol>
                <li><a href="<?= $BASE_URL ?>/">Home</a></li>
                <li><a href="#ProdutosVendidos">Produtos + Vendidos</a></li>
                <li><a href="#Produtos">Produtos</a></li>
                <li><a href="<?= $BASE_URL ?>/Afiliado.php">Torne-Se Um Afiliado</a></li>
            </ol>
        </nav><!--nav-->
        <figure class="figure-img">
            <img src="<?= $BASE_URL ?>/Imgs/carrinho-de-compras.png" alt="">
        </figure><!--figure Img-->
    </header><!--header-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="<?= $BASE_URL ?>/views/JS/script.js"></script>

</body>

</html>