<?php
class arr 
{ 
	
	public function arr(){
	$arr = array(4, 6, 8, 1);
		foreach ($arr as & $value) {
			$value = $value * 2;
			echo $value;
		}
	}
}
$arr = new arr();

?>
