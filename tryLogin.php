<?php

if (empty($_POST['login']) OR empty($_POST['password']))
{
	print "<div class='alert alert-danger'>
  <strong>Introduisez le Login et password S.V.P</strong>
</div>";
	
}	

if ($utilisateur = $stmt->fetch(PDO::FETCH_ASSOC))
{
	session_start();
	
	$_SESSION['name']=$_POST['login'];
	$_SESSION['id_user']=$utilisateur['id'];
	$_SESSION['role']=$utilisateur['role'];
	
	
	header('Location: index.html');
}
else
{
	if (!empty($_POST['login']) AND !empty($_POST['password']))
{
	print "<div class='alert alert-danger'>
	<strong>Login et/ou Password incorrect !</strong>
	</div>";
}
	
}

?>
