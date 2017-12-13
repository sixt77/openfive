<?php
//script de connection pour les streamer
//prend un pseudo et un mot de pass
//renvoie les parametre dans la session
//return true si elle réussi et false sinon
function user_signin($pseudo, $password, $c, $encryption_key) {
//récupération des compte streamer
	//cryptage du password
	//$password = crypt($password,$encryption_key);
	$sql = ("SELECT * FROM users WHERE email='$pseudo' AND password='$password'"); 
	$result = mysqli_query($c,$sql);
	
	//test des résultat
	if($row = mysqli_fetch_row($result)){
		if (isset($row[0])) {
			//attribution d'une session
			$_SESSION['stats'] = "login-done";
			$_SESSION['id'] = $row[0];
			$_SESSION['pseudo'] = $row[1];
			$_SESSION['mail'] = $row[3];
			return true;
		}
		else {
			//attribution d'une session vide
			unset ($_SESSION['stats']);
			return false;
		}
	}
$result->close();
}

//script d'inscription pour les user 
//ajoute dans la bdd les valeurs
//renvoi true si la connection a fonctionné sinon false
function user_signup($fname, $lname, $adressepostal, $codepostal, $ville , $email, $password, $tel , $c, $encryption_key) {
	//cryptage du password
	//$password = crypt($password,$encryption_key);
	//insertion des valeurs dans la bdd
	$sql = ("INSERT INTO users(fname, lname, adressepostal, codepostal, ville, email, password, tel) VALUES('$fname', '$lname', '$adressepostal', '$codepostal', '$ville', '$email', '$password', '$tel')");
	if(mysqli_query($c,$sql)){
		return true;
	}
	else{
		return false;
	}
}





function user_logout() {
	$_SESSION = array();
	unset ($_SESSION['stats']);
}