<!DOCTYPE html>
<html lang="pl">
<head>
<title>Zadanie numer 2</title>
<meta charset="utf-8" />
</head>
<body>
<?php
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$delta = $b*$b*4*$a*$c;

if($delta>0)
{
	$x1=(-$b-sqrt($delta))/2;
	$x2=(-$b+sqrt($delta))/2;
	echo ("Pierwszy pierwiastek to: ".$x1."<br />");
	echo ("Drugi pierwiastek to: ".$x2);
}
else if($delta==0)
{
	$x0=-$b/2*$a;
	echo ("Jest jeden pierwiastek: ".$x0);
}
else
{
	echo ("Nie ma pierwiastków");
}
?>
</body>
</html>