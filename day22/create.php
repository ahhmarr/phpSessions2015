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
	<form action="saveBlog.php" method="post">
		<div>
			<label for="title">Title</label>
			<input type="text" name="title" id="title">
		</div>
		<div>
			<label for="content">Content</label>
			<textarea name="content" id="content" cols="30" rows="10"></textarea>
		</div>
		<div>
			<input type="submit" value="Publish">
		</div>
	</form>
</body>
</html>