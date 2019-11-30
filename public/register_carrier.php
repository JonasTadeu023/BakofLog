<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include "../functions/head.php" ?>
    <title>Registrar Freteiro</title>
</head>

<body class="bakof-blue ">
    <div class="container">
        <div class="card-panel">
            <div class="row">
                <a href="profile.php" class="btn bakof-yellow col s2"><i class="material-icons">arrow_backward</i></a>
            </div>
            <div class="row">
                <div class="center header">
                    <i class="material-icons small">local_shipping</i>
                    <h5>Cadastrar Freteiro</h5>
                </div>
            </div>
            <?php if (isset($_GET['erro'])) : ?>
                <div class="center">
                    <span class="white-text red">Dados inválidos</span>
                </div>
            <?php endif; ?>
            <form action="../includes/register_carrier.php" method="post" enctype="multipart/form-data">
                <div class="input-field">
                    <input type="text" name="name" id="name" required>
                    <label for="name">Nome</label>
                </div>
                <div class="input-field">
                    <input type="text" name="cpf" id="cpf" required>
                    <label for="cpf">CPF</label>
                </div>
                <div class="input-field">
                    <input type="email" name="email" id="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-field">
                    <input type="tel" name="phone" id="phone" required>
                    <label for="phone">Telefone</label>
                </div>
                <div class="input-field">
                    <input type="password" name="pwd1" id="pwd1" required>
                    <label for="pwd1">Senha</label>
                </div>
                <div class="input-field">
                    <input type="password" name="pwd2" id="pwd2" required>
                    <label for="pwd2">Confirme a senha</label>
                </div>
                <div class="center">
                    <input class="btn bakof-yellow" type="submit" value="Cadastrar freteiro">
                </div>
            </form>

        </div>
</body>

</html>