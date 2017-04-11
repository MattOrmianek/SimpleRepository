<?php
$plik= $_POST['nazwa_pliku'];
if(!file_exists($plik)){
touch ('$plik');
echo "<b>Plik o nazwie: <i>$plik</i> został stworzony!</b>";
}
?>