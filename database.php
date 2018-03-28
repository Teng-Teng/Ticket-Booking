<?php 

class Database {
	private $connection;

	private function getInstanceConnection() {
		if (!$this->connection) {
			$this->connection = new PDO('mysql:host=localhost;dbname=ticket_booking;charset=utf8mb4', 'root', 'root');
		} 
		return $this->connection;
	}


	public function getAllTickets() {
		$this->getInstanceConnection();

		$sql = "SELECT * FROM tickets";

		//create a PDO statement object from connection object
		// $pdo object run query function and this function return a statement object
		$stmt = $this->connection->query($sql);

		//execute the statement and get all the results
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}


	public function insertTicket($origin, $destination, $departDate, $returnDate, 
		$adult, $child, $flightClass) {
		$this->getInstanceConnection();
		$sql = "INSERT INTO tickets(Origin, Destination, DepartDate, ReturnDate, Adult, Child, Class) VALUES (:Origin, :Destination, :Depart, :Return, :Adult, :Child, :Class)";

		$stmt = $this->connection->prepare($sql);
		$stmt->execute(
			array(
				':Origin' => $origin,
				':Destination' => $destination,
				':Depart' => $departDate,
				':Return' => $returnDate,
				':Adult' => $adult,
				':Child' => $child,
				':Class' => $flightClass
			)
		);

		$affected_rows = $stmt->rowCount();	

		return $affected_rows;
	}


	public function deleteTicket($id) {
		
		$this->getInstanceConnection();

		$sql = "DELETE FROM tickets WHERE id = :id";

		$stmt = $this->connection->prepare($sql);
		$stmt->execute(
			array(
				':id' => $id
			)
		);

		$affected_rows = $stmt->rowCount();	

		return $affected_rows;
	}

}



 ?>