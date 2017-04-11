<html>
<head>
<title>LOLEK</title>
<meta charset="UTF-8">
</head>
<body>
<?php
touch("LOLEK.txt");
$filename='LOLEK.txt';
echo $filename.';'. filesize($filename).'bajtów';



?>
</body>
</html>