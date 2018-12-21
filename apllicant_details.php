
<?php
$emp = $_GET['employee'];
#echo $emp;

session_start();

       define ( 'DB_HOST', 'localhost' );
        define ( 'DB_USER', 'root' );
        define ( 'DB_PASSWORD', '' );
        define ( 'DB_DB', 'weblab2' );

       $conn = new mysqli(DB_HOST,DB_USER, DB_PASSWORD, DB_DB);
        
		
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
          
        }
		
?>

		
<!DOCTYPE html>
<html lang="en">
  <head>

    
   

    <!-- Bootstrap -->
   <style>
 body
{
	margin: 0;
	padding : 0;
	background:url(home.jpg);
	background-size: cover;
	font-family: sans-serif;
	
	
}
.logo{
	margin: 10px 50px;
	height: 60px;
}
.menu {
	float: right;
	list-style:none;
	margin: 20px;
}
.menu li {
	display: inline-block;
	margin: 10px 5px;
}
.menu li a {
	text-decoration:none;
	color: #fff;
	padding: 5px 10px;
	font-family: "Roboto", sans-serif;
	font-size: 15px;
	letter-spacing: 2px;
	border: 1px solid white;
}
	
.menu li a: hover {
background: coral;
border : 1px solid coral;	
transition: .4s;
}
.msg{
	position: relative;
	text-align: center;
	font-family: sans-serif;
	color: #fff;
	top: 200px;
}
.title

{
	text-align: center;
	padding: 50px 0 20px;
}
.title h1

{
	margin: 0;
	padding: 0;
	color: white;
	font-size: 36px;
	background: rgba(0, 0, 0, .7);
	height: 50px;
	
}
.container
{
	width: 50%;
	height: 400px;
	background: #262626;
	margin: 0 auto;
	border: 2px solid #262626;
	box-shadow: 0 15px 40px rgba(0,0,50,.5);
}
.container .left
{
	float: left;
	width: 50%;
	height: 400px;
	background: url(large.jpg);
	background-size: cover;
	box-sizing: border-box;
}

.container .right
{
	float: right;
	width: 50%;
	height: 400px;
	background-color: red;
	background-size: cover;
    box-sizing: border-box;

}
.formBox
{
	width: 100%;
	padding: 80px 40px;
	box-sizing: border-box;
	height: 400px;
	background: gray;
}

.formBox p
{
	margin: 0;
	padding: 0;
	font-weight: none;
	color: white;
	font-size: 20px;
}
.formBox input
{
	width: 110%;
	margin-bottom: 20px;
}
.formBox input[type="submit"]
{
	border: none;
	outline:: none;
	height: 40px;
	color: #fff;
	background: black;
	font-size:22px;
	font-weight: bold;
	border-radius:20px;
}
.formBox input[type="submit"]:hover
{
	background: #a6af13;
}
{
	color: #262626;
	font-size:12px;
	font-weight: bold;
}

 



  </style>
   
  </head>
  <body>

	 

 
    
<html lang="en">
  <head>
   
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Job Portal</title>

 
   

  </head>
  <body>
    
    <!-- NAVIGATION BAR -->
    <header>
      <nav class="navbar navbar-default">
       
          
          

             
            
          </div>
		  <a href="home.html">
		  <img src="logo12.jpg" class="logo">
           </a>
		  
<ul class="menu">
<li> <a href="home.html">HOME</a></li> 
<li> <a href="view_applications.php">BACK</a></li>
<li> <a href="home.html">INFO</a></li>
<li> <a href="employer_login.php">LOGOUT</a></li>
</ul>
        </div>
      </nav>
    </header>

    <div class="title"><h1> Employee Details Information </h1></div>
    <div class="container">
    <div class="left"></div>
   <div class="right">
   <div class="formBox">
       
          
        
            <?php
			
             $sql ="SELECT * FROM employee WHERE username='$emp'";
			  $result = $conn->query($sql);
              if($result->num_rows > 0) {
               while($row = $result->fetch_assoc()) {
			   
    	
              ?>
                
                <p>First Name :  <?php echo $row['fname']; ?></p>
				<p>Last Name :  <?php echo $row['lname']; ?></p>
                <p>Father Name : <?php echo $row['faname']; ?></p>
                <p>Mother Name : <?php echo $row['mname']; ?></p>
                <p>Email : <?php echo $row['ename']; ?></p>
                <p>Mobile No : <?php echo $row['mob']; ?></p>
                <p>National Id : <?php echo $row['nid']; ?></p>
                <p>Age : <?php echo $row['age']; ?></p>
                <p>Education : <?php echo $row['education']; ?></p>
                <p>SEX : <?php echo $row['sex']; ?></p>
                <p>Username : <?php echo $row['username']; ?></p>
				
                  
                  <?php
                } 
				
                ?>
               

              <?php } ?>
          </div>
        </div>
      </div>
    </div>

   
  </body>
</html>