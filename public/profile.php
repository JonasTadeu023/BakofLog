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

    div.col.s12{
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
            <img src="../generic-avatar.jpg" class="circle col s12">
            <span>Olá <?= $_SESSION['name'] ?></span>
        </div>
        

        <div class="row">
            <div class="col s12">
                <a href='register_delivery.php' class="btn-large waves-effect waves-heavy hoverable bakof-yellow" type="submit" name="action">Registrar entrega
                    <i class="material-icons right">assignment</i>
                </a>
            </div>
            <div class="col s12">
                <a href='verify_delivery.php' class="btn-large waves-effect waves-heavy hoverable bakof-yellow">Verificar entregas
                    <i class="material-icons right">event_note</i>
                </a>
            </div>

        </div>
    </div>
</body>

</html>