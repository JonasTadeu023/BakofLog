<?php
    session_start();
    include('dbh.php');

    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $cpf = mysqli_real_escape_string($conn, trim($_POST['cpf']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $phone = mysqli_real_escape_string($conn, trim($_POST['phone']));
    $pwd = mysqli_real_escape_string($conn, trim(md5($_POST['pwd'])));
    $image = $_FILES['arquivo']['name'];

    $sql = "SELECT count(*) as total from user where user_cpf = '$cpf'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row['total'] == 1) {
      $_SESSION['Usuario com este CPF já existe!!!'] = true;
      header('location: ../index.html');
      $conn->close();
      exit();
    }

    $result = "INSERT INTO user (user_name, user_cpf, user_email, user_phone, user_photo, user_adm, user_pwd) 
    VALUES ('$name', '$cpf', '$email', '$phone', '$image','1', '$pwd')";
    $result_perfil = mysqli_query($conn, $result);
    echo (mysqli_error($conn));
    $user = '../database/user/'.$cpf.'/';
    mkdir($user, 0777);

    if (move_uploaded_file($_FILES['arquivo']['tmp_name'],$user.$image)) {
      if ($conn->query($sql) == TRUE) {
          $_SESSION['Cadastro concluido com sucesso!!!'] = true;
        }
        $conn->close();
        header('location: ../public/login_user.php');
        exit();
    }
?>