<?php
    include_once "../functions/head.php";
    
?>
    <style>

        

    </style>

    <h4 class="center-align">Registrar entrega</h4>
    <br>
    <form action="../includes/register_delivery.php" method='POST'>
        <div class="row">
            <div class="col s12">
                <label style='font-size:16px;' for="user">Local de saída da mercadoria (CEP)</label>
                <input style='font-size:20px;' name='del_pointA' id='user' type="number" required>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <label style='font-size:16px;' for="user">Local de entrega da mercadoria (CEP)</label>
                <input style='font-size:20px;' name='del_pointB' id='user' type="number" required>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                <input id="icon_prefix" type="text" name="bairro" class="validate">
                <label for="icon_prefix">Bairro:</label>
            </div>
            <div class="input-field col s6">
                <input id="icon_telephone" type="tel" name="rua" class="validate">
                <label for="icon_telephone">Rua e número do local:</label>
            </div>
      </div>
      
        <div class="row">
            <div class="col s12">
                <label style='font-size:16px;' for="user">Canhoto</label>
                <input style='font-size:20px;' name='arquivo' id='user' type="file" required>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <label style='font-size:16px;' for="user">Distribuidor(CPF)</label>
                <input style='font-size:20px;' name='distribuidor' id='user' type="number" required>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="center-align" style='margin-top:30px;'>
                    <button class="btn-large waves-effect waves-heavy hoverable" type="submit" name="action">Registrar
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>