<?php

function infos_email_membre($email) {
    require 'connexion.php';
    if (!isset($dbh)) {
        global $dbh;
    }
    $infos = array();
    $sql = "SELECT email FROM users WHERE email = :email";
    $req = $dbh->prepare($sql);
    $req->bindParam(':email', $email, PDO::PARAM_STR);
    $req->execute();
    while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
        $infos[] = $row;
    }
    return $infos;
}

function verification_inscription($email) {
    $infos = infos_email_membre($email);
    foreach ($infos as $info) {
        if ($info == $email) {
            return true;
        }
    }
    return false;
}

function add_user($lastname, $firstname, $email, $password, $birthday) {
    $sql = $dbh->prepare("insert into users () values (':lastName,:firstName,:email,:password,:birthday)");
    $sql->bindParam(':email', $email, PDO::PARAM_STR);
    $sql->bindParam(':password', $password, PDO::PARAM_STR);
    $sql->bindParam(':lastName', $lastname, PDO::PARAM_STR);
    $sql->bindParam(':firstnName', $firstname, PDO::PARAM_STR);
    $sql->bindParam(':birthday', $birthday, PDO::PARAM_STR);
    $sql->execute();
}
