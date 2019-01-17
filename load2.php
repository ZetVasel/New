<?php
	include_once 'db.php';

	$bdNewCount = $_POST['bdNewCount'];

		$res2 = $pdo->prepare("SELECT  offers.name , SUM(requests.price*requests.count), SUM(requests.count)
							   FROM requests
							   LEFT JOIN offers
							   ON requests.offer_id=offers.id
							   GROUP BY offers.name LIMIT $bdNewCount;");
					$res2->execute();


					if ($res2->rowCount () > 0){
						while ($com2 = $res2->fetch(PDO::FETCH_ASSOC)){
							foreach ($com2 as $key2){
								echo $key2.'</br>';
							}
						}
					}
?>	