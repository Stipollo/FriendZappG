<?php

$host = '127.0.0.1';
$user = 'user';
$port = '3306'
$pass = 'Test1234.';
$db = 'FriendsApp';
$dsn = "mysql:host=$host;dbname=$db";
$dbh = null;
//**************************************
//* connexion Ã  mysql et Ã  la db      *
//**************************************
try {
    
    $dbh = new PDO($dsn, $user, $pass); //db handle
    $dbh->exec("SET CHARACTER SET utf8");
    
} catch (PDOException $e) {
    
    die("Erreur ! : " . $e->getMessage());
    
}
?>
