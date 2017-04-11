<?php
$tab = explode(" ", "jeden dwa trzy cztery");
foreach($tab as $val) echo("$val<br>");

$tab = array("jeden", "dwa", "trzy");
$str = implode(" : ", $tab);
?>