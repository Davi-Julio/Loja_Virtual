<?php

include_once "templates/header.php";
?>

<div class="section">
    <div class="conteudo-section">
        <h1>Encontre os Melhores</h1>
        <h2>Produtos Em nossa Loja</h2>
        <p>Grandes variedades,melhores preços, ótima qualidade dos produtos <br>
            você só acha aqui na <b>BlackStore.</b></p>
    </div><!--conteudo-section-->

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= $BASE_URL ?>/Imgs/ImgSection.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= $BASE_URL ?>/Imgs/ImgSection2.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= $BASE_URL ?>/Imgs/ImgSetion3.webp" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div><!--section-->

<div id="ProdutosVendidos" class="section-produtos">
    <div class="title-section-produtos">
        <h2>Produtos Abaixo do preço</h2>
        <h3>Compre Agora!</h3>
    </div><!--title-section-produtos-->

    <div class="container-section-produtos">
        <?php
        foreach ($infor as $value) {
        ?>
            <div class="container-section-produtos1">
                <figure class="img-section-produtos">
                    <img src="<?= $BASE_URL ?>/Imgs/<?= $value['img'] ?>" alt="">
                </figure><!--img-section-produtos-->
                <div class="Infor-section-produtos">
                    <h3><?= $value['title'] ?></h3>
                    <h6><?= $value['description'] ?></h6>
                    <p><?= $value['price'] ?></p>
                    <a href="produtos.php?comprarProdutos1=<?= $value['id'] ?>">Comprar</a>
                </div><!--Infor-section-produtos-->
            </div><!--container-section-produtos1-->
        <?php
        }
        ?>
    </div><!--container-section-produtos-->
</div><!--section produtos-->

<div class="section-tablets">
    <div class="container-section-tablets">
        <div class="container-section-tablets1">
            <figure class="img-container-section-tablets1">
                <img src="<?= $BASE_URL ?>/Imgs/tablets.avif" alt="">
            </figure><!--img-container-section-tablets1-->
            <div class="conteudo-container-section-tablets1">
                <h3>Acer Notebook Gamer</h3>
                <p>Nitro 5 AN515-57-59AT Core I5 11º Geração 8GB RAM 512GB SSD (GTX 1650) 15,6 Full HD IPS 144Hz Retroiluminado na cor vermelha Windows 11 Home</p>
            </div><!--conteudo-container-section-tablets1-->
        </div><!--container-section-tablets1-->

        <div class="container-section-tablets2">
            <figure class="img-container-section-tablets2">
                <img src="<?= $BASE_URL ?>/Imgs/tabltes2.jpg" alt="">
            </figure><!--img-container-section-tablets2-->
            <div class="conteudo-container-section-tablets2">
                <h3>Samsung Book Intel®</h3>
                <p>Core™ i5-1135G7, Windows 11 Home, 8GB, 256GB SSD, Intel Iris Xe, 15.6'' Full HD LED, NP550XDA-KH2BR</p>
            </div><!--conteudo-container-section-tablets2-->
        </div><!--container-section-tablets2-->

    </div><!--container-section-tablets-->
</div><!--section-tablets"-->


<asidem class="content-aside">
    <h3>Lançamentos 2024!</h3>
    <h4 class="h4">Tablets & Laptops de Ùltima geração em nossa loja!</h4>
    <div class="container-aside">
        <div class="box-aside1">
            <figure class="img-aside">
                <img src="<?= $BASE_URL ?>Imgs/lançamento1.jpg" alt="">
            </figure><!--img-aside-->
        </div><!--box-aside1-->
        <div class="box-aside2">
            <figure class="img-aside2">
                <img src="<?= $BASE_URL ?>Imgs/lançamento2_.jpg" alt="">
            </figure><!--img-aside2-->
        </div><!--box-aside2-->
        <div class="box-aside3">
            <figure class="img-aside3">
                <img src="<?= $BASE_URL ?>Imgs/lançamento3.jpg" alt="">
            </figure><!--img-aside3-->
        </div><!--box-aside3-->
    </div><!--container-aside-->
    </aside><!--content-aside-->


    <div id="Produtos" class="produtos">
        <div class="title-produtos">
            <h3>Super Produtos</h3>
            <h4>Com grandes descontos</h4>
        </div><!--title-produtos-->
        <div class="container-podutos">
            <?php
            foreach ($infor2 as $key => $produto) {
            ?>
                <div class="container-produtos1">
                    <figure class="img-produtos">
                        <img src="<?= $BASE_URL ?>/Imgs/<?= $produto['img'] ?>" alt="">
                    </figure><!--img produtos-->
                    <div class="description-product">
                        <h2><?= $produto['title'] ?></h2>
                        <h3><?= $produto['description'] ?></h3>
                        <p><?= $produto['price'] ?></p>
                        <a href="carrinho.php?comprarProduto2=<?= $produto['id'] ?>">Comprar</a>
                    </div><!--description-product-->
                </div><!--container produtos1-->

            <?php
            }
            ?>
        </div><!--container produtos-->
    </div><!--produtos-->

    <div class="iphones">
        <h1>Em breve Em nossa Loja!</h1>
        <div class="container-iphones">
            <div class="iphone1">
                <img src="<?= $BASE_URL ?>Imgs/Iphone1.webp" alt="">
            </div><!--iphone1-->
            <div class="iphone2">
                <img src="<?= $BASE_URL ?>Imgs/Iphone2.jpeg" alt="">
            </div><!--iphone2-->
            <div class="iphone3">
                <img src="<?= $BASE_URL ?>Imgs/Iphone3.jpeg" alt="">
            </div><!--iphone3-->
            <div class="iphone4">
                <img src="<?= $BASE_URL ?>Imgs/Iphone4.jpg" alt="">
            </div><!--iphone4-->
            <div class="iphone5">
                <img src="<?= $BASE_URL ?>Imgs/Iphone5.jpg" alt="">
            </div><!--iphone5-->
            <div class="iphone6">
                <img src="<?= $BASE_URL ?>Imgs/Iphone6.jpg" alt="">
            </div><!--iphone6-->
        </div><!--container-iphones-->
        <h1>Os Melhores Iphones em Nossa Loja!</h1>
    </div><!--iphones-->


    <div class="depoimentos">

        <div class="title-depoimentos">
            <h1>Depoimentos</h1>
        </div><!--title-depoimentos-->
        <div class="container-depoimentos">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">"Melhor Empressa em termos de produtos"</h5>
                    <p class="card-text">Os Melhores produtos você encontra aqui.</p>
                    <img id="estrela-img" width="80vw" src="<?= $BASE_URL ?>/Imgs/estrelas.png" alt="">
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">"Entrega super Rápida"</h5>
                    <p class="card-text">Além dos produtos serem de ótima qualidade a entrega e super rápida.</p>
                    <img id="estrela-img" width="80vw" src="<?= $BASE_URL ?>/Imgs/estrelas.png" alt="">
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">"Òtimos preços"</h5>
                    <p class="card-text">Os Preços são de fácil acesso.</p>
                    <img id="estrela-img" width="80vw" src="<?= $BASE_URL ?>/Imgs/estrelas.png" alt="">
                </div>
            </div>

        </div><!--container depoimentos-->

    </div><!--depoimentos-->

    <?php

    include "templates/footer.php";

    ?>