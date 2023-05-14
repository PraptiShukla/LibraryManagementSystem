<html>
<head>
<title>Fees Collection Form</title>
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
<form action="fees.php" method="post" autocomplete="off">
<br><center><h1><b><u>Rajwade Library Dhule</u></b></h1>
<h2><b>Fees Collection Form</b></h2></center></div>
<link rel="stylesheet" href= "css/formcss.css"/>
<link rel="stylesheet" href= "css/navbarcss.css"/>
<div style="text-align: center;">
<table style=" width:1100; padding-left: 250px; font-size:18px; border-spacing: 0 2px; color:white;">
<tr>
<td>Member Id:</td> <td><input type="text" name="memid" id="memid">
<span id="Message"></td>
<td>Member Name:</td><td><input type="text" name="memname" id="memname">
<span id="Message1"></td><br><br></tr><tr>
<td>Fees Amount: </td><td><input type="text" name="amt" id="amt">
<span id="Message6"></td>
<td>Collection Date: </td><td><input type="date" name="colldate" id="colldate">
<span id="Message7"></td></tr><tr></table><br><br>
<button type="submit" name="submit">Collect</button>
<button type="submit" name="update">Update</button>
<button type="submit" name="delete" onClick="return validation1()">Delete</button>
<button type="submit" name="display">Display</button>
<button type="submit" name="search" onClick="return validation1()">Search</button>
</form></div><br><center>
<script>
    function validation1()
   {
	   var a = document.getElementById("memname").value;
	    if(a == ""){
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
<form action="fees.php" method="post" autocomplete="off"><br>&nbsp &nbsp &nbsp
<label style="color:white; font-size:18px">
Membership Expired Members : &nbsp &nbsp 
<button type="submit" name="search2">Search</button>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
Search Total Fees of Particular Member : &nbsp <input type="text" name="total">&nbsp 
<button type="submit" name="search1">Search</button>
</form>
</body>
</html>

<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","library");
    $memid = $_POST['memid'];
	$memname = $_POST['memname'];
	$amt = $_POST['amt'];
	$colldate = $_POST['colldate'];
	
	$total = $_POST['total'];
	$expire = $_POST['expire'];
	
if(isset($_POST['submit'])){
    $query = "insert into fees(memberid, membername, amount, colldate)values('$memid','$memname','$amt','$colldate')";
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
    $query = "update fees set memberid='$memid', amount='$amt', colldate='$colldate' where membername='$memname'";
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
    $query = "delete from fees where membername='$memname'";
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
        echo "<caption>Fees Collection Form</caption><br>";
        echo "<tr>";
        echo "<th>Member Id</th>";
        echo "<th>Member Name</th>";
        echo "<th>Amount</th>";
        echo "<th>Collection Date</th>";
        echo "</tr>";
    $query = "select * from fees";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	while($row=mysqli_fetch_array($run))
		{
	      echo "<tr>";
		  echo "<td>$row[0]</td>";
		  echo "<td>$row[1]</td>";
		  echo "<td>$row[2]</td>";
		  echo "<td>$row[3]</td>";
		  echo "</tr>";
		}
	echo "</table></center>";
	}

if(isset($_POST['search'])){
		echo "<center><table border=1>";
        echo "<caption>Fees Collection Form</caption><br>";
        echo "<tr>";
        echo "<th>Member Id</th>";
        echo "<th>Member Name</th>";
        echo "<th>Amount</th>";
        echo "<th>Collection Date</th>";
        echo "</tr>";
    $query = "select * from fees where membername='$memname'";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	while($row=mysqli_fetch_array($run))
		{
	      echo "<tr>";
		  echo "<td>$row[0]</td>";
		  echo "<td>$row[1]</td>";
		  echo "<td>$row[2]</td>";
		  echo "<td>$row[3]</td>";
		  echo "</tr>";
		}
	echo "</table></center>";
	}

if(isset($_POST['search1'])){
		echo "<center><table border=1>";
        echo "<caption>Total Fees Collection of Member</caption><br>";
        echo "<tr>";
        echo "<th>Member Id</th>";
        echo "<th>Member Name</th>";
        echo "<th>Total Fees</th>";
        echo "<th>Recent Collection Date</th>";
        echo "</tr>";
    $query = "select memberid, membername, sum(amount), colldate from fees where membername='$total' ";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	while($row=mysqli_fetch_array($run))
		{
	      echo "<tr>";
		  echo "<td>$row[0]</td>";
		  echo "<td>$row[1]</td>";
		  echo "<td>$row[2]</td>";
		  echo "<td>$row[3]</td>";
		  echo "</tr>";
		}
	echo "</table></center>";
	}

if(isset($_POST['search2'])){
		echo "<center><table border=1>";
        echo "<caption>List of Membership Expired Members</caption><br>";
        echo "<tr>";
        echo "<th>Member Id</th>";
        echo "<th>Member Name</th>";
        echo "<th>Last Membership Date</th>";
        echo "</tr>";
    $query = "select memberid, membername, colldate from fees where DATEDIFF(Month,colldate,GetDate()) <= 3";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	while($row=mysqli_fetch_array($run))
		{
	      echo "<tr>";
		  echo "<td>$row[0]</td>";
		  echo "<td>$row[1]</td>";
		  echo "<td>$row[2]</td>";
		  echo "</tr>";
		}
	echo "</table></center>";
	}
?>

<br><br><center><div class="footer">
<font color="black";><p>&copy; <b>Rajwade Sanshodhan Mandal Library</b><br>Designed by <b>Prapti Shukla</b></p>
</div></center>