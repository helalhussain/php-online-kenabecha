<?php 
session_start();
include("server.php");

error_reporting(0);

$email =$_SESSION['email'];
// if($email==true)
// {

// }else{
// 	header('location:login.php');
// }
$query ="SELECT * FROM user WHERE user_email='$email'";
$data =mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);

?>



<?php include('header.php'); ?>

<?php 
 $user_post=$_GET['post_id'];

$qu ="SELECT * FROM ad_post WHERE post_id='$user_post'";
$da =mysqli_query($conn,$qu);
$resu = mysqli_fetch_assoc($da);

?>

<div class="" style="background:#e7edee; ">
<div class="container pt-4">
    <div class="faq bg-white p-3 " style=" border-radius: 2px;">
    <div class="p-2">

        <div class="row pt-3 pb-3 bg-info">
            <div class="col-lg-9">
            
            </div>
            <div class="col-lg-3">
            <?php
                $baseUrl ="http://localhost/onlinekenabecha/product-details.php";
                $slug =$resu['title'];
            ?>
            <form action="">
                 <div class="btn-group">
                    <button type="button" class="font-weight-bold btn btn-outline-light ml-2 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <i class="fa fa-share"></i> Share
                    </button>
                    <div class="dropdown-menu ">
                        <a href="<?php http://facebook.com/share.php?post_id=$baseUrl.$slug;?>" class="dropdown-item font-weight-bold text-info" target="blank" >Facebook</a>
                        <a class="dropdown-item font-weight-bold text-info" href="#">Twitter</a>

                    </div>
                    </div>
            </form>
  
            </div>
        </div>
        
        </div>
<!-------------------------------------------------------->
            <div class="row pt-4 pb-4 bg-white">
                <div class="col-lg-3">
                    <h6 class="list-group-item list-group-item-action active bg-info"></h6>
                    <ul class="list-group">
                        <li class="list-group-item d-flex font-weight-bold justify-content-between align-items-center text-primary">
                        <a type="button" class="" style="font-size:22px;"><i class="fas fa-phone-alt text-info mr-2" style="font-size:25px;"></i><?php echo $resu['phone_no']; ?></a>    
                        </li>     

                        
                                                    <a  href="#" class="list-group-item d-flex font-weight-bold justify-content-between align-items-center text-primary">
                        <button type="button" class="" style="font-size:22px;"><i class="fa fa-comments text-info mr-2" style="font-size:25px;"> Send message</i></button> 
                        </a>
    <?php if($result['user_id'] != $resu['user_id']){ ?>
                        <form action="" class="" method="POST">
                             <div class="input-group mb-2">
                                   
                                    <input type="text" class="form-control jcss" id="texinput" name="message" placeholder="Message" required>
                                    <span class="message_error"style="color:red;font-size:13px;"> </span>
                                    <div class="input-group-prepend">
                                   <input type="submit" name="send_message" class="btn btn-success" value="Send" id="btninput"/>
                                    </div>
                                </div>
                        </form>
                        <?php }?>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                        <script>
                            $(function(){
                                $('#btninput').prop('disabled',true);
                                $('#texinput').keyup(function(){
                                    if($(this).val() != ''){
                                        $('#btninput').prop('disabled',false);
                                    }
                                });
                            })
                        </script>
                        <?php
$email =$_SESSION['email'];
                      
                        if(isset($_POST['send_message'])){

                            $query ="SELECT * FROM user WHERE user_email='$email'";
                             $data =mysqli_query($conn,$query);
                             $userdata = mysqli_fetch_assoc($data);

                             $seller_query ="SELECT * FROM user WHERE user_email='$email'";
                             $seller_data =mysqli_query($conn,$seller_query);
                             $seller_sql = mysqli_fetch_assoc($seller_data);
                            

                             $user_post=$_GET['post_id'];
                             $qu ="SELECT * FROM ad_post WHERE post_id='$user_post'";
                             $da =mysqli_query($conn,$qu);
                             $ad_data = mysqli_fetch_assoc($da);

                             $post_id = $ad_data['post_id'];
                             $seller_id = $ad_data['user_id'];
                             $user_id = $userdata['user_id'];
                             $time =date("h:m:a d-m-Y");

                        $email =$_SESSION['email'];
                          $message = $_POST['message'];
                 
                            $sql_mess = "INSERT INTO message VALUES(NULL,'$user_id','$email', '$post_id','$seller_id','$message','$time')";
								$query = mysqli_query($conn,$sql_mess);

                                echo "<script>alert('Message send successfull');</script>";
								
                            
                        }
                        

                        ?>
                    </ul>
                    <br>
                    <h6 class="list-group-item list-group-item-action bg-info active"></h6>
                   
                          
<!----------------------------------------Model----------------------->



<div class="container">
    	<div class="row mt-4">
    		<div class="col">
    			<div class="card">
                    <?php if($result['user_id'] != $resu['user_id']){ ?>
    				<div  class="text-center mb-5"><button style="border-radius: 20px;" class="btn btn-danger text-white" data-toggle="modal" data-target="#bloodModal">Report this ad</button></div>
                <?php } ?>

    				<div class="modal fade" id="bloodModal" tabindex="-1" role="dialog" aria-labelledby="bloodModalLabel" aria-hidden="true">
	                  <div class="modal-dialog modal-lg" role="document">
	                    <div class="modal-content">
		                    <div class="modal-header">
		                      <h4 class="modal-title text-danger font-weight-bold">Report This ad</h4>
		                      <button class="close" data-dismiss="modal">&times;</button>
		                    </div>
			                 <form class="mt-4 col-lg-8 mx-auto" method="POST">
                             <div class="form-group">
			    					<label class="text-info font-weight-bold">Reason</label>
			    					<select class="form-control" name="reason" id="">
                                        <option value="">Reason</option>
                                        <option value="Duplicate">Duplicate</option>
                                        <option value="Wrong category">Wrong category</option>
                                        <option value="Fake">Fake</option>
                                    </select>
			    				</div>
			    				<div class="form-group">
			    					<label class="text-info font-weight-bold">Message</label>
			    					<textarea class="form-control" type="" id="reporttex" name="message" placeholder="Message" required></textarea>
                                    <span class="report_error"style="color:red;font-size:14px;"> </span>
                                </div>				
			    				<button class="btn btn-danger my-2" name="report" id="reportbtn" type="submit">Send report</button><bt>
			    			</form>

	                	</div>
	                 </div>
                </div>
</div>
</div>
</div>
</div>

			    		<!---End Model--->

<?php

if(isset($_POST['report'])){

    $user_post=$_GET['post_id'];
    $qu ="SELECT * FROM ad_post WHERE post_id='$user_post'";
    $da =mysqli_query($conn,$qu);
     $resu = mysqli_fetch_assoc($da);

     $ad_no =$resu['post_id'];
     $user_id = $result['user_id'];
     $user_email= $result['user_email'];
    $reason = $_POST['reason'];
    $message= $_POST['message'];
    $date =date("h:m:a d-m-Y");


 
        $sql = "INSERT INTO report_ad VALUES(NULL,'$user_id','$user_email','$reason','$message','$ad_no','$date')";
        $query = mysqli_query($conn,$sql);
        echo "<script>alert('Report Send Successful');</script>";
    
}



?>
                    <!---------------------------area------------------->

                </div>
                <div class="col-lg-9"><br>

                <h5 class="text-primary" style="font-size:20px;"><?php echo $resu['title']; ?></h5>
                <p class="" style="font-size:16px;">Posted on <?php echo $resu['time']; ?> <?php echo $resu['user_division']; ?>,<?php echo $resu['user_district']; ?></p>

                    <div class="card p-2" style="background:#e7edee; ">
                    <div class="image-gallery" style="">
                    <div class="big">
                        <img class="imageshow1" src="<?php echo $resu['image_1']; ?>"style="width:100%;height:350px;" alt="">
                        <img class="imageshow2" src="<?php echo $resu['image_2']; ?>"style="width:100%;height:350px;" alt="">
                        <img class="imageshow3" src="<?php echo $resu['image_3']; ?>"style="width:100%;height:350px;" alt="">
                        <img class="imageshow4" src="<?php echo $resu['image_4']; ?>"style="width:100%;height:350px;" alt="">
                        <img class="imageshow5" src="<?php echo $resu['image_5']; ?>"style="width:100%;height:350px;" alt="">
                    </div>
                <div class="sub pt-1">
                   <a href="#" class="img1"><img src="<?php echo $resu['image_1']; ?>" style="width:19%; height:100px;" alt=""></a>
                   <a href="#" class="img2"> <img src="<?php echo $resu['image_2']; ?>" style="width:19%;height:100px;" alt=""></a>
                   <a href="#" class="img3"> <img src="<?php echo $resu['image_3']; ?>" style="width:19%;height:100px;"alt=""></a>
                   <a href="#" class="img4"> <img src="<?php echo $resu['image_4']; ?>" style="width:20%;height:100px;" alt=""></a>
                   <a href="#" class="img5"> <img src="<?php echo $resu['image_5']; ?>" style="width:20%;height:100px;"alt=""></a>

                </div>
            </div><br>
            </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
<script>
    $(document).ready(function(){
            $('.imageshow1').show();
            $('.imageshow2').hide();
            $('.imageshow3').hide();
            $('.imageshow4').hide();
            $('.imageshow5').hide();
     $('.img1').click(function(){
            $('.imageshow1').show();
            $('.imageshow2').hide();
            $('.imageshow3').hide();
            $('.imageshow4').hide();
            $('.imageshow5').hide();
          
        });
        $('.img2').click(function(){
            $('.imageshow1').hide();
            $('.imageshow2').show();
            $('.imageshow3').hide();
            $('.imageshow4').hide();
            $('.imageshow5').hide();
          
        });
        $('.img3').click(function(){
            $('.imageshow1').hide();
            $('.imageshow2').hide();
            $('.imageshow3').show();
            $('.imageshow4').hide();
            $('.imageshow5').hide();
          
        });
        $('.img4').click(function(){
            $('.imageshow1').hide();
            $('.imageshow2').hide();
            $('.imageshow3').hide();
            $('.imageshow4').show();
            $('.imageshow5').hide();
          
        });
        $('.img5').click(function(){
            $('.imageshow1').hide();
            $('.imageshow2').hide();
            $('.imageshow3').hide();
            $('.imageshow4').hide();
            $('.imageshow5').show();
          
        });
    });
</script>
            <!------------------Description-Start----------------------------------------->
            <br>

            <div class="row" style="">
            
                    <div class="col-lg-6">
                    <h3 class="text-info">Tk <?php echo $resu['price']; ?></h3><br>
                        <ul>
                         <li class="list"><strong>Area : </strong> <?php echo $resu['user_division']; ?>,  <?php echo $resu['user_district']; ?></li>
                         
                            <li class="list"><strong>Condition : </strong> <?php echo $resu['condition']; ?></li>
                            <li class="list"><strong>Item Category : </strong><?php echo $resu['category']; ?></li>
                           
                        </ul>
                    </div>
                    <div class="col-lg-6"><br><br>
                           
                    </div>
                   </div><br>
                 
                        <h3 class="text-info">Description</h3>
                        
                        <h6><?php echo $resu['description'];?></h6>
                    <br><br>
                    <br><hr>
                    


           
         </div>     
    </div>
</div>
<br><br>
<!--------------------------------------------Semmiler-ads--------------->
 <div class="row bg-white  m-1 p-3">
<div class="col-lg-2"></div>
<div class="col-lg-8 ">
    <div class="pt-3 pb-5">
        <h2 class="text-center text-success font-weight-bold">Similar Items</h2><hr>
    </div>
</div>
<div class="col-lg-2"></div>
<div class="row">
<?php 

 $user_post=$_GET['post_id'];

    $sem_query ="SELECT * FROM ad_post WHERE post_id='$user_post'";
    $sem_execute =mysqli_query($conn,$sem_query);
     $sem = mysqli_fetch_assoc($sem_execute);

     $category = $sem['category'];
     $area = $sem['user_division'];
     $sub_category = $sem['sub_category'];
     $area = $sem['user_division'];
     $sub_area = $sem['user_district'];

    $re_query ="SELECT * FROM ad_post";
    $re_execute =mysqli_query($conn,$re_query);
    while($re = mysqli_fetch_assoc($re_execute)){
    $userid = $re['user_id'];
    $user_info ="SELECT * FROM user WHERE user_id='$userid'";
    $user_exe =mysqli_query($conn,$user_info);

    $user = mysqli_fetch_assoc($user_exe);

        if($category == $re['category']){?>
        
            <div class="col-lg-3 pb-3">
                <div class="card bg-light p-4">
                    <div class="row">
<!--                         <div class="col-lg-3">
                            <img class="card-img-top" src="<?php ?>" style="height:37px!important;width:37px!important; border:1px solid black; border-radius:50%;" alt="">
                        </div> -->
                        <div class="col-lg-12">
                              <h6 class="text-success"style="font-size:14px; text-transform: uppercase;"><strong><?php echo $user['user_first_name']; ?></strong> <strong><?php echo $user['user_last_nam'];?></strong></h6>
                              <p class="card-text text-left " style="font-size:12px;"><?php echo $re['time']; ?> </p>
                        </div>
                    </div>
                    <div class="row">
                        <img class="card-img-top" src="<?php echo $re['image_1']; ?>" style="height:170px;" alt="">
                    </div>
                    <div class="card-body">
                        <h6 class="card-title  font-weight-bold" style=" font-size:13px;"><?php echo $re['title'];?></h6>
                                <h6 class="card-title text-success font-weight-bold text-capitalize " style=" font-size:15px;"><?php echo $re['category'];?>, &nbsp; <?php echo $re['sub_category']; ?> </h6>
                                <h6 class="card-title font-weight-bold text-capitalize " style=" font-size:15px;"><?php echo $re['user_division']; ?>, &nbsp; <?php echo $re['user_district']; ?> </h6>
                                <h6 class="card-text text-success font-weight-bold">Tk <?php echo $re['price']; ?> </h6> 
                    </div>
                            <div class="text-right">
                            <?php echo "<a class='btn btn-block btn-success' href='product-details.php?post_id=$re[post_id]'>View details</a>";?>
                            </div>



                </div>
            </div>

       
   <?php }else{
    ?>



   <?php 
   }} ?>

        
     

</div>

<!--     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      1
    </div>
    <div class="carousel-item">
      dsfdsfdsf>
    </div>
    <div class="carousel-item">
     sdfdsfds
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div> 
 -->
</div>
<br><br>
</div>



<?php include('footer.php'); ?>