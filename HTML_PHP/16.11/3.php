<!Doctype html>
</html>
<head>
<meta charset="UTF-8" />
<title>1</title>
<link rel="stylesheet" href="style2.css" type="text/css"> 
</head>
<body>
<form action="3.php" method="post">

<?php
$odleglosc = 50;
if($jak == "a"){
	echo"<p> Staly klient.</p>";
	
}elseif($jak == "b"){
	echo "<p> reklama telewizyjna</p>";
	
}elseif($jak == "c"){
	echo "<p>znajomy.</p>";
	
}else{
	echo "<p>nieznany.<p/>";
}
?>



</body>