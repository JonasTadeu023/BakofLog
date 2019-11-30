<?php
    session_start();
    include('dbh.php');

    $com_cnpj = mysqli_real_escape_string($conn, trim($_POST['com_cnpj']));
    $com_name = mysqli_real_escape_string($conn, trim($_POST['com_name']));




    $result = "INSERT INTO `company`(com_cnpj, com_name) 
    VALUES ($com_cnpj, '$com_name')";
    $result_perfil = mysqli_query($conn, $result);
    var_dump($result);
    echo mysqli_error($conn);
    $conn->close();


    //header('location: ../public/login_carrier.php');
    //exit();
?>