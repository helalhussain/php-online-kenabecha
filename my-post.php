
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

                      <a href="my-acount.php" title="">
					  	<li class="list-group-item text-success d-flex font-weight-bold justify-content-between align-items-center">
					  	 My Post
					    <span class="badge badge-success badge-pill "><i class="fa fa-arrow-right"></i></span>
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
					  	<li class="list-group-item text-primary font-weight-bold d-flex justify-content-between align-items-center">
					  	 Settings
					    <span class="badge badge-primary badge-pill"><i class="fa fa-arrow-right"></i></span>
					  </li>
				  	</a>

				</ul><h2></h2>
			</div>
		</div>
		<div class="col-lg-8 mb-2" style="background: #fff;">
			<div class="profile p-4" style="">
				<h4 class="text-info font-weight-bold">My Post</h4><hr>
				<!-----------------------All Posts---------------------------------->
		<div class="bg-white">
          <div class="row"> 
		  <?php
                 $qu ="SELECT * FROM ad_post ORDER BY post_id DESC";
                 $d =mysqli_query($conn,$qu);
                 $row=mysqli_num_rows($d);
                 while($res =mysqli_fetch_assoc($d)){
                    if($res['user_email'] == $result['user_email'] ){
						
                   ?>     
          <div class="col-lg-6 pb-3">
		  <div class="card bg-light pt-2 pr-2 pl-2">
			  <div class="row">
				  <div class="col-lg-10">
					  <div class="row">
						  <div class="col-lg-3">
						  <img class="card-img-top" src="<?php echo $result['user_image']; ?>" style="height:40px; border:1px solid black; width:40;border-radius:50%;" alt="">
						  </div>
						  <div class="col-lg-8" style="">
							  <h6 class="text-info"style="font-size:13px;"><strong><?php echo $result['user_first_name'];?></strong> <strong><?php echo $result['user_last_nam']; ?></strong></h6>
							  <p class="card-text text-left"><?php echo $res['time']; ?> </p>
						  </div>
					  </div>
				  </div><br><br>
				  <div class="col-lg-2">
				  <div class="text-right">	
				  			<div class="nav-item dropdown text-right">
        								<a class="nav-link text-info"  data-toggle="dropdown" href="#"><i style="font-size:18px;"class="fa 
        								 fa-ellipsis-v" aria-hidden="true" ></i></a>
  											<ul class="dropdown-menu mega-menu text-center" aria-labelledby="navbarDropdown">
  										<?php echo "<a class='dropdown-item btn btn-info' href='delete-my-ads.php?post_id=$res[post_id]' onclick='return checkdelete()'>Delete</a>";?>
										 <?php echo "<a class='dropdown-item' class='btn-btn-info' href='edit-ad.php?post_id=$res[post_id]' >Edit</a>";?>

	       						    </ul>
     					   </div>
     				 </div> 
				  </div>
			  </div>          
                        <img class="card-img-top" src="<?php echo $res['image_1']; ?>" style="height:170px; " alt="">
                            <div class="card-body">
							<h6 class="card-title  font-weight-bold" style=" font-size:16px;"><?php echo $res['title'];?></h6>
								<p class="card-text text-primary font-weight-bold" style="text-transform: capitalize; font-size:16px;"><?php echo $res['category'];?>,&nbsp;<?php echo $res['sub_category']; ?></p>
                                <p class="card-text font-weight-bold" style="text-transform: capitalize; font-size:16px;"><?php echo $res['user_division']; ?>,&nbsp;<?php echo $res['user_district']; ?></p>
                                 	
								<div class="row">
									<div class="col-lg-8"><h6 class="card-text text-primary pt-1 pb-1">Tk <?php echo $res['price']; ?> </h6></div>
									<div class="col-lg-4">
										<div class="text-right">
							
										<?php echo "<a class='btn btn-info' href='product-details.php?post_id=$res[post_id]'>View</a>";?>
										</div>
									</div>
								</div>					
                            </div>
						
                </div>
            </div>
			<?php }?>

			<?php }?>
    

          </div>
			</div>
		</div>
	</div>
	</div>
</div><br><br>
</div>

<script>
	function checkdelete(){
			return confirm('Are you sure???');
  }
</script>

<?php include("footer.php"); ?>