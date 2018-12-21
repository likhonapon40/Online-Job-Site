
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

       if(isset($_POST)) {
	
					  
                
                    
	
		$sql = "SELECT * FROM jobs WHERE id_jobs='$_GET[id]'";
	   $result = $conn->query($sql);
	   
		if($result->num_rows>0)
		{
	
	    	$row = $result->fetch_assoc();
			$id_employer = $row['id_employer'];
	       
	         
             
			}
	 
	 
	$sql1 = "SELECT * FROM apply_jobs WHERE employee_username='$_SESSION[username]' AND id_jobs='$row[id_jobs]'";
    $result1 = $conn->query($sql1);
    if($result1->num_rows == 0) {  
    	$row = $result->fetch_assoc();
	}
	
		
    	$sql = "INSERT INTO apply_jobs(id_jobs,  employer_id, employee_username,   date) VALUES ('$_GET[id]' , '$id_employer', '$_SESSION[username]',  NOW())";
		if($conn->query($sql)===TRUE) {
			$_SESSION['jobApplySuccess'] = true;
			header("Location: find_job.php");
			exit();
		} else {
			echo "Error " . $sql . "<br>" . $conn->error;
		}
							
	  	$conn->close();
   }  else {
		header("Location: find_job.php");
		exit();
   }
		
			
			
			