<?php
    include('../functions/head.php');
?>   

<p>Cadastrar representante</p>

<form action="../includes/register_user.php">
    <p>Nome do representante</p>
    <input type="text" placeholder="José de Alencar"><br>
    <p>CPF do representante</p>
    <input type="number" placeholder="04199078070"><br>
    <p>E-mail do representante</p>
    <input type="text" placeholder="jose@gmail.com"><br>
    <p>Número de celular do representante</p>
    <input type="number" placeholder="55 99156020"><br>
    <p>Senha do representante</p>
    <input type="text"><br>
    <input type="submit" value="Cadastrar representante">
</form>
