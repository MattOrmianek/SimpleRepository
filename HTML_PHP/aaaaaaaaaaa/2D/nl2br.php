<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
echo nl2br("Witaj </br>");

?>

<?php
echo nl2br("Żegnaj </br>", false);

?>

<?php
$text = "lolololololololololololo";
$newtext = wordwrap($text, 8, "\n", true);

echo "$newtext\n";
echo "</br> Znaków jest </br>"  	;
echo strtolower($text). "</br"

?>

<?php
$email  = 'nazwa@le.cm</br>';
$domain = strstr($email, '@ </br>');
echo $domain; 
$user = strstr($email, '@ </br>', true); 
echo  $user; 
echo strtoupper ($email). "</br"
?>


<?php
  $email = '<nazwa@LE.cm</br>';
  echo stristr($email, 'e</br>'); 
  echo stristr($email, 'e</br>'); true;
  echo ucwords ($email, 'e</br'); 
  
?>


<?php
$a

$rest = substr("a", -1);   
$rest = substr("abcdef", -2);    
$rest = substr("abcdef", -3, 1);
?>







</body>
</html>