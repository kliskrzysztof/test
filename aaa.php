<!DOCTYPE html>
<html lang="pl-PL">
<head>
	<title>nauka form</title>
	<meta charset="utf-8">
	<style type="text/css">
		html,body
		{
			background-color: yellow;
		}
	</style>
</head>
<body>
	<form method="POST" action="aaa.php">
		<label>Podaj swoje nazwisko <input type="text" name="nazwisko"></label><br>
		<label>Podaj swoje imię <input type="text" name="imie"></label><br>
	<input type="submit" value="Wyślij">
	<input type="reset" value="Wyczyść">

	</form>
	<?php
	echo "To mój pierwszy skrypt<br>";/*kometarz*/
	@$nazwisko = $_POST['nazwisko']; 
	@$imie = $_POST['imie']; 
 echo "<br>Twoje nazwisko to: ".$nazwisko;
 echo "<br><br>Twoje imię to: ".$imie;
	?>

</body>
</html>