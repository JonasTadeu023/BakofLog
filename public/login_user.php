<?php
//include_once "../functions/not_needed_session.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include "../functions/head.php" ?>
    <title>Document</title>
</head>

<body class="bakof-blue container">
    <div class="card-panel ">
        <div class="row">
            <div class="center header">
                <i class="material-icons medium">portrait</i>
                <h4>Login</h4>
            </div>
        </div>

        <form action="../includes/login_user.php" method='POST'>
            <br><br><br><br>
            <div class="row">
                <div class="col s12">
                    <label for="user">CPF</label>
                    <input name='cpf' id='user' type="text" required>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <label for="pass">Senha</label>
                    <input name='password' id='pass' type="password" required>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="center-align">
                        <button class="btn-large waves-effect waves-heavy hoverable bakof-yellow" type="submit" name="action">Entrar
                            <i class="material-icons right">arrow_forward</i>
                        </button>
                    </div>
                </div>
            </div>


        </form>
    </div>

</body>

</html>
