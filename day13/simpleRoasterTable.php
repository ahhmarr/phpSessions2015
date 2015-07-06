<?php 
$counter=5;
/*for($x=1;$x<=10;$x++)
{
	/*echo "<table>";
	for($x=1;$x<=10;$x++)
	{
		$prod=$counter*$x;
		echo "<tr> ";
		echo "<td>$counter x $x</td>";
		echo "<td> = $prod</td>";
		echo "</tr>";
	}
	echo "</table>";
	$prod=$counter*$x;
	echo "<div>$counter x $x = $prod</div>";
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>roaster example</title>
<style type="text/css">
	td{
		border: 2px solid #000;
		padding:15px;
	}
</style>
</head>
<body>
	<table>
	<?php	
		for($x=1;$x<=10;$x++)
		{
			$prod=$counter*$x;
			echo "<tr> ";
			echo "<td>$counter x $x</td>";
			echo "<td> = $prod</td>";
			echo "</tr>";
		}
	 ?>
	</table>
</body>
</html>