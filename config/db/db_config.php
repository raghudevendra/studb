<?php 
echo "Hi"
$host = '127.0.0.1';
$user = 'root';
$pass = "";
$db = 'studb';




try{
	$con = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "create database studb1";
	$con->exec($sql);
	echo "Hello";
	// sql to create table
	$sql = "CREATE TABLE MyGuests (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	name VARCHAR(30) NOT NULL,
	email VARCHAR(50),
	reg_date TIMESTAMP
	)";

		if ($conn->query($sql) === TRUE) {
			echo "Table MyGuests created successfully";
		} else {
			echo "Error creating table: " . $conn->error;
		}
	
}
catch(PDOException $e)
{
	echo "Failed to connect mysql via PDO";
}
$conn = new mysqli($host, $user, $pass);




?> 