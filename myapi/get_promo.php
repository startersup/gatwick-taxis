<?php


$spath = $_SERVER['DOCUMENT_ROOT']."/connection/connect.php";
include($spath);

$result=mysqli_query($conn_site,"select * from mypromos where siteurl = '".$_SERVER["HTTP_HOST"]."' and fromdate >".$today."and todate < ".$today);

echo json_encode($result);
// while ($row= mysqli_fetch_array($result,MYSQLI_ASSOC))
//  {
  
    
//  }

?>