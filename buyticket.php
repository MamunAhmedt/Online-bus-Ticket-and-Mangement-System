<?php 
session_start();
		 if($_SESSION['signal']!="user"){
			 header("location:login.html");
			 
		 }
?>
<script type="text/javascript">

function buyticket(){
	
	window.location="buyticket.php";
	
}
function search(){
	
	window.location="usersearch.php";
	
}

function back(){
	window.location="UserPanel.php"
}
function print(){
	
	window.location="printticket.php";
	
}
function buy(){
	alert("thank you for purchasing ")
	
}
function logout(){
	
	window.location="login.html";
	
}
function logout(){
	
	window.location="logout.php";
	
	
}

</script>


<body style="background-color:BLACK">
<div style="font-size:20px;color:red;margin:20px 500px">ABC Bus Service</div>
<br>
</body>

<form>
<form ><input type="button" value="logout" style=" margin:10px 1200px;cursor:pointer " onclick="logout()" >
<input type="button" value="Search Bus" style=" margin:0px 50px;width:200px;height:50px;cursor:pointer" onclick="search()">
<input type="button" value="buy Tickets" style="margin:0px 50px;width:200px;height:50px;cursor:pointer" onclick="buyticket()">
<input type="button" value="print ticket" style="margin:0px 50px;width:200px;height:50px;cursor:pointer" onclick="print()">
<input type="button" value="Feedback" style="margin:0px 50px;width:200px;height:50px;cursor:pointer">

</form>
<form action="buyticketdb.php" method="post"> <pre>


       <span style="font-size:20px;color:green;margin:0px 200px">Bus id: </span>         <input type="text" name="busid" style="background-color:gold;margin:0px -150px">
	   
       <span style="font-size:20px;color:green;margin:0px 200px">Seat number :</span> <input type="text" name="seatnumber"  style="background-color:gold;margin:0px -150px">
	   
       <span style="font-size:20px;color:green;margin:0px 200px">Journey Date: <input type="date" name="jday" style="background-color:gold;margin:0px 45px"> 
	   
	   <input type="submit" value="buy" style="height:30px; width:90px;cursor:pointer;background-color:green;margin:0px 320px" > <input type="button" value="cancel" style="height:30px; width:90px;cursor:pointer;background-color:red;margin:0px -300px" onclick="back()">
	   
</pre>
</form>