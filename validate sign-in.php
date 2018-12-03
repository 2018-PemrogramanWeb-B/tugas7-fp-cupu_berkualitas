<?php
session_start();
//find user name
$conn= new mysqli("localhost","root","","mydb");
	if ($conn->connect_error) {
    die("Connection failed: <br>" . $conn->connect_error);
	}
	$user=$_POST["uname"];
	$pass=md5($_POST['password']);
	echo('INSERT INTO user VALUES(NULL,\''.$user.'\',\''.$pass.'\',\''.$_POST['email'].'\',\''.date('20y-m-d').'\')');
	$result=$conn->query('SELECT * FROM user WHERE name="'.$user."\"");
	
	if ($result)
	{
		$conn->query('INSERT INTO user VALUES(NULL,\''.$user.'\',\''.$pass.'\',\''.$_POST['email'].'\',\''.date('20y-m-d').'\')');
		header('location:home.blade.php');
	}
	else{
		header("location:daftar.php");
	}
	
?>
<!DOCTYPE html>
