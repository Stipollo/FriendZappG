<?php
include 'function.php';
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');
// Afficher les erreurs et les avertissements
//error_reporting(e_all);
 if (isset($_POST['nom'])
 {
     echo $_POST['nom'];
 }
$email="";
if (isset($_POST['inscrire'])) {

    if (empty($_POST['nom']) or empty($_POST['prenom']) or empty($_POST['password']) or empty($_POST['mail']) or empty($_POST['age'])) {


        print "<div class='alert alert-danger'>
                          <strong>Remplissez les champs !</strong>
                          </div>";
    } else {

        $firstnName = $_POST[prenom];
        $lastName = $_POST[nom];
        $email = $_POST[maill];
        $password = $_POST[pass];
        $birthday = $_POST[datenaiss];
    }
}
$verification = verification_inscription($email);

if ($verification) {
    print "<div class='alert alert-danger'>
                <strong>Votre pseudo est déjà utilisé par un membre</strong>
                </div>";
} else {
    add_user($lastName, $firstnName, $email, $password, $birthday);
    print "<div class='alert alert-success'>
                <strong>Bienvenue $firstnName</strong>
                </div>";
}
?>
