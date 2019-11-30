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
                    <label style='font-size:16px;' for="produtos">Produtos</label>
                    <textarea style='font-size:20px;' class="materialize-textarea" id="produtos" name='order_products' id='produtos' type="text" required></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <label style='font-size:16px;' for="client">Cliente</label>
                    <input style='font-size:20px;' name='order_client' id='client' type="text" required>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <label for="date">Data limite(ano-mês-dia)</label>
                    <input type="text" class="datepicker" id="date" name="date">
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

    <script src="../functions/datepicker.js"> </script>
</body>


</html>