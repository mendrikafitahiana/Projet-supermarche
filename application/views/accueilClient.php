<!DOCTYPE html>
<html>
<head>
	<title>Client</title>
</head>
<body>
	<h1>Choix de caisse pour achat</h1>
	<form action="../ClientController/choixCaisse" method="post">
		<label for="caisse">Choisir votre caisse</label>
		<select name="caisse" id="caisse">
			<?php for($i=0; $i<count($caisse); $i++) {?>
				<option><?php echo $caisse[$i]['nom']; ?></option>
			<?php }?>
		</select>
		<input type="submit" name="" value="Valider">
	</form>
</body>
</html>