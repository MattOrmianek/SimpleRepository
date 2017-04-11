<!DOCTYPE html>
<html lang="pl">
 <head>
<title>Tytuł</title>
<meta charset="utf-8" />
<meta name="author" content="Nie ma" />
<meta name="description" content="Opis" />
</head>
<body>

<?php
$a = $_POST["a"];
$b = $_POST["b"];

if($a > $b){
	echo " Liczba ". $a ." jest wieksza";
}
else if ($a == $b){
	echo "Liczby sa rowne";
}
 else{
	 echo " Liczba ". $b ." jest wieksza";
 }






?>








</body>
</html>