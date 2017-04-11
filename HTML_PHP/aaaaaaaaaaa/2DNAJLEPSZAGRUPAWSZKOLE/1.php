<?php
$data=getdate();
$dzien=$data["mday"];
$miesiac=$data["mon"];
$rok=$data["year"];
switch($miesiac){
	case 1:
	$miesiac="January";
	break;
	case 2:
	$miesiac="February";
	break;
	case 3:
	$miesiac="March";
	break;
	case 4:
	$miesiac="April";
	break;
	case 5:
	$miesiac="May";
	break;
	case 6:
	$miesiac="June";
	break;
	case 7:
	$miesiac="July";
	break;
	case 8:
	$miesiac="August";
	break;
	case 9:
	$miesiac="September";
	break;
	case 10:
	$miesiac="October";
	break;
	case 11:
	$miesiac="November";
	break;
	case 12:
	$miesiac="December";
	break;
}
echo "Dzisiaj jest ".$dzien." ".$miesiac." ".$rok;
?>
