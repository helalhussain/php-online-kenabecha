<?php include('admin-header.php'); ?>
<?php include('server.php'); ?>
<!--------------------sidebar------------------------>

 <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
      <!-- <img class="app-sidebar__user-avatar" src="" alt="User Image"> -->
        <div>
          <p class="app-sidebar__user-name">Online Kenabecha</p>
          <p class="app-sidebar__user-designation"></p>
        </div>
      </div>
      <ul class="app-menu">
        
        <li class="treeview"><a class="app-menu__item" href="admin.php" data-toggle="treeview"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">Inbox</span><i class="treeview-indicator fa fa-angle-right"></i></a>

        </li>
        <li class="treeview" style="background: black;"><a class="app-menu__item" href=""><i class="app-menu__icon fa fa-send"></i><span class="app-menu__label">Outbox</span><i class="treeview-indicator fa fa-angle-right"></i></a></li>
        <li class="treeview"><a class="app-menu__item" href="admin-replay.php" data-toggle="treeview"><i class="app-menu__icon fa fa-plus"></i><span class="app-menu__label">Compose Message</span><i class="treeview-indicator fa fa-angle-right"></i></a></li>
        <li class="treeview"><a class="app-menu__item" href="all-user.php" data-toggle="treeview"><i class="app-menu__icon fa fa-user "></i><span class="app-menu__label">All users</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      </li>
       <li class="treeview"><a class="app-menu__item" href="admin-setting.php" data-toggle="treeview"><i class="app-menu__icon fa fa-cog fa-lg"></i><span class="app-menu__label">Settings</span><i class="treeview-indicator fa fa-angle-right"></i></a> </li>
     
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
                         <h3 class="text-white">Outbox</h3>
                        </div>
                        <div class="col-lg-3"></div>
                        <div class="col-lg-4">
                          
                      <div class="input-group mb-3">
                       <!--  <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                          <button class="btn btn-light" type="button"><i class="fa fa-search"></i></button> -->
                        </div>
                      </div>
                        </div>
                      </div>
                </li>
                </a>
                <div class="inbox-lists" style="height:70vh; width:auto; overflow:scroll;"><br>

                <?php
              

                    $user_em = "onlinekenabecha@gmail.com";
                    $user_query ="SELECT * FROM message WHERE from_email='$user_em'";
                    $user_data =mysqli_query($conn,$user_query);
                    while($user = mysqli_fetch_assoc($user_data)){
                      
                    ?>
               
                  <li class="list-group-item d-flex justify-content-between align-items-center"style="">
                        <div class="name"> <span class="badge badge-primary badge-pill"><h6 class=" p-1"><?php echo $user['from_email']; ?></h6></span></div>
                     <div class="delete">
                       </div> 
                       <div class="message"><h6 class="font-weight-bold text-secondary"><?php echo $user['message']; ?> </h6></div>
                       <div class="delete" style="word-spacing:7px;">
                     <span class="badge badge-primary badge-pill"><?php echo $user['date']; ?></span>
                     <?php echo "<a class='btn btn-primary' href='outbox-show.php?m_id=$user[m_id]'>View</i></a>";?>
                     <?php echo "<a class='btn-btn-info' href='delete-outbox.php?m_id=$user[m_id]' onclick='return checkdelete()'><i class='fa fa-trash fa-lg text-danger'></i></a>";?>
                       
                     </div>
                </li>


                <?php }?>
             
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