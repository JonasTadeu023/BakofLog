<?php
    include('../functions/head.php');
?>   

<p>Cadastrar representante</p>

<form action="../includes/register_user.php" method="POST" enctype="multipart/form-data">
    <p>Nome do representante</p>
    <input type="text" placeholder="José de Alencar" name="name"><br>
    <p>CPF do representante</p>
    <input type="number" placeholder="04199078070" name="cpf"><br>
    <p>E-mail do representante</p>
    <input type="text" placeholder="jose@gmail.com" name="email"><br>
    <p>Número de celular do representante</p>
    <input type="number" placeholder="55 99156020" name="phone"><br>
    <p>Foto de perfil do representante</p>
    <input type="file"  name="arquivo"><br>
    <p>Senha do representante</p>
    <input type="text" name="pwd"><br>
    <input type="submit" value="Cadastrar representante">
</form>
</body>