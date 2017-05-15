<?php
//Fichier à adapter pour la BD du serveur
require('DBconnect.php');
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if(isset($_GET['coordinates']))
{
    
    $coordinates = json_decode($_GET['coordinates'], true);
    //echo '<pre>' . print_r($coordinates, true) . '</pre>';
    $dLat = $coordinates['lat'];
    $dLng = $coordinates['lng'];
    //Recuperer la session 
    
   //LC : $sMail = strip_tags($_SESSION['mail']);
    $sMail = "Vladimir@hot.com";
    
    
    $searchInDB = "SELECT mail FROM geolocalisation WHERE mail =:mail";
    $stmt = $dbh->prepare($searchInDB);
    $stmt->bindParam(':mail',$sMail,PDO::PARAM_STR,50);
    $stmt->execute();
    $nbRes = $stmt->rowCount();
    if($nbRes == 0)
    {
        $insertInDB = "INSERT INTO geolocalisation VALUES(:mail,:latitude,:longitude)";
        $stmt = $dbh->prepare($insertInDB);
        $stmt->bindParam(':mail',$sMail,PDO::PARAM_STR,50);
        $stmt->bindParam(':latitude',$dLat,PDO::PARAM_STR,30);
        $stmt->bindParam(':longitude',$dLng,PDO::PARAM_STR,30);
        $stmt->execute();        
        echo 'insertion';
    }
    else
    {
        $updateInDB = "UPDATE geolocalisation SET lat=:latitude, lng=:longitude WHERE mail =:mail";
        $stmt = $dbh->prepare($updateInDB);
        $stmt->bindParam(':mail',$sMail,PDO::PARAM_STR,50);
        $stmt->bindParam(':latitude',$dLat,PDO::PARAM_STR,30);
        $stmt->bindParam(':longitude',$dLng,PDO::PARAM_STR,30);
        $stmt->execute();   
        echo 'update';

    }
    
}
else
{
    echo 'pas de coordonnées';
}
