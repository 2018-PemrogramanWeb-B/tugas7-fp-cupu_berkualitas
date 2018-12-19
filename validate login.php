<?php
session_start();
//find user name
$conn= new mysqli("localhost","root","","mydb");
	if ($conn->connect_error) {
    die("Connection failed: <br>" . $conn->connect_error);
	}
	$user=$_POST["uname"];
	$result=$conn->query('SELECT password FROM user WHERE name="'.$user."\"");
	if (!$result)
	{
		header("location:login.php");
	}
	else{
		$row=$result->fetch_assoc();
		echo $row["password"];
		$pass=$_POST["pswd"];
		if(md5($pass)==($row["password"]))
		{
			echo"sukses";
			$session["user"]=$user;
			header("location:welcomelogin.php");
		}
		else{
			header("location:login.php");
		}
	}
	
//not found mark as false
//check pswd 

?>
<!DOCTYPE html>
