<?php
    $append = $_POST["append"];

    $inp = file_get_contents('contacts.json');
	$tempArray = json_decode($inp);
	$append = json_decode($append);
	array_push($tempArray, $append);
	$jsonData = json_encode($tempArray);
	file_put_contents('contacts.json', $jsonData);
    echo "Contact appended";
?>