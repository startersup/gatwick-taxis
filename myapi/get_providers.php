<?php

$spath = $_SERVER['DOCUMENT_ROOT']."/connection/connect.php";
include($spath);

$result=mysqli_query($conn,"select distinct agency from cars");

$i=0;
while ($row= mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    
    $output[$i]=$row["agency"];
   
    }

    echo json_encode($output);

?>