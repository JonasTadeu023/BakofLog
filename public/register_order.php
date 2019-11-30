<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../functions/head.php" ?>
    <title>Registar pedido</title>
</head>

<body class="container bakof-blue">
    <div class="card-panel">
        <div class="row">
            <a href="profile.php" class="btn bakof-yellow col s2"><i class="material-icons">arrow_backward</i></a>
        </div>
        <h4 class="center-align">Registrar pedido</h4>
        <br>
        <form action="../includes/register_order.php" method='POST'>
            <div class="row">
                <div class="col s12">
                    <label style='font-size:16px;' for="user">Local</label>
                    <input style='font-size:20px;' name='order_location' id='user' type="text" required>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <label style='font-size:16px;' for="user">Produtos</label>
                    <input style='font-size:20px;' name='order_products' id='user' type="text" required>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <label style='font-size:16px;' for="user">Cliente</label>
                    <input style='font-size:20px;' name='order_client' id='user' type="text" required>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <label style='font-size:16px;' for="user">CPF/CNPJ</label>
                    <input style='font-size:20px;' name='c_alt' id='user' type="text" required>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <div class="center-align" style='margin-top:30px;'>
                        <button class="btn-large waves-effect waves-heavy hoverable bakof-yellow" type="submit" name="action">Enviar
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>


</html>