<?php
class arr 
{ 
	public function arr(){
	$dr[1] = 2;
	$dr[2] = 5;
	$dr[3] = 8;
	$dr[4] = 2;
	$dr[5] = 3;
	$dr[6] = 4;
	$dr[7] = 9;
		$wynik=0;
		for($i=1;$i<8;$i++){
			$wynik+=$dr[$i];
		}
		echo $wynik;
	}
}
$day = new arr();

?>
