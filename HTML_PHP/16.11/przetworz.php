<!Doctype html>
</html>
<head>
<meta charset="UTF-8" />
<title>2</title>
<link rel="stylesheet" href="style.css" type="text/css"> 
</head>
<body>

<?php
$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];
$wybor=$_POST["wybor"];


echo "Wynik zamowienia to:</br>".$a." opon, ".$b." oleju, ".$c." swiec";
echo "<br/>Zamowienie przyjete:<br/> ".date("H:i, jS F Y");

if($wybor == "a"){
	echo"<p> Staly klient.</p>";
	
}elseif($wybor == "b"){
	echo "<p> reklama telewizyjna</p>";
	
}elseif($wybor == "c"){
	echo "<p> znajomy.</p>";
	
}elseif($wybor== "d"){
	echo "<p> nieznany.<p/>";
}
?>

</body>