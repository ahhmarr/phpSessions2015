<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>result form</title>
	<style type="text/css">
		label{
			display: inline-block;
			width:200px;
		}
		div{
			margin-top: 10px;
		}
		textarea,input,select{

			width:300px;
		}
		input[type="submit"]{
			margin-left:200px;
		}
	</style>
</head>
<body>
	<h1>Result Form</h1>
	<form action="result.php">
		<div>
			<label for="name">Student name</label>
			<input type="text" name="name" id="name">
		</div>
		<div>
			<label for="age">Age</label>
			<input type="number" name="age" id="age">
		</div>
		<div>
			<label for="address">Address</label>
			<textarea name="address" id="address" rows="8" cols="10"></textarea>
		</div>
		<div>
			<label for="course">Course</label>
			<select name="course" id="course">
				<option value="B.Tech">B.Tech</option>
				<option value="BCA">BCA</option>
				<option value="Bsc">Bsc</option>
				<option value="MCA">MCA</option>
				<option value="M.Tech">M.Tech</option>
			</select>
		</div>
		<div>
			<label for="total">Total Marks</label>
			<input type="number" name="total" id="total">
		</div>
		<div>
			<input type="submit" value="Generate Result">
		</div>
	</form>
</body>
</html>