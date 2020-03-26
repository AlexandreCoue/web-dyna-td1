<!DOCTYPE html> 
<html> 
	<head> 
		<meta charset="UTF-8">
		<title>Exercice 2</title>
	</head>
<body>
	<form method="GET">
		<label for="size">Size : </label>
    	<input type="number" value="" name="size" id="size">
    	<input type="submit" value="Valider">
	</form>
	 <?php
    	echo "<div style='font-size: {$_GET["size"]}px; color: {$_GET["Color"]}'>{$_GET["message"]}</div>";
    ?>
</body>
</html>

# Hypertexte pour modifier la taille et le message 
# http://127.0.0.1/web-dyna/web-dyna-td1/td1/ex2.php?Color=%23ff0000&size=125&message=HELLO_world