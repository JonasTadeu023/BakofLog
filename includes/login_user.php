<?php
    if(isset($_POST['cpf']) && isset($_POST['password'])){
        if(!empty($_POST['cpf']) and !empty($_POST['password'])){
            
            session_start();
            include_once 'dbh.php';

            $cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
            $pass = mysqli_real_escape_string($conn, $_POST['password']);
            $pass = md5($pass);

            $query = "SELECT * from user where user_cpf = '$cpf';";
            $result = mysqli_query($conn, $query);
            
            if (mysqli_num_rows($result) != 1) {
                $_SESSION['erro_login'] = "Usuario não cadastrado!";
                header('Location: ../public/login_user.php');
                exit();
            } 
            
            else {
                $row = mysqli_fetch_assoc($result);
                if ($row['user_pwd'] == $pass) {
                    $_SESSION['user_cpf'] = $row['user_cpf'];
                    $_SESSION['user_name'] = $row['user_name'];
                    $_SESSION['user_phone'] = $row['user_phone'];
                    $_SESSION['user_email'] = $row['user_email'];
                    $_SESSION['user_photo'] = $row['user_photo'];
                    $_SESSION['user_adm'] = $row['user_adm'];
                    
                    header("location: ../public/profile.php");
                    exit();
                } 
                
                else {
                    header('Location: ../public/login_user.php');
                    exit();
                }
            }
        }

        else{
            header("location: ../public/login_user.php");
            exit();
        }
    } 
    
    else{
        header("location: ../public/login_user.php");
        exit();
    }
?>