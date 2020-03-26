<!DOCTYPE html> 
<html> 
	<head> 
		<meta charset="UTF-8">
		<title>Exercice 3</title>
	</head>
<body>
	<form method="POST">
		<label for="size">Size : </label>
    	<input type="number" value="" name="size" id="size">
    	<input type="submit" value="Valider">
	</form>
	 <?php
    	echo "<div style='font-size: {$_POST["size"]}px; color: {$_POST["Color"]}'>{$_POST["message"]}</div>";
    ?>
    <textarea name="texte"></textarea>
</body>
</html>

# 
# 