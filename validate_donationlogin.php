<?php
session_start();
//find user name
$conn= new mysqli("localhost","root","","mydb");
	if ($conn->connect_error) {
    die("Connection failed: <br>" . $conn->connect_error);
	}
	$user=$_POST["uname"];
	$val=$_POST['Donation'];
	
	$conn->query('INSERT INTO donasi VALUES(NULL,\''.'1'.'\',\''.$user.'\',\''.$val.'\',\''.date('20y-m-d').'\')');
	$result=$conn->query('SELECT * FROM page');
	$row=mysqli_fetch_assoc($result);
	$row['total']+=$val;
	$conn->query('UPDATE `page` SET `total`='.$row['total'].' WHERE id_page=1');
	
	header('location:berhasildonasilogin.php');
?>
<!DOCTYPE html>
