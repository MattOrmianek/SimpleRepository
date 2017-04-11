<?php

if($_POST['submit']){
$kurs = 4 ;         // ile zł za 1 euro

$waluta = $_POST['waluta'];
$ile = $_POST['ile'];

if ($waluta == "euro"){
$euro = $ile/$kurs;
echo "$ile zł = $euro euro";
}
else if($waluta == "zl"){
$zl = $ile*$kurs;
echo "$ile euro = $zl zl";
}
}
else {
?>
<form method="post" action="">
<input type="text" name="ile"><br>
Przelicz na:<br>
<input type="radio" name="waluta" value="zl"> zł<br>
<input type="radio" name="waluta" value="euro"> euro<br>
<input type="submit" name="submit" value="submit">
</form>


?>