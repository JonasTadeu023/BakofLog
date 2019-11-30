<?php
    if(isset($_POST['cpf']) && isset($_POST['password'])){
        if(!empty($_POST['cpf']) and !empty($_POST['password'])){
            
            session_start();
            include_once 'dbh.php';

            $cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
            $pass = mysqli_real_escape_string($conn, $_POST['password']);
            $pass = md5($pass);

            $query = "SELECT * from carrier where car_cpf = '$cpf';";
            $result = mysqli_query($conn, $query);
            
            if (mysqli_num_rows($result) != 1) {
                $_SESSION['erro_login'] = "Usuario não cadastrado!";
                header('Location: ../public/login_carrier.php');
                exit();
            } 
            
            else {
                $row = mysqli_fetch_assoc($result);
                if ($row['car_pwd'] == $pass) {
                    $_SESSION['car_cpf'] = $row['car_cpf'];
                    $_SESSION['car_name'] = $row['car_name'];
                    $_SESSION['car_phone'] = $row['car_phone'];
                    $_SESSION['car_email'] = $row['car_email'];
                    $_SESSION['car_solo'] = $row['car_solo'];
                    
                    header("location: ../public/login_carrier.php");
                    exit();
                } 
                
                else {
                    header('Location: ../public/login_carrier.php');
                    exit();
                }
            }
        }

        else{
            header("location: ../public/login_carrier.php");
            exit();
        }
    } 
    
    else{
        header("location: ../public/login_carrier.php");
        exit();
    }
?>