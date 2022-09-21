<?php include('admin-header.php'); ?>
<?php 
session_start();
include("server.php");

error_reporting(0);

$email =$_SESSION['admin-email'];
if($email==true)
{

}else{
	header('location:ok-login.php');
}
$view_user_id=$_GET['user_id'];

?>
<!--------------------sidebar------------------------>

 <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <div>
          <p class="app-sidebar__user-name">Online kenabecha</p>
          <p class="app-sidebar__user-designation"></p>
        </div>
      </div>
      <ul class="app-menu">
       
        <li class="treeview"><a class="app-menu__item" href="admin.php" data-toggle="treeview"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">Inbox</span><i class="treeview-indicator fa fa-angle-right"></i></a>

        </li>
        <li class="treeview"><a class="app-menu__item" href="admin-outbox.php"><i class="app-menu__icon fa fa-send"></i><span class="app-menu__label">Outbox</span><i class="treeview-indicator fa fa-angle-right"></i></a></li>

        <li class="treeview"><a class="app-menu__item" href="admin-replay.php" data-toggle="treeview"><i class="app-menu__icon fa fa-plus"></i><span class="app-menu__label">Compose Message</span><i class="treeview-indicator fa fa-angle-right"></i></a>

        </li>
        <li class="treeview" style="background: black;"><a class="app-menu__item" href="all-user.php" data-toggle="treeview"><i class="app-menu__icon fa fa-user "></i><span class="app-menu__label">All users</span><i class="treeview-indicator fa fa-angle-right"></i></a>

        </li>
 
        <li class="treeview"><a class="app-menu__item" href="admin-setting.php" data-toggle="treeview"><i class="app-menu__icon fa fa-cog fa-lg"></i><span class="app-menu__label">Settings</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        </li>


      </ul>
    </aside>
    <!---------------sidebar-end----------------->
    <main class="app-content">
      <div class="app-title">
        <div>
        <h1 class="text-primary"><i class="fa fa-user text-primary"></i> User post</h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="all-user.php"><i class="fa fa-user fa-lg"></i></a></li>
          <li class="breadcrumb-item"><a href="#">User post</a></li>
          
        </ul>
      </div>







<div class="row">
<?php


                 $qu ="SELECT * FROM ad_post where user_id='$view_user_id'";
                 $d =mysqli_query($conn,$qu);
                 $row=mysqli_num_rows($d);
                 while($res =mysqli_fetch_assoc($d)){
                   $user_id= $res['user_id'];
                   $user_query = "SELECT * FROM user WHERE user_id='$user_id'";
                   $user_data = mysqli_query($conn,$user_query);
                   while($user_res =mysqli_fetch_assoc($user_data)){
                   

 ?>     
          <div class="col-lg-12 pb-3">
		  <div class="card bg-light p-2">
			  <div class="row">
				  <div class="col-lg-10">
					  <div class="row">
						  <div class="col-lg-2">
						  <img class="" src="../<?php echo $user_res['user_image']; ?>" style="height:40px!important;width: 40px!important; border:1px solid black; border-radius:50%;" alt="">
						  </div>
						  <div class="col-lg-9" style="">
							  <h6 class="text-info"style="font-size:16px;"><strong><?php echo $user_res['user_first_name'];?></strong> <strong><?php echo $user_res['user_last_nam']; ?></strong></h6>
							  <p class="card-text text-left"><?php echo $res['time']; ?> </p>
						  </div>
					  </div>
				  </div><br><br>
				  <div class="col-lg-1">
				  <div class="text-right">	  
	
                           
     				 </div> 
				  </div>
			  </div>          
                        <div class="row">
                        <div class="col-lg-1"></div>
                            <div class="col-lg-2">
                            <img class="card-img-top" src="../<?php echo $res['image_1']; ?>" style="height:170px;" alt="">
                            </div>
                            <div class="col-lg-2">
                            <img class="card-img-top" src="../<?php echo $res['image_2']; ?>" style="height:170px; " alt="">
                            </div>
                            <div class="col-lg-2">
                            <img class="card-img-top" src="../<?php echo $res['image_3']; ?>" style="height:170px; " alt="">
                            </div>
                            <div class="col-lg-2">
                            <img class="card-img-top" src="../<?php echo $res['image_4']; ?>" style="height:170px; " alt="">
                            </div>
                            <div class="col-lg-2">
                            <img class="card-img-top" src="../<?php echo $res['image_5']; ?>" style="height:170px; " alt="">
                            </div>  
                            <div class="col-lg-1"></div>
                        </div>
                            <div class="card-body">
                              <h6 class="card-title text-primary font-weight-bold" style=" font-size:15px;">Post id :<?php echo $res['post_id'];?> </h6>
                                <h6 class="card-title text-primary font-weight-bold" style=" font-size:15px;"><?php echo $res['category'];?> </h6>
                                <p class="card-text font-weight-bold" style="text-transform: capitalize; font-size:16px;"><?php echo $res['user_division']; ?>, &nbsp; <?php echo $res['category']; ?></p>
                                <h6 class="card-text text-primary pt-1 pb-1">Tk <?php echo $res['price']; ?> </h6> 	
                                <h3 class="text-success">Description </h3>
                                <h6 class="card-text text-primary pb-1"> <?php echo $res['description']; ?> </h6> 						
                            </div>
							<div class="text-right">
							
							</div>
                </div>
            </div>
			<?php }?>
      <?php }?>

	
</div>

























<?php include('admin-footer.php'); ?>