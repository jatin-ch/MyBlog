<?php
$mysql_host="localhost";
$mysql_user="id1628862_mghoslyaboy";
$mysql_pass="mgboy@000";
$mysql_db="id1628862_dentalkart";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }
?>