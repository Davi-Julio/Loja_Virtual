<?php

include_once "templates/header.php";


/* Validação BackEnd */

if (isset($_POST['login'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $ConfirmPassword = $_POST['ConfirmPassword'];

    if ($name === '' || $email === '' || $password === '' || $ConfirmPassword === '') {
?>
        <div class="messenge">
            <script>
                alert("Preencha os Campos!")
            </script>
        </div><!--messenge-->
    <?php
    } elseif ($password === $ConfirmPassword) {
    ?>
        <div class="messenge">
            <script>
                alert("Login feito com sucesso em breve você receberá instruções no seu email!")
            </script>
        </div><!--messenge-->
    <?php
    } elseif ($password != $ConfirmPassword) {
    ?>
        <div class="messenge">
            <script>
                alert("Senhas Diferentes!")
            </script>
        </div><!--messenge-->
<?php
    }
}


?>

<div class="container-afiliado">
    <h2>Faça Seu Login e se torne noso afiliado!</h2>
</div><!--container afiliado-->

<form class="form" action="" method="post">

    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Nome:</label>
        <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Digite Seu Nome">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Email:</label>
        <input type="email" name="email" class="form-control" id="formGroupExampleInput2" placeholder="Digite Seu Email">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Senha:</label>
        <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Digite Sua Senha">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Confimrar Senha:</label>
        <input type="password" name="ConfirmPassword" class="form-control" id="formGroupExampleInput2" placeholder="Comfime Sua Senha">
    </div>
    <button type="submit" name="login" id="Btnlogin" class="btn btn-primary">Login</button>
</form><!--form-->

<?php

include_once "templates/footer.php"

?>