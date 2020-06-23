<?php



if($_SESSION[$randomString]['via'] == "")
{
    $places=$_SESSION[$randomString]['pick']."~~".$_SESSION[$randomString]['drop'];
}else
{
    $places=$_SESSION[$randomString]['pick']."~~".$_SESSION[$randomString]['via']."~~".$_SESSION[$randomString]['drop'];
}


$viapoints = explode("~~",$places);



$len =sizeof($viapoints);
$totalvia=$len-2;
$len=$len-1;
$totaldistance=0;
$totaltime=0;
for($i =0;$i<$len;$i++ )
{
    $j=$i+1;
    $origin =urlencode($viapoints[$i]);
    $destination = urlencode($viapoints[$j]);
    
    
   
$q="https://maps.googleapis.com/maps/api/distancematrix/json?origins=".$origin."&destinations=".$destination."&key=AIzaSyAXOaL94s9M_jDhWXQxbzvTuAQIPf7c7a8";

$json = file_get_contents($q);

$details = json_decode($json);

// $distance=$details->routes[0]->legs[0]->distance->value;
    
// $time=$details->routes[0]->legs[0]->duration->value;

$distance=$details->rows[0]->elements[0]->distance->value;
$time=$details->rows[0]->elements[0]->duration->value;

$totaldistance = $totaldistance + $distance;

$totaltime = $totaltime + $time;
    
// 

// $distancesrc=round($distance,2);

    
}


$distance=$totaldistance/1609.344;
$time=(int) ($totaltime/60);

$mintime = $time % 60;
$hrstime = ($time -$mintime ) / 60;

$displaytime = $mintime." Mins";

if($hrstime !== "0"){
    $displaytime=$hrstime." Hrs ".$displaytime;
}


$_SESSION[$randomString]['totaldistance']=$totaldistance;
$_SESSION[$randomString]['totaltime']=$totaltime;
$_SESSION[$randomString]['totaldistancecon']=$distance;
$_SESSION[$randomString]['totaltimecon']=$time;
$_SESSION[$randomString]['displaytime']=$displaytime;
// echo("<script> alert($distance); </script>")
?>

