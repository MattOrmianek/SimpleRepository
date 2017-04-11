<?php
class arr 
{ 
	public function arr(){
	$dr[1] = "Michal";
	$dr[2] = "Mateusz";
	$dr[3] = "Krzysztof";
	$dr[4] = "Adrian";
	$dr[5] = "Pawel";
	$dr[6] = "Jakub";
	$dr[7] = "Rafal";
		sort ($dr);
		foreach ($dr as &$value) {
			
			echo $value.'<br />';
			
		}
	}
}
$day = new arr();

?>