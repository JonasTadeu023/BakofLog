<?php
session_start();
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
    <div class="card-panel center">

        <div class="center row">
            <i class="material-icons large">local_shipping</i>
            <h4>Olá <?= $_SESSION['car_name'] ?></h4>
        </div>

        <div class="row">
            <div class="col s12">
                <a href='jobs.php' class="btn-large waves-effect waves-heavy hoverable bakof-yellow">Entregas
                    <i class="material-icons right">event_note</i>
                </a>
            </div>

        </div>
    </div>
</body>

</html>