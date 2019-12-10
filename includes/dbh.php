<?php
    define('HOST', 'localhost');
    define('USUARIO', 'root');
    define('SENHA', '');
    define('DB', 'bakof_bd');

    $conn = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possivel conectar-se ao banco de dados');
?>
