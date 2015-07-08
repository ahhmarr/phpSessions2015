<?php 
require_once 'connect.php';
extract($_POST);
$query="insert into blogs (title,blog,created_at) values 
			('$title','$content',NOW())";
$result=mysqli_query($db,$query);
header("location:listBlogs.php");