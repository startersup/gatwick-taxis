   
<?php


session_start();


$sessionparams = $_REQUEST['q'];

$apipath = $_SERVER['DOCUMENT_ROOT'] . "/myapi/";
$spath = $_SERVER['DOCUMENT_ROOT'] . "/connection/connect.php";
include($spath);
include($apipath . "get_session.php");

$id = $_SESSION[$sessionparams]['bid'];
$rid = $_SESSION[$sessionparams]['rid'];

if ($_SESSION[$sessionparams]['rdate'] == "") {
    $message = '
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0;">
        <meta name="format-detection" content="telephone=no"/>
        <style>
            @font-face {
      font-family: ' . "'" . 'Lato' . "'" . ';
      font-style: normal;
      font-weight: 400;
      src: local( ' . "'" . 'Lato Regular' . "'" . '), local(' . "'" . 'Lato-Regular' . "'" . '), url(https://fonts.gstatic.com/s/lato/v15/S6uyw4BMUTPHjxAwXjeu.woff2) format(' . "'" . 'woff2' . "'" . ');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
      font-family: ' . "'" . 'Lato' . "'" . ';
      font-style: normal;
      font-weight: 400;
      src: local( ' . "'" . 'Lato Regular' . "'" . '), local(' . "'" . 'Lato-Regular' . "'" . '), url(https://fonts.gstatic.com/s/lato/v15/S6uyw4BMUTPHjx4wXg.woff2) format(' . "'" . 'woff2' . "'" . ');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* latin-ext */
    @font-face {
      font-family: ' . "'" . 'Lato' . "'" . ';
      font-style: normal;
      font-weight: 700;
      src: local( ' . "'" . 'Lato-Bold' . "'" . '), local(' . "'" . 'Lato-Bold' . "'" . '), url(https://fonts.gstatic.com/s/lato/v15/S6u9w4BMUTPHh6UVSwaPGR_p.woff2) format(' . "'" . 'woff2' . "'" . ');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
      font-family: ' . "'" . 'Lato' . "'" . ';
      font-style: normal;
      font-weight: 700;
      src: local( ' . "'" . 'Lato-Bold' . "'" . '), local(' . "'" . 'Lato-Bold' . "'" . '), url(https://fonts.gstatic.com/s/lato/v15/S6u9w4BMUTPHh6UVSwiPGQ.woff2) format(' . "'" . 'woff2' . "'" . ');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* latin-ext */
    @font-face {
      font-family: ' . "'" . 'Lato' . "'" . ';
      font-style: normal;
      font-weight: 900;
      src: local( ' . "'" . 'Lato-Black' . "'" . '), local(' . "'" . 'Lato-Black' . "'" . '), url(https://fonts.gstatic.com/s/lato/v15/S6u9w4BMUTPHh50XSwaPGR_p.woff2) format(' . "'" . 'woff2' . "'" . ');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
      font-family: ' . "'" . 'Lato' . "'" . ';
      font-style: normal;
      font-weight: 900;
      src: local( ' . "'" . 'Lato-Black' . "'" . '), local(' . "'" . 'Lato-Black' . "'" . '), url(https://fonts.gstatic.com/s/lato/v15/S6u9w4BMUTPHh50XSwiPGQ.woff2) format(' . "'" . 'woff2' . "'" . ');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* Reset styles */ 
    body { margin: 0; padding: 0; min-width: 100%; width: 100% !important; height: 100% !important;}
    body, table, td, div, p, a { -webkit-font-smoothing: antialiased; text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; line-height: 100%; }
    table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse !important; border-spacing: 0; }
    img { border: 0; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; }
    #outlook a { padding: 0; }
    .ReadMsgBody { width: 100%; } .ExternalClass { width: 100%; }
    .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }

    /* Rounded corners for advanced mail clients only */ 
    @media all and (min-width: 560px) {
        .container { border-radius: 8px; -webkit-border-radius: 8px; -moz-border-radius: 8px; -khtml-border-radius: 8px;}
    }

    /* Set color for auto links (addresses, dates, etc.) */ 
    a, a:hover {
        color: #127DB3;
    }
    .footer a, .footer a:hover {
        color: #999999;
    }

        </style>

        <!-- MESSAGE SUBJECT -->
        <title>Minicabee Taxi quote Comparison</title>

    </head>

    <!-- BODY -->
     <body link="#CDDC39" vlink="#CDDC39" alink="#CDDC39" style="background-color:#F0F0F0;">
    <br><br>
    <table class=" main contenttable" align="center" style="font-weight: normal;border-collapse: collapse;border: 0;margin-left: auto;margin-right: auto;padding: 0;font-family: Arial, sans-serif;color: #555559;background-color: white;font-size: 16px;line-height: 26px;width: 600px;">            
            <tr>
                <td class="border" style="border-collapse: collapse;border: 1px solid #eeeff0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;">
                    <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
                        <tr>
                            <td colspan="4" valign="top" class="image-section" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #000000;background-color: #ffffff;font-weight:bold;font-family: ' . "'" . 'Lato' . "'" . ', sans-serif;">
                                <center><a target="_blank" style="text-decoration: none;"
                    href="https://minicabee.co.uk/"><img border="0" vspace="0" hspace="0"
                    src="https://minicabee.co.uk/assets/images/logo.png"
                    width="200" height="80"
                    alt="Logo" title="Logo" style="
                    color: #000000;
                    font-size: 10px; margin: 0; padding: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: block;" /></a> </center>
                            </td>
                        </tr>
                          <tr>
            <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;
                padding-top: 20px;" class="hero"><a target="_blank" style="text-decoration: none;"
                href=""><img border="0" vspace="0" hspace="0"
                src="https://startersup.github.io/minicabee/assets/images/booktaxi.png"
                alt="Please enable images to view this content" title="Minicabee Banner"
                width="400" style="
                width: 100%;
                max-width: 450px;
                color: #000000; font-size: 13px; margin: 0; padding: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: block;"/></a></td>
        </tr>
                        <tr>
                            <td valign="top" class="side title" style="border-collapse: collapse;border: 0;margin: 0;padding: 10px;-webkit-text-size-adjust: none;color: #555559;font-family:' . "'" . 'Lato' . "'" . ', sans-serif;font-size: 16px;line-height: 26px;vertical-align: top;background-color: white;border-top: none;">
                                <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
                                    <div class="mktEditable" id="main_text">
                                            <p style="font-family: ' . "'" . 'Lato' . "'" . ', sans-serif;line-height: 30px;font-size:18px;">Hello <b>' . $name . '</b>, We have received your booking now, kindly check the below provided information and reconfirm us by tapping the button below.</p>
                                        </div>


                        <center><b style="font-family: ' . "'" . 'Lato' . "'" . ', sans-serif;line-height: 30px;font-size:22px;padding:20px 10px;">Booking Information (' . $ref . ')</b></center><br>
                                                         <table style="font-family: ' . "'" . 'Lato' . "'" . ', sans-serif;
        border-collapse: collapse;
        width: 100%;color:#555559;font-size:14px;">

      <tr>
        <th style=" text-align:right;padding:20px 10px;"><b>Passenger Name</b></th>
        <th  style="text-align: left;padding:20px 10px;">:' . $_SESSION[$sessionparams]['name'] . '</th>
      </tr>
       <tr>
        <th style=" text-align:right;padding:10px;"><b>Contact Number</b></th>
        <th  style="text-align: left;padding:10px;">:' . $_SESSION[$sessionparams]['num1'] . '</th>
      </tr>
        <tr>
        <th style=" text-align:right;padding:10px;"><b>Alternate Number</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['num2'] . '</th>
      </tr>
             <tr>
        <th style=" text-align:right;padding:10px;"><b>Email Id</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['mail'] . '</th>
      </tr>
             <tr style="border-bottom:2px solid #65707f;">
        <th style=" text-align:right;padding:10px;"><b>Reference Id</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $id . '</th>
           </tr>

             <tr>
        <th style=" text-align:right;padding:10px;"><b>Pickup From</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['pick'] . '</th>
      </tr>
             <tr>
        <th style=" text-align:right;padding:10px;"><b>Dropoff To</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['drop'] . '</th>
      </tr>
             <tr>
        <th style=" text-align:right;padding:10px;"><b>Via Point</b></th>
        <th  style="text-align: left;padding:10px;">:' . $_SESSION[$sessionparams]['via'] . '</th>
      </tr>
             <tr>
        <th style=" text-align:right;padding:10px;"><b>Full pickup Address</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['address1'] . '</th>
      </tr>
             <tr>
        <th style=" text-align:right;padding:10px;"><b>Full Dropoff Address</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['address2'] . '</th>
      </tr>
             <tr>
        <th style=" text-align:right;padding:10px;"><b>Pickup Date And Time</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['date'] . ' ' . $_SESSION[$sessionparams]['hrs'] . ':' . $_SESSION[$sessionparams]['min'] . '</th>
           </tr>

                  <tr>
        <th style=" text-align:right;padding:10px;"><b>Passengers</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['np'] . '</th>
      </tr>
                 <tr>
        <th style=" text-align:right;padding:10px;"><b>Luggages</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['nl'] . '</th>
      </tr>
                 <tr style="border-bottom:2px solid #65707f;">
        <th style=" text-align:right;padding:10px;"><b>Cab Type</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['selected_type'] . '</th>
      </tr>
                 <tr>
        <th style=" text-align:right;padding:10px;"><b>Total Fare</b></th>
        <th  style="text-align: left;padding:10px;">:£' . $_SESSION[$sessionparams]['selected_fare'] . '</th>
      </tr>
                 <tr style="border-bottom:2px solid #65707f;">
        <th style=" text-align:right;padding:10px;"><b>payment Mode</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['pay'] . '</th>
      </tr>


            </table>

                            <tr>
                                        <td style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 24px;">
                                         &nbsp;<br>
                                        </td>
                                    </tr>
                                   						
                        <tr>
                            <td valign="top" align="center" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
                                <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
                                    <tr>
                                        <td align="center" valign="middle" class="social" style="border-collapse: collapse;border: 0;margin: 0;padding: 10px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size:px;line-height: 26px;text-align: center;">
                                            <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
                                                <tr>
                                        <td style="border-collapse: collapse;border: 0;margin: 0;padding:10px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 12px;line-height: 26px;"><a>Call us at :020 37452804</a></td>
                                        <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 12px;line-height: 26px;"><a href="https://minicabee.co.uk/">Visit : https://minicabee.co.uk/</a></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td></table>	
                        </tr>
                        <tr bgcolor="#fff" style="border-top: 4px solid #CDDC39;">
                            <td valign="top" class="footer" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background: #fff;text-align: center;">
                                <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">

                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
      </body>
    </html>

';

    if (1) {

        $subject = "Booking Information : Reference Id (" . $id . ")";

        // Always set content-type when sending HTML email
        $headers = "";
        $headers .= "From: Minicabee <bookings@" . $_SERVER['HTTP_HOST'] . "> \r\n";
        $headers .= "Reply-To: Minicabee   <bookings@" . $_SERVER['HTTP_HOST'] . "> \r\n" . "X-Mailer: PHP/" . phpversion();
        $headers .= "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\b";




        $smail = mail($_SESSION[$sessionparams]['mail'], $subject, $message, $headers);

        if($smail)
        {
            echo("suc");
        }else{
            echo("fail");
        }
        // $p="minicabee@gmail.com";
        // mail($p,$subject,$message,$headers);



    }
} else {

    $fare = $_SESSION[$sessionparams]['selected_fare'] / 2;
    $dfare = $fare / 100;
    $dfare = $dfare * 75;
    $dfare = number_format($dfare, 2);
    $fare = number_format($fare, 2);
    $message = '

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0;">
        <meta name="format-detection" content="telephone=no"/>
               <style>
            @font-face {
      font-family: ' . "'" . 'Lato' . "'" . ';
      font-style: normal;
      font-weight: 400;
      src: local( ' . "'" . 'Lato Regular' . "'" . '), local(' . "'" . 'Lato-Regular' . "'" . '), url(https://fonts.gstatic.com/s/lato/v15/S6uyw4BMUTPHjxAwXjeu.woff2) format(' . "'" . 'woff2' . "'" . ');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
      font-family: ' . "'" . 'Lato' . "'" . ';
      font-style: normal;
      font-weight: 400;
      src: local( ' . "'" . 'Lato Regular' . "'" . '), local(' . "'" . 'Lato-Regular' . "'" . '), url(https://fonts.gstatic.com/s/lato/v15/S6uyw4BMUTPHjx4wXg.woff2) format(' . "'" . 'woff2' . "'" . ');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* latin-ext */
    @font-face {
      font-family: ' . "'" . 'Lato' . "'" . ';
      font-style: normal;
      font-weight: 700;
      src: local( ' . "'" . 'Lato-Bold' . "'" . '), local(' . "'" . 'Lato-Bold' . "'" . '), url(https://fonts.gstatic.com/s/lato/v15/S6u9w4BMUTPHh6UVSwaPGR_p.woff2) format(' . "'" . 'woff2' . "'" . ');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
      font-family: ' . "'" . 'Lato' . "'" . ';
      font-style: normal;
      font-weight: 700;
      src: local( ' . "'" . 'Lato-Bold' . "'" . '), local(' . "'" . 'Lato-Bold' . "'" . '), url(https://fonts.gstatic.com/s/lato/v15/S6u9w4BMUTPHh6UVSwiPGQ.woff2) format(' . "'" . 'woff2' . "'" . ');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* latin-ext */
    @font-face {
      font-family: ' . "'" . 'Lato' . "'" . ';
      font-style: normal;
      font-weight: 900;
      src: local( ' . "'" . 'Lato-Black' . "'" . '), local(' . "'" . 'Lato-Black' . "'" . '), url(https://fonts.gstatic.com/s/lato/v15/S6u9w4BMUTPHh50XSwaPGR_p.woff2) format(' . "'" . 'woff2' . "'" . ');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
      font-family: ' . "'" . 'Lato' . "'" . ';
      font-style: normal;
      font-weight: 900;
      src: local( ' . "'" . 'Lato-Black' . "'" . '), local(' . "'" . 'Lato-Black' . "'" . '), url(https://fonts.gstatic.com/s/lato/v15/S6u9w4BMUTPHh50XSwiPGQ.woff2) format(' . "'" . 'woff2' . "'" . ');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* Reset styles */ 
    body { margin: 0; padding: 0; min-width: 100%; width: 100% !important; height: 100% !important;}
    body, table, td, div, p, a { -webkit-font-smoothing: antialiased; text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; line-height: 100%; }
    table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse !important; border-spacing: 0; }
    img { border: 0; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; }
    #outlook a { padding: 0; }
    .ReadMsgBody { width: 100%; } .ExternalClass { width: 100%; }
    .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }

    /* Rounded corners for advanced mail clients only */ 
    @media all and (min-width: 560px) {
        .container { border-radius: 8px; -webkit-border-radius: 8px; -moz-border-radius: 8px; -khtml-border-radius: 8px;}
    }

    /* Set color for auto links (addresses, dates, etc.) */ 
    a, a:hover {
        color: #127DB3;
    }
    .footer a, .footer a:hover {
        color: #999999;
    }

        </style>
        <!-- MESSAGE SUBJECT -->
        <title>Minicabee Taxi quote Comparison</title>

    </head>

    <!-- BODY -->
     <body link="#CDDC39" vlink="#CDDC39" alink="#CDDC39" style="background-color:#F0F0F0;">
    <br><br>
    <table class=" main contenttable" align="center" style="font-weight: normal;border-collapse: collapse;border: 0;margin-left: auto;margin-right: auto;padding: 0;font-family: Arial, sans-serif;color: #555559;background-color: white;font-size: 16px;line-height: 26px;width: 600px;">            
            <tr>
                <td class="border" style="border-collapse: collapse;border: 1px solid #eeeff0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;">
                    <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
                        <tr>
                            <td colspan="4" valign="top" class="image-section" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #000000;background-color: #ffffff;font-weight:bold;font-family: ' . "'" . 'Lato' . "'" . ', sans-serif;">
                                <center><a target="_blank" style="text-decoration: none;"
                    href="https://minicabee.co.uk/"><img border="0" vspace="0" hspace="0"
                    src="https://minicabee.co.uk/assets/images/logo.png"
                    width="200" height="80"
                    alt="Logo" title="Logo" style="
                    color: #000000;
                    font-size: 10px; margin: 0; padding: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: block;" /></a> </center>
                            </td>
                        </tr>
                          <tr>
            <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;
                padding-top: 20px;" class="hero"><a target="_blank" style="text-decoration: none;"
                href=""><img border="0" vspace="0" hspace="0"
                src="https://startersup.github.io/minicabee/assets/images/booktaxi.png"
                alt="Please enable images to view this content" title="Minicabee Banner"
                width="400" style="
                width: 100%;
                max-width: 450px;
                color: #000000; font-size: 13px; margin: 0; padding: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: block;"/></a></td>
        </tr>
                        <tr>
                            <td valign="top" class="side title" style="border-collapse: collapse;border: 0;margin: 0;padding: 10px;-webkit-text-size-adjust: none;color: #555559;font-family: ' . "'" . 'Lato' . "'" . ', sans-serif;font-size: 16px;line-height: 26px;vertical-align: top;background-color: white;border-top: none;">
                                <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
                                    <div class="mktEditable" id="main_text">
                                            <p style="font-family: ' . "'" . 'Lato' . "'" . ', sans-serif;line-height: 30px;font-size:18px;">Hello <b>' . $name . '</b>, We have received your booking now, kindly check the below provided information and reconfirm us by tapping the button below.</p>
                                        </div>


                        <center><b style="font-family: ' . "'" . 'Lato' . "'" . ', sans-serif;line-height: 30px;font-size:22px;padding:20px 10px;">Booking Information (' . $ref . ')</b></center><br>
                                                         <table style="font-family: ' . "'" . 'Lato' . "'" . ', sans-serif;
        border-collapse: collapse;
        width: 100%;color:#555559;font-size:14px;">

      <tr>
        <th style=" text-align:right;padding:20px 10px;"><b>Passenger Name</b></th>
        <th  style="text-align: left;padding:20px 10px;">:' . $_SESSION[$sessionparams]['name'] . '</th>
      </tr>
       <tr>
        <th style=" text-align:right;padding:10px;"><b>Contact Number</b></th>
        <th  style="text-align: left;padding:10px;">:' . $_SESSION[$sessionparams]['num1'] . '</th>
      </tr>
        <tr>
        <th style=" text-align:right;padding:10px;"><b>Alternate Number</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['num2'] . '</th>
      </tr>
             <tr>
        <th style=" text-align:right;padding:10px;"><b>Email Id</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['mail'] . '</th>
      </tr>
             <tr style="border-bottom:2px solid #65707f;">
        <th style=" text-align:right;padding:10px;"><b>Reference Id</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $id . '</th>
           </tr>

             <tr>
        <th style=" text-align:right;padding:10px;"><b>Pickup From</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['pick'] . '</th>
      </tr>
             <tr>
        <th style=" text-align:right;padding:10px;"><b>Dropoff To</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['drop'] . '</th>
      </tr>
             <tr>
        <th style=" text-align:right;padding:10px;"><b>Via Point</b></th>
        <th  style="text-align: left;padding:10px;">:' . $_SESSION[$sessionparams]['via'] . '</th>
      </tr>
             <tr>
        <th style=" text-align:right;padding:10px;"><b>Full pickup Address</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['address1'] . '</th>
      </tr>
             <tr>
        <th style=" text-align:right;padding:10px;"><b>Full Dropoff Address</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['address2'] . '</th>
      </tr>
             <tr>
        <th style=" text-align:right;padding:10px;"><b>Pickup Date And Time</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['date'] . ' ' . $_SESSION[$sessionparams]['hrs'] . ':' . $_SESSION[$sessionparams]['min'] . '</th>
           </tr>

                  <tr>
        <th style=" text-align:right;padding:10px;"><b>Passengers</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['np'] . '</th>
      </tr>
                 <tr>
        <th style=" text-align:right;padding:10px;"><b>Luggages</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $nl . '</th>
      </tr>
                 <tr style="border-bottom:2px solid #65707f;">
        <th style=" text-align:right;padding:10px;"><b>Cab Type</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['selected_type'] . '</th>
      </tr>
                 <tr>
        <th style=" text-align:right;padding:10px;"><b>Total Fare</b></th>
        <th  style="text-align: left;padding:10px;">:£' . $fare . '</th>
      </tr>
                 <tr style="border-bottom:2px solid #65707f;">
        <th style=" text-align:right;padding:10px;"><b>payment Mode</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['pay'] . '</th>
      </tr>


            </table>

                            <tr>
                                        <td style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 24px;">
                                         &nbsp;<br>
                                        </td>
                                    </tr>
                                   					
                        <tr>
                            <td valign="top" align="center" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
                                <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
                                    <tr>
                                        <td align="center" valign="middle" class="social" style="border-collapse: collapse;border: 0;margin: 0;padding: 10px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size:px;line-height: 26px;text-align: center;">
                                            <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
                                                <tr>
                                        <td style="border-collapse: collapse;border: 0;margin: 0;padding:10px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 12px;line-height: 26px;"><a>Call us at :020 37452804</a></td>
                                        <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 12px;line-height: 26px;"><a href="https://minicabee.co.uk/">Visit : https://minicabee.co.uk/</a></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td></table>	
                        </tr>
                        <tr bgcolor="#fff" style="border-top: 4px solid #CDDC39;">
                            <td valign="top" class="footer" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background: #fff;text-align: center;">
                                <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">

                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
      </body>
    </html>
';



    if (1) {

        $subject = "Booking Information : Reference Id (" . $id . ")";

        // Always set content-type when sending HTML email
        $headers = "";
        $headers .= "From: Minicabee <bookings@" . $_SERVER['HTTP_HOST'] . "> \r\n";
        $headers .= "Reply-To: Minicabee   <bookings@" . $_SERVER['HTTP_HOST'] . "> \r\n" . "X-Mailer: PHP/" . phpversion();
        $headers .= "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\b";




        $smail = mail($_SESSION[$sessionparams]['mail'], $subject, $message, $headers);

        // $p="minicabee@gmail.com";
        // mail($p,$subject,$message,$headers);



    }


    $message = '

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0;">
        <meta name="format-detection" content="telephone=no"/>
              <style>
            @font-face {
      font-family: ' . "'" . 'Lato' . "'" . ';
      font-style: normal;
      font-weight: 400;
      src: local( ' . "'" . 'Lato Regular' . "'" . '), local(' . "'" . 'Lato-Regular' . "'" . '), url(https://fonts.gstatic.com/s/lato/v15/S6uyw4BMUTPHjxAwXjeu.woff2) format(' . "'" . 'woff2' . "'" . ');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
      font-family: ' . "'" . 'Lato' . "'" . ';
      font-style: normal;
      font-weight: 400;
      src: local( ' . "'" . 'Lato Regular' . "'" . '), local(' . "'" . 'Lato-Regular' . "'" . '), url(https://fonts.gstatic.com/s/lato/v15/S6uyw4BMUTPHjx4wXg.woff2) format(' . "'" . 'woff2' . "'" . ');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* latin-ext */
    @font-face {
      font-family: ' . "'" . 'Lato' . "'" . ';
      font-style: normal;
      font-weight: 700;
      src: local( ' . "'" . 'Lato-Bold' . "'" . '), local(' . "'" . 'Lato-Bold' . "'" . '), url(https://fonts.gstatic.com/s/lato/v15/S6u9w4BMUTPHh6UVSwaPGR_p.woff2) format(' . "'" . 'woff2' . "'" . ');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
      font-family: ' . "'" . 'Lato' . "'" . ';
      font-style: normal;
      font-weight: 700;
      src: local( ' . "'" . 'Lato-Bold' . "'" . '), local(' . "'" . 'Lato-Bold' . "'" . '), url(https://fonts.gstatic.com/s/lato/v15/S6u9w4BMUTPHh6UVSwiPGQ.woff2) format(' . "'" . 'woff2' . "'" . ');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* latin-ext */
    @font-face {
      font-family: ' . "'" . 'Lato' . "'" . ';
      font-style: normal;
      font-weight: 900;
      src: local( ' . "'" . 'Lato-Black' . "'" . '), local(' . "'" . 'Lato-Black' . "'" . '), url(https://fonts.gstatic.com/s/lato/v15/S6u9w4BMUTPHh50XSwaPGR_p.woff2) format(' . "'" . 'woff2' . "'" . ');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
      font-family: ' . "'" . 'Lato' . "'" . ';
      font-style: normal;
      font-weight: 900;
      src: local( ' . "'" . 'Lato-Black' . "'" . '), local(' . "'" . 'Lato-Black' . "'" . '), url(https://fonts.gstatic.com/s/lato/v15/S6u9w4BMUTPHh50XSwiPGQ.woff2) format(' . "'" . 'woff2' . "'" . ');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* Reset styles */ 
    body { margin: 0; padding: 0; min-width: 100%; width: 100% !important; height: 100% !important;}
    body, table, td, div, p, a { -webkit-font-smoothing: antialiased; text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; line-height: 100%; }
    table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse !important; border-spacing: 0; }
    img { border: 0; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; }
    #outlook a { padding: 0; }
    .ReadMsgBody { width: 100%; } .ExternalClass { width: 100%; }
    .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }

    /* Rounded corners for advanced mail clients only */ 
    @media all and (min-width: 560px) {
        .container { border-radius: 8px; -webkit-border-radius: 8px; -moz-border-radius: 8px; -khtml-border-radius: 8px;}
    }

    /* Set color for auto links (addresses, dates, etc.) */ 
    a, a:hover {
        color: #127DB3;
    }
    .footer a, .footer a:hover {
        color: #999999;
    }

        </style>
        <!-- MESSAGE SUBJECT -->
        <title>Minicabee Taxi quote Comparison</title>

    </head>

    <!-- BODY -->
     <body link="#CDDC39" vlink="#CDDC39" alink="#CDDC39" style="background-color:#F0F0F0;">
    <br><br>
    <table class=" main contenttable" align="center" style="font-weight: normal;border-collapse: collapse;border: 0;margin-left: auto;margin-right: auto;padding: 0;font-family: Arial, sans-serif;color: #555559;background-color: white;font-size: 16px;line-height: 26px;width: 600px;">            
            <tr>
                <td class="border" style="border-collapse: collapse;border: 1px solid #eeeff0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;">
                    <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
                        <tr>
                            <td colspan="4" valign="top" class="image-section" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #000000;background-color: #ffffff;font-weight:bold;font-family: ' . "'" . 'Lato' . "'" . ', sans-serif;">
                                <center><a target="_blank" style="text-decoration: none;"
                    href="https://minicabee.co.uk/"><img border="0" vspace="0" hspace="0"
                    src="https://minicabee.co.uk/assets/images/logo.png"
                    width="200" height="80"
                    alt="Logo" title="Logo" style="
                    color: #000000;
                    font-size: 10px; margin: 0; padding: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: block;" /></a> </center>
                            </td>
                        </tr>
                          <tr>
            <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;
                padding-top: 20px;" class="hero"><a target="_blank" style="text-decoration: none;"
                href=""><img border="0" vspace="0" hspace="0"
                src="https://startersup.github.io/minicabee/assets/images/booktaxi.png"
                alt="Please enable images to view this content" title="Minicabee Banner"
                width="400" style="
                width: 100%;
                max-width: 450px;
                color: #000000; font-size: 13px; margin: 0; padding: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: block;"/></a></td>
        </tr>
                        <tr>
                            <td valign="top" class="side title" style="border-collapse: collapse;border: 0;margin: 0;padding: 10px;-webkit-text-size-adjust: none;color: #555559;font-family: ' . "'" . 'Lato' . "'" . ', sans-serif;font-size: 16px;line-height: 26px;vertical-align: top;background-color: white;border-top: none;">
                                <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
                                    <div class="mktEditable" id="main_text">
                                            <p style="font-family: ' . "'" . 'Lato' . "'" . ', sans-serif;line-height: 30px;font-size:18px;">Hello <b>' . $name . '</b>, We have received your booking now, kindly check the below provided information and reconfirm us by tapping the button below.</p>
                                        </div>


                        <center><b style="font-family: ' . "'" . 'Lato' . "'" . ', sans-serif;line-height: 30px;font-size:22px;padding:20px 10px;">Booking Information (' . $ref . ')</b></center><br>
                                                         <table style="font-family: ' . "'" . 'Lato' . "'" . ', sans-serif;
        border-collapse: collapse;
        width: 100%;color:#555559;font-size:14px;">

      <tr>
        <th style=" text-align:right;padding:20px 10px;"><b>Passenger Name</b></th>
        <th  style="text-align: left;padding:20px 10px;">:' . $_SESSION[$sessionparams]['name'] . '</th>
      </tr>
       <tr>
        <th style=" text-align:right;padding:10px;"><b>Contact Number</b></th>
        <th  style="text-align: left;padding:10px;">:' . $_SESSION[$sessionparams]['num1'] . '</th>
      </tr>
        <tr>
        <th style=" text-align:right;padding:10px;"><b>Alternate Number</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['num2'] . '</th>
      </tr>
             <tr>
        <th style=" text-align:right;padding:10px;"><b>Email Id</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['mail'] . '</th>
      </tr>
             <tr style="border-bottom:2px solid #65707f;">
        <th style=" text-align:right;padding:10px;"><b>Reference Id</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $rid . '</th>
           </tr>

             <tr>
        <th style=" text-align:right;padding:10px;"><b>Pickup From</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['rpick'] . '</th>
      </tr>
             <tr>
        <th style=" text-align:right;padding:10px;"><b>Dropoff To</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['rdrop'] . '</th>
      </tr>
             <tr>
        <th style=" text-align:right;padding:10px;"><b>Via Point</b></th>
        <th  style="text-align: left;padding:10px;">:' . $_SESSION[$sessionparams]['rvia'] . '</th>
      </tr>
             <tr>
        <th style=" text-align:right;padding:10px;"><b>Full pickup Address</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['raddress1'] . '</th>
      </tr>
             <tr>
        <th style=" text-align:right;padding:10px;"><b>Full Dropoff Address</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['raddress2'] . '</th>
      </tr>
            <tr>
        <th style=" text-align:right;padding:10px;"><b>Pickup Date And Time</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['rdate'] . ' ' . $_SESSION[$sessionparams]['rhrs'] . ':' . $_SESSION[$sessionparams]['rmin'] . '</th>
           </tr>

                  <tr>
        <th style=" text-align:right;padding:10px;"><b>Passengers</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['rnp'] . '</th>
      </tr>
                 <tr>
        <th style=" text-align:right;padding:10px;"><b>Luggages</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['rnl'] . '</th>
      </tr>
                 <tr style="border-bottom:2px solid #65707f;">
        <th style=" text-align:right;padding:10px;"><b>Cab Type</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['selected_type'] . '</th>
      </tr>
                 <tr>
        <th style=" text-align:right;padding:10px;"><b>Total Fare</b></th>
        <th  style="text-align: left;padding:10px;">:£' . $fare . '</th>
      </tr>
                 <tr style="border-bottom:2px solid #65707f;">
        <th style=" text-align:right;padding:10px;"><b>payment Mode</b></th>
        <th  style="text-align: left;padding:10px;">: ' . $_SESSION[$sessionparams]['pay'] . '</th>
      </tr>


            </table>

                            <tr>
                                        <td style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 24px;">
                                         &nbsp;<br>
                                        </td>
                                    </tr>
                                   					
                        <tr>
                            <td valign="top" align="center" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
                                <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
                                    <tr>
                                        <td align="center" valign="middle" class="social" style="border-collapse: collapse;border: 0;margin: 0;padding: 10px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size:px;line-height: 26px;text-align: center;">
                                            <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
                                                <tr>
                                        <td style="border-collapse: collapse;border: 0;margin: 0;padding:10px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 12px;line-height: 26px;"><a>Call us at :020 37452804</a></td>
                                        <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 12px;line-height: 26px;"><a href="https://minicabee.co.uk/">Visit : https://minicabee.co.uk/</a></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td></table>	
                        </tr>
                        <tr bgcolor="#fff" style="border-top: 4px solid #CDDC39;">
                            <td valign="top" class="footer" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background: #fff;text-align: center;">
                                <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">

                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
      </body>
    </html>
';



    if (1) {

        $subject = "Booking Information : Reference Id (" . $rid . ")";

        // Always set content-type when sending HTML email
        $headers = "";
        $headers .= "From: Minicabee <bookings@" . $_SERVER['HTTP_HOST'] . "> \r\n";
        $headers .= "Reply-To: Minicabee   <bookings@" . $_SERVER['HTTP_HOST'] . "> \r\n" . "X-Mailer: PHP/" . phpversion();
        $headers .= "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\b";




        $smail = mail($_SESSION[$sessionparams]['mail'], $subject, $message, $headers);
    }
}
