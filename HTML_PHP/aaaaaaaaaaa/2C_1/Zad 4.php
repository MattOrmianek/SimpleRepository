<?php
$tekst="LOLEK JEST MISTRZEM PROGRAMOWANIA";
if(!$p=fopen('zadanie12.txt','a')){
	echo"nie można";
}
else{
	if(fwrite($tekst)--- false);
	echo"zapis nie powiodl sie";
}
else{
	echo $tekst;
}
?>