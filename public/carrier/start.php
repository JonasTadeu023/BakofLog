<?php
session_start();
include "../../includes/dbh.php";
$_SESSION['del_id'] = $_GET['id'];
?>
    <script>
        if('geolocation' in navigator){
                navigator.geolocation.watchPosition(function(position){
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;

                window.location.href = "start2.php?latitude=" + latitude + "&longitude=" + longitude;
            })
        }else{
            alert( 'fodeu manito')
        }
    </script>

