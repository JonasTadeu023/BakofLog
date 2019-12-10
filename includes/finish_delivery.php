<?php

session_start();
include_once "dbh.php";
include_once "../functions/user_reg_validade.php";


if(isset($_FILES['photo_note']) && isset($_FILES['photo_finish'])){
    if($_FILES['photo_note']['name'] != ""  && $_FILES['photo_finish'] != ""){
        if(!empty($_POST['100p']) || !empty($_POST['pa_check']) || !empty($_POST['pe_check']) || !empty($_POST['pf_check'])){

            
            $note = $_FILES['photo_note'];
            $finish = $_FILES['photo_finish'];
            $p = mysqli_real_escape_string($conn, $_POST['100p']);
            $pe = mysqli_real_escape_string($conn, $_POST['pe_check']);
            $pf = mysqli_real_escape_string($conn, $_POST['pf_check']);
            $pa = mysqli_real_escape_string($conn, $_POST['pa_check']);
            

            $problem;
            if($p == 'on'){
                $problem = '100p';
            }
            else{
                $problem = "Produto Avariado: " .  $pa . "<br> Produto faltando: " . $pf . "<br> Produto não encomendado: " . $pe;                
            }




                $note = "note.jpeg";
                $finish = "finish.jpeg";
                $del_id = $_SESSION['del_id'];

                var_dump($del_id);  

                $result = "UPDATE `delivery` SET `del_donedate` = NOW(), `del_entryphoto` = '$note', `del_finishphoto` = '$finish', `del_problems` = '$problem'  where del_id = $del_id";
                $result_perfil = mysqli_query($conn, $result);
                var_dump($result);
                echo (mysqli_error($conn));

                $select = "SELECT `order_id` from delivery where `del_id` = $del_id";
                $row = mysqli_fetch_assoc(mysqli_query($conn, $select));

                $sql = "UPDATE `order` SET `order_status` = 'done' where order_id =".  $row['order_id'];
                mysqli_query($conn, $sql);
                $userFolder = '../database/delivery/delivery' . $del_id;
    

                if (!empty($note) and !empty($finish)) {
                    if (move_uploaded_file($_FILES['photo_note']['tmp_name'], "$userFolder/$note") && move_uploaded_file($_FILES['photo_finish']['tmp_name'], "$userFolder/$finish")) {
                        $conn->close();
                        header('location: ../public/carrier/profile.php');
                        exit();
                    }
                }
        }
        else{
            header("location: ../public/carrier/finish_delivery.php");
            exit();
        }
    }
    else{
        header("location: ../public/carrier/finish_delivery.php");
        exit();
    }
}
else{
    header("location: ../public/carrier/finish_delivery.php");
    exit();
}