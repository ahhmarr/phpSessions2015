<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ajax example</title>
	<style type="text/css">
		body{
			background-color: #000;
			color:#fff;
		}
	</style>
</head>
<body>
	<div id="content"></div>
	<input type="button" value="load" onclick="performAJX()">
	<script type="text/javascript">
	var performAJX=function()
	{
		// alert('called function');
		var http=new XMLHttpRequest();
		http.open("GET","process.php?starting=99&ending=1111",true);
		// http.open("GET","lorem.txt",true);
		http.onreadystatechange=function(x)
		{
			// var d=x.srcElement;
			var con=document.querySelector("#content");
			if(http.readyState===4 && http.status===200){
				var response=http.responseText;
				con.innerHTML=response;
			}
			else
			{
              con.innerHTML='<img height="200" src="loading.gif" >';
			}
		};
		http.send();
	};
	</script>
</body>
</html>
<!-- a dummy example for making async Http Request and DOM manipulation  -->

