<?php
    session_start();
    include('dbh.php');
    $user_cpf = $_SESSION['user_cpf'];
    $order_location = mysqli_real_escape_string($conn, trim($_POST['order_location']));
    $order_products = mysqli_real_escape_string($conn, trim($_POST['order_products']));
    $order_client = mysqli_real_escape_string($conn, trim($_POST['order_client']));
    $c_alt = mysqli_real_escape_string($conn, trim($_POST['c_alt']));
    var_dump($_POST);
    var_dump($_POST['c_alt']);
    if(strlen($c_alt) == 14){
        $cnpj = (int)$c_alt;
        $cpf = 0;
    }
    else{
        $cpf = (int)$c_alt;
        $cnpj  = 0;
    }


    $result = "INSERT INTO `order`(user_cpf, order_status, order_location, order_time, order_products, order_client, order_cnpj, order_cpf) 
    VALUES ('$user_cpf', 'undone', '$order_location', NOW() ,'$order_products', '$order_client', '$cnpj', '$cpf')";
    $result_perfil = mysqli_query($conn, $result);
    var_dump($result);
    echo (mysqli_error($conn));
    $conn->close();


    //header('location: ../public/login_carrier.php');
    //exit();
?>