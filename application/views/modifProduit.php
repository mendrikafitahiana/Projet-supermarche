<!DOCTYPE html>
<html>
<head>
	<title>Modification</title>
</head>
<body>
	<h1>Modification produit</h1>

	<form action="../CrudController/modifierProduit" method="post">
		<?php for ($i=0; $i < count($modif) ; $i++) {?>
		<label for="designation">Designation</label>
		<input type="text" name="designation" id="designation" value="<?php echo $modif[$i]['designation']; ?>">
		<label for="prix">Prix</label>
		<input type="text" name="prix" id="prix" value="<?php echo $modif[$i]['prix']; ?>">
		<?php }?>
		<label for="categorie">Categorie</label>
		<select name="categorie" id="categorie">
			<?php for ($i=0; $i < count($categ) ; $i++) {?>
			<option><?php echo $categ[$i]['nom']; ?></option>
			<?php }?>
		</select>

		<input type="submit" name="" value="Modifier">
	</form>
</body>
</html>