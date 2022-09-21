<?php 
include("server.php");


$m_id=$_GET['m_id'];

$m_query ="DELETE FROM message WHERE m_id='$m_id'";

$delete =mysqli_query($conn,$m_query);

if($delete){
	?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/onlinekenabecha/my-inbox.php">

	<?php
}else{

}






 ?>