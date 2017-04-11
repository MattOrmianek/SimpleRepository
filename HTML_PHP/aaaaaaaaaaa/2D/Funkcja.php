<?php
function wart(&$liczba)
{
$liczba +=8;
}
$liczba=4;
echo "Wartość zmiennej \$liczba przed wywołaniem funkcji
$liczba </br>";
wart($liczba);
echo "Wartośc zmiennej \$liczba po wywołaniu funkcji:$liczba </br>";

?>