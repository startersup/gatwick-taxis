<?php

session_start();

// unset($_SESSION);
echo json_encode($_SESSION);


// $spath = $_SERVER['DOCUMENT_ROOT']."/connection/connect.php";
// include($spath);
// $sessionid = "e6hX0agIdTu2RjhWYo6SEjcBRmTaVM";

// $query ="Select record from `session_table` where `id` = '".$sessionid."'";

// $result=  mysqli_query($conn_site,$query);

// $row= mysqli_fetch_array($result,MYSQLI_ASSOC);

// $temp =$row["record"];
// echo($temp);

// echo("<br><br>");

// $tem["hai"]="deepak";
// echo($tem["hai"]);

?>

