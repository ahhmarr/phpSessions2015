<?php 
require_once 'connect.php';
$tweet=$_GET['tweet'];
$query="update tweet set text='$tweet' where id='1' ";
echo $query;
$result=mysqli_query($db,$query);