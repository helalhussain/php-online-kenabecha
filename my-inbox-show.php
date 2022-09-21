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
					  <li class="list-group-item font-weight-bold d-flex text-success justify-content-between align-items-center">
					  	 Inbox
					    <span class="badge badge-success badge-pill"><i class="fa fa-arrow-right"></i></span>
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
				<div class="col-lg-10">
					<h2 class="text-success pt-2">Inbox</h2><hr>
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

$mess_show_r ="SELECT * FROM user WHERE user_id='$user_id'";
$data_show_r =mysqli_query($conn,$mess_show_r);
$mess_user_r = mysqli_fetch_assoc($data_show_r);


?>
<div class="col-lg-8">
                        <ul class="message">
                            <div class="user-image">
                            <img src="<?php echo $mess_user_r['user_image']; ?>" class="pr-2" style="width:50px;height:50%;border-radius:50%" alt="">
                           <b style="font-size:18px;"><?php echo $mess_result['from_email'] ;?></b>
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
                <!---------------------Model-start---------------------->


<div class="container">
    	<div class="row mt-4">
    		<div class="col">
    			<div class="card" style="border:none!important;">

    				<div  class="text-center "><button  class="btn btn-success text-white" data-toggle="modal" data-target="#bloodModal">Reply</button></div>
           
    				<div class="modal fade" id="bloodModal" tabindex="-1" role="dialog" aria-labelledby="bloodModalLabel" aria-hidden="true">
	                  <div class="modal-dialog modal-lg" role="document">
	                    <div class="modal-content">
		                    <div class="modal-header">
		                      <h4 class="modal-title text-info font-weight-bold">Reply</h4>
		                      <button class="close" data-dismiss="modal">&times;</button>
		                    </div>
			                 <form class="mt-4 col-lg-8 mx-auto" method="POST">
                             <div class="form-group">
			    					<label class="text-info font-weight-bold">Email</label> : <strong class="text-primary"><?php echo $mess_result['from_email'] ;?></strong><br>
			    						
			    			
			    				</div>
			    				<div class="form-group">
			    					<label class="text-info font-weight-bold">Message</label>
			    					<textarea class="form-control" type="" id="reporttex" name="message" placeholder="Message" required></textarea>
                                    <span class="report_error"style="color:red;font-size:14px;"> </span>
                                </div>				
			    				<button class="btn btn-info my-2" name="send_message" id="reportbtn" type="submit">Reply</button><bt>
			    			</form>

	                	</div>
	                 </div>
                </div>
</div>
</div>
</div>
</div>

<?php
$email =$_SESSION['email'];
                      
                        if(isset($_POST['send_message'])){

                            $query ="SELECT * FROM user WHERE user_email='$email'";
                             $data =mysqli_query($conn,$query);
                             $userdata = mysqli_fetch_assoc($data);

                             // $seller_query ="SELECT * FROM user WHERE user_email='$email'";
                             // $seller_data =mysqli_query($conn,$seller_query);
                             // $seller_sql = mysqli_fetch_assoc($seller_data);
                            
$m_id=$_GET['m_id'];
$mess_show ="SELECT * FROM message WHERE m_id='$m_id'";
$data_show =mysqli_query($conn,$mess_show );
$mess_result = mysqli_fetch_assoc($data_show);


                             $user_post=$_GET['post_id'];
                             $qu ="SELECT * FROM ad_post WHERE post_id='$user_post'";
                             $da =mysqli_query($conn,$qu);
                             $ad_data = mysqli_fetch_assoc($da);

                             $post_id = $mess_result['post_id'];
                             $seller_id =  $mess_result['user_id'];
                             $user_id = $userdata['user_id'];
                             $time =date("h:m:a d-m-Y");
                             

                        $email =$_SESSION['email'];
                          $message = $_POST['message'];
                
                            $sql_mess = "INSERT INTO message VALUES(NULL,'$user_id','$email', '$post_id','$seller_id','$message','$time')";
								$query = mysqli_query($conn,$sql_mess);

                                echo "<script>alert('Message send successfull');</script>";
								
                            
                        }
                        

                        ?>
                <!-----------------------------End-model -------------------------->



              </ul>
                </div>
              
              </div>

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