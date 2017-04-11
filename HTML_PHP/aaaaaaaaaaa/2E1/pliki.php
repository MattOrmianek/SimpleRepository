<?php
$data=date("d-m-Y");
$godz=date("H:i");
echo"$data $godz";
echo"</br>";
$imie=$_POST['imie'];
$nazwisko=$_POST['nazwisko'];
$numer=$_POST['numer'];
$plik=fopen("plik.txt", "w");
fwrite($plik, $imie);
fwrite($plik, $nazwisko);
fwrite($plik, $numer);
$dane=fread(fopen("plik.txt", "r"), filesize("plik.txt"));
echo"$dane";
fclose($plik);
?>
