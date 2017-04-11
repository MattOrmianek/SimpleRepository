<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8" />
	</head>
	<body>
		<form action="kopiowanie.php" method="POST">
			<input type="submit" name="submit" value="Kopiuj plik utworz_katalog" />
			<input type="submit" name="clear" value="Wyczyść" />
		</form>
		<br />
<?php
if (!isset($_POST['submit'])){
	exit;
}

if (!unlink("utworz_katalog.php", 'kat1/kat2/utworz_katalog_backup.php')){
	echo "Wystąpił błąd podczas kopiowania plików";
}
else {
	echo "Operacja kopiowania zakonczona sukcesem";
}
?>
	</body>
</html>