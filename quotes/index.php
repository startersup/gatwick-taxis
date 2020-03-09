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
                    <p class="dynamic">Taxi Booking from <b id=""><?php echo($_SESSION[$sessionid]['pick']); ?></b> to <b><?php echo($_SESSION[$sessionid]['drop']); ?></b>at <?php echo($_SESSION[$sessionparams]["date"]." ".$_SESSION[$sessionparams]["hrs"].":".$_SESSION[$sessionparams]["min"]); ?></p>
                </div>
                <div class="row">
                    <div id="mycustomform"> </div>
                    <div class="gt-small-container" id="MyCarsView">
                   
                          
                    </div>
                </div>

            </div>
            <div class="col-md-4 nopadding">
                <div class="map-overlay">
                 <p><span>Total Miles :</span></p>
                 <p><span>Total Time :</span></p>
                </div>
                <div id="map"></div>
            </div>
        </div>
    </section>
    <?php
	
	if($_SESSION[$sessionid]['via'] !="")
	{
	
	?>
  <script>
    var directionsDisplay;
    var directionsService;
    var map;

    function initMap() {
      directionsService = new google.maps.DirectionsService;
       var myLatLng = {lat: 51.5287352, lng: -0.3817888};
      var chicgo = new google.maps.LatLng(51.5287352, -0.3817888);
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 8,
        center:myLatLng
      });
      directionsDisplay = new google.maps.DirectionsRenderer({
        map: map
      });
      calcRoute();
    }
    
   
    var waypoints = [];
    var address="<?php echo($_SESSION[$sessionid]['via']); ?>";
    waypoints.push({
            location: address,
            stopover: true
        });
       

    function calcRoute() {
      var start = "<?php echo($_SESSION[$sessionid]['pick']); ?>";
      var end =  "<?php echo($_SESSION[$sessionid]['drop']); ?>";
     // var via="<?php echo($via); ?>";
      var request = {
        origin: start,
        destination: end,
      waypoints: waypoints,
      optimizeWaypoints: true,
       travelMode: google.maps.DirectionsTravelMode.DRIVING
      };
      directionsService.route(request, function(result, status) {
        if (status == google.maps.DirectionsStatus.OK) {
         directionsDisplay.setDirections(result);
        }
      });
    };
  </script>
  
  <?php }
  
  else
  
  {
  
  
  ?> 	
  <script>

    var directionsDisplay;
    var directionsService;
    var map;

    function initMap() {
      directionsService = new google.maps.DirectionsService;
        var myLatLng = {lat: 51.5287352, lng: -0.3817888};
      var chicgo = new google.maps.LatLng(51.5287352, -0.3817888);
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 8,
        center:myLatLng
      });
      directionsDisplay = new google.maps.DirectionsRenderer({
        map: map
      });
      calcRoute();
      
      
   
    }

    function calcRoute() {
      var start = "<?php echo($_SESSION[$sessionid]['pick']); ?>";
      var end =  "<?php echo($_SESSION[$sessionid]['drop']); ?>";
      var request = {
        origin: start,
        destination: end,
        travelMode: google.maps.TravelMode.DRIVING
      };
      directionsService.route(request, function(result, status) {
        if (status == google.maps.DirectionsStatus.OK) {
          directionsDisplay.setDirections(result);
        }
      });
    };
  </script>

<?php } ?>
  
    
   <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCV_e29ZNv8f0S3-2IzNwIPqc-ycslxNBE&callback=initMap"></script>

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
