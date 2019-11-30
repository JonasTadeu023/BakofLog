<?php
    session_start();
    if(isset($_SESSION['user_cpf']) or isset($_SESSION['car_cpf'])){
        header("Location: profile.php");
        exit();
    }
?>