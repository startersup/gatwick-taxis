<?php

$conn=mysqli_connect('srv671.hstgr.io','u678426119_mini','Minicabee@123','u678426119_mini');

if(!$conn)
{
    echo("Conn Failed");

}else{
     echo("Conn Success");
}
$conn_seo=mysqli_connect('sql131.main-hosting.eu','u591648374_seo','myproject','u591648374_seo');


// $conn_site = mysqli_connect('localhost','u985267280_gathub','Gatwick@123','u985267280_gathub');
$conn_site=mysqli_connect('srv671.hstgr.io','u678426119_mini','Minicabee@123','u678426119_mini');

?>
