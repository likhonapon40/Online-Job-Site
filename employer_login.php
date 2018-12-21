<?php
session_start();

if(isset($_POST['Login'])){
	
$con= mysqli_connect('localhost', 'root', '' , 'weblab2');


	$username =$_POST['username'];
	$password =$_POST['password'];
	$result = mysqli_query($con, 'select * from employer where username="'.$username.'" and password="'.$password.'"');
	$eid = 0;
	print_r($result);
	
	while($row = $result -> fetch_assoc()) {
		$eid = $row['id_employer'];
	}
	print $eid;
	
	if(mysqli_num_rows($result)==1){
		$_SESSION['empid']= $eid;
		//$_SESSION['id_employee']=$id_employee;
		header('Location: employer_see.php'); 
	}
	else {
		echo "Account's invalid";
		}
}
if(isset($_GET['logout'])){
	session_unregister('username');

   }
   
 
?>
 <?php
            if(isset($_SESSION['id_employer'])) {
              ?>
             
            <?php
            } else { ?>
              
            <?php } ?>
			
<html>

<head>
<link rel="stylesheet" type="text/css" href="employee_login1.css">
</head>
<body>
</head>
<body>
<header>

<div class="nav">

<ul class="menu">
<li> <a href="home.html">HOME</a></li> 
<li> <a href="employer.html">BACK</a></li> 
<li> <a href="employer_login.php">LOGIN</a></li> 
</ul>

<div class="loginbox">
<a href="home.html">
<img src="logo8.jpg" class="logo">
</a>
<h1> Login Here</h1>
<form method="post">

<tr>
<td> Username:</td>
<td><input type ="text" placeholder=" User Name" name="username"/></td> 
</tr>

<tr>
<td> Password:</td>
<td><input type ="Password" placeholder=" Password" name="password"/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="Login" value="Login"></td>
</tr>
<tr>
<a href="g">Lost Your Password?</a> <br>
<a href="g">Don't Have an Account?</a> 
</td>

</form>
</header>
</body>
</html>