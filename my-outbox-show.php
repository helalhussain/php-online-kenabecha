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
	include("server.php");
	include("header.php");
 ?>
<div class="" style="">
<div class="container pt-5 ">
	<div class="area p-5 bg-info" style=" border-radius: 10px;">
	<div class="row  no-gutters" style="background:#fff;">
		
		<div class="col-lg-4">
			<div class="acount_list" style="height: 480px;">
				<ul class="list-group list-group-flush">

			  	   <li class="list-group-item d-flex bg-light active justify-content-between align-items-center">
				    <h4 class="text-ceter font-weight-bold text-info">My Account</h4>
				   
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
					  <li class="list-group-item font-weight-bold d-flex text-success justify-content-between align-items-center">
					  	 Outbox
					    <span class="badge badge-success badge-pill"><i class="fa fa-arrow-right"></i></span>
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
				<div class="col-lg-10">
					<h2 class="text-success pt-2">Outbox</h2><hr>
	    	<!--------------------------------all-messages------------------------------>
            <main class="app-content">
    

     
      <!-----------------list-header---------------------->


      <ul class="list-group">
                <div class="inbox-lists" style="height:70vh; width:auto; overflow:scroll;">
                    <br><br>

                    <div class="row bg-white p-3" style="border-bottom:1px solid #009688;">
                        
<?php
$m_id=$_GET['m_id'];
$mess_show ="SELECT * FROM message WHERE m_id='$m_id'";
$data_show =mysqli_query($conn,$mess_show );
$mess_result = mysqli_fetch_assoc($data_show);
$user_id = $mess_result['user_id'];

$seller_id = $mess_result['seller_id'];

$mess_user ="SELECT * FROM user WHERE user_id='$seller_id'";
$data_user =mysqli_query($conn,$mess_user);
$mess_user = mysqli_fetch_assoc($data_user);

?>
<div class="col-lg-8">
                        <ul class="message">
                            <div class="user-image">
                            <img src="<?php echo $mess_user['user_image']; ?>"class="" style="width:50px;height:50px;border-radius:50%" alt="">
                           <b style="font-size:18px;"><?php echo $mess_user['user_email'] ;?></b><br>
                            <h6 class="pl-5"><?php echo $mess_user['user_first_name'] ;?> <?php echo $mess_user['user_last_nam'] ;?></h6>
                            </div>
                            
                         </ul>
                        </div>
                       
                        <div class="col-lg-4 ">
						<p><?php echo $mess_result['date'] ;?></p>
                        </div><hr style="color:#009688;">
                    </div>
                    <div class="mess p-5 bg-white">
                    <div class="inbox-lists">
                    <p class="font-weight-bold" style="font-size:19px;"> <?php echo $mess_result['message']; ?></p>
                    </div>
             
               </div>
                </div>
              </ul>
                </div>
              
              </div>

    
      		<div class="col-lg-1"></div>
      	</div>
    </main>
     











				</div>
			</div>
		</div>
	</div>
	</div>
</div>
</div><br><br>
<?php include("footer.php"); ?>