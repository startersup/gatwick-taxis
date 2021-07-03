<?php

$spath = $_SERVER['DOCUMENT_ROOT'] . "/connection/connect.php";
include($spath);




if (!($_SESSION["site_info_flag"] == "Y")) {
   
    $sql_query = "SELECT `siteName`, `siteLink`, `bookingId`, `id`, `ccMail`, `apiMap`, `apiAutoComplete`, `apiDistanceMatrix`, `contact1`, `contact2`, `complaintMail`, `quoteMail`, `enquiryMail`, `copyRight` FROM `siteMaster` WHERE `siteLink` ='" . $_SERVER['HTTP_HOST'] . "'";

    $result = mysqli_query($conn, $sql_query);
    
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $_SESSION["site_info_flag"] = "Y";
    $_SESSION["site_info"]["siteName"] = $row["siteName"];
    $_SESSION["site_info"]["bookingId"] = $row["bookingId"];
    $_SESSION["site_info"]["id"] = $row["id"];
    $_SESSION["site_info"]["ccMail"] = $row["ccMail"];
    $_SESSION["site_info"]["apiMap"] = $row["apiMap"];
    $_SESSION["site_info"]["apiAutoComplete"] = $row["apiAutoComplete"];
    $_SESSION["site_info"]["apiDistanceMatrix"] = $row["apiDistanceMatrix"];
    $_SESSION["site_info"]["contact1"] = $row["contact1"];
    $_SESSION["site_info"]["contact2"] = $row["contact2"];
    $_SESSION["site_info"]["complaintMail"] = $row["complaintMail"];
    $_SESSION["site_info"]["quoteMail"] = $row["quoteMail"];
    $_SESSION["site_info"]["enquiryMail"] = $row["enquiryMail"];
    $_SESSION["site_info"]["copyRight"] = $row["copyRight"];
}



?>