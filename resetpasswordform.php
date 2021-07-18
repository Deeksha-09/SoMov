<?php
include ("configure.php");
if(!isset ($_GET["code"]))
{
exit("Can't find page");
 }

$code =$_GET["code"];

$getEmailQuery= mysqli_query($con,"SELECT email FROM resetpassword  WHERE code='$code'");
if(mysqli_num_rows($getEmailQuery) == 0)
{
exit("can't find page");

}

if(isset($_POST["pwd1"]))
{
$pw= $_POST["pwd1"];
$pw= md5($pw);                             //ENCRIPTION
$row= mysqli_fetch_array($getEmailQuery);
$email=$row["email"];
$query= mysqli_query ($con,"UPDATE users SET password='$pw' WHERE email='$email'");
if($query)
{
$query=mysqli_query($con,"DELETE FROM resetpassword WHERE code='$code'");
exit ("<script type=text/javascript>
        alert('Password updated')

          window.location='login.php'
        
        </script>");
}
else
{
exit("<script type=text/javascript>
        alert('Something went wrong')

          window.location='login.php'
        
        </script>");
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial scale=1.0">
<title>SOMOV</title>
<link rel="icon" href="logo.PNG" type="image/png">
<link rel="stylesheet" type="text/css" href="style41.css">
</head>
<body>
<style>
   body{

    background-image:url("somovimage.jpeg");
	background-repeat:no-repeat;
	background-size:cover;
}
   
</style> 
<center>
    <div class ="box">
        <img src="logo.PNG"   class="logo">
<div class="title">SoMov</div>
<div  class ="subtitle"> Watch Songs and Movies!</div>
            <form  method="POST">
<div class="header"> 
    <h2>Reset  password</h2>
    </div>

    <div class="fields">
<input type="password"  name="pwd1"     placeholder="New password"  id="password" 
        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters required "  onkeyup='check();' />
        </div>
        
    <div class="fields">
<input type="password"  name="pwd2" placeholder="Confirm password"   id="confirm_password"   onkeyup='check();' />
            </div>
                
      
            
    <div>
        <button   button class="sign-in" type="submit"  id="btn-login"    >
            change
        </button>
        </div>
                
                
   <script>
                
                
    var password = document.getElementById("password") ,
      confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;            
                
    </script>
                
                
        </form>
            </div>
        </center>
    </body>
</html>