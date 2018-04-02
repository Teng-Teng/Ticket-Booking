<?php 
require_once('./database.php');

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

// $arr = $db->calculateId($origin, $destination, $departDate, $returnDate, 
// 	$adult, $child, $flightClass);
// $id = $arr[0]['id'];


if($affected_rows == 0) {
	$str = 'Insert failed';
} else {
	$str = 'Insert successfully';
}

header("Access-Control-Allow-Origin: *");
header("Content-Types: application/json; charset=UTF-8");

$all_tickets = $db->getAllTickets();
$length = count($all_tickets);

$result = array(
	'message' => $str,
	'length' => $length,
);

echo json_encode($result);

 ?>