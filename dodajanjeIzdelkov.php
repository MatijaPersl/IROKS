<?php


	session_start();

	


	$db = mysqli_connect("localhost","root", "", "iroks");

	if(isset($_POST['dodaj_btn'])){

		$ime = mysqli_real_escape_string($db, $_POST['ime']);
		$serijska = mysqli_real_escape_string($db, $_POST['serijska']);
		$kategorija = mysqli_real_escape_string($db, $_POST['kategorija']);
		$cena = mysqli_real_escape_string($db, $_POST['cena']);
		$opis = mysqli_real_escape_string($db, $_POST['opis']);
		$slika = mysqli_real_escape_string($db, $_POST['file']);
    



		
		$sql = "INSERT INTO izdelki(ime,serijska,kategorija,cena,opis,slika) VALUES ('$ime','$serijska','$kategorija','$cena','$opis','$slika')";
		mysqli_query($db,$sql);


		$_SESSION['message'] = "Opravilo uspešno dodano";
  }

?>








<!DOCTYPE html>
<html lang="en">

<head>
	<title>Dodajanje izdelkov</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Da vsilimo mobilni pogled na mobilnih napravah in da bo zoom s prsti pravilno podprt -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>

	<!-- Siv (razreda bg-dark navbar-dark) vodoraven navigacijski meni, ki postane navpičen na majhnih ekranih (razred navbar-expand-sm). -->
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<ul class="navbar-nav">
			
			<li class="nav-item">
				<a class="nav-link" href="index.php">Home</a>
			</li>
			
		</ul>
	</nav>

<form action="dodajanjeIzdelkov.php" method="POST">
  <div class="form-content">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Ime izdelka" name="ime" required="true"/>
        </div>
				<div class="form-group">
          <input type="text" class="form-control" placeholder="Serijska številka izdelka" name="serijska" required="true"/>

        </div>
		<div class="form-group">
          <input type="text" class="form-control" placeholder="Kategorija" name="kategorija" required="true"/>
        </div>
		<div class="form-group">
          <input type="text" class="form-control" placeholder="Cena" name="cena" required="true"/>
        </div>
		<div class="form-group">
          <input type="text" class="form-control" placeholder="Opis" name="opis" required="true"/>
        </div>
		<div class="form-group">
			<input type='file' name='file' required="true"/>
		 </div>
      </div>
    </div>
    <input type="submit" class="btnSubmit" name="dodaj_btn"></button>
  </div>
</form>









</body>

</html>
