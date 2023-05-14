<html>
<head>
<title>Staff Details Form</title>
<link rel="icon" href="img/logo4.jpg" type="image/x-icon">
</head>
<body style="background-image: url(img/bg-2.jpg); background-size:cover;">
<a class="navbar-brand d-flex align-items-center text-white" href="/">
<br><h2 class="font-weight-bolder mb-0" style="font-size:20px;"><font color="white";>Library Management System</h2></a>
<div class="navbar" style="text-align:right";>
<a href="index.php"><font size=4; color="white";>Home </a> &nbsp &nbsp &nbsp 
<a href="services.php"><font color="white";>Services </a> &nbsp &nbsp &nbsp 
<a href="reports.php"><font color="white";>Reports </a> &nbsp &nbsp &nbsp 
<a href="about.php"><font color="white";>About </a> &nbsp &nbsp &nbsp
<a href="contact.php"><font color="white";>Contact </a> &nbsp &nbsp &nbsp 
<a href="Login.php"><font color="white";>Logout </a> &nbsp &nbsp &nbsp
</div>
<div class="slide-right">
<form action="staffdetails.php" method="post" autocomplete="off">
<br><center><h1><b><u>Rajwade Library Dhule</u></b></h1>
<h2><b>Staff Details Form</b></h2></center></div>
<link rel="stylesheet" href= "css/formcss.css"/>
<link rel="stylesheet" href= "css/navbarcss.css"/>
<div style="text-align: center;">
<table style="width:870; padding-left: 480px; border-spacing: 0 2px; font-size:18px; color:white;">
<tr>
<td>Employee Id:</td><td><input type="text" name="empid" id="empid">
<span id="Message"></td></tr><tr>
<td>Employee Name:</td> <td><input type="text" name="empname" id="empname">
<span id="Message1"></td><br><br></tr><tr>
<td>Employee Designation: </td><td><input type="text" name="empdes" id="empdes">
<span id="Message2"></td></tr><tr>
<td>Gender: </td><td><input style="width: 15px"; type="radio" name="gender" value="Male" id="gender">Male
                 <input style="width: 15px"; type="radio" name="gender" value="Female" id="gender">Female
<span id="Message3"></td></tr><tr>
<td>Address: </td><td><input type="text" name="addr" id="addr">
<span id="Message4"></td></tr><tr>
<td>City: </td><td><input type="text" name="city" id="city">
<span id="Message5"></td></tr><tr></table><br>
<button type="submit" name="submit" onClick="return validation()">Submit</button>
<button type="submit" name="update">Update</button>
<button type="submit" name="delete" onClick="return validation1()">Delete</button>
<button type="submit" name="display">Display</button>
<button type="submit" name="search" onClick="return validation1()">Search</button>
<button type="reset" name="reset">Reset</button>
</form></div>
<script>
/* function validation()
   {
	   var a = document.getElementById("empid").value;
	   var b = document.getElementById("empname").value;
	   var c = document.getElementById("empdes").value;
	   var d = document.getElementById("gender").value;
	   var e = document.getElementById("addr").value;
	   var f = document.getElementById("city").value;
	   var correct = /^[0-9]+$/;
	   var correct1 = /^[A-Za-z ]+$/; 
	     if(a == ""){
			document.getElementById("Message").innerHTML="*Required";
			return false;
		 }
		 if(a.match(correct))
			 true;
		 else{
			document.getElementById("Message").innerHTML="*Only Numbers Are Allowed";
            return false;			
		 }
		 if(b == ""){
			document.getElementById("Message1").innerHTML="*Required";
			return false;
		 }
		 if(b.match(correct1))
			 true;
		 else{
			document.getElementById("Message1").innerHTML="*Only Characters Are Allowed";
            return false; 
			}
		 if(c == ""){
			document.getElementById("Message2").innerHTML="*Required";
			return false;
		 }
		 if(c.match(correct1))
			 true;
		 else{
			document.getElementById("Message2").innerHTML="*Only Characters Are Allowed";
            return false; 
			}
		 if(d == ""){
			document.getElementById("Message3").innerHTML="*Required";
			return false;
		 }
		 if(e == ""){
			document.getElementById("Message4").innerHTML="*Required";
			return false;
		 }
		 if(f == ""){
			document.getElementById("Message5").innerHTML="*Required";
			return false;
		 }
   }	*/
   
   function validation1()
   {
	   var b = document.getElementById("empname").value;
	    if(b == ""){
			document.getElementById("Message1").innerHTML="*Required";
			return false;
		 }
   }
</script>
</body>
</html>

<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","library");
    $empid = $_POST['empid'];
    $empname = $_POST['empname'];
    $empdes = $_POST['empdes'];
    $gender = $_POST['gender'];
    $addr = $_POST['addr'];
    $city = $_POST['city'];
if(isset($_POST['submit'])){
    $query = "insert into staffdetails(empid ,empname ,empdesignation ,gender ,address ,city)values('$empid','$empname','$empdes','$gender','$addr','$city')";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	if($run){   echo "<center>";
		echo "Data enterd Successfully";    echo "</center>";
	}
	else
	{
		echo "Data can not enter";
	}
}

if(isset($_POST['update'])){
    $query = "update staffdetails set empid='$empid' ,empdesignation='$empdes' ,gender='$gender' ,address='$addr' ,city='$city'  where empname='$empname'";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	if($run){       echo "<center>";
		echo "Data updated Successfully";     echo "</center>";
	}
	else
	{
		echo "Data can not update data";
	}
}

if(isset($_POST['delete'])){
    $query = "delete from staffdetails where empname='$empname' ";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	if($run){    echo "<center>";
		echo "Data deleted Successfully";    echo "</center>";
	}
	else
	{
		echo "Can no delete data";
	}
}

if(isset($_POST['display'])){
		echo "<center><table border=1>";
        echo "<caption>Staff Details Form</caption><br>";
        echo "<tr>";
        echo "<th>Employee Id</th>";
        echo "<th>Employee Name</th>";
        echo "<th>Employee Designation</th>";
        echo "<th>Gender</th>";
        echo "<th>Address</th>";
        echo "<th>City</th>";
        echo "</tr>";
    $query = "select * from staffdetails";
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

if(isset($_POST['search'])){
		echo "<center><table border=1>";
        echo "<caption>Staff Details Form</caption><br>";
        echo "<tr>";
        echo "<th>Employee Id</th>";
        echo "<th>Employee Name</th>";
        echo "<th>Employee Designation</th>";
        echo "<th>Gender</th>";
        echo "<th>Address</th>";
        echo "<th>City</th>";
        echo "</tr>";
    $query = "select * from staffdetails where empname='$empname'";
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
?>

<br><br><center><div class="footer">
<font color="black";><p>&copy; <b>Rajwade Sanshodhan Mandal Library</b><br>Designed by <b>Prapti Shukla</b></p>
</div></center>