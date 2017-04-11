<?php
echo "Petla for :<br />";

for($i=20;$i<200;$i++){
		if(($i%4==0 ||$i%6==0) && $i%5!=0) {
		echo "".$i."<br />";

}
}

$a=20;
echo "Petla do..while :<br />";
do{
	$a++;
	if(($a%4==0 ||$a%6==0) && $a%5!=0) {
		echo "".$a."<br />";
	}
}
while($a<200);
echo "Petla while :<br />";
$b=20;
while($b<200){
	$b++;
	if(($b%4==0 ||$b%6==0) && $b%5!=0) {
		echo "".$b."<br />";
}
}
?>