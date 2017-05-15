jQuery(function($)
{
	var alert = $('.alert'); // Est ce qu'on à un objet avec l'id alert ?

	if(alert.length > 0) // Si au moins 1 objet alert
	{
		alert.hide().slideDown(500); //delay(5000).slideUp(); // On cache la div et on fait une animation verticale, on laisse un délait de 3 sec puis on le fait remonter
		alert.find('.fermer').click(function(e) // On clique sur la croix
		{
			e.preventDefault(); // Prévient le comportement par défaut sur le navigateur
			alert.slideUp();
		});
	}
});
