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

<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","library");
    $name = $_POST['name'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phonenumber'];
	$websiteurl = $_POST['websiteurl'];
	$message = $_POST['message'];
if(isset($_POST['submit'])){
    $query = "insert into contactform(username,emailid,phone,website,yourmessage)values('$name','$email','$phonenumber','$websiteurl','$message')";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	if($run){   echo "<center>";
		echo "<br><br><br><br>Thank You For your Response!!!<br>
		      Now You Can Again Redirect To Contact Page....";  echo "</center>";
	}
	else
	{
		echo "Data can not enter";
	}
}

if(isset($_POST['display'])){
	    echo"<br><br>";
		echo "<center><table border=1>";
        echo "<caption>Contact Form Details</caption><br>";
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>Email Id</th>";
        echo "<th>Phone No.</th>";
        echo "<th>Website</th>";
        echo "<th>Message</th>";
        echo "</tr>";
    $query = "select * from contactform";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	while($row=mysqli_fetch_array($run))
		{
	      echo "<tr>";
		  echo "<td>$row[0]</td>";
		  echo "<td>$row[1]</td>";
		  echo "<td>$row[2]</td>";
		  echo "<td>$row[3]</td>";
		  echo "<td>$row[4]</td>";
		  echo "</tr>";
		}
	echo "</table></center>";
}
?>