<?php 
require_once 'connect.php';
$result=mysqli_query($db,"select * from users");
while($ans=mysqli_fetch_assoc($result))
{
	echo $ans['id'].' '.$ans['name'];
}
echo "db.php file called <br>";