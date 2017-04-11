<!DOCTYPE html>
<html>
<head>
<title> Plec </title>
</head>
<body>

<?php
include ("Plik2")
$imie = $_POST['imie'];
function plec($imie){
   $znak = $imie{strlen($imie)-1};
   if($znak=='a') echo "$imie to Kobieta";
   else echo "$imie to Facet" ;
      
}
plec ($imie);


?>


</body>
</html>