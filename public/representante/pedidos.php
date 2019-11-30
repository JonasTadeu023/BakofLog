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
        <table class="highlight centered center">
            <div class="row">
                <a href="profile.php" class="btn bakof-yellow col s2"><i class="material-icons">arrow_backward</i></a>
            </div>
            <a href='register_order.php' class="btn-large waves-effect waves-heavy hoverable bakof-yellow">Cadastrar Pedido
                <i class="material-icons right">local_shipping</i>
            </a>

            <thead>
                <tr>
                    <th>Cód. Pedido</th>
                    <th>Prazo Entrega</th>
                    <th>Cliente</th>
                    <th>Produtos</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT * FROM `order` WHERE order_status = 'undone' and user_cpf = " . $_SESSION['cpf'];
                $result = $conn->query($sql);
                echo $conn->error;
                while ($row = $result->fetch_assoc()) :
                ?>
                    <tr>
                        <td><?=$row['order_id']?></td>
                        <td><?=$row['order_deadline']?></td>
                        <td><?=$row['order_client']?></td>
                        <td><?=$row['order_products']?></td>
                    </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>


</body>

</html>