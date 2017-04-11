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
$number=0;

echo "Wynik zamowienia to: </br>"." właściciel: ".$a;
echo "<br />zaliczka wynosi: ";
printf ("%.2f",$c);
echo "<br/>Zamowienie przyjete:<br/> ".date("H:i, jS F Y");

if($wybor == "a"){
	echo"<p> Tryb standardowy.</p>";

}else{
	echo"<p style='color: red'> Tryb szybki.</p>";
	
}
?>

</body>