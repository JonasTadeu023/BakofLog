<?php
session_start();
include "../../includes/dbh.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include "../../functions/head.php" ?>
    <title>Perfil</title>
    <style>
        a {
            width: 100%;
        }

        div.col.s12 {
            margin: 10px;
        }

        .a {
            font-size: 10px;
        }
    </style>

</head>

<body class="container bakof-blue">
    <div class="card-panel">
    <?php if(isset($_GET['salvo'])): ?>
        <script>
         M.toast({html: "Alterações salvas"})
        </script>
    <?php endif ?>
    
        <?php if(isset($_SESSION['cpf'])):?>
            <table class="highlight centered center">
            
            <div class="row">
                <a href="profile.php" class="btn bakof-yellow col s2"><i class="material-icons">arrow_backward</i></a>
                
            </div>

            <thead>
                <tr>
                    <th>Cód Pedido</th>
                    <th>Cliente</th>
                    <th>Distribuidor</th>
                    <th>Verificar</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $cpf = $_SESSION['cpf'];
                $sql = "SELECT order_id FROM `order` WHERE user_cpf = '$cpf'";
                $result = $conn->query($sql);
                echo $conn->error;
                $pedidos = array();
                while ($row = $result->fetch_assoc()) {
                    array_push($pedidos, $row['order_id']);
                }

                foreach ($pedidos as $order_id) :
                    $sql = "SELECT order_id, car_cpf, del_id FROM `delivery` where order_id = $order_id";
                    $pedido = $conn->query($sql)->fetch_assoc();
                    echo $conn->error;
                    $carrier = empty($pedido['car_cpf']) ? 'Não especificado' : $pedido['car_cpf'];

                    $sql_client = "SELECT order_client from `order` where order_id = $order_id";
                    $client_name = mysqli_fetch_assoc(mysqli_query($conn, $sql_client));
                    ?>
                    <tr>
                        <td><?=$pedido['order_id']?></td>
                        <td><?=$client_name["order_client"]?></td>
                        <td><?=$carrier?></td>
                        <td><a href="./edit_delivery.php?id=<?=$pedido['del_id']?>"><i class="material-icons">info</i></a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <?php else: ?>
            <table class="highlight centered center">
            <div class="row">
                <a href="profile.php" class="btn bakof-yellow col s2"><i class="material-icons">arrow_backward</i></a>
                <h5 class="col s12">Entregas</h5>                

            </div>

            <thead>
                <tr>
                    <th>Cód Pedido</th>
                    <th>Cód Entrega</th>
                    <th>Distribuidor</th>
                    <th>Editar</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $cpf = $_SESSION['car_cpf'];
                $sql = "SELECT del_id FROM `delivery` WHERE car_cpf = '$cpf'";
                $result = $conn->query($sql);
                echo $conn->error;
                $pedidos = array();
                while ($row = $result->fetch_assoc()) {
                    array_push($pedidos, $row['del_id']);
                }

                foreach ($pedidos as $del_id) :
                    $sql = "SELECT order_id, car_cpf, del_id FROM `delivery` where del_id = $del_id";
                    $pedido = $conn->query($sql)->fetch_assoc();
                    echo $conn->error;
                    $carrier = empty($pedido['car_cpf']) ? 'Não especificado' : $pedido['car_cpf'];
                    ?>
                    <tr>
                        <td><?=$pedido['order_id']?></td>
                        <td><?=$pedido['del_id']?></td>
                        <td><?=$carrier?></td>
                        <td><a href="./saida.php?id=<?=$pedido['del_id']?>"><i class="material-icons">edit</i></a></td>
                    </tr>
                <?php endforeach ?>
        <?php endif ?>
    </div>


</body>

</html>