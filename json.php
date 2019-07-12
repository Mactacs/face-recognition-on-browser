<?php 
	/*$data[] = $_POST['myData'];
	if( $data != null)
	{
		$inp = file_get_contents('neural.json');
		$tempArray = json_decode($inp);
		array_push($tempArray, $data);
		$jsonData = json_encode($tempArray);
		//echo $jsonData;
		$an = $jsonData;
		file_put_contents('neural.json', $an);
	}*/

	$data = $_POST['myData'];
	$json = file_get_contents('neural.json');

	if(strlen($json) > 2){
		$string = ',' . $data; 
	}
	else{
		$string = $data;
	}
	$position = strlen($json) - 1; 
	$out = substr_replace( $json, $string, $position, 0 ); 
	file_put_contents('neural.json', $out);
?> 
