<?php 
	
	if (count($_POST['connect']) > 0) {
		$username = trim(strip_tags($_POST["username"]));
	    $mdp = trim(strip_tags($_POST["mdp"]));
		$last_co = date('Y-m-d H:i:s');

		$query = "SELECT username, mdp
					FROM users
					WHERE username = :username && mdp = :mdp";
		$preparedStatement = $connexion->prepare($query);
		$preparedStatement->execute(array(':username' => $username,':mdp' => $mdp));
		$result = $preparedStatement->fetch();

			if (!empty($result)) {
				$_SESSION["logged"] = "ok";
				$_SESSION['user'] = $username;
			 	header("location: index.php");
				
			}
			
			else {
				echo "<p class='error'>Mot de passe ou nom de compte incorrect</p>";
			}

	} 
?>

<!DOCTYPE html>

<html>
	
	<head>
		<title>Login | Slam share | Viens rapper l'actualité</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Login | Write And Kick | Créer ton rap">
		<meta name="viewport" content="width=480"> <meta name="viewport" content="initial-scale=1.0">
		<link rel="icon" type="image/png" href="image/favicon.png" size="16x16"/>
		<link rel="icon" type="image/png" href="image/faviconhd.png" size="32x32"/>
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head> 
	<body>
	<header>

		<section class="bannerheader">
			<div class="contentheader">
				<a href="index.php" class="logo">Slam share</a>
				<ul>
        			<li><a href="register.php">Register</a></li>
				</ul>
			</div>
		</section>

		<section class="bannerlogin">
			<section class="contentlogin">
					<form method="post">
						<p>Login</p>
						<label for="username">Enter your username</label><br>
						<input name="username" type="text" placeholder="Username" value="gusboucherie"><br>
						<label for="mdp">Enter your password</label><br>
						<input name="mdp" type="password" placeholder="Password" value="rastagus"><br>
						<input type="submit" value="Connexion" class="calltologin" name="connect">
					</form>
			</section>
		</section>
		
	</header>
	</body>

</html>

