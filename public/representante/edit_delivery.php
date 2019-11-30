<?php
session_start();
include "../../includes/dbh.php";

$sql = "SELECT * FROM delivery WHERE del_id =" . $_GET['id'];
$dados = $conn->query($sql)->fetch_assoc();

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

        <div class="row">
            <a href="profile.php" class="btn bakof-yellow col s2"><i class="material-icons">arrow_backward</i></a>
        </div>
        <h4 class="center-align">Entrega</h4>
        <br>
        <form action="../../includes/save_delivery.php" method='POST' enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                <input type="hidden" name="type" value="user">
                <div class="row">
                    <div class="col s12">
                        <label for="motorista">Motorista(CPF)</label>
                        <input value="<?= $dados['car_cpf'] ?>" id="motorista" name='car_cpf' id='motorista' type="text" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <label for="destiny">Destino(CEP, Bairro, Rua)</label>
                        <textarea name='del_destiny' id='destiny' type="text" class="materialize-textarea" required><?= $dados['del_destiny'] ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <label for="placa">Placa do caminhão</label>
                        <input name='del_truck' id='placa' type="text" value="<?= $dados['del_truck'] ?>" required>
                    </div>
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