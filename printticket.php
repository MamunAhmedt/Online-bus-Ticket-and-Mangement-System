
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
<input type="button" value="print ticket" style="margin:0px 50px;width:200px;height:50px;cursor:pointer" onclick="printticket()">
<input type="button" value="Feedback" style="margin:0px 50px;width:200px;height:50px;cursor:pointer">

</form>
<form action="jsonbdticket.php" method="post"> <pre>

       <span style="font-size:20px;color:green;margin:0px 550px">ticket number :</span> <input type="text" name="ticketnumber"  style="background-color:gold;margin:0px -550px">
	   
       
	   
	   <input type="submit" value="print" style="height:30px; width:90px;cursor:pointer;background-color:green;margin:0px 650px">  <input type="button" value="cancel" style="height:30px; width:90px;cursor:pointer;background-color:red;margin:0px -600px" onclick="back()">
	   
</pre>
</form>