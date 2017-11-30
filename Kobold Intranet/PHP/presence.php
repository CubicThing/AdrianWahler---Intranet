<!DOCTYPE html>
<html>
<head>
	<title>Presence</title>
	<script type="text/javascript" src="../JS/newscript.js"></script>
	<link rel="stylesheet" type="text/css" href="../CSS/newstyle.css">
	<link rel="icon" type="image/ico" href="../images/logo.ico">
</head>
<body>
	<?php
		$counter = 1;
		include 'header.php';
		include 'eleves.php';
	?>

	<div>
		<form method="get">
			<select name="classe" id="IDClasse" onchange="afficher(value)">
				<option value="NULL">Please select a class.</option>
	  			<option value="F11">F11</option>
	  			<option value="F12">F12</option>
	  			<option value="F13">F13</option>
	  			<option value="F14">F14</option>
			</select>
			<input type="submit" name="submit" value="COMFIRM">
		</form>
		</br>

		<p id="tableau"> <?php

		if (isset($_GET["classe"])){

			echo"<form method=\"post\">";
			if ($_GET["classe"] == "F11") foreach ($F11 as $key => $value){

				if ($counter == 1) echo"<img src=\"../images/photo1.jpg\">";
				else if ($counter == 2) echo"<img src=\"../images/photo2.jpg\">";
				else if ($counter == 3) echo"<img src=\"../images/photo3.jpg\">";

				echo "$value[0]";
				echo "<input type=\"radio\" name=\"presence$key\"value=\"present\">Present</radio>";
				echo "<input type=\"radio\" name=\"presence$key\" value=\"retard\">Retard</radio>";
				echo "<input type=\"radio\" name=\"presence$key\" value=\"absent\">Absent</radio>";
				echo "<input type=\"textarea\" name=\"commentaire$key\"></radio>";
				echo "</br>";
				$counter++;
				if ($counter == 4) $counter = 1;
			}

			if ($_GET["classe"] == "F12") foreach ($F12 as $key => $value){

				if ($counter == 1) echo"<img src=\"../images/photo1.jpg\">";
				else if ($counter == 2) echo"<img src=\"../images/photo2.jpg\">";
				else if ($counter == 3) echo"<img src=\"../images/photo3.jpg\">";

				echo "$value[0]";
				echo "<input type=\"radio\" name=\"presence$key\"value=\"present\">Present</radio>";
				echo "<input type=\"radio\" name=\"presence$key\" value=\"retard\">Retard</radio>";
				echo "<input type=\"radio\" name=\"presence$key\" value=\"absent\">Absent</radio>";
				echo "<input type=\"textarea\" name=\"commentaire$key\"></radio>";
				echo "</br>";
				$counter++;
				if ($counter == 4) $counter = 1;
			}

			if ($_GET["classe"] == "F13") foreach ($F13 as $key => $value){

				if ($counter == 1) echo"<img src=\"../images/photo1.jpg\">";
				else if ($counter == 2) echo"<img src=\"../images/photo2.jpg\">";
				else if ($counter == 3) echo"<img src=\"../images/photo3.jpg\">";

				echo "$value[0]";
				echo "<input type=\"radio\" name=\"presence$key\"value=\"present\">Present</radio>";
				echo "<input type=\"radio\" name=\"presence$key\" value=\"retard\">Retard</radio>";
				echo "<input type=\"radio\" name=\"presence$key\" value=\"absent\">Absent</radio>";
				echo "<input type=\"textarea\" name=\"commentaire$key\"></radio>";
				echo "</br>";
				$counter++;
				if ($counter == 4) $counter = 1;
			}

			if ($_GET["classe"] == "F14") foreach ($F14 as $key => $value){

				if ($counter == 1) echo"<img src=\"../images/photo1.jpg\">";
				else if ($counter == 2) echo"<img src=\"../images/photo2.jpg\">";
				else if ($counter == 3) echo"<img src=\"../images/photo3.jpg\">";

				echo "$value[0]";
				echo "<input type=\"radio\" name=\"presence$key\"value=\"present\">Present</radio>";
				echo "<input type=\"radio\" name=\"presence$key\" value=\"retard\">Retard</radio>";
				echo "<input type=\"radio\" name=\"presence$key\" value=\"absent\">Absent</radio>";
				echo "<input type=\"textarea\" name=\"commentaire$key\"></radio>";
				echo "</br>";
				$counter++;
				if ($counter == 4) $counter = 1;
			}
			echo"<input type=\"submit\">";
			echo "</form>";
		}

		?> </p>
	</div>

	<?php
		include 'footer.php';
	?>
</body>
</html>