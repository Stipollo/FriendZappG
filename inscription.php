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
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css'>
 <!----Calender -------->
  <link rel="stylesheet" href="css/clndr.css" type="text/css" />

  <!----End Calender -------->
</head>
<body>	
	<script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '1841263839529789',
	      xfbml      : true,
	      version    : 'v2.9'
	    });
	    FB.AppEvents.logPageView();
	  };
	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/en_US/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	FB.getLoginStatus(function(response) {
	  if (response.status === 'connected') {
	    window.location.href = "https://stipollo.github.io/FriendZappG/index.html";
	  }
	});	
	</script>
	  <div class="main">  
	  <a href="index.html"><img src="images/baniereFZ.gif" alt=""/></a>
	    <div class="wrap">    	    
            <div class="column_right">
            	 <div class="column_right_grid sign-up">
				 	<div class="sign_in">
				       <h3>Create your account</h3>
					    <form action="GetInscription.php" method="Post">
							<span>
								<i><img src="images/user.png" alt="" /></i><input type="text" value="Enter your firstname" name="prenom" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your firstname';}">
								</span>
							<span>
					 	    <i><img src="images/user.png" alt="" /></i><input type="text" value="Enter your name" name="nom" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your name';}">
					 	    </span>
							
							<span>
					 	    <i><img src="images/events.png" alt="" /></i><input type="text" value="Enter your birthday" name="birthday" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your birthday';}">
					 	    </span>
					    	<span>
					 	    <i><img src="images/mail.png" alt="" /></i><input type="text" value="Enter your email" name="mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}">
					 	    </span>
					 	    <span>
					 	     <i><img src="images/lock.png" alt="" /></i>
					 	     <input type="password" name="password" placeholder="Password">
					 	    </span>
							<span>
					 	     <i><img src="images/lock.png" alt="" /></i>
					 	     <input type="password" placeholder="Confirm password">
					 	    </span>
					 		<input type="submit" name="inscrire" class="my-button" value="Sign Up">
					 	</form>					      		   
          		       </div>
			       <div class="signin_facebook">
			 		<div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="true"></div>
				   	</div>
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

