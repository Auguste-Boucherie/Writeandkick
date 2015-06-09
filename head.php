<?php

    error_reporting(E_ALL );
    
    session_start();
    $date = new DateTime();
   
    
    // $host = 'localhost';
    // $dbname = 'slamshare';
    // $user = 'root';
    // $passsword = 'root';

    // try {
    //     $connexion = new PDO("mysql:host=$host;dbname=$dbname", $user, $passsword);
    // }catch(PDOException $e) {
    //     echo $e->getMessage();
    // }

    $host = 'augusteboucherie.be.mysql';
    $dbname = 'augusteboucheri';
    $user = 'augusteboucheri';
    $passsword = 'jjNriQxF';

    try {
        $connexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $passsword, 
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch(PDOException $e) {
        echo $e->getMessage();
    }

 ?>