<html>
<head>
<script>
function showHint() {
	str=document.getElementById('mytext').value;
	document.getElementById("spinner").style.visibility= "visible";
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			resp=JSON.parse(xmlhttp.responseText);
			msg="";
			for(i=0;i<resp.length;i++){
				msg=resp[i].name+"<br>";

			}
			document.getElementById("txtHint").innerHTML = msg;
			document.getElementById("spinner").style.visibility= "hidden";
		}
	};
	var url="jsondb.php?signal=readCGPA&cgpa="+str;
	//alert(url);
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}
</script>
</head>
<body>

<p><b>Start typing a CGPA to find someone</b></p>
Search using CGPA : <input type="text" id="mytext" onkeyup="showHint()"> <img id="spinner" src="loading.gif" width="20px" height="20px" style="visibility:hidden">
<p>Data from DB using JSON :</p><span id="txtHint"></span>
<br/>
<input type="button" value="show" onclick="showHint()">
</body>
</html>