<?php

$apipath = $_SERVER['DOCUMENT_ROOT']."/myapi/";
$spath = $_SERVER['DOCUMENT_ROOT']."/connection/connect.php";
include($spath);

?>

<!DOCTYPE html>
<html lang="en">

<title>Gatwick TaxiHub | Book Cheap and Comfortable Taxis & Cabs</title>
<link rel="icon" href="https://gatwicktaxihub.com/images/favicon.svg" type="image/gif" sizes="16x16">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description"
    content="Looking for cheap and Reliable Taxi Service in Gatwick Airport, Find cheaper Gatwick TaxiHub deals and book now with exiciting discounts,Cheaper than any other service providers, safer than what you expect. call us at :+44 1293344804." />
<meta name="keywords"
    content="UK,Gatwick TaxiHub, Quote, Minicabs, Booking, Airport, Stations , Shuttle, Rail, Best, Reliable,Safe, Cabs, Fare, Price ,Compare, London , Transfers, Services, Transportation, Chauffeur, Cars, Station, To, From, Seaport, Cruises, Gatwick, Stansted ,Cheap, Hire, Firm, Punctual, Reliable, Fixed, Cost, Low, On line, Local Taxi, Local Taxi-Cab Service, Executive, Luxury, Numbers, Taxi Fares Calculator, Area, PostCodes, Cheaper, Compares, Professional, Licensed, Companies, Towns, Pick up, Drop off, Cabs, airport, taxis, minicabs, cheap, fares, how, much, does, a taxi cost from, Instant, Pre Book" />
<meta name="abstract" content="Gatwick TaxiHub | Book cheap Taxis to Gatwick Airport Online">
<meta name="subject" content="Gatwick TaxiHub | Book cheap Taxis to Gatwick Airport Online">
<!-- <link href="https://www.facebook.com/" itemprop="sameAs" id="facebook">
    <link href="https://twitter.com/" itemprop="sameAs" id="twitter"> -->
<meta itemscope itemtype="https://schema.org/WebSite" itemref="sitename sitelink facebook twitter">
<meta itemprop="name" content="Gatwick TaxiHub" id="sitename">
<link href="https://gatwicktaxihub.com/" itemprop="url" id="sitelink">
<meta name="og:site_name" content="gatwicktaxihub.com">
<meta property="og:type" content="website" />
<meta property="og:title" content="Gatwick TaxiHub | Book cheap Taxis to Gatwick Airport Online" />
<meta property="og:description"
    content=" Compare and Book cheap Taxis and Minicabs online, gatwick chepeast taxis now with exciting discounts" />
<meta property="og:image" content="https://gatwicktaxihub.com/assets/images/gatwick-taxis-home.png" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@Gatwick Taxihub" />
<meta name="twitter:title" content="Gatwick Taxihub | Book Cheap Taxis & Minicabs Online" />
<meta name="twitter:description"
    content=" Compare and Book cheap Taxis and Minicabs online, gatwick chepeast taxis at Gatwick Taxihub" />
<meta name="twitter:image" content="https://gatwicktaxihub.com/assets/images/logo.png" />
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/indexjs.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
    <div class="hellobar">
        <div class="hellobar-wrap">
            <a href="#" class="hellobar-arrow"></a>
            <div class="hellobar-content hidden-xs">we are back online after <span
                    style="color:#e7f169;font-weight:bold;">COVID-19</span>, we accept Prebookings now and ready to
                serve clean and comfortable Taxis.
            </div>
            <div class="hellobar-content visible-xs">we are back online after<span
                    style="color:#e7f169;font-weight:bold;">COVID-19</span>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-fixed-top">
        <div class="gt-container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img class="gth-logo" src="./images/logo.svg"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav center-nav">
                    <li><a href="../about/">About</a></li>
                     <li class="dropdown"><a class="dropdown-toggle custom-arrow">Services</a>
                        <div class="xd-dropdown-content">
                            <ul>
                             <li>Taxi Booking</li>
                             <li>Wheelchair Taxi Booking</li>
                             <li>Minibus Booking</li>
                             <li>Corporate Bookings</li>
                            </ul>
                            </div>
                                <li>
                    <li class="dropdown"><a class="dropdown-toggle custom-arrow">Areas we Cover</a>
                        <div class="xd-dropdown-content">
                            <ul>
                                <?php

$query ="Select `name` from `cities` where 1";

$result=  mysqli_query($conn_site,$query);
while($row= mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    if($row["name"] !==  "")
    {
    $displayname =$row["name"];
    
   $urlname = strtolower($displayname);
	$urlname = str_replace(" ","-",$urlname);
	$urlname="/popular/".$urlname.".php";
    
  ?>
                                <li><a
                                        href="<?php echo($urlname); ?>"><?php echo(str_replace("-"," ",$displayname)); ?></a>
                                </li>
                                <?php
    }
    
}
       ?>
                            </ul>
                        </div>
                    </li>
                    <li><a href="../track-booking/">Track Bookings</a></li>
                    <li><a href="../cab-partners">Cab Partners</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <li><a href="javascript:void(Tawk_API.toggle())"><button class="nv-btn"><img src="./images/chat.png"> Chat with Us</button></a></li>
                    <!-- <li><a>
                            <div
                                style="font-size:13px;color:#ffffff;display:flex;border:1px solid #cccccc;background-color:#5c33f6;padding:0 0 0 10px;">
                                Current Time: &nbsp;<div class="digital-clock"> 00:00:00</div>
                            </div>
                        </a></li> -->

                </ul>
            </div>
        </div>
    </nav>
    <section class="banner cr-mask">
        <!-- <div class="overlay"></div> -->
    <!-- <video autoplay="" muted="" loop="" poster="./images/gatwick-home.jpg">
<source src="./videos/intro-video.mp4" type="video/mp4">
</video> -->
<div class="banner-ct">
        <h1 class="header margintop">Cheap Gatwick TaxiHub & Minicab Quote </h1>
        <p class="center-txt hidden-xs">Compare 100's of Cheap Taxi Provider Quotes and Book the cheapest of all with
            additional 10% discount on airport Trips</p>
</div>
        <div class="gt-container">
            <div class="card book">
                <div class="container-fluid">
                    <div class="row">
                        <form onsubmit=" DateSplitter();" action="/myapi/session_create.php" method="POST" id="info">
                            <div class="col-md-1 nopadding">
                                <select class="select" name="" id="ways" required>
                                    <option value="one Way">One Way</option>
                                    <option value="Two Way">Two Way</option>
                                </select>
                            </div>
                            <div class="col-md-2 nopadding">
                                <input type="text" name="pick" id="autocomplete" placeholder="Pickup Postcode"
                                    autocomplete="off" required>
                                <input type="hidden" name="pick_pc" id="autocomplete_pc">
                            </div>

                            <div class="col-md-1 nopadding">
                                <a class="gth-via" data-toggle="modal" data-target="#viapopup">Via +</a>
                            </div>
                            <div class="col-md-2 nopadding">
                                <input type="text" name="drop" id="autocomplete2" autocomplete="off"
                                    placeholder="Dropoff Postcode" required>
                                <input type="hidden" name="drop_pc" id="autocomplete2_pc">
                            </div>
                            <div class="col-md-2 nopadding">
                                <input type="text" class="gt-dp" tabindex="1" placeholder="Pickup Date & Time"
                                    autocomplete="off" id="datetimepicker" name="tempDate" required>
                                <input type="hidden" id="mydate" tabindex="1" name="date" class="controls" value="">
                                <div class="datepicker-popup" style="display:none">
                                    <p>Select Date</p>
                                    <div id="datepicker"></div>
                                    <p>Select Time</p>
                                    <div class="d-flex">
                                        <select class="select" name="" id="hrs" required>
                                            <option value="0">00</option>
                                            <option value="1">01</option>
                                            <option value="2">02</option>
                                            <option value="3">03</option>
                                            <option value="4">04</option>
                                            <option value="5">05</option>
                                            <option value="6">06</option>
                                            <option value="7">07</option>
                                            <option value="8">08</option>
                                            <option value="0">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                        </select>
                                        <select class="select gt-passengers" name="" id="mins" required>
                                            <option value="0">00</option>
                                            <option value="05">05</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="25">25</option>
                                            <option value="30">30</option>
                                            <option value="35">35</option>
                                            <option value="40">40</option>
                                            <option value="45">45</option>
                                            <option value="50">50</option>
                                            <option value="55">55</option>
                                        </select>
                                    </div><br>
                                    <center> <a class="gt-set-date" id="setDate">Set Date and Time</a></center>
                                </div>
                            </div>


                            <div class="col-md-2 nopadding">

                                <input type="text" class="gth-pl" tabindex="1" placeholder="Passengers & Luggages"
                                    autocomplete="off" id="plpicker" name="" required>
                                <div class="pl-popup" style="display:none">
                                <ul>
                                        <li>
                                            <p>Passengers</p>

                                            <select class="gth-select" name="np" required>
                                                <option value="1"> 1 </option>
                                                <option value="2"> 2  </option>
                                                <option value="3"> 3 </option>
                                                <option value="4"> 4 </option>
                                                <option value="5"> 5 </option>
                                                <option value="6"> 6 </option>
                                                <option value="7"> 7 </option>
                                                <option value="8"> 8 </option>
                                                <option value="9"> 9 </option>
                                                <option value="10"> 10 </option>
                                            </select>
                                        </li>
                                        <li>
                                            <p>Luggage (Hand)</p>
                                            <select class="gth-select" name="nl" data-toggle="tooltip" data-placement="auto"
                                        required>
                                        <option value="1" selected> 0 </option>
                                        <option value="1"> 1 </option>
                                        <option value="2"> 2  </option>
                                        <option value="3"> 3 </option>
                                        <option value="4"> 4 </option>
                                        <option value="5"> 5 </option>
                                        <option value="6"> 6 </option>
                                        <option value="7"> 7 </option>
                                        <option value="8"> 8 </option>
                                        <option value="9"> 9 </option>
                                        <option value="10"> 10 </option>
                                    </select>
                                        </li>
                                        <li>
                                            <p>Suitcase</p>
                                            <select class="gth-select" name="nl" data-toggle="tooltip" data-placement="auto"
                                            required>
                                            <option value="1" selected> 0 </option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2  </option>
                                            <option value="3"> 3 </option>
                                            <option value="4"> 4 </option>
                                            <option value="5"> 5 </option>
                                            <option value="6"> 6 </option>
                                            <option value="7"> 7 </option>
                                            <option value="8"> 8 </option>
                                            <option value="9"> 9 </option>
                                            <option value="10"> 10 </option>
                                        </select>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-2 nopadding">
                                <a> <button class="button">Get Quote Now</button></a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="mc-features hidden-xs" id="mc-border">
                <div class="row">
                    <div class="col-md-4 mc-br-rght mc-flex-row">
                        <img class="mc-ft-icon" src="./images/star.svg">
                        <div class="mc-ft-pad ">
                            <h3>Best Rated quotes</h3>
                        </div>
                    </div>
                    <div class="col-md-4 mc-br-rght mc-flex-row">
                        <img class="mc-ft-icon" src="./images/clock.svg">
                        <div class="mc-ft-pad">
                            <h3>Ontime Service</h3>
                        </div>
                    </div>
                    <div class="col-md-4 mc-flex-row">
                        <img class="mc-ft-icon" src="./images/24-7.svg">
                        <div class="mc-ft-pad">
                            <h3>24/7 Support</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-croydon">
        <div class="container">
            <h3>Get a Quote & Book Taxis / Minicabs - Gatwick TaxiHub
            </h3><br><br>
            <div class="row ">
                <div class="col-md-6">
                    <p class="para">Looking for the cheapest and safest taxi service in gatwick airport? Gatwick TaxiHub
                        is the one stop solution for making your travel safer and cheaper, we have special discounts in
                        Airport Transfer services in the Gatwick city, the cost is comparetively cheaper than the other
                        Cab service providers. Compare taxi fare rates and select the best one. Gatwick TaxiHub make
                        your travel very smooth and compact with 100 % perfect time management with Good quality taxi
                        services. Gatwick TaxiHub is Providing the Taxi services in all nearby locations and long
                        distances and Pick-up ,Drop-off in all over UK. Our services are available all Airports, Train
                        Stations ,Sea ports, Hotels, Bars, Restaurants, Schools, Colleges, Universities, Shopping Malls
                        in Gatwick, London and all over UK . customers can book their taxis from anywhere the pick-up
                        and Drop-offs in UK, we are always ready to give a high quality taxi services in UK at 24/7 .Get
                        Special offers and discounts on every taxi bookings.
                    </p>
                    <a href="./about/"> <button class="small-button">Read More</button></a>
                </div>
                <div class="col-md-6">
                    <img src="./images/croydon-airport.svg" style="max-width:600px;width:100%;">
                </div>
            </div>
        </div>
        <h3></h3>

    </section>

    <section class="fleets-croydon" id="our_fleets">
        <div class="container">
            <h3>Our Fleets
            </h3>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <center> <img src="./images/2.png" style="max-width:200px;width:100%;"></center>
                        <p class="fleet-name">Saloon Car</p>
                        <p class="fleet-desc">Toyato prius or Volswagen Passet Similar Car carries upto 4 passenger and
                            2 luggages and 1 handy luggae</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <center><img src="./images/3.png" style="max-width:200px;width:100%;"></center>
                        <p class="fleet-name">Estate Car</p>
                        <p class="fleet-desc">Skoda Superb or Toyota Avensis Similar Car carries upto 4 passenger and 3
                            luggages and 1 handy Luggage</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <center> <img src="./images/4.png" style="max-width:200px;width:100%;"></center>
                        <p class="fleet-name">MPV Car</p>
                        <p class="fleet-desc">Ford Galaxy or Volswagen sharon Similar Car carries upto 6 passenger and 4
                            luggages and 2 handy luggages</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <center> <img src="./images/8.png" style="max-width:200px;width:100%;"></center>
                        <p class="fleet-name">Mini Van</p>
                        <p class="fleet-desc">Mercedez viano or Volswagen Transporter Similar Car carries upto 7
                            passenger and 6 luggages and 3 handy luggages</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-croydon green-background">
        <div class="container">
            <h3>Want to Join us as Partner
            </h3>
            <div class="row">
                <div class="col-md-4">
                    <img src="./images/partner.svg" style="max-width:280px;width:100%;">
                </div>
                <div class="col-md-8">
                    <p class="para">Gatwick Taxihub integrates with partners across the UK to serve local & long
                        distance bookings from our Booking Engine. Attach your Taxis or entire fleet with us to become a
                        partner and get regular jobs with good fares for sure, we charge very less for each booking as
                        commision, why are you still waiting start attching your fleets with us now. No Registration Fee
                        charges, no Pre payments required. Join our Partner Network now.
                    </p>
                    <a href="../cab-partners"> <button class="small-button">Register Now</button></a>
                </div>

            </div>
        </div>
        <h3></h3>

    </section>



    <section class="gt-google-reviews">

        <div class="testimonials">

            <div class="container">
                <h3>See what our customer says about us</h3>
                <div id="carousel-example" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="img-bar">
                                            <img src="./images/user.svg" style="max-width:80px;width:100%;">
                                        </div>
                                        <p class="fleet-name">Riyas Ahamed</p>
                                        <p class="fleet-desc">Good Taxi Ride, ontime Pickup from gatwick airport.</p>
                                        <div class="gt-star-rate">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="img-bar">
                                            <img src="./images/user.svg" style="max-width:80px;width:100%;">
                                        </div>
                                        <p class="fleet-name">Sam Billings</p>
                                        <p class="fleet-desc">Highly recommend one of the most professional taxi
                                            services I’ve come across. Competitive pricing, great communication and the
                                            driver could not have been more helpful. Will definitely recommend and thank
                                            you for the great service.</p>
                                        <div class="gt-star-rate">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="img-bar">
                                            <img src="./images/user.svg" style="max-width:80px;width:100%;">
                                        </div>
                                        <p class="fleet-name">Hannah Patrick</p>
                                        <p class="fleet-desc">Our taxi driver was great - the only problem was that cash
                                            payment was expected. It would have been much easier to pay on-line.</p>
                                        <div class="gt-star-rate">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="img-bar">
                                            <img src="./images/user.svg" style="max-width:80px;width:100%;">
                                        </div>
                                        <p class="fleet-name">priya rovanda</p>
                                        <p class="fleet-desc">I had great time, while I am traveling in Gatwick taxi.
                                            The taxi was on time in the Gatwick airport . So that I need not to wait
                                            with my family for a long time. I feel good and satisfied with the service
                                            provide by the taxi.</p>
                                        <div class="gt-star-rate">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </section>



    <footer>
        <div class="primary-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h3>Airports Covering</h3>
                        <ul class="footer-list">

                            <?php




$query ="Select `name` from `airport` where 1";

$result=  mysqli_query($conn_site,$query);
while($row= mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    if($row["name"] !==  "")
    {
    $displayname =$row["name"];
    
   $urlname = strtolower($displayname);
	$urlname = str_replace(" ","-",$urlname);
	$urlname="/popular/".$urlname.".php";
    
  ?>
                            <li><a href="<?php echo($urlname); ?>"><?php echo(str_replace("-"," ",$displayname)); ?></a>
                            </li>
                            <?php
    }
    
}
       ?>

                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h3>Train Station</h3>
                        <ul class="footer-list">


                            <?php




$query ="Select `name` from `trainstation` where 1";

$result=  mysqli_query($conn_site,$query);
while($row= mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    if($row["name"] !==  "")
    {
    $displayname =$row["name"];
    
   $urlname = strtolower($displayname);
	$urlname = str_replace(" ","-",$urlname);
	$urlname="/popular/".$urlname.".php";
    
  ?>
                            <li><a href="<?php echo($urlname); ?>"><?php echo(str_replace("-"," ",$displayname)); ?></a>
                            </li>
                            <?php
    }
    
}

?>


                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h3>Locations</h3>
                        <ul class="footer-list">

                            <?php




$query ="Select `name` from `cities` where 1";

$result=  mysqli_query($conn_site,$query);
while($row= mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    if($row["name"] !==  "")
    {
    $displayname =$row["name"];
    
   $urlname = strtolower($displayname);
	$urlname = str_replace(" ","-",$urlname);
	$urlname="/popular/".$urlname.".php";
    
  ?>
                            <li><a href="<?php echo($urlname); ?>"><?php echo(str_replace("-"," ",$displayname)); ?></a>
                            </li>
                            <?php
    }
    
}
       ?>

                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h3>Reach us at</h3>
                        <ul class="footer-list">
                            <li><a>Email: booking@gatwicktaxihub.com</a></li>
                            <li><a>complaints: complaint@gatwicktaxihub.com</a></li>
                            <a href="#" class="social fa fa-facebook"></a>
                            <a href="#" class="social fa fa-twitter"></a>
                            <a href="#" class="social fa fa-google"></a>
                        </ul><br>
                        <ul class="ad-links"><a href="../help"> FAQ's</a>
                            <a href="../terms-and-conditions">Terms and Conditions</a></ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p class="pull-left"> Copyright © Gatwick Taxihub 2020. Powered by <a href="https://gatwicktaxihub.com"
                        style="color:#4dc199">Gatwick Taxihub</a> </p>
                <div class="pull-right">
                    <ul class="nav nav-pills payments">
                        <li><i class="fa fa-cc-visa"></i></li>
                        <li><i class="fa fa-cc-mastercard"></i></li>
                        <li><i class="fa fa-cc-amex"></i></li>
                        <li><i class="fa fa-cc-paypal"></i></li>
                    </ul>
                </div>
            </div>
        </div>

    </footer>

    <!-- Modal -->
    <div class="modal fade" id="viapopup" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Via Points</h4>
                </div>
                <div class="modal-body">
                    <input type="text" name="via" id="autocomplete3" autocomplete="off" placeholder="Dropoff Postcode">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Proceed</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Product",
            "name": "Gatwick Taxihub",
            "url": "https://gatwicktaxihub.com",
            "image": "https://gatwicktaxihub.com/images/croydon-airport.svg",
            "description": "Gatwick Airport Cheap Taxis and Minicabs Online",
            "brand": "Gatwick TaxiHub",
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.6",
                "bestRating": "5",
                "ratingCount": "67"
            }
        }
    </script>

    <?php include 'login.php';?>

    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $("#offermodal").css({
                    'display': 'block',
                    "opacity": "1",
                    'background-color': 'rgb(0 0 0 / 26%)'
                });
            }, 5000);

            $(".close").on("click", function () {
                $(".modal").hide();
            });
        });
    </script>


    <script>
        var placeSearch, autocomplete, autocomplete2, autocomplete3;

        function initAutocomplete() {

            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */
                (document.getElementById('autocomplete')), {
                    types: ['geocode'],
                    componentRestrictions: {
                        country: 'uk'
                    }
                });




            // When the user selects an address from the dropdown, populate the address
            // fields in the form.
            autocomplete.addListener('place_changed', fillInAddress);


            autocomplete2 = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */
                (document.getElementById('autocomplete2')), {
                    types: ['geocode'],
                    componentRestrictions: {
                        country: 'uk'
                    }
                });




            // When the user selects an address from the dropdown, populate the address
            // fields in the form.
            autocomplete2.addListener('place_changed', fillInAddress);


            autocomplete3 = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */
                (document.getElementById('autocomplete3')), {
                    types: ['geocode'],
                    componentRestrictions: {
                        country: 'uk'
                    }
                });




            // When the user selects an address from the dropdown, populate the address
            // fields in the form.
            autocomplete3.addListener('place_changed', fillInAddress);


        }


        function fillInAddress() {
            // Get the place details from the autocomplete object.
            var place = autocomplete.getPlace();

            for (var component in componentForm) {
                document.getElementById(component).value = '';
                document.getElementById(component).disabled = false;
            }

            // Get each component of the address from the place details
            // and fill the corresponding field on the form.
            for (var i = 0; i < place.address_components.length; i++) {
                var addressType = place.address_components[i].types[0];
                if (componentForm[addressType]) {
                    var val = place.address_components[i][componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                }
            }
            var place = autocomplete2.getPlace();

            for (var component in componentForm) {
                document.getElementById(component).value = '';
                document.getElementById(component).disabled = false;
            }

            // Get each component of the address from the place details
            // and fill the corresponding field on the form.
            for (var i = 0; i < place.address_components.length; i++) {
                var addressType = place.address_components[i].types[0];
                if (componentForm[addressType]) {
                    var val = place.address_components[i][componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                }
            }

            var place = autocomplete3.getPlace();

            for (var component in componentForm) {
                document.getElementById(component).value = '';
                document.getElementById(component).disabled = false;
            }

            // Get each component of the address from the place details
            // and fill the corresponding field on the form.
            for (var i = 0; i < place.address_components.length; i++) {
                var addressType = place.address_components[i].types[0];
                if (componentForm[addressType]) {
                    var val = place.address_components[i][componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                }
            }



        }
    </script>

    <script>
        $(function () {
            $("#datepicker").datepicker();
        });
        $("#datetimepicker").focus(function () {
            $('.datepicker-popup').show();
        });
        $('#setDate').click(function () {

            var myDate = $('.ui-state-active').parent().attr("data-year") + " " + (parseInt($(
                    '.ui-state-active').parent().attr("data-month")) + 1) + " " + $('.ui-state-active').html() +
                " " + $('#hrs').val() + " " + $('#mins').val();
            var tempDate = $('.ui-state-active').parent().attr("data-year") + "/" + (parseInt($(
                    '.ui-state-active').parent().attr("data-month")) + 1) + "/" + $('.ui-state-active').html() +
                " " + $('#hrs').val() + ":" + $('#mins').val();
            $('#mydate').val(myDate);
            $('#datetimepicker').val(tempDate);
            $('.datepicker-popup').hide();
        });
    </script>

    <!-- <script>
	 $("#plpicker").focus(function(){
        $('.pl-popup').show();
     }
        </script> -->

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/59fc608ebb0c3f433d4c6dff/1enadeh3s';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBauQAxB_oaAk4z-NQN2BkhmD4AxzA2l6M&libraries=places&callback=initAutocomplete"
        async="" defer=""></script>



</body>

</html>