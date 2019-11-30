<?php
include '../../includes/dbh.php';
session_start();
$id = $_GET['id'];

$sql = "SELECT * FROM delivery WHERE del_id = $id";
$entrega = $conn->query($sql)->fetch_assoc();
$sql = "SELECT * FROM `order` WHERE order_id =" . $entrega['order_id'];
$pedido = $conn->query($sql)->fetch_assoc();
$src = "../../database/delivery$id/";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include "../../functions/head.php" ?>
    <title>Finalizada</title>
</head>

<body class="container bakof-blue">
    <div class="card-panel">
        <img src="../../logo.png" class="responsive-img">
    </div>
    <div class="card-panel">
        <h5>Representante</h5>
        <p><?= $pedido['user_cpf'] ?></p>
        <h5>Entregador</h5>
        <p><?= $entrega['car_cpf'] ?></p>
        <h5>Produtos</h5>
        <p><?= $pedido['order_products'] ?></p>
        <h5>Veículo</h5>
        <p><?= $entrega['del_truck'] ?></p>
        <h5>Data de saída</h5>
        <p><?= $entrega['del_exit'] ?></p>
        <h5>Data de entrega</h5>
        <p><?= $entrega['del_donedate'] ?></p>
        <h5>Data prevista</h5>
        <p><?= $pedido['order_deadline'] ?></p>
        <h5>Carregamento</h5>
        <img src="<?= $src.$entrega['del_loadphoto']?>" class="responsive-img">
        <h5>Nota</h5>
        <img src="<?= $src.$entrega['del_entryphoto']?>" class="responsive-img">
        <h5>Canhoto</h5>
        <img src="<?= $src.$entrega['del_finishphoto']?>" class="responsive-img">
        <h5>Problemas</h5>
        <p><?= $entrega['del_problems'] ?></p>
    </div>
</body>

</html>