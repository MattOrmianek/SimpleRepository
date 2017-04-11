<?php
$auta["marka"]="fiat";
$auta["kolor"]="bialy";
$auta["km"]=15000;
print_r($auta);
asort($auta);
echo '<br /> Sortowanie tablicy <br />';
print_r($auta);
ksort($auta);
echo '<br />Sortowanie tablicy wedlug klucza <br />';
print_r($auta);

?>