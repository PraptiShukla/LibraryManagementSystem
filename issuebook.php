<html>
<head>
<title>Issue Book Form</title>
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
<form action="issuebook.php" method="post" autocomplete="off">
<br><center><h1><b><u>Rajwade Library Dhule</u></b></h1>
<h2><b>Issue Book Form</b></h2></center></div>
<link rel="stylesheet" href= "css/formcss.css"/>
<link rel="stylesheet" href= "css/navbarcss.css"/>
<div style="text-align: center;">
<table style=" width:1100; padding-left: 250px; font-size:18px; border-spacing: 0 2px; color:white;">
<tr>
<td>Member Id:</td><td><input type="text" name="brid" id="brid">
<span id="Message"></td>
<td>Member Name:</td> <td><input type="text" name="brname" id="brname">
<span id="Message1"></td><br><br></tr><tr>
<td>Book Category: </td><td><input type="text" name="bcat" id="bcat">
<span id="Message2"></td>
<td>Category No.: </td><td><input type="text" name="catno" id="catno">
<span id="Message3"></td></tr><tr>
<td>Book Id: </td><td><input type="text" name="bid" id="bid">
<span id="Message4"></td>
<td>Book Name: </td><td><input type="text" name="bname" id="bname">
<span id="Message5"></td></tr><tr>
<td>Book Author: </td><td><input type="text" name="bauthor" id="bauthor">
<span id="Message6"></td>
<td>Issued Date: </td><td><input type="date" name="bdate" id="bdate">
<span id="Message7"></td></tr><tr>
<td>Issued By: </td><td><input type="text" name="issue" id="issue">
<span id="Message8"></td>
<td>Ruturn Date: </td><td><input type="date" name="rdate"id="rdate">
<span id="Message9"></td></tr><tr>
<td>Return To: </td><td><input type="text" name="return" id="return">
<span id="Message10"></td></tr></table><br><br>
<button type="submit" name="submit" onClick="return validation()">Issue</button>
<button type="submit" name="update">Return/Updt</button>
<button type="submit" name="delete" onClick="return validation1()">Delete</button>
<button type="submit" name="display">Display</button>
<button type="submit" name="search" onClick="return validation1()">Search</button> 
<button type="reset" name="reset">Reset</button>
</form></div>
<script>
/* function validation()
   {
	   var a = document.getElementById("brid").value;
	   var b = document.getElementById("brname").value;
	   var c = document.getElementById("bcat").value;
	   var d = document.getElementById("catno").value;
	   var e = document.getElementById("bid").value;
	   var f = document.getElementById("bname").value;
	   var g = document.getElementById("bauthor").value;
	   var h = document.getElementById("bdate").value;
	   var i = document.getElementById("issue").value;
	   var j = document.getElementById("rdate").value;
	   var k = document.getElementById("return").value;
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
		 if(d.match(correct))
			 true;
		 else{
			document.getElementById("Message3").innerHTML="*Only Numbers Are Allowed";
            return false;			
		 }
		 if(e == ""){
			document.getElementById("Message4").innerHTML="*Required";
			return false;
		 }
		 if(e.match(correct))
			 true;
		 else{
			document.getElementById("Message4").innerHTML="*Only Numbers Are Allowed";
            return false;			
		 }
		 if(f == ""){
			document.getElementById("Message5").innerHTML="*Required";
			return false;
		 }
		 if(f.match(correct1))
			 true;
		 else{
			document.getElementById("Message5").innerHTML="*Only Characters Are Allowed";
            return false; 
			}
		 if(g == ""){
			document.getElementById("Message6").innerHTML="*Required";
			return false;
		 }
		 if(g.match(correct1))
			 true;
		 else{
			document.getElementById("Message6").innerHTML="*Only Characters Are Allowed";
            return false; 
			}
		 if(h == ""){
			document.getElementById("Message7").innerHTML="*Required";
			return false;
		 }
		 if(i == ""){
			document.getElementById("Message8").innerHTML="*Required";
			return false;
		 }
   }  */
   
   function validation1()
   {
       var a = document.getElementById("brid").value;
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
<form action="issuebook.php" method="post" autocomplete="off"><br>&nbsp &nbsp &nbsp
<label style="color:white; font-size:18px">
Search by Member Name : &nbsp <input type="text" name="memname">&nbsp
<button type="submit" name="search1">Search</button>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
Search by Book Name : &nbsp <input type="text" name="bkname">&nbsp
<button type="submit" name="search2">Search</button>
</form>
</body>
</html>

<?php
error_reporting(0);
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
	
	$memname = $_POST['memname'];
    $bkname = $_POST['bkname'];
if(isset($_POST['submit'])){
	$query1 = "update books set nofcopies = nofcopies-1 where bookname='$bname' and nofcopies > 0";
    $run = mysqli_query($conn,$query1) or die(mysql_error());
    $query = "insert into issuebook(borrowid ,borrowname,categoryname ,categoryno ,bookid ,bookname ,bookauthor ,borrowdate ,issuedby ,returndate ,returnto)values('$brid','$brname','$bcat','$catno','$bid','$bname','$bauthor','$bdate','$issue','$rdate','$return')";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	if($run){    echo "<center>";
		echo "Book Issued Successfully";   echo "</center>";
	}
	else
	{
		echo "Data can not enter";
	}
}

/*if(isset($_POST['return'])){
    $query1 = "update books set nofcopies = nofcopies+1 where bookname='$bname'";
	$run = mysqli_query($conn,$query1) or die(mysql_error());
    $query = "update issuebook set returndate='$rdate' ,returnto='$return' where borrowid='$brid' ";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	if($run){   echo "<center>";
		echo "Book Returned Successfully";    echo "</center>";
	}
	else
	{
		echo "Data can not update data";
	}
} */

if(isset($_POST['update'])){ 
    $query1 = "update books set nofcopies = nofcopies+1 where bookname='$bname'";
	$run = mysqli_query($conn,$query1) or die(mysql_error());
    $query = "update issuebook set borrowname='$brname' ,categoryname='$bcat' ,categoryno='$catno' ,bookid='$bid' ,bookname='$bname' ,bookauthor='$bauthor' ,borrowdate='$bdate' ,issuedby='$issue' ,returndate='$rdate' ,returnto='$return' where borrowid='$brid' ";
	$run = mysqli_query($conn,$query) or die(mysql_error());
	if($run){   echo "<center>";
		echo "Data updated Successfully";    echo "</center>";
	}
	else
	{
		echo "Data can not update data";
	}
}

if(isset($_POST['delete'])){
    $query = "delete from issuebook where borrowid='$brid' ";
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
        echo "<caption>Issue Book Form</caption><br>";
        echo "<tr>";
        echo "<th>Member Id</th>";
        echo "<th>Member Name</th>";
        echo "<th>Category Name</th>";
        echo "<th>Category No.</th>";
        echo "<th>Book Id</th>";
        echo "<th>Book Name</th>";
        echo "<th>Book Author</th>";
        echo "<th>Issued Date</th>";
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
        echo "<th>Issued Date</th>";
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

if(isset($_POST['search1'])){
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
        echo "<th>Issued Date</th>";
        echo "<th>Issued By</th>";
        echo "<th>Return Date</th>";
        echo "<th>Return To</th>";
        echo "</tr>";
    $query = "select * from issuebook where borrowname='$memname' ";
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
        echo "<caption>Issue Book Form</caption><br>";
        echo "<tr>";
        echo "<th>Member Id</th>";
        echo "<th>Member Name</th>";
        echo "<th>Category Name</th>";
        echo "<th>Category No.</th>";
        echo "<th>Book Id</th>";
        echo "<th>Book Name</th>";
        echo "<th>Book Author</th>";
        echo "<th>Issued Date</th>";
        echo "<th>Issued By</th>";
        echo "<th>Return Date</th>";
        echo "<th>Return To</th>";
        echo "</tr>";
    $query = "select * from issuebook where bookname='$bkname' ";
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
	
	// style="background-color:#F9B7FF"; -->Pink Body Color
?>

<br><br><center><div class="footer">
<font color="black";><p>&copy; <b>Rajwade Sanshodhan Mandal Library</b><br>Designed by <b>Prapti Shukla</b></p>
</div></center>