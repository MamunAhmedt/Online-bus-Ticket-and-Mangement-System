<?php 
session_start();
		 if($_SESSION['signal']!="admin"){
			 header("location:login.html");
			 
		 }


?>

<script type=""text/javascript">
function addremoveroute(){
window.location="addremoveroute.php";

}
function addremovebus(){
window.location="addremovebus.php";

}
function changebusinfo(){
window.location="changebusinfo.php";

}

function search(){
window.location="adminsearch.php";
}
function logout(){
	window.location="logout.php";
	
}
function cancel(){
	window.loation="AdminPanel.php"
	
}



</script>

<body style= "background-color:#3399ff">
</body>
<h1 style='color:red;text-align:center;font-size:50px;font-family:comic sans ms'>IBUS Bangladesh Limited</h1>

<form >
<input type="button" value="logout" style=" margin:10px 1200px;cursor:pointer " onclick="logout()" >

<input type="button" value="Add/Remove route" style=" margin:20px 70px;width:200px;height:50px;cursor:pointer " onclick="addremoveroute()" >
<input type="button" value="Change Bus Info" style="margin:0px 70px;width:200px;height:50px;cursor:pointer" onclick="changebusinfo()">
<input type="button" value="Search Bus" style="margin:0px 70px;width:200px;height:50px;cursor:pointer" onclick="search()">
<input type="button" value="Add/Remove bus" style="margin:0px 50px;width:200px;height:50px;cursor:pointer" onclick="addremovebus()">


</form>