<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
                                                               //Import PHPMailer classes into the global namespace
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'configure.php';                                   //name datbase link file


                                                            //These must be at the top of your script, not inside a function

if(isset($_POST["email"])) 
{
  $emailTo=$_POST["email"];  
  $code=uniqid(true);  
  $query= mysqli_query($con," INSERT INTO  resetpassword (code ,email) VALUES('$code','$emailTo')");                                                      //Instantiation and passing `true` enables exceptions
   if($query)
{
("Error");
}
 
   
  $mail = new PHPMailer(true);
 

  try {
                                                                                      //Server settings
    $mail->isSMTP() ;                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'somov@gmail.com';                     //SMTP username
    $mail->Password   = '*somov12345*';                               //SMTP password
    $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('somov@gmail.com', 'SoMov');                   //website name
    $mail->addAddress($emailTo);                                        //Add a recipient
    $mail->addReplyTo('no-reply@gmail.com', 'No-reply');               //change example.com

   

    //Content
    $url =  " http://".$_SERVER["HTTP_HOST"].dirname( $_SERVER ["PHP_SELF"])."/resetpasswordform.php?code=$code";
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'YOUR PASSWORD RESET LINK';
    $mail->Body    = " <h1> You requested a password reset </h1>   click   <a   href ='$url ' > this link </a>";                    //"This is the HTML message body <b>in bold!</b>  $code";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
	echo '<script type="text/JavaScript"> 
     alert("RESET PASSWORD LINK HAS BEEN SENT  TO YOUR MAIL");
     </script>';
} catch (Exception $e) {
	echo '<script type="text/JavaScript"> 
     alert("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
     </script>';
    exit();
}
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial scale=1.0">
    
    

    
    <title>SOMOV</title>
<link rel="stylesheet" type="text/css" href="style41.css">
<link rel="icon" href="logo.PNG" type="image/png">
</head>
<style>
    body{

    background-image:url("somovimage.jpeg");
	background-repeat:no-repeat;
	background-size:cover;
}
    </style>
    
    <body>
    <center>
<div class="box">

     
  <img src="logo.PNG"   class="logo">
<div class="title">SoMov</div>
<div  class ="subtitle"> Watch Songs and Movies!</div>
            <form  method="POST">
        
<div class="header"> 
    <h2>Forgot password</h2>
    </div>
    

    <div class="fields">
<input type="email" id="email" placeholder="Email id" name="email">
</div>
    <div>
        <button   button class="sign-in" type="submit"
          id="btn-login">
            submit
        </button>
        </div>
        
    </form>
        </div>
    
    </center>
    </body>
</html>
       