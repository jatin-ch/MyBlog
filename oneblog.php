<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="dentalkart";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }
	 
	 if(isset($_GET["bId"])){
		 
		$bId = $_GET['bId'];
		$email = $_SESSION['email'];
		 
		 if(!empty($bId) && !empty($email)){
			   $sql = "SELECT * FROM blogs WHERE blogid ='$bId' AND email='$email'";
               $result= $conn->query($sql);
			   
			    if($result->num_rows >0)
	 {
		  while($row=$result->fetch_assoc())
		{
		  if(!empty($row['blogid']))
	   {
		  $email= $row['email'];
		   $blogid = $row['blogid'];
		   $title = $row['title'];
		   $newblog = $row['newblog'];
		   $bloglink = $row['bloglink'];
		   $image = $row['image'];
		   $date = $row['date'];
		   $time = $row['time'];
		   
		   ?>
		   
  	<div class="myposts">
	<div class="media">
	<div class="media-left"><img src="<?php echo$_SESSION['user_picture'];?>" class="media-object" style="width:50px"/></div>
	<div class="media-body">
	<h5 class="media-heading"><?php echo$_SESSION['user_name']; ?></h5>
	<p><small><i><?php echo$date ?></i></small> | <?php echo$time ?></p>
	</div>
   <div class="media-right">
	<form action="myblog.php?bId=<?php echo$blogid; ?>" method="POST">
	<p style="color:#ff9933"><?php require"blog_delete.php"; ?></p> 
	<input type="text" name="bId" value="<?php echo$blogid ?>" style="display:none">
	<button type="submit"><i class="fa fa-trash fa-2x"></i></button>
	</form>
	</div>
	 <form action="myblog.php?bId=<?php echo$blogid; ?>" method="POST">
	 <p style="color:#00ace6"><?php require"blog_update.php"; ?></p>
	    <input type="text" name="blogid" value="<?php echo$blogid ?>" style="display:none">
		<input  type="text" name="title" placeholder="Edit blog title" value="<?php echo$title ?>">
		<textarea name="newblog" cols="30" rows="5" placeholder="Edit your blog here..." required/><?php echo$newblog ?></textarea>
		<input  type="text" name="bloglink"  value="<?php echo$bloglink ?>" placeholder="https://bloglink">
		<br><br>
		<button type="submit" class="btn btn-primary">SAVE CHANGES</button>
		<a href="index.php" style="margin-left:50px"><button type="submit" class="btn">CANCEL</button></a>
	 </form>
	</div>
   </div>		   	
			
		   <?php
		  
		  }
   
		}
		 
		 }
	      else{
		         echo"Oops!! No Blog found!";
	        }
		 }
	 }
	  
?>

	 
 

	
   