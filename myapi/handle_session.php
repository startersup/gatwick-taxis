<?php

session_start();

$spath = $_SERVER['DOCUMENT_ROOT']."/connection/connect.php";
include($spath);
$sessionparams=$_REQUEST['q'];
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

$code==0;
  while($code==0)
{
$ran=mt_rand(1000,99999);
$ret="RET".$ran;
$ran="TXO".$ran;

$result=mysqli_query($conn,"SELECT * from register WHERE `refid` = '".$ran."'");
 $rowcount=mysqli_num_rows($result);

    if($rowcount == 0)
    {
        $code=1;
      
    }
}

$status="booked";
$fare = $_SESSION[$sessionparams]['selected_fare'];
     $dfare=$fare/100;
      $dfare=$dfare*75;
      $dfare=number_format($dfare,2);

      $_SESSION[$sessionparams]['bid']=$ran;
      
      
$_SESSION[$sessionparams]['time'] = $_SESSION[$sessionparams]['hrs'].':'.$_SESSION[$sessionparams]['min'];
$_SESSION[$sessionparams]['rtime'] = $_SESSION[$sessionparams]['rhrs'].':'.$_SESSION[$sessionparams]['rmin'];
      
      
              
   $pick=$_SESSION[$sessionid]['pick'];
$drop=$_SESSION[$sessionid]['drop'];
$via=$_SESSION[$sessionid]['via'];
$np=$_SESSION[$sessionid]['np'];
$nl=$_SESSION[$sessionid]['nl'];
$date=$_SESSION[$sessionid]['date'];
$hrs=$_SESSION[$sessionid]['hrs'];
$min=$_SESSION[$sessionid]['min'];
$rpick=$_SESSION[$sessionid]['rpick'];
$rdrop=$_SESSION[$sessionid]['rdrop'];
$rnp=$_SESSION[$sessionid]['rnp'];
$rnl=$_SESSION[$sessionid]['rnl'];
$rdate=$_SESSION[$sessionid]['rdate'];
$rhrs=$_SESSION[$sessionid]['rhrs'];
$rmin=$_SESSION[$sessionid]['rmin'];
$return=$_SESSION[$sessionid]['return'];

$address1=$_SESSION[$sessionid]['address1'];
$address2=$_SESSION[$sessionid]['address2'];
$location=$_SESSION[$sessionid]['location'];
$meet=$_SESSION[$sessionid]['meet'];
$child=$_SESSION[$sessionid]['child'];
$name=$_SESSION[$sessionid]['name'];
$mail=$_SESSION[$sessionid]['mail'];
$num1=$_SESSION[$sessionid]['num1'];
$num2=$_SESSION[$sessionid]['num2'];
$info=$_SESSION[$sessionid]['info'];
$pay=$_SESSION[$sessionid]['pay'];

$selected=$_SESSION[$sessionid]['selected'];
$selected_type=$_SESSION[$sessionid]['selected_type'];
$selected_fare=$_SESSION[$sessionid]['selected_fare'];

if($_SESSION[$sessionparams]['rpick']!=="")
{
    $_SESSION[$sessionparams]['rid']=$ret;
    $fare = $_SESSION[$sessionparams]['selected_fare']/2;
     $dfare=$fare/100;
      $dfare=$dfare*75;
      $dfare=number_format($dfare,2);
        $fare=number_format($fare,2);

	

$sql = "INSERT INTO `register` (`refid`, `name`, `mail`, `num1`, `num2`, `location`, `info`, `pay`, `src`, `des`,`address1`,`address2`, `dt`, `time`, `passenger`, `luggage`, `type`, `agency`, `jtime`, `fare`, `status`, `via`, `dfare`, `mg`, `ceat`, `miles`) VALUES 
						('$ret', '$name', '$mail', '$num1', '$num2', '$location', '$info', '$pay', '$rpick', '$rdrop','$raddress1','$raddress2', '$rdate', '$rtime', '$rnp', '$rnl', '$selected_type', '$selected', '$totaltimecon', '$fare', '$status', '$rvia', '$dfare', '$meet', '$child', '$totaldistancecon')";
						
						$result=mysqli_query($conn,$sql);
}

$sql = "INSERT INTO `register` (`refid`, `name`, `mail`, `num1`, `num2`, `location`, `info`, `pay`, `src`, `des`,`address1`,`address2`, `dt`, `time`, `passenger`, `luggage`, `type`, `agency`, `jtime`, `fare`, `status`, `via`, `dfare`, `mg`, `ceat`, `miles`) VALUES 
						('$ran', '$name', '$mail', '$num1', '$num2', '$location', '$info', '$pay', '$pick', '$drop','$address1','$address2', '$date', '$time', '$np', '$nl', '$selected_type', '$selected', '$totaltimecon', '$fare', '$status', '$via', '$dfare', '$meet', '$child', '$totaldistancecon')";
						
							$result=mysqli_query($conn,$sql);
				
echo($sql);


$path =$link."://". $_SERVER['HTTP_HOST']."/success/?q=".$sessionparams;
}

$record = json_encode($_SESSION[$sessionparams]);
$sql="UPDATE `session_table` SET `record`='".$record."' WHERE `id` ='".$sessionparams."'";
$x = mysqli_query($conn_site,$sql) ;

//echo($record);
//echo("<script>window.location='$path';</script>");

?>