<!DOCTYPE html>
<html lang="pl">
 <head>
<title>Tytuł</title>
<meta charset="utf-8" />
<meta name="author" content="Nie ma" />
<meta name="description" content="Opis" />
 </head>
 <body>
 <div id="kappa">
<form action="wyslij.php" method="post">
<p>Podaj długość boku a: <input type="text" name="a" size="2" maxlength="2" /></p>
<p>Podaj długość boku b: <input type="text" name="b"
</form>
 </div>
<?php
$a = 1;
$b = 2;
$c = 3;

if ($a>$b && $a>$c)
{
	echo ("Liczba ".$a." jest największa<br />");
}
else if ($b>$a && $b>$c)
{
	echo ("Liczba ".$b." jest największa<br />");
}
else
{
	echo ("Liczba ".$c." jest największa<br />");
}
if ($a<$b && $a<$c)
{
	echo ("Liczba ".$a." jest najmniejsza");
}
else if($b<$a && $b<$c)
{
	echo ("Liczba ".$b." jest najmniejsza");
}
else
{
	print ("Liczba ".$c." jest najmniejsza");
}
?>
 </body>
</html>