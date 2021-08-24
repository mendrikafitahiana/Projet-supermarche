<!DOCTYPE html>
<html>
<head>
	<title>ajout</title>
</head>
<body>
	<p>Ajouter un produit</p>
	<form action="#" method="post">
		<label for="nom">Designation</label>
		<input type="text" name="designation" id="nom">
		<label for="prix">Prix</label>
		<input type="text" name="prix" id="prix">
		<label for="categorie">Categorie</label>
		<select name="categorie" id="categorie">
			<?php for ($i=0; $i < count($categ) ; $i++) {?>
			<option><?php echo $categ[$i]['nom']; ?></option>
		<?php }?>
		</select>

		<input type="submit" name="" value="Ajouter">
	</form>
</body>
</html>