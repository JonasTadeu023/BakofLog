<?php
    include_once "../functions/head.php";
    include_once "../functions/is_needed_session.php";
?>
    <style>

        

    </style>

    <h4 class="center-align">Registrar compania</h4>
    <br>
    <form action="../includes/register_company.php" method='POST'>
        <div class="row">
            <div class="col s12">
                <label style='font-size:16px;' for="user">con_cnpj</label>
                <input style='font-size:20px;' name='com_cnpj' id='user' type="text" required>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <label style='font-size:16px;' for="user">con_name</label>
                <input style='font-size:20px;' name='com_name' id='user' type="text" required>
            </div>
        </div>

 
        <div class="row">
            <div class="col s12">
                <div class="center-align" style='margin-top:30px;'>
                    <button class="btn-large waves-effect waves-heavy hoverable" type="submit" name="action">Enviar
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>