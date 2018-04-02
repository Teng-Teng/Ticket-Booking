<?php 
require_once('./database.php');

$delete_id = $_POST['delete_id'];

$db = new Database();

$affected_rows = $db->deleteTicket($delete_id);

if($affected_rows == 0) {
	$str = 'Delete failed';
} else {
	$str = 'Delete successfully';
}

header("Access-Control-Allow-Origin: *");
header("Content-Types: application/json; charset=UTF-8");

$result = array(
	'message' => $str
);

echo json_encode($result);

 ?>