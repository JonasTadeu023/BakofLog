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

        .bakof-yellow {
            margin: 10px;
        }
    </style>

</head>

<body class="container bakof-blue">
    <div class="card-panel">
        <?php if (isset($_GET['salvo'])) : ?>
            <script>
                M.toast({
                    html: "Alterações salvas"
                })
            </script>
        <?php endif ?>

        <table class="highlight centered center">

            <div class="row">
                <a href="profile.php" class="btn bakof-yellow col s2"><i class="material-icons">arrow_backward</i></a>
                <a href='./finalizadas.php' class="btn-large waves-effect waves-heavy hoverable bakof-yellow">Entregas finalizadas
                    <i class="material-icons right">local_shipping</i>
                </a>
            </div>

            <thead>
                <tr>
                    <th>Cód Pedido</th>
                    <th>Cliente</th>
                    <th>Distribuidor</th>
                    <th>Editar</th>
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
                        <td><?= $pedido['order_id'] ?></td>
                        <td><?= $client_name["order_client"] ?></td>
                        <td><?= $carrier ?></td>
                        <td><a href="./edit_delivery.php?id=<?= $pedido['del_id'] ?>"><i class="material-icons">edit</i></a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <div class="card-panel">
        <img src="../../logo.png" class="responsive-img">
    </div>
</body>

</html>