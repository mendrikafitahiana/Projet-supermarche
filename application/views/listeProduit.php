<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
</head>
<body>
	<h1><?php echo $c; ?></h1>
	<table border="1">
		<head>
			<tr>
				<th>Designation</th>
				<th>Prix(Ar)</th>
				<th>Image</th>
				<th>Achat</th>
			</tr>
		</head>
		<body>
			<?php for($i=0; $i<count($produits); $i++) {?>
			<?php for($ii=0; $ii<count($img); $ii++) {?>

			<tr>
				<form action="#" method="post">
					<td><?php echo $produits[$i]['designation']; ?></td>
					<td><?php echo $produits[$i]['prix']; ?></td>
					<td width="10%"><img src="../assets/images/<?php echo $produits[$i]['designation']; ?>.jpg" width="50%"></td>
					<td><input type="submit" name="" value="Acheter"></td>
				</form>
			</tr>
			<?php }}?>
		</body>
	</table>
</body>
</html>