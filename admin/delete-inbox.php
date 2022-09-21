<?php 
include("server.php");


$report=$_GET['report_no'];

$post_query ="DELETE FROM report_ad WHERE report_no='$report'";

$delete =mysqli_query($conn,$post_query);

if($delete){
	?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/onlinekenabecha/admin/admin.php">

	<?php
}else{

}






 ?>