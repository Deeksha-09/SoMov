<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<title>SOMOV</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="icon" href="SM(logo).png" type="image/png">
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=CkKZIGhQXpGvHYWH5ZdbtsAPkW9ZFAQR5VLpSkB8clVqViMuMBFTvaDRbNy3tAugrhQW8MVir5h0KxtXAmlSGV5WmIu3JPFa470VkgDhLwE" charset="UTF-8"></script>
</head>
<body>
	<form method="POST" action="login_code.php" class="login">
		<div class="logo">
			<img src="SM(logo).png" alt="logo">
		</div>
		<div class="title">SoMov</div>
		<div class="sub-title">Watch Songs and Movies!</div>
		<div class="fields">
		 <div class="email">
			<i class="fa fa-envelope" style="font-size:23px"></i>
			<input type="email" name="email" placeholder="Email id" required>
		 </div>
		 <div class="password">
			<i class="fa fa-lock"></i>
			<input type="password" name="password" placeholder="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required>
		 </div>
		 <div class="sign-in">
			<input type="submit" name="submit"  value="Login">
		 </div>
	    </div>
		<!--<button class="sign-in" onclick="return doValidate();">Login</button>-->
		<div class="link">
			<a href="forgotpasswordform.php">Forgot password?</a><br><br>
			<a href="sign.php"><span>Don't have an account?</span>Sign Up</a>
		</div>
	</form>
	
</body>
</html>
