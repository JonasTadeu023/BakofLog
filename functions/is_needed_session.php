<?php
    session_start();
    if(!isset($_SESSION['user_cpf']) and !isset($_SESSION['car_cpf'])){
        header("Location: index.php");
        exit();
    }
?>