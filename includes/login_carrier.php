<?php
    if(isset($_POST['cpf']) && isset($_POST['password'])){
        if(!empty($_POST['cpf']) and !empty($_POST['password'])){
            
            session_start();
            include_once 'dbh.php';

            $user = mysqli_real_escape_string($conn, $_POST['cpf']);
            $pass = mysqli_real_escape_string($conn, $_POST['password']);
            $pass = md5($pass);

            $query = "SELECT * from user where user_name = '$user';";
            $result = mysqli_query($conn, $query);
            
            if (mysqli_num_rows($result) != 1) {
                $_SESSION['erro_login'] = "Usuario não cadastrado!";
                header('Location: ../login.php');
                exit();
            } else {
                $row = mysqli_fetch_assoc($result);
                if ($row['user_password'] == $pass) {
                    $_SESSION['user_id'] = $row['user_id'];
                    $_SESSION['user_image'] = $row['user_image'];
                    $_SESSION['user_name'] = $row['user_name'];
                    $_SESSION['user_email'] = $row['user_email'];
                    $_SESSION['user_level'] = $row['user_level'];
                    header("location: ../index.php");
                    exit();
                } else {
                    header('Location: ../login.php');
                    exit();
                }
            }
        }
        else{
            header("location: index.php");
            exit();
        }
    } 
    
    else{
        header("location: index.php");
        exit();
    }
?>