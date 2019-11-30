<?php 
    session_start();
    include "../../includes/dbh.php";

    $del_id = $_SESSION['del_id'];
    $sql = mysqli_query($conn, "SELECT * FROM delivery WHERE del_id = '$del_id'");

    while ($post = mysqli_fetch_array($sql)) {
      $saiu = $post['del_exit'];
      $chegou = $post['del_destiny'];
    }
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<title>Rotas para a viajem
</title>
    <script src="http://code.jquery.com/jquery-1.8.1.js" type="text/javascript"></script>
    <?php include "../../functions/head.php" ?>
</head>
<body class="container bakof-blue">
<div class="card-panel">
        <img src="../../logo.png" class="responsive-img">
    </div>
    <div class="card-panel">
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyADLsL46CQaEu2smB3EMpEV1eEbInd0ASs"></script>
        <script type="text/javascript">
            function CalculaDistancia() {
                $('#litResultado').html('Aguarde...');
                //Instanciar o DistanceMatrixService
                var service = new google.maps.DistanceMatrixService();
                //executar o DistanceMatrixService
                service.getDistanceMatrix(
                  {
                      //Origem
                      origins: [$("#txtOrigem").val()],
                      //Destino
                      destinations: [$("#txtDestino").val()],
                      //Modo (DRIVING | WALKING | BICYCLING)
                      travelMode: google.maps.TravelMode.DRIVING,
                      //Sistema de medida (METRIC | IMPERIAL)
                      unitSystem: google.maps.UnitSystem.METRIC
                      //Vai chamar o callback
                  }, callback);
            }
            //Tratar o retorno do DistanceMatrixService
            function callback(response, status) {
                //Verificar o Status
                if (status != google.maps.DistanceMatrixStatus.OK)
                    //Se o status não for "OK"
                    $('#litResultado').html(status);
                else {
                    //Se o status for OK
                    //Endereço de origem = response.originAddresses
                    //Endereço de destino = response.destinationAddresses
                    //Distância = response.rows[0].elements[0].distance.text
                    //Duração = response.rows[0].elements[0].duration.text
                    $('#litResultado').html("<strong>Origem</strong>: " + response.originAddresses +
                        "<br /><strong>Destino:</strong> " + response.destinationAddresses +
                        "<br /><strong>Distância</strong>: " + response.rows[0].elements[0].distance.text +
                        " <br /><strong>Duração</strong>: " + response.rows[0].elements[0].duration.text
                        );
                    //Atualizar o mapa
                    $("#map").attr("src", "https://maps.google.com/maps?saddr=" + response.originAddresses + "&daddr=" + response.destinationAddresses + "&output=embed");
                }
            }
        </script>
        <table width="100%" cellspacing="0" cellpadding="0" border="0" id="table">
            <tbody>
                <tr>
                    <td>
                        <label for="txtOrigem"><strong>Endere&ccedil;o de origem</strong></label>
                        <input type="hidden " id="txtOrigem" value="<?php echo $saiu;?>" class="field" style="width: 400px" />

                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="txtDestino"><strong>Endere&ccedil;o de destino</strong></label>
                        <input type="hidden" style="width: 400px" value="<?php echo $chegou;?>" class="field" id="txtDestino" />

                    </td>
                </tr>
                <tr>
                    <td>
                       
                    </td>
                </tr>
            </tbody>
        </table>
        <input type="button" class="btn bakof-yellow" value="Calcular dist&acirc;ncia" onclick="CalculaDistancia()" class="btnNew" />
        <div><span id="litResultado">&nbsp;</span></div>
        <div style="padding: 10px 0 0; clear: both">
            <iframe width="280" scrolling="no" height="350" frameborder="0" id="map" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?saddr=são paulo&daddr=rio de janeiro&output=embed"></iframe>
        </div>
    </div>
    <script>
    
    document.getElementById('table').style.display = 'none'
    
    </script>
    <div class="row">
            <div class="col s12">
                <a href='finish_delivery.php' class="btn-large waves-effect waves-heavy hoverable bakof-yellow">Terminar entrega
                    <i class="material-icons right">event_note</i>
                </a>
            </div>

        </div>
</body>
</html>