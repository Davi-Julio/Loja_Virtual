<?php

include_once "templates/header.php";

if (isset($_GET['comprarProduto2'])) {
    $id = (int) $_GET['comprarProduto2'];
    $current;

    foreach ($infor2 as $value) {
        if ($value['id'] == $id) {
            $current = $value;
        }
    }
}
?>
<div class="container-produtos1">
    <figure class="img-produtos">
        <img src="<?= $BASE_URL ?>/Imgs/<?= $current['img'] ?>" alt="">
    </figure><!--img produtos-->
    <div class="description-product">
        <h2><?= $current['title'] ?></h2>
        <h3><?= $current['description'] ?></h3>
        <p><?= $current['price'] ?></p>
        <a id="Comprar" href="finalizarCompra.php?FinalizarCompra=<?= $current['id'] ?>">Finalizar Compra</a>
    </div><!--description-product-->
</div><!--container produtos1-->
<?php
include_once "templates/footer.php"
?>