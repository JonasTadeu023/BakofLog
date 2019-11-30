<?php

session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include "../functions/head.php"; ?>
    <title>Registrar entrega</title>
</head>

<body class="container bakof-blue">
    <div class="card-panel">
        <h4 class="center-align">Registrar nova entrega</h4>
        <br>
        <form action="../includes/register_delivery.php" method='POST'>
            <div class="row">
                <div class="col s12">
                    <label for="user">Local de saída da mercadoria (CEP)</label>
                    <input name='del_pointA' id='user' type="number" required>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <label for="user">Local de entrega da mercadoria (CEP)</label>
                    <input name='del_pointB' id='user' type="number" required>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="icon_prefix" type="text" name="bairro" class="validate">
                    <label for="icon_prefix">Bairro</label>
                </div>

            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="icon_telephone" type="tel" name="rua" class="validate">
                    <label for="icon_telephone">Rua e número do local</label>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <label for="entregador">CPF do Entregador(apenas números)</label>
                    <input name='car_cpf' id='entregador' type="number" required>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="center-align" style='margin-top:30px;'>
                        <button class="btn-large waves-effect waves-heavy hoverable bakof-yellow" type="submit" name="action">Registrar
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>

</html>