
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
include("header.php");
 ?>
<div class="" style="">
<div class="container  pt-5 ">
	<div class="area bg-info p-5" style="background:#e7edee; border-radius: 10px;">
	<div class="row  no-gutters" style="background:#fff; box-shadow: 10px 5px 10px #e7edee;">
		
		<div class="col-lg-4">
			<div class="acount_list" style="">
				<ul class="list-group list-group-flush">

			  	   <li class="list-group-item bg-white text-info d-flex text-black active justify-content-between align-items-center">
				    <h4 class="text-ceter font-weight-bold ">My Account</h4>
				    
				  </li>
				  	<a href="my-acount.php" title="">
					  	<li class="list-group-item d-flex font-weight-bold text-primary justify-content-between align-items-center">
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
					  	<li class="list-group-item text-success font-weight-bold d-flex justify-content-between align-items-center">
					  	 Ad product
					    <span class="badge badge-success badge-pill"><i class="fa fa-arrow-right"></i></span>
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
			<div class="profile p-4" style="">
				<h4 class="text-success">Ads product</h4><hr>
				<div class="postproduct pt-5 text-center">
					<!------------------------------------------------------->
					<a href="ad-post-details.php" class="btn btn-info">Ad your product</a><br><br>
					
						
	                	</div>
	                 </div>
                </div>
    				
    
    			</div>
    		</div>
    	</div>
    </div>
	

<!-------------------------------->


				
				</div>
			</div>
		</div>
	</div>
	</div>
</div><br><br>
</div>

<?php include("footer.php"); ?>