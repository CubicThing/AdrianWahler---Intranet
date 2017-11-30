<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<script type="text/javascript" src="../JS/newscript.js"></script>
	<link rel="stylesheet" type="text/css" href="../CSS/newstyle.css">
	<link rel="icon" type="image/ico" href="../images/logo.ico">
</head>


<body>
	<?php
		include 'header.php';
	?>



	<div>
	<form name="loginform">
		
		<input type="text" name="username" placeholder="Username" required></br>
		<input type="password" name="password" placeholder="Password" onblur="compareMdp()" required></br>
		<input type="password" name="confpassword" placeholder="Password" onblur="compareMdp()">
		<p id="match"></p></br>
		<input type="button" name="submit" value="VALIDER" class="submitButton" onclick="login();" disabled>

		<p></p>

	</form>
	</div>



	<?php
		include 'footer.php';
	?>

</body>



</html>