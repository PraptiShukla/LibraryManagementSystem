<html>
<head>
<title>Member Report</title>
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
<center> <form action="borrowerregistration2.php" method="post">
<br><br><h1><b>Member Report</b></h1>
<link rel="stylesheet" href= "css/mycss.css"/>
<link rel="stylesheet" href= "css/reportcss.css"/>
<br><button type="submit" name="display">Display</button>&nbsp &nbsp &nbsp &nbsp &nbsp
<button type="submit" name="print" onClick="window.print();">print</button><br>
</form></center> </div>
</body>
</html>

<html>
<head></head>
<body><center>
<form method="post" action="borrowerregistration2.php" autocomplete="off">
<br>&nbsp &nbsp &nbsp &nbsp &nbsp <input type="text" name="brid">
<input type="submit" name="search" value="search by Member Id">
</form></center></body>
</html>

<?php
error_reporting(0);
echo "<title>Member Report</title>";
$conn = mysqli_connect("localhost","root","","library");
    $brname = $_POST['brname'];
	$brid = $_POST['brid'];
	$gender = $_POST['gender'];
	$addr = $_POST['addr'];
	$phno = $_POST['phno'];
	$email = $_POST['email'];
	$city = $_POST['city'];
	$regdate = $_POST['regdate'];

if(isset($_POST['display'])){
		echo "<center><table border=1>";
        echo "<caption>Borrower Registration Report</caption><br>";
        echo "<tr>";
        echo "<th>Borrower Name</th>";
        echo "<th>borrower Id</th>";
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
        echo "<caption>Borrower Registration Report</caption><br>";
        echo "<tr>";
        echo "<th>Borrower Name</th>";
        echo "<th>borrower Id</th>";
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
?>

<br><br><br><br><br><br><br><center><div class="footer">
<font color="black";><p>&copy; <b>Rajwade Sanshodhan Mandal Library</b><br>Designed by <b>Prapti Shukla</b></p>
</div></center>