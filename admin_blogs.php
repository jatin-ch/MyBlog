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
	<div class="media-left"><img src="images/99packersmovers-user.png" class="media-object" style="width:50px"/></div>
	<div class="media-body">
	<h5 class="media-heading"><a href=""><?php echo$email ?></a></h5>
	<p><small>Last updated <i><?php echo$date ?></i></small> | <?php echo$time ?></p>
	</div>
		<div class="media-right">
	<form action="adminblog.php" method="GET">
	<?php require"manyblogs.php"; ?> 
	<input type="text" name="bId" value="<?php echo$blogid ?>" style="display:none">
	<button type="submit"><i class="fa fa-pencil fa-2x"></i></button>
	</form>
	</div>
     <h4 class="tog" style="color:#ff8533;cursor:pointer">Blog ID: <?php echo$blogid ?></h4>
	 <div class="got" style="display:none">
	 <h4><?php echo$title ?></h4>
	<p><?php echo$newblog ?></p>
	<p><a href="<?php echo$bloglink ?>" target="_blank"><?php echo$bloglink ?></a></p>
    <img src="<?php echo$image ?>" style="width:100%;height:auto">
	 </div>
	</div>
   </div>

<script>
$(document).ready(function(){
	  $(".tog").click(function(){
       // $(".got").toggle();
		$(".got").css({"display": "block"});
    });
});
</script>
		   
		   <?php
		  
		  }
   
		}
		 
		 }
	      else{
		         echo"Oops!! No Posts found!";
	        }
	
   
   