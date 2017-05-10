<?php
//header("Access-Control-Allow-Origin: *");
if(isset($_GET['coordinates']))
{
    $coordinates = $_GET['coordinates']; 
    echo 'OK';
}
else
{
    echo 'PAS OK';
}




?>
