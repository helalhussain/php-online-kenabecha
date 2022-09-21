
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php



include("server.php");


$disable_id=$_GET['user_id'];

$dis = "able";
$disable_query = "UPDATE user SET able='$dis' WHERE user_id='$disable_id'";
$disable =mysqli_query($conn,$disable_query);

$ad_post_query = "UPDATE ad_post SET able='$dis' WHERE user_id='$disable_id'";
$post_disable =mysqli_query($conn,$ad_post_query);

if($disable){
	?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/onlinekenabecha/admin/all-user.php">
      

	<?php
}else{

}






 ?>