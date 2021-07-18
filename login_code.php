<!--
Here, we write code for login.
-->
<?php

require_once('config.php');
$email = $password = $pwd = '';


$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($db, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["ID"];
		$email = $row["email"];
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
	}
	header("Location: h.html");
}
else
{
	echo("<script type=text/javascript>
        alert('Invalid email or password')

          window.location='login.php'
        
        </script>");
}
?>
