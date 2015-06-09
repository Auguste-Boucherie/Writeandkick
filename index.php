
<?php 
	include 'head.php'; 
?>

<!DOCTYPE html>

<html>
	
	<head>
		<title>Accueil | Slam share | Viens rapper l'actualité</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Homepage | Write And Kick | Viens rapper l'actualité">
		<meta name="viewport" content="width=480"> <meta name="viewport" content="initial-scale=1.0">
		<link rel="icon" type="image/png" href="image/favicon.png" size="16x16"/>
		<link rel="icon" type="image/png" href="image/faviconhd.png" size="32x32"/>
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="js/jquery-1.10.1.min.js"></script>
    	<script src='js/main.js'></script>	
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
		
		<section class="accroche">
			<div class="contentaccroche">
				<h1>Bienvenue</h1>
				<h1>sur Slam share</h1>
				<p>Le lieu où rappeurs et slameurs peuvent s'exprimer sur l'actualités. Une nouvelle façon de voir l'information.</p>
				
				<?php 
		
					if ($_SESSION['logged'] != 'ok') {
						include 'button_oui.php';
					}
					else {
						include 'button_non.php';
					}
	
				?>
			
			</div>
			<div class="icoscrool"></div>
		</section>
		
		<section class="indexcontent">
			<div class="container">
				<div class="actutexte">
					<h2>Sujet du moment :</h2>
					<p>Le séisme Népalé, voici les points de vu sur cette catastrophe qui nous a tous touchés.</p>
					<a href="article.php">Écouter</a>
					
					<?php 
		
						if ($_SESSION['logged'] != 'ok') {
							include 'buttons_non.php';
						}
						else {
							include 'buttons_oui.php';
						}
	
					?>
				
				</div>
				<div class="actuphoto"></div>
			</div>
		</section>

		<section class="othercontent">
			<div class="container2">
			<div class="separate">
				<p>Sujets des semaines précédente</p>
			</div>
			<ul>
    			<li>
    				<div class="fondimage">				
    					<a href="article2.php" class="photolink"><div class="actuimg photo1"><p>Assaut de Palmyre</p></div></a>
    				</div>
					<div class="actusemaine">
						<p>15 mai, 2015</p>
						<h3>14 participations</h3>
						<a href="article2.php">Écouter</a>
					</div>
				</li>
    			<li>
    				<div class="fondimage">				
    					<a href="#" class="photolink"><div class="actuimg photo2"><p>L'avenir de Cuba</p></div></a>
    				</div>
					<div class="actusemaine">
						<p>7 mai, 2015</p>
						<h3>22 participations</h3>
						<a href="#">Écouter</a>
					</div>
				</li>
    			<li>
    			    <div class="fondimage">				
    					<a href="#" class="photolink"><div class="actuimg photo3"><p>La guerre de Gaza</p></div></a>
    				</div>				
					<div class="actusemaine">
						<p>27 avril, 2015</p>
						<h3>17 participations</h3>
						<a href="#">Écouter</a>
					</div>
				</li>
				
				<div class="more">
					
					<li>    			    
						<div class="fondimage">				
    						<a href="#" class="photolink"><div class="actuimg photo4"><p>Crash dans les Alpes</p></div></a>
    					</div>			
						<div class="actusemaine">
							<p>24 mars, 2015</p>
							<h3>23 participations</h3>
							<a href="#">Écouter</a>
						</div>
					</li>
					<li>				
						<div class="fondimage">				
    						<a href="#" class="photolink"><div class="actuimg photo5"><p>Charlie hebdo</p></div></a>
    					</div>	
						<div class="actusemaine">
							<p>7 janvier, 2015</p>
							<h3>36 participations</h3>
							<a href="#">Écouter</a>
						</div>
					</li>
					<li>
						<div class="fondimage">				
    						<a href="#" class="photolink"><div class="actuimg photo6"><p>Fusillade à Montrouge</p></div></a>
    					</div>					
						<div class="actusemaine">
							<p>8 janvier, 2015</p>
							<h3>8 participations</h3>
							<a href="#">Écouter</a>
						</div>
					</li>
				
				</div>
			</ul>
			</div>
		</section>
		
		<div id="loadMore">Load more</div>
	
	</main>

	<?php 
		include 'footer.php'; 
	?>
	
	</body>
</html>

