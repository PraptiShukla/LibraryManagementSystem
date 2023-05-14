<html>
<head> 
<title>Contact Form Details</title>
<link rel="icon" href="img/logo4.jpg" type="image/x-icon">
</head>
<body style="background-image: url(img/bg-1.jpg); background-size: cover;">
<a class="navbar-brand d-flex align-items-center text-white" href="/">
<br><h2 class="font-weight-bolder mb-0" style="font-size:20px;"><font color="black";>Library Management System</h2></a>
<div class="navbar" style="text-align:right;">
<a href="index.php"><font size=4; color="black";>Home </a> &nbsp &nbsp &nbsp 
<a href="services.php"><font color="black";>Services </a> &nbsp &nbsp &nbsp 
<a href="reports.php"><font color="black";>Reports </a> &nbsp &nbsp &nbsp 
<a href="about.php"><font color="black";>About </a> &nbsp &nbsp &nbsp
<a href="contact.php"><font color="black";>Contact </a> &nbsp &nbsp &nbsp 
<a href="Login.php"><font color="black";>Logout </a> &nbsp &nbsp &nbsp
<link rel="stylesheet" href= "css/navbarcss.css"/>
</div>
</body>
</html>

<html>
<body><br><br><br><br><br>
<form action="donorslist.php" method="post" autocomplete="off"><br>
<div style="padding-left: 30px;">
<label style="color:black; font-size:22px">
<b>Search by Amount Donors: &nbsp 
<button type="submit" name="search1">Search</button>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<b>Search by Book Donors : &nbsp 
<button type="submit" name="search2">Search</button>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<b>Search All Donors : &nbsp 
<button type="submit" name="display">Search</button>
</div><br><br>
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