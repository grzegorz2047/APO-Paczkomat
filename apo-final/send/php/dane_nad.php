<?php
	$imie = trim($_POST['imie']); 
	$nazwisko = trim($_POST['nazwisko']);
	
	$szer = trim($_POST['sz_paczki']); 
	$dl = trim($_POST['dl_paczki']);
	$waga = trim($_POST['waga_paczki']);
	
	$szer2 = intval ($szer);
	$dl2 = intval ($dl);
	$waga2 = intval ($waga);

	switch ($_POST['rodzaj_wys'])
{
    case '1':
    $cena = ($szer2 + $dl2) * $waga2; 
    break;

    case '2':
    $cena = 2 * (($szer2 + $dl2) * $waga2); 
    break;

    case '3':
    $cena = 3 * (($szer2 + $dl2) * $waga2); 
    break;
	
	case '4':
    $cena = 4 * (($szer2 + $dl2) * $waga2); 
    break;
}
	
	$imie = substr($imie, 0, 1);
	$nazwisko = substr($nazwisko, 0, 1);
	
	$dane = $cena.';'.$imie.$nazwisko; 
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

 header("Location: ../html/dane_odb.html");
 ?>