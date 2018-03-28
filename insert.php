<?php 
require_once('database.php');

$origin = $_POST['insert_from'];
$destination = $_POST['insert_to'];
$departDate = $_POST['insert_departDate'];
$returnDate = $_POST['insert_returnDate'];
$adult = $_POST['insert_adult'];
$child = $_POST['insert_child'];
$flightClass = $_POST['insert_flightClass'];

$db = new Database();

$affected_rows = $db->insertTicket($origin, $destination, $departDate, $returnDate, 
	$adult, $child, $flightClass);


if($affected_rows == 0) {
	$str = 'Insert failed';
} else {
	$str = 'Insert successfully';
}

header("Access-Control-Allow-Origin: *");
header("Content-Types: application/json; charset=UTF-8");

$result = array(
	'message' => $str
);

echo json_encode($result);

 ?>