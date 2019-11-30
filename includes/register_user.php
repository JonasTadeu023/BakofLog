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
$photo = $_FILES['arquivo'];
$type = $photo['type'];
$generic_type = imageTypeValidate($type);

if ($generic_type and uniqueCPF($cpf, $conn) and validadePassword($pwd1, $pwd2)) {
    
    $photo = "foto.$generic_type";
    $result = "INSERT INTO user (user_name, user_cpf, user_email, user_phone, user_photo, user_adm, user_pwd) 
    VALUES ('$name', '$cpf', '$email', '$phone', '$photo','0', '$pwd1')";
    $result_perfil = mysqli_query($conn, $result);
    echo (mysqli_error($conn));
    $userFolder = '../database/user/' . $cpf;
    
    mkdir($userFolder, 0777);

    if (!empty($photo)) {
        if (move_uploaded_file($_FILES['arquivo']['tmp_name'], "$userFolder/$photo")) {
            if ($conn->query($sql) == true) {
                $_SESSION['Cadastro concluido com sucesso!!!'] = true;
            }
            $conn->close();
            header('location: ../public/login_user.php');
            exit();
        }
    }
} else {
    header('location: ../public/register_user.php?erro=1');
}
