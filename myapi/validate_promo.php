<?php

session_start();
$promo = $_POST['promo'];

$sessionparams=$_REQUEST['q'];
echo($sessionparams);
$response["dummy"]=$_SESSION[$sessionparams]['selected_fare'];

$query_session ="Select record from `session_table` where `id` = '".$sessionparams."'";

$result_session=  mysqli_query($conn_site,$query_session);

$row_session= mysqli_fetch_array($result_session,MYSQLI_ASSOC);

$session_var =$row_session["record"];
$output_session = json_decode($session_var);

$selected_fare = $output_session->{"selected_fare"};

$result=mysqli_query($conn,"select * from mypromos where siteurl = '".$_SERVER["HTTP_HOST"]."' and fromdate >".$today."and todate < ".$today);

echo json_encode($result);
$row= mysqli_fetch_array($result,MYSQLI_ASSOC);

$_SESSION[$sessionparams][""]

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

*/
echo json_encode($response);

?>