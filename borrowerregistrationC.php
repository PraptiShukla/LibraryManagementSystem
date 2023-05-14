<html>
<head>
<title>Member Registration Form</title>
<link rel="icon" href="img/logo4.jpg" type="image/x-icon">
</head>
<body style="background-image: url(img/bg-2.jpg); background-size:cover;">
<a class="navbar-brand d-flex align-items-center text-white" href="/">
<br><h2 class="font-weight-bolder mb-0" style="font-size:20px;"><font color="white";>Library Management System</h2></a>
<div class="navbar" style="text-align:right";>
<a href="indexC.php"><font size=4; color="white";>Home </a> &nbsp &nbsp &nbsp 
<a href="servicesC.php"><font color="white";>Services </a> &nbsp &nbsp &nbsp 
<a href="reportsC.php"><font color="white";>Reports </a> &nbsp &nbsp &nbsp 
<a href="aboutC.php"><font color="white";>About </a> &nbsp &nbsp &nbsp
<a href="contactC.php"><font color="white";>Contact </a> &nbsp &nbsp &nbsp 
<a href="Login.php"><font color="white";>Logout </a> &nbsp &nbsp &nbsp
</div>
<div class="slide-right">
<form action="borrowerregistrationC.php" method="post" autocomplete="off">
<br><center><h1><b><u>Rajwade Library Dhule</u></b></h1>
<h2><b>Member Registration Form</b></h2></center></div>
<link rel="stylesheet" href= "css/formcss.css"/>
<link rel="stylesheet" href= "css/navbarcss.css"/>
<div style="text-align: center;">
<table style=" width:1100; padding-left: 250px; font-size:18px; border-spacing: 0 2px; color:white;">
<tr>
<td>Member Name:</td><td><input type="text" name="brname" id="brname">
<span id="Message"></td>
<td>Member Id:</td> <td><input type="text" name="brid" id="brid">
<span id="Message1"></td><br><br></tr><tr>
<td>Gender: </td><td><input style="width: 15px"; type="radio" name="gender" value="Male">  Male
            <input style="width: 15px"; type="radio" name="gender" value="Female">  Female
<span id="Message2"></td>
<td>Address: </td><td><input type="text" name="addr" id="addr">
<span id="Message3"></td></tr><tr>
<td>Phone No.: </td><td><input type="text" name="phno" id="phno">
<span id="Message4"></td>
<td>Email Id: </td><td><input type="text" name="email" id="email">
<span id="Message5"></td></tr><tr>
<td>City: </td><td><input type="text" name="city" id="city">
<span id="Message6"></td>
<td>Registration Date: </td><td><input type="date" name="regdate" id="regdate">
<span id="Message7"></td></tr><tr></table><br><br>
<button type="submit" name="submit" onClick="return validation()">Submit</button>
<button type="submit" name="update">Update</button>
<button type="submit" name="search" onClick="return validation1()">Search</button>
<button type="reset" name="reset">Reset</button>
</form></div>
<script>
/* function validation()
   {
	   var a = document.getElementById("brname").value;
	   var b = document.getElementById("brid").value;
	   var c = document.getElementById("addr").value;
	   var d = document.getElementById("phno").value;
	   var e = document.getElementById("email").value;
	   var f = document.getElementById("city").value;
	   var g = document.getElementById("regdate").value;
	   var correct = /^[0-9]+$/;
	   var correct1 = /^[A-Za-z ]+$/; 
	     if(a == ""){
			document.getElementById("Message").innerHTML="*Required";
			return false;
		 }
		if(a.match(correct1))
			 true;
		 else{
			document.getElementById("Message").innerHTML="*Only Characters Are Allowed";
            return false; 
			}
		 if(b == ""){
			document.getElementById("Message1").innerHTML="*Required";
			return false;
		 }
		 if(b.match(correct))
			 true;
		 else{
			document.getElementById("Message1").innerHTML="*Only Numbers Are Allowed";
            return false;			
		 }
		 if(c == ""){
			document.getElementById("Message3").innerHTML="*Required";
			return false;
		 }
		 if(d == ""){
			document.getElementById("Message4").innerHTML="*Required";
			return false;
		 }
		  if(d.match(correct))
			 true;
		 else{
			document.getElementById("Message4").innerHTML="*Only Numbers Are Allowed";
            return false;			
		 }
		 if(d.length>10){
			 document.getElementById("Message4").innerHTML="*Minimum 10 Numbers Required";
            return false;			
		 }
		 if(d.length<10){
			 document.getElementById("Message4").innerHTML="*Maximum 10 Numbers Only";
            return false;			
		 }
		 if(e == ""){
			document.getElementById("Message5").innerHTML="*Required";
			return false;
		 }
		 if(f == ""){
			document.getElementById("Message5").innerHTML="*Required";
			return false;
		 }
		 if(f.match(correct1))
			 true;
		 else{
			document.getElementById("Message5").innerHTML="*Only Characters Are Allowed";
            return false;			
		 }
		 if(g == ""){
			document.getElementById("Message6").innerHTML="*Required";
			return false;
		 }
   }    */
   
    function validation1()
   {
	   var b = document.getElementById("brid").value;
	    if(b == ""){
			document.getElementById("Message1").innerHTML="*Required";
			return false;
		 }
   }
</script>
</body>
</html>

<html>
<head></head>
<body><br>
<form action="borrowerregistrationC.php" method="post" autocomplete="off"><br>&nbsp &nbsp &nbsp
<label style="color:white; font-size:18px">
Search Member History by Id: &nbsp <input type="text" name="history">&nbsp 
<button type="submit" name="search1">Search</button>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
Search by Member Name : &nbsp <input type="text" name="member">&nbsp 
<button type="submit" name="search2">Search</button>
</form>
</body>
</html>

<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","library");
    $brname = $_POST['brname'];
	$brid = $_POST['brid'];
	$gender = $_POST['gender'];
	$addr = $_POST['addr'];
	$phno = $_POST['phno'];
	$email = $_POST['email'];
	$city = $_POST['city'];
	$regdate = $_POST['regdate'];
	
	$history = $_POST['history'];
	$member = $_POST['member'];
	
if(isset($_POST['submit'])){
    $query = "insert into borrowerregistration(borrowname,borrowid,gender,address,phoneno,emailid,city,registerdate)values('$brname','$brid','$gender','$addr','$phno','$email','$city','$regdate')";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	if($run){ echo"<center>";
		echo "Data enterd Successfully";  echo "</center>";
	}
	else
	{
		echo "Data can not enter";
	}
}

if(isset($_POST['update'])){
    $query = "update borrowerregistration set borrowname='$brname' ,gender='$gender' ,address='$addr' ,phoneno='$phno' ,emailid='$email' ,city='$city' ,registerdate='$regdate' where borrowid='$brid'";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	if($run){  echo "<center>";
		echo "Data updated Successfully";  echo "</center>";
	}
	else
	{
		echo "Data can not update data";
	}
}

if(isset($_POST['delete'])){
    $query = "delete from borrowerregistration where borrowid='$brid'";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	if($run){  echo "<center>";
		echo "Data deleted Successfully";   echo "</center>";
	}
	else
	{
		echo "Can no delete data";
	}
}

if(isset($_POST['display'])){
		echo "<center><table border=1>";
        echo "<caption>Member Registration Form</caption><br>";
        echo "<tr>";
        echo "<th>Member Name</th>";
        echo "<th>Member Id</th>";
        echo "<th>Gender</th>";
        echo "<th>Address</th>";
        echo "<th>Phone No.</th>";
        echo "<th>Email Id</th>";
        echo "<th>City</th>";
        echo "<th>Registration Date</th>";
        echo "</tr>";
    $query = "select * from borrowerregistration";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	while($row=mysqli_fetch_array($run))
		{
	      echo "<tr>";
		  echo "<td>$row[0]</td>";
		  echo "<td>$row[1]</td>";
		  echo "<td>$row[2]</td>";
		  echo "<td>$row[3]</td>";
		  echo "<td>$row[4]</td>";
		  echo "<td>$row[5]</td>";
		  echo "<td>$row[6]</td>";
		  echo "<td>$row[7]</td>";
		  echo "</tr>";
		}
	echo "</table></center>";
	}

if(isset($_POST['search'])){
		echo "<center><table border=1>";
        echo "<caption>Member Registration Form</caption><br>";
        echo "<tr>";
        echo "<th>Member Name</th>";
        echo "<th>Member Id</th>";
        echo "<th>Gender</th>";
        echo "<th>Address</th>";
        echo "<th>Phone No.</th>";
        echo "<th>Email Id</th>";
        echo "<th>City</th>";
        echo "<th>Registration Date</th>";
        echo "</tr>";
    $query = "select * from borrowerregistration where borrowid='$brid'";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	while($row=mysqli_fetch_array($run))
		{
	      echo "<tr>";
		  echo "<td>$row[0]</td>";
		  echo "<td>$row[1]</td>";
		  echo "<td>$row[2]</td>";
		  echo "<td>$row[3]</td>";
		  echo "<td>$row[4]</td>";
		  echo "<td>$row[5]</td>";
		  echo "<td>$row[6]</td>";
		  echo "<td>$row[7]</td>";
		  echo "</tr>";
		}
	echo "</table></center>";
	}

if(isset($_POST['search1'])){
		echo "<center><table border=1>";
        echo "<caption>Member History</caption><br>";
        echo "<tr>";
        echo "<th>Member Id</th>";
        echo "<th>Member Name</th>";
        echo "<th>Book Name</th>";
        echo "<th>Book Author</th>";
        echo "<th>Issue Date</th>";
        echo "<th>Return Date</th>";
        echo "</tr>";
    $query = "select borrowid ,borrowname ,bookname ,bookauthor ,borrowdate ,returndate from issuebook where borrowid='$history'";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	while($row=mysqli_fetch_array($run))
		{
	      echo "<tr>";
		  echo "<td>$row[0]</td>";
		  echo "<td>$row[1]</td>";
		  echo "<td>$row[2]</td>";
		  echo "<td>$row[3]</td>";
		  echo "<td>$row[4]</td>";
		  echo "<td>$row[5]</td>";
		  echo "</tr>";
		}
	echo "</table></center>";
	}

if(isset($_POST['search2'])){
		echo "<center><table border=1>";
        echo "<caption>Member Registration Form</caption><br>";
        echo "<tr>";
        echo "<th>Member Name</th>";
        echo "<th>Member Id</th>";
        echo "<th>Gender</th>";
        echo "<th>Address</th>";
        echo "<th>Phone No.</th>";
        echo "<th>Email Id</th>";
        echo "<th>City</th>";
        echo "<th>Registration Date</th>";
        echo "</tr>";
    $query = "select * from borrowerregistration where borrowname='$member'";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	while($row=mysqli_fetch_array($run))
		{
	      echo "<tr>";
		  echo "<td>$row[0]</td>";
		  echo "<td>$row[1]</td>";
		  echo "<td>$row[2]</td>";
		  echo "<td>$row[3]</td>";
		  echo "<td>$row[4]</td>";
		  echo "<td>$row[5]</td>";
		  echo "<td>$row[6]</td>";
		  echo "<td>$row[7]</td>";
		  echo "</tr>";
		}
	echo "</table></center>";
	}
?>

<br><br><center><div class="footer">
<font color="black";><p>&copy; <b>Rajwade Sanshodhan Mandal Library</b><br>Designed by <b>Prapti Shukla</b></p>
</div></center>