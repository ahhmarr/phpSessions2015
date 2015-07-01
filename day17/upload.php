<?php 
require_once 'connect.php';
$tmp_name=$_FILES['file']['tmp_name'];
$file_name=uniqid().$_FILES['file']['name'];
$type=$_FILES['file']['type'];
$sizeInMB=$_FILES['file']['size']/(1024*1024);
if($sizeInMB>1){
	echo "cant exceed more than 1MB";
	exit;
}
if($type!="image/png" && $type!="image/jpeg" && $type!="image/gif"
	&& $type!="image/bmp")
{
	echo "sorry upsupported media type";
	exit;
}
$destination="upload/".$file_name;
$heading=$_POST['heading'];
move_uploaded_file($tmp_name, $destination);
$query="insert into gallery (heading,image_url)
	values ('$heading','$destination')";
echo $query;
$result=mysqli_query($db,$query);