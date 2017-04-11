<?php
$a = 7;
$b = 2;
$c = 1;
<div id="kappa">
<form action="wynik.php" method="post">
<p>Podaj ilosc: <input type="text" name="ilosc" contener="Opis size="2" maxlength="2" />
<form>
</div>
if ($a > $b && $a >$c){	
	echo "liczba ". $a ." jest najwieksza";
	}
else if ($b > $c && $b > $a) {
	echo "liczba ". $b ." jes najwieksza";
}
else {
	echo "liczba ". $c ." jest najwieksza";
}
if($a < $b && $a < $c){
	echo "<br />Liczba ". $a ." jest najmniejsza";
}
else if ($b < $a && $b < $c){
	echo "<br /> Liczba ". $b ." jest najmniejsza";
}
else{
	echo "<br />Liczba ". $c ." jest najmniejsza";
}
?>