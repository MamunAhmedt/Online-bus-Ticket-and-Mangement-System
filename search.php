
<script type="text/javascript">
function search(){
	window.location="search.php";
	
}
function back(){
	window.location="UserPanel.php"
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



</script>
<body style= "background-color:#3399ff>
<h1 style='color:blue;text-align:center;font-size:50px;font-family:comic sans ms'>IBUS Bangladesh Limited</h1>
</body>

<form>
<form ><input type="button" value="logout" style=" margin:10px 1200px;cursor:pointer " onclick="logout()" >
<input type="button" value="Search Bus" style=" margin:0px 50px;width:200px;height:50px;cursor:pointer" onclick="search1()">
<input type="button" value="buy Tickets" style="margin:0px 50px;width:200px;height:50px;cursor:pointer" onclick="buyticket()">
<input type="button" value="print ticket" style="margin:0px 50px;width:200px;height:50px;cursor:pointer" onclick="print()">
<input type="button" value="Feedback" style="margin:0px 50px;width:200px;height:50px;cursor:pointer">

</form>
<form action="searchR.php" method="post"> <pre>


       <span style="font-size:20px;color:green">Source: </span>         <input type="text" name="source" style="background-color:gold">
	   
       <span style="font-size:20px;color:green">Destination :</span> <input type="text" name="destination"  style="background-color:gold">
	   
       <span style="font-size:20px;color:green">Journey Date: <input type="date" name="jday" style="background-color:gold"> 
	   
	          <input type="submit" value="Search" style="height:30px; width:90px;cursor:pointer;background-color:green" >  <input type="button" value="cancel" style="height:30px; width:90px;cursor:pointer;background-color:red" onclick="back()">
	   
</pre>
</form>



