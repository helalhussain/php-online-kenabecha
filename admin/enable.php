
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php


include("server.php");


$enable_id=$_GET['user_id'];

$en = "Disable";
$enable_query = "UPDATE user SET able='$en' WHERE user_id='$enable_id'";
$enable =mysqli_query($conn,$enable_query);

$ad_post_query = "UPDATE ad_post SET able='$en' WHERE user_id='$enable_id'";
$post_disable =mysqli_query($conn,$ad_post_query);


if($enable){
	?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/onlinekenabecha/admin/all-user.php">
       

	<?php
}else{

}






 ?>