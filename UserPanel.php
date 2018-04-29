<?php 
session_start();
		 if($_SESSION['signal']!="user"){
			 header("location:login.html");
			 
		 }
?>
<script type="text/javascript">
function search(){
	
	window.location="usersearch.php";
	
}
function buyticket(){
	
	window.location="buyticket.php";
	
	
}
function print(){
	
	window.location="printticket.php";
	
}
function logout(){
	
	window.location="logout.php";
	
	
}



</script>
<body style="background-color:BLACK">
<div style="font-size:20px;color:red;margin:20px 500px">Welcom To ABC Bus Service Mr. <?php 
if (!empty($_SESSION['UserName'])){ echo $_SESSION['UserName'];}else{header("location:login.html");}?> </div> 
<br>

</body>


<form action="searchR.php"  method="post">
<input type="button" value="logout" style=" margin:10px 1200px;cursor:pointer " onclick="logout()" >
<input type="button" value="Search Bus" style=" margin:0px 50px;width:200px;height:50px;cursor:pointer" onclick="search()">
<input type="button" value="buy Tickets" style="margin:0px 50px;width:200px;height:50px;cursor:pointer" onclick="buyticket()">
<input type="button" value="print ticket" style="margin:0px 50px;width:200px;height:50px;cursor:pointer" onclick="print()">
<input type="button" value="Feedback" style="margin:0px 50px;width:200px;height:50px;cursor:pointer">

</form>
