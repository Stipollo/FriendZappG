<?php
//header("Access-Control-Allow-Origin: *");
if(isset($_POST['coordinates']))
{
    $coordinates = $_POST['coordinates']; 
    echo 'OK';
}
else
{
    echo 'PAS OK';
}




?>
