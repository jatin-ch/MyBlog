<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="dentalkart";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }
	
	 	 $sql = "CREATE TABLE blogs (email VARCHAR(25),blogid VARCHAR(20) PRIMARY KEY, title VARCHAR(50), newblog VARCHAR(500) NOT NULL, bloglink VARCHAR(200), image VARCHAR(200), day TEXT, date TEXT, time TEXT)";
     if ($conn->query($sql) === TRUE) {
      echo "Table blogs created successfully";
      } 
 
 
 if(isset($_POST["blogid"])&& isset($_POST["title"])&& isset($_POST["newblog"])&& isset($_POST["bloglink"]) &&isset($_POST['submit']))
 {
	$email= $_SESSION['email'];
	$blogid = $_POST['blogid'];
	$title= $_POST['title'];
	$newblog= $_POST['newblog'];
	$bloglink = $_POST['bloglink'];
	
	date_default_timezone_set("Asia/Kolkata");
	$day= date('l');
	$date = date("d-m-y");
	$time = date("h:i:sa");
	
	$tmpfile1 =  $_FILES['pimg1']['tmp_name'];
	$size=$_FILES['pimg1']['size'];
	$type=$_FILES['pimg1']['type'];
	$name=$_FILES['pimg1']['name'];
	$temp=0;
	$target_dir="./uploads/";
	$targetfile1=$target_dir.$name;
	
	
	if(!empty($blogid) && !empty($newblog) && !empty($email))
	{
		if(file_exists($targetfile1)){		
		$temp=1;
		 echo "file exixst in folder<br>";
		 echo "Please Upload File 1 Again<br>";
		 }
	   $k=0;
	   if($temp==0)
	   {
		if(move_uploaded_file($tmpfile1,$targetfile1))
	       {
		      echo"File 1 Uploded<br>";
	       }
		   else
		   {
			   $k=1;
			   echo"File 1 Not Uploded<br>";
		   }		 
		   
		  if($k!=1) {
			  
		 $sql="INSERT INTO blogs(email,blogid, title, newblog, bloglink, image, day, date, time) 
	                    Values('$email','$blogid','$title','$newblog','$bloglink','$targetfile1','$day','$date','$time')";	
	
     $result = $conn->query($sql);
	  echo"Update Sucessfully!!";
		  
		  }
		   else{ 
	            echo"* Updation Failed!!.";
		   }
		  
	   }
	
	}
	  else{
		 echo"* Please input Required info.";
	}

 }
 


?>
