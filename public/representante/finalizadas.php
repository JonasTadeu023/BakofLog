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

$d = array();

foreach ($orders as $order_id) {
    $sql = "SELECT del_id, del_donedate, car_cpf FROM delivery WHERE order_id = $order_id";
    $dados = $conn->query($sql)->fetch_assoc();
    array_push($d, $dados);
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
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Código da entrega</th>
                    <th>Entregador</th>
                    <th>Data de entrega</th>
                    <th>Ver mais</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($d as $dta) :
                    $cpf = $dta['car_cpf'];
                    $id = $dta['del_id'];
                    $data = $dta['del_donedate'];
                    ?>
                    <tr>
                        <td><?= $id ?></td>
                        <td><?= $cpf ?></td>
                        <td><?= $data ?></td>
                        <td><a href="./finalizada.php?id=<?= $id ?>"><i class="material-icons">info</i></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

</body>

</html>