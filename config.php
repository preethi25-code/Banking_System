<?php

	$db_host='localhost';
	$db_user='id17009788_preethi';
	$db_pass='Licet@1234567';
	$db_name='id17009788_credit';

	try {
		$pdo= new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	}catch(PDOException $e){
		echo $e->getMessage();
	}

?>