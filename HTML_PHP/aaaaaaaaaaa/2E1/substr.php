<?php
$str = substr("abcdef", 1);
echo ("substr(\"abcdef\", 1) = $str<br>");

$str = substr("abcdef", 2, 4);
echo ("substr(\"abcdef\", 2, 4) = $str<br>");

$str = substr("abcdef", -2);
echo ("substr(\"abcdef\", -2) = $str<br>");

$str = substr("abcdef", 2, -2);
echo ("substr(\"abcdef\", 2, -2) = $str<br>");

$str = substr("abcdef", -5, -3);
echo ("substr(\"abcdef\", -5, -3) = $str<br>");
?>