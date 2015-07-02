<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>register page</title>
	<style type="text/css">
	.error{
		background-color: #E11010;
		color:#fff;
		padding:10px;
	}
</style>
</head>

<body>
	<?php if(isset($_GET['msg'])) : ?>
		<div class="error">
			<?php echo $_GET['msg'] ?>	
		</div>
	<?php endif; ?>
	<form action="createUser.php" method="post">
		<div>
			<label for="username">username</label>
			<input type="text" required name="username" id="username">
		</div>
		<div>
			<label for="password">password</label>
			<input type="password" required name="password" id="password">
		</div>
		<div>
			<input type="submit" value="register">
		</div>
	</form>
</body>
</html>