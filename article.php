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
      <link rel="icon" type="image/png" href="image/faviconhd.png" size="32x32"/>
  		<link rel="stylesheet" type="text/css" href="css/reset.css">
  		<link rel="stylesheet" type="text/css" href="css/style.css">
  		<script src="js/jquery-1.10.1.min.js"></script>
      <script src='js/main.js'></script>
    	<script type="text/javascript" src="js/mediaelement-and-player.min.js"></script>
  	</head> 
	
  <body>

        <div class="popup">
            <div class="quite"></div>
            <div class="contentpopup">
              <p>
                la planete n'en fait qu'à sa tete les hommes l'exploites
                seisme de niveau sept virgule huit au népal eh non la terre n'éparge
                pas les pauvres gens qui ne pense pas qu'à l'argent dépensent pas
                leur energie à courir après l'or mais apres l'eau
              </p></br>
              <p>
                tous ces capitalistes se fouent des risques pour les populations
                tous dans le vice à midi dix à katmandou débute la tristesse
                la peur l'angoisse les cris la panique c'est pour ça que j'écris c'texte
                j'envoi du love pour les victimes pendant qu'les riches baisent
              </p></br>
              <p>
                toujours pas d'bonnes nouvelles au journal télévisé ce soir 
                japprend que plus de mille huit cent morts sont à déplorer
                l'espoir à détalé trop d'peine pour détailler ma haine 
                envers tous ces enfoirés qui créent la misère j'ai misé
              </p></br>
              <p>
                sur l'humain mais l'doute me vise jtrouve ça bizzare
                meme les gosses te parlent dbizz avant qu'je ne m'épuise
                faudrait qu'ma culture j'l'étale faut dire que dans la vie
                t'as nettement plus de chance de survivre si tu né pâle
              </p>
            </div>
        </div>

  <?php 
    
    if ($_SESSION['logged'] != 'ok') {
      include 'header_non.php';
    }
    else {
      include 'header_oui.php';
    }
  
  ?>
		
	<main>

		<section class="bannerarticle">
			<h1>Un séisme au Nepal</h1>
          <div class="bannertoptitre">
            <div id="w">
              <div id="content">
                  <p class="toptitre">Kek au mic</p>
                  <div class="photo"></div>
                  <div class="audio-player">
                  <h2>Si tu née pâle</h2>
                  <p>1:29</p>
                  <audio class="audio-player2" src="media/nepal.wav" type="audio/wav" controls="controls"></audio>
                </div><!-- @end .audio-player -->
              </div><!-- @end #content -->
            </div><!-- @end #w -->
          </div>
		</section>

		<section class="zonesonnepal">
      <div class="separate">
        <p>Les préstations</p>
      </div>

      <?php
        include 'upload.view.php';
      ?>

      <div class="retourhome">

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
	
	</main>

  <?php 
    include 'footer.php'; 
  ?>

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

