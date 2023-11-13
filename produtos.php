<?php

include_once "templates/header.php";

if (isset($_GET["comprarProdutos1"])) {
  $id = (int) $_GET['comprarProdutos1'];
  $current;

  foreach ($infor as $value) {
    if ($value['id'] == $id) {
      $current = $value;
    }
  }
}

?>

<style>
  @media only screen and (max-width:570px) {
    .container-total-products {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    #img-p {
      width: 35vw;
    }

    .price h4 {
      font-weight: 700;
      margin-bottom: 20px;
    }

    .price a {
      margin: 20px 30px;
      text-decoration: none;
      color: #fff;
      background-color: rgb(19, 126, 197);
      padding: 10px 15px;
      border-radius: 5px;
      margin-top: 50px;
    }

  }
</style>

<div class="container-total-products">
  <div class="card" style="width: 18rem;">
    <img id="img-p" src="<?= $BASE_URL ?>/Imgs/<?= $current['img'] ?>" alt="">
    <div class="card-body">
      <h5 class="card-title"><?= $current['title'] ?></h5>
      <p class="card-text"><?= $current['description'] ?></p>
    </div>
  </div>

  <div class="price">
    <h4>Valor Tortal <?= $current['price'] ?> </h4>
    <a id="Comprar" href="finalizarCompra2.php?FinalizarCompra2=<?= $current['id'] ?>">Finalizar Compra</a>
  </div><!--price-->
</div><!--container total products-->

<?php


include_once "templates/footer.php"

?>