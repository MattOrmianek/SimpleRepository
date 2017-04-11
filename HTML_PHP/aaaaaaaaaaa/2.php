<?php
$s=$_POST['a'];
$z=0;
for ($i=0; $i<strlen($s); $i++)
{
if($s[$i]==$_POST['b']) $z++;
}
echo 'poszukiwanych wyrazów '. $z;
?>