 <?php
session_start();
?>
<?php
if(isset($_SESSION['admin']))
{ 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Page</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="font-awesome-4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/index.css" rel="stylesheet" type="text/css">
<link href="css/loginPopup.css" rel="stylesheet" type="text/css">

<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>



</head>
<body>

<div class="head1" style="z-index:1">
<div class="container">
<div class="row">
<div class="col-lg-2"> 
<h3><span style="color:#0099cc">My</span><span style="color:#ff8533">blog</span></h3>
</div>
<div class="col-lg-6"> 
<input type="text" name="" class="form-control" placeholder="Search" required/> 
</div>
<div class="col-lg-2" style="margin-top:20px"> 

</div>
<div class="col-lg-2">
<div class="logout-box">
<div class="logout-photo">
<img class="img-circle" src="images/20150702_164147-1.jpg">
</div>
<div class="logout-link">
<a href="adminLogout.php">Logout</a>
</div>
<br clear="all">
</div>
</div>
</div>
</div>
</div >

<div class="container">
<div class="row">
<div class="col-lg-8" style="margin-top:80px;">
<?php require"admin_blogs.php"; ?>
</div>
</div>
</div>


</body>
</html>
<?php	
}
else
{ ?>

 <?php } ?>

