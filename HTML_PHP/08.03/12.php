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
  echo scandir();
  ?>
  </body>
 </html>