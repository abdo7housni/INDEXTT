<?php

<<<<<<< HEAD
$host = 'localhost';
$port = 3306;
$dbname = 'al_hajj';

$username = 'root';
$password = '';

$dsn = "mysql:host={$host};port={$port};dbname={$dbname};charset=utf8";

try {
    $conn = new PDO($dsn,$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Failed' . $e->getMessage();
}
=======
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
>>>>>>> 624c8a8cea32ee661ee5878b3cfd5b16057e7428
