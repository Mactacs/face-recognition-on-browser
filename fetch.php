<?php 
	$inp = file_get_contents('neural.json');
	$tempArray = json_decode($inp);
	$jsonData = json_encode($tempArray);
	echo $jsonData;
 ?>
