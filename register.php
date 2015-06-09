<?php 

    include 'head.php';
        
        if ($_SESSION["logged"] != "ok") {
            $template = "inscrire.php";
        }
        else {
            $template = "index.php";
        }
           
    include $template;
            
?>
	

