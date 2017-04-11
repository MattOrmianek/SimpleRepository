<?php
for($i=0;$i<10;$i++){
	$tablica[$i]=rand(1,100);
	echo $tablica[$i]. " ";
}
sort($tablica);
echo '<br /> tablica posortowana rosnaco: <br />';
for($i=0;$i<10;$i++){
	echo $tablica[$i]. " ";
}
rsort($tablica);
echo '<br /> tablica posortowana malejaco: <br />';
for($i=0;$i<10;$i++){
	echo $tablica[$i]." ";
}

?>