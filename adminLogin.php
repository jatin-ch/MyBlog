<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Login</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="font-awesome-4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/login.css" rel="stylesheet" type="text/css">

<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>



</head>
<body>

<div class="container">
<div class="row">
<div class="">
<div class="login-box effect7">
<h4><span style="color:#0099cc">My</span><span style="color:#ff8533">blog</span></h4>
<h4 style="padding-left:70%"><b>ADMIN LOGIN</b></h4>
<h4>Please sign in to access Myblog</h4>
 <form action="adminLogin.php" method="POST">
   <span style="color:red">*</span> All fields are required
 <p style="color:#e60000"><?php require"trueAdmin.php";?></p>
<input type="email" name="email" class="form-control" placeholder="example@gmail.com" required/>
<br />
<input type="password" name="password" class="form-control" placeholder="password" required/>
<br />
<button type="submit" class="btn" id="LBtn"><i class="fa fa-lock fa-fw"></i> Login</button>
</form>
<br><br>
<h4>Go to <a href="index.php"><span style="color:#0099cc">My</span><span style="color:#ff8533">blog</span></a></h4>
</div>
</div>
</div>
</div>

</body>
</html>

