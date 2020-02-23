<?php

session_start();

include("connect.php");
if(!$conn)
{
    echo("Server Connection failed");
    
}

else
{
    
   // $src="dsdg"; 
    if (isset($_REQUEST['start'])&&isset($_REQUEST['end'])&&isset($_REQUEST['via'])&& isset($_REQUEST['dt'])&& isset($_REQUEST['pt'])&& isset($_REQUEST['np'])&& isset($_REQUEST['nl'])&& isset($_REQUEST['type'])&& isset($_REQUEST['time'])&& isset($_REQUEST['agency'])&& isset($_REQUEST['fare'])&& isset($_REQUEST['dist'])) 
    {
    $src = $_REQUEST['start'];
    $des = $_REQUEST['end']; 
    $dt= $_REQUEST['dt']; 
     $pt= $_REQUEST['pt']; 
     $np = $_REQUEST['np']; 
        $nl=$_REQUEST['nl']; 
         $type=$_REQUEST['type']; 
        $time=$_REQUEST['time'];
       $agency= $_REQUEST['agency'];
         $fare=$_REQUEST['fare'];
       $dist=$_REQUEST['dist'];
        $via=$_REQUEST['via'];
    }
    
    $src = $_REQUEST['start'];
    $des = $_REQUEST['end']; 
    $dt= $_REQUEST['dt']; 
     $pt= $_REQUEST['pt']; 
     $np = $_REQUEST['np']; 
        $nl=$_REQUEST['nl']; 
         $type=$_REQUEST['type']; 
        $time=$_REQUEST['time'];
       $agency= $_REQUEST['agency'];
         $fare=$_REQUEST['fare'];
       $dist=$_REQUEST['dist'];
        $via=$_REQUEST['via'];
    
     $apply=$_REQUEST['promo'];
    
    if($via=="")
    {
        $via="N/A";
    }
    
    
$rdate=$_SESSION["rdate"];
$rptime=$_SESSION["rtime"];
  // echo($src);echo($des);echo($dt);echo($np);echo($nl);echo($type);echo($time);echo($src);echo($agency);
   //echo($via);
 
 $cc=" ";
   
 ?>  

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gatwick Airport Taxis </title>
   <link rel="icon" href="./images/icon.png" type="image/gif" sizes="16x16">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <script src="./js/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Muli|Niramit|Open+Sans|Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>  
<body>
<section class="info container">
        <div class="row">
            <div class="col-md-7">
                   <div class="card headingtab"> <h3 class="text-secondary">Journey Information</h3></div>
                <form action="conform.php" method="Request" style=" background-color: white;">
        <input type="hidden" value="<?php echo $src; ?>" name="start">
                                             <input type="hidden" value="<?php echo $des; ?>" name="end">
                                              <input type="hidden" value="<?php echo $via; ?>" name="via">
                                             <input type="hidden" value="<?php echo $np; ?>" name="np">
                                             <input type="hidden" value="<?php echo $nl; ?>" name="nl">
                                             
                                             <input type="hidden" value="<?php echo $dt; ?>" name="dt">
                                             <input type="hidden" value="<?php echo $pt; ?>" name="pt">
                                             <input type="hidden" value="<?php echo $time; ?>" name="time">
                                              <input type="hidden" value="<?php echo $dist; ?>" name="dist">
                                             <input type="hidden" value="<?php echo $type; ?>" name="type">
                                             <input type="hidden" value="<?php echo $agency; ?>" name="agency">
                                             
                                             <input type="hidden" value="<?php echo ($fare); ?>" name="fare">
                   <div class="card infotab">
                       <div class="row">
               <div class="col-md-6 ">
                   <label >Passenger Name:</label>
                   <input type="text" name="name"  placeholder="Enter Passenger Name">
                       </div>
                               <div class="col-md-6">
                   <label >Passenger  Email:</label>
                   <input type="text" name="mail" placeholder="Enter Passenger Email" >
                       </div></div> 
                        <div class="row">
                             <div class="col-md-6 ">
                   <label >Contact Number:</label>
                   <input type="text" name="number1" placeholder="Enter Passenger Contact" value="+44">
                       </div>
                            <div class="col-md-6 ">
                   <label >Alternate Number:</label>
                   <input type="text" name="number2"  placeholder="Enter Alternate Contact" value="+44">
                            </div></div>
                           <div class="row">
                             <div class="col-md-6">
                   <label >Pickup Full Address:</label>
                   <input type="text" name="address1" placeholder="Eg:Building Number, Flat No"  >
                       </div>
                            <div class="col-md-6">
                   <label >Dropoff Full Address:</label>
                   <input type="text" name="address2" placeholder="Eg:Building Number, Flat No" >
                            </div></div>
                           <div class="row">
                             <div class="col-md-6 ">
                   <label >Flight Details:</label>
                   <input type="text" name="pickup" placeholder="Eg: B789" >
                       </div>
                            <div class="col-md-6 ">
                   <label >Payment Mode:</label>
             <select class="select" name="payment" >
               <option value="1">Debit / Credit Card (3% Admin Charges)</option>
               <option value="2">Paypal Transaction(5% Card Charges)</option>
               <option value="3">Cash on Ride (Deposit Required)</option>
             </select>
                            </div></div>
                             <div class="row">
                             <div class="col-md-6">
                   <label >Meet & Greet(£10.00):</label>
                   <select  class="select" name="check">
               <option value="0">No I don't Need </option>
               <option value="10">Yes I Need Meet & Greet.</option>
             </select>
                       </div>
                            <div class="col-md-6 ">
                   <label >Child Seat(£5.00 each):</label>
                   <select  class="select" name="child" >
                 <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
             </select>
                            </div></div>
                                 <div class="row">
                                       <div class="col-md-12"><br>
                                 <label >Special information to us (optional):</label>
                                   <textarea class="select" rows="3" id="comment" name="info"></textarea>
                                     </div></div>
                                     <div class="row">
                                           <div class="col-md-12"><br>
                                     <label >Do you have promo code?</label><br>
                                     <form class="navbar-form navbar-left" action="/action_page.php">
                                       <div class="form-group">
                                         <input type="text" class="form-control" placeholder="Enter Promo Code">
                                       </div>
                                       <button type="submit" class="btn btn-primary">Apply</button>
                                     </form>
                                         </div></div>
                      <div class="checkbox">
             <label><input type="checkbox" value=""> I Agree the <a href="index.html">Terms and Conditions</a> Mentioned by your Company</label>
           </div><br>
                    <center> <button class="btn btn-primary">Book Now</buton></center>   
        

            </div>
                
                </form>    
                
        </div>
        <div class="col-md-5">
               <div class="card headingtab"><h3 class="text-secondary">Details Provided</h3></div>
                    <div class="card infotab">
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
             <div class="card headingtab"><h3 class="text-secondary">Booking Note</h3></div>
             <div class="card infotab">
                 <ul>
                <li> <p>All Bookings made in the website needs further confirmation through email by <b>tapping the button </b>on your booking information Email, which will be automatically sent when you booked a Cab.</p></li>
                <li> <p> Bookings made with Cash on Ride requires <b>minimum 10% Deposit </b>as the booking confirmation fails to pay deposit leads to cancellation of booking.</p></li>
                <li> <p> In case of any cancellation of the booking should be made<b> before 24 hours of the journey </b>fails to do leads to Admin charges and refund the Balance ( applicable for paid Bookings).
                    </p></li></ul>
             </div>
             <div class="card headingtab"><h3 class="text-secondary">Need any help?</h3></div>
             <div class="card infotab">
                   <ul>
                           <li> <p><b>For Bookings: </b>+44 01293344804</p></li>
                           <li> <p><b>For instant Reply:</b> Initiate Live Chat</p></li>
                           <li> <p><b>For Complaints:</b> complaints@gatwick-airporttaxis.com</p></li>
                 </ul>
             </div>
               </div>
               </div>
        </section></body></html>
    
    
     <?php

}

?>  