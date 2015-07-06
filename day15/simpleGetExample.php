<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>simple get</title>
</head>
<body>
	<?php 

      if(isset($_GET['first_name']))
      {
      		echo $_GET['first_name'].' '.$_GET['last_name'];
      }
      else
      { ?>

    	<form action="#" method="get">
		<div>
			<label for="first_name">first name</label>
			<input type="text" required name="first_name" id="first_name">
		</div
		<div>
			<label for="last_name">last name</label>
			<input type="text" name="last_name" id="last_name">
		</div>	
		<div>
			<input type="submit" value="submit">
		</div>
	</form>
    <?php } ?>
	
</body>
</html>