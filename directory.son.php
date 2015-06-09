<?php 

    include 'class.upload.php';

    if (count($_FILES['son']) > 0 ) {

        $document = new Upload($_FILES['son']); 
        $extensions_valides = array( 'mp3' , 'wav' ); // les extensions acceptées
        $extension_fichier = strtolower(substr(strrchr($_FILES['son']['name'], '.'), 1)); // Extension du fichier

        if (in_array($extension_fichier, $extensions_valides)) { // On compare l'extension
            if ($document->uploaded) {

                $document->Process('uploadson/'); // On déplace le fichier
            
                 if ($document->processed) {
                    echo "<p class='ok'>Ton son a était ajouté a l'article Nepal</p>";
                    $document->clean();
                }
                else {
                    echo "<p class='error2'>Une erreur est survenue</p>";
                }
            }
        }
        else if ($extension_fichier == "") {
            echo "<p class='error2'>Aucun fichier séléctioné</p>";
        }
        else {
            echo "<p class='error2'>Votre fichier n'a pas le bon format</p>";
        }
    }

?>