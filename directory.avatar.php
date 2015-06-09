 <?php 

    include 'class.upload.php';

    if($_FILES) {
        $document = new Upload($_FILES['le_fichier']); 
        $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' ); // les extensions acceptées
        $extension_fichier = strtolower(substr(strrchr($_FILES['le_fichier']['name'], '.'), 1)); //// Extension du fichier


        if (in_array($extension_fichier, $extensions_valides)) { // On compare l'extension
            $miniature = $document;
            
            if ($document->uploaded) {
                $miniature->image_resize    = true;
                $miniature->image_ratio_fill     = true;
                $miniature->image_y         = 200;
                $miniature->image_x         = 200;
                $miniature->file_new_name_body   = $_SESSION['user'];
                $miniature->Process('miniature/'); // On crée une miniature

                $document->file_new_name_body   = $_SESSION['user']; // On renomme le fichier
                $document->Process('upload/'); // On déplace le fichier
            
                 if ($document->processed) {
                    $document->clean();
                }
                else {
                }
            }
        }
        else if ($extension_fichier == "") {
        }
        else {
        }
    }

?>