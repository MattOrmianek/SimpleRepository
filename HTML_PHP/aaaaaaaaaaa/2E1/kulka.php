<?php
echo("Wprowadzone dane:<br>");
echo("Promień: ".$_GET['promien']."<br>");
$r=$_GET['promien'];
if(!empty($_GET['box'])){
echo($_GET['box']. " ");
}
elseif(($_GET['box'])=='pole'){
	$pole=2*$r*M_PI;
	echo('$pole');
}

?>