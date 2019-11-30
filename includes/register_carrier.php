<?php
session_start();
include('dbh.php');
include('../functions/user_reg_validade.php');

$name = mysqli_real_escape_string($conn, trim($_POST['name']));
$cpf = mysqli_real_escape_string($conn, trim($_POST['cpf']));
$email = mysqli_real_escape_string($conn, trim($_POST['email']));
$phone = mysqli_real_escape_string($conn, trim($_POST['phone']));
$pwd1 = mysqli_real_escape_string($conn, trim(md5($_POST['pwd1'])));
$pwd2 = mysqli_real_escape_string($conn, trim(md5($_POST['pwd2'])));

if (uniqueCPF($cpf, $conn) and validadePassword($pwd1, $pwd2)) {

    $result = "INSERT INTO carrier (car_name, car_cpf, car_email, car_phone, car_pwd) 
    VALUES ('$name', '$cpf', '$email', '$phone', '$pwd1')";
    $result_perfil = mysqli_query($conn, $result);
    echo (mysqli_error($conn));
    $userFolder = '../database/carrier/' . $cpf;
    
    mkdir($userFolder, 0777);
    header('location: ../public/profile.php');
} else {
    header('location: ../public/register_carrier.php?erro=1');
}
