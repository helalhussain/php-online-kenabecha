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
        <li class="treeview" style="background: black;"><a class="app-menu__item" href="admin-manage.php" data-toggle="treeview"><i class="app-menu__icon fa fa-user "></i><span class="app-menu__label">All users</span><i class="treeview-indicator fa fa-angle-right"></i></a>

        </li>
        <li class="treeview"><a class="app-menu__item" href="admin-setting.php" data-toggle="treeview"><i class="app-menu__icon fa fa-cog fa-lg"></i><span class="app-menu__label">Settings</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        </li>
      

      </ul>
    </aside>
    <!---------------sidebar-end----------------->
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-user"></i> All users</h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-user fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">All users</a></li>
          
        </ul>
      </div>

     
      <!-----------------list-header---------------------->
      <ul class="list-group">
                <a href="#" style="text-decoration: none;">
                  <li class="list-group "style="background:#009688;">
 <?php 

 $total_user = "SELECT sum(user_id) AS sum FROM user";
 $total_query = mysqli_query($conn,$total_user);

 $total_user_query = mysqli_fetch_assoc($total_query);

  ?>
                      <div class="row pt-3 pl-4 pr-4">
                        <div class="col-lg-3">
                         <h3 class="text-white">All users<span style="color:#fff;font-size:12px;"><?php ?></span></h3>
                         
                        </div>
                        <div class="col-lg-3"></div>
                        <div class="col-lg-4">
                         <?php 
                         if(isset($_POST['submit'])){
                          $search_value = $_POST['search'];
                         }

                          ?> 
                  <form action="" method="POST">
                  <div class="input-group mb-3">
                        <input type="search" value="<?php echo $search_value; ?>" class="form-control" id="search" name="search" placeholder="Search" required>
                        <div class="input-group-append">
                      
                          <button class="btn btn-dark text-light font-weight-bold "  name="submit" type="submit">Search</button>
                        </div>
                      </div>
                  </form>
                        </div>
                      </div>
                </li>
                </a>
                <div class="inbox-lists" style="height:70vh; width:auto;">


                <table class="table table-bordered table-dark">
  <thead>
    <tr class="bg-white text-center">
      <th class="bg-light text-primary">No</th>
      <th class="bg-light text-primary">Name</th>
      <td  class="bg-light text-primary">Email</td>
      <td  class="bg-light text-primary">Post</td>
      <th  class="bg-light text-primary">Report</th>
      <th  class="bg-light text-primary">Block</th>
    </tr>
  </thead>
<!-----------------------------serarch_start--------------------->
  <?php 

  

if(isset($_POST['submit'])) {

   $searchkey=$_POST["search"];
   $sql ="SELECT * FROM user where user_email LIKE '%$searchkey%'";

 

$resul = mysqli_query($conn,$sql);
while($r = mysqli_fetch_assoc($resul)) { 
  $sview_id= $r['user_id'];
  $sview_query ="SELECT * FROM user where user_id='$sview_id'";
  $sview_data =mysqli_query($conn,$sview_query);
  $sview_user = mysqli_fetch_assoc($sview_data);

  ?>

 
  <tbody class="bg-primary">
    <tr>
      <th scope="row"><?php echo $r['user_id']; ?></th>
      <td class="word-spacing:2px;"><?php echo $r['user_first_name']; ?> <?php echo $r['user_last_nam']; ?></td>
      <td><?php echo $r['user_email']; ?></td>
      <td class="text-center"><?php echo"<a href='user-post.php?user_id=$sview_user[user_id]' class='btn btn-dark'>View</a>";?></td>
      <td class="text-center"></td>
      
      <td class="text-center"><?php 
        if($sview_user['able']=='able'){
          echo"<a href='enable.php?user_id=$sview_user[user_id]' class=' btn btn-danger'> Block </a>";
        }else{
          echo"<a href='disable.php?user_id=$sview_user[user_id]' class=' btn btn-success'>Unblock</a>";
        }
      ?></td>
      
    </tr>
  </tbody>
  <?php } }else{
      
  } ?>
<!-------------------------------------------------------------search_end----------------------------------->


  <?php 
    $user_query ="SELECT * FROM user";
    $user_data =mysqli_query($conn,$user_query);
    
    while($all_user = mysqli_fetch_assoc($user_data)){
     $view_id= $all_user['user_id'];
     $view_query ="SELECT * FROM user where user_id='$view_id'";
     $view_data =mysqli_query($conn,$view_query);
     $view_user = mysqli_fetch_assoc($view_data);


     $report_count ="SELECT count(report_no) as total FROM report_ad WHERE user_id='$view_id'";
     $report_ex =mysqli_query($conn,$report_count);
     $reports = mysqli_fetch_assoc($report_ex);
     $adds = $reports['total'];
     
     
    
      ?>
 
  <tbody class="hid">
    <tr>
      <th scope="row"><?php echo $all_user['user_id']; ?></th>
      <td class="word-spacing:2px;"><?php echo $all_user['user_first_name']; ?> <?php echo $all_user['user_last_nam']; ?></td>
      <td><?php echo $all_user['user_email']; ?></td>
      <td class="text-center"><?php echo"<a href='user-post.php?user_id=$view_user[user_id]' class='btn btn-info'>View</a>";?></td>
      <td class="text-center"><?php echo $adds; ?></td>
      
      <td class="text-center"><?php 
        if($view_user['able']=='able'){
          echo"<a href='enable.php?user_id=$view_user[user_id]' class=' btn btn-danger'> Block </a>";
        }else{
          echo"<a href='disable.php?user_id=$view_user[user_id]' class=' btn btn-success'>Unblock</a>";
        }
      ?></td>
      
    </tr>
    
  </tbody>
  <?php } ?>
</table>






             </div>
              </ul>
                </div>
              
              </div>

    
      		<div class="col-lg-1"></div>
      	</div>
    </main>
     

      
<?php include('admin-footer.php'); ?>