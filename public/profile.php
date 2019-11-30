<?php
session_start();
include "../functions/head.php";
var_dump($_SESSION);
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

    div.col.s12{
        margin: 10px;
    }

    </style>
</head>

<body class="container bakof-blue">
    <div class="card-panel center">
        <div class="center row">
            <img src="../generic-avatar.jpg" class="circle col s12">
            <span>Olá <?= $_SESSION['name'] ?></span>
        </div>
        

        <div class="row">
            <div class="col s12">
                <a href='login_user.php' class="btn-large waves-effect waves-heavy hoverable bakof-yellow" type="submit" name="action">Minhas tarefas
                    <i class="material-icons right">assignment</i>
                </a>
            </div>
            <div class="col s12">
                <a href='login_carrier.php' class="btn-large waves-effect waves-heavy hoverable bakof-yellow">Relatar entrega
                    <i class="material-icons right">event_note</i>
                </a>
            </div>
            <div class="col s12">
                <a href='login_carrier.php' class="btn-large waves-effect waves-heavy hoverable bakof-yellow">Entregas feitas
                    <i class="material-icons right">event_available</i>
                </a>
            </div>

        </div>
    </div>
</body>

</html>