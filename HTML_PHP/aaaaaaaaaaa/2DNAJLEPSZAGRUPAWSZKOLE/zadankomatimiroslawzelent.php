<?php
function plec(){
	$imie = $_POST["imie"];
	$liczba=strlen($imie);
	$ostatnia = substr($imie, $liczba-1, 1);
	if($ostatnia=="a"){
		echo "Kobieta";
	}
	else{
		echo "Mężczyzna";
	}
}

plec();
?>