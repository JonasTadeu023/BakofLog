<?php
session_start();
include "../../includes/dbh.php";

$cpf = $_SESSION['cpf'];
$sql = "SELECT order_id FROM `order` WHERE user_cpf = '$cpf' AND order_status = 'done'";
$result = $conn->query($sql);
echo $conn->error;
$orders = array();
while ($row = $result->fetch_assoc()) {
    array_push($orders, $row['order_id']);
}

foreach ($orders as $order_id) {
    $sql = "SELECT del_id, del_donedate, car_cpf FROM delivery WHERE order_id = $order_id";
    $data = $conn->query($sql);
    $orders = array();
}

while ($row = $result->fetch_assoc()) {
    array_push($orders, $row['order_id']);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include "../../functions/head.php" ?>
    <title>Entregas finalizadas</title>
</head>

<body class="container bakof-blue">
    <div class="card-panel">
        <div class="row">
            <a href="profile.php" class="btn bakof-yellow col s2"><i class="material-icons">arrow_backward</i></a>
            <a href='register_carrier.php' class="btn-large waves-effect waves-heavy hoverable bakof-yellow">Cadastrar freteiro
                <i class="material-icons right">local_shipping</i>
            </a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Entregador</th>
                    <th>Data de entrega</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_assoc()) :
                    $cpf = $row['car_cpf'];
                    $nome = $row['car_name'];
                    ?>
                    <tr>
                        <td><?= $nome ?></td>
                        <td><?= $cpf ?></td>
                        <td><a href="./dados_carrier.php?cpf=<?= $cpf ?>"><i class="material-icons">info</i></a></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

    </div>

</body>

</html>