<!--
Here, we write code for registration.
-->
<?php
require_once('config.php');
$fname = $lname = $gender = $email = $password = $pwd = '';

$name = $_POST['username'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);


$sql = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";
$result = mysqli_query($db, $sql);
if($result)
{
	echo("<script type=text/javascript>
        alert('Signup Successful')
		</script>");
	header("Location: h.html");
}
else {
      echo("<script type=text/javascript>
        alert('Username already exists')

          window.location='sign.php'
        
        </script>");
}
?>