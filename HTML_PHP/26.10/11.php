<!Doctype HTML>
<head>
<meta charset="UTF-8" />
<title>Tablice</title>
</head>
<body>
<form action="11.php" method="post">
<br />Podaj imie
<input type="text" name="a" value="" size="4"><br />
<br />Podaj nazwisko
<input type="text" name="b" value="" size="4"><br />
<br />Podaj nr telefonu
<input type="text" name="c" value="" size="4" maxlength="9" ><br />
<input type="submit" value="Wyswietl">
</form>
<?php

$tablica["imie"]=$_POST['a'];
$tablica["nazwisko"]=$_POST['b'];
$tablica["numer"]=$_POST['c'];

print_r($tablica);

?>

</body>
</html>