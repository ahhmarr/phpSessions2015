<?php 

require_once 'connect.php';
$id=$_GET['id'];
$query="select * from blogs where id='$id' ";
$result=mysqli_query($db,$query);
$ans=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>create a blog</title>
	<style type="text/css">
		label{
			display: inline-block;
			width:300px;
		}
	</style>
</head>
<body>
		<div><?php echo $ans['title'] ?></div>
		<div><?php echo $ans['blog'] ?></div>
		<div><?php echo $ans['created_at'] ?></div>
</body>
</html>