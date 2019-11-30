<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include "../functions/head.php" ?>
    <title>Perfil</title>
    <style>
    
    a {
        width: 100%;
    }

    div.col.s12{
        margin: 10px;
    }

    .a {
        font-size: 10px;
    }

    </style>
</head>

<body class="container bakof-blue">

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<title>Calcular distancia entre cidades (mapas e rotas)</title>
    <script src="http://code.jquery.com/jquery-1.8.1.js" type="text/javascript"></script>
</head>
<body>
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
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
            <tbody>
                <tr>
                    <td>
                        <label for="txtOrigem"><strong>Endere&ccedil;o de origem</strong></label>
                        <input type="text" id="txtOrigem" class="field" style="width: 400px" />

                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="txtDestino"><strong>Endere&ccedil;o de destino</strong></label>
                        <input type="text" style="width: 400px" class="field" id="txtDestino" />

                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="button" value="Calcular dist&acirc;ncia" onclick="CalculaDistancia()" class="btnNew" />
                    </td>
                </tr>
            </tbody>
        </table>
        <div><span id="litResultado">&nbsp;</span></div>
        <div style="padding: 10px 0 0; clear: both">
            <iframe width="750" scrolling="no" height="350" frameborder="0" id="map" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?saddr=são paulo&daddr=rio de janeiro&output=embed"></iframe>
        </div>
</body>
</html>
            
</body>

</html>