<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>user details</title>
</head>
<body>
	<?php 
       $user=[
       	"first_name" => "John",
       	"last_name"	 => "Snow",
       	"email"		 => "a@example.com",
       	"phone_no"	 => "+91-90000091",
       	"address"	 => "Some long address where he 
       						lived at the wall"
       ];
       foreach($user as $key=>$value)
       {
       	 echo "<div>";
       	 echo '<label>'.$key.'</label>';
       	 if($key=="address")
       	 {
       	 	echo "<textarea rows='10' cols='50'>$value</textarea>";
       	 }
       	 else
       	 {
       	 	echo "<input type='text' value='$value' >";
       	 }
       	 echo "</div>";
       }

	 ?>
</body>
</html>