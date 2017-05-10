<?php
//header("Access-Control-Allow-Origin: *");
if(isset($_GET['coordinates']))
{
    $coordinates = $_GET['coordinates']; 
    echo json_encode($coordinates);
}
else
{
    echo 'PAS OK';
}




?>
