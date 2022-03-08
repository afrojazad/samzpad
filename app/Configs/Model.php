<?php
namespace App\Configs;

class Model{
    public function db()
	{
		require_once __DIR__.'/../../config/Database.php';		

		try {
			// Create connection			
			$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
			// Check connection
			if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
			}
			return $conn;

		} catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
		}
	}
	public function all($table=False, $select=False)
	{
		if($select==False){
			$select = '*';
		}
		$sql = "SELECT $select FROM $table";
		$result = $this->db()->query($sql);
		$rows = array();
		while($row = $result->fetch_assoc())
			$rows[] = $row;
		return $rows;
	}
}