<?php


function add_user($lastname,$firstname,$email,$password,$birthday)
{
  $bd = "friendsapp";
  $user = "users";
  $bdd = new PDO('mysql:host=127.0.0.1;dbname='.$bd.'', 'root' , '');

  $insertUser = $bdd->prepare("INSERT INTO $user(lastName,firstName,email,password,birthday) VALUES (?,?,?,?,?)");
  $insertUser->execute(array($lastname,$firstname,$email,$password,$birthday));
}




// header('Location: index.html');

?>
