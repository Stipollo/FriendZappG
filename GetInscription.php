<?php

				if (isset($_POST['inscrire'])
				{
				
				IF    (empty($_POST['nom']) or empty($_POST['prenom']) or empty($_POST['password']) or empty($_POST['mail']) or empty($_POST['age']))
				{
					  
						
					print "<div class='alert alert-danger'>
                          <strong>Remplissez les champs !</strong>
                          </div>";
				}
					else
					{
	
 $firstnName=$_POST[prenom];
 $lastName=$_POST[nom];
 $email=$_POST[maill];
 $password=$_POST[pass];
 $birthday=$_POST[datenaiss];



}
}
$verification = verification_inscription($email);

if ($verification)
{
	print "<div class='alert alert-danger'>
                <strong>Votre pseudo est déjà utilisé par un membre</strong>
                </div>";
}
else
{    
	add_user($lastName, $firstnName, $email, $password, $birthday );
	print "<div class='alert alert-success'>
                <strong>Bienvenue $firstnName</strong>
                </div>";
	
	
}


 ?>
-
