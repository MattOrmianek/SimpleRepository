<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8" />
	</head>
	<body>
		<form action="wnetrze_katalogu.php" method="POST">
			<input type="submit" name="submit" value="Pokaż wnętrze katalogu" />
			<input type="submit" name="clear" value="Clear" />
		</form>
		<br />
<?php
if (!isset($_POST['submit'])){
	exit;
}
@$pliki=scandir(getcwd());
if (!$pliki){
	echo "Wystąpiły błędy";
}

else if (count($pliki)===0){
	echo "Brak plików";
}

foreach($pliki as $plik){
	if($plik!='.' && $plik!='..'){
		echo $plik.'<br />';
	}
}

?>
	</body>
</html>