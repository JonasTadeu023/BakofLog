<?php
include "../includes/dbh.php";
include "../functions/user_reg_validade.php";

$type = $_POST['type'];

if ($type == 'user') {
    $cpf = $_POST['car_cpf'];
    $destino = $_POST['del_destiny'];
    $placa = $_POST['del_truck'];
    $id = $_POST['id'];

    $sql = "UPDATE delivery SET car_cpf = '$cpf', del_destiny = '$destino', del_truck = '$placa' WHERE del_id = $id";
    $conn->query($sql);
    $conn->close();
<<<<<<< HEAD
    $conn->close();
    header('location: ../public/profile.php');
    exit();
}
=======
    header("Location: ../public/deliverys.php");
} elseif ($type == 'carrier') {
    $saida = $_POST['del_exit'];
    $fim = $_POST['del_donedate'];
    $problemas = $_POST['del_problems'];
    $id = $_POST['id'];

    $sql = "UPDATE delivery SET del_exit = '$saida', del_donedate = '$fim', del_problems = '$problemas' WHERE del_id = $id";
    $conn->query($sql);

    var_dump($_FILES);
    $carregamento = $_FILES['carregamento'];
    $notafiscal = $_FILES['notafiscal'];
    $canhoto = $_FILES['canhoto'];

    if (!empty($carregamento['name'])) {
        $type = imageTypeValidate($carregamento['type']);
        $file = "../database/delivery/delivery$id/carregamento.$type";
        move_uploaded_file($carregamento['tmp_name'], $file);
        $sql = "UPDATE delivery SET del_loadphoto = '$file' WHERE del_id = $id";   
        $conn->query($sql); 
    }
    if (!empty($notafiscal['name'])) {
        $type = imageTypeValidate($notafiscal['type']);
        move_uploaded_file($notafiscal['tmp_name'], "../database/delivery/delivery$id/nota.$type");
        $sql = "UPDATE delivery SET del_entryphoto = '$file' WHERE del_id = $id";
        $conn->query($sql);        
    }
    if (!empty($canhoto['name'])) {
        $type = imageTypeValidate($canhoto['type']);
        move_uploaded_file($canhoto['tmp_name'], "../database/delivery/delivery$id/canhoto.$type");
        $sql = "UPDATE delivery SET del_finishphoto = '$file' WHERE del_id = $id";
        $conn->query($sql);
           
    }
    echo $conn->error;     

    $conn->close();
    header("Location: ../public/deliverys.php?salvo=1");

}
>>>>>>> ecb9ad646eeccc3d4d7b9ff07a10038f58071c34
