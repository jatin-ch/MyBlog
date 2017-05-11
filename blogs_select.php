<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="dentalkart";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }
	 
	 
 
  $sql = "SELECT * FROM blogs";
  $result= $conn->query($sql);
  if($result->num_rows>0)
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
	<div class="media-left">
	<?php if(isset($_SESSION['email']) && isset($_SESSION['user_picture']) && $_SESSION['email']==$email){ ?>
	<img src="<?php echo $_SESSION['user_picture'];?>" class="media-object" style="width:50px"/>
	<?php } else{ ?>
	<img src="images/99packersmovers-user.png" class="media-object" style="width:50px"/>
	<?php } ?>
	</div>
	<div class="media-body">
	<?php if( isset($_SESSION['user_name']) && $_SESSION['email']==$email){ ?>
	<h5 class="media-heading"><a href=""><?php echo$_SESSION['user_name'];?></a></h5>
		<?php } else{ ?>
	<h5 class="media-heading"><a href=""><?php echo$email ?></a></h5>
	<?php } ?>
	<p><small>Last updated <i><?php echo$date ?></i></small> | <?php echo$time ?></p>
	</div>
	<?php if(isset($_SESSION['email']) && $_SESSION['email']==$email){ ?>
	<div class="media-right">
	<form action="myblog.php" method="GET">
	<?php //require"blog_delete.php"; 
	require"oneblog.php"; ?> 
	
	<input type="text" name="bId" value="<?php echo$blogid ?>" style="display:none">
	<button type="submit"><i class="fa fa-pencil fa-2x"></i></button>
	</form>
	</div>
	   <?php }?>
	<h4><?php echo$title ?></h4>
	<p><?php echo$newblog ?></p>
	<p><a href="<?php echo$bloglink ?>" target="_blank"><?php echo$bloglink ?></a></p>
    <img src="<?php echo$image ?>" style="width:100%;height:auto">
	</div>
   </div>
		   
		   <?php
		  
		  }
   
		}
		 
		 }
	      else{
		         echo"Oops!! No Posts found!";
	        }
	
   