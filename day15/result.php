<?php 
$name=$_GET['name'];
$age=$_GET['age'];
$address=$_GET['address'];
$course=$_GET['course'];
$total=$_GET['total'];
$result="";
$colorClass="pass";
if($total>=85){
	$result="A";
}
else if($total>=75){
	$result="B";
}
else if($total>=60){
	$result="C";
}
else if($total>=50){
	$result="D";
}
else if ($total>=40) {
	$result="E";
}
else {
	$result="F";
	$colorClass="fail";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>result</title>
	<style type="text/css">
		span{
			display: inline-block;
			width:200px;
		}
		.pass{
			color:#01C11E;
		}
		.fail{
			color: #CF0000;
		}
	</style>
</head>
<body>
	<div>
		<span>Name</span>
		<span><?php echo $name ?></span>
	</div>
	<div>
		<span>age</span>
		<span><?php echo $age ?></span>
	</div>
	<div>
		<span>address</span>
		<span><?php echo $address ?></span>
	</div>
	<div>
		<span>course</span>
		<span><?php echo $course ?></span>
	</div>
	<div>
		<span>total</span>
		<span><?php echo $total ?></span>
	</div>
	<div>
		<span>result</span>
		<span class="<?php echo $colorClass ?>">
			<?php echo $result ?>
		</span>
	</div>
</body>
</html>