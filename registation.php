<script type="text/javascript">


function submitForm(action)
    {
        document.getElementById('form1').action = action;
        document.getElementById('form1').submit();
    }

function checkphone()
{
l=document.forms[0].phone.value.length;
if(l!=14){
document.getElementById("msg1").innerHTML="length error";

}
else{
	document.getElementById("msg1").innerHTML="valid";
}
	
}
function checkmail(){
	
	
	
	
	
}
function checkpass(){
	p=document.forms[0].pass.value.length;
	if(p<8){
		document.getElementById("msg3").innerHTML="too short";
	}
	else{
		document.getElementById("msg3").innerHTML="valid";
	}
	
	
	
}


function confirmpass(){
	p=document.forms[0].c_pass.value.length;
	q=document.forms[0].pass.value.length;
	if(p!=q){
		document.getElementById("msg4").innerHTML="password mismatch";
	}
	else{
		document.getElementById("msg4").innerHTML="matched";
	}
	
	
	
}

function gendercheck(){
	p=document.forms[0].gender.value;
	
	if(p!=null){
		document.getElementById("msg5").innerHTML="valid";
	}
	else{
		document.getElementById("msg5").innerHTML="matched";
	}
	
	
	
}


function fnamecheck(){
		p=document.forms[0].fname.value.length;
		if(p==0){
		document.getElementById("msg6").innerHTML="invalid";
		//document.getElementById("msg6").innerHTML.style.color="red";
	}
	else{
		document.getElementById("msg6").innerHTML="valid";
		
		
	}
	
	
	
	
}

function lnamecheck(){
		p=document.forms[0].lname.value.length;
		if(p!=0){
		document.getElementById("msg7").innerHTML="valid";
	}
	else{
		document.getElementById("msg7").innerHTML="invalid";
	}
	
	
	
	
}
function testall(){

	a=document.forms[0].fname.value.length;
	b=document.forms[0].lname.value.length;
	e=document.forms[0].gender.value;
	c=document.forms[0].mail.value.length;
	d=document.forms[0].phone.value.length;
	f=document.forms[0].pass.value.length;
	g=document.getElementById('msg2').innerHTML;
	if(a==0){
			alert("First Name Required ");
			
	}
	else if( b==0){
		alert("Last Name Required ");
		
	}
	else if(e==0){
		
		alert("You have not Selected your Gender ");
		
	}
	
	else if(d==0) {
		alert("Please enter your valid phone Number");
		
		
	}
	else if(c==0) {
		alert("Please enter your valid mail address");
		
	}
   
   else if(f<8) {
		alert("Please enter your valid password");
		
	}
	else if(g=="Email already exist") {
		alert("Enter Another email");
		
	}
	
	else{
		document.forms[0].submit();
	}
	
	
	
}

function showHint() {	
var x = document.getElementById('x').value;
//alert(x);
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        document.getElementById("msg2").innerHTML="Not a valid e-mail address";
       
    }
	else{
		document.getElementById("msg2").innerHTML="valid ";
		
	}




















    //document.getElementById('msg2').innerHTML="valid";	
	str1=document.getElementById('x').value;
    str= '"'+str1+'"';
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
				msg=resp[i].mail;
				
					

				if(msg==str1){
				document.getElementById('msg2').innerHTML="Email already exist";				
				}
				
	
			}
			
			
			
		}
	};
	var url="jsonbd2.php?signal=readCGPA&mail="+str;
	//alert(url);
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}





</script>
<head>
<style>

.info{
	border:solid black 1px;
	position:relative;
	left:220px;
	color:red;
	
	
}

</style>
</head>
<body style= "background-color:#00cc00">
<h1 style="color:black;text-align:center">Regestation Form</h1>


<span class="info"><sup style="color:red">*</sup> Must be filled Properties </span>

</body>

<form action="insert_db.php" method="post">
<pre>
<span style=font-size:20px>First Name<sup style="color:red">*</sup>:</span>            <input type="text" name="fname" onkeyup="fnamecheck()"> <span id="msg6"> </span>

<span style=font-size:20px>Last Name<sup style="color:red">*</sup>:</span>              <input type="text" name="lname" onkeyup="lnamecheck()"> <span id="msg7"> </span>

<span style=font-size:20px>DOB<sup style="color:red">*</sup>:      </span>              <input type="date" name="bday">            

<span style=font-size:20px>Gender<sup style="color:red">*</sup>:   </span>              <input type="radio" name="gender" value="male" onclick="gendercheck()">male  <input type="radio" name="gender" value="male" onclick="gendercheck()" />female  <span id="msg5"> <b>not selected</b></span>
				  
<span style=font-size:20px>Phone<sup style="color:red">*</sup>:    </span>              <input type="text" name="phone"   onkeyup="checkphone()" >  <span id="msg1"> </span>

<span style=font-size:20px>Mail<sup style="color:red">*</sup> :    </span>              <input type="text" name="mail" id="x" value="" onkeyup="showHint()"> <span id="msg2"> </span>

<span style=font-size:20px>Password<sup style="color:red">*</sup>: </span>              <input type="password" name="pass" onkeyup="checkpass()" >    <span id="msg3"> </span>

<span style=font-size:20px>Confirm Password<sup style="color:red">*</sup>:</span>   <input type="password" name="c_pass" onkeyup= "confirmpass()">  <span id="msg4"> </span> 


                             <input type="button" style="height:40px; width:100px" value="Register" onclick="testall()">  <a href="home.php"><input type="button" style="height:40px; width:100px" value="Cancel"> </a>
</pre>
</form>