<?php 
require_once 'connect.php';
$id=$_GET['id'];
$query=" delete from blogs where id='$id '";
$result=mysqli_query($db,$query);
header("location:listBlogs.php");
