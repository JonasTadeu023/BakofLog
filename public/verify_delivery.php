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
    
<div class="card-panel">
<table class="highlight centered center">
    <div class="row">
        <a href="profile.php" class="btn bakof-yellow col s2"><i class="material-icons">arrow_backward</i></a>
    </div>
   
        <thead>
            <tr>
                <th>Pedido</th>
                <th>Distribuidor</th>
                <th>Km</th>
                <th>Verificar</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>35</td>
                <td>Michael Juliao</td>
                <td>155km</td>
                <td><a href="../includes/verify_delivery.php"><i class="material-icons">info</i></a></td>
            </tr>
            <tr>
                <td>57</td>
                <td>Michael Juliao</td>
                <td>700km</td>
                <td><a href="../includes/verify_delivery.php"><i class="material-icons">info</i></a></td>
            </tr>
        </tbody>
    </table>
</div>
   

</body>

</html>