<?php

$apipath = $_SERVER['DOCUMENT_ROOT']."/myapi/";
$spath = $_SERVER['DOCUMENT_ROOT']."/connection/connect.php";
include($spath);

?>

<!DOCTYPE html>
  <html lang="en">
  
  <title> About Us | Gatwick TaxiHub</title>
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
  <!-- <script src="./js/jquery.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/indexjs.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  </head>  
<body>
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
                    <div class="xd-dropdown-content txh-dropdown">
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
            <li><a href="javascript:void(Tawk_API.toggle())"><button class="small-button"><i
                    class="fa fa-comment-dots"></i> Chat with Us</button></a></li>
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
<section class="aboutus container">
<h1 class="a1">About Us</h1>
<div class="row">
    <div class="col-md-12">
<p class="para">In Gatwick Airport Taxis we offer best in class services for all your brighton rides and other rides across gatwick, heathrow,london in Crawley Taxis. We also offer great customer friendly minicabs and taxis for your trips around the clock for 24 hours a day and all the time of the week. Book a cheap taxi online in Crawley Taxis and enjoy your ride with best in class cheap local taxi in gatwick, heathrow, brighton. We offer taxis for all your needs like airport transfers, ASAP ride in a neat and cheap taxi in the uk. We offer various cabs at a very budget friendly price for our valuable customers in gatwick, heathrow, london and all over uk.
   <br><br>
   At Gatwick Taxis have a various fleet of cabs including Low cost Taxis, Luxury Taxis , Budget Taxis, Quick time Taxis ,Airport Taxis ,Train station taxis and Car hireservices. We are working 24*7 for serving our customers, so we can offer you ASAP bookings for your important rides at very low cost or cheap taxi with full happiness at our times of distress. so booking a cab will be as easy as clicking a button. Crawley Taxis is a major taxi and minicabs providers based on crawley and servies all across the gatwick, heathrow, brighton, london. So if you want to book a minicab or cheap taxi we will offer you low fare cheap taxi in gatwick, heathrow, london at Crawley Taxis.
</p><br></div>
<div class="col-md-12"><center><img src="../images/england.jpg" style="max-width:100%;"></center></div>
</div>
<br><hr>
<h1 class="a1">Comfortable and Professional Services at ASAP</h1>
<br>
<p class="para">At Gatwick Airport Taxis we offer professional services for all our customer in gatwick, heathrow, brighton, london by using professional drivers all across the uk. these drivers are well trained in a recoginsed institution and they offer great customer friendly services to the customers they are working for. Our drivers are quite neat, punctuality, quickly serve you with your trips. At Crawley Taxis we value safety of our customer at most so all our valuable customers will be pickedup and drop off in their respective locations in a safety manner. Britnnia Cars will ensure that you had a safety and pleasant journey with us all the time
    <br><br>Gatwick Airport Taxis will pick up and drop their customers in a timely manner so that you will not miss your flights at anytime due to us. So you just need to be sure that you packed all your things in time that there will be no delay by our Crawley Taxis drivers. We take airport pickups from brighton to gatwick airport taxi booking , brighton to heathrow airport taxi booking london , brighton to stansted airport taxi booking , brighton to luton airports taxi booking , brighton to london city airport taxi booking ,brighton to birmingham airport taxi booking,brighton to southend airport taxi booking , brighton to bristol airport taxi booking , brighton to cambridge airport taxi booking also heathrow airport to brighton taxi booking , gatwick airport to brighton taxi booking ,luton airport to brighton taxi booking , stansted airport to brighton taxi booking , birmingham airport to brighton taxi booking ,cambridge airport to brighton taxi booking , bristol airport to brighton taxi booking , london city airport to brighton taxi booking , southend airport to brighton taxi booking ,all airports to and from brighton and other places at cheap fare in Crawley Taxis where you will be assured of safety, quick timining and customer support for all your bookings with us in gatwick, heathrow, brighton and london at Gatwick Airport Taxis.
</p>
</section>

    
    <section class="about-croydon green-background">
    <div class="container">
        <h3>Want to Join us as Partner
</h3><br><br>
<div class="row">
    <div class="col-md-4">
    <img src="../images/partner.svg" style="max-width:280px;width:100%;">
</div>
    <div class="col-md-8">
<p class="para">Minicabee integrates with partners across the UK to serve local & long distance bookings from our Booking Engine. Attach your Taxis or entire fleet with us to become a partner and get regular jobs with good fares for sure, we charge very less for each booking as commision, why are you still waiting start attching your fleets with us now. No Registration Fee charges, no Pre payments required. Join our Partner Network now.
</p>
<button class="small-button">Register Now</button>
</div>

</div>
    </div>
  <h3></h3>  
    
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

    
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/59fc608ebb0c3f433d4c6dff/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
