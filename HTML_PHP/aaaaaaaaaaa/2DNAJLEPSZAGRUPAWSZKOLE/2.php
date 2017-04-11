   <?php	
	$data=getdate();
	$dni_jest= $data["yday"]+1;
	echo "Dzisiaj jest ".$dni_jest." dzien roku"."</br>";
    
    if(date('L')){
	$dni='366';
	}else{
	$dni='365';
	}
    $dzienroku = date('z');
    $pozostalo = $dni-$dzienroku-1;
    echo 'Do końca roku pozostało '.$pozostalo.' dni.';
	
	$godz=date("H:i");
	echo '</br>'.$godz;
	echo '</br>';
	echo date ("H:i M-d-Y", mktime (date('H'),date('i'),0,1,$dzienroku+1,$data['year']));
	
	?>