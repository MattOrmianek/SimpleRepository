<!DOCTYPE html>
<html>
<head>
<title> Plec </title>
</head>
<body>

<?php
$imie = $_POST['imie'];
function plec($imie){
   $znak = $imie{strlen($imie)-1};
   if($znak=='a') echo "$imie to Kobita";
   else echo "$imie to Facet" ;
      
}
plec ($imie);


?>


</body>
</html>