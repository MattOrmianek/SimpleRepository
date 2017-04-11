<?php
/*2.52,0.65,1.30,0.99,0.35 od najmniejszej do najwiekszej */
$tablica=array(2.52,0.65, 1.30, 0.99, 0.35);
sort($tablica);
echo '<br /> tablica posortowana rosnaco: <br />';
for($i=0;$i<5;$i++){
	echo $tablica[$i]. "<br />  ";
}

?>