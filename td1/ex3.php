<!DOCTYPE html> 
<html> 
	<head> 
		<meta charset="UTF-8">
		<title>Exercice 3</title>
	</head>
<body>
	<form method="POST">
		<label for="size">Size : </label>
		<input type="number" value="<?=$size?>" name="size" id="size">
		<label for="message">Message : </label>
		<input type="text" value="<?=$message?>" name="message" id="message">
		<label for="couleur">Couleur : </label>
		<input type="color" value="<?=$color?>" name="couleur" id="couleur">
		<input type="submit" value="Valider">
		<input type="submit" name="update" value="+">
		<input type="submit" name="update" value="-">
	</form>
	<?php
		$size = $_POST['size'] ?? 10;
		$color = $_POST['couleur'] ?? 'black';
		$message = $_POST['message'] ?? 'Pas de message envoyé';
		$update = $_POST['update'] ?? null;

		if ($update == "+") {
			$size = $size + 2;
		} elseif ($update == "-") {
			$size = $size - 2;
		}

		echo "<div style='font-size: {$size}px; color: {$color} ;'>Message de taille {$size}px en {$message}</div>";
	?>
</body>
</html>

# 
# 