<?php
session_start();
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="dentalkart";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }
	

 if(isset($_POST["email"]) && isset($_POST["password"]))
 {
	$email= $_POST['email'];
	$password = $_POST['password'];
	
	if(!empty($email)&&!empty($password))
	{
		
		
	$sql="SELECT * FROM admin WHERE email='$email' AND password='$password'";	
	
     $result = $conn->query($sql);
    
	if($result->num_rows ==1)
	 {
		 while($row=$result->fetch_assoc())
		 {  
			if($row["email"]==$email)
			{
			$_SESSION['admin']= $email;
			header("Location:admin.php");
			}
			else{
				echo"Login failed, please try again";
			}
	    }
	 	 
	}
	 else{ 
	      echo"Admin doesn't exists";
		 // header("Location:next123.php");
		  
        }
	
	}
 }
 
 ?>
 
 

