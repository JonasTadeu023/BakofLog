<?php
include "../includes/dbh.php";
$type = $_POST['type'];

if ($type == 'user') {
    $cpf = $_POST['car_cpf'];
    $destino = $_POST['del_destiny'];
    $placa = $_POST['del_truck'];
    $id = $_POST['id'];

    $sql = "UPDATE delivery SET car_cpf = '$cpf', del_destiny = '$destino', del_truck = '$placa' WHERE del_id = $id";
    $conn->query($sql);
    $conn->close();
    header("location: ../public/carriers.php");
    exit();
}