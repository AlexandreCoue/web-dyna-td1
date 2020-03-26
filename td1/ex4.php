<!DOCTYPE html> 
<html> 
	<head> 
		<meta charset="UTF-8">
		<title>Exercice 4</title>
	</head>
<body>
	<p style="font-weight: <?=$gras ?>"><?="$i - $j"?></p>
	<p style="font-weight: <?=$gras ?>;color:<?=$couleur ?>"><?="$i - $j"?></p>
	 <?php
		for ($i=0;$i<$ligne;$i++){
			$bold=($i%2==0)?"bold":"normal";
		for ($j=0,$j<$colon;$j++){
			$color=($j%2==0)?"red":"black";
    ?>
    <textarea name="texte"></textarea>
</body>
</html>

# 
# 