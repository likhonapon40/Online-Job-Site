<?php
session_start();
 //echo 'welcome, '.$_SESSION['username'];

   
 
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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
   

    <!-- Bootstrap -->
   <style>
  Body{
	  margin: 0.3;
	padding : 0;
	background:url(l.jpg);
	background-size:120% 810px;
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

table
{
width:100%
}
table, th, td
{
	border : 1px solid black;
	border-collapse : collapse;
	opacity : 0.95;
}
th,td
{
	padding : 10px;
	text-align : center;
}
th
{
	background-color: green;
	color: white;
}
tr:nth-child(even)
{
	background-color: #EAF4E9;
}
tr:nth-child(odd)
{
	background-color: #B2BFB0;
}
  #header
  {	 
	margin: 0;
	padding: 0;
	color: white;
	font-size: 36px;
	background: rgba(0, 0, 0, .5);
	height: 50px;
	
      
  }
  </style>
   
  </head>
  <body>
 
	
	<!-- NAVIGATION BAR -->
    <div class="nav">
	<a href="home.html">
<img src="logo12.jpg" class="logo">
</a>
<ul class="menu">
<li> <a href="home.html">HOME</a></li> 
<li> <a href="employee_login.php">Logout</a></li>
<li> <a href="employee_see.php">Back</a></li>
</ul>

    <div class="container">

      <?php if(isset($_SESSION['jobApplySuccess'])) { ?>
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-success">
           You Have Successfully Applied!
          </div>
        </div>
      </div>
      <?php unset($_SESSION['jobApplySuccess']); } ?>
	  <?php
            if(isset($_SESSION['id_employer'])) {
              ?>
             
            <?php
            } else { ?>
              
            <?php } ?>
	  
      
	 
	 

      <!-- Search and Apply To Job Posts -->
      <div class="row">
	 <div class="col-md-12">
          <div class="table-responsive">
		  <h1 id="header" colspan="23" align="center" > ALL  JOBS  POST</li></h1>
         <table class="table table-striped">
              <thead>
                
  
   <th>Employer ID</th>
  <th>Companyname</th>
  <th>Location</th>
  <th>Title</th>
  <th>Position</th>
  <th>Education</th>
  <th>Experience</th>
  <th>Requirements</th>
  <th>Vacancy</th>
  <th>Jobnature</th>
  <th>Salary</th>
  <th>Benefits</th>
 <th>Action</th>
  
  
              </thead>
              <tbody>
                <?php 
                  $sql = "SELECT * FROM jobs";
                  $result = $conn->query($sql);
                  if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) 
                    {
						 $sql1 = "SELECT * FROM apply_jobs WHERE employee_username='$_SESSION[username]' AND id_jobs='$row[id_jobs]'";
                      $result1 = $conn->query($sql1);
                     ?>
					 
                      <tr>
					   <td><?php echo $row['id_employer']; ?></td>
                        <td><?php echo $row['companyname']; ?></td>
                        <td><?php echo $row['location']; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['position']; ?></td>
                        <td><?php echo $row['education']; ?></td>
                        <td><?php echo $row['experience']; ?></td>
						 <td><?php echo $row['requirements']; ?></td>
						  <td><?php echo $row['vacancy']; ?></td>
						   <td><?php echo $row['jobnature']; ?></td>
						    <td><?php echo $row['salary']; ?></td>
							 <td><?php echo $row['benefits']; ?></td>
					  
               
				  


 
				  
          <?php
						if($result1->num_rows > 0) { 
                          ?>
                          <td><strong>Applied</strong></td>
                        
                          
                       
           <?php
                        } else {
                        ?>
                
                        <td><a href="apply.php?id=<?php echo $row['id_jobs']; ?>">Apply</a></td>
						
                        <?php } ?>                       
                      </tr>
                     <?php
					
					?>
  
              <?php  
					}
				  }
			
		
		?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

   
  </body>
</html>
