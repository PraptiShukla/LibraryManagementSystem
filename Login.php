<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V.K.Rajwade Sanshodhan Mandal Library</title>
	<link rel="icon" href="img/logo4.jpg" type="image/x-icon">
	<link rel="stylesheet" href= "Login.css"/>
</head>
<body>
<div class="container">
    <form name="frm" method="post" action="Login.php" autocomplete="off">
    <center>
	<h1 style="text-align: center; font-size:50px; font-family:Gabriola;">Library Management System</h1>
      <h1> User Login</h1>
      <table style align="center" title="User Login">
        <tr>
            <!-- User name -->
            <td><b><label for="User Name">User Name</label></td>
            <td><input type="text" name="Userid"></td>
            <br>
        </tr>
        <tr>
            <br><br>
            <!-- Password -->
            <td><b><label for="Password">Password</label></td>
            <td><input type="password" name="Password"></td>
            <br>
        </tr>
    </table>

<br>
<br>
        <td><input name=sbm  type="submit" value="Submit"></td>
 </center>
</form>
<div>
</body>
</html>


<?php
if(isset($_POST['sbm']))
{
/*$cn=mysql_connect("localhost","root");
mysql_select_db("postofficeportalagensystem",$cn);*/
if($_POST['Userid']=="admin" && $_POST['Password']=="admin")
header("location:http://localhost/Project/rajwade/");
else
{
   /* $sql="select count(*) from customertable where customerid='$_POST[Userid]' and password='$_POST[Password]'";
    $result=mysql_query($sql,$cn);
    $row=mysql_fetch_array($result);   */
    if($_POST['Userid']=="admin" && $_POST['Password']=="user")
    {
       /* session_start();
        $_SESSION['employeeid']=$_POST['Userid']; */
        header("location:http://localhost/Project/rajwade/indexC.php");

    }
    else
    echo "invalid username and or password";
    }
}
?>