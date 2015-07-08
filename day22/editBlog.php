<?php 
require_once 'connect.php';
$id=$_GET['id'];
$query="select * from blogs where id='$id'";
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
	<form action="updateBlog.php?id=<?php echo $ans['id'] ?>" method="post">
		<div>
			<label for="title">Title</label>
			<input type="text" name="title" id="title" value="<?php echo $ans['title'] ?>">
		</div>
		<div>
			<label for="content">Content</label>
			<textarea name="content" id="content" cols="30" rows="10">
				<?php echo $ans['blog'] ?>
			</textarea>
		</div>
		<div>
			<input type="submit" value="Update">
		</div>
	</form>
</body>
</html>