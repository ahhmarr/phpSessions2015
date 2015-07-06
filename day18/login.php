<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login page</title>
</head>
<style type="text/css">
	.error{
		background-color: #E11010;
		color:#fff;
		padding:10px;
	}
</style>
<body>
	<div class="error">
		<?php 
			if(isset($_GET['msg']))
			{
				echo strtoupper($_GET['msg']);
			}
		 ?>
	</div>
	<form action="auth.php" method="post">
		<div>
			<label for="username">username</label>
			<input type="text" required name="username" id="username">
		</div>
		<div>
			<label for="password">password</label>
			<input type="password" required name="password" id="password">
		</div>
		<div>
			<input type="submit" value="login">
		</div>
	</form>
</body>
</html>