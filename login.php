<?php 
session_start();
include("server.php");

error_reporting(0);

$email =$_SESSION['email'];
if($email==true)
{
	header('location:my-acount.php');
}else{
	
}
$query ="SELECT * FROM user WHERE user_email='$email'";
$data =mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);
include("header.php");
?>

<?php
	
	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		
	}else{
		$email = "";
		$password = "";	
	}


?>
<div class="singin " style="background:#e7edee; ">

<div class="container pt-5">
			
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<div class="card p-5" style="box-shadow: 5px 10px 10px lightblue;border-radius: 12px">
						<h2 class="text-center  bg-info text-white p-3 " style="border-radius: 10px;">LOG IN</h2>		
						<div class=" " style=""> </div>
						<form method="POST">
							<div class="area pt-5">
							 <div class="form-group">
   								 <label class="font-weight-bold text-info">Your Email</label>
    							  <div class="input-group-append">
									  	 <button class="btn btn-info"><i class="fa fa-emil">@</i></button>
									  <input type="email" class="form-control" value="<?php echo $email; ?>" name="email" placeholder="Email" >
									   
									  </div>
  							 </div>
  								<div class="form-group ">
									 <label class="font-weight-bold text-info">Your Password</label>
									  <div class="input-group-append">
									  	 <button class="btn btn-info"><i class="fa fa-lock"></i></button>
									  <input type="password" class="form-control login_password" value="<?php echo $password; ?>" name="password" placeholder="Password" >
									    <a class="btn btn-info logineye" ><i class="fa fa-eye eyesee text-white"></i></a>
									  </div>
									  <a href="forget-password.php" class="pt-3"style="font-size:12px;" >Forgot Password ?</a>

							<div class="form-group pt-3">
						    	  <button class="btn btn-info text-white btn-top" name="login" style="font-weight:bold;" type="submit">LOG IN</button>
						    </div>
							<div class="form-group pt-2">
						    	  <a class="btn btn-info text-white btn-fixed " href="register.php" style="font-weight:bold; " name="singin">Create New Account</a>
						    </div>
							</div>

						</form>
					</div>
				</div>
				<div class="col-lg-3"></div>
			</div>
		</div>
	</div><br><br><br>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$('.logineye').click(function(){
			$('.eyesee').toggleClass('fa-eye-slash');
			var input = $('.login_password');
			if(input.attr('type') == 'password'){
				input.attr('type','text');
			}else{
				input.attr('type','password');
			}

		});
		
	});
	</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php 



include("server.php");
error_reporting(0);
session_start();


if(isset($_POST['login'])){
	$username = $_POST['email'];
	$password = $_POST['password'];
	$query ="SELECT * FROM user WHERE user_email='$username'";
	$data =mysqli_query($conn,$query);
	
	$ab =mysqli_fetch_assoc($data);

	

			if($ab['able']=='Disable'){
				
				echo '<script>alert("Your account is disable please contact us")</script>';
			}
			else{
			$query ="SELECT * FROM user WHERE user_email='$username' &&  user_password='$password'";
			$data =mysqli_query($conn,$query);
			$total =mysqli_num_rows($data);
					
			if($total==1)
			{	
				$_SESSION['email']=$username;
				header("location:my-acount.php");	


			}
			else{
				
				echo '<script>alert("User name or Password Incorrect")</script>';
			}
		}
		
	}

	
?>


<?php include("footer.php"); ?>

