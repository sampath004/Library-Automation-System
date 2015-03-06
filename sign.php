<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>SignUp</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<script type="text/javascript">
var namepattern=/^[a-zA-Z]+$/;
var phonepattern = /^\d{10}$/;
var emailpattern =/^[^@]+@[^@.]+\.[^@]*\w\w$/;
var regpattern=/^[0=9][0-9]a81a{4}/;

function validateForm()
{
 
 var x=document.forms["contact_form"]["name"];
 if (x.value=="")
   {
  
  document.getElementById('pointfn').innerHTML="Please enter the name.";
  x.focus();
  return false;
   }
 
 else if(x.value.length>20)
   {
  x.value="";
  document.getElementById('pointfn').innerHTML="Please enter less than 20 characters.";
  x.focus();
  return false;
   }
 

 document.getElementById('pointfn').innerHTML='';

 x1=document.forms["contact_form"]["password"];

 if(x1.value=="")
   {
  document.getElementById('pointln').innerHTML="Please enter the Password greater than 6 char .";
  x1.focus();
  return false;
 }

 

x=document.contact_form.email;
 if(x.value=="")
 {
  x.value="";
  document.getElementById('pointemail').innerHTML="Please enter the email id.";
  x.focus();
  return false;
 }
 else if(!emailpattern.test(x.value))
 {
  x.value="";
  document.getElementById('pointemail').innerHTML="Please enter a valid email address.";
  x.focus();
  return false;
 }
 document.getElementById('pointemail').innerHTML="";
 
 
 x=document.contact_form.mobilenumber;

 if(x.value=="")
 {
  
  x.value="";
  document.getElementById('pointcontct').innerHTML="Please enter the contact number.";
  x.focus();
  return false;
 }
 else if(isNaN(x.value))
 {
  x.value="";
  document.getElementById('pointcontct').innerHTML="Please enter only digits.";
  x.focus();
  return false;
 }
 else if(x.value.length!=10)
 {
  x.value="";
  document.getElementById('pointcontct').innerHTML="Please enter only 10 digits.(Mobile number)";
  x.focus();
  return false;
 }
 else if(!phonepattern.test(x.value))
 {
  x.value="";
  document.getElementById('pointcontct').innerHTML="Please enter a valid contact number";
  x.focus();
  return false;
 }
 document.getElementById('pointcontct').innerHTML="";
 

 
 x= document.getElementById("regnumber");
 if(x.value==null || x.value=="" )
 {
  x.value="";
  document.getElementById('pointadrs').innerHTML="Please enter your registration number";
  x.focus();
  return false;
 }
 

 
 return confirm("Do you want to submit the form?");
}
       
 function confirmreset()
 {
  if(confirm("Do you want to reset the form?"))
{
 document.getElementById('pointfn').innerHTML="";
 document.getElementById('pointln').innerHTML="";

 document.getElementById('pointdob').innerHTML="";
 document.getElementById('pointadrs').innerHTML="";
 document.getElementById('pointcontct').innerHTML="";
 
 document.getElementById('pointemail').innerHTML="";
 return true;
}
else
 return false;
 }


</script>
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<link rel="stylesheet" href="styles/headings.css" type="text/css" />
<link rel="stylesheet" href="styles/styles.css" type="text/css" />

</head>
<body id="top">
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
     <h1>SRI VASAVI ENGINEERING COLLEGE</h1>
<h2>E-Learning</h2>
      <p>Gain Knowledge</p>
    </div>
    
	<div id="topnav1">
    
	<ul>
        <li class="active"><a href="index.php">Home</a></li>
</ul>
        <li><a href="#">Courses</a>
          <ul>
            <li class="active"><a href="c.php">C</a></li>
            <li><a href="cpp.php">C++</a></li>
            <li><a href="java.php">JAVA</a></li>
          </ul>
        </li>
        <li><a href="trainers.php">Trainers</a></li>
	   
      </ul>
    </div>
	<div id="topnav1">
    
	<ul>
	<li>
	<a href="login.php">LogIN</a></li>

	<li><a href="signup.php">SignUp</a>
    	</li>
	</ul>
	</div>
    
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="breadcrumb">
    <ul>
     
      <center>
      <h3>REGISTER HERE </h3>
		
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="container">
   <form class="contact_form" name="contact_form" method="post" action="regsubmit.php">

<table align="center">

<tr>
<td class="label">Name of Student:<sup style="color:#F00">*</sup></td>
<td><input type="text" id="sname" name="sname" /></td>
<td width="200px"><i style="color:red;" id="pointfn"></i></td>
</tr>
<tr>
<td class="label">Password:<sup style="color:#F00">*</sup></td>
<td><input type="password" id="password" name="password" /></td>
<td width="200px"><i style="color:red;" id="pointln"></i></td>
</tr>

<tr>
<td class="label">Email:<sup style="color:red;">*</sup></td>
<td><input type="text" id="emailid" name="emailid" /><span class="form_hint">Example:"abc@gmail.com"</span></td>
<td width="200px"><i style="color:red;" id="pointemail"></i></td>

</tr>
<tr>
<td class="label">Gender:<sup style="color:#F00">*</sup></td>
<td><select id="gender" name="gender">
	
	<option value="male">Male</option>
    <option value="female">Female</option></select></td>
    <td width="200px"> <i style="color:red;" id="pointgender"></i></td>
</tr>
<tr>
<td class="label">Branch:<sup style="color:#F00">*</sup></td>
<td><select id="branch" name="branch">
	
    <option value="IT">IT</option>
    <option value="CSE">CSE</option>
    <option value="ECE">ECE</option>
    <option value="EEE">EEE</option>
    <option value="MEC">MEC</option>

</select></td>
    <td width="200px"> <i style="color:red;" id="pointgender"></i></td>
</tr>
<tr>
<td class="label">Mobile Number:<sup style="color:#F00">*</sup></td>
<td><input type="text" id="mobile" name="mobile" /><span class="form_hint">Example: "9900993344"</span></td>
<td width="200px"><i style="color:red;" id="pointcontct"></i></td>
</tr>


<tr>
<td class="label">Registration Number:<sup style="color:#F00">*</sup></td>
<td><input type="text" id="regno" name="regno" /></td>
<td width="200px"><i style="color:red;" id="pointadrs"></i>   
  </td></tr>
  <tr>
<td style="font-size:12px;text-align:right;"><br/><i style="color:red;font-size:12px;align:right;" >* - Mandatory Fields</i></td></tr>
<tr><td>
<button class="submit" type="submit" name="submit" onClick="return validateForm()">submit</button></td>
</tr>
</table>
</form>


    

	
    
  </div>
</div>
<!-- ####################################################################################################### -->

<div class="wrapper col4">
  <div id="footer">
    
    <div class="box contactdetails">
      
    </div>
    
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">SRI VASAVI ENGINEERING COLLEGE</a></p>
   
    <br class="clear" />
  </div>
</div>
</body>
</html>
