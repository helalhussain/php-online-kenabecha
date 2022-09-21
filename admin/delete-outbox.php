<?php 
include("server.php");


$m=$_GET['m_id'];

$post_query ="DELETE FROM message WHERE m_id='$m'";

$delete =mysqli_query($conn,$post_query);

if($delete){
	?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/onlinekenabecha/admin/admin-outbox.php">

	<?php
}else{

}






 ?>