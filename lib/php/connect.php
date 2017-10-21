<?php
   
$dsn = 'mysql:host=localhost;dbname=coucou;port=80';
$user = 'root';
$password = '';

try{
    $cnx = new PDO($dsn, $user, $password);
    print "Connexion OK";
} catch (PDOException $e) {
    print "Echec de connexion ".$e->getMessage();
}