<?php
include_once "../functions/head.php";
include_once "../functions/not_needed_session.php";

?>

<style>
    a {
        margin: 10px;
    }
</style>
<br><br><br><br>
<div class="container">
    <h4 class="center-align">Entrar</h4>
    <h5 class="center-align">Você é:</h5>
    
    <div class="row">
        <a href='login_user.php' class="btn-large waves-effect waves-heavy hoverable col s12" type="submit" name="action">Representante
            <i class="material-icons right">supervisor_account</i>
        </a>
        <a href='login_carrier.php' class="btn-large waves-effect waves-heavy hoverable col s12">Freteiro
            <i class="material-icons right">drive_eta</i>
        </a>
    </div>
</div>

</body>

</html>