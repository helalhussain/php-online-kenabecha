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


?>
<?php include('header.php');?>
<div class="" style="">
<div class="container pt-5 ">
  <div class="area p-5 bg-info" style=" border-radius: 10px;">
  <div class="row  no-gutters" style="background:#fff;">
    
    <div class="col-lg-4">
      <div class="acount_list" style="height: 480px;">
        <ul class="list-group list-group-flush">

             <li class="list-group-item d-flex bg-light active justify-content-between align-items-center">
            <h4 class="text-ceter font-weight-bold text-info">My Account</h4>
           
          </li>
            <a href="my-acount.php" title="">
              <li class="list-group-item text-primary d-flex font-weight-bold justify-content-between align-items-center">
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
              <li class="list-group-item font-weight-bold d-flex text-primary justify-content-between align-items-center">
               Ad product
              <span class="badge badge-primary badge-pill"><i class="fa fa-arrow-right"></i></span>
            </li>
            </a>
          <a href="my-inbox.php" title="">
            <li class="list-group-item font-weight-bold d-flex text-primary justify-content-between align-items-center">
               Inbox
              <span class="badge badge-primary badge-pill"><i class="fa fa-arrow-right"></i></span>
            </li>
            </a>
            <a href="my-outbox.php" title="">
            <li class="list-group-item font-weight-bold d-flex text-success justify-content-between align-items-center">
               Outbox
              <span class="badge badge-success badge-pill"><i class="fa fa-arrow-right"></i></span>
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
      <div class="row">
        <div class="col-lg-12">
          <h2 class="text-success pt-2">Outbox</h2><hr>
        <!--------------------------------all-messages------------------------------>
        <main class="app-content  pl-4 pr-4">


      <!-----------------list-header---------------------->

                <div class="inbox-lists pr-3" style="height:70vh; width:auto; overflow:scroll;">
                <?php   

                $user_id_f= $result['user_id'];
                $messquery ="SELECT * FROM message ORDER BY m_id DESC";
                $messdata =mysqli_query($conn,$messquery);
                
             
                

                while($mess =mysqli_fetch_assoc($messdata)){?>
        <?php
          $user_id = $mess['user_id'];
          $in_query ="SELECT * FROM user WHERE user_id='$user_id'";
          $in_sql =mysqli_query($conn,$in_query);
            
          while($in_res =mysqli_fetch_assoc($in_sql)){
            $user_seller= $mess['seller_id'];
            $seller_query ="SELECT * FROM user WHERE user_id='$user_seller'";
                $seller_data =mysqli_query($conn,$seller_query);
                $seller =mysqli_fetch_assoc($seller_data);
            ?>
            <?php
            if($result['user_id'] == $mess['user_id']){?>
              
    
        <li class="list-group-item d-flex justify-content-between align-items-center"style="">
                        <div class="name"> <span class="badge badge-info badge-pill"><h6 class="word-spacing:2px; p-1"> <?php echo $seller['user_email']; ?></h6></span></div>
                     <div class="delete">
                       </div> 
                       <div class="message"><h6 class=" text-secondary"><?php echo $mess['message']; ?> </h6></div>
                       <div class="delete" style="word-spacing:7px;">
                     <span class="badge badge-primary badge-pill"><?php echo $messresult['date']; ?></span>
                     <?php echo "<a class='btn btn-primary' href='my-outbox-show.php?m_id=$mess[m_id]'>View</i></a>";?>
                     <?php echo "<a class='btn-btn-info' href='delete-outbox.php?m_id=$mess[m_id]' onclick='return checkdelete()'><i class='fa fa-trash fa-lg text-danger'></i></a>";?>
                       
                     </div>
                </li>


        
        <?php }?>
         <?php }?>
    
          <?php }?>
          
              </div>
                </div>
              
              </div>

    
          
        </div>
    </main>
     


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