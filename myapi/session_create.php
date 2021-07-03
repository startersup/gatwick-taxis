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



$_SESSION[$randomString]['pick_pc'] = $_POST['pick_pc'];
$_SESSION[$randomString]['drop_pc'] = $_POST['drop_pc'];


$x=explode(" ",$_POST['date']); 

$_SESSION[$randomString]['date']=$x[0]."-".$x[1]."-".$x[2];

$_SESSION[$randomString]['hrs']=$x[3];
$_SESSION[$randomString]['min']=$x[4];

$month_qry=$x[1];
$date_qry=$x[2];
$years_qry=$x[0];

$time_qry=$x[3].":".$x[4];

if(strtoupper($_POST['trip']) == 'ROUND' ) 
{
    
    $x=explode(" ",$_POST['rdate']); 
    
    $_SESSION[$randomString]['rdate']=$x[0]."-".$x[1]."-".$x[2];
    
        $month_ret_qry=$x[1];
$date_ret_qry=$x[2];
$year_ret_qry=$x[0];
    
    $_SESSION[$randomString]['rhrs']=$x[3];
    $_SESSION[$randomString]['rmin']=$x[4];
    
     $time_ret_qry=$x[3].":".$x[4];
    
    
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

   $_SESSION[$randomString]['fare_calc']='y';

if($_SESSION[$randomString]['pick_pc'] == 'ga' && $_SESSION[$randomString]['drop_pc'] != '')
{
   $post_code = $_SESSION[$randomString]['drop_pc'];
        $_SESSION[$randomString]['post_code']=$post_code;
       $_SESSION[$randomString]['get_fare_func']='exec';
       
      $result_fare=mysqli_query($conn,"SELECT count(fare) as total FROM `fareTableFromGatwick` WHERE `postcode_search` like '".$post_code."%' ORDER by fare desc");
$rows_fare= mysqli_fetch_array($result_fare,MYSQLI_ASSOC);
 $_SESSION[$randomString]['get_fare_func_total']=$rows_fare["total"];
     if($rows_fare["total"] > 0)
     {
          $_SESSION[$randomString]['fare_calc']='n';
          
                $result_fixed=mysqli_query($conn,"SELECT distinct `fare` FROM `fareTableFromGatwick` WHERE `postcode_search` like '".$post_code."%' ORDER by fare desc");
$rows_fixed= mysqli_fetch_array($result_fixed,MYSQLI_ASSOC);
           $_SESSION[$randomString]['fixed_fare']=$rows_fixed["fare"];
    
     }else
     {
          $_SESSION[$randomString]['fare_calc']='y';
        
     }
   
}
else if ($_SESSION[$randomString]['drop_pc'] == 'ga' && $_SESSION[$randomString]['pick_pc'] != '' )
{
     $post_code = $_SESSION[$randomString]['pick_pc'];
          $_SESSION[$randomString]['post_code']=$post_code;
       $_SESSION[$randomString]['get_fare_func']='exec';
      
       $result_fare=mysqli_query($conn,"SELECT count(fare) as total FROM `fareTableFromGatwick` WHERE `postcode_search` like '".$post_code."%' ORDER by fare desc");
$rows_fare= mysqli_fetch_array($result_fare,MYSQLI_ASSOC);
 $_SESSION[$randomString]['get_fare_func_total']=$rows_fare["total"];
     if($rows_fare["total"] > 0)
     {
          $_SESSION[$randomString]['fare_calc']='n';
          
                $result_fixed=mysqli_query($conn,"SELECT distinct `fare` FROM `fareTableFromGatwick` WHERE `postcode_search`like '".$post_code."%' ORDER by fare desc");
$rows_fixed= mysqli_fetch_array($result_fixed,MYSQLI_ASSOC);
           $_SESSION[$randomString]['fixed_fare']=$rows_fixed["fare"];
    
     }else
     {
          $_SESSION[$randomString]['fare_calc']='y';
         
     }
}

// function getFare($post_code){

// }

   $_SESSION[$randomString]['fare_increment']=0;
      $_SESSION[$randomString]['fare_increment_type']="add";
      
   $_SESSION[$randomString]['fare_return_increment']=0;
      $_SESSION[$randomString]['fare_return_increment_type']="add";

$query_single_special="SELECT `incrementType`, `incrementVal` FROM `fare_changer` WHERE `monthVal`='".$month_qry."' AND `dateVal` = '".$date_qry."' AND `timeFrom` <= '".$time_qry."' AND `timeTo` >= '".$time_qry."' AND (`yearsVal` LIKE  '%".$years_qry."%' OR `yearsVal` = 'ALL')";
$result_single_special=mysqli_query($conn,$query_single_special);


// echo($query_single_special."<br>");
$rowCount=mysqli_num_rows($result_single_special);
if($rowCount > 0)
{
    $rows_fare_special= mysqli_fetch_array($result_single_special,MYSQLI_ASSOC);
      $_SESSION[$randomString]['fare_increment']=$rows_fare_special["incrementVal"];
      $_SESSION[$randomString]['fare_increment_type']=$rows_fare_special["incrementType"];
}


    $query_return_special="SELECT `incrementType`, `incrementVal` FROM `fare_changer` WHERE `monthVal`='".$month_ret_qry."' AND `dateVal` = '".$date_ret_qry."' AND `timeFrom` <= '".$time_ret_qry."' AND `timeTo` >= '".$time_ret_qry."' AND (`yearsVal` LIKE  '%".$year_ret_qry."%' OR `yearsVal` = 'ALL')";
$result_return_special=mysqli_query($conn,$query_return_special);


// echo($query_return_special."<br>");

$rowCount=mysqli_num_rows($result_return_special);
if($rowCount > 0)
{
    $rows_fare_special= mysqli_fetch_array($result_return_special,MYSQLI_ASSOC);
         $_SESSION[$randomString]['fare_return_increment']=$rows_fare_special["incrementVal"];
      $_SESSION[$randomString]['fare_return_increment_type']=$rows_fare_special["incrementType"];
}
    




include('get_distance.php');

$record = json_encode($_SESSION[$randomString]);

// echo($record);

$x = mysqli_query($conn_site,"INSERT INTO `session_table` (`id`, `record`) VALUES ('$randomString', '$record')") ;
    
$path =$link."://". $_SERVER['HTTP_HOST']."/quotes/?q=".$randomString;

 echo("<script>window.location='$path';</script>");

?>
