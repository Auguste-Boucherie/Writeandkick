<?php 
  include 'head.php'; 
?>

<!DOCTYPE html>

<html>
	
	<head>
		<title>Article de la semaine | Slam share | Viens rapper l'actualité</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Article de la semaine | Write And Kick | Viens rapper l'actualité">
		<meta name="viewport" content="width=480"> <meta name="viewport" content="initial-scale=1.0">
		<link rel="icon" type="image/png" href="image/favicon.png" size="16x16"/>
		<link rel="icon" type="image/png" href="image/faviconretina.png" size="32x32"/>
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

		<section class="bannerarticle2">
			<h1>L'assaut de Palmyre</h1>
          <div class="bannertoptitre">
            <div id="w">
              <div id="content">
                  <p class="toptitre">Top titre</p>
                  <div class="photo"></div>
                  <div class="audio-player">
                  <h2>Titre du son</h2>
                  <p>3:45</p>
                  <audio class="audio-player2" src="media/evidence-song.mp3" type="audio/mp3" controls="controls"></audio>
                </div><!-- @end .audio-player -->
              </div><!-- @end #content -->
            </div><!-- @end #w -->
          </div>
		</section>

		<section class="zonesonnepal">
      <div class="separate">
        <p>Les préstations</p>
      </div>

			<ul>
    			<li>				
  					<div id="w">
    					<div id="content">
      					<div class="photo"></div>
      					<div class="audio-player">
        					<h2>Titre du son</h2>
        					<p>3:45</p>
                  <a href="#">Le prt crew</a>
        					<audio class="audio-player2" src="media/evidence-song.mp3" type="audio/mp3" controls="controls"></audio>
      					</div><!-- @end .audio-player -->
    					</div><!-- @end #content -->
  					</div><!-- @end #w -->
				  </li>
    			<li>				
  					<div id="w">
    					<div id="content">
      					<div class="photo"></div>
      					<div class="audio-player">
        					<h2>Titre du son</h2>
        					<p>3:45</p>
                  <a href="#">Le prt crew</a>
        					<audio class="audio-player2" src="media/gekom.mp3" type="audio/mp3" controls="controls"></audio>
      					</div><!-- @end .audio-player -->
    					</div><!-- @end #content -->
  					</div><!-- @end #w -->
				  </li>
    			<li>				
  					<div id="w">
    					<div id="content">
      					<div class="photo"></div>
      					<div class="audio-player">
        					<h2>Titre du son</h2>
        					<p>3:45</p>
                  <a href="https://soundcloud.com/gusboucherie" target="_blank">La Gekom</a>
        					<audio class="audio-player2" src="media/evidence-song.mp3" type="audio/mp3" controls="controls"></audio>
      					</div><!-- @end .audio-player -->
    					</div><!-- @end #content -->
  					</div><!-- @end #w -->
				  </li>
    			<li>				
  					<div id="w">
    					<div id="content">
      					<div class="photo"></div>
      					<div class="audio-player">
        					<h2>Titre du son</h2>
        					<p>3:45</p>
                  <a href="#">Zeyo</a>
        					<audio class="audio-player2" src="media/evidence-song.mp3" type="audio/mp3" controls="controls"></audio>
      					</div><!-- @end .audio-player -->
    					</div><!-- @end #content -->
  					</div><!-- @end #w -->
				  </li>
          <li>        
            <div id="w">
              <div id="content">
                <div class="photo"></div>
                <div class="audio-player">
                  <h2>Titre du son</h2>
                  <p>3:45</p>
                  <a href="#">Le prt crew</a>
                  <audio class="audio-player2" src="media/evidence-song.mp3" type="audio/mp3" controls="controls"></audio>
                </div><!-- @end .audio-player -->
              </div><!-- @end #content -->
            </div><!-- @end #w -->
          </li>
          <li>        
            <div id="w">
              <div id="content">
                <div class="photo"></div>
                <div class="audio-player">
                  <h2>Titre du son</h2>
                  <p>3:45</p>
                  <a href="#">Le prt crew</a>
                  <audio class="audio-player2" src="media/gekom.mp3" type="audio/mp3" controls="controls"></audio>
                </div><!-- @end .audio-player -->
              </div><!-- @end #content -->
            </div><!-- @end #w -->
          </li>
          <li>        
            <div id="w">
              <div id="content">
                <div class="photo"></div>
                <div class="audio-player">
                  <h2>Titre du son</h2>
                  <p>3:45</p>
                  <a href="#">Le prt crew</a>
                  <audio class="audio-player2" src="media/evidence-song.mp3" type="audio/mp3" controls="controls"></audio>
                </div><!-- @end .audio-player -->
              </div><!-- @end #content -->
            </div><!-- @end #w -->
          </li>
          <li>        
            <div id="w">
              <div id="content">
                <div class="photo"></div>
                <div class="audio-player">
                  <h2>Titre du son</h2>
                  <p>3:45</p>
                  <a href="#">Le prt crew</a>
                  <audio class="audio-player2" src="media/evidence-song.mp3" type="audio/mp3" controls="controls"></audio>
                </div><!-- @end .audio-player -->
              </div><!-- @end #content -->
            </div><!-- @end #w -->
        </li>
			</ul>

      <div class="retourhome">

      <a href="register.html">M'exprimer sur le sujet</a>

      </div>

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
                <a href="article3.php">Écouter</a>
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
		
		</section>
	
	</main>

	<footer>
		<ul>
			<li></li>
			<li></li>
			<li></li>
		</ul>
    <p>Kick l'actu / Design by Auguste Boucherie</p>
	</footer>

	<script type="text/javascript">
		$(function(){
  			$('.audio-player2').mediaelementplayer({
    		alwaysShowControls: true,
    		features: ['playpause','progress','volume'],
    		audioVolume: 'horizontal',
    		audioWidth: 450,
    		audioHeight: 70,
    		iPadUseNativeControls: true,
    		iPhoneUseNativeControls: true,
    		AndroidUseNativeControls: true
  			});
		});
	</script>
	
	</body>
</html>

