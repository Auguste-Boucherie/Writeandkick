<ul>
<?php 

$dossier = 'uploadson/'; // On indique le dossier des sons
    $files = scandir('./' . $dossier); // Ensuite le chemin du fichier
        for ($i=0; $i < count($files) ; $i++) { 
            if ($files[$i] != '..' && $files[$i] != '.' && $files[$i] != '.DS_Store') { 

                echo  " <li>
                            <div id='w'>
                                <div id='content'>
                                    <div class='photo'></div>
                                    <div class='audio-player'>
                                        <h2>".basename ($files[$i],'.mp3')."</h2>
                                        <p>3:45</p>
                                        <a href='#'>Artiste</a>
                                        <div class='read'></div>
                                        <audio class='audio-player2' src='".$dossier.$files[$i]."' type='audio/mp3' controls='controls'></audio>   
                                    </div>
                                </div>
                            </div>
                        </li>";
            }
        }
?>
</ul>






