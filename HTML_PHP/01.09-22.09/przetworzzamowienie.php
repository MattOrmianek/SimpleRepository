<!DOCTYPE html>
<head>
<meta charset="UTF-8"><head>
<title> Części samochodowe Janka - wyniki zamówienia</title>
</head>
<body>


<h1> Części samochodowe Janka </h1>
<h2> Wyniki zamówienia </h2>
<?php

$iloscopon=$_POST['iloscopon'];
$iloscoleju=$_POST['iloscoleju'];
$iloscswiec=$_POST['iloscswiec'];
echo "<p> Zamówienie Państwa wygląda następująco: </p>"; 
echo $iloscopon." opon<br/>";
echo $iloscoleju." oleju <br />";
echo $iloscswiec." swiec <br />";
echo "<p> Zamowienieprzyjete o ";
echo date("H:i, js F Y");
echo "</p>";
?>
</body>
</html>