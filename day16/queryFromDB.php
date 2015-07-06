<?php 
$db=mysqli_connect("localhost","root","123456","dummy_database");
$result=mysqli_query($db,"select * from users");
while($ans=mysqli_fetch_assoc($result))
{
	echo '<p>'.$ans['name'].'</p>';
}