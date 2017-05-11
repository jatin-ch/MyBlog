 <?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>My blog</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="font-awesome-4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/index.css" rel="stylesheet" type="text/css">
<link href="css/loginPopup.css" rel="stylesheet" type="text/css">

<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>


 <script>
$(document).ready(function(){
$(".open").click(function(){
 $('.pop-outer').fadeIn('slow');
});
$(".close").click(function(){
 $('.pop-outer').fadeOut('slow');
});
});
</script>

</head>
<body>

<div class="head1" style="z-index:1">
<div class="container">
<div class="row">
<?php
if(isset($_SESSION['email']) && isset($_SESSION['user_name']) && isset($_SESSION['user_picture']))
{ 
?>
<div class="col-lg-2"> 
<h3><span style="color:#0099cc">My</span><span style="color:#ff8533">blog</span></h3>
</div>
<div class="col-lg-6"> 
<input type="text" name="" class="form-control" placeholder="Search" required/> 
</div>
<div class="col-lg-2" style="margin-top:20px"> 
<button class="btn btn-primary open">CREATE NEW BLOG</button>
<div class="pop-outer" style="display:none;z-index:1">
<div class="pop-inner" style="width:50%;height:580px;margin:40px auto;">
<div class="well well-sm"><b><span style="color:#0099cc">My</span><span style="color:#ff8533">blog</span></b> <button class="close">X</button></div>
 <form action="index.php" method="POST" enctype="multipart/form-data" style="padding:0px 20px;">
 <p style="color:#e60000"><?php require"create-blog.php";?></p>
  <p> Required field <span style="color:red">*</span></p>
 <label>Blog ID</label> <span style="color:red">*</span>
<input type="text" name="blogid" class="form-control" required/>
<br />
<label>Title</label>
<input type="text" name="title" class="form-control">
<br />
<label>Myblog</label>  <span style="color:red">*</span>
<textarea name="newblog" cols="30" rows="5" required/></textarea>
<br /><br />
<label>have a link</label>
<input type="text" name="bloglink" class="form-control" placeholder="https://bloglink">
<br />
<i class="fa fa-camera fa-2x btn-file" style="color:#0099cc">
  <input type="file" name="pimg1">
</i>  <span style="color:red">*</span>
<button type="submit" name="submit" class="btn" id="LBtn">Create blog!</button>
</form>
</div>
</div>
</div>

<div class="col-lg-2">
<div class="logout-box">
<div class="logout-photo">
<img class="img-circle" src="<?php echo$_SESSION['user_picture']; ?>">
</div>
<div class="logout-link">
<a href="logout.php"><?php echo$_SESSION['user_name']; ?></a>
</div>
<br clear="all">
</div>
</div>
<?php } else{ ?>

<div class="col-lg-2"> 
<h3><span style="color:#0099cc">My</span><span style="color:#ff8533">blog</span></h3>
</div>
<div class="col-lg-6"> 
<input type="text" name="" class="form-control" placeholder="Search" required/> 
</div>
<div class="col-lg-2" style="margin-top:20px"> 
<a href="glogin/glogin.php"><button class="btn" id="LBtn">LOGIN</button>
</div>

<div class="col-lg-2" style="margin-top:20px">
<a href="adminLogin.php"><button class="btn" id="LBtn">ADMIN LOGIN</button></a>
</div>

<?php } ?>
</div>
</div>
</div >

<div class="container">
<div class="row">
<div class="col-lg-8" style="margin-top:80px;">
<?php require"blogs_select.php"; ?>
</div>
</div>
</div>


</body>
</html>


