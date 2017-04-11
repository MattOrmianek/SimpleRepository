<?php
/*2.52,0.65,1.30,0.99,0.35 od najmniejszej do najwiekszej */
$tablica[0]= 2.52;
$tablica[1]= 0.65;
$tablica[2]= 1.30;
$tablica[3]= 0.99;
$tablica[4]= 0.35;
sort($tablica);
echo '<br /> tablica posortowana rosnaco: <br />';
for($i=0;$i<5;$i++){
	echo $tablica[$i]. "<br />  ";
}



?>