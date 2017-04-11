<!DOCTYPE html>
<head>
<title>php2</title>
</head>
<body>
<form action="3.php" method="post"> 
Tworzenie folderu o wybranej nazwie:
<input type="text" size="2" id="lol" name="nazwa_folderu">
<input type="submit" value="Utwórz folder" name="folder">
onclick="document.getElementById('form').action='3.php';"
<br/>
Tworzenie pliku o wybranej nazwie:
<input type="text" size="2" id="loll" name="nazwa_pliku">
<input type="submit" value="Utwórz plik" name="plik">
onclick="document.getElementById('form').action='4.php';"
</body>
</html>
