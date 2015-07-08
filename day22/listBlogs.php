<?php 
require_once 'connect.php';
$query="select * from blogs ";
$result=mysqli_query($db,$query);
$x=0;
?>
<style type="text/css">
	td,th{
		border:1px solid #ccc;
		padding:5px;
		text-align: center;
	}
</style>
<script type="text/javascript">
	function validate(e)
	{
		var flag=true;
		var ans=confirm("Are You Sure and not Drunk !!!!");
		console.log(e);
		if(!ans){
			flag=false;
		}
		return flag;
	}
</script>
<a href="create.php">Create A new Blog entry</a>
<table>
	<tr>
		<th>#</th>
		<th>title</th>
		<th>blog</th>
		<th>created at</th>
		<th>action</th>
	</tr>
	<?php while($ans=mysqli_fetch_assoc($result)): ?>
		<tr>
			<td><?php echo ++$x ?></td>
			<td><?php echo $ans['title'] ?></td>
			<td>
				<a href="viewBlog.php?id=<?php echo $ans['id'] ?>">
					<?php echo $ans['blog'] ?>
				</a>
			</td>
			<td><?php echo $ans['created_at'] ?></td>
			<td>
				<a href="editBlog.php?id=<?php echo $ans['id'] ?>">Edit</a>
				<a onclick="return validate()" href="deleteBlog.php?id=<?php echo $ans['id'] ?>">Delete</a>
			</td>
		</tr>
	<?php endwhile; ?>
</table>