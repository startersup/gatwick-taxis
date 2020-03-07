<?php


$name = $_POST['name'];
$mail = $_POST['mail'];
$star = $_POST['star'];
$description = $_POST['description'];
$cabid = $_POST['cabid'];

$x = mysqli_query($conn,"INSERT INTO `reviews` (`name`, `mail`,`star`,`description`,`cabid`) VALUES ('$name', '$mail','$star', '$description', '$cabid')") ;

   

?>