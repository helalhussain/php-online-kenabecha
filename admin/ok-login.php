<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
       <link rel="stylesheet" href="assets/css/ok-admin.css" rel="stylesheet">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login - Vali Admin</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1></h1>
      </div>
      <h1 class="text-center text-light"></h1>
      <div class="login-box">
        <form class="login-form" method="POST">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>LOG IN</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input type="email" class="form-control" name="admin-email"  placeholder="Email" autofocus required>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input type="password" class="form-control" name="admin-password"  placeholder="Password" required>
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <!-- <label>
                  <input type="checkbox"><span class="label-text"> </span>
                </label> -->
              </div>
              <p class="semibold-text mb-2"><a href="ok-reset.php" data-toggle="flip">Forgot Password ?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" name="login"><i class="fa fa-sign-in fa-lg fa-fw"></i>LOG IN</button>
          </div>
      </form>
      </div>
    </section>
<?php
include("server.php");
error_reporting(0);
session_start();

if(isset($_POST['login'])){
	$username = $_POST['admin-email'];
	$password = $_POST['admin-password'];

	

			if($username==null && $password == null){
				echo '<script>alert("Please fill up the form")</script>';
			}

			else{
			$query ="SELECT * FROM admin WHERE admin_email='$username' &&  admin_password='$password'";
			$data =mysqli_query($conn,$query);
			$total =mysqli_num_rows($data);
					
			if($total==1)
			{
				
				$_SESSION['admin-email']=$username;
				header("location:admin.php");
       

			}
			else{
       echo '<script>alert("Email or password rong")</script>';
				

			}
		}
		
	}

 ?>
  </body>
</html>