<!Doctype html>
</html>
<head>
<meta charset="UTF-8" />
<title>1</title>
<link rel="stylesheet" href="style2.css" type="text/css"> 
</head>
<body>
<form action="przetworz.php" method="post">

<table border="0" cellpading="3">
<tr>
	<td bgcolor= "#6060F2" align="center">Odleglosc</td>
	<td bgcolor= "#6060F2" align="center">Odleglosc</td>
</tr>
<?php
$odleglosc = 50;
while ($odleglosc <=250){
	echo "<tr>
	<td align=\"center\">".$odleglosc."</td>
	<td align=\"center\">". ($odleglosc/10)."</td>
	</tr>\n";
	$odleglosc += 50;
}
?>
</table>


</body>