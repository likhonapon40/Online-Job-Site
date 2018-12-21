<?php
session_start();



  if(isset($_POST['register'])){
 $First_Name = filter_input(INPUT_POST, 'fname');
 $Last_Name = filter_input(INPUT_POST, 'lname');
 $Father_Name = filter_input(INPUT_POST, 'faname');
 $Mother_Name = filter_input(INPUT_POST, 'mname');
 $Email = filter_input(INPUT_POST, 'ename');
 $Mobile_No = filter_input(INPUT_POST, 'mob');
 $National_Id = filter_input(INPUT_POST, 'nid');
 $Age = filter_input(INPUT_POST, 'age');
 $Education = filter_input(INPUT_POST, 'education');
 $Password = filter_input(INPUT_POST, 'pass');
 $radio = filter_input(INPUT_POST, 'sex');
 $username = filter_input(INPUT_POST, 'username');
 $checkbox = filter_input(INPUT_POST, 'ffname');
 
 // connecting with database


        define ( 'DB_HOST', 'localhost' );
        define ( 'DB_USER', 'root' );
        define ( 'DB_PASSWORD', '' );
        define ( 'DB_DB', 'weblab2' );


        // Create connection
        $conn = new mysqli(DB_HOST,DB_USER, DB_PASSWORD, DB_DB);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
          //  echo "Established";
        }
 


        // adding data to database


        $sql = "INSERT INTO `employee`( `fname`, `lname`,  `faname`, `mname`, `ename`,`mob`, `nid`, `age`, `education`, `Password`, `sex`, `username`,`ffname` )
		          VALUES ('$First_Name', '$Last_Name', '$Father_Name', '$Mother_Name', '$Email','$Mobile_No', '$National_Id', '$Age', '$Education', '$Password', '$radio', '$username', '$checkbox')";

        if ($conn->query($sql) === TRUE) {
			
          echo "Register Information,ation added successfully!";
		}else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
  }
  

    if(isset($_POST['employee'])){
 
 $Company_Name = filter_input(INPUT_POST, 'companyname');
 $Location = filter_input(INPUT_POST, 'location');
 $Email = filter_input(INPUT_POST, 'emails');
 $Srial_No = filter_input(INPUT_POST, 'serial');
 $Branch = filter_input(INPUT_POST, 'branch');
 $About = filter_input(INPUT_POST, 'about');
 $Benefits = filter_input(INPUT_POST, 'benefits');
 $Password = filter_input(INPUT_POST, 'pass');
 $username = filter_input(INPUT_POST, 'username');
  
 $checkbox = filter_input(INPUT_POST, 'ffname');
 
 // connecting with database


        define ( 'DB_HOST', 'localhost' );
        define ( 'DB_USER', 'root' );
        define ( 'DB_PASSWORD', '' );
        define ( 'DB_DB', 'weblab2' );


        // Create connection
        $conn = new mysqli(DB_HOST,DB_USER, DB_PASSWORD, DB_DB);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
          //  echo "Established";
        }
 


        // adding data to database


        $sql = "INSERT INTO `employer`( `companyname`, `location`, `emails`, `serial`, `branch`, `about`,  `benefits`, `Password`, `username`, `ffname` )
		          VALUES ( '$Company_Name', '$Location', '$Email', '$Srial_No', '$Branch', '$About',  '$Benefits', '$Password', '$username', '$checkbox')";

        if ($conn->query($sql) === TRUE) {
            echo "Insert Information,ation added successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;   
        }

        $conn->close();
  }
  
  if(isset($_POST['login'])){
 $Employer_ID = filter_input(INPUT_POST, 'id_employer');	  
 $Company_Name = filter_input(INPUT_POST, 'companyname');
 $Location = filter_input(INPUT_POST, 'location');
 $Job_Title = filter_input(INPUT_POST, 'title');
 $Position = filter_input(INPUT_POST, 'position');
 $Education = filter_input(INPUT_POST, 'education');
 $Experience = filter_input(INPUT_POST, 'experience');
 $Job_Requirements = filter_input(INPUT_POST, 'requirements');
 $Vacancy = filter_input(INPUT_POST, 'vacancy');
 $Job_Nature = filter_input(INPUT_POST, 'jobnature');
 $Salary_Range = filter_input(INPUT_POST, 'salary');
 $Benefits = filter_input(INPUT_POST, 'benefits');
 $checkbox = filter_input(INPUT_POST, 'ffname');
 
 // connecting with database


        define ( 'DB_HOST', 'localhost' );
        define ( 'DB_USER', 'root' );
        define ( 'DB_PASSWORD', '' );
        define ( 'DB_DB', 'weblab2' );


        // Create connection
        $conn = new mysqli(DB_HOST,DB_USER, DB_PASSWORD, DB_DB);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
          //  echo "Established";
        }
 


        // adding data to database


        $sql = "INSERT INTO `jobs`( `id_employer`,  `companyname`, `location`, `title`, `position`, `education`, `experience`,`requirements`, `vacancy`, `jobnature`, `salary`, `benefits`, `ffname` )
		          VALUES ( '$Employer_ID', '$Company_Name', '$Location', '$Job_Title',  '$Position', '$Education', '$Experience','$Job_Requirements', '$Vacancy', '$Job_Nature', '$Salary_Range', '$Benefits', '$checkbox')";

        if ($conn->query($sql) === TRUE) {
            echo "Insert Information,ation added successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
  }
  
  
  
?>