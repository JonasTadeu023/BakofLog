<?php
    session_start();
    include('dbh.php');

    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $cpf = mysqli_real_escape_string($conn, trim($_POST['cpf']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $phone = mysqli_real_escape_string($conn, trim($_POST['phone']));
    $pwd = mysqli_real_escape_string($conn, trim(md5($_POST['pwd'])));
    $solo = mysqli_real_escape_string($conn, trim($_POST['solo']));

    $sql = "SELECT count(*) as total from car where car_cpf = '$cpf'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row['total'] > 1) {
      $_SESSION['Usuario com este CPF já existe!!!'] = true;
      header('location: ../index.html');
      $conn->close();
      exit();
    }

    $result = "INSERT INTO carrier (car_name, car_cpf, car_email, car_phone, car_solo, car_pwd) 
    VALUES ('$name', '$cpf', '$email', '$phone','$solo', '$pwd')";
    $result_perfil = mysqli_query($conn, $result);
    $conn->close();
    header('location: ../public/login_carrier.php');
    exit();
?>