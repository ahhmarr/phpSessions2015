<?php 
 require_once 'connect.php';
 $query="select * from tweet where id='1' ";
 // echo S$query;
 $result=mysqli_query($db,$query);
 $ans=mysqli_fetch_assoc($result);




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ajax example</title>
	<style type="text/css">
		body{
			/* background-color: #000;
			color:#fff; */
		}
		textarea{
			height:200px;
			width:500px;
		}
	</style>
</head>
<body>
	<textarea id="tweet" onkeydown="performAJX()"><?php echo $ans['text'] ?></textarea>
	<script type="text/javascript">
	var performAJX=function()
	{
		var txt=document.querySelector("#tweet");
		var tweet=txt.value;		
		var http=new XMLHttpRequest();
		http.open("GET","saveTweet.php?tweet="+tweet,true);
		// http.open("GET","lorem.txt",true);
		http.onreadystatechange=function(x)
		{
			// var d=x.srcElement;
			if(http.readyState===4 && http.status===200){
				var response=http.responseText;
				console.log(response);
			}
			
		};
		http.send();
	};
	</script>
</body>
</html>
<!-- a dummy example for making async Http Request and DOM manipulation  -->

