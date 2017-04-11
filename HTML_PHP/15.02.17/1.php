<?php
//zad 1
if(file_exists("k.txt")){
	echo "Plik istnieje.</br>";
}else{
	echo "Plik nie istnieje.</br>";
}
//zad 2
if(is_file("k.txt")){
	echo "To jest plik.</br>";
}else{
	echo "To nie jest plik.</br>";
}
//zad 3
echo "Plik posiada ".filesize("k.txt")." bajtów.";
//zad 4
touch("plik.txt");
//zad 5
unlink("plik.txt");
//zad 6
$tekst = "Jakiś tekst";
if (!$p = fopen("plik.txt", "a")){
	echo ("Nie można otworzyć pliku plik.txt");
}else{
	if(fwrite($p,$tekst)===false){
		echo ("Zapis do pliku nie powiódł się");
	}else{
		echo $tekst;
		fclose ($p);
	}
}
//zad 7
$kat = "./";
if ($deskr = opendir($kat))
{
	while (($plik = readdir($deskr)) !== false)
		echo("$plik<br>");
	closedir($deskr);
}
else
	echo("Nie można otworzyć katalogu");

// zad 8 napisz skrypt ktory bedzie odczytywal zawartosc wskazanego katalogu a odczytane elementy podzieli na katalogi i pliki i wyswietli je w kolejnosci wszystkie katalogi nastepnie wszystkie pliki 


















?>