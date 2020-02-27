<?php

$spath = $_SERVER['DOCUMENT_ROOT']."/connection/connect.php";
include($spath);

$result=mysqli_query($conn,"select distinct type from cars");


while ($row= mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    $type=$row["type"];
        $result1 =  mysqli_query($conn,"SELECT * from cars where type = '".$type."'");
        while ($row1= mysqli_fetch_array($result1,MYSQLI_ASSOC))
    {
    $output[$type]=$row1;
    }
    
    }

    echo json_encode($output);

?>