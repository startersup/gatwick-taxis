<?php

$conn=mysqli_connect('sql166.main-hosting.eu','u591648374_seo','myproject','u591648374_seo');




$url_variable=$_SERVER['REQUEST_URI'];



$mypage=explode("/",$url_variable);
$x=sizeof($mypage)-1;
$mypage=$mypage[$x];



$contents=explode("-",$mypage);

$contents=str_replace("-"," ",$mypage);
$contents=str_replace("taxi.php","",$contents);
$contents=str_replace("taxis.php","",$contents);
$contents=str_replace(".php","",$contents);
$contents = "From ".$contents;


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gatwick Taxis | <?php echo($contents);  ?> | Book Cheap and Comfortable Taxis & Cabs</title>
    <link rel="icon" href="../images/favicon.png" type="image/gif" sizes="16x16">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Book cheap Local Taxis online, Gatwick Airport chepeast taxis call us at :+44 1293344804 and we are working 24/7." />
    <meta name="keywords" content="UK,London Taxis, Quote, Minicabs, Booking, Airport, Stations , Shuttle, Rail, Best, Reliable,Safe, Cabs, Fare, Price ,Compare, London , Transfers, Services, Transportation, Chauffeur, Cars, Station, To, From, Seaport, Cruises, Heathrow, Gatwick, Stansted , Luton , In, From, To, Cheap, Hire, Firm, Punctual, Reliable, Fixed, Cost, Low, On line, Local Taxi, Local Taxi-Cab Service, Executive, Luxury, Numbers, Taxi Fares Calculator, Area, PostCodes, Cheaper, Compares, Professional, Licensed, Companies, Towns, Pick up, Drop off, Cabs, airport, taxis, minicabs, cheap, fares, how, much, does, a taxi cost from, Instant, Pre Book" />
    <meta name="abstract" content="Gatwick Taxis | Book Cheap Local Taxis Online ">
    <meta name="subject" content="Gatwick Taxis | Book Cheap Local Taxis Online">
    <link href="https://www.facebook.com/MiniCabee-540741142988885/" itemprop="sameAs" id="facebook">
    <link href="https://twitter.com/minicabee" itemprop="sameAs" id="twitter">
    <meta itemscope itemtype="http://schema.org/WebSite" itemref="sitename sitelink facebook twitter">
    <meta itemprop="name" content="Gatwick Taxis" id="sitename">
    <link href="https://minicabee.co.uk/" itemprop="url" id="sitelink">
    <meta name="og:site_name" content="gatwick-airporttaxis.com">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Gatwick Taxis | Book Cheap Local Taxis Online" />
    <meta property="og:description" content=" Compare and Book cheap Taxis and Minicabs online, gatwick chepeast taxis at minicabee" />
    <meta property="og:image" content="https://minicabee.co.uk/assets/images/minicabee-home.png" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@MiniCabee" />
    <meta name="twitter:title" content="Minicabee | Book Cheap Taxis & Minicabs Online" />
    <meta name="twitter:description" content=" Compare and Book cheap Taxis and Minicabs online, gatwick chepeast taxis at minicabee" />
    <meta name="twitter:image" content="https://minicabee.co.uk/assets/images/logo.png" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/indexjs.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Muli|Niramit|Open+Sans|Roboto" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158960428-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-158960428-1');

    </script>





</head>
