<?php
	include_once 'db.php';

	$bdNewCount = $_POST['bdNewCount'];

		$res = $pdo->prepare("SELECT requests.id, offers.name,requests.price,requests.count,operators.fio
							  FROM requests
							  LEFT JOIN offers
							  ON requests.offer_id=offers.id
							  LEFT JOIN operators
							  ON requests.operator_id=operators.id
							  WHERE requests.count>2 AND (requests.operator_id=10 OR requests.operator_id=12) LIMIT $bdNewCount;");
					$res->execute();


					if ($res->rowCount () > 0){
						while ($com = $res->fetch(PDO::FETCH_ASSOC)){
							foreach ($com as $key){							
								echo $key.'<br>';	
							}
						}
					}	
?>