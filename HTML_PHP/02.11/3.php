<?php
class arr 
{ 
	public function arr(){
	$color[1] = "czerwony";
	$color[2] = "zielony";
	$color[3] = "czarny";
	$color[4] = "bialy";
	
		foreach ($color as & $value) {
			
			echo $value.'<br />';
		}
	}
}
$color = new arr();

?>