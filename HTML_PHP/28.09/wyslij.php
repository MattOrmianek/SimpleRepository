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
$b = 150;
$c = 180;
if($a < $b){
	echo "Jestes niski";
}
else if($a > $b && $a < $c ){
	echo "Jestes sredniego wzrostu";
	
}
 else if($a > $c){
	 echo "Jestes wysoki";
 }






?>








</body>
</html>