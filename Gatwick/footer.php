
<section class="mc-partner-program green-background">
        <div class="container">
            <h3>Want to Join us as Partner
            </h3><br><br>
            <div class="row">
                <div class="col-md-4">
                    <img src="../assets/images/partners.jpg" style="max-width:400px;width:100%;">
                </div>
                <div class="col-md-8">
                    <p class="para">Minicabee integrates with partners across the UK to serve local &amp; long distance bookings from our Booking Engine. Attach your Taxis or entire fleet with us to become a partner and get regular jobs with good fares for sure, we charge very less for each booking as commision, why are you still waiting start attching your fleets with us now. No Registration Fee charges, no Pre payments required. Join our Partner Network now.
                    </p>
                    <a href="../cabpartner/"><button class="small-button">Register Now</button></a>
                </div>

            </div>
        </div>
        <h3></h3>

    </section>
    
    <div id="myNav" class="overlay visible-xs">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <div class="overlay-content">
    <a href="../sitemap/">Areas Covering</a>
    <a href="../about/">About Us</a>
    <a href="../track/">Track Bookings</a>
    <a href="../cabpartner/">Cab Partners</a>
    <a href="tel:+441293344804">Call us : 01293344804</a>   
  </div>
</div>
<script>
function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}
</script>
    
<footer class="footer hidden-sm hidden-xs">
    <div class="container">
<div class="row topping">
      <div class="col-md-3 col-xs-6">
        <p>Locations</p>
    <ul>  
    <?php




$query ="Select `name` from `cities` where 1";

$result=  mysqli_query($conn,$query);
while($row= mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    if($row["name"] !==  "")
    {
    $displayname =$row["name"];
    
   $urlname = strtolower($displayname);
	$urlname = str_replace(" ","-",$urlname);
	$urlname="/popular/".$urlname.".php";
    
  ?>
        <li><a href="<?php echo($urlname); ?>"><?php echo($displayname); ?></a></li>
       <?php
    }
    
}
       ?>
    </ul>
    </div>
     <div class="col-md-3 col-xs-6">
        <p>AIRPORTS</p>
    <ul>  
          <?php




$query ="Select `name` from `airport` where 1";

$result=  mysqli_query($conn,$query);
while($row= mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    if($row["name"] !==  "")
    {
    $displayname =$row["name"];
    
   $urlname = strtolower($displayname);
	$urlname = str_replace(" ","-",$urlname);
	$urlname="/popular/".$urlname.".php";
    
  ?>
        <li><a href="<?php echo($urlname); ?>"><?php echo($displayname); ?></a></li>
       <?php
    }
    
}
       ?>

    </ul>
    </div>
     <div class="col-md-3 col-xs-6">
        <p>TRAIN STATIONS</p>
    <ul>  
           <?php




$query ="Select `name` from `trainstation` where 1";

$result=  mysqli_query($conn,$query);
while($row= mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    if($row["name"] !==  "")
    {
    $displayname =$row["name"];
    
   $urlname = strtolower($displayname);
	$urlname = str_replace(" ","-",$urlname);
	$urlname="/popular/".$urlname.".php";
    
  ?>
        <li><a href="<?php echo($urlname); ?>"><?php echo($displayname); ?></a></li>
       <?php
    }
    
}
       ?>

    </ul>
    </div>
      <div class="col-md-3 col-xs-6">
        <p>COMPANY</p>
    <ul>  
        <li><a href="./about/">About Us</a></li>
        <li><a href="#">Locations</a></li>
        <li><a href="#">Discounts</a></li>
        <li><a href="./">Book a Ride</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms & Conditions</a></li>
    </ul>
    </div>
 
    </div>
     <center>
      <ul class="social-network social-circle">
                        <li><a href="https://www.facebook.com/MiniCabee-540741142988885/" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/MiniCabee" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="https://in.pinterest.com/minicabee" class="icoGoogle" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>

                    </ul>	</center>
                           <!-- TrustBox widget - Review Collector --> <div class="trustpilot-widget" data-locale="en-GB" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="5d2f40c06653d10001fec533" data-style-height="52px" data-style-width="100%"> <a href="https://uk.trustpilot.com/review/minicabee.co.uk" target="_blank" rel="noopener">Trustpilot</a> </div> <!-- End TrustBox widget -->
    </div>
</footer>
     <div class="darkfooter">
         <div class="container">
             <div class="row">
                  <div class="col-md-6">
                   <p>© Copyrights 2020 Minicabee. All rights reserved.</p>
                 </div>
                 <div class="col-md-6 hidden-sm hidden-xs">
             <ul class="mc-bottom-links">
                 <li><a href="../sitemap/">Sitemap</a></li>
                 <li><a href="">Help</a></li>
                 <li>Terms & Conditions</li>
             </ul>
                 </div>
                
             </div>
             
             </div>



<!-- navbar-Modal -->
<div class="modal modal-bg mobile-nav" id="mobilenav" tabindex="-1" role="dialog" aria-labelledby="mobilenav" aria-hidden="true" style="padding-left:0px !important;">
    <div class="modal-dialog mobile-modal-dialog" role="document">
        <div class="modal-content mobile-content" style="border-radius: 0px;border:none;">
            <div class="modal-header mobile-header">
                <div class="row">
                    <div class="col-5">
                        <button type="button" class="close" style="float:left;margin-top:0px;padding-left:10px;" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-times" aria-hidden="true" style="font-size:25px;color:black !important;"></i>
                        </button>
                    </div>
                    <div class="col-7">
                        <a class="mobile-call">Call us Now </a>
                    </div>
                </div>
            </div>
            <div class="modal-body mobile-modal-body">
                <div class="passengerlink">
                    <p>Passenger</p>
                    <ul>

                   <a href="./areas/"><li>Areas Covering</li></a>
                 <a href="./track/"><li>Track Bookings</li></a>
                <a href="./cabpartner"><li>Cab Partners</li></a>
                    <a href="./sign"><li>signin / Signup</li></a>
                    </ul>
                </div>
                <!--<div class="partnerlink">-->
                <!--    <p>Partners</p>-->
                <!--    <ul>-->
                <!--        <li>Signup with us</li>-->
                <!--        <li>Login Now</li>-->
                <!--        <li>Terms & Conditions</li>-->
                <!--    </ul>-->
                <!--</div>-->
            </div>
        </div>
    </div>
</div>
<!-- modal dialog end -->

