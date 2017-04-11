<!Doctype html>
</html>
<head>
<meta charset="UTF-8" />
<title>1</title>
<link rel="stylesheet" href="style2.css" type="text/css"> 
</head>
<body>
<form action="przetworz.php" method="post">
<?php
$day = date("d");
$miesiac = date('m');
$year = date('Y');
switch ($miesiac){
	case 01:
	$miesiac= 'Stycznia';
	break;
	case 02:
	$miesiac= 'Lutego';
	break;
	case 03:
	$miesiac= 'Marca';
	break;
	case 04:
	$miesiac= 'Kwietnia';
	break;
	case 05:
	$miesiac= 'Maja';
	break;
	case 06:
	$miesiac= 'Czerwca';
	break;
	case 07:
	$miesiac= 'Lipca';
	break;
	case 08:
	$miesiac= 'Sierpnia';
	break;
	case 09:
	$miesiac= 'Wrzesnia';
	break;
	case 10:
	$miesiac= 'Pazdziernika';
	break;
	case 11:
	$miesiac= 'Listopada';
	break;
	case 12:
	$miesiac= 'Grudnia';
	break;
	
}
echo 'Data '.$day." ".$miesiac." ".$year;

?>
<br />
Właściciel: <input type="text" name="a" size="2" /><br />
Samochod: <input type="text" name="b" size="2" /><br />
Zaliczka: <input type="text" name="c" size="2" /><br />
Tryb naprawy: <select name="wybor">
		<option value="a">Standard</option>
		<option value="b">Szybki</option>

	</select>
	<br/>
<input type="submit" value="Submit" id="a">

</body>
</html>