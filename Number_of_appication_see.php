<?php

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
<html>
<head>
<title> Job Portal </title>
<link href="Number_of_application.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
<video autoplay loop class="video-background" muted plays-inline>
<source src="videob.mp4" type="video/mp4">
</video>
<div class="nav">
<a href="home.html">
<img src="logo12.jpg" class="logo">
</a>

<ul class="menu">
<li> <a href="home.html">HOME</a></li> 
<li> <a href="employer_see.php">Back</a></li> 
<li> <a href="employer_login.php">Logout</a></li>
<li> <a href="home.html">ABOUT</a></li>
</ul>

<br>
  <div class="row">
        <?php
          $sql = "SELECT employer_id, employee_username
                     from apply_jobs
                    where employer_id = ".$_SESSION['empid'];
          $result = $conn->query($sql);
          if($result->num_rows > 0) {
            ?>
           <div class="rows" align="center">
            <a href="view_applications.php" class="btn input">View Applications <span class="badge"><?php echo $result->num_rows; ?></a>
           </div> 
            <?php
          }
        ?>
      </div>
     
           

</header>



</html>
</body>


</html>
	
 
    

         