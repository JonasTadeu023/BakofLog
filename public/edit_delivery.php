<?php
session_start();
include "../includes/dbh.php";

$sql = "SELECT * FROM delivery WHERE del_id =". $_GET['id'];
$dados = $conn->query($sql)->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include "../functions/head.php" ?>
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
        <form action="../includes/save_delivery.php" method='POST' enctype="multipart/form-data">
            <?php if (isset($_SESSION['cpf'])) : ?>
                <input type="hidden" name="id" value="<?=$_GET['id']?>">
                <input type="hidden" name="type" value="user">
                <div class="row">
                    <div class="col s12">
                        <label style='font-size:16px;' for="motorista">Motorista(CPF)</label>
                        <input style='font-size:20px;' value="<?=$dados['car_cpf']?>" id="motorista" name='car_cpf' id='motorista' type="text" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <label style='font-size:16px;' for="destiny">Destino</label>
                        <input style='font-size:20px;' name='del_destiny' id='destiny' type="text" value="<?=$dados['del_destiny']?>" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <label style='font-size:16px;' for="placa">Placa do caminhão</label>
                        <input style='font-size:20px;' name='del_truck' id='placa' type="text" value="<?=$dados['del_truck']?>" required>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (isset($_SESSION['car_cpf'])) : ?>
                <input type="hidden" name="id" value="<?=$_GET['id']?>">
                <input type="hidden" name="type" value="carrier">
                <div class="row">
                    <div class="col s12">
                        <label style='font-size:16px;' for="motorista">Local de saída</label>
                        <input style='font-size:20px;' id="motorista" name='del_exit' id='motorista' type="text" required value="<?=$dados['del_exit']?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <label style='font-size:16px;' for="problemas">Problemas</label>
                        <input style='font-size:20px;' name='del_problems' id='problemas' type="text" value="<?=$dados['del_problems']?>" required>
                    </div>
                </div>
                <div class="file-field input-field">
                    <div class="btn bakof-yellow">
                        <span>Foto do carregamento</span>
                        <input type="file" name="carregamento">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
                <div class="file-field input-field">
                    <div class="btn bakof-yellow">
                        <span>Foto da nota</span>
                        <input type="file" name="notafiscal">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
                <div class="file-field input-field">
                    <div class="btn bakof-yellow">
                        <span>Foto do canhoto</span>
                        <input type="file" name="canhoto">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <label style='font-size:16px;' for="del_donedate">Fim da entrega</label>
                        <input style='font-size:20px;'value="<?=$dados['del_donedate']?>" class="datepicker" id="del_donedate" name='del_donedate' type="text" required>
                    </div>
                </div>
                <script src="../functions/datepicker.js"></script>
            <?php endif ?>
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