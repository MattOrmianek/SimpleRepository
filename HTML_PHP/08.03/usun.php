<!DOCTYPE html>
 <html lang="pl-PL">
  <head>
	<meta charset="UTF-8">
	<title>Tytuł strony</title>
	<meta name="author" content="Krzysztof">
  </head>
  <body>
	<form action="usun.php" method="post">
	 <input type="submit" value="Usun" name="submit">
	</form>
  <?php
  if(!isset($_POST["submit"])) exit;
  
  if(file_exists("kat1/kat2/kopia.php")) {
	  unlink ("kat1/kat2/kopia.php");
	  echo ("Usunięto plik");
  }
  else
	  echo ("Taki plik nie istnieje i nie ma co usuwac");
  ?>
  </body>
 </html>