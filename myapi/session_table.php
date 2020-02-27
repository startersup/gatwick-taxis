<?php

$record = json_encode($_SESSION);

$randomStringlength="30";
include('generate_string.php');



$x = mysqli_query($conn_site,"INSERT INTO `session_table` (`id`, `record`) VALUES ('$randomString', '$record')") ;

   

?>