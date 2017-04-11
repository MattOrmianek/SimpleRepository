<?php
/* volvo, mercedes, fiat, ford, bmw od a do z*/
$tablica=array("volvo","mercedes", "fiat", "ford","bmw");
sort($tablica);
echo 'tablica posortowana od a do z: <br />';
for($i=0;$i<5;$i++){
	echo $tablica[$i]. "<br /> ";
}
?>