<?php include('admin-header.php'); ?>
<!--------------------sidebar------------------------>

 <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <div>
          <p class="app-sidebar__user-name">Online Kenabecha</p>
          <p class="app-sidebar__user-designation"></p>
        </div>
      </div>
      <ul class="app-menu">
       
        <li class="treeview"style="background: black;"><a class="app-menu__item" href="admin.php" data-toggle="treeview"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">Inbox</span><i class="treeview-indicator fa fa-angle-right"></i></a>

        </li>
        <li class="treeview"><a class="app-menu__item" href="admin-outbox.php"><i class="app-menu__icon fa fa-send"></i><span class="app-menu__label">Outbox</span><i class="treeview-indicator fa fa-angle-right"></i></a></li>

        <li class="treeview"><a class="app-menu__item" href="admin-replay.php" data-toggle="treeview"><i class="app-menu__icon fa fa-plus"></i><span class="app-menu__label">Compose Message</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <li class="treeview"><a class="app-menu__item" href="all-user.php" data-toggle="treeview"><i class="app-menu__icon fa fa-user "></i><span class="app-menu__label">All users</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      </li>
        </li>
        <li class="treeview"><a class="app-menu__item" href="admin-setting.php" data-toggle="treeview"><i class="app-menu__icon fa fa-cog fa-lg"></i><span class="app-menu__label">Settings</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        </li>

      </ul>
    </aside>
    <!---------------sidebar-end----------------->
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-envelope"></i> Inbox</h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-envelope fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="admin.php">Inbox</a></li>
        </ul>
      </div>

     
      <!-----------------list-header---------------------->
<?php
include('server.php');
 $report=$_GET['report_no'];

      $query ="SELECT * FROM report_ad WHERE report_no='$report'";
     $data =mysqli_query($conn,$query);
     $userdata = mysqli_fetch_assoc($data);
     $post_ids= $userdata['ad_no'];
      $sender_user_id = $userdata['user_id'];
     $user_query ="SELECT * FROM user WHERE user_id='$sender_user_id'";
     $user_data =mysqli_query($conn,$user_query);
     $user = mysqli_fetch_assoc($user_data);


  ?>
      <ul class="list-group">
                <a href="#" style="text-decoration: none;">
                  <li class="list-group "style="background:#009688;">
 
                      <div class="row pt-3 pl-4 pr-4">
                        <div class="col-lg-3">
                         <h3 class="text-white">User name</h3>
                        </div>
                        <div class="col-lg-3"></div>
                        <div class="col-lg-4">
                          
                        </div>
                      </div>
                </li>
                </a>
                <div class="inbox-lists" style="height:70vh; width:auto; overflow:scroll;">
                    <br><br>

                    <div class="row bg-white p-3" style="border-bottom:1px solid #009688;">
                        <div class="col-lg-5">
                        <ul class="message">

                            <div class="user-image">
                            <img src="../<?php echo $user['user_image']; ?>"class="pr-2" style="width:50px;height:50px;border-radius:50%; border:1px solid black;" alt="">
                           <b  class="p-1"style="font-size:21px;;"><?php echo $user['user_first_name']; ?> <?php echo $user['user_last_nam']; ?></b>
                            </div>
                              
                         </ul>
                        </div>
                        <div class="col-lg-5"></div>
                        <div class="col-lg-2 pt-2">
                           <?php echo $userdata['date'];?>
                        </div><hr style="color:#009688;">
                    </div>
                    <div class="mess p-5 bg-white">
                    <span class="badge badge-primary badge-pill"> <h5>Email: <?php echo $userdata['user_email'];?></h5></span><br><br>
                      <h5>Reason: <?php echo $userdata['reason'];?></h5>
                    <div class="inbox-lists" style="height:70vh; width:auto; overflow:scroll;">
                    <p class="" style="font-size:17px;"><?php echo $userdata['description']; ?></p>
                   
                 



              
               <!---------------Post----------------------->
<?php
 $post_ids= $userdata['ad_no'];

     $ad_post_query ="SELECT * FROM ad_post WHERE post_id='$post_ids'";
     $ad_post_data =mysqli_query($conn,$ad_post_query);
     $ad_posts = mysqli_fetch_assoc($ad_post_data);
$user_n = $ad_posts['user_id'];
      $user_name_query ="SELECT * FROM user WHERE user_id='$user_n'";
     $user_ex_data =mysqli_query($conn,$user_name_query);
     $user_ex = mysqli_fetch_assoc($user_ex_data);

     ?>
               <div class="container">
                  <br><br>
               <div class="row">
                   <div class="col-lg-12 pb-3">
      <div class="card bg-light p-2">
        <div class="row">
          <div class="col-lg-10">
            <div class="row">
              <div class="col-lg-2">
              <img class="" src="../<?php echo $user_ex['user_image']; ?>" style="height:40px!important;width: 40px!important; border:1px solid black; border-radius:50%;" alt="">
              </div>
              <div class="col-lg-9" style="">
                <h6 class="text-info"style="font-size:16px;"><strong><?php echo $user_ex['user_first_name']; ?> <?php echo $user_ex['user_last_nam']; ?></strong> <strong><?php  ?></strong></h6>
                 <h6 class="text-info"style="font-size:16px;"><strong> <?php echo $user_ex['user_email']; ?></strong> <strong><?php  ?></strong></h6>
                <p class="card-text text-left"><?php echo $ad_posts['time']; ?> </p>
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
                            <img class="card-img-top" src="../<?php echo $ad_posts['image_1']; ?>" style="height:170px;" alt="">
                            </div>
                            <div class="col-lg-2">
                            <img class="card-img-top" src="../<?php echo $ad_posts['image_2']; ?>" style="height:170px; " alt="">
                            </div>
                            <div class="col-lg-2">
                            <img class="card-img-top" src="../<?php echo $ad_posts['image_3']; ?>" style="height:170px; " alt="">
                            </div>
                            <div class="col-lg-2">
                            <img class="card-img-top" src="../<?php echo $ad_posts['image_4']; ?>" style="height:170px; " alt="">
                            </div>
                            <div class="col-lg-2">
                            <img class="card-img-top" src="../<?php echo $ad_posts['image_5']; ?>" style="height:170px; " alt="">
                            </div>  
                            <div class="col-lg-1"></div>
                        </div>
                            <div class="card-body">
                                <h6 class="card-title text-primary font-weight-bold" style=" font-size:15px;">Post no : <?php echo $ad_posts['post_id']; ?></h6>
                                <p class="card-text font-weight-bold" style="text-transform: capitalize; font-size:16px;"><?php echo $ad_posts['user_division']; ?>, &nbsp; <?php echo $ad_posts['category']; ?></p>
                                <h6 class="card-text text-primary pt-1 pb-1">Tk <?php echo $ad_posts['price']; ?> </h6>  
                                <h3 class="text-success">Description </h3>
                                <h6 class="card-text text-primary pb-1"> <?php echo $ad_posts['description']; ?> </h6>             
                            </div>
            
                </div>
            </div>
               </div>
               </div>
               <!---------------post_end-------------------->
                </div>
                </div>
                </div>
              </ul>
                </div>
              


              </div>

    
      		<div class="col-lg-1"></div>
      	</div>
    </main>
     

      
<?php include('admin-footer.php'); ?>