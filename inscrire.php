<?php 
	if (count($_POST['regist']) > 0) {
		$username = trim(strip_tags($_POST["username"]));
	    $mdp = trim(strip_tags($_POST["mdp"]));
	    $email = trim(strip_tags($_POST['email']));
		$last_co = date('Y-m-d H:i:s');

		$query = "SELECT username
					FROM users
					WHERE username = :username
					LIMIT 1";
		$preparedStatement = $connexion->prepare($query);
		$preparedStatement->execute(array('username' => $username));
		$result = $preparedStatement->fetchAll();

		    if($_POST['username'] == '' || $_POST['mdp'] == '' || $_POST['email'] == ''){
            	echo "<p class='error'>Un champ est vide<p>";
        	}
        	
        	else {
        		
        		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					echo "<p class='error'>Email non valide<p>";
				}

				else {
			
					if (!empty($result)) {
						echo "<p class='error'>Ce compte est deja prix, désolé.<p>";
					}
			
					else {

		     			$to      = $email;
		     			$subject = 'Confirmation';
		     			$message = 'Ton compte Slam share a bien était crée, merci de faire partis de notre communauté !';
		     			$headers = 'From: gusboucherie@gmail.com' . "\r\n" .
		     			'Reply-To: gusboucherie@gmail.com' . "\r\n" .
		     			'X-Mailer: PHP/' . phpversion();
						mail($to, $subject, $message, $headers);
						
						$query = "INSERT 
							INTO users (username, mdp, email, last_co) 
							VALUE (:username, :mdp, :email, :last_co)";
						$params = array(":username" => $username, ":mdp" => $mdp, ':email' => $email, ":last_co" => $last_co);
						$preparedStatement = $connexion->prepare($query);
						$preparedStatement->execute($params);

						$_SESSION["logged"] = "ok";
		                $_SESSION['user'] = $username;
		                header("location: index.php");
					}
				}
			}
	} 
?>

<?php 
	include 'directory.avatar.php';
?>

<!DOCTYPE html>

<html>
	
	<head>
		<title>Register | Slam share | Viens rapper l'actualité</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Register | Write And Kick | Créer ton rap">
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
        			<li><a href="login.php">Login</a></li>
				</ul>
			</div>
		</section>

		<section class="bannerlogin">
			<section class="contentlogin">
					<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
						
						<p>Register</p>
						<label for="username">Votre nom</label><br>
						<input name="username" type="text" placeholder="Username"><br>
						
						<label for="email">Votre E-mail</label><br>
						<input name="email" type="text" placeholder="E-mail"><br>
						
						<label for="mdp">Mot de passe</label><br>
						<input name="mdp" type="password" placeholder="Password"><br>

						<label for="le_fichier">Choisis ton jpg</label><br>
    					<input type="file" id="file" name="le_fichier" class="file"><br>
						
						<input type="submit" value="Connexion" class="calltologin" name="regist">
					
					</form>
			</section>
		</section>
		
	</header>
	</body>

</html>

