<?php
$ile = 10;
for($x=0; $x<$ile; $x++){
$tablica[]=rand(0, 300);
echo $tablica[$x]." ";
}
$max=0;
$min=0;
for($x=0; $x<$ile; $x++){
if($tablica[$x]<$tablica[$min])
	$min=$x;
if($tablica[$x]>$tablica[$max])
	$max=$x;
}
echo ("<br><br>Najmniejsza liczba to ".$tablica[$min].", a największa to ".$tablica[$max].".<br><br> Posortowane:<br>");
sort($tablica);
for($x=0; $x<$ile; $x++){
echo $tablica[$x]." ";
}
echo ("<br><br>Najmniejsza liczba to ".$tablica[0].", a największa to ".$tablica[$ile-1].".");
echo ("<br><br><br>Wśród wygenerowanych liczb znajduje się");
$p = 0;
for($x=0; $x<$ile; $x++){
	if($tablica[$x]%2==0)
		$p+=1;
}
echo (" $p liczb parzystych.")
?>
