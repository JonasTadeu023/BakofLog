<?php
session_start();
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
    <div class="card-panel center">
        <?php if (isset($_SESSION['cpf'])) : ?>
            <div class="center row">
                <?php if (empty($_SESSION['photo'])) : ?>
                    <img src="../generic-avatar.jpg" class="circle col s12">
                <?php else :
                        $src = "../database/user/" . $_SESSION['cpf'] . "/" . $_SESSION['photo'];   ?>
                    <img src="<?= $src ?>" class="circle col s12">
                <?php endif; ?>
                <span>Olá <?= $_SESSION['name'] ?></span>
            </div>


            <div class="row">
                <div class="col s12">
                    <a href='orders.php' class="btn-large waves-effect waves-heavy hoverable bakof-yellow" type="submit" name="action">Pedidos
                        <i class="material-icons right">assignment</i>
                    </a>
                </div>


                <div class="row">
                    <div class="col s12">
                        <a href='register_order.php' class="btn-large waves-effect waves-heavy hoverable bakof-yellow" type="submit" name="action">Pedidos
                            <i class="material-icons right">assignment</i>
                        </a>
                    </div>
                    <div class="col s12">
                        <a href='deliverys.php' class="btn-large waves-effect waves-heavy hoverable bakof-yellow">Entregas
                            <i class="material-icons right">event_note</i>
                        </a>
                    </div>
                    <div class="col s12">
                        <a href='carriers.php' class="btn-large waves-effect waves-heavy hoverable bakof-yellow">Freteiros
                            <i class="material-icons right">local_shipping</i>
                        </a>
                    </div>

                </div>
            <?php endif ?>
            <?php if (isset($_SESSION['car_cpf'])) : ?>
                <div class="center row">
                    <i class="material-icons large">local_shipping</i>
                    <h4>Olá <?= $_SESSION['name'] ?></h4>
                </div>

                <div class="row">
                    <div class="col s12">
                        <a href='deliverys.php' class="btn-large waves-effect waves-heavy hoverable bakof-yellow">Entregas
                            <i class="material-icons right">event_note</i>
                        </a>
                    </div>

                </div>
            <?php endif ?>
            </div>
</body>

</html>