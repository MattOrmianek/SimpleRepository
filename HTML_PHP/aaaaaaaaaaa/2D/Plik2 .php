
<?php
$dzien = date('d');
$dzien_tyg = date('l');
$miesiac = date('n');
$rok = date('Y');
$prze = date('L');
$miesiac_pl = array(1 => 'stycznia', 'lutego', 'marca', 'kwietnia', 'maja', 'czerwca', 'lipca', 'sierpnia', 'września', 'października', 'listopada', 'grudnia');

$dzien_tyg_pl = array('Monday' => 'poniedziałek', 'Tuesday' => 'wtorek', 'Wednesday' => 'środa', 'Thursday' => 'czwartek', 'Friday' => 'piątek', 'Saturday' => 'sobota', 'Sunday' => 'niedziela');
echo $dzien_tyg_pl[$dzien_tyg].", ".$dzien." ".$miesiac_pl[$miesiac].", ".$rok."r." ;

echo "</br> Dzisiaj jest " .$dzien_tyg_pl[$dzien_tyg]; 

function ileDo($dzien,$miesiac,$rok) 
{ $data_przyszla = mktime(0,0,0,$miesiac,$dzien,$rok);
 $teraz = time(); $roznica = $data_przyszla - $teraz; return ceil($roznica/86400); } 
 
echo "</br>Do końca pozostało: ".ileDo(31,12,2017)." dni.";
$dzien_roku = date('z');
echo "</br>Upłyneło: " .$dzien_roku. " dni	 roku.</br>" ;


echo date("2017-02-02")."<br/>"; 	
echo date("10:05:10")."<br/>"; 
?>