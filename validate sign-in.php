<?php
session_start();
//find user name
$conn= new mysqli("localhost","root","","mydb");
	if ($conn->connect_error) {
    die("Connection failed: <br>" . $conn->connect_error);
	}
	$user=$_POST["uname"];
	$pass=md5($_POST['pswd']);
	
	$result=$conn->query('SELECT * FROM user WHERE name="'.$user."\"");
	$row=mysqli_fetch_assoc($result);
	var_dump ($row);
	if ($row['name']==NULL)
	{
		
		$conn->query('INSERT INTO user VALUES(NULL,\''.$user.'\',\''.$pass.'\',\''.$_POST['email'].'\',\''.date('20y-m-d').'\')');
		header('location:home.blade.php');
		echo 'a';
	}
	else{
		header("location:daftar.php");
		echo 'b';
	}
	
?>
<!DOCTYPE html>
