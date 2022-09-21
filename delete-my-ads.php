<?php 
include("server.php");


$user_post=$_GET['post_id'];

$post_query ="DELETE FROM ad_post WHERE post_id='$user_post'";

$delete =mysqli_query($conn,$post_query);

if($delete){
	?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/onlinekenabecha/my-post.php">

	<?php
}else{

}






 ?>