<?php
session_start();
//find user name
$conn= new mysqli("localhost","root","","mydb");
	if ($conn->connect_error) {
    die("Connection failed: <br>" . $conn->connect_error);
	}
	$user=$_POST["uname"];
	$val=$_POST['Donation'];
	$id=$_POST['id_page'];
	$conn->query('INSERT INTO page VALUES(NULL,\''.$id.'\',\''.$user.'\',\''.$val.'\',\''.date('20y-m-d').'\')');
	header('location:berhasildonasi.php');
?>
<!DOCTYPE html>
