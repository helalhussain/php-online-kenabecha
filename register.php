<?php include('header.php'); ?>
<?php include('server.php'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<?php
		if(isset($_POST['signup'])){
			$first_name = $_POST['firstname'];
			$last_name = $_POST['lastname'];
			$email = $_POST['email'];
			$birthdate = $_POST['birthdate'];
			$gender = $_POST['gender'];
			$nullgender = $_POST['gender'];
			$password = $_POST['password'];
			$confirm_password = $_POST['confirmpasword'];

			

			
	}else{
			$first_name = "";
			$last_name = "";
			$email = "";
			$birthdate = "";

			$gender = "Gender";
			$nullgender = "";
			$password = "";
			$confirm_password = "";
	}

	

	?>
<!doctype html>
<html lang="en">
  <head>
	<title>Online Kenabecha</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <!-- Font Awesome Css -->
   <link href="assets/css/font-awesome.min.css" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
     
</head>
  <body>
	  

<div style="background:#e7edee;">
<div class="container pt-4">

			<div class="singin p-4 " style=" border-radius: 10px;">
			<div class="row">
				<div class="col-lg-2">
					<a href="onlinekenabecha.php" class="btn btn-info">Back</a>
				</div>
				<div class="col-lg-8">
					<div class="card p-5" style="box-shadow: 5px 10px 10px lightblue;">
						<h2 class="text-center  bg-info text-white p-3" style="border-radius: 10px;"> SIGN UP</h2>	
						<div class="singup-error-area pt-2 pb-2"></div>	
						<form method="POST">
							<div class="row pt-5">
								<div class="col-lg-6">
									<div class="form-group">
   										 <label class="font-weight-bold text-info">Your First Name</label>
    									<input type="text" class="form-control text-info first_name"value="<?php echo $first_name; ?>" name="firstname" placeholder="First Name" autocomplete="off" required>
											<span class="first_name_error"style="color:red;font-size:14px;"> </span>
									  </div>
								</div>
								<div class="col-lg-6">
								 <div class="form-group">
   										 <label class="font-weight-bold text-info">Your Last Name</label>
    									<input type="text" class="form-control text-info last_name"  value="<?php echo $last_name; ?>" name="lastname" placeholder="Last Name" required>
										<span class="last_name_error"style="color:red;font-size:14px;"> </span>
								   </div>
								</div>
							</div>
							 <div class="form-group">
   								 <label class="font-weight-bold text-info">Your Email</label>
    							<input type="email" class="form-control text-info email" value="<?php echo $email; ?>" name="email" autocomplete="off" placeholder="Email" required>
								<span class="email_error"style="color:red;font-size:14px;"> </span>
  							 </div>
  							 <div class="row">
								<div class="col-lg-6">
									<div class="form-group ">
									 <label class="font-weight-bold text-info">Date Of Birth</label>

									 <div class="form-row hide-inputbtns text-info">
										<input class="birthdate form-control " value="<?php echo $birthdate; ?>" name="birthdate" type="date" placeholder="YYYY-MM-DD" data-date-split-input="true" required />
										<span class="birthdate_error"style="color:red;font-size:14px;"> </span>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group ">
									<label class="font-weight-bold text-info">Gender</label><br>
									<select class="form-control text-info  gender" name="gender" required>
										<option value="<?php echo $nullgender ?>"><?php echo $gender; ?></option>
									 	<option value="Male">Male</option>
									 	<option value="Female">Female</option>
									 	<option value="Others">Others</option>

									 </select>
									 <span class="gender_error"style="color:red;font-size:14px;"> </span>
	
									</div>
								</div>
							</div>
  							 <div class="row">
								<div class="col-lg-6">
									<div class="form-group ">
									 <label class="font-weight-bold text-info">Password</label>
									  <div class="input-group-append">
									  <input type="password"  value="<?php echo $password; ?>" class="form-control text-info password1" name="password" autocomplete="off" placeholder="Password" required >
									    <a class="eyepass1" style=" position: relative;left:-23px; top:8px;"><i class="fa fa-eye eye1 text-info"></i></a>	
									  </div>
									  <span class="password_error"style="color:red;font-size:14px;"> </span>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group ">
									 <label class="font-weight-bold text-info">Confirm Password</label>
									  <div class="input-group-append">
									  <input type="password" class="form-control text-info confirm_password password2" value="<?php echo $confirm_password; ?>" autocomplete="off" name="confirmpasword" placeholder="Confirm Password" required>
									  <a class="eyepass2" style=" position: relative;left:-23px; top:8px;" ><i class="fa fa-eye eye2 text-info"></i></a>
									  </div>
									  <span class="confirm_password_error"style="color:red;font-size:14px;"> </span>
									</div>
								</div>
							</div>
							<div class="form-group">
						    	  <button class="btn btn-info text-white" style="font-weight:bold;"type="submit" name="signup">SIGN UP</button>

						    </div>

							<div class="form-group">
						    	  <a class="font-weight-bold text-info" href="login.php" style="font-weight:bold;"type="submit">Log in</a>
						    </div>

						</form>
					</div>
				</div>
				<div class="col-lg-2"></div>
			</div>
		</div>
	</div></br><br>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$('.eyepass1').click(function(){
			$('.eye1').toggleClass('fa-eye-slash');
			var input = $('.password1');
			if(input.attr('type') == 'password'){
				input.attr('type','text');
			}else{
				input.attr('type','password');
			}

		});
		
	});
	$(document).ready(function(){
		
		$('.eyepass2').click(function(){
			$('.eye2').toggleClass('fa-eye-slash');
			
			var input2 = $('.password2');
			if(input2.attr('type') == 'password'){
				input2.attr('type','text');
			}else{
				input2.attr('type','password');
			}



		});
	});

</script>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<?php
		if(isset($_POST['signup'])){
			$first_name = $_POST['firstname'];
			$last_name = $_POST['lastname'];
			$email = $_POST['email'];
			$birthdate = $_POST['birthdate'];
			$gender = $_POST['gender'];
			$password = $_POST['password'];
			$confirm_password = $_POST['confirmpasword'];

			$_SESSION["first_name"] = $_POST['firstname'];
			$_SESSION["last_name"] = $_POST['lastname'];
			$_SESSION["email"] = $_POST['email'];
			$_SESSION["birthdate"] = $_POST['birthdate'];
			$_SESSION["gender"] = $_POST['gender'];
			$_SESSION["password"] = $_POST['password'];
			$_SESSION["confirm_password"] = $_POST['confirmpasword'];
			$able = "able";

			$query ="SELECT * FROM user Where user_email='$email'";
			$data =mysqli_query($conn,$query);
			$total =mysqli_fetch_assoc($data);

			if($total['user_email'] == $email){
				echo "<script>$('.email_error').html('Your email is available');</script>";
			}
		
			
		elseif(strlen($first_name) < 3 || strlen($first_name) > 12){
				  echo "<script>$('.first_name_error').html('first name must be 3 to 12 digits');</script>";
				 }
			 elseif(strlen($last_name) < 3 || strlen($first_name) > 12) {
					echo "<script>$('.last_name_error').html('last name must be 3 to 12 digits');</script>";
				   }
				   
		    // elseif($email == $total['user_email']){
			//  		echo "<script>$('.email_error').html('This email already available');</script>";
			//    }
			elseif(strlen($password) < 5 || strlen($password) > 20) {
					echo "<script>$('.password_error').html('Password must be 6 to 20 digits');</script>";
				   }
			elseif(strlen($confirm_password) < 5 || strlen($confirm_password) > 20) {
					echo "<script>$('.confirm_password_error').html('Password must be 6 to 20 digits');</script>";
				   }
			elseif($password != $confirm_password){
					echo "<script>$('.password_error').html('Password are not equel');</script>";
					echo "<script>$('.confirm_password_error').html('Password are not equel');</script>";
							
					}
			else{
							

								$sql = "INSERT INTO user VALUES(NULL,'$first_name','$last_name','$email','$password','$confirm_password','$gender','$birthdate','','','','','$able')";



								$query = mysqli_query($conn,$sql);


								   if($query){
          ?>
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/onlinekenabecha/login.php">

          <?php
        }else{

        }
        
								
								

								// echo "	<script>
								// swal({
								//   title: 'Success',
								//   text: 'Account Create Successful!',
								//   icon: 'success',
								//   button: 'Ok',
								// });
								// </script>";
							
							
							
						
					}
					
					
				

			


			
		}

	?>



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
