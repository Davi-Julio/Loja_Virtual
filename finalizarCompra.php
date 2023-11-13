<?php

include_once "templates/header.php";

if (isset($_GET['FinalizarCompra'])) {
    $id = $_GET['FinalizarCompra'];
    $current;
    foreach ($infor2 as $value) {
        if ($value['id'] == $id) {
            $current = $value;
        }
    }
}


// Validação BackEnd

if (isset($_POST['confirmar'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $produto = $_POST['produto'];


    if ($name === "" || $email === "" || $produto === "") {
        echo 'Preencha os campos';
    } elseif ($produto === $current['title']) {
        echo 'Compra Feita Com Sucesso, Em breve você receberá instruções de pagamento no seu email cadastrado!';
    } elseif ($produto != $current['title']) {
        echo 'Nome Do produto inválido!';
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