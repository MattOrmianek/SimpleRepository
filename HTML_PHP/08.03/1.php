<?php
//zad 1
$a=$_POST["login"];
$b=$_POST["passwd"];
$do=md5($a).' '.md5($b);
@$plik=fopen('pass.txt','w');
if(!$plik){
	echo 'Wystąpił błąd';
	exit;
}
if(!flock($plik, LOCK_EX)){
echo 'Wystąpił błąd';
fclose($plik);
exit; 
}
fwrite($plik, $do);
flock($plik, LOCK_UN);
fclose($plik);
echo "operacja zakonczona pomyslnie";
?>