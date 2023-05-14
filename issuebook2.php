<html>
<head>
<title>Issue/Return Book Report</title>
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
<center> <form action="issuebook2.php" method="post">
<br><br><h1><b>Issue/Return Book Report</b></h1>
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
<form method="post" action="issuebook2.php" autocomplete="off">
<br>&nbsp &nbsp &nbsp &nbsp &nbsp <input type="text" name="brid">
<input type="submit" name="search" value="search by Member Id">
</form></center></body>
</html>

<?php  
error_reporting(0);
echo "<title>Issue/Return Book Report</title>";
$conn = mysqli_connect("localhost","root","","library");
    $brid = $_POST['brid'];
	$brname = $_POST['brname'];
	$bcat = $_POST['bcat'];
	$catno = $_POST['catno'];
	$bid = $_POST['bid'];
	$bname = $_POST['bname'];
	$bauthor = $_POST['bauthor'];
	$bdate = $_POST['bdate'];
	$issue = $_POST['issue'];
	$rdate = $_POST['rdate'];
	$return = $_POST['return'];

if(isset($_POST['display'])){
		echo "<center><table border=1>";
        echo "<caption>Issue Book Report</caption><br>";
        echo "<tr>";
        echo "<th>Member Id</th>";
        echo "<th>Member Name</th>";
        echo "<th>Category Name</th>";
        echo "<th>Category No.</th>";
        echo "<th>Book Id</th>";
        echo "<th>Book Name</th>";
		echo "<th>Book Author</th>";
        echo "<th>Borrowed Date</th>";
		echo "<th>Issued By</th>";
        echo "<th>Return Date</th>";
        echo "<th>Return To</th>";
        echo "</tr>";
    $query = "select * from issuebook";
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
        echo "<caption>Issue Book Form</caption><br>";
        echo "<tr>";
        echo "<th>Member Id</th>";
        echo "<th>Member Name</th>";
        echo "<th>Category Name</th>";
        echo "<th>Category No.</th>";
        echo "<th>Book Id</th>";
        echo "<th>Book Name</th>";
        echo "<th>Book Author</th>";
        echo "<th>Borrowed Date</th>";
        echo "<th>Issued By</th>";
        echo "<th>Return Date</th>";
        echo "<th>Return To</th>";
        echo "</tr>";
    $query = "select * from issuebook where borrowid='$brid' ";
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

<br><br><br><br><br><br><br><center><div class="footer">
<font color="black";><p>&copy; <b>Rajwade Sanshodhan Mandal Library</b><br>Designed by <b>Prapti Shukla</b></p>
</div></center>