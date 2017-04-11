<!DOCTYPE html>
<html lang="pl">
 <head>
<title>Tytuł</title>
<meta charset="utf-8" />
<meta name="author" content="Nie ma" />
<meta name="description" content="Opis" />
</head>
<body>
<div>
<form action="7.php" method="post">
<p>Podaj liczbe: <input type="text" name="cd" size="2" maxlength="3" /></p>
</div>
<?php
$a = $_POST['cd'];
$b = 0;
$c = 0;
if($a%2==0){
	$a+$b=$c;
	echo "suma wynosi ".$c.". Podaj kolejna liczbe";
	}







?>


</form>
</div>
</body>
</html>