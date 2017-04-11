<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8" />
	</head>
	<body>
		<form action="usuwanie.php" method="POST">
			<input type="submit" name="submit" value="Usun plik kopii" />
			<input type="submit" name="clear" value="Wyczyść" />
		</form>
		<br />
<?php
if (!isset($_POST['submit'])){
	exit;
}
if (!file_exists('kat1/kat2/utworz_katalog_backup.php')){
	echo "Plik nie istnieje";
}
else if (!unlink('kat1/kat2/utworz_katalog_backup.php')){
	echo "Wystąpił błąd podczas usuwania pliku";
}
else {
	echo "Operacja usuwania zakonczona sukcesem";
}
?>
	</body>
</html>