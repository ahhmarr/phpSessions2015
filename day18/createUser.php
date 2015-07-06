<?php 
require_once 'connect.php';
createUser();
function createUser()
{
	global $db;
	$username=$_POST['username'];
	$password=$_POST['password'];
	$password=md5($password);
	$query="insert into users (username,password) values 
		('$username','$password') ";
	$result=mysqli_query($db,$query);
	if($result)
	{
		header("location:login.php?msg=user created");
	}
	else
	{
		header("location:register.php?msg=some error");
	}
}