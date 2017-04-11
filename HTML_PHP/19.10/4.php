<?php
$dzien = date("d");
$miesiac = date('m');
$rok = date('Y');
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
echo ($dzien." ".$miesiac." ".$rok);
?>
