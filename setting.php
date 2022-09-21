

 
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
<?php 	
	include("header.php");
 ?>
<div class="" style="">
<div class="container pt-5 ">
	<div class="area bg-info p-5" style=" border-radius: 10px;">
	<div class="row  no-gutters" style="background:#fff;">
		
		<div class="col-lg-4">
			<div class="acount_list" style="">
				<ul class="list-group list-group-flush">

			  	   <li class="list-group-item bg-white d-flex text-black active justify-content-between align-items-center">
				    <h4 class="text-ceter text-info font-weight-bold">My Account</h4>
				   
				  </li>
				  	<a href="my-acount.php" title="">
					  	<li class="list-group-item text-primary d-flex font-weight-bold justify-content-between align-items-center">
					  	 My Profile
					    <span class="badge badge-primary badge-pill "><i class="fa fa-arrow-right"></i></span>
					  </li>
				  	</a>
					  <a href="my-post.php" title="">
					  	<li class="list-group-item font-weight-bold text-primary d-flex justify-content-between align-items-center">
					  	 My Post
					    <span class="badge badge-primary badge-pill"><i class="fa fa-arrow-right"></i></span>
					  </li>
				  	</a>
				  	<a href="add-product.php" title="">
					  	<li class="list-group-item font-weight-bold text-primary d-flex justify-content-between align-items-center">
					  	 Ad product
					    <span class="badge badge-primary badge-pill"><i class="fa fa-arrow-right"></i></span>
					  </li>
				  	</a>
					<a href="my-inbox.php" title="">
					  <li class="list-group-item font-weight-bold text-primary d-flex justify-content-between align-items-center">
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
					  	<li class="list-group-item text-success font-weight-bold d-flex justify-content-between align-items-center">
					  	 Settings
					    <span class="badge badge-success badge-pill"><i class="fa fa-arrow-right"></i></span>
					  </li>
				  	</a>

				</ul><h2></h2>
			</div>
		</div>
		<div class="col-lg-8 mb-2" style="background: #fff;">
			<div class="profile p-4" style="">
				<h4 class="text-info font-weight-bold">Settings</h4><hr>

				<!--------------------------------------------------------->
<?php 

if(isset($_POST['edit'])){

$current_pass = $_POST['currentpass'];
$new_pass = $_POST['newpass'];
$confirm_pass = $_POST['confirmpass'];    

}else{
  $current_pass ="";
$new_pass = "";
$confirm_pass = ""; 
}
?>  

				<div class="bg-white">
          <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
            <form action="" method="POST"><br>
                  
   
                                <h5 class="font-weight-bold text-info">Contact details</h5><hr>
                             
								<div class="row">
									<div class="col-lg-6">
									<label class="font-weight-bold text-info">Name</label><br>
									<h6><?php echo $result['user_first_name'];?></h6><h6><?php echo $result['user_last_nam'];?></h6><br>
                                
									</div>
									<div class="col-lg-6">
									<label class="font-weight-bold text-info">Email </label><br>
                                <span><?php echo $result['user_email'];?></span><br>
									</div>			
								</div>

								<br>
								<h5 class="font-weight-bold text-info ">Change password</h5><hr><br>
								<div class="form-group ">
                        <label class="font-weight-bold text-info">Current Password</label>
                          <div class="input-group-append">
                          <input type="password" class="form-control text-info password1" name="currentpass" value="<?php echo $current_pass; ?>" placeholder="Current Password" required>
                            <a class="eyepass1" href="#" style=" position: relative;left:-23px; top:8px;"><i class="fa fa-eye eye1" style="color:#009688;"></i></a>	
                          </div>
                          <span class="current_password_error"style="color:red;font-size:14px;"> </span>
                        </div>
                        <div class="form-group ">
                        <label class="font-weight-bold text-info">New Password</label>
                          <div class="input-group-append">
                          <input type="password" class="form-control text-info password1" name="newpass" value="<?php echo $new_pass; ?>"placeholder="New Password" required >
                            <a class="eyepass1" href="#" style=" position: relative;left:-23px; top:8px;"><i class="fa fa-eye eye1" style="color:#009688;"></i></a>	
                          </div>
                          <span class="new_password_error"style="color:red;font-size:14px;"> </span>
                        </div>
                        <div class="form-group ">
                        <label class="font-weight-bold text-info" >Confirm Password</label>
                          <div class="input-group-append">
                          <input type="password" class="form-control text-info password1" name="confirmpass" value="<?php echo $confirm_pass; ?>" placeholder="Confirm Password" required>
                            <a class="eyepass1" href="#" style=" position: relative;left:-23px; top:8px;"><i class="fa fa-eye eye1" style="color:#009688;"></i></a>	
                          </div>
                          <span class="confirm_password_error"style="color:red;font-size:14px;"> </span>
                        </div>
                            <div class="form-group">
                          <button class="btn btn text-white" style="font-weight:bold;background:#009688;" type="submit" name="edit">Change Password</button>
                      </div>
            </form><br><br>
            </div>
            <div class="col-lg-1"></div>
          </div>
          </div>
			</div>
		</div>
	</div>
	</div>
</div><br><br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
if(isset($_POST['edit'])){

$current_pass = $_POST['currentpass'];
$new_pass = $_POST['newpass'];
$confirm_pass = $_POST['confirmpass'];

$user_query = "SELECT * FROM user";
$query_connect = mysqli_query($conn,$user_query);
$user_data = mysqli_fetch_assoc($query_connect);
$user_id=$result['user_id'];
echo $user_id;

if($result['user_password'] == $current_pass){
  if($new_pass == $confirm_pass){
  
	   $edit_query = "UPDATE user SET user_password='$new_pass', user_confirm_password='$confirm_pass' WHERE user_id='$user_id'";
	   $edit =mysqli_query($conn,$edit_query);
	   echo "	<script> alert('Edit password successfull');</script>";
	   
  }else{
	echo "<script>$('.new_password_error').html('Password are not match');</script>";
	echo "<script>$('.confirm_password_error').html('Password are not match');</script>";
  }
}else{
echo "<script>$('.current_password_error').html('Your password is rong');</script>";
}


}

?>

</div>
<?php include("footer.php"); ?>
