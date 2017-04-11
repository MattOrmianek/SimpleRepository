<?php
/* volvo, mercedes, fiat, ford, bmw od a do z*/
$tablica[0]="volvo";
$tablica[1]="mercedes";
$tablica[2]="fiat";
$tablica[3]="ford";
$tablica[4]="bmw";
sort($tablica);
echo '<br /> tablica posortowana od a do z: <br />';
for($i=0;$i<5;$i++){
	echo $tablica[$i]. "<br /> ";
}
?>