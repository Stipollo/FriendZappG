<?php
require('DBconnect.php');
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


    $searchInDB = "SELECT * FROM geolocalisation";
    $stmt = $dbh->prepare($searchInDB);
    $stmt->execute();
    $data = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC))
	  {
       $data_item['lat'] = $row['lat'];
       $data_item['lng'] = $row['lng'];
       
    }
    $encodedData = json_encode($data_item);
    echo $encodedData;
    exit;

?>
