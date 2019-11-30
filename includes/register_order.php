<?php
    session_start();
    include('dbh.php');
    $user_cpf = $_SESSION['cpf'];
    $order_products = mysqli_real_escape_string($conn, trim($_POST['order_products']));
    $order_client = mysqli_real_escape_string($conn, trim($_POST['order_client']));
    $order_deadline = mysqli_real_escape_string($conn, trim($_POST['date']));

    $result = "INSERT INTO `order`(user_cpf, order_status, order_products, order_client, order_deadline) 
    VALUES ('$user_cpf', 'undone', '$order_products', '$order_client', '$order_deadline')";
    $result_perfil = mysqli_query($conn, $result);
    echo (mysqli_error($conn));
    $lastid = mysqli_insert_id($conn);
    $result = "INSERT INTO delivery(order_id) VALUES ($lastid)";
    $result_perfil = mysqli_query($conn, $result);
   
    
    $lastid = mysqli_insert_id($conn);
    $folder = "../database/delivery/delivery$lastid/";
    mkdir($folder, 0777);
    $conn->close();
    header('location: ../public/representante/pedidos.php');
    exit();
