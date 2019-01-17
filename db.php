<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'New';

	try{
			$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                        
	}
	catch (PDOException $e){
		echo "Connection Failed" . '<br>' . $e->getMessage();
	}

