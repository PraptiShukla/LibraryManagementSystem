<html>
<head>
<title>Book Entry Form</title>
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
<form action="booksC.php" method="post" autocomplete="off">
<br><center><h1><b><u>Rajwade Library Dhule</u></b></h1>
<h2><b>Book Entry Form</b></h2></center></div>
<link rel="stylesheet" href= "css/formcss.css"/>
<link rel="stylesheet" href= "css/navbarcss.css"/>
<div style="text-align: center;">
<table style=" width:1100; padding-left: 250px; font-size:18px; border-spacing: 0 2px; color:white;">
<tr>
<td>Book Name: </td><td><input type="text" name="bname" id="bname">
<span id="Message2"></span></td>
<td>Book Author: </td><td><input type="text" name="bauthor" id="bauthor">
<span id="Message3"></span></td></tr><tr>
<td>Book Edition: </td><td><input type="text" name="bedi" id="bedi">
<span id="Message6"></span></td>
<td>Book Category: </td><td><input type="text" name="bcat" id="bcat">
<span id="Message9"></span></td></tr><tr>
</tr></table><br><br>
<button type="submit" name="display">Display</button>
<button type="submit" name="search" onClick="return validation1()">Search</button>
<button type="reset" name="reset">Reset</button>
</form></div>
<script>
 function validation1()
   {
	   var a = document.getElementById("bname").value;
	    if(a == ""){
			document.getElementById("Message2").innerHTML="*Required";
			return false;
		 }
   }
</script>
</body>
</html>

<html>
<head></head>
<body><br>
<form action="booksC.php" method="post" autocomplete="off"><br>&nbsp &nbsp &nbsp
<label style="color:white; font-size:18px">
Search by Book Author : &nbsp <input type="text" name="bookauth">
<button type="submit" name="search1">Search</button>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
Search by Book Category : &nbsp <input type="text" name="bookcateg">
<button type="submit" name="search2">Search</button> <br><br><br>
</form>
</body>
</html>

<?php
error_reporting(0);
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
	
	$bookauth = $_POST['bookauth'];
    $bookcateg = $_POST['bookcateg'];
	$addbook = $_POST['addbook'];
	$addcopy = $_POST['addcopy'];
	
if(isset($_POST['submit'])){
    $query = "insert into books(entrydate,bookid,bookname,bookauthor,bookpub,pubyear,bookedition,bpages,nofcopies,bookcat,booklang,bookprice,shelfno,vendor,remarks)
	         values('$endate','$bid','$bname','$bauthor','$bpub','$pubyear','$bedi','$bpages','$bcop','$bcat','$blang','$bprice','$shelfno','$ven','$remarks')";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	if($run){ echo "<center>";
		echo "Data enterd Successfully";  echo "</center>";
	}
	else
	{
		echo "Data can not enter";
	}
}

if(isset($_POST['update'])){
    $query = "update books set entrydate='$endate' ,bookid='$bid' ,bookauthor='$bauthor' ,bookpub='$bpub' ,pubyear='$pubyear' ,bookedition='$bedi' ,bpages='$bpages' ,
	          nofcopies='$bcop' ,bookcat='$bcat' ,booklang='$blang' ,bookprice='$bprice' ,shelfno='$shelfno' ,vendor='$ven' ,remarks='$remarks' where bookname='$bname'";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	if($run){ echo "<center>";
		echo "Data updated Successfully";   echo "</center>";
	}
	else
	{
		echo "Data can not update data";
	}
}

if(isset($_POST['delete'])){
    $query = "delete from books where bookname='$bname'";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	if($run){ echo "<center>";
		echo "Data deleted Successfully";  echo "</center>";
	}
	else
	{
		echo "Can no delete data";
	}
}

if(isset($_POST['display'])){
		echo "<center><table border=1>";
        echo "<caption>Book Entry Form</caption><br>";
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

if(isset($_POST['search'])){
		echo "<center><table border=1>";
        echo "<caption>Book Entry Form</caption><br>";
        echo "<tr>";
        echo "<th>Book Entry Date:</th>";
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
	
if(isset($_POST['search1'])){
		echo "<center><table border=1>";
        echo "<caption>Book Entry Form</caption><br>";
        echo "<tr>";
        echo "<th>Book Entry Date:</th>";
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
    $query = "select * from books where bookauthor='$bookauth'";
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
	
if(isset($_POST['search2'])){
		echo "<center><table border=1>";
        echo "<caption>Book Entry Form</caption><br>";
        echo "<tr>";
        echo "<th>Book Entry Date:</th>";
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
    $query = "select * from books where bookcat='$bookcateg'";
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

if(isset($_POST['add'])){
    $query = "update books set nofcopies = nofcopies + '$addcopy' where bookname='$addbook'";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	if($run){ echo "<center>";
		echo "Books added Successfully";  echo "</center>";
	}
	else
	{
		echo "Can no delete data";
	}
}
?>

<br><br><center><div class="footer">
<font color="black";><p>&copy; <b>Rajwade Sanshodhan Mandal Library</b><br>Designed by <b>Prapti Shukla</b></p>
</div></center>