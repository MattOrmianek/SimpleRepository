<?php
class arr 
{ 
	public function arr(){
	$dr[1] = "atramentowa";
	$dr[2] = "mozaikowa";
	$dr[3] = "iglowa";
	$dr[4] = "termiczna";
	$dr[5] = "sublimacyjna";
	$dr[6] = "laserowa";
	$dr[7] = "3D";
		sort ($dr);
		foreach ($dr as $key=>$value) {
			
			echo '['.$key.']'.' '.$value.'<br />';
			
		}
	}
}
$day = new arr();

?>