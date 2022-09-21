<?php include('admin-header.php'); ?>
<?php include('server.php');?>
<!--------------------sidebar------------------------>

 <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
      <!-- <img class="app-sidebar__user-avatar" src="" alt="User Image"> -->
        <div>
          <p class="app-sidebar__user-name">Online kenabecha</p>
          <p class="app-sidebar__user-designation"></p>
        </div>
      </div>
      <ul class="app-menu">
        
        <li class="treeview"><a class="app-menu__item" href="admin.php" data-toggle="treeview"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">Inbox</span><i class="treeview-indicator fa fa-angle-right"></i></a>

        </li>
        <li class="treeview" ><a class="app-menu__item" href="admin-outbox.php"><i class="app-menu__icon fa fa-send"></i><span class="app-menu__label">Outbox</span><i class="treeview-indicator fa fa-angle-right"></i></a></li>

        <li class="treeview"><a class="app-menu__item" href="admin-replay.php" data-toggle="treeview"><i class="app-menu__icon fa fa-plus"></i><span class="app-menu__label">Compose Message</span><i class="treeview-indicator fa fa-angle-right"></i></a></li> 
        <li class="treeview"><a class="app-menu__item" href="all-user.php" data-toggle="treeview"><i class="app-menu__icon fa fa-user "></i><span class="app-menu__label">All users</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      </li>
        </li>
  
        <li class="treeview" style="background: black;"><a class="app-menu__item" href="admin-setting.php" data-toggle="treeview"><i class="app-menu__icon fa fa-cog fa-lg"></i><span class="app-menu__label">Settings</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        </li>
     

      </ul>
    </aside>
    <!---------------sidebar-end----------------->
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="pp-menu__icon fa fa-cog"></i> Setting</h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class=" fa fa-cog fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Setting</a></li>
        </ul>
      </div>

     
      <!-----------------list-header---------------------->
            <ul class="list-group">
                      <a href="#" style="text-decoration: none;">
                        <li class="list-group "style="background:#009688;">
      
                            <div class="row pt-3 pl-4 pr-4">
                              <div class="col-lg-3">
                              <h3 class="text-white">Setting</h3>
                              </div>
                              <div class="col-lg-3"></div>
                              <div class="col-lg-4">
                                
                            <div class="input-group mb-3">
                             
                              <div class="input-group-append">
                                
                              </div>
                            </div>
                              </div>
                            </div>
                      </li>
                      </a>
                      <!--------------------------setting-form-start------------------------------>
                      <div class="bg-white">
                <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                  <form action="" method="POST">
                                
                                      <br>
                                      <h3 class="font-weight-bold" style="color:#009688;">Online Kenabecha</h3><hr>
                               
                                     <div class="row">
                                       <div class="col-lg-6">
                                       <h3 class="font-weight-bold text-info font-weight-bold ">Name </h3>
                                      <h5 class="font-weight-bold">Online Kenabecha</h5><br>
                                       </div>
                                       <div class="col-lg-6">
                                       <h3 class="font-weight-bold text-info">Email </h3>
                                      <h5 class="font-weight-bold">onlinekenabecha@gmail.com</h5><br><br>
                                       </div>
                                 </div>
 <?php 

  if(isset($_POST['edit'])){

$current_pass = $_POST['currentpass'];
$new_pass = $_POST['newpass'];
$confirm_pass = $_POST['confirmpass'];    

  }else{
    $current_pass ="";
$new_pass = "";
$confirm_pass = ""; 
  }
?>      

                      <h3 class="font-weight-bold " style="color:#009688;">Change password</h3><hr>
                      <div class="form-group ">
                        <label class="font-weight-bold"style="color:#009688;">Current Password</label>
                          <div class="input-group-append">
                          <input type="password" class="form-control text-info password1" name="currentpass" value="<?php echo $current_pass; ?>" placeholder="Current Password" required>
                            <a class="eyepass1" href="#" style=" position: relative;left:-23px; top:8px;"><i class="fa fa-eye eye1" style="color:#009688;"></i></a>	
                          </div>
                          <span class="current_password_error"style="color:red;font-size:14px;"> </span>
                        </div>
                        <div class="form-group ">
                        <label class="font-weight-bold" style="color:#009688;">New Password</label>
                          <div class="input-group-append">
                          <input type="password" class="form-control text-info password1" name="newpass" value="<?php echo $new_pass; ?>"placeholder="New Password" required >
                            <a class="eyepass1" href="#" style=" position: relative;left:-23px; top:8px;"><i class="fa fa-eye eye1" style="color:#009688;"></i></a>	
                          </div>
                          <span class="new_password_error"style="color:red;font-size:14px;"> </span>
                        </div>
                        <div class="form-group ">
                        <label class="font-weight-bold" style="color:#009688;">Confirm Password</label>
                          <div class="input-group-append">
                          <input type="password" class="form-control text-info password1" name="confirmpass" value="<?php echo $confirm_pass; ?>"" placeholder="Confirm Password" required>
                            <a class="eyepass1" href="#" style=" position: relative;left:-23px; top:8px;"><i class="fa fa-eye eye1" style="color:#009688;"></i></a>	
                          </div>
                          <span class="confirm_password_error"style="color:red;font-size:14px;"> </span>
                        </div>
                            <div class="form-group">
                          <button class="btn btn text-white" style="font-weight:bold;background:#009688;" type="submit" name="edit">Edit</button>
                      </div>
                  </form><br><br>
                  </div>
                  <div class="col-lg-2"></div>
                </div>
                </div>
                <!----------------------------Seting-form-end------------------------------------------->
                
              </ul>
                </div>
              
              </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php

if(isset($_POST['edit'])){

      $current_pass = $_POST['currentpass'];
      $new_pass = $_POST['newpass'];
      $confirm_pass = $_POST['confirmpass'];

    $admin_query = "SELECT * FROM admin";
    $query_connect = mysqli_query($conn,$admin_query);
    $admin_data = mysqli_fetch_assoc($query_connect);
    $admin_id=$admin_data['admin_id'];
 
    if($admin_data['admin_password'] == $current_pass){
        if($new_pass == $confirm_pass){
        
             $edit_query = "UPDATE admin SET admin_password='$new_pass', admin_confirm_pasword='$confirm_pass' WHERE admin_id='$admin_id'";
             $edit =mysqli_query($conn,$edit_query);
             echo "	<script> alert('Edit password successfull');</script>";
             
        }else{
          echo "<script>$('.new_password_error').html('Password are not match');</script>";
          echo "<script>$('.confirm_password_error').html('Password are not match');</script>";
        }
    }else{
      echo "<script>$('.current_password_error').html('Your password is rong');</script>";
    }
    

}

?>
    
      		<div class="col-lg-1"></div>
      	</div>
    </main>
<?php include('admin-footer.php'); ?>