<?php
function createUser()
{
  $sql = $dbh->prepare("insert into users values ('',:mail,:password")) ;
  $sql->bindParam(':mail', $_POST['mail'],PDO::PARAM_STR);
  $sql->bindParam(':password', $_POST['password'],PDO::PARAM_STR);
  $sql->execute();
}
function deleteUser($id)
{
  $sql = $dbh->prepare("delete * from users where id= :id");
  $sql->bindParam(':id', $id,PDO::PARAM_STR);
  $sql->execute();
}
function updateUser($id)
{
  $sql = $dbh->prepare("update users set email = :mail, name= :name where id = :id");
  $sql->bindParam(':mail', $_POST['email'],PDO::PARAM_STR);
  $sql->bindParam(':name', $_POST['name'],PDO::PARAM_STR);
  $sql->bindParam(':id', $id,PDO::PARAM_STR);
  $sql->execute();
}
