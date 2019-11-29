<?php
    include_once "../functions/head.php";
?>
    <style>

        

    </style>

    <h4 class="center-align">Entrar</h4>
    <p class="center-align">Você é?</p>
    <br>
    <form action="includes/login.php" method='POST'>
        <div class="row">
        <div class="col s12">
                <div class="center-align" style='margin-top:30px;'>
                    <a href='login_user.php' class="btn-large waves-effect waves-heavy hoverable" type="submit" name="action">Representante
                        <i class="material-icons right">supervisor_account</i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="center-align" style='margin-top:30px;'>
                    <a href='login_carrier.php' class="btn-large waves-effect waves-heavy hoverable" >Freteiro
                        <i class="material-icons right">drive_eta</i>
                    </a>
                </div>
            </div>
        </div>
    </form>
</body>
</html>