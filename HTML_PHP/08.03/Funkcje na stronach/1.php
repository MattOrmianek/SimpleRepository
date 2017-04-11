<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8" />
	</head>
	<body>
		<form action="utworz_katalog.php" method="POST">
			<input type="submit" name="submit" value="Utwórz katalogi" />
			<input type="submit" name="clear" value="Wyczyść" />
		</form>
		<br />
<?php
if (!isset($_POST['submit'])){
	exit;
}

if (file_exists('kat1')){
	echo "Katalog kat1 juz istnieje";
}

else if (!mkdir('kat1')){
	echo "Tworzenie katalogu nie powiodło się";
	exit;
}

else{
	echo "Katalog kat1 został utworzony";
}

if (file_exists('kat1/kat2'))
{
	echo "<br />Katalog kat2 już istnieje";
}

else if(!mkdir('kat1/kat2'))
{
	echo "<br />Tworzenie katalogu kat2 nie powiodło się";
}

else
{
	echo "<br />Katalog kat2 został utworzony";
}

?>
	</body>
</html>