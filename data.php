<?php include_once 'db.php';?>
<?php include_once 'load.php';?>
<?php include_once 'load2.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Show</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		
			$(document).ready(function(){
				var bdCount = 0;
				$("#b1").click(function() {
					bdCount = bdCount + 1;
					$("#bd").load("load.php",  {
						bdNewCount: bdCount
					});
				});
			});

				$(document).ready(function(){
				var bdCount = 0;
				$("#b2").click(function() {
					bdCount = bdCount + 1;
					$("#bd2").load("load2.php", {
						bdNewCount: bdCount
					});
				});
			});
	</script>

</head>
<body style="margin-top: 50px; text-align: center;">

			<table class="table table-hover table_quest" border="2">
			    <thead>
				    <tr>
				        <th>Задание 1 </th>
				        <th>Реализация</th>

				    </tr>
			    </thead>
			    <tbody>
			    		<tr>
					        <td>1) Номер заказа, имя товара, цена, количество, имя оператора
					            который за которым числится заказ ГДЕ количество товара >2 И id оператора 10 ИЛИ 12</td>
					        <td><button class="btn btn-success" id="b1">Первый запрос</button></td>

					    </tr>
					  

			    </tbody>
			</table>

			<div id="bd" class="alert alert-primary" role="alert" >
			
			</div>


		
			<table class="table table-hover table_quest" border="2">
			    <thead>
				    <tr>
				        <th>Задание 2 </th>
				        <th>Реализация</th>

				    </tr>
			    </thead>
			    <tbody>
			    		
					    <tr>
					        <td>2) Имя товара, количество товара, и сумма (price) по каждому товару (сгруппировать)</td>
					        <td><button class="btn btn-success" id="b2">Второй запрос</button></td>

					    </tr>

			    </tbody>
			</table>

			<div id="bd2" class="alert alert-success" role="alert">
					
			</div>
</body>
</html>         