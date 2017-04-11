<!Doctype html>
</html>
<head>
<meta charset="UTF-8" />
<title>2</title>
<link rel="stylesheet" href="style.css" type="text/css"> 
</head>
<body>
<form action="przetworz.php" method="post">
<?php

if(!isset($_POST['aa'])){
echo "Nie podales danych";
}
else{
echo "<br />Wyksztalcenie ".$_POST["aa"]."<br />";
}

if((!empty($_POST["ac"])) && (!empty($_POST["ab"]))){
	echo $_POST['ac']." ".$_POST['ab']."  zna: <br />";
	foreach($_POST['w'] as $x){
	echo $x." ";
	}
}
else{
	echo $_POST["ac"]." ".$_POST["ab"]."  nie zna żadnego jezyka obcego";
	}

?>


</body>