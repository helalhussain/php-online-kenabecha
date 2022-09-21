<?php include('header.php'); ?>

<div class="container pt-4">
			<div class="singin p-4 " style="background:#e7edee; border-radius: 10px;">
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<div class="card p-5" style="box-shadow: 5px 10px 10px lightblue;border-radius: 12px">
							<h2 class="text-center  bg-info text-white p-3" style="border-radius: 10px;">Forgot Password ?</h2>	
						<form method="POST">
			<br>
				           <div class="form-group">
   								 <label class="font-weight-bold text-info">Enter Your Email</label>
    							  <div class="input-group-append">
									  	 <button class="btn btn-info"><i class="fa fa-emil">@</i></button>
									  <input type="email" class="form-control" name="reset_email" placeholder="Email" >
									   
							</div>
  							 </div>
  							<br>
							<div class="form-group text-center">
						    	  <button class="btn btn-info text-white" style="font-weight:bold;"type="submit" name="login">Reset Password</button>
						    </div>
						  	<div class="form-group text-center" >
						    	  <a class=" font-weight-bold" href="login.php" style="font-size:19px;" >Back to login</button>
						    </div>

						</form>
					</div>
				</div>
				<div class="col-lg-3"></div>
			</div>
		</div>
	</div>


<br>
<?php


if(isset($_POST['login'])){

	$email = $_POST['reset_email'];
	echo $email;


}











?>

<?php include('footer.php'); ?>