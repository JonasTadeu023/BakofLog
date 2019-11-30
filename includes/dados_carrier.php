<?php
    session_start();
    include('dbh.php');
    $car_cpf = $_GET['cpf'];
    
    $sql = "SELECT * from localization WHERE del_id = '7' And car_cpf = '0419907806'";
    $result = mysqli_query($conn, $sql);

    while ($post = mysqli_fetch_array($result)) {
        $latitude = $post['loc_latitude'];
        $longitude = $post['loc_longitude'];
    }


?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map_canvas { height: 100% }
    </style>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADLsL46CQaEu2smB3EMpEV1eEbInd0ASs">
    </script>
    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(<?php echo $latitude;?>,<?php echo $longitude;?>),
          zoom: 12,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(<?php echo $latitude;?>, <?php echo $longitude;?>),
                map: map,
                title: 'Ultimo ponto salvo do frete'
            });
      } 
     

    </script>
  </head>
  <body onload="initialize()">
    <div id="map_canvas" style="width:100%; height:100%"></div>
  </body>
</html>   