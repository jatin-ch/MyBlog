<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="dentalkart";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }
	 
	 if(isset($_POST["blogid"])&& isset($_POST["title"])&& isset($_POST["newblog"])&& isset($_POST["bloglink"]))
	 {	 
	$email= $_SESSION['email'];
	$blogid= $_POST['blogid'];
	$title= $_POST['title'];
	$newblog= $_POST['newblog'];
	$bloglink = $_POST['bloglink'];
	
	date_default_timezone_set("Asia/Kolkata");
	$day= date('l');
	$date = date("d-m-y");
	$time = date("h:i:sa");
		 
		if(!empty($newblog)) {
			   $sql = "UPDATE blogs SET title='$title', newblog='$newblog', bloglink='$bloglink', day='$day', date='$date', time='$time' WHERE blogid='$blogid'";
               $result= $conn->query($sql);
			    header("Location:index.php");
				echo"Blog updated successfully!";
		 }
	 } 
 

	?>
   