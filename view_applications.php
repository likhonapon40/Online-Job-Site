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
<head>

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
    
 
    <header>
      <nav class="navbar navbar-default">
	   
    </header>
	
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


      
            <div class="row">
	 <div class="col-md-12">
          <div class="table-responsive">
		  <h1 id="header" colspan="13" align="center"> Application Received </h1>
         <table class="table table-striped">
		 
            <table class="table table-striped">
              <thead>
                <th>Id Jobs</th>
                <th>Employer Id</th>
                <th>Employee Username</th>
				<th>Date</th>
				 <th>Action</th>
              </thead>
              <tbody>
      </div> 
	  <?php         					
                  $sql ="SELECT employer_id, employee_username, id_jobs, date
                     from apply_jobs
                    where employer_id = ".$_SESSION['empid'];
				  $result = $conn->query($sql);
                  if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) 
                    {

             
                     ?>
       
                 <tr>
                        <td><?php echo $row['id_jobs']; ?></td>
                        <td><?php echo $row['employer_id']; ?></td>
                        <td><?php echo $row['employee_username']; ?></td>
                        <td><?php echo $row['date']; ?></td>
						<td><a href="apllicant_details.php?employee=<?php echo $row['employee_username']; ?>">View</a></td>
						
                       
                      </tr>
                     <?php
					
                  
				  }}  ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

   
   
   