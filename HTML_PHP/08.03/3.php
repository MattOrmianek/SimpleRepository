<?php
$folder= $_POST['nazwa_folderu'];
if(!is_dir($folder)){
mkdir ($folder, 0777);
echo "<b>Folder o nazwie: <i>$folder</i> został stworzony!</b>";
}
?>