<?php
session_start();
include "../../includes/dbh.php";

$sql = "SELECT car_cpf, car_name FROM carrier";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include "../../functions/head.php" ?>
    <title>Freteiros</title>
    <style>
        a {
            width: 100%;
        }

        div.col.s12 {
            margin: 10px;
        }

        a.btn {
            font-size: 10px;
            margin: 10px;
        }
    </style>
</head>

<body class="container bakof-blue">
    
<div class="card-panel">
<table class="highlight centered center">
    <div class="row">
        <a href="profile.php" class="btn bakof-yellow col s2"><i class="material-icons">arrow_backward</i></a>
        <a href='register_carrier.php' class="btn-large waves-effect waves-heavy hoverable bakof-yellow">Cadastrar freteiro
                <i class="material-icons right">local_shipping</i>
        </a>
    </div>
   
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Verificar</th>
            </tr>
        </thead>

        <tbody>
            <?php 
            while ($row = $result->fetch_assoc()):
                $cpf = $row['car_cpf'];
                $nome =$row['car_name'];
            ?>
            <tr> 
                <td><?=$nome?></td>
                <td><?=$cpf?></td>
                <td><a href="./dados_carrier.php?cpf=<?=$cpf?>"><i class="material-icons">info</i></a></td>
            </tr>
            <?php endwhile;?>
        </tbody>
    </table>
</div>
   
<div class="card-panel">
        <img src="../../logo.png" class="responsive-img">
    </div>
</body>

</html>