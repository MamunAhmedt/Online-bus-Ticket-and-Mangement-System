<?php 
session_start();
		 if($_SESSION['signal']!="admin"){
			 header("location:login.html");
			 
		 }


?>
<script type="text/javascript">
function addremoveroute(){
window.location="addremovebus.php";

}
function addremovebus(){
window.location="addremoveroute.php";

}
function changebusinfo(){
window.location="changebusinfo.php";

}

function search(){
window.location="adminsearch.php";
}

function showHint() {
	str=document.getElementById('b').value;
	//document.getElementById("spinner").style.visibility= "visible";
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			resp=JSON.parse(xmlhttp.responseText);
			msg="";
			msg1="";
			msg2="";
			msg3="";
			msg4="";
			msg5="";
			msg6="";
			for(i=0;i<resp.length;i++){
				msg=resp[i].source;
				msg1=resp[i].destination;
				msg2=resp[i].driver;
				msg3=resp[i].supervizer;
				msg4=resp[i].phonenumber;
				msg5=resp[i].jday;
				msg6=resp[i].price;
				

			}
			document.getElementById('c').value = msg;
			document.getElementById('d').value = msg1;
			document.getElementById('e').value = msg2;
			document.getElementById('f').value = msg3;
			document.getElementById('g').value = msg4;
			document.getElementById('h').value = msg5;
			document.getElementById('i').value = msg6;
			
			//document.getElementById("spinner").style.visibility= "hidden";
		}
	};
	var url="jsondb.php?signal=readCGPA&busid="+str;
	//alert(url);
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}


function logout(){
	
	window.location="logout.php";
	
}
function cancel(){
	window.loation="AdminPanel.php"
	
}


</script>
<body style= "background-color:#3399ff">
<h1 style='color:red;text-align:center;font-size:50px;font-family:comic sans ms'>IBUS Bangladesh Limited</h1>
<br>
</body>


<form ><input type="button" value="logout" style=" margin:10px 1200px;cursor:pointer " onclick="logout()" >
<input type="button" value="Add/Remove Route" style=" margin:20px 70px;width:200px;height:50px;cursor:pointer " onclick="addremovebus()" >
<input type="button" value="Change Bus Info" style="margin:0px 70px;width:200px;height:50px;cursor:pointer" onclick="changebusinfo()">
<input type="button" value="Search Bus" style="margin:0px 70px;width:200px;height:50px;cursor:pointer" onclick="search()">
<input type="button" value="Add/Remove Bus" style="margin:0px 50px;width:200px;height:50px;cursor:pointer" onclick="addremoveroute()">
</form>
<form action="update.php" method="post"> <pre>

	   <span style="font-size:20px;color:green;margin:0px 270px">BusId: </span>    <input type="text" id="b" name="busid" value="" style="background-color:gold;margin:0px -250px" onkeyup="showHint()">
	   
       <span style="font-size:20px;color:green;margin:0px 252px">New Source: </span>     <input type="text" id="c" name="source" value="" style="background-color:gold;margin:0px -250px" >
	   
	   <span style="font-size:20px;color:green;margin:0px 180px">new Destination: </span>     <input type="text" id="d" value="" name="destination" style="background-color:gold;margin:0px -190px">
	   
	   <span style="font-size:20px;color:green;margin:0px 207px">new Driver: </span>     <input type="text" name="driver" id="e" style="background-color:gold;margin:0px -190px">
	   
	   <span style="font-size:20px;color:green;margin:0px 184px">new superbizer: </span>     <input type="text" name="supervizer" id="f" style="background-color:gold;margin:0px -190px">
	   
	   <span style="font-size:20px;color:green;margin:0px 205px">new number: </span>     <input type="text" name="phone" id="g" style="background-color:gold;margin:0px -190px">
	   
	    <span style="font-size:20px;color:green;margin:0px 220px">    jday: </span>     <input type="date" name="jday" id="h" style="background-color:gold;margin:0px -205px">
		
		<span style="font-size:20px;color:green;margin:0px 195px">    price: </span>     <input type="text" name="price" id="i" style="background-color:gold;margin:0px -195px">
			  <input type="submit" value="Update" style="height:30px; width:90px;cursor:pointer;background-color:green;;margin:10px 270px" onclick="update()">  <input type="button" value="cancel" style="height:30px; width:90px;cursor:pointer;background-color:red;margin:10px -250px" onclick="cancel()">
	   
</pre>
</form>



