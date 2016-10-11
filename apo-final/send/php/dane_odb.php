<?php
	$imie = trim($_POST['imie']); 
	$nazwisko = trim($_POST['nazwisko']);

	$imie = substr($imie, 0, 1);
	$nazwisko = substr($nazwisko, 0, 1);
	
	
	$numer = implode('', file('../txt/licznik_paczek.txt'));
	
	$file2 = "../txt/licznik_paczek.txt";
	$h = fopen ( $file2, 'w+');
	$numer_2 = intval ($numer);
	$numer_2 = $numer_2 + 1;
	fwrite($h, $numer_2);
	flock($h, 3); 	
	fclose($h);
	
	$dane = $imie.$nazwisko.$numer."\n"; 
    // przypisanie zmniennej $file nazwy pliku 
    $file = "../txt/baza_odb.txt"; 
    // uchwyt pliku, otwarcie do dopisania 
    $fp = fopen($file, "a"); 
    // blokada pliku do zapisu 
    flock($fp, 2); 
    // zapisanie danych do pliku 
    fwrite($fp, $dane); 
    // odblokowanie pliku 
    flock($fp, 3); 
    // zamknięcie pliku 
    fclose($fp); 
	
	

 header("Location: ../html/kon.php");
 ?>