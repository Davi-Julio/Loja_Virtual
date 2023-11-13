<?php

include_once "templates/header.php";


if (isset($_GET['FinalizarCompra2'])) {
    $id = (int) $_GET['FinalizarCompra2'];
    $current;

    foreach ($infor as $value) {
        if ($value['id'] == $id) {
            $current = $value;
        }
    }


    // validação backEnd


    if (isset($_POST['confirmar'])) {
        $nome = $_POST['name'];
        $email = $_POST['email'];
        $produto = $_POST['produto'];


        if ($nome === "" || $email === "" || $produto === "") {
            echo 'Preencha os campos';
        } elseif ($produto === $current['title']) {
            echo 'Compra Feita Com Sucesso, Em breve você receberá instruções de pagamento no seu email cadastrado!';
        } elseif ($produto != $current['title']) {
            echo 'Produto inválido!';
        }
    }
}
?>
<form class="form" method="post" action="">
    <span><?= $current['title'] ?></span>
    <span><?= $current['price'] ?></span>
    <span id="messenge"></span>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Digite Seu Nome:</label>
        <input required type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Digite Seu Nome">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Digite Seu Email:</label>
        <input required type="text" name="email" class="form-control" id="formGroupExampleInput2" placeholder="Digite Seu Email">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Confirme O Nome Do seu Produto:</label>
        <input required type="text" name="produto" class="form-control" id="formGroupExampleInput2" placeholder="Confirme O Nome Do seu Produto:">
    </div>
    <input type="submit" id="confirmar" name="confirmar" value="Confirmar">
</form><!--form-->


<?php

include_once "templates/footer.php"

?>