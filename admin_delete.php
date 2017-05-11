<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="dentalkart";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }
	 
	 if(isset($_POST["bId"])){
		 
		$bId = $_POST['bId'];
		 
		 if(!empty($bId)){
			   $sql = "DELETE FROM blogs WHERE blogid = '$bId'";
               $result= $conn->query($sql);
			    header("Location:admin.php");
		 }
	 } 
 

	
   