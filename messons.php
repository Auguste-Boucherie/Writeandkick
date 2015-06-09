
<?php 
  include 'head.php'; 
?>

<!DOCTYPE html>

<html>
	
    <head>
      <title>Mes sons | Slam share | Viens rapper l'actualité</title>
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

  <?php 
    
    if ($_SESSION['logged'] != 'ok') {
      include 'header_non.php';
    }
    else {
      include 'header_oui.php';
    }
  
  ?>
		
	<main>

		<section class="accrochesons">
			<h1>Bienvenue <?php echo $_SESSION['user']; ?></h1>
			<p>Ecoute et supprime les sons que tu a dèja posté.</p>
		</section>

		<div class="photocompte">
      <img class="profile" src="miniature/<?php echo $_SESSION['user']; ?>.jpg">
    </div>

		<section class="zoneson">

      <div class="separate">
        <p>Tes préstations</p>
      </div>

			<ul>
    			<li>				
  					<div id="w">
    					<div id="content">
      					<div class="photo"></div>
      					<div class="audio-player">
        					<h2>Titre du son</h2>
        					<p>1:57</p>
                  <a href="https://soundcloud.com/gusboucherie">Gus au mic</a>
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
                  <p>1:57</p>
                  <a href="https://soundcloud.com/gusboucherie">Gus au mic</a>
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
                  <p>1:57</p>
                  <a href="https://soundcloud.com/gusboucherie">Gus au mic</a>
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
                  <p>1:57</p>
                  <a href="https://soundcloud.com/gusboucherie">Gus au mic</a>
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
                  <p>1:57</p>
                  <a href="https://soundcloud.com/gusboucherie">Gus au mic</a>
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
                  <p>1:57</p>
                  <a href="https://soundcloud.com/gusboucherie">Gus au mic</a>
                  <audio class="audio-player2" src="media/gekom.mp3" type="audio/mp3" controls="controls"></audio>
                </div><!-- @end .audio-player -->
              </div><!-- @end #content -->
            </div><!-- @end #w -->
        </li>
			</ul>

			<div class="newsound">
				<a href="record.php">Nouveau son</a>
			</div>
		
		</section>
	
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

