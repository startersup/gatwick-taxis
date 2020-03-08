<!--
project:Cabuk
author:saicharan-->

<!DOCTYPE html>
<?php
$apipath = $_SERVER['DOCUMENT_ROOT']."/myapi/";
$spath = $_SERVER['DOCUMENT_ROOT']."/connection/connect.php";
include($spath);
include($apipath."get_session.php");



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Taxi from Heathrow airport to gatwick airport terminal 2 | Gatwick Taxis </title>
    <link rel="icon" href="../images/favicon.png" type="image/gif" sizes="16x16">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/common.js"></script>
 <script src="../js/cabs.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Muli|Niramit|Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body onload="LoadQuotes();">

    <section class="quote">
        <div class="row">

            <div class="col-md-8 nopadding heighto">
                <div class="quote-card sticky-card">
                    <p class="dynamic">Taxi Booking from <b>Heathrow Airport Terminal 5</b> to <b>Gatwick Airport south terminal </b>at 12:00 on 12th september 2018</p>
                </div>
                <div class="row">
                    <div id="mycustomform"> </div>
                    <div class="gt-container" id="MyCarsView">
                   
                          
                    </div>
                </div>

            </div>
            <div class="col-md-4 nopadding">
                <div id="map"></div>
            </div>
        </div>
    </section>
    <script>
        function initMap() {
            var myLatLng = {
                lat: -25.363,
                lng: 131.044
            };

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 4,
                center: myLatLng
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Hello World!'
            });
        }

    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvy6GLKa73k7Kwov34EgQazWaRy9Hp8xE&callback=initMap">
    </script>
</body>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/59fc608ebb0c3f433d4c6dff/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();

    </script>
</html>
