<?php 

    include 'head.php';
        
        if ($_SESSION["logged"] != "ok") {
            $template = "connect.php";
        }
        else {
            $template = "index.php";
        }
           
    include $template;
            
?>  
		

