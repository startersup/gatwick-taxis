<?php

session_start();

$spath = $_SERVER['DOCUMENT_ROOT']."/connection/connect.php";
include($spath);
$sessionparams=$_REQUEST['q'];



date_timezone_set('Europe/London');


if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
else
    $link = "http"; 
    
if($_POST["ses"] == "quote")
{
    $_SESSION[$sessionparams]['book'] == "Y";
$cabtype=$_POST["cabtype"];
$selected =(int) $_POST["selected"];

$_SESSION[$sessionparams]['selected'] =$_POST["selected"];
$_SESSION[$sessionparams]['selected_type'] =$_POST["cabtype"];
  

$partnerlist= $_SESSION[$sessionparams]["partner"];
$farelist=$_SESSION[$sessionparams][$cabtype]["disfare"];
$key = array_search($selected, $partnerlist); 
$_SESSION[$sessionparams]['selected_fare']=$farelist[$key];

$path =$link."://". $_SERVER['HTTP_HOST']."/book/?q=".$sessionparams;

}else if($_POST["ses"] == "book")
{
$_SESSION[$sessionparams]['address1']=$_POST['address1'];
$_SESSION[$sessionparams]['address2']=$_POST['address2'];
$_SESSION[$sessionparams]['location']=$_POST['location'];
$_SESSION[$sessionparams]['meet']=$_POST['meet'];
$_SESSION[$sessionparams]['child']=$_POST['child'];
$_SESSION[$sessionparams]['name']=$_POST['name'];
$_SESSION[$sessionparams]['mail']=$_POST['mail'];
$_SESSION[$sessionparams]['num1']=$_POST['num1'];
$_SESSION[$sessionparams]['num2']=$_POST['num2'];
$_SESSION[$sessionparams]['info']=$_POST['info'];
$_SESSION[$sessionparams]['pay']=$_POST['pay'];

// $result=mysqli_query($conn,"SELECT refid from register WHERE `refid` = '".$ran."'");

$code==0;
  while($code==0)
{
$ran=mt_rand(1000,99999);
$ret= $_SESSION["site_info"]["bookingId"].$ran."R";
$ran= $_SESSION["site_info"]["bookingId"].$ran;

$result=mysqli_query($conn,"SELECT refid from register WHERE `refid` = '".$ran."'");
 $rowcount=mysqli_num_rows($result);

    if($rowcount == 0)
    {
        $code=1;
      
    }
}

$status="booked";

if($_SESSION[$sessionparams]['meet'] != '' && $_SESSION[$sessionparams]['meet'] != 0)
{
  $_SESSION[$sessionparams]['selected_fare']=$_SESSION[$sessionparams]['selected_fare']+ $_SESSION[$sessionparams]['meet'];
}

if($_SESSION[$sessionparams]['child'] != '' && $_SESSION[$sessionparams]['child'] != 0)
{
  $_SESSION[$sessionparams]['selected_fare']=$_SESSION[$sessionparams]['selected_fare']+ $_SESSION[$sessionparams]['child'];
}

$fare = $_SESSION[$sessionparams]['selected_fare'];
     $dfare=$fare/100;
      $dfare=$dfare*75;
      $dfare=number_format($dfare,2);

      $_SESSION[$sessionparams]['bid']=$ran;
      
      
$_SESSION[$sessionparams]['time'] = $_SESSION[$sessionparams]['hrs'].':'.$_SESSION[$sessionparams]['min'];
$_SESSION[$sessionparams]['rtime'] = $_SESSION[$sessionparams]['rhrs'].':'.$_SESSION[$sessionparams]['rmin'];
		  
$pick=$_SESSION[$sessionparams]['pick'];
$drop=$_SESSION[$sessionparams]['drop'];
$via=$_SESSION[$sessionparams]['via'];
$np=$_SESSION[$sessionparams]['np'];
$nl=$_SESSION[$sessionparams]['nl'];
$date=$_SESSION[$sessionparams]['date'];
$time=$_SESSION[$sessionparams]['time'];
$rpick=$_SESSION[$sessionparams]['rpick'];
$rdrop=$_SESSION[$sessionparams]['rdrop'];
$rnp=$_SESSION[$sessionparams]['rnp'];
$rnl=$_SESSION[$sessionparams]['rnl'];
$rdate=$_SESSION[$sessionparams]['rdate'];
$rtime=$_SESSION[$sessionparams]['rtime'];
$return=$_SESSION[$sessionparams]['return'];

$address1=$_SESSION[$sessionparams]['address1'];
$address2=$_SESSION[$sessionparams]['address2'];
$location=$_SESSION[$sessionparams]['location'];
$meet=$_SESSION[$sessionparams]['meet'];
$child=$_SESSION[$sessionparams]['child'];
$name=$_SESSION[$sessionparams]['name'];
$mail=$_SESSION[$sessionparams]['mail'];
$num1=$_SESSION[$sessionparams]['num1'];
$num2=$_SESSION[$sessionparams]['num2'];
$info=$_SESSION[$sessionparams]['info'];
$pay=$_SESSION[$sessionparams]['pay'];

$selected=$_SESSION[$sessionparams]['selected'];
$selected_type=$_SESSION[$sessionparams]['selected_type'];
$selected_fare=$_SESSION[$sessionparams]['selected_fare'];
$original_fare=$_SESSION[$sessionparams]['original_fare'];

$booked_date = date("d-m-Y H:i:s");  
$_SESSION[$sessionparams]['booked_date']=$booked_date;

$siteName=$_SESSION["site_info"]["siteName"];



if($_SESSION[$sessionparams]['rpick']!=="")
{
    $_SESSION[$sessionparams]['rid']=$ret;
    $fare = $_SESSION[$sessionparams]['selected_fare']/2;
     $dfare=$fare/100;
      $dfare=$dfare*75;
      $dfare=number_format($dfare,2);
        $fare=number_format($fare,2);

	

$sql = "INSERT INTO `register` (`refid`, `name`, `mail`, `num1`, `num2`, `location`, `info`, `pay`, `src`, `des`,`address1`,`address2`, `dt`, `time`, `passenger`, `luggage`, `type`, `agency`, `jtime`, `fare`, `status`, `via`, `dfare`, `mg`, `ceat`, `miles`,`booked_date`, `booked_site`) VALUES 
						('$ret', '$name', '$mail', '$num1', '$num2', '$location', '$info', '$pay', '$rpick', '$rdrop','$raddress1','$raddress2', '$rdate', '$rtime', '$rnp', '$rnl', '$selected_type', '$selected', '$totaltimecon', '$fare', '$status', '$rvia', '$dfare', '$meet', '$child', '$totaldistancecon','$booked_date','$siteName')";
						
						$result=mysqli_query($conn,$sql);
}

$sql = "INSERT INTO `register` (`refid`, `name`, `mail`, `num1`, `num2`, `location`, `info`, `pay`, `src`, `des`,`address1`,`address2`, `dt`, `time`, `passenger`, `luggage`, `type`, `agency`, `jtime`, `fare`, `status`, `via`, `dfare`, `mg`, `ceat`, `miles`,`booked_date`, `booked_site`) VALUES 
						('$ran', '$name', '$mail', '$num1', '$num2', '$location', '$info', '$pay', '$pick', '$drop','$address1','$address2', '$date', '$time', '$np', '$nl', '$selected_type', '$selected', '$totaltimecon', '$fare', '$status', '$via', '$dfare', '$meet', '$child', '$totaldistancecon','$booked_date','$siteName')";
						
							$result=mysqli_query($conn,$sql);
				


$path =$link."://". $_SERVER['HTTP_HOST']."/success/?q=".$sessionparams;
}

$record = json_encode($_SESSION[$sessionparams]);
$sql="UPDATE `session_table` SET `record`='".$record."' WHERE `id` ='".$sessionparams."'";
$x = mysqli_query($conn_site,$sql) ;

echo("<script>window.location='$path';</script>");

?>