<?php
session_destroy();
session_start();
$spath = $_SERVER['DOCUMENT_ROOT']."/connection/connect.php";
include($spath);
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
else
    $link = "http"; 
    
    
$randomStringlength="30";
include('generate_string.php');

$_SESSION[$randomString]['pick'] = $_POST['pick'];
$_SESSION[$randomString]['drop'] = $_POST['drop']; 
$_SESSION[$randomString]['via']= $_POST['via']; 
$_SESSION[$randomString]['np'] = $_POST['np']; 
$_SESSION[$randomString]['nl']=$_POST['nl']; 

$x=explode(" ",$_POST['date']); 

$_SESSION[$randomString]['date']=$x[2]."-".$x[1]."-".$x[0];

$_SESSION[$randomString]['hrs']=$x[3];
$_SESSION[$randomString]['min']=$x[4];


if(strtoupper($_POST['trip']) == 'ROUND' ) 
{
    
    $x=explode(" ",$_POST['rdate']); 
    
    $_SESSION[$randomString]['rdate']=$x[2]."-".$x[1]."-".$x[0];
    
    
    $_SESSION[$randomString]['rhrs']=$x[3];
    $_SESSION[$randomString]['rmin']=$x[4];
    
    $_SESSION[$randomString]['rnp'] = $_POST['rnp']; 
    $_SESSION[$randomString]['rnl']=$_POST['rnl']; 
    
     $_SESSION[$randomString]['rpick'] = $_POST['rpick']; 
    $_SESSION[$randomString]['rdrop']=$_POST['rdrop']; 

   // $_SESSION[$randomString]['rdrop']="same";
}else
{
        $_SESSION[$randomString]['rdate']="";
        $_SESSION[$randomString]['rhrs']="";
        $_SESSION[$randomString]['rmin']="";
        $_SESSION[$randomString]['rnp'] ="";
        $_SESSION[$randomString]['rnl']	="";
        $_SESSION[$randomString]['rpick']="";
        $_SESSION[$randomString]['rdrop']="";
}


    




include('get_distance.php');

$record = json_encode($_SESSION[$randomString]);



$x = mysqli_query($conn_site,"INSERT INTO `session_table` (`id`, `record`) VALUES ('$randomString', '$record')") ;
    
$path =$link."://". $_SERVER['HTTP_HOST']."/quotes/?q=".$randomString;

echo("<script>window.location='$path';</script>");

?>
