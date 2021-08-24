<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Accueil</title>
</head>
<body>
	<p>Tafiditra oh!!!</p>
	<form action="ajout">
		<input type="submit" value="Ajout produit">
	</form>
	<br>
	<table border="1">
		<head>
			<tr>
				<th>Designation</th>
				<th>Prix(Ar)</th>
				<th>Categorie</th>
				<th colspan="2">Modifications</th>
			</tr>
		</head>
		<body>
            <?php for ($i=0; $i < count($listeProduit) ; $i++) { ?>
            <?php for ($i=0; $i < count($categorie) ; $i++) { ?>

			<tr>
					<td><?php echo $listeProduit[$i]['designation']; ?></td>
					<td><?php echo $listeProduit[$i]['prix']; ?></td>
					<td><?php echo $categorie[$i]['nom']; ?></td>
				
					<td><a href="#">Modifier</a></td>
					<td><a href="#">Supprimer</a></td>
			</tr>
			<?php }}?>
		</body>
	</table>
</body>
</html>