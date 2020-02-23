<?php

  
session_start();
include("connect.php");
if(!$conn)
{
    echo("Server Connection failed");
    
}

else
{
    
    $via="";
    $extra=0;
   // $src="dsdg";
  
    $src = $_REQUEST['start'];
    $des = $_REQUEST['end']; 
    $via = $_REQUEST['via'];
    $pdate= $_REQUEST['dt'];
    $ptime= $_REQUEST['pt'];
     $np = $_REQUEST['np']; 
        $nl=$_REQUEST['nl']; 
         $type=$_REQUEST['type']; 
        $time=$_REQUEST['time'];
       $agency= $_REQUEST['agency'];
         $fare=$_REQUEST['fare'];
       $name=$_REQUEST['name'];
        $mail=$_REQUEST['mail'];
        $num1=$_REQUEST['number1'];
        $num2=$_REQUEST['number2'];
        $pick=$_REQUEST['pickup'];
        $info=$_REQUEST['info'];
        $pm=$_REQUEST['payment'];
         $via=$_REQUEST['via'];
           $add1=$_REQUEST['address1'];
             $add2=$_REQUEST['address2'];
         
          $extra=$_REQUEST['check'];
          $child=$_REQUEST['child'];
        
    
    
    $dist=$_REQUEST['dist'];
        
    $ch=$child*4;
    $fare=$fare+$extra+$ch;
    
     //echo($des);
    $fdate="nn";
  //$fdate=$pdate;
  
  
  
  $fdate=date('Y-m-d', strtotime($pdate));
  
  
//echo(str.len($des));
    
  $code=0;
   while($code==0)
{
    $check=0;
$ran=mt_rand(1000,99999);
$ret="RET".$ran;
$ran="BRT".$ran;

$result=mysqli_query($conn,"SELECT * from register WHERE 1");
 while ($row= mysqli_fetch_array($result,MYSQLI_ASSOC))
 {
    if($ran==$row["refid"])
    {
        $check=1;
      
    }
}

if($check==0)
{
    $code=1;
}
// ;
// echo($row);


}

$ref=$ran;
       
    
    
    $dfare=$fare/100;
    $payfare=($dfare*5)+$fare;
    $payfare=$payfare+0.20;
    $payfare=number_format($payfare,2);
    $dfare=$dfare*75;
   // echo($payfare);
    
     $dfare=number_format($dfare,2);
    
    
//echo($ref);
//define the subject of the email
$status="booked";
    $cc="britanniabooking@gmail.com";
  //  $des=" Bishop's Stortford CM22 7EU";
  
  

$rdate=$_SESSION["rdate"];
$rptime=$_SESSION["rtime"];
//  echo($rdate);
  //  echo($rptime);
  
  if($rdate=="")
  {
  
  $user= mysqli_query($conn,"INSERT INTO `register` (`refid`, `name`, `mail`, `num1`, `num2`, `location`, `info`, `pay`, `src`, `des`,`address1`,`address2`, `dt`, `time`, `passenger`, `luggage`, `type`, `agency`, `jtime`, `fare`, `status`, `via`, `dfare`, `mg`, `ceat`, `miles`) VALUES ('$ref', '$name', '$mail', '$num1', '$num2', '$pick', '$info', '$pm', '$src', '$des','$add1','$add2', '$fdate', '$ptime', '$np', '$nl', '$type', '$agency', '$time', '$fare', '$status', '$via', '$dfare', '$extra', '$child', '$dist')") ;
  
  
  
$message = '


  <body link="#00a5b5" vlink="#00a5b5" alink="#00a5b5">

<table class=" main contenttable" align="center" style="font-weight: normal;border-collapse: collapse;border: 0;margin-left: auto;margin-right: auto;padding: 0;font-family: Arial, sans-serif;color: #555559;background-color: white;font-size: 16px;line-height: 26px;width: 600px;">
		<tr>
			<td class="border" style="border-collapse: collapse;border: 1px solid #eeeff0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
				<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
					<tr>
						<td colspan="4" valign="top" class="image-section" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #ffffff;font-family: Arial, sans-serif;font-size: 20px;line-height: 26px;background-color: #000;border-bottom: 4px solid #00a5b5;padding:10px;font-weight:bold;">
							<center>Heathrow Airport Taxis</center>
						</td>
					</tr>
					<tr>
						<td valign="top" class="side title" style="border-collapse: collapse;border: 0;margin: 0;padding: 10px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;vertical-align: top;background-color: white;border-top: none;">
							<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
								<div class="mktEditable" id="main_text">
										Hello <b>'.$name.'</b>, We have received your booking now, kindly check the below provided information and reconfirm us by tapping the button below.<br><br>
									</div>
							
								
									
																						<center><b>Booking Information ('.$ref.')</b></center>
                                        						 <table style="font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;color:#01567b;">
    
  <tr>
    <th style=" text-align:right;padding: 8px;border-top:2px solid #65707f;font-size:14px;"><b>Passenger Name</b></th>
    <th  style="text-align: left;padding: 8px;border-top:2px solid #65707f;font-size:14px;">:'.$name.'</th>
  </tr>
   <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Contact Number</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">:'.$num1.'</th>
  </tr>
    <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Alternate Number</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$num2.'</th>
  </tr>
         <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Email Id</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$mail.'</th>
  </tr>
         <tr style="border-bottom:2px solid #65707f;">
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Reference Id</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$ref.'</th>
       </tr>
      
         <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Pickup From</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$src.'</th>
  </tr>
         <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Dropoff To</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$des.'</th>
  </tr>
         <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Via Point</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">:'.$via.'</th>
  </tr>
         <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Full pickup Address</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$add1.'</th>
  </tr>
         <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Full Dropoff Address</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$add2.'</th>
  </tr>
         <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Pickup Date And Time</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$pdate.$ptime.'</th>
       </tr>
        
              <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Passengers</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$np.'</th>
  </tr>
             <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Luggages</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$nl.'</th>
  </tr>
             <tr style="border-bottom:2px solid #65707f;">
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Cab Type</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$type.'</th>
  </tr>
             <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Total Fare</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">:£'.$fare.'</th>
  </tr>
             <tr style="border-bottom:2px solid #65707f;">
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>payment Mode</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$pm.'</th>
  </tr>
        
        
        </table>
                           				
						<tr>
									<td style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 24px;">
									 &nbsp;<br>
									</td>
								</tr>
								<tr>
									<td class="text" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 24px;">
									<div class="mktEditable" id="download_button" style="text-align: center;">
										<a style="color:#ffffff; background-color: #ff8300; border: 20px solid #ff8300; border-left: 20px solid #ff8300; border-right: 20px solid #ff8300; border-top: 10px solid #ff8300; border-bottom: 10px solid #ff8300;border-radius: 3px; text-decoration:none;" href="https://britannia-taxis.com/change_status.php?id='.$ref.'">Confirm Booking Now</a>										
									</div>
									</td>
								</tr>									
					<tr>
						<td valign="top" align="center" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
							<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
								<tr>
									<td align="center" valign="middle" class="social" style="border-collapse: collapse;border: 0;margin: 0;padding: 10px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size:px;line-height: 26px;text-align: center;">
										<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
											<tr>
									<td style="border-collapse: collapse;border: 0;margin: 0;padding:10    px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 14px;line-height: 26px;"><a>Call us at :020 37452804</a></td>
									<td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 14px;line-height: 26px;"><a href="https://heathrowairport-taxis.co.uk/">Visit : https://heathrowairport-taxis.co.uk/</a></td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td></table>	
					</tr>
					<tr bgcolor="#fff" style="border-top: 4px solid #00a5b5;">
						<td valign="top" class="footer" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background: #fff;text-align: center;">
							<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
							
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
  </body>


';
  
  if($user)
  {

$subject = "Booking Information : Reference Id (".$ref.")";

// Always set content-type when sending HTML email
$headers = "";
$headers .= "From: Heathrow Airport Taxis <bookings@heathrowairport-taxis.co.uk> \r\n";
$headers .= "Reply-To: Heathrow Airport Taxis <bookings@heathrowairport-taxis.co.uk> \r\n"."X-Mailer: PHP/" . phpversion();
$headers .= "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\b";




$smail=mail($mail,$subject,$message,$headers);
 
  $p="britanniabooking@gmail.com";
 mail($p,$subject,$message,$headers);
  }
  

   }
   else
   {    
       
           
    

    
   // echo($payfare);
   
   $fare=$fare/2;
    $fare=number_format($fare,2);
    $dfare=$dfare/2;
     $dfare=number_format($dfare,2);
    
    
       
        $user= mysqli_query($conn,"INSERT INTO `register` (`refid`, `name`, `mail`, `num1`, `num2`, `location`, `info`, `pay`, `src`, `des`,`address1`,`address2`, `dt`, `time`, `passenger`, `luggage`, `type`, `agency`, `jtime`, `fare`, `status`, `via`, `dfare`, `mg`, `ceat`, `miles`) VALUES ('$ref', '$name', '$mail', '$num1', '$num2', '$pick', '$info', '$pm', '$src', '$des','$add1','$add2', '$fdate', '$ptime', '$np', '$nl', '$type', '$agency', '$time', '$fare', '$status', '$via', '$dfare', '$extra', '$child', '$dist')") ;
  
  
  
       
       
       $user= mysqli_query($conn,"INSERT INTO `register` (`refid`, `name`, `mail`, `num1`, `num2`, `location`, `info`, `pay`, `src`, `des`,`address1`,`address2`, `dt`, `time`, `passenger`, `luggage`, `type`, `agency`, `jtime`, `fare`, `status`, `via`, `dfare`, `mg`, `ceat`, `miles`) VALUES ('$ret', '$name', '$mail', '$num1', '$num2', '$pick', '$info', '$pm', '$des', '$src','$add1','$add2', '$rdate', '$rptime', '$np', '$nl', '$type', '$agency', '$time', '$fare', '$status', '$via', '$dfare', '$extra', '$child', '$dist')") ;
      
      
      
$message = '


  <body link="#00a5b5" vlink="#00a5b5" alink="#00a5b5">

<table class=" main contenttable" align="center" style="font-weight: normal;border-collapse: collapse;border: 0;margin-left: auto;margin-right: auto;padding: 0;font-family: Arial, sans-serif;color: #555559;background-color: white;font-size: 16px;line-height: 26px;width: 600px;">
		<tr>
			<td class="border" style="border-collapse: collapse;border: 1px solid #eeeff0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
				<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
					<tr>
						<td colspan="4" valign="top" class="image-section" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #ffffff;font-family: Arial, sans-serif;font-size: 20px;line-height: 26px;background-color: #000;border-bottom: 4px solid #00a5b5;padding:10px;font-weight:bold;">
							<center>Heathrow Airport Taxis</center>
						</td>
					</tr>
					<tr>
						<td valign="top" class="side title" style="border-collapse: collapse;border: 0;margin: 0;padding: 10px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;vertical-align: top;background-color: white;border-top: none;">
							<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
								<div class="mktEditable" id="main_text">
										Hello <b>'.$name.'</b>, We have received your booking now, kindly check the below provided information and reconfirm us by tapping the button below.<br><br>
									</div>
								
								
									
																						<center><b>Booking Information ('.$ref.')</b></center>
                                        						 <table style="font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;color:#01567b;">
    
  <tr>
    <th style=" text-align:right;padding: 8px;border-top:2px solid #65707f;font-size:14px;"><b>Passenger Name</b></th>
    <th  style="text-align: left;padding: 8px;border-top:2px solid #65707f;font-size:14px;">:'.$name.'</th>
  </tr>
   <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Contact Number</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">:'.$num1.'</th>
  </tr>
    <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Alternate Number</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$num2.'</th>
  </tr>
         <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Email Id</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$mail.'</th>
  </tr>
         <tr style="border-bottom:2px solid #65707f;">
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Reference Id</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$ref.'</th>
       </tr>
      
         <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Pickup From</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$src.'</th>
  </tr>
         <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Dropoff To</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$des.'</th>
  </tr>
         <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Via Point</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">:'.$via.'</th>
  </tr>
         <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Full pickup Address</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$add1.'</th>
  </tr>
         <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Full Dropoff Address</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$add2.'</th>
  </tr>
         <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Pickup Date And Time</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$pdate.$ptime.'</th>
       </tr>
        
              <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Passengers</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$np.'</th>
  </tr>
             <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Luggages</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$nl.'</th>
  </tr>
             <tr style="border-bottom:2px solid #65707f;">
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Cab Type</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$type.'</th>
  </tr>
             <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Total Fare</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">:£'.$fare.'</th>
  </tr>
             <tr style="border-bottom:2px solid #65707f;">
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>payment Mode</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$pm.'</th>
  </tr>
        
        
        </table>
                           				
						<tr>
									<td style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 24px;">
									 &nbsp;<br>
									</td>
								</tr>
								<tr>
									<td class="text" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 24px;">
									<div class="mktEditable" id="download_button" style="text-align: center;">
										<a style="color:#ffffff; background-color: #ff8300; border: 20px solid #ff8300; border-left: 20px solid #ff8300; border-right: 20px solid #ff8300; border-top: 10px solid #ff8300; border-bottom: 10px solid #ff8300;border-radius: 3px; text-decoration:none;" href="https://britannia-taxis.com/change_status.php?id='.$ref.'">Confirm Booking Now</a>										
									</div>
									</td>
								</tr>									
					<tr>
						<td valign="top" align="center" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
							<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
								<tr>
									<td align="center" valign="middle" class="social" style="border-collapse: collapse;border: 0;margin: 0;padding: 10px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size:px;line-height: 26px;text-align: center;">
										<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
											<tr>
									<td style="border-collapse: collapse;border: 0;margin: 0;padding:10    px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 14px;line-height: 26px;"><a>Call us at :020 37452804</a></td>
									<td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 14px;line-height: 26px;"><a href="https://heathrowairport-taxis.co.uk/">Visit : https://heathrowairport-taxis.co.uk/</a></td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td></table>	
					</tr>
					<tr bgcolor="#fff" style="border-top: 4px solid #00a5b5;">
						<td valign="top" class="footer" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background: #fff;text-align: center;">
							<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
							
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
  </body>

';
      
      
      
    if($user)
  {

$subject = "Booking Information : Reference Id (".$ref.")";

$headers = "";
$headers .= "From: Heathrow Airport Taxis <bookings@heathrowairport-taxis.co.uk> \r\n";
$headers .= "Reply-To: Heathrow Airport Taxis <bookings@heathrowairport-taxis.co.uk> \r\n"."X-Mailer: PHP/" . phpversion();
$headers .= "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\b";





$smail=mail($mail,$subject,$message,$headers);
 
  $p="britanniabooking@gmail.com";
 mail($p,$subject,$message,$headers);  
      
   
   }
   
         
$message = '


  <body link="#00a5b5" vlink="#00a5b5" alink="#00a5b5">

<table class=" main contenttable" align="center" style="font-weight: normal;border-collapse: collapse;border: 0;margin-left: auto;margin-right: auto;padding: 0;font-family: Arial, sans-serif;color: #555559;background-color: white;font-size: 16px;line-height: 26px;width: 600px;">
		<tr>
			<td class="border" style="border-collapse: collapse;border: 1px solid #eeeff0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
				<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
					<tr>
						<td colspan="4" valign="top" class="image-section" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #ffffff;font-family: Arial, sans-serif;font-size: 20px;line-height: 26px;background-color: #000;border-bottom: 4px solid #00a5b5;padding:10px;font-weight:bold;">
							<center>Heathrow Airport Taxis</center>
						</td>
					</tr>
					<tr>
						<td valign="top" class="side title" style="border-collapse: collapse;border: 0;margin: 0;padding: 10px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;vertical-align: top;background-color: white;border-top: none;">
							<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
								<div class="mktEditable" id="main_text">
										Hello <b>'.$name.'</b>, We have received your booking now, kindly check the below provided information and reconfirm us by tapping the button below.<br><br>
									</div>
								
										<center><b>Booking Information ('.$ref.')</b></center>
                                        						 <table style="font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;color:#01567b;">
    
  <tr>
    <th style=" text-align:right;padding: 8px;border-top:2px solid #65707f;font-size:14px;"><b>Passenger Name</b></th>
    <th  style="text-align: left;padding: 8px;border-top:2px solid #65707f;font-size:14px;">:'.$name.'</th>
  </tr>
   <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Contact Number</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">:'.$num1.'</th>
  </tr>
    <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Alternate Number</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$num2.'</th>
  </tr>
         <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Email Id</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$mail.'</th>
  </tr>
         <tr style="border-bottom:2px solid #65707f;">
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Reference Id</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$ref.'</th>
       </tr>
      
         <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Pickup From</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$src.'</th>
  </tr>
         <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Dropoff To</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$des.'</th>
  </tr>
         <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Via Point</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">:'.$via.'</th>
  </tr>
         <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Full pickup Address</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$add1.'</th>
  </tr>
         <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Full Dropoff Address</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$add2.'</th>
  </tr>
         <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Pickup Date And Time</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$pdate.$ptime.'</th>
       </tr>
        
              <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Passengers</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$np.'</th>
  </tr>
             <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Luggages</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$nl.'</th>
  </tr>
             <tr style="border-bottom:2px solid #65707f;">
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Cab Type</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$type.'</th>
  </tr>
             <tr>
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>Total Fare</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">:£'.$fare.'</th>
  </tr>
             <tr style="border-bottom:2px solid #65707f;">
    <th style=" text-align:right;padding: 8px;font-size:14px;"><b>payment Mode</b></th>
    <th  style="text-align: left;padding: 8px;font-size:14px;">: '.$pm.'</th>
  </tr>
        
        
        </table>
                           				
						<tr>
									<td style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 24px;">
									 &nbsp;<br>
									</td>
								</tr>
								<tr>
									<td class="text" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 24px;">
									<div class="mktEditable" id="download_button" style="text-align: center;">
										<a style="color:#ffffff; background-color: #ff8300; border: 20px solid #ff8300; border-left: 20px solid #ff8300; border-right: 20px solid #ff8300; border-top: 10px solid #ff8300; border-bottom: 10px solid #ff8300;border-radius: 3px; text-decoration:none;" href="https://britannia-taxis.com/change_status.php?id='.$ref.'">Confirm Booking Now</a>										
									</div>
									</td>
								</tr>									
					<tr>
						<td valign="top" align="center" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
							<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
								<tr>
									<td align="center" valign="middle" class="social" style="border-collapse: collapse;border: 0;margin: 0;padding: 10px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size:px;line-height: 26px;text-align: center;">
										<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
											<tr>
									<td style="border-collapse: collapse;border: 0;margin: 0;padding:10    px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 14px;line-height: 26px;"><a>Call us at :020 37452804</a></td>
									<td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 14px;line-height: 26px;"><a href="https://heathrowairport-taxis.co.uk/">Visit : https://heathrowairport-taxis.co.uk/</a></td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td></table>	
					</tr>
					<tr bgcolor="#fff" style="border-top: 4px solid #00a5b5;">
						<td valign="top" class="footer" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background: #fff;text-align: center;">
							<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
							
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
  </body>

';
      
      
      
    if($user)
  {

$subject = "Booking Information for Return : Reference Id (".$ret.")";

// Always set content-type when sending HTML email
$headers = "";
$headers .= "From: Heathrow Airport Taxis <bookings@heathrowairport-taxis.co.uk> \r\n";
$headers .= "Reply-To: Heathrow Airport Taxis <bookings@heathrowairport-taxis.co.uk> \r\n"."X-Mailer: PHP/" . phpversion();
$headers .= "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\b";



$smail=mail($mail,$subject,$message,$headers);
 
  $p="britanniabooking@gmail.com";
 mail($p,$subject,$message,$headers);  
       
    }
      
       
       
   }
    //$user= mysqli_query($conn,"INSERT INTO `register` (`refid`, `name`, `mail`, `num1`, `num2`, `location`, `info`, `pay`, `src`) VALUES ('$ref', '$name', '$mail', '$num1', '$num2', '$pick', '$info', '$pm', '$src')");
    
  //  $user= mysqli_query($conn,"INSERT INTO `register` (`refid`, `name`, `mail`, `num1`, `num2`, `location`, `info`, `pay`, `src`, `des`,`address1`,`address2`, `dt`, `time`, `passenger`, `luggage`, `type`, `agency`, `jtime`, `fare`, `status`, `via`, `dfare`, `mg`, `ceat`) VALUES ('$ref', '$name', '$mail', '$num1', '$num2', '$pick', '$info', '$pm', '$src', '$des','$add1','$add2', '$fdate', '$ptime', '$np', '$nl', '$type', '$agency', '$time', '$fare', '$status', '$via', '$dfare', '$extra', '$child')");
    
   // $user=mysqli_query($conn,"INSERT INTO `register` (`refid`,`name`,`mail`,`num1`,`num2`,`location`,`info`,`pay`,`src`,`des`,`address1`,`address2`,`dt`,`time`,`passenger`,`luggage`,`type`,`agency`,`jtime`,`fare`,`status`,`via`,`dfare`,`mg`,`ceat`) VALUES('$ref','$name','$mail','$num1','$num2','$pick','$info','$pm','$src','$des','$add1','$add2','$fdate','$ptime','$np','$nl','$type','$agency','$time','$fare','$status','$via','$dfare','$extra','$child')");
    
    
  

if($smail)
{
    
    
    
   //   $p="britanniacars@yahoo.co.uk";
    
   
    // mail($p[1],$subject,$message,$headers);
  
     
    // $testval=0.11;
    
    
    
    ?>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    
    <center><div class="card" style="width:60%;margin-top:90px;">
  <strong><h1 style="font-size:45px;"><b>Success!</b></h1></strong> <h3><b>Your Booking has been processed</b></h3><h5>Please check your email for booking status</h5>
  <br><br>
  <img src="https://heathrowairport-taxis.co.uk/images/gif-1.gif" width="300">
  <br><br>
  <div class="row">
<div class="col-md-6">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>

<div id="paypal-button-container"></div>

<script>
paypal.Button.render({

            env: 'production', // sandbox | production
            
            style: {
            label: 'paypal',
            size:  'medium',    // small | medium | large | responsive
            shape: 'rect',     // pill | rect
            color: 'blue',     // gold | blue | silver | black
            tagline: false    
        },

            // PayPal Client IDs - replace with your own
            // Create a PayPal app: https://developer.paypal.com/developer/applications/create
             // Create a PayPal app: https://developer.paypal.com/developer/applications/create
            client: {
                sandbox:    'Afg7mq6J3wGaFQ_Y5gFbzUFDLC_reOqCxBCZhfTbsDmzhaV1YbnZpA_gz-oSGIfUrGoH-ApfRJHKgFr8',
                production: 'AVrAx_AvGj3ko1Du_5MC-THqvv4b03NTpAYCJNdWCGpXLEOxo9Dip8dQZbeZvnOm0PncCMi0ft5v52Di'
            },


            // Show the buyer a 'Pay Now' button in the checkout flow
            commit: true,

            // payment() is called when the button is clicked
            payment: function(data, actions) {

                // Make a call to the REST api to create the payment
                return actions.payment.create({
                    payment: {
                        transactions: [
                            {
                                amount: { total: '<?php echo($payfare);  ?>', currency: 'GBP' }
                            }
                        ]
                    }
                });
            },

            // onAuthorize() is called when the buyer approves the payment
            onAuthorize: function(data, actions) {

                // Make a call to the REST api to execute the payment
                return actions.payment.execute().then(function() {
                 
                    window.alert('Payment Complete!');
                    
                });
            }

        }, '#paypal-button-container');

</script>
    

    
</div>
   <div class="col-md-6">
   
 <center> <a href="http://gatwick-airporttaxis.com"><button class="btn btn-default" style="background-color:#10abdd;width:200px;"><span style="color:white"><b>Back to page</b></span></button></a></center>
  </div>
  </div>
</div></center>

<?php
    
    
  
}
else
{
    echo('fail');
}


}   
    ?>
     
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




