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
        <li class="treeview"><a class="app-menu__item" href="admin-outbox.php"><i class="app-menu__icon fa fa-send"></i><span class="app-menu__label">Outbox</span><i class="treeview-indicator fa fa-angle-right"></i></a></li>

        
        <li class="treeview" style="background: black;"><a class="app-menu__item" href="admin-replay.php" data-toggle="treeview"><i class="app-menu__icon fa fa-plus"></i><span class="app-menu__label">Compose Message</span><i class="treeview-indicator fa fa-angle-right"></i></a> </li>
        <li class="treeview"><a class="app-menu__item" href="all-user.php" data-toggle="treeview"><i class="app-menu__icon fa fa-user "></i><span class="app-menu__label">All users</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      </li>
        <li class="treeview"><a class="app-menu__item" href="admin-setting.php" data-toggle="treeview"><i class="app-menu__icon fa fa-cog fa-lg"></i><span class="app-menu__label">Settings</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        </li>

      </ul>
    </aside>
    <!---------------sidebar-end----------------->
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-plus"></i> Compose message</h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-plus fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Compose Message</a></li>
        </ul>
      </div>

     
      <!-----------------list-header---------------------->
      <ul class="list-group">
                <a href="#" style="text-decoration: none;">
                  <li class="list-group "style="background:#009688;">
 
                      <div class="row pt-3 pl-4 pr-4">
                        <div class="col-lg-3">
                         <h3 class="text-white">Compose new Message</h3>
                        </div>
                        <div class="col-lg-3"></div>
                        <div class="col-lg-4">
                          
                        </div>
                      </div>
                </li>
                </a>
                <div class="inbox-lists" style="height:70vh; width:auto; overflow:scroll;">


           <div class="compose bg-white pl-5 pr-5 pb-2 ">
                    <form action="" method="POST">
                <br>
              
                <div class="form-group ">
                  <label class="font-weight-bold"style="color:#009688;"></label>
                    <div class="input-group-append">
                    <input type="email" class="form-control text-info" name="user_email"  placeholder="To:" require>
                    </div>
                    <span class="password_erro"style="color:red;font-size:14px;"> </span>
                  </div>
                  <div class="form-group ">
                    <div class="input-group-append">
                    <!-- <input type="text" class="form-control text-info " name="subject" autocomplete="off" placeholder="Subject:" > -->
                      	
                    </div>
                  </div>
                  <div class="form-group ">
                  <label class="font-weight-bold"style="color:#009688;"></label>
                    <div class="input-group-append">
                    <textarea class="form-control text-info password1" name="message" style="height:130px;"autocomplete="off" placeholder="Message:" require></textarea>
                     	
                    </div>
                    <span class="password_erro"style="color:red;font-size:14px;"> </span>
                  </div>
                                <div class="form-group">
                    <button class="btn btn text-white" style="font-weight:bold;background:#009688;" type="submit" name="send_message">Send Message</button>
                   
               
                </div>
            </form><br><br>
                    </div>
    </main>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <?php

    include('server.php');                 
if(isset($_POST['send_message'])){
  $user_email =$_POST['user_email'];
  $message = $_POST['message'];
  $date =date("h:m:a d-m-Y");

    $query ="SELECT * FROM user WHERE user_email='$user_email'";
     $data =mysqli_query($conn,$query);
     $userdata = mysqli_fetch_assoc($data);

    $user_id = $userdata['user_id'];
    $database_email = $userdata['user_email'];
    echo $user_id;
    $user_id = $userdata['user_id'];
    $from_email="onlinekenabecha@gmail.com";
     $nul="ok";
     $admin_id = "11";


  $message = $_POST['message'];
  if($user_email != $database_email){
    echo "<script>alert('Incorrect Email');</script>";
  }else{
    $sql = "INSERT INTO message VALUES(NULL,'$admin_id','$from_email','$nul','$user_id','$message','$date')";
    $query = mysqli_query($conn,$sql);
            echo "<script>alert('Message send successfull');</script>";
    
        
  }

 
}


?>






      
<?php include('admin-footer.php'); ?>