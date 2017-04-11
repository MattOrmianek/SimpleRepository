<?php
class arr 
{ 
	public function arr(){
	$day['monday'] = "poniedzialek";
	$day['tuesday'] = "wtorek";
	$day['wednesday'] = "sroda";
	$day['thursday'] = "czwartek";
	$day['friday'] = "piatek";
	$day['saturday'] = "sobota";
	$day['sunday'] = "niedziela";
		foreach ($day as &$value) {
			echo $value.'<br />';
		}
	}
}
$day = new arr();

?>