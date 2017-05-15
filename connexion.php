<?php

$host = 'mysql.hostinger.fr';
$user = 'u766958215_admin ';
$pass = 'test1234.';
$db = 'u766958215_fapp';
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
