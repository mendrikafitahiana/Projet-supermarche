<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Accueil</title>
        <style>
            a {
                text-decoration: none;
            }
                    #page{
                            width: 100%;
                    }


                    #nav1{
                            float: left;
                            width: 15%;
                            height: 50%;

                            color: black;
                    }
                    #nav2{
                            float: right;
                            width: 20%;
                            height: 500px;
                            border: 2px solid #E0EEEE;
                            padding: 5%;
                            border-radius: 10px;
                    }

                    #content{
                            margin-left: 17.5%;
                            width: 40%;
                            border: 2px solid #E0EEEE;
                            /*height: 640px;*/
                            padding: 5%;
                            margin-top: 10px;
                            border-radius: 10px;
                            margin-bottom: 10px;
                    }
                    .ab {
                            margin: 5%;
                            padding: 6%;
                            border-radius: 10px;
                            background-color: #E0EEEE;
                    }

                    table, th, td {
                            border: 1px solid #F2F2F2;
                    }
                    tr:nth-child(even) {
                            background: #E0EEEE;
                    }

                    tr:nth-child(odd) {
                            background: #FFF;
                    } 

                    #recherche {
                             
                            margin: 10%;
                    }
        </style>
</head>
<body>
    <div id="page">
        <div id="nav1"><nav class="nav d-flex justify-content-between">
      <div class="ab"><a class="p-2 text-muted" href="#">All</a></div>
     <div class="ab"> <a class="p-2 text-muted" href="#">cate 1.</a></div>
     <div class="ab"> <a class="p-2 text-muted" href="#">fournisseur</a></div>
      <div class="ab"><a class="p-2 text-muted" href="#">cate 3</a></div>
    
   </div><div id="nav2"> 
	<p>Tafiditra oh!!!</p>

		<form action="../CrudController/ajout">
			<input type="submit" name="" value="Ajout produit">
		</form>
</div><div id="content">
	<div class="col-4 form-group" id="recherche">
			    <label for="exampleInputEmail1">Produit</label>
			    <p><input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="keyword" style="border: 1px solid #F2F2F2"></p>
			    <small id="emailHelp" class="form-text text-muted">Recherche dans la liste.</small>
				
</div>
	<table border="1" style="border-spacing: 0;width: 80%;height: 100%">
		<thead>
			<tr>
				<th>Designation</th>
				<th>Prix(Ar)</th>
				
				<th colspan="2">Modifications</th>
			</tr>
		</thead>
		<tbody id="myTable">
            <?php for ($i=0; $i < count($listeProduit) ; $i++) { ?>

			<tr>
					<td scope="row"><?php echo $listeProduit[$i]['designation']; ?></td>
					<td><?php echo $listeProduit[$i]['prix']; ?></td>
					
                    <td><a href="../CrudController/modifier?id=<?php echo $listeProduit[$i]['id']; ?>"><span aria-hidden="true">...</span></a></td>
					<td><a href="#"><span aria-hidden="true">&times;</span></a></td>
			</tr>
			<?php }?>
		</tbody>
	</table></div>
        </div>
        <script>
        	$(document).ready(function(){
  $("#exampleInputEmail1").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
        </script>
</body>
</html>