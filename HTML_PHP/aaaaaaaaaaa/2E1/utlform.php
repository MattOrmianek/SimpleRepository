<?php
echo("Wprowadzone dane:<br>");
echo("Miasto: ".$_GET['miasto']."<br>");
echo("Płeć: ".$_GET['plec']."<br>");

echo("Hobby: ");
for($i=0;$i<4;$i++){
if(!empty($_GET['hobby'][$i]))
{
echo($_GET['hobby'][$i]." ");
}
}
?>