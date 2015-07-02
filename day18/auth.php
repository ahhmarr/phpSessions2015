<?php 
session_start();
include_once 'connect.php';

checkUserExists();
function checkUserExists()
{
	global $db;
	$username=$_POST['username'];
	$password=$_POST['password'];
	$password=md5($password);
	$query="select * from users where username='$username' 
					and password='$password'";
	// echo $query;
	$result=mysqli_query($db,$query);
	@$ans=mysqli_fetch_assoc($result);
	if($ans)
	{
		$_SESSION['username']=$ans['username'];
		$_SESSION['user_type']=$ans['user_type'];
		header('location:dashboard.php');

	}
	else
	{
		header('location:login.php?msg=invalid credentials');
		
	}

}