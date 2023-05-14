<html>
<head>
<title>Donation Form</title>
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
<form action="donors.php" method="post" autocomplete="off">
<br><center><h1><b><u>Rajwade Library Dhule</u></b></h1>
<h2><b>Donation Form</b></h2></center></div>
<link rel="stylesheet" href= "css/formcss.css"/>
<link rel="stylesheet" href= "css/navbarcss.css"/>
<div style="text-align: center;">
<table style=" width:1100; padding-left: 250px; font-size:18px; border-spacing: 0 2px; color:white;">
<tr>
<td>Donor Name:</td><td><input type="text" name="dname" id="dname">
<span id="Message"></td>
<td>Gender: </td><td><input style="width: 15px"; type="radio" name="gender" value="Male">  Male
            <input style="width: 15px"; type="radio" name="gender" value="Female">  Female
<span id="Message2"></td></tr><tr>
<td>Donation Type: </td><td><input style="width: 15px"; type="radio" name="type" value="Amount">  Amount
            <input style="width: 15px"; type="radio" name="type" value="Books">  Books
<span id="Message3"></td>
<td>Amount: </td><td><input type="text" name="amount" id="amount">
<span id="Message4"></td></tr><tr>
<td>Book Name: </td><td><input type="text" name="bname" id="bname">
<span id="Message5"></td>
<td>Number Of Copies: </td><td><input type="text" name="copies" id="copies">
<span id="Message6"></td></tr><tr>
<td>Donor Address: </td><td><input type="text" name="daddr" id="daddr">
<span id="Message7"></td>
<td>Donor City: </td><td><input type="text" name="dcity" id="dcity">
<span id="Message8"></td></tr><tr>
<td>Donor Phone No.: </td><td><input type="text" name="dphno" id="dphno">
<span id="Message9"></td>
<td>Donor Email Id: </td><td><input type="text" name="demail" id="demail">
<span id="Message10"></td></tr><tr>
<td>Donation Date: </td><td><input type="date" name="ddate" id="ddate">
<span id="Message11"></td></tr></table><br><br>
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
	   var a = document.getElementById("dname").value;
	   var b = document.getElementById("daddr").value;
	   var c = document.getElementById("dcity").value;
	   var d = document.getElementById("dphno").value;
	   var e = document.getElementById("demail").value;
	   var f = document.getElementById("ddate").value;
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
			document.getElementById("Message7").innerHTML="*Required";
			return false;
		 }
		 if(b.match(correct1))
			 true;
		 else{
			document.getElementById("Message7").innerHTML="*Only Characters Are Allowed";
            return false;			
		 }
		 if(c == ""){
			document.getElementById("Message8").innerHTML="*Required";
			return false;
		 }
		if(c.match(correct1))
			 true;
		 else{
			document.getElementById("Message8").innerHTML="*Only Characters Are Allowed";
            return false; 
			}
		 if(d == ""){
			document.getElementById("Message9").innerHTML="*Required";
			return false;
		 }
		 if(d.match(correct))
			 true;
		 else{
			document.getElementById("Message9").innerHTML="*Only Numbers Are Allowed";
            return false;			
		 }
		  if(d.length>10){
			 document.getElementById("Message9").innerHTML="*Minimum 10 Numbers Required";
            return false;			
		 }
		  if(d.length<10){
			 document.getElementById("Message9").innerHTML="*Maximum 10 Numbers Only";
            return false;			
		 }
		 if(e == ""){
			document.getElementById("Message10").innerHTML="*Required";
			return false;
		 }
		 if(f == ""){
			document.getElementById("Message11").innerHTML="*Required";
			return false;
		 }
   }  */
   
    function validation1()
   {
	   var a = document.getElementById("dname").value;
	    if(a == ""){
			document.getElementById("Message").innerHTML="*Required";
			return false;
		 }
   }
</script> 
</body>
</html>

<html>
<head></head>
<body><br>
<form action="donors.php" method="post" autocomplete="off"><br>&nbsp &nbsp &nbsp
<div style="padding-left: 270px;">
<label style="color:white; font-size:18px">
Search By Amount Donors: &nbsp 
<button type="submit" name="search1">Search</button>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
Search By Book Donors : &nbsp 
<button type="submit" name="search2">Search</button>
</div>
</form>
</body>
</html>

<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","library");
    $dname = $_POST['dname'];
	$gender = $_POST['gender'];
	$type = $_POST['type'];
	$amount = $_POST['amount'];
	$bname = $_POST['bname'];
	$copies = $_POST['copies'];
	$daddr = $_POST['daddr'];
	$dcity = $_POST['dcity'];
	$dphno = $_POST['dphno'];
	$demail = $_POST['demail'];
	$ddate = $_POST['ddate'];
	
	/*$history = $_POST['history'];
	$member = $_POST['member'];*/
	
if(isset($_POST['submit'])){
    $query = "insert into donors(donorname,	gender, type, amount, bookname, nofcopies, donoraddress, city, phoneno, demail, donationdate)values('$dname','$gender','$type','$amount','$bname','$copies','$daddr','$dcity','$dphno','$demail','$ddate')";
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
    $query = "update donors set gender='$gender' ,type='$type' ,amount='$amount' ,bookname='$bname' ,nofcopies='$copies' ,donoraddress='$daddr' ,city='$dcity' ,phoneno='$dphno' ,demail='$demail' ,donationdate='$ddate' where donorname='$dname'";
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
    $query = "delete from donors where donorname='$dname'";
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
        echo "<caption>Donors Form</caption><br>";
        echo "<tr>";
        echo "<th>Donor Name</th>";
        echo "<th>Gender</th>";
        echo "<th>Donation Type</th>";
        echo "<th>Amount</th>";
        echo "<th>Book Name</th>";
        echo "<th>No. of Copies</th>";
        echo "<th>Donor Address</th>";
        echo "<th>Donor City</th>";
        echo "<th>Donor Phone No.</th>";
        echo "<th>Donor Email Id</th>";
        echo "<th>Donation Date</th>";
        echo "</tr>";
    $query = "select * from donors";
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
		  echo "<td>$row[8]</td>";
		  echo "<td>$row[9]</td>";
		  echo "<td>$row[10]</td>";
		  echo "</tr>";
		}
	echo "</table></center>";
	}

if(isset($_POST['search'])){
		echo "<center><table border=1>";
        echo "<caption>Donors Form</caption><br>";
        echo "<tr>";
        echo "<th>Donor Name</th>";
        echo "<th>Gender</th>";
        echo "<th>Donation Type</th>";
        echo "<th>Amount</th>";
        echo "<th>Book Name</th>";
        echo "<th>No. of Copies</th>";
        echo "<th>Donor Address</th>";
        echo "<th>Donor City</th>";
        echo "<th>Donor Phone No.</th>";
        echo "<th>Donor Email Id</th>";
        echo "<th>Donation Date</th>";
        echo "</tr>";
    $query = "select * from donors where donorname='$dname'";
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
		  echo "<td>$row[8]</td>";
		  echo "<td>$row[9]</td>";
		  echo "<td>$row[10]</td>";
		  echo "</tr>";
		}
	echo "</table></center>";
	}

if(isset($_POST['search1'])){
		echo "<center><table border=1>";
        echo "<caption>Donors Form</caption><br>";
        echo "<tr>";
        echo "<th>Donor Name</th>";
        echo "<th>Gender</th>";
        echo "<th>Donation Type</th>";
        echo "<th>Amount</th>";
        echo "<th>Book Name</th>";
        echo "<th>No. of Copies</th>";
        echo "<th>Donor Address</th>";
        echo "<th>Donor City</th>";
        echo "<th>Donor Phone No.</th>";
        echo "<th>Donor Email Id</th>";
        echo "<th>Donation Date</th>";
        echo "</tr>";
    $query = "select * from donors having bookname=0 and nofcopies=0";
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
		  echo "<td>$row[8]</td>";
		  echo "<td>$row[9]</td>";
		  echo "<td>$row[10]</td>";
		  echo "</tr>";
		}
	echo "</table></center>";
	}
	
if(isset($_POST['search2'])){
		echo "<center><table border=1>";
        echo "<caption>Donors Form</caption><br>";
        echo "<tr>";
        echo "<th>Donor Name</th>";
        echo "<th>Gender</th>";
        echo "<th>Donation Type</th>";
        echo "<th>Amount</th>";
        echo "<th>Book Name</th>";
        echo "<th>No. of Copies</th>";
        echo "<th>Donor Address</th>";
        echo "<th>Donor City</th>";
        echo "<th>Donor Phone No.</th>";
        echo "<th>Donor Email Id</th>";
        echo "<th>Donation Date</th>";
        echo "</tr>";
    $query = "select * from donors having amount=0";
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
		  echo "<td>$row[8]</td>";
		  echo "<td>$row[9]</td>";
		  echo "<td>$row[10]</td>";
		  echo "</tr>";
		}
	echo "</table></center>";
	}
?>

<br><br><center><div class="footer">
<font color="black";><p>&copy; <b>Rajwade Sanshodhan Mandal Library</b><br>Designed by <b>Prapti Shukla</b></p>
</div></center>