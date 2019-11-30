<?php
    include_once "../functions/head.php";
    include_once "../functions/is_needed_session.php";
?>
    <style>

        

    </style>

    <h4 class="center-align">Registrar entrega</h4>
    <br>
    <form action="../includes/register_delivery.php" method='POST'>
        <div class="row">
            <div class="col s12">
                <label style='font-size:16px;' for="user">Ponto A</label>
                <input style='font-size:20px;' name='del_pointA' id='user' type="text" required>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <label style='font-size:16px;' for="user">Ponto B</label>
                <input style='font-size:20px;' name='del_pointB' id='user' type="text" required>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <label style='font-size:16px;' for="user">Canhoto</label>
                <input style='font-size:20px;' name='del_note' id='user' type="file" required>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <label style='font-size:16px;' for="user">Problema</label>
                <input style='font-size:20px;' name='del_problem' id='user' type="text" required>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <label style='font-size:16px;' for="user">order id</label>
                <input style='font-size:20px;' name='order_id' value='1' id='user' type="text" required>
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