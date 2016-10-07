<?php


createDatabase();

function createDatabase() {
	try {
		$connection = new PDO("mysql:host=localhost", "root", "root");
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$connection->exec("CREATE DATABASE myDBPDO");
		echo "Database created successfully<br>";
	} catch ( PDOException $e ) {
		echo $e->getMessage ();
	}
	
	$connection = null;
}

// $servername = "localhost";
// $username = "root";
// $password = "root";
// $conn = null;

// createDatabase();

// function createDatabase() {
// try {
// initConnection();
// $sql = "CREATE DATABASE myDBPDO";
// global $conn;
// $conn->exec($sql);
// echo "Database created successfully<br>";
// closeConnection();

// } catch(PDOException $e) {
// echo $sql . "<br>" . $e->getMessage();
// closeConnection();
// }
// }

// function connectToDatabase() {
// try {
// initConnection();
// echo "Connected successfully";

// } catch(PDOException $e) {
// echo "Connection failed: " . $e->getMessage();
// }
// }

// function initConnection() {
// global $conn, $servername, $username, $password;
// $conn = null;
// $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }

// function closeConnection() {
// global $conn;
// $conn = null;
// }

?>