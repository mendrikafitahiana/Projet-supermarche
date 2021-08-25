<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 
$designation = array();
$qte = array();
for ($i=0; $i < count($prod) ; $i++) { 
    $designation[$i] = $prod[$i]['designation'];
    $qte[$i] = $prod[$i]['qte'];
    
} ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 5%;
                
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
        #nav1{
	float: left;
	width: 30%;
	height: 100%;
        padding: 2%;
}
#nav2{
	float: right;
	width: 60%;
	height: 100%;
        padding: 2%;
}

#content{
	margin-left: 35%;
	margin-right: 100px;
	width: 1%;
	height: 1000px;
	margin-top: 10px;
	margin-bottom: 10px;
        background-color: beige;
}
#footer{
	height: 75px;
	padding: 20Px;
	border: 2px solid black;
}
       
	</style>
</head>
<body>

<div id="container">
	<h1>Statistique des donnees</h1>

	<div id="body">
            <form action="Statistique/statProduit" method="post">
              
             <select name="idProd"  style="width: 100px;margin: 10px;height: 50px;margin: 20px;border-radius: 5px">
                 <option value="">Produit</option>
            <?php for ($i=0; $i < count($produit) ; $i++) { ?>

			<option value="<?php echo $produit[$i]['id']; ?>"><?php echo $produit[$i]['designation']; ?></option>
			
			<?php } ?></select><button type="submit" style="width: 20%;height: 40px;background-color: #E0EEEE;border-radius: 5px">Tableau de bord</button>
           </form>
              <h1><small>Statistique de vente par Produit</small> </h1>
              <form action="Statistique/statCaisse" method="post">
             
              
            <select name="idCaisse"  style="width: 100px;margin: 10px;height: 50px;margin: 20px;border-radius: 5px">
                <option value="">Caisse</option>
            <?php for ($i=0; $i < count($caisse) ; $i++) { ?>

			<option value="<?php echo $caisse[$i]['id']; ?>"><?php echo $caisse[$i]['nom']; ?></option>
			
			<?php } ?></select><button type="submit" style="width: 20%;height: 40px;background-color: #E0EEEE;border-radius: 5px">Tableau de bord</button>
           </form>
              <h1><small>Statistique de vente par caisse</small> </h1>
             <h1>Du </h1><form action="Statistique/statDate" method="post">
            <div class="row">
                          
                            <select name="jour1"  style="width: 100px;margin: 10px;height: 50px;margin: 20px;border-radius: 5px">
                                <option value="">Jour</option>
				<?php 
					for($i =1;$i<=31;$i++) 
					{ ?>
				<option value="<?php echo $i; ?>"><?php  echo $i; ?></option><?php 
					} ?>
			</select>
                              
                              <select name="mois1"  style="width: 100px;margin: 10px;height: 50px;margin: 20px;border-radius: 5px">
                                  <option value="">Mois</option>
				<?php 
					for($i =1;$i<=12;$i++){ ?>
				<option value="<?php echo $i; ?>"><?php  echo $i; ?></option><?php 
					} ?>
			</select>
                            <select name="an1"  style="width: 100px;margin: 10px;height: 50px;margin: 20px;border-radius: 5px">
                                <option value="">Annee</option>
				<?php 
					for($i =2018;$i<=2021;$i++){ ?>
				<option value="<?php echo $i; ?>"><?php echo $i; ?></option><?php 
					} ?>
			</select></div>
                       <h1>au</h1>
                <div class="row">
                         
                            <select name="jour2"  style="width: 100px;margin: 10px;height: 50px;margin: 20px;border-radius: 5px">
                                <option value="">Jour</option>
				<?php 
					for($i =1;$i<=31;$i++) 
					{ ?>
				<option value="<?php echo $i; ?>"><?php  echo $i; ?></option><?php 
					} ?>
			</select>
                         
                              
                              <select name="mois2"  style="width: 100px;margin: 10px;height: 50px;margin: 20px;border-radius: 5px">
                                  <option value="">Mois</option>
				<?php 
					for($i =1;$i<=12;$i++){ ?>
				<option value="<?php echo $i; ?>"><?php  echo $i; ?></option><?php 
					} ?>
			</select>
                          
                          
                            <select name="an2"  style="width: 100px;margin: 10px;height: 50px;margin: 20px;border-radius: 5px">
                                <option value="">Annee</option>
				<?php 
					for($i =2018;$i<=2021;$i++){ ?>
				<option value="<?php echo $i; ?>"><?php echo $i; ?></option><?php 
					} ?>
			</select>
                          
                        </div>
                       <button type="submit" style="width: 20%;height: 40px;background-color: #E0EEEE;border-radius: 5px">Tableau de bord</button>
           </form>
	</div>
        <br><br><br><br>
        <h1>Statistique de vente globale</h1>
<div id="nav1">
                            <h1>Tableau</h1>
                            <table border="1" style="border-spacing: 0;width: 80%;text-align: center">
		<thead>
			<tr>
				<th>Designation</th>
				<th>Quantite vendue</th>
			</tr>
		</thead>
		<tbody>
            <?php for ($i=0; $i < count($prod) ; $i++) { ?>

			<tr>
					<td><?php echo $prod[$i]['designation']; ?></td>
					<td><?php echo $prod[$i]['qte']; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table></div>
            <div id="nav2">
                
                 <h1>Graphe</h1>
                 
                 <canvas id="myChart" width="80%" height="80%"></canvas>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"
		integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" 
		crossorigin="anonymous"></script>
		
		
		<script>
                        var designation = <?php echo json_encode($designation); ?>;
                        var qte = <?php echo json_encode($qte); ?>;

                        var ctx = document.getElementById('myChart');

                        var myChart = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: designation,
                                datasets: [{
                                    label: '# of Votes',
                                    data: qte,
                                    backgroundColor: 
                                        'rgba(255, 99, 132, 0.2)',

                                    borderColor: 
                                        'rgba(153, 102, 255, 1)',

                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                                        }]
                                }
                            }
                        });
</script>
            </div>
			<div id="content"></div>
	<p class="footer"> ''</p>
</div>

</body>
</html>