<?php
$str = " Przykładowy ciąg ";
echo("Pierwotna zawartość ciągu str:<br>");
echo("-$str-");
$str = ltrim($str);
echo("<br>Po wywołaniu ltrim (\$str):<br>");
echo("-$str-");
$str = rtrim($str);
echo("<br>Po wywołaniu rtrim(\$str):<br>");
echo("-$str-");
$str = trim($str. "_. ");
echo("<br>Powywołaniu trim(\$str. \"_. \"):<br>");
echo("-$str-");
?>