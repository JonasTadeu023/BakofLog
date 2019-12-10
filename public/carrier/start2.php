<?php
    session_start();
    include "../../includes/dbh.php";

    $latitude = $_GET['latitude'];
    $longitude = $_GET['longitude'];

    $del_id = $_SESSION['del_id'];
    $ok = $_SESSION['car_cpf'];
    $date = date("Y-m-d H:i:s");

    $result = "INSERT INTO localization (loc_latitude, loc_longitude, del_id, car_cpf, loc_date) 
    VALUES ('$latitude', '$longitude', '$del_id', '$ok', NOW())";
    $result_perfil = mysqli_query($conn, $result);

    if($result_perfil){
       header('location: ../carrier/map.php');
    }
?>