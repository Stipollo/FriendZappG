<?php
// Message d'alerte

class Session
{

	public function setFlash($message,$type = 'danger') // Fonction qui aura le msg en param et le type de notif.
	{
		$_SESSION['flash'] = array(
			'message' => $message, // Le message est mit dans l'index flash.
			'type'    => $type
		);
	}

	public function flash() // Détecte si on a l'index $_SESSION['flash']
	{
		if(isset($_SESSION['flash']))
		{
			?> <!-- On ferme le php -->

			<div class="alert alert-<?php echo $_SESSION['flash']['type']; ?>" id="alert">
				<a class="fermer">x</a> <!-- Croix qui permet de fermer -->
				<div class="alert_text">
						<?php echo $_SESSION['flash']['message']; ?> <!-- Affiche le message -->
				</div>
				<div class="square">
					<div class="circle">

					</div>
				</div>

			</div>
			<?php
			unset($_SESSION['flash']); // Supprime : Pour eviter qu'il reste tout le temps en session

		}
	}
}

?>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style_alert.css">
	</head>
</html>
<?
