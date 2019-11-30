<?php
    include_once "../functions/head.php";
?>
    <style>

        

    </style>

    <h4 class="center-align">Entrar</h4>
    <br>
    <form action="../includes/login_carrier.php" method='POST'>
        <div class="row">
            <div class="col s12">
                <label style='font-size:16px;' for="user">CPF</label>
                <input style='font-size:20px;' name='cpf' id='user' type="text" required>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <label style='font-size:16px;'   for="pass">Senha</label>
                <input style='font-size:20px;' name='password' id='pass' type="password" required>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="center-align" style='margin-top:30px;'>
                    <button class="btn-large waves-effect waves-heavy hoverable" type="submit" name="action">Entrar
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>