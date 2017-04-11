<?php

if( isset($zmienna) ) {
	echo 'Jest zmienna';
}
 
$zmienna = array("",0,"0",null,false,array(),true,1,"1",array(1));
 
for($i = 0; $i < sizeof($zmienna); $i++) {
	echo $i;
	echo isset($zmienna[$i]) ? ' IsSet - true, ' : ' IsSet - false, ';
	echo empty($zmienna[$i]) ? 'empty - true' : 'empty - false';
}
?>