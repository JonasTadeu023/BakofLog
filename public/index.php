<?php
//include_once "../functions/not_needed_session.php";
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include_once "../functions/head.php"; ?>
    <title>BakofLog</title>
    <style>
        a {
            margin: 10px;
        }
    </style>
</head>

<body class="container bakof-blue">
    <div class="card-panel">
        <img src="../logo.png" class="responsive-img">
    </div>
    <div class="card-panel ">
        <h4 class="center-align">Entrar</h4>
        <h5 class="center-align">Você é:</h5>

        <div class="row">
            <a href='login_user.php' class="btn-large waves-effect waves-heavy hoverable col s12 bakof-yellow" type="submit" name="action">Representante
                <i class="material-icons right">supervisor_account</i>
            </a>
            <a href='login_carrier.php' class="btn-large waves-effect waves-heavy hoverable col s12 bakof-yellow">Freteiro
                <i class="material-icons right">local_shipping</i>
            </a>
        </div>
    </div>

</body>

</html>