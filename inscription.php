<?php
// ************** TRAITEMENT INSCRIPTION ************** //
include('functions/add_user.php'); // J'inclus la fonction
include('functions/alert.php'); // Message d'alerte
$Session = new Session();

//include('connexion.php');

$bdd = new PDO('mysql:host=127.0.0.1;dbname=friendsapp', 'root', ''); // Connexion à la db

if(isset($_POST['inscrire']))
{
 $nom = htmlspecialchars($_POST['nom']);
 $prenom = htmlspecialchars($_POST['prenom']);
 $mail = htmlspecialchars($_POST['mail']);
 $mdp1 = sha1($_POST['mdp1']);
 $mdp2 = sha1($_POST['mdp2']);
 $anniversaire = htmlspecialchars($_POST['anniversaire']);

 if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['mail']) AND !empty($_POST['mdp1']) AND !empty($_POST['mdp2']) AND !empty($_POST['anniversaire']))
 {
   $nomlength = strlen($nom);

   if($nomlength <= 255 AND $nomlength > 6)
   {
      $reqnom = $bdd->prepare("SELECT * FROM users WHERE nom = ?");
      $reqnom->execute(array($nom));
      $nomexist = $reqnom->rowCount();

      if ($nomexist != 0)
      {
        $Session->setFlash('This name has already been used.','danger');
      }
      elseif(filter_var($mail, FILTER_VALIDATE_EMAIL))
        {
          $reqmail = $bdd->prepare("SELECT * FROM users WHERE email = ?");
          $reqmail->execute(array($mail));
          $mailexist = $reqmail->rowCount();

          if($mailexist == 0)
          {
            if($mdp1 == $mdp2)
            {
                add_user($nom,$prenom,$mail,$mdp1,$anniversaire);
                $Session->setFlash('Your account has been created.','success');
            }
            else
            {
              $Session->setFlash('Your passwords do not match.','danger');
            }
          }
          else
          {
            $Session->setFlash('This E-mail address has already been used.','warning');
          }
        }
        else
        {
          $Session->setFlash('The E-Mail address is invalid.','danger');
        }
      }
    else
    {
      $Session->setFlash('Name must be between 6 and 255 characters.','warning');
    }
  }
  else
  {
    $Session->setFlash('All fields must be completed.','warning');
  }
}

// ************** TRAITEMENT INSCRIPTION ************** //
 ?>


<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>Friendzapp</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquery.min.js"></script> <!--JQUERY-->
<script type="text/javascript" src="js/alert.js"></script>
<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css'>
 <!----Calender -------->
  <link rel="stylesheet" href="css/clndr.css" type="text/css" />

  <!----End Calender -------->
</head>
<body>
  <div class="main">
  <a href="index.html"><img src="images/baniereFZ.gif" alt=""/></a>
    <div class="wrap">
    <div class="column_right">
      <?php
      $Session->flash(); // Affichage du message d'alerte
      ?>

	 <div class="column_right_grid sign-up">
				<div class="sign_in">
			       <h3>Create your account</h3>
				    <form action="" method="Post">

						<span>
							<i><img src="images/user.png" alt="" /></i><input type="text" value="Enter your firstname" name="prenom" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your firstname';}">
							</span>
						<span>
					    <i><img src="images/user.png" alt="" /></i><input type="text" value="Enter your name" name="nom" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your name';}">
					    </span>

						<span>
					    <i><img src="images/events.png" alt="" /></i><input type="text" value="Enter your birthday (Ex: 2000-01-01)" name="anniversaire" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your birthday';}">
					    </span>
					<span>
					    <i><img src="images/mail.png" alt="" /></i><input type="text" value="Enter your email" name="mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}">
					    </span>
					    <span>
					     <i><img src="images/lock.png" alt="" /></i>
					     <input type="password" name="mdp1" placeholder="Password">
					    </span>
						<span>
					     <i><img src="images/lock.png" alt="" /></i>
					     <input type="password" name="mdp2" placeholder="Confirm password">
					    </span>
						<input type="submit" name="inscrire" class="my-button" value="Sign Up">
					</form>
		       </div>

             </div>
    	<div class="clear"></div>
 	 </div>
   </div>
  		 <div class="copy-right">
				<p>© 2013 Designed by <a href="http://graphicburger.com/flat-design-ui-components/" target="_blank">GraphicBurger</a>  • Template by <a href="http://w3layouts.com" target="_blank">w3layouts</a> </p>
	 	 </div>
</body>
</html>
