<!Doctype HTML>
<head>
<meta charset="UTF-8"/>
</head>
<body>
<form action="3.php" method="post">
<h1>Menu:</h1>
1. Dodawanie<br />
2. Odejmowanie<br />
3. Dzielenie<br />
4. Mnozenie<br />

Podaj pierwszą liczbę <input name="p" size="1"><br />
Podaj drugą liczbę <input name="d" size="1"><br />
Wybierz co zrobić
<input name="c" size="1" maxlength="1">
<br /><input type="submit" value="oblicz"><br />
<?php
$a=$_POST['p'];
$b=$_POST['d'];
$c=$_POST['c'];
echo "Liczba pierwsza to ".$a."<br />";
echo "Liczba druga to ". $b."<br />";
$dzien= date('w');




switch ($c){
	case 1:
	echo "<br /> Wybrales operacje : dodawania<br />";
	break;
	case 2:
	echo "<br />Wybrales operacje : odejmowania<br />";
	break;
	case 3:
	echo "<br />Wybrales operacje : dzielenia<br />";
	break;
	case 4:
	echo "<br />Wybrales operacje : mnozenia<br />";
	break;

}



switch ($c){
case 1:
echo "<br />Wynik to :".$a+$b." ";
break;
case 2:
echo "<br />Wynik to :".$a-$b." ";
break;
case 3:
echo "<br />Wynik to :".$a/$b." ";
break;
case 4:
echo "<br />Wynik to :".$a*$b." ";
break;
}

switch ($dzien){
	case 0:
	$dzien=("Niedziela");
	case 1:
	$dzien=("Poniedzialek");
	case 2:
	$dzien=("Wtorek");
	case 3:
	$dzien=("Środa");
	case 4:
	$dzien=("Czwartek");
	case 5:
	$dzien=("Piatek");
	case 6:
	$dzien=("Sobota");
}
echo "Dzisiaj jest ". $dzien."";
?>
</body>
</html>