<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Booking Information | Gatwick Taxis </title>
    <link rel="icon" href="../images/favicon.png" type="image/gif" sizes="16x16">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Muli|Niramit|Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Gatwick <span>Taxis</span></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav center-nav">
                    <li><a href="../about.html">About</a></li>
                    <li><a href="#our_fleets">Our Fleets</a></li>
                    <li><a href="../areas/">Areas Covering</a></li>
               <li><a href="../track-booking/">Track Bookings</a></li>
                    <li><a href="../fixed-fares">Fixed Fares</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="login">Login</a></li>
                    <li><a class="signup">Signup</a></li>
                </ul>
            </div>
        </div>
    </nav>
<section class="info container top-margin">
        <div class="row">
            <div class="col-md-7">
                   <div class="quote-card headingtab"> <h3 class="text-secondary">Journey Information</h3></div>
                   <div class="quote-card infotab">
                       <div class="row">
               <div class="col-md-6 ">
                   <label >Passenger Name:</label>
                   <input type="text"  class="controls" placeholder="Enter Passenger Name">
                       </div>
                               <div class="col-md-6">
                   <label >Passenger  Email:</label>
                   <input type="text"  class="controls"  placeholder="Enter Passenger Email" >
                       </div></div> 
                        <div class="row">
                             <div class="col-md-6 ">
                   <label >Contact Number:</label>
                   <input type="text" class="controls"  placeholder="Enter Passenger Contact" value="+44">
                       </div>
                            <div class="col-md-6 ">
                   <label >Alternate Number:</label>
                   <input type="text"  class="controls"  placeholder="Enter Alternate Contact" value="+44">
                            </div></div>
                           <div class="row">
                             <div class="col-md-6">
                   <label >Pickup Full Address:</label>
                   <input type="text"  class="controls"  placeholder="Eg:Building Number, Flat No"  >
                       </div>
                            <div class="col-md-6">
                   <label >Dropoff Full Address:</label>
                   <input type="text" class="controls"  placeholder="Eg:Building Number, Flat No" >
                            </div></div>
                           <div class="row">
                             <div class="col-md-6 ">
                   <label >Flight Details:</label>
                   <input type="text" class="controls"   placeholder="Eg: B789" >
                       </div>
                            <div class="col-md-6 ">
                   <label >Payment Mode:</label>
             <select class="select" >
               <option value="1">Debit / Credit quote-card (3% Admin Charges)</option>
               <option value="2">Paypal Transaction(5% quote-card Charges)</option>
               <option value="3">Cash on Ride (Deposit Required)</option>
             </select>
                            </div></div>
                             <div class="row">
                             <div class="col-md-6">
                   <label >Meet & Greet(£10.00):</label>
                   <select  class="select">
               <option value="1">No I don't Need </option>
               <option value="2">Yes I Need Meet & Greet.</option>
             </select>
                       </div>
                            <div class="col-md-6 ">
                   <label >Child Seat(£5.00 each):</label>
                   <select  class="select">
               <option value="1">No I don't Need </option>
               <option value="2">Yes I Need Meet & Greet.</option>
             </select>
                            </div></div>
                                 <div class="row">
                                       <div class="col-md-12"><br>
                                 <label >Special information to us (optional):</label>
                                   <textarea class="select" rows="3" id="comment"></textarea>
                                     </div></div>
                                
                      <div class="checkbox">
             <label><input type="checkbox" value=""> I Agree the <a href="index.html">Terms and Conditions</a> Mentioned by your Company</label>
           </div><br>
                    <center> <a href="../success.html" class="small-button">Book Now</a></center>   
        <br>

            </div>
        </div>
        <div class="col-md-5">
               <div class="quote-card headingtab"><h3 class="text-secondary">Details Provided</h3></div>
                    <div class="quote-card infotab">
                   <table>
         <tr>
           <td>Pickup From:</td>
           <td>Gatwick Airport North Terminal Approach </td>
         </tr>
         <tr>
           <td>Dropoff To:</td>
           <td>Heathrow Airport Terminal 5</td>
         </tr>
         <tr>
           <td>Passengers:</td>
           <td>1</td>
         </tr>
         <tr>
           <td>Luggages:</td>
           <td>1</td>
         </tr>
           <tr>
           <td>Cab Type:</td>
           <td>Saloon x 1</td>
         </tr>            
         <tr>
           <td>Date & Time:</td>
           <td>11/10/2018 12:30</td>
         </tr>
         <tr>
           <td>Total Fare:</td>
           <td>£50.00</td>
         </tr>
       </table>                
      
             </div>
             <div class="quote-card headingtab"><h3 class="text-secondary">Booking Note</h3></div>
             <div class="quote-card infotab">
                 <ul>
                <li> <p>All Bookings made in the website needs further confirmation through email by <b>tapping the button </b>on your booking information Email, which will be automatically sent when you booked a Cab.</p></li>
                <li> <p> Bookings made with Cash on Ride requires <b>minimum 10% Deposit </b>as the booking confirmation fails to pay deposit leads to cancellation of booking.</p></li>
                <li> <p> In case of any cancellation of the booking should be made<b> before 24 hours of the journey </b>fails to do leads to Admin charges and refund the Balance ( applicable for paid Bookings).
                    </p></li></ul>
             </div>
             <div class="quote-card headingtab"><h3 class="text-secondary">Need any help?</h3></div>
             <div class="quote-card infotab">
                   <ul>
                           <li> <p><b>For Bookings: </b>+44 01293344804</p></li>
                           <li> <p><b>For instant Reply:</b> Initiate Live Chat</p></li>
                           <li> <p><b>For Complaints:</b> complaints@gatwick-airporttaxis.com</p></li>
                 </ul>
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
                            <li><a href="/heathrow-airport-taxi">Heathrow Airport Taxi</a></li>
                            <li><a href="/gatwick-airport-taxi">Gatwick Airport Taxi</a></li>
                            <li><a href="/stansted-airport-taxi">Stansted Airport Taxi</a></li>
                            <li><a href="/luton-airport-taxi">Luton Airport Taxi</a></li>
                            <li><a href="/london-city-airport-taxi">London City Airport Taxi</a></li>
                            <li><a href="/manchester-airport-taxi">Manchester Airport Taxi</a></li>
                            <li><a href="/edinburgh-airport-taxi">Edinburgh Airport Taxi</a></li>
                            <li><a href="/glasgow-airport-taxi">Glasgow Airport Taxi</a></li>
                            <li><a href="/birmingham-airport-taxi">Birmingham Airport Taxi</a></li>
                            <li><a href="/liverpool-john-lennon-airport-taxi">Liverpool Airport Taxi</a></li>
                            <li><a href="/east-midlands-airport-taxi">East Midlands Airport Taxi</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h3>Train Station</h3>
                        <ul class="footer-list">
                            <li><a href="/victoria-station-taxi">Victoria Station Taxi</a></li>
                            <li><a href="/paddington-station-taxi">Paddington Station Taxi</a></li>
                            <li><a href="/reading-station-taxi">Reading Station Taxi</a></li>
                            <li><a href="/birmingham-new-street-station-taxi">Birmingham New Street Station Taxi</a></li>
                            <li><a href="/manchester-piccadilly-station-taxi">Manchester Piccadilly Station Taxi</a></li>
                            <li><a href="/charing-cross-station-taxi">Charing Cross Station Taxi</a></li>
                            <li><a href="/kings-cross-station-taxi">Kings Cross Station Taxi</a></li>
                            <li><a href="/stratford-station-taxi">Stratford Station Taxi </a></li>
                            <li><a href="/london-bridge-station-taxi">London Bridge Station Taxi</a></li>
                            <li><a href="/euston-station-taxi">Euston Station Taxi</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h3>Locations</h3>
                        <ul class="footer-list">
                            <li><a href="/horsham-taxi">Horsham Taxi</a></li>
                            <li><a href="/crawley-taxi">Crawley Taxi</a></li>
                            <li><a href="/heathrow-taxi">Heathrow Taxi</a></li>
                            <li><a href="/london-taxi">London Taxi</a></li>
                            <li><a href="/datford-taxi">Datford Taxi</a></li>
                            <li><a href="/croydon-taxi">Croydon Taxi</a></li>
                            <li><a href="/datford-taxi">Datford Taxi</a></li>
                            <li><a href="/gatwick-taxi">Gatwick Taxi</a></li>
                            <li><a href="/birmingham-taxi">Birmingham Taxi</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h3>Reach us at</h3>
                        <ul class="footer-list">
                            <li><a>Call us at : 01293344804</a></li>
                            <li><a>Email: booking@gatwick-airporttaxis.com</a></li>
                             <li><a>complaints: complaint@minicabee.co.uk</a></li>
                            <a href="#" class="social fa fa-facebook"></a>
                            <a href="#" class="social fa fa-twitter"></a>
                            <a href="#" class="social fa fa-google"></a>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p class="pull-left"> Copyright © Gatwick Airport Taxis 2020. Powered by <a href="https://minicabee.co.uk" style="color:#4dc199">Minicabee</a> </p>
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
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/59fc608ebb0c3f433d4c6dff/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();

    </script>
    
    </body></html>
       