<?php
session_start();
include "../../includes/dbh.php";
$car_cpf = $_GET['cpf'];

$sql_getname = "SELECT car_name from carrier where car_cpf = $car_cpf";
$getname = mysqli_fetch_assoc(mysqli_query($conn, $sql_getname));
echo mysqli_error($conn);


$sql = "SELECT * from delivery where car_cpf = $car_cpf";
$result = $conn->query($sql);


?> 
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include "../../functions/head.php" ?>
    <title>Freteiro_dados</title>
    <style>
        a {
            width: 100%;
        }

        div.col.s12 {
            margin: 10px;
        }

        a.btn {
            font-size: 10px;
            margin: 10px;
        }
    </style>
</head>

<body class="container bakof-blue">
    
<div class="card-panel">
<table class="highlight centered center">
    <div class="row">
        <a href="profile.php" class="btn bakof-yellow col s2"><i class="material-icons">arrow_backward</i></a>
    </div>
    <div class="row">
        <h5>CPF: <?=$car_cpf?></h5>
        <h6>Nome: <?=$getname['car_name']?></h6>
    </div>
   
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Prazo de Entrega</th>
                <th>Verificar</th>
            </tr>
        </thead>

        <tbody>
            <?php 
            while ($row = $result->fetch_assoc()):
                $cpf = $row['car_cpf'];
                $order_id = $row['order_id'];

                $sql2 ="SELECT order_client, order_deadline from `order` where order_id = $order_id  ";
                $order = $conn->query($sql2);
                $carrier = mysqli_fetch_assoc($order);
            ?>
            <tr> 
                <td><?=$carrier["order_client"];?></td>
                <td><?=$carrier["order_deadline"]?></td>
                <td><a href="../../includes/dados_carrier.php?cpf=<?=$cpf?>"><i class="material-icons">info</i></a></td>
            </tr>
            <?php endwhile;?>
        </tbody>
    </table>
</div>
   

</body>

</html>