<html>
<head>
<title>Books Report</title>
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
<center> <form action="books2.php" method="post">
<br><br><h1><b>Books Report</b></h1>
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
<form method="post" action="books2.php" autocomplete="off">
<br>&nbsp &nbsp &nbsp &nbsp &nbsp <input type="text" name="bname">
<input type="submit" name="search" value="search by Book Name">
</form></center></body>
</html>

<?php
error_reporting(0);
echo "<title>Book Entry Report</title>";
$conn = mysqli_connect("localhost","root","","library");
    $endate = $_POST['endate'];
	$bid = $_POST['bid'];
	$bname = $_POST['bname'];
	$bauthor = $_POST['bauthor'];
	$bpub = $_POST['bpub'];
	$pubyear = $_POST['pubyear'];
	$bedi = $_POST['bedi'];
	$bpages = $_POST['bpages'];
	$bcop = $_POST['bcop'];
	$bcat = $_POST['bcat'];
	$blang = $_POST['blang'];
	$bprice = $_POST['bprice'];
	$shelfno = $_POST['shelfno'];
	$ven = $_POST['ven'];
	$remarks = $_POST['remarks'];

if(isset($_POST['display'])) {
		echo "<center><table border=1>";
        echo "<caption>Books Report</caption><br>";
        echo "<tr>";
        echo "<th>Book Entry Date</th>";
        echo "<th>Book Id</th>";
        echo "<th>Book Name</th>";
        echo "<th>Book Author</th>";
        echo "<th>Book Publisher</th>";
        echo "<th>Publishing Year</th>";
        echo "<th>Book Edition</th>";
        echo "<th>No. of Pages</th>";
        echo "<th>No. of Copies</th>";
        echo "<th>Book Category</th>";
        echo "<th>Book Language</th>";
        echo "<th>Book Price</th>";
        echo "<th>Shelf No.</th>";
        echo "<th>Vendor</th>";
        echo "<th>Remarks</th>";
        echo "</tr>";
    $query = "select * from books";
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
		  echo "<td>$row[11]</td>";
		  echo "<td>$row[12]</td>";
		  echo "<td>$row[13]</td>";
		  echo "<td>$row[14]</td>";
		  echo "</tr>";
		}
	echo "</table></center>";
}

if(isset($_POST['search'])) {
		echo "<center><table border=1>";
        echo "<caption>Books Report</caption><br>";
        echo "<tr>";
        echo "<th>Book Entry Date</th>";
        echo "<th>Book Id</th>";
        echo "<th>Book Name</th>";
        echo "<th>Book Author</th>";
        echo "<th>Book Publisher</th>";
        echo "<th>Publishing Year</th>";
        echo "<th>Book Edition</th>";
        echo "<th>No. of Pages</th>";
        echo "<th>No. of Copies</th>";
        echo "<th>Book Category</th>";
        echo "<th>Book Language</th>";
        echo "<th>Book Price</th>";
        echo "<th>Shelf No.</th>";
        echo "<th>Vendor</th>";
        echo "<th>Remarks</th>";
        echo "</tr>";
    $query = "select * from books where bookname='$bname'";
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
		  echo "<td>$row[11]</td>";
		  echo "<td>$row[12]</td>";
		  echo "<td>$row[13]</td>";
		  echo "<td>$row[14]</td>";
		  echo "</tr>";
		}
	echo "</table></center>";
}
?>

<br><br><br><br><br><br><br><center><div class="footer">
<font color="black";><p>&copy; <b>Rajwade Sanshodhan Mandal Library</b><br>Designed by <b>Prapti Shukla</b></p>
</div></center>