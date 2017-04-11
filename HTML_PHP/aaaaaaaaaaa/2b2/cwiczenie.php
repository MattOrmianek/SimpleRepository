<?php
//Zad 1 i 2
$ile = 10;
for($x=0; $x<$ile; $x++){
	$tablica[]=rand(0, 300);
	echo $tablica[$x]." ";
}
Echo ("<br><br>");
//zad 3
$p=0;
for($x=0; $x<$ile; $x++){
	if($tablica[$x]%2!=0){
		$p+=1;
	}
}
echo ("Wylosowało $p liczb nieparzystych.<br><br>");
//zad 4
for($x=0; $x<$ile; $x++){
	if($tablica[$x]%2!=0){
		$tablica[$x] = $tablica[$x] + 5;
		echo $tablica[$x]." ";
	}
}
echo ("<br><br>");
//zad 5
for($x=0; $x<$ile; $x++){
	echo $tablica[$x]." ";
}
echo ("<br><br>");
//zad 7
$tab2= array(array(3, 5, 6, 8), array(10, 15, 3, 2));
for($x=0; $x<2; $x++){
	for($y=0; $y<4; $y++){
		echo $tab2[$x][$y]." ";
	}
	echo ("<br>");
}



?>