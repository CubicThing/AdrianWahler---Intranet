
	var attempts = 0;

	
	
	function compareMdp() {
		var pass1 = document.loginform.confpassword.value;
		var pass2 = document.loginform.password.value;

		if (pass1 == pass2){ 
			document.loginform.submit.disabled = false;
			document.getElementById("match").innerHTML = "";
		}else{
			document.loginform.submit.disabled = true;
			document.getElementById("match").innerHTML = "Passwords do not match.";
		}
	}

	function login(){
		
		
		var ExcpectedLogin = "Kobold";
		var InputLogin = document.loginform.username.value;
		var ExcpectedPassword = "gold";
		var InputPassword = document.loginform.password.value;
		var InputConfPassword = document.loginform.confpassword.value;

		var leave = false;

		if ((ExcpectedLogin == InputLogin) && (InputPassword == ExcpectedPassword) && (InputConfPassword == ExcpectedPassword)) {

			location.href="presence.php";
			attempts = 0;

		} else {
			attempts++;
			alert("Mauvaise combinaison Indentifiant/Mot de passe. Il reste "+(3 - attempts)+" essais.");
			if (attempts == 3){
				location.href="index.php";
				attempts = 0;
			}
		}
	}

	function afficher(classe){

		document.getElementById("tableau").innerHTML = "<?php foreach ?>";

	}

