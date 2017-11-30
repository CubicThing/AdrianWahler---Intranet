<html>
<head>
	<title>Javascript</title>
	<script src="script.js"/></script>
	<link rel="stylesheet" type="text/css" href="../CSS/stye.css">
</head>
	<body>
			<form method="GET" name="formulaire" id="IDformuilaire" onsubmit="alert('Vousavez envoye votre formulaire!');" onreset="alert('Make up your mind.');">
			<input type="texte" name="nom" name="IDnom" placeholder="Nom" size="" maxlength="20" autofocus="">
			<input type="texte" name="prenom" name="IDprenom" placeholder="Prenom" size="" maxlength="20" onfocus="/*EXEMPLE*/" onchange="/*EXEMPLE*/">
			<input type="checkbox" name="check" value="Option1">Option 1</br>
			<input type="checkbox" name="check" value="Option2">Option 2</br>
			<input type="checkbox" name="check" value="Option3">Option 3</br>
			<input type="checkbox" name="check" value="Option4">Option 4</br>
			<input type="button" name="">


				<input type="radio" name="gender" value="male"   onchange="alert(gender.value);">Male</br>
				<input type="radio" name="gender" value="female" onchange="alert(gender.value);">FEmale</br>

			<input type="submit"> <input type="reset"> <input type="button" value=0 onclick="value++"> <input type="image" src="../img/img.png">
			<input type="button" onclick="value++">
			</form>

			</br><a href="https://www.google.fr/" onclick="alert('Vous allez etre redirige vers Google.');"> GOOGLE! </a>

			<img src="image.jpg" onerror="alert('Le chemin de l\'image n est pas valide.');" onmouseover="alert('LOOK AT THIS CUTIE');" onmouseout="alert('Well see you then...');"></imgS>
	</body>
</html>