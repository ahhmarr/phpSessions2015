<?php 
require_once 'connect.php';
$id=$_GET['id'];
extract($_POST);
$query=" update blogs set title='$title',blog='$content' 
		where id='$id' ";
$result=mysqli_query($db,$query);
header("location:listBlogs.php");
