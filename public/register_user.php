<?php
include('../functions/head.php');
?>


<div class="container">
    <h5>Cadastrar representante de vendas</h5>
    <div class="card-panel">
        <form action="../includes/register_user.php" method="post" enctype="multipart/form-data">
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
            <div class="input-field">
                <input type="file" name="arquivo"><br>
                <label for="name">Foto(opcional)</label>
            </div>
            <div class="center">
                <input class="btn" type="submit" value="Cadastrar representante">
            </div>
        </form>
    </div>
</div>

</body>