<?php

    $db_name = 'al_hajj' ;
    $port = 3306 ;
    $host = 'localhost' ;
    $user = 'root' ;
    $mdp = '' ;

    try { 
         $conn = new PDO("mysql:host=$host;dbname=$db_name;port=$port" , $user , $mdp);
         $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "ur not conn" . $e ->getMessage();
    }