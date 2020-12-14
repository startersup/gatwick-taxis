<?php

session_start();

$spath = $_SERVER['DOCUMENT_ROOT'] . "/connection/connect.php";
include($spath);

$sessionparams = $_POST['q'];

if ($sessionparams == "") {
    $sessionparams = $_REQUEST['q'];
}

$query = "Select record from `session_table` where `id` = '" . $sessionparams . "'";




$result =  mysqli_query($conn_site, $query);

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$temp = $row["record"];
$output = json_decode($temp);

$distance = $output->{"totaldistancecon"};

$fare_calc = $output->{"fare_calc"};

$post_code = $output->{"post_code"};

$fixed_fare = $output->{"fixed_fare"};

$fare_return_increment = $output->{"fare_return_increment"};
$fare_return_increment_type = $output->{"fare_return_increment_type"};

$fare_increment = $output->{"fare_increment"};
$fare_increment_type = $output->{"fare_increment_type"};

$_SESSION[$sessionparams]['promo'] = "";

$row = 0;

// echo($distance);

if (($distance <= 60) && ($distance > 20)) {
    $myd = 20;
    while ($myd < $distance) {
        $myd += 10;
        $row += 1;
        $reduction = 0.15;
    }
} else {
    if (($distance <= 120) && ($distance > 60)) {
        $myd = 60;
        $row = 4;
        while ($myd < $distance) {
            $myd += 15;
            $row += 1;
            $reduction = 0.02;
        }
    } else {
        if (($distance <= 200) && ($distance > 120)) {
            $myd = 120;
            $row = 8;
            while ($myd < $distance) {
                $myd += 20;
                $row += 1;
                $reduction = -0.10;
            }
        } else {
            if (($distance <= 350) && ($distance > 200)) {
                $myd = 200;
                $row = 12;
                while ($myd < $distance) {
                    $myd += 30;
                    $row += 1;
                    $reduction = -0.15;
                }
            } else {
                if ($distance <= 400) {
                    $row = 18;
                    $reduction = -0.20;
                } else {
                    $row = 19;
                    $reduction = 0.10;
                }
            }
        }
    }
}





$temp = "g-20,g-30,g-40,g-50,g-60,g-75,g-90,g-105,g-120,g-140,g-160,g-180,g-200,g-230,g-260,g-290,g-320,g-350,g-400";

$field = explode(',', $temp);

$arr = array('Saloon', 'Estate', 'MPV-4', 'MPV-6', '8-Seater', '9-Seater');
$arr_fare = array(0, 20, 30, 30, -2, -2);
if ($_SESSION[$sessionparams]['fare_calc'] == 'y' || $_SESSION[$sessionparams]['fare_calc'] == 'Y') {
    for ($k = 0; $k < count($arr); $k++) {
        $cabtype = $arr[$k];
        $result = mysqli_query($conn, "select * from cars where  `type` = '" . $cabtype . "'");
        $rowss = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $images[$cabtype] = $rowss["status"];

        $cost = ($rowss["base"] / 2) + 0.2356;
        if (($distance > 1) && ($distance < 5)) {

            $cost = $cost + ($distance * 2);
        }

        if (($distance >= 5) && ($distance < 11)) {

            $cost = $cost * 2;
        } else {

            if (($distance > 10) && ($distance < 21)) {
                $cost = ($rowss["base"]) + 0.2356;
                $cost = $cost - 5 + $distance;
            }

            if ($distance > 20) {
                $cost = 0;
                $req = $row - 1;
                $req = $field[$req];
                $price = $rowss[$req];
                // echo($price);

                $price = $price - $reduction + ($status / 100);
                // echo($reduction);
                // echo($price);  
                $cost = $distance * $price;
            }
        }
        
        if($fare_increment_type == "add")
        {
            $cost = $cost + $fare_increment ;
        }else if($fare_increment_type == "multiply")
        {
             $cost = $cost * $fare_increment ;
        }
        $cost = number_format($cost, 2);
        $final_cost[$cabtype] = $cost;
    }
} else {


    for ($k = 0; $k < count($arr); $k++) {
        $cabtype = $arr[$k];
        $cab_fix_fare = $arr_fare[$k];
        $result = mysqli_query($conn, "select `status` from cars where  `type` = '" . $cabtype . "'");
        $rowss = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $images[$cabtype] = $rowss["status"];
        if($cab_fix_fare < 0)
        {
            $cost = $fixed_fare *($cab_fix_fare * (-1) );
        }else{
            $cost = $fixed_fare +$cab_fix_fare ;
        }
        
            if($fare_increment_type == "add")
        {
            $cost = $cost + $fare_increment ;
        }else if($fare_increment_type == "multiply")
        {
             $cost = $cost * $fare_increment ;
        }
        
        $cost = number_format($cost, 2);
        $final_cost[$cabtype] = $cost;
    }
}


$result2 = mysqli_query($conn, "SELECT `id`,`percentage`,`rating`,`time`,`special`,`base_fare_variant`,`offer_variant` FROM `partner`");

$i = 0;
while ($rows = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
    $partnerlist[$i] = $rows["id"];
    $partnerRating[$i] = $rows["rating"];
    $partnerTime[$i] = $rows["time"];
    $partnerSpecial[$i] = $rows["special"];
    for ($k = 0; $k < count($arr); $k++) {
        $mycab = $arr[$k];
        $mycost = $final_cost[$mycab];

        $myfare_original[$mycab][$i] = $mycost + (($mycost * ($rows["base_fare_variant"] + $rows["offer_variant"])) / 100);

        $myfare_discount[$mycab][$i] = $myfare_original[$mycab][$i] - (($myfare_original[$mycab][$i] * $rows["percentage"]) / 100);

        $myfare_original[$mycab][$i] = number_format($myfare_original[$mycab][$i], 2);
        $myfare_discount[$mycab][$i] = number_format($myfare_discount[$mycab][$i], 2);
    }

    $i++;
}

for ($k = 0; $k < count($arr); $k++) {
    $mycab = $arr[$k];
    $response[$mycab]["ofare"] = $myfare_original[$mycab];
    $response[$mycab]["disfare"] = $myfare_discount[$mycab];
    $_SESSION[$sessionparams][$mycab] = $response[$mycab];
    $response[$mycab]["images"] = $images[$mycab];
}

$_SESSION[$sessionparams]["partner"] = $partnerlist;
$response["partner"] = $partnerlist;
$response["rating"] = $partnerRating;
$response["time"] = $partnerTime;
$response["special"] = $partnerSpecial;
$response["via"] = $_SESSION[$sessionparams]["via"];
$response["pick"] = $_SESSION[$sessionparams]["pick"];
$response["drop"] = $_SESSION[$sessionparams]["drop"];

echo (json_encode($response));
