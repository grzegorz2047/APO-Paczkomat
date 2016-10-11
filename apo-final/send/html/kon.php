<!DOCTYPE html
PUBLIC "-//W3C//DTD XTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xtml1/DTD/xtml1-transitional.dtd">
<html>
	<head>
		<title>
			Paczkomat
		</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta name="description" content="Paczkomat" />
		<meta name="keywords" content="paczkomat, projekt, na, apo" />
		<meta name="author" content="Jakub Wawrzyniak" />
		<!-- Podlaczenie pliku ze stylami dla strony -->
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
	</head>
	<body>
		<div class="dane">
			<?php
				$plik = file("../txt/baza_odb.txt"); 
				$end = count($plik); 
				$linia = $plik[$end-1];
				$pieces = explode(";", $linia);
				$cena = $pieces[0];
				$numer = $pieces[1];
			
				echo "Do zapłaty: "; 
				echo $cena;
				echo "</br>";
				echo "Twój unikalny kod paczki: "; 
				echo $numer; 
				echo "</br>";
			?>
			
			<input type="submit" value="Drukuj naklejkę z kodem" />
			<form action="karta.html">
				<input type="submit" value="Zapłać kartą" />
			</form>
			<form action="gotowka.html">
				<input type="submit" value="Zapłać gotówką" />
			</form>
			<form action="pobranie.html">
				<input type="submit" value="Zapłać kontem pre-paid" />
			</form>
			
		</div>		
	</body>
</html>