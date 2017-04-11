<?php
$format1 = "Liczba ma wartość %d. napis ma wartość %s";
$format2 = "Napis ma wartość %s. liczba ma wartość %d";
$format3 = "Napis ma wartość %2\$s. Liczba ma wartość %l\$d";
$liczba = 100;
$napis = "abcd";
printf($format1, $liczba, $napis);
echo("<br>");
printf($format2, $liczba, $napis);
echo("<br>");
printf($format3, $liczba, $napis);
echo("<br>");
echo("<br>");
$tab = explode(" ", "jeden dwa trzy cztery");
foreach($tab as $val) echo("$val<br>");

$tab = array("jeden", "dwa", "trzy");
$str = implode(" : ", $tab);
?>