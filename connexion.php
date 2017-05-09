<?php
$host='friendsapp.ml:22';
$user='user';
$pass='Test1234.';
$db='FriendsApp';
$dsn = "mysql:host=$host;dbname=$db";
//**************************************
//* connexion Ã  mysql et Ã  la db      *
//**************************************
try 
{
	$dbh = new PDO($dsn, $user, $pass); //db handle
} 
catch (PDOException $e) 
{
	die( "Erreur ! : " . $e->getMessage() );
}
?>
