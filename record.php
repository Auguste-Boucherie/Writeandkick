
<?php 
	include 'head.php'; 
?>

<?php 
	include 'directory.son.php'; 
?>

<!DOCTYPE html>

<html>
	
	<head>
		<title>Partage | Slam share | Viens rapper sur l'actualité</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Homepage | Write And Kick | Créer ton rap">
		<meta name="viewport" content="width=480"> <meta name="viewport" content="initial-scale=1.0">
		<link rel="icon" type="image/png" href="image/favicon.png" size="16x16"/>
		<link rel="icon" type="image/png" href="image/faviconhd.png" size="32x32"/>
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="js/jquery-1.10.1.min.js"></script>
    	<script src='js/main.js'></script>
    	<script type="text/javascript" src="js/mediaelement-and-player.min.js"></script>
	</head> 
	
	<body>

	<?php 
		
		if ($_SESSION['logged'] != 'ok') {
			include 'header_non.php';
		}
		else {
			include 'header_oui.php';
		}
	
	?>
		
	<main>

		<section class="accrocherec">
			<div class="contenttext">
			<h1>Partage tes sons</h1>
			<p>Le sujet de la semaine est le séisme Népalé</p>
			</div>
		</section>

		<section class="recordcontent">
			<div class="separate">
				<p>Choisis ton instru</p>
			</div>
			<div class="chooseinstru">

    			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">

    				<input type="file" id="file2" name="son"><br>
    				<input type="submit" value="upload" class="button">

				</form>

			</div>
		</section>
	
	</main>

	<?php 
		include 'footer.php'; 
	?>
	
	</body>
</html>

