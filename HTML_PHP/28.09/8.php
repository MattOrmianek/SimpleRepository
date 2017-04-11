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
$c = $_POST["c"];
$delta = $b^2 - 4*$a*$c;
if ($delta >0){
	-$b-sqrt($delta)/2*$a;
	-$b+sqrt($delta)/2*$a;
}
else if ($delta ==0){
	-$b/2*$a;
}
else if($delta < 0) {
	echo "Nie ma pierwiastkow";
}

?>








</body>
</html>