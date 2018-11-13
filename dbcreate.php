//create db
<?php
$conn = new mysqli("localhost", "root","");
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully<br>";
	$conn->query("CREATE DATABASE mydb");
	echo "created database mydb<br>";
	$conn= new mysqli("localhost","root","","mydb");
	if ($conn->connect_error) {
    die("Connection failed: <br>" . $conn->connect_error);
	} 
	if ($conn->query('CREATE TABLE user (
		id_user INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		name VARCHAR(50) NOT NULL,
		password varchar(35) NOT NULL,
		email VARCHAR(30),
		reg_date date)')===TRUE) {
		echo "Table user created successfully<br>";
	} else {
		echo "Error creating table: <br>" . $conn->error;
	}
	if ($conn->query('CREATE TABLE donasi (
		id_donasi INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		id_page INT NOT NULL,
		donator VARCHAR(50),
		value INT NOT NULL,
		waktu_donasi date)')===TRUE) {
		echo "Table donasi created successfully<br>";
	} else {
		echo "Error creating table: <br>" . $conn->error;
	}
	if ($conn->query('CREATE TABLE page (
		id_page INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		title VARCHAR(50) NOT NULL,
		sum_value INT NOT NULL,
		description VARCHAR(200))
		 ')===TRUE) {
		echo "Table page created successfully<br>";
	} else {
		echo "Error creating table: <br>" . $conn->error;
	}
	?>