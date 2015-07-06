<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>file upload</title>
</head>
<body>
	<form action="upload.php" method="post" enctype="multipart/form-data">
	<label for="heading">Heading</label>
	<input type="text" name="heading" id="heading" >
	<label for="fileUpload">Choose A file</label>
		<input type="file" name="file" id="fileUpload">
		<input type="submit" value="upload">
	</form>
</body>
</html>