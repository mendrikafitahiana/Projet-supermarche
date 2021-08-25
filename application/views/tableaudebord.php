<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
        
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css" 
	integrity="sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==" 
	crossorigin="anonymous" />
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
		margin: 0 15px 0 15px;
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
                width: 100%;
                height: 100%;
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
        
        
#nav1{
	float: left;
	width: 30%;
	height: 100%;
}
#nav2{
	float: right;
	width: 60%;
	height: 100%;
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
	<h1>Tableau de bord</h1>
<?php if(ISSET($produit)){ ?>
	<div id="body">
            <?php 
$designation = array();
$qte = array();
for ($i=0; $i < count($produit) ; $i++) { 
    $designation[$i] = $produit[$i]['date'];
    $qte[$i] = $produit[$i]['qte'];
    
} ?>
			<div id="nav1">
                            <h1>Statistique de vente du   <?php echo $nomproduit[0]['designation']; ?> 
                            </h1>
                            <table border="1" style="border-spacing: 0;width: 80%;text-align: center">
		<thead>
			<tr>
				<th>Qantite vendue</th>
				<th>Date</th>
			</tr>
		</thead>
		<tbody>
            <?php for ($i=0; $i < count($produit) ; $i++) { ?>

			<tr>
					<td><?php echo $produit[$i]['qte']; ?></td>
					<td><?php echo $produit[$i]['date']; ?></td>
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

	<p class="footer">''</p>
</div>
<?php } ?>
        <?php if(isset($produitCaisse)){ ?>
	<div id="body">
            <?php 
$designation = array();
$qte = array();
for ($i=0; $i < count($produitCaisse) ; $i++) { 
    $designation[$i] = $produitCaisse[$i]['nom'];
    $qte[$i] = $produitCaisse[$i]['qte'];
    
} ?>
			<div id="nav1">
                            <h1>Statistique de vente du   caisse<?php echo $caisse; ?> 
                            </h1>
                            <table border="1" style="border-spacing: 0;width: 80%;text-align: center">
		<thead>
			<tr>
				<th>Designation</th>
				<th>Quantite vendue</th>
			</tr>
		</thead>
		<tbody>
            <?php for ($i=0; $i < count($produitCaisse) ; $i++) { ?>

			<tr>
                            <td><?php echo $produitCaisse[$i]['nom']; ?></td>
                            <td><?php echo $produitCaisse[$i]['qte']; ?></td>
					
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
            <a href="../Welcome/index">Retour</a>
			<div id="content"></div>

	<p class="footer">''</p>
</div>
<?php } ?>
        <?php if(ISSET($produitDate)){ ?>
	<div id="body">
            <?php 
$designation = array();
$qte = array();
for ($i=0; $i < count($produitDate) ; $i++) { 
    $designation[$i] = $produitDate[$i]['nom'];
    $qte[$i] = $produitDate[$i]['qte'];
    
} ?>
			<div id="nav1">
                            <h1>Statistique de vente du <?php echo $date1; ?> au  <?php echo $date2; ?>
                            </h1>
                            <table border="1" style="border-spacing: 0;width: 80%;text-align: center">
		<thead>
			<tr>
                            <th>Designation</th>
				<th>Qantite vendue</th>
                                <th>Date</th>
			</tr>
		</thead>
		<tbody>
            <?php for ($i=0; $i < count($produitDate) ; $i++) { ?>

			<tr>
					<td><?php echo $produitDate[$i]['nom']; ?></td>
					<td><?php echo $produitDate[$i]['qte']; ?></td>
                                        <td><?php echo $produitDate[$i]['date']; ?></td>
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

	<p class="footer">''</p>
</div>
<?php } ?>
</body>
</html>