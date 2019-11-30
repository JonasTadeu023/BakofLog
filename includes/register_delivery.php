<?php
 echo"FODA";
    session_start();
    include('dbh.php');
    
    $del_pointA = mysqli_real_escape_string($conn, trim($_POST['del_pointA']));
    $del_pointB = mysqli_real_escape_string($conn, trim($_POST['del_pointB']));
    $bairro = mysqli_real_escape_string($conn, trim($_POST['bairro']));
    $rua = mysqli_real_escape_string($conn, trim($_POST['rua']));
    $del_note = $_FILES['arquivo']['name'];
    $del_problem = mysqli_real_escape_string($conn, trim($_POST['distribuidor']));

    var_dump($_POST);

    $result = "INSERT INTO delivery(del_exit, del_destiny, del_pointB, del_note, del_problem, car_cpf, order_id) 
    VALUES (NOW(), '$del_pointA', '$del_pointB', '$del_note','$del_problem', '$car_cpf',$order_id)";
    $result_perfil = mysqli_query($conn, $result);

    echo (mysqli_error($conn));
    $user = '../database/delivery/ ';
    mkdir($user, 0777);

    if (move_uploaded_file($_FILES['arquivo']['tmp_name'],$car_cpf.$del_note)) {
      if ($conn->query($sql) == TRUE) {
          $_SESSION['Cadastro concluido com sucesso!!!'] = true;
        }
        $conn->close();
        //header('location: ../public/login_user.php');
        //exit();


    //header('location: ../public/login_carrier.php');
    //exit();
    }
?>