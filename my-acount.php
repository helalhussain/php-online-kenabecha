
<?php 
session_start();
include("server.php");

error_reporting(0);

$email =$_SESSION['email'];
if($email==true)
{

}else{
	header('location:login.php');
}
$query ="SELECT * FROM user WHERE user_email='$email'";
$data =mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);

?>
<?php include('header.php'); ?>
<div class="" style="">
<div class="container pt-5 ">
	<div class="area p-5 bg-info" style=" border-radius: 10px;">
	<div class="row  no-gutters" style="background:#fff;">
		
		<div class="col-lg-4">
			<div class="acount_list" style="height: 480px;">
				<ul class="list-group list-group-flush">

			  	   <li class="list-group-item d-flex bg-light active justify-content-between align-items-center">
				    <h4 class="text-ceter font-weight-bold text-info">My account</h4>
				   
				  </li>
				  	<a href="#" title="">
					  	<li class="list-group-item text-success d-flex font-weight-bold justify-content-between align-items-center">
					  	 My Profile
					    <span class="badge badge-success badge-pill "><i class="fa fa-arrow-right"></i></span>
					  </li>
				  	</a>
					  <a href="my-post.php" title="">
					  	<li class="list-group-item font-weight-bold d-flex text-primary justify-content-between align-items-center">
					  	 My Post
					    <span class="badge badge-primary badge-pill"><i class="fa fa-arrow-right"></i></span>
					  </li>
				  	</a>
				  	<a href="add-product.php" title="">
					  	<li class="list-group-item font-weight-bold d-flex text-primary justify-content-between align-items-center">
					  	 Ad product
					    <span class="badge badge-primary badge-pill"><i class="fa fa-arrow-right"></i></span>
					  </li>
				  	</a>
					<a href="my-inbox.php" title="">
					  <li class="list-group-item font-weight-bold d-flex text-primary justify-content-between align-items-center">
					  	 Inbox
					    <span class="badge badge-primary badge-pill"><i class="fa fa-arrow-right"></i></span>
					  </li>
				  	</a>
				  	<a href="my-outbox.php" title="">
					  <li class="list-group-item font-weight-bold d-flex text-primary justify-content-between align-items-center">
					  	 Outbox
					    <span class="badge badge-primary badge-pill"><i class="fa fa-arrow-right"></i></span>
					  </li>
				  	</a>
				  	<a href="setting.php" title="">
					  	<li class="list-group-item font-weight-bold d-flex text-primary justify-content-between align-items-center">
					  	 Settings
					    <span class="badge badge-primary badge-pill"><i class="fa fa-arrow-right"></i></span>
					  </li>
				  	</a>
				</ul><h2></h2>
			</div>
		</div>
		<div class="col-lg-8 mb-2" style="background: #fff;">
			<div class="row">
				<div class="col-lg-1">				
				</div>
				<div class="col-lg-8">
								<div class="profile p-4" style="">
				<h4 class="text-success">My Profile</h4><hr>
                <div class="card pt-3" style="width:22rem; text-align:center; box-shadow:5px 5px 5px green; margin:auto;">
                
				  <img class="card-img-top  " src="<?php echo $result['user_image']; ?>" alt="Card image cap" style="width:180px;height:180px;border-radius: 50%!important; text-align:center; border:3px solid green; margin:auto;">
				  <div class="card-body">
				    <h5 class="card-title text-success font-weight-bold">Name : <?php echo $result['user_first_name']; ?> &nbsp;<?php echo  $result['user_last_nam'];  ?></h5>
				    <h6 class="card-title text-success font-weight-bold">Date of birth : <?php echo $result['date_of_birth'];?></h6>
				  
				    <h6 class="card-title text-success font-weight-bold">Gender: <?php echo $result['gender']; ?></h6>    
				  </div>
				</div>
	</div>
				</div>
				<div class="col-lg-3 ">
					<a href="edit-account.php?user_id = $result[user_id]" class="btn btn-info mt-5">Edit profile</a>
					<a href="logout.php" class="btn btn-info mt-5">Logout</a>
					
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
<br><br>
</div>
<?php include("footer.php"); ?>