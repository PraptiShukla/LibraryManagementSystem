<html>
<head>
<title>Book Entry Form</title>
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
<form action="books.php" method="post" autocomplete="off">
<br><center><h1><b><u>Rajwade Library Dhule</u></b></h1>
<h2><b>Book Entry Form</b></h2></center></div>
<link rel="stylesheet" href= "css/formcss.css"/>
<link rel="stylesheet" href= "css/navbarcss.css"/>
<div style="text-align: center;">
<table style=" width:1100; padding-left: 250px; font-size:18px; border-spacing: 0 2px; color:white;">
<tr>
<td>Book Entry Date:</td><td><input type="date" name="endate" id="endate">
<span id="Message"></span></td>
<td>Book Id:</td> <td><input type="text" name="bid" id="bid">
<span id="Message1"></span></td></tr><tr>
<td>Book Name: </td><td><input type="text" name="bname" id="bname">
<span id="Message2"></span></td>
<td>Book Author: </td><td><input type="text" name="bauthor" id="bauthor">
<span id="Message3"></span></td></tr><tr>
<td>Book Publisher: </td><td><input type="text" name="bpub" id="bpub">
<span id="Message4"></span></td>
<td>Publishing Year: </td><td><input type="text" name="pubyear" id="pubyear">
<span id="Message5"></span></td></tr><tr>
<td>Book Edition: </td><td><input type="text" name="bedi" id="bedi">
<span id="Message6"></span></td>
<td>No. of Pages: </td><td><input type="text" name="bpages" id="bpages">
<span id="Message7"></span></td></tr><tr>
<td>No. of Copies: </td><td><input type="text" name="bcop" id="bcop">
<span id="Message8"></span></td>
<td>Book Category: </td><td><input type="text" name="bcat" id="bcat">
<span id="Message9"></span></td></tr><tr>
<td>Book Language: </td><td><input type="text" name="blang" id="blang">
<span id="Message10"></span></td>
<td>Book Price: </td><td><input type="text" name="bprice" id="bprice">
<span id="Message11"></span></td></tr><tr>
<td>Shelf No.: </td><td><input type="text" name="shelfno" id="shelfno">
<span id="Message12"></span></td>
<td>Vendor: </td><td><input type="text" name="ven" id="ven">
<span id="Message13"></span></td></tr><tr>
<td>Remarks: </td><td><input type="text" name="remarks" id="remarks">
<span id="Message14"></span></td></tr></table><br><br>
<button type="submit" name="submit" onClick="return validation()">Add Book</button>
<button type="submit" name="update">Update</button>
<button type="submit" name="delete" onClick="return validation1()">Delete</button>
<button type="submit" name="display">Display</button>
<button type="submit" name="search" onClick="return validation1()">Search</button>
<button type="reset" name="reset">Reset</button>
</form></div>
<!-- <script>
    function validation()
   {
	   var a = document.getElementById("endate").value;
	   var b = document.getElementById("bid").value;
	   var c = document.getElementById("bname").value;
	   var d = document.getElementById("bauthor").value;
	   var e = document.getElementById("bpub").value;
	   var f = document.getElementById("pubyear").value;
	   var g = document.getElementById("bedi").value;
	   var h = document.getElementById("bpages").value;
	   var i = document.getElementById("bcop").value;
	   var j = document.getElementById("bcat").value;
	   var k = document.getElementById("blang").value;
	   var l = document.getElementById("bprice").value;
	   var m = document.getElementById("shelfno").value;
	   var n = document.getElementById("ven").value;
	   var o = document.getElementById("remarks").value;
	   var correct = /^[0-9]+$/;
	   var correct1 = /^[A-Za-z ]+$/; 
	     if(a == ""){
			document.getElementById("Message").innerHTML="*Required";
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
		 if(d.match(correct1))
			 true;
		 else{
			document.getElementById("Message3").innerHTML="*Only Characters Are Allowed";
            return false; 
			}
		 if(e == ""){
			document.getElementById("Message4").innerHTML="*Required";
			return false;
			}
		 if(e.match(correct1))
			 true;
		 else{
			document.getElementById("Message4").innerHTML="*Only Characters Are Allowed";
            return false;
			}
		 if(f == ""){
			document.getElementById("Message5").innerHTML="*Required";
			return false;
			}
		  if(f.match(correct))
			 true;
		 else{
			document.getElementById("Message5").innerHTML="*Only Numbers Are Allowed";
            return false;
			}
		 if(g == ""){
			document.getElementById("Message6").innerHTML="*Required";
			return false;
			}
		 if(h == ""){
			document.getElementById("Message7").innerHTML="*Required";
			return false; 
			}
		  if(h.match(correct))
			 true;
		 else{
			document.getElementById("Message7").innerHTML="*Only Numbers Are Allowed";
            return false;
			}
		 if(i == ""){
			document.getElementById("Message8").innerHTML="*Required";
			return false; 
			}
		  if(i.match(correct))
			 true;
		 else{
			document.getElementById("Message8").innerHTML="*Only Numbers Are Allowed";
            return false;
			}
		 if(j == ""){
			document.getElementById("Message9").innerHTML="*Required";
			return false;
			}
		 if(j.match(correct1))
			 true;
		 else{
			document.getElementById("Message9").innerHTML="*Only Characters Are Allowed";
            return false;
			}
		 if(l == ""){
			document.getElementById("Message11").innerHTML="*Required";
			return false; 
			}
		 if(l.match(correct))
			 true;
		 else{
			document.getElementById("Message11").innerHTML="*Only Numbers Are Allowed";
            return false; 
			}
		 if(m == ""){
			document.getElementById("Message12").innerHTML="*Required";
			return false; 
			}
		 if(n == ""){
			document.getElementById("Message13").innerHTML="*Required";
			return false; 
			} 
    }
</script> -->
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
<form action="books.php" method="post" autocomplete="off"><br>&nbsp &nbsp &nbsp
<label style="color:white; font-size:18px">
Search by Book Author : &nbsp <input type="text" name="bookauth">
<button type="submit" name="search1">Search</button>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
Search by Book Category : &nbsp <input type="text" name="bookcateg">
<button type="submit" name="search2">Search</button> <br><br><br>
<center>Add Copies of Book: &nbsp &nbsp <input type="text" name="addbook" placeholder="Book Name"> &nbsp 
<input type="text" name="addcopy" placeholder="No. of Copies">
<button type="submit" name="add">Add</button></center>
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