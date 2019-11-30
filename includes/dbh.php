<?php
    define('HOST', 'localhost');
    define('USUARIO', 'dar');
    define('SENHA', 'usbw');
    define('DB', 'bakof_bd');

    $conn = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possivel conectar-se ao banco de dados');
?>
