<?php include('admin-header.php'); ?>
<?php include('server.php'); ?>
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
       
        <li class="treeview"style="background: black;"><a class="app-menu__item" href="admin.php" data-toggle="treeview"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">Inbox</span><i class="treeview-indicator fa fa-angle-right"></i></a>

        </li>
        <li class="treeview"><a class="app-menu__item" href="admin-outbox.php"><i class="app-menu__icon fa fa-send"></i><span class="app-menu__label">Outbox</span><i class="treeview-indicator fa fa-angle-right"></i></a></li>

        <li class="treeview"><a class="app-menu__item" href="admin-replay.php" data-toggle="treeview"><i class="app-menu__icon fa fa-plus"></i><span class="app-menu__label">Compose Message</span><i class="treeview-indicator fa fa-angle-right"></i></a>

        </li>
        <li class="treeview"><a class="app-menu__item" href="all-user.php" data-toggle="treeview"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">All users</span><i class="treeview-indicator fa fa-angle-right"></i></a>
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
          <li class="breadcrumb-item"><a href="#">Inbox</a></li>
        </ul>
      </div>

     
      <!-----------------list-header---------------------->
      <ul class="list-group">
                <a href="#" style="text-decoration: none;">
                  <li class="list-group "style="background:#009688;">
 
                      <div class="row pt-3 pl-4 pr-4">
                        <div class="col-lg-3">
                         <h3 class="text-white">Inbox</h3>
                        </div>
                        <div class="col-lg-3"></div>
                        <div class="col-lg-4">
                          
                      <div class="input-group mb-3">
                      <!--   <input type="text" class="form-control" placeholder="">
                        <div class="input-group-append">
                          <button class="btn btn-light" type="button"><i class="fa fa-"></i></button> -->
                        </div>
                      </div>
                        </div>
                      </div>
                </li>
                </a>
                <div class="inbox-lists" style="height:70vh; width:auto; overflow:scroll;"><br>

                <?php
                  $rep_query ="SELECT * FROM report_ad";
                  $rep_data =mysqli_query($conn,$rep_query);
                  while($report = mysqli_fetch_assoc($rep_data)){ 

                    $user_em = $report['user_email'];
                    $user_query ="SELECT * FROM user WHERE user_email='$user_em'";
                    $user_data =mysqli_query($conn,$user_query);
                    while($user = mysqli_fetch_assoc($user_data)){

                    ?>
               
                  <li class="list-group-item d-flex justify-content-between align-items-center"style="">
                        <div class="name"> <span class="badge badge-primary badge-pill"><h6 class="word-spacing:2px; p-1"><?php echo $user['user_first_name']; ?> <?php echo $user['user_last_nam']; ?></h6></span></div>
                     <div class="delete">
                       </div> 
                       <div class="message"><h6 class="font-weight-bold text-secondary"><?php echo $report['description']; ?> </h6></div>
                       <div class="delete" style="word-spacing:7px;">
                     <span class="badge badge-primary badge-pill"><?php echo "10/28/2021"; ?></span>
                     <?php echo "<a class='btn btn-primary' href='inbox-show.php?report_no=$report[report_no]'>View</i></a>";?>
                     <?php echo "<a class='btn-btn-info' href='delete-inbox.php?report_no=$report[report_no]' onclick='return checkdelete()'><i class='fa fa-trash fa-lg text-danger'></i></a>";?>
                       
                     </div>
                </li>


                <?php }?>
                <?php }?>
                <br>
                <?php 

                  $ad_query ="SELECT * FROM message";
                  $ad_data =mysqli_query($conn,$ad_query);
                  while($ad = mysqli_fetch_assoc($ad_data)){
                    if($ad['seller_id'] == 11){?>
                       <li class="list-group-item d-flex justify-content-between align-items-center"style="">
                        <div class="name"> <span class="badge badge-primary badge-pill"><h6 class="word-spacing:2px; p-1"><?php echo $ad['from_email']; ?></h6></span></div>
                     <div class="delete">
                       </div> 
                       <div class="message"><h6 class="font-weight-bold text-secondary"><?php echo $ad['message']; ?> </h6></div>
                       <div class="delete" style="word-spacing:7px;">
                     <span class="badge badge-primary badge-pill"><?php echo $ad['date'];; ?></span>
                    
                        <?php echo "<a class='btn btn-primary' href='message-show.php?m_id=$ad[m_id]'>View</i></a>";?>
                     <?php echo "<a class='btn-btn-info' href='delete-message.php?m_id=$ad[m_id]' onclick='return checkdelete()'><i class='fa fa-trash fa-lg text-danger'></i></a>";?>
                     </div>
                </li>

        <?php } }?>
              </div>
              </ul>
                </div>
              
              </div>

    
      		<div class="col-lg-1"></div>
      	</div>
    </main>
     
    <script>
	function checkdelete(){
			return confirm('Are you sure???');
  }
</script>
      
<?php include('admin-footer.php'); ?>