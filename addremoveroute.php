<?php 
session_start();
		 if($_SESSION['signal']!="admin"){
			 header("location:login.html");
			 
		 }


?>





<script type="text/javascript">
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
function submitForm(action)
    {
        document.getElementById('form1').action = action;
        document.getElementById('form1').submit();
    }
	
	function logout(){
	
	window.location="logout.php";
	
}
function cancel(){
	window.loation="AdminPanel.php"
	
}






</script>



</script>
<body style= "background-color:#3399ff">
<h1 style='color:red;text-align:center;font-size:50px;font-family:comic sans ms'>IBUS Bangladesh Limited</h1>
<br>
</body>

<form >
<form ><input type="button" value="logout" style=" margin:10px 1200px;cursor:pointer " onclick="logout()" >
<input type="button" value="Add/Remove route" style=" margin:20px 70px;width:200px;height:50px;cursor:pointer " onclick="addremoveroute()" >
<input type="button" value="Change Bus Info" style="margin:0px 70px;width:200px;height:50px;cursor:pointer" onclick="changebusinfo()">
<input type="button" value="Search Bus" style="margin:0px 70px;width:200px;height:50px;cursor:pointer" onclick="search()">
<input type="button" value="Add/Remove bus" style="margin:0px 50px;width:200px;height:50px;cursor:pointer" onclick="addremovebus()">


</form>
<form id="form1" action="" method="post"> <pre>
       <span style="font-size:20px;color:green;margin:0px 0px">RouteId: </span>    <input type="text" name="routeid" style="background-color:gold;margin:0px -40px">
	   	   
       <span style="font-size:20px;color:green;margin:0px -5px">Source: </span>     <input type="text" name="source" style="background-color:gold;margin:0px -26px">
	   
	   <span style="font-size:20px;color:green;margin:0px -70px">Destination: </span>     <input type="text" name="destination" style="background-color:gold;margin:0px 20px">
	   
	   <span style="font-size:20px;color:green;margin:0px -70px">    price: </span>     <input type="text" name="price" id="g" style="background-color:gold;margin:0px 40px">
	   
	    
	
	          <input type="button" value="ADD" style="height:30px; width:90px;cursor:pointer;background-color:green;margin:0px 1px" onclick="submitForm('Addroute.php')">  <input type="button" value="Remove" style="height:30px; width:90px;cursor:pointer;background-color:red;margin:0px 10px" onclick="submitForm('removeroute.php')">
			  
<input type="button" value="cancel" style="height:30px; width:90px;cursor:pointer;background-color:red;margin:10px 200px" onclick="cancel()">
	   
</pre>
</form>



