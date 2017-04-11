<?php
echo "Petla for :<br />";

for($i=10;$i<100;$i++){
		if(($i%2==0 && $i%4==0) || ($i%3!=0 && $i%7==0)) {
		echo "".$i."<br />";

}
}

$a=10;
echo "Petla do..while :<br />";
do{
	$a++;
	if(($a%2==0 && $a%4==0) || ($a%3!=0 && $a%7==0)) {
		echo "".$a."<br />";
	}
}
while($a<100);
echo "Petla while :<br />";
$b=10;
while($b<100){
	$b++;
	if(($b%2==0 && $b%4==0) || ($b%3!=0 && $b%7==0)) {
		echo "".$b."<br />";
}
}
?>