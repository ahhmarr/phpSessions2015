<?php 
require_once 'connect.php';
$result=mysqli_query($db,"select * from gallery");
while($ans=mysqli_fetch_assoc($result)): ?>
	<span><?php echo $ans['heading'] ?></span>
	<img src="<?php echo $ans['image_url'] ?>" height="200">
<?php endwhile; ?>
<style type="text/css">
	body{
		background-color: #393939;
	}
	img{
		border:10px solid #fff;
	}
	span{
		color:#fff;
	}
</style>