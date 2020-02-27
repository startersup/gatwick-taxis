<?php


$promo = $_POST['promo'];
$fare = $_POST['fare'];
$sessionparams=$_POST['q'];

if($_SESSION[$sessionparams]['promo'] !=="" )
{
    $fare = $fare + ($fare / 9 );
    $fare = number_format($fare,2);
    
}
if($_SESSION[$sessionparams]['promo'] ==$promo )
{
    $response["status"]="Fail";
    $response["newfare"]=$fare;   
    $response["msg"]="Promo Already Applied";
}
else
{
    if($promo == "Drive")
{
    $fare = $fare - ( ($fare*10)/100 );
    $fare = number_format($fare,2);
    $response["status"]="Success";
    $response["newfare"]=$fare;
    $response["msg"]="Promo Applied Successfully";
    $_SESSION[$sessionparams]['promo']=$promo;
    
}
else
{
     $response["status"]="Fail";
      $response["msg"]="PromoCode Expired";
}

}
echo json_encode($response);

?>