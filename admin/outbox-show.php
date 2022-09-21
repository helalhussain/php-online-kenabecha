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
       
        <li class="treeview"><a class="app-menu__item" href="admin.php" data-toggle="treeview"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">Inbox</span><i class="treeview-indicator fa fa-angle-right"></i></a>

        </li>
        <li class="treeview" style="background: black;"><a class="app-menu__item" href="admin-outbox.php"><i class="app-menu__icon fa fa-send"></i><span class="app-menu__label">Outbox</span><i class="treeview-indicator fa fa-angle-right"></i></a></li>

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
 $m_id=$_GET['m_id'];


    $sender_user_id = "Online Kenabecha";
     $user_query ="SELECT * FROM message WHERE m_id='$m_id'";
     $user_data =mysqli_query($conn,$user_query);
     while($user = mysqli_fetch_assoc($user_data)){
      $us_id = $user['seller_id'];
 $to_email = "SELECT * FROM user WHERE user_id='$us_id'";
     $user_email =mysqli_query($conn,$to_email);
     $email = mysqli_fetch_assoc($user_email);

  ?>
      <ul class="list-group">
                <a href="#" style="text-decoration: none;">
                  <li class="list-group "style="background:#009688;">
 
                      <div class="row pt-3 pl-4 pr-4">
                        <div class="col-lg-3">
                         <h3 class="text-white"></h3>
                        </div>
                        <div class="col-lg-3"></div>
                        <div class="col-lg-4">
                          
                        </div>
                      </div>
                </li>
                </a>
                <div class="inbox-lists" style="height:60vh; width:auto; overflow:scroll;">
                    <br><br>

                    <div class="row bg-white p-3" style="border-bottom:1px solid #009688;">
                        <div class="col-lg-2">
                        <ul class="message">

                            <div class="user-image">
                            <h3 class="pt-2 pl-1" style="width:50px;height:50px;border-radius:50%; border:1px solid black;" alt="">OK</h2>
                            </div>
                              
                         </ul>
                        </div>
                        <div class="col-lg-3 text-right mr-auto"> <p  class="mr-auto text-left"style="font-size:21px;;"><?php echo $user['from_email']; ?></p></div>
                        <div class="col-lg-5"></div>
                        <div class="col-lg-2 pt-2">
                           <?php echo $user['date'];?>
                        </div><hr style="color:#009688;">
                    </div>
                    <div class="mess p-5 bg-white">
                    <span class="badge badge-primary badge-pill"> <h5>To Email: <?php echo $email['user_email'];?></h5></span><br><br>

                    <div class="inbox-lists" style="height:60vh; width:auto; overflow:scroll;">
                    <p class="" style="font-size:17px;"><?php echo $user['message']; ?></p>
                    </div>
                    <div class="row">
                    <div class="col-lg-9"></div>
                    <div class="col-lg-3">

                    </div>
                    </div>
               </div>
                </div>
              </ul>

              <?php } ?>

                </div>
              
              </div>

    
      		<div class="col-lg-1"></div>
      	</div>
    </main>
     

      
<?php include('admin-footer.php'); ?>