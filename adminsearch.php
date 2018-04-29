
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
function logout(){
	
	window.location="login.html";
	
}
function cancel(){
	window.loation="AdminPanel.php"
	
}





</script>



</script>
<body style="background-color:BLACK">
<h1 style='color:red;text-align:center;font-size:50px;font-family:comic sans ms'>IBUS Bangladesh Limited</h1>
<br>
</body>

<form >
<form ><input type="button" value="logout" style=" margin:10px 1200px;cursor:pointer " onclick="logout()" >
<input type="button" value="AddRemove Route" style="margin:0px 50px;width:200px;height:50px;cursor:pointer" onclick="addremoveroute()">
<input type="button" value="Change Bus Info" style="margin:0px 70px;width:200px;height:50px;cursor:pointer" onclick="changebusinfo()">
<input type="button" value="Search Bus" style="margin:0px 70px;width:200px;height:50px;cursor:pointer" onclick="search()">
<input type="button" value="AddRemove Bus" style=" margin:20px 70px;width:200px;height:50px;cursor:pointer " onclick="addremovebus()" >

</form >
<form action ="searchR.php" method="post"> <pre>


       <span style="font-size:20px;color:green;margin:0px 660px">Source      : </span>         <input type="text" name="source" style="background-color:gold;margin:0px -728px">
	   
       <span style="font-size:20px;color:green;margin:0px 660px">Destination :</span> <input type="text" name="destination"  style="background-color:gold;margin:0px -660px">
	   
       <span style="font-size:20px;color:green;margin:0px 660px">Journey Date: <input type="date" name="jday" style="background-color:gold;margin:0px -2px"> 
	   
	          <input type="submit" value="Search" style="height:30px; width:90px;cursor:pointer;background-color:green;margin:0px 600px">  <input type="button" value="cancel" style="height:30px; width:90px;cursor:pointer;background-color:red;margin:0px -550px" onclick="cancel()">
	   
</pre>
</form>



