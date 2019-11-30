<?php

session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<style>
    .nice{
        color:black;

    }
</style>

<head>
    <?php include "../functions/head.php"; ?>
    <title>Registrar entrega</title>
</head>

<body class="container bakof-blue">
    <div class="card-panel">
        <h4 class="center-align">Finalizar Entrega</h4>
        <br>
        <form action="../includes/finish_delivery.php" method='POST' id="form1">

            <div class="row">
                <div class="input-field col s12">
                <div class="file-field input-field">
                        <div class="btn">
                            <span>Canhoto</span>
                            <input type="file" name="photo_note">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                </div>
                <div class="col s12">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Caminhão Descarga</span>
                            <input type="file" name="photo_finnish">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                </div>
                <div class="col s12">
                    <label style='font-size:16px;' for="destiny">Observações</label>
                    <textarea style='font-size:20px;' name='obs' id='destiny' class="materialize-textarea" type="text" value="" required></textarea>
                </div>
            </div> 
        
        <div class="row">
                <div class="col s12">
                    <div class="center-align" style='margin-top:30px;'>
                        <a class="btn-large waves-effect waves-heavy hoverable bakof-yellow modal-trigger"href="#modal1" name="action">Registrar
                            <i class="material-icons right">send</i>
                        </a>
                        
                    </div>
                </div>
            </div>
    </div>


    <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Relatorio Final</h4>
        <p>
            <label>
                <input class="filled-in" type="checkbox" name='100p' id = "100p" checked="checked" />
                <span class='nice'>100%</span>
            </label>
        </p>
        <p>
            <label>
                <input type="checkbox" id='pe_check' name='pe_check' class="filled-in" />
                <span class='nice'>Produtos não encomendados</span>
            </label>
        </p>
        <p>
            <label>
                <input type="checkbox" id='pa_check' name='pa_check' class="filled-in" />
                <span class='nice'>Produtos Avariados: <input id='pa_input' type='text'></span>
            </label>
        </p>
        <p>
            <label>
                <input type="checkbox" id='pf_check' name='pf_check' class="filled-in" />
                <span class='nice'>Produtos Faltando: <input type='text' id='pf_input'></span>
            </label>
        </p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat" onclick='send_form()'>Enviar</a>
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
    </div>
  </div>
  </form>

<script>
    document.getElementById('pf_input').onkeyup = function() {
        document.getElementById('pf_check').value = this.value;
        document.getElementById('pf_check').checked = true;
        document.getElementById('100p').checked = false;
    }

    document.getElementById('pa_input').onkeyup = function() {
        document.getElementById('pa_check').value = this.value;
        document.getElementById('pa_check').checked = true;
        document.getElementById('100p').checked = false;
    }

    document.getElementById('pa_check').onclick = function(){
        if(this.checked){
            this.checked == true;
            document.getElementById('100p').checked = false;
        }
        else{
            this.checked == false;
        }
    }
    document.getElementById('pe_check').onclick = function(){
        if(this.checked){
            this.checked == true;
            document.getElementById('100p').checked = false;
        }
        else{
            this.checked == false;
        }
    }
    document.getElementById('pf_check').onclick = function(){
        if(this.checked){
            this.checked == true;
            document.getElementById('100p').checked = false;
        }
        else{
            this.checked == false;
        }
    }
    document.getElementById('100p').onclick = function(){
        if(this.checked){
            this.checked == true;
            document.getElementById('pf_check').checked = false;
            document.getElementById('pa_check').checked = false;
            document.getElementById('pe_check').checked = false;
        }
        else{
            this.checked == false;
        }
    }


    function send_form(){
        document.getElementById("form1").submit();
    }

    var options ={};

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, options);
  });
</script>
</body>

</html>