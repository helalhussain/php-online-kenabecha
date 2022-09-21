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
<?php include('header.php');?>
<?php 
if(isset($_POST['edit_profile'])){
     
	$first_name = $_POST['f_name'];
	$last_name =$_POST['l_name'];
	$birthdate = $_POST['birthdate'];
	$gender = $_POST['gender'];
	$phone =$_POST['phone'];
	$location =$_POST['location'];
			

			
	}else{
 
		$first_name ="";
		$last_name ="";
		$birthdate = "";
		$gender = "";
		$phone ="";
		$location ="";
	}

	

	?>

<div class="singin " style="background:#e7edee; ">
<div class="container pt-4" >
			<div class="singin p-4 " style=" border-radius: 10px;">
			<div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-8">
					<div class="card p-5" style="box-shadow: 5px 10px 10px lightblue;">
						<h2 class="text-center  bg-info text-white p-3" style="border-radius: 10px;"> Edit Profile</h2>	
						<div class="singup-error-area pt-2 pb-2"></div>	
						<form action="" method="POST" enctype="multipart/form-data">
							<br>
							<div class="text-center">
								<img class="card-img-top " src="<?php echo $result['user_image'];?>" alt="Card image cap"
								 style="width:120px;height:120px;border-radius: 50%!important; text-align:center; border:1px solid blue; margin:auto;">
								
								<div class="row">
									<div class="col-lg-3"></div>
									<div class="col-lg-4">
									<img src="<?php echo $result['propic']; ?>" style="width:50px; height:auto;">
									<input type="file" name="uploadfile" class="btn btn-primary" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
				
									</div>
									<div class="col-lg-3"></div>
								</div>
								</div>
									<div class="row pt-5">
									<div class="col-lg-6">
									<div class="form-group">
   										 <label class="font-weight-bold text-info">Your First Name</label>
    									<input type="text" name="f_name" class="form-control text-info first_name" value="<?php echo $result['user_first_name'];?>"  placeholder="First Name" autocomplete="off">
											<span class="first_name_error"style="color:red;font-size:14px;"> </span>
									  </div>
								</div>
								<div class="col-lg-6">
								 <div class="form-group">
   										 <label class="font-weight-bold text-info">Your Last Name</label>
    									<input type="text" name="l_name" value="<?php echo $result['user_last_nam'];?>" class="form-control text-info last_name" placeholder="Last Name">
										<span class="last_name_error"style="color:red;font-size:14px;"> </span>
								   </div>
								</div>
							</div>
  							 <div class="row">
								<div class="col-lg-6">
									<div class="form-group ">
									 <label class="font-weight-bold text-info">Date Of Birth</label>
									 <div class="form-row hide-inputbtns text-info">
										<input class="birthdate form-control " name="birthdate" value="<?php echo $result['date_of_birth'];?>" type="date" placeholder="YYYY-MM-DD" data-date-split-input="true" />
										<span class="birthdate_error"style="color:red;font-size:14px;"> </span>
										</div>
								
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group ">
									<label class="font-weight-bold text-info">Gender</label><br>
									<select class="form-control text-info  gender" name="gender">
									<option value="">Gender</option>
										 <option value="male">Male</option>
									 	<option value="female">Female</option>
									 	<option value="others">Others</option>
									 </select>
									 <span class="gender_error"style="color:red;font-size:14px;"> </span>

									</div>
								</div>
							</div>

                            <div class="row">
								<div class="col-lg-6">
                                <div class="form-group ">
									 <label class="font-weight-bold text-info">Phone No</label>
									  <div class="input-group-append">
									  <input type="number" class="form-control text-info" value="<?php echo $phone ?>" name="phone" placeholder="Phone no" >
									  <span class="phone_no_error"style="color:red;font-size:14px;"> </span>
									  </div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group ">
                                    <label class="font-weight-bold text-info">Location</label>
									<select class="form-control text-info  gender" name="location">
									<option value="">Location</option>
									 	<option value="Dhaka">Dhaka</option>
									 	<option value="Chittogram">Chattogram</option>
										 <option value="Sylhet">Sylhet</option>
									 	<option value="Khulna">Khulna</option>
									 	<option value="Borishal">Borishal</option>
										 <option value="Rangpur">Rangpur</option>
									 	<option value="Rajshahi">Rajshahi</option>
									 	<option value="Mymenshingh">Mymenshingh</option>
										 <option value="Comilla">Comilla</option>
									 </select>
									 <span class="location_error"style="color:red;font-size:14px;"> </span>
                				</div>
								</div>
							</div>
							<div class="form-group">
						    	  <button class="btn btn-info text-white" style="font-weight:bold;"type="submit" name="edit_profile">Edit</button>
								  <a href="my-acount.php" class="btn btn-danger text-white" style="font-weight:bold;">Cancel</a>
						    </div>
							
						</form>
					</div>
				</div>
				<div class="col-lg-2"></div>
			</div>
		</div>
	</div><br><br>
	</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php

	if(isset($_POST['edit_profile'])){

$query ="SELECT * FROM user WHERE user_email='$email'";
$data =mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);

		$user_id = $result['user_id'];
		$user_email = $result['user_email'];
		$user_password = $result['user_password'];
		$user_confirm_password = $result['user_confirm_password'];

					$first_name = $_POST['f_name'];
					$last_name =$_POST['l_name'];
					$birthdate = $_POST['birthdate'];
					$gender = $_POST['gender'];
					$phone =$_POST['phone'];
					$location =$_POST['location'];

					$filename = $_FILES['uploadfile']['name'];
					$tempname =$_FILES['uploadfile']['tmp_name'];
					$folder ="image/".$filename;
					move_uploaded_file($tempname,$folder);
					
					if($first_name  == null){
						echo "<script>$('.first_name_error').html('You must fill out this field.');</script>";
					}
					else if(strlen($first_name) < 4 || strlen($first_name) > 25){
						echo "<script>$('.first_name_error').html('Sub area must be 4 to 25 digits.');</script>";
					}
										
					if($last_name  == null){
						echo "<script>$('.last_name_error').html('You must fill out this field.');</script>";
					}
					else if(strlen($last_name) < 4 || strlen($last_name) > 25){
						echo "<script>$('.last_name_error').html('Sub area must be 4 to 25 digits.');</script>";
					}
										
					if($gender  == null){
						echo "<script>$('.gender_error').html('You must fill out this field.');</script>";
					}

					if($first_name != null && $last_name != null && $gender != null){
						$edit_query ="UPDATE user SET user_id='$user_id', user_first_name='$first_name',user_last_nam='$last_name',
						user_email='$user_email', user_password='$user_password',user_confirm_password='$user_confirm_password',gender='$gender', date_of_birth='$birthdate',phone_no='$phone', user_division='$location',
						user_district='$location', user_image='$folder' WHERE user_id='$user_id'";
						$query = mysqli_query($conn,$edit_query);
															
						  if($query){
					          ?>
					            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/onlinekenabecha/my-acount.php">

					          <?php
					        }else{

					        }
								
					}
				

										
								

							
						}


					?>




    <?php include('footer.php'); ?>



    