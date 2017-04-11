<?php

$kat = "./";
if ($deskr = opendir($kat))
{
	while (($plik = readdir($deskr)) !== false)
		echo("$plik<br>");
	closedir($deskr);
}
else
	echo("Nie można otworzyć katalogu");

?>