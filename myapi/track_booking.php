<?php

$spath = $_SERVER['DOCUMENT_ROOT']."/connection/connect.php";
include($spath);

$id = $_POST['id'];
$sql="SELECT status from `register` WHERE refid='$id'";

$result2= mysqli_query($conn,$sql);

  $row= mysqli_fetch_array($result2,MYSQLI_ASSOC);
  
  $status=$row["status"];
if ($status == "completed") {
    $temp["val"]=4;
    } else if ($status == "booked") {
     $temp["val"]=1;
    } else if ($status == "booked-confirmed") {
      $temp["val"]=2;
    } else if ($status == "cancelled") {
     $temp["val"]=5;
    } else if ($status == "comitted") {
    $temp["val"]=3;
    }
    
    echo json_encode($temp);
?>