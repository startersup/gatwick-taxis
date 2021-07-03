<?php


session_start();
$spath = $_SERVER['DOCUMENT_ROOT']."/connection/connect.php";
include($spath);
$sessionid = $_REQUEST['q'];

$query ="Select record from `session_table` where `id` = '".$sessionid."'";

$result=  mysqli_query($conn_site,$query);

$row= mysqli_fetch_array($result,MYSQLI_ASSOC);

$temp =$row["record"];
$output = json_decode($temp);



$_SESSION[$sessionid]['pick']       =$output->{"pick"};
$_SESSION[$sessionid]['drop']       =$output->{"drop"};
$_SESSION[$sessionid]['via']        =$output->{"via"};
$_SESSION[$sessionid]['np']         =$output->{"np"};
$_SESSION[$sessionid]['nl']         =$output->{"nl"};
$_SESSION[$sessionid]['date']       =$output->{"date"};
$_SESSION[$sessionid]['hrs']        =$output->{"hrs"};
$_SESSION[$sessionid]['min']        =$output->{"min"};
$_SESSION[$sessionid]['rpick']      =$output->{"rpick"};
$_SESSION[$sessionid]['rdrop']      =$output->{"rdrop"};
$_SESSION[$sessionid]['rnp']        =$output->{"rnp"};
$_SESSION[$sessionid]['rnl']        =$output->{"rnl"};
$_SESSION[$sessionid]['rdate']      =$output->{"rdate"};
$_SESSION[$sessionid]['rhrs']       =$output->{"rhrs"};
$_SESSION[$sessionid]['rmin']       =$output->{"rmin"};
$_SESSION[$sessionid]['return']=$output->{"return"};

$_SESSION[$sessionid]['address1']=$output->{'address1'};
$_SESSION[$sessionid]['address2']=$output->{'address2'};
$_SESSION[$sessionid]['location']=$output->{'location'};
$_SESSION[$sessionid]['meet']=$output->{'meet'};
$_SESSION[$sessionid]['child']=$output->{'child'};
$_SESSION[$sessionid]['name']=$output->{'name'};
$_SESSION[$sessionid]['mail']=$output->{'mail'};
$_SESSION[$sessionid]['num1']=$output->{'num1'};
$_SESSION[$sessionid]['num2']=$output->{'num2'};
$_SESSION[$sessionid]['info']=$output->{'info'};
$_SESSION[$sessionid]['pay']=$output->{'pay'};




$_SESSION[$sessionid]['selected']=$output->{'selected'};
$_SESSION[$sessionid]['selected_type']=$output->{'selected_type'};
$_SESSION[$sessionid]['selected_fare']=$output->{'selected_fare'};

$_SESSION[$sessionid]['totaldistancecon']=$output->{'totaldistancecon'};
$_SESSION[$sessionid]['totaltimecon']= $output->{'totaltimecon'};
$_SESSION[$sessionid]['displaytime']= $output->{'displaytime'};

$_SESSION[$sessionid]['bid']=$output->{'bid'};
$_SESSION[$sessionid]['rid']=$output->{'rid'};

include('get_site_info.php');
?>