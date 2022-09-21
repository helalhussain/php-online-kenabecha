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
            <form action="">
                 <div class="btn-group">
                    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <i class="fa fa-share"></i> Share
                    </button>
                    <div class="dropdown-menu ">
                        <a class="dropdown-item font-weight-bold " href="#"> <i class="fa text-white"style=""></i> Facebook</a>
                        <a class="dropdown-item font-weight-bold" href="#"> <i class="fa"></i>Twitter</a>

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
                        <a type="button" class="" style="font-size:22px;"><i class="fas fa-phone-alt text-info mr-2" style="font-size:25px;"></i>01939275547</a>    
                        </li>     
                        <a  href="#" class="list-group-item d-flex font-weight-bold justify-content-between align-items-center text-primary">
                        <button type="button" class="" style="font-size:22px;"><i class="fa fa-comments text-info mr-2" style="font-size:25px;"> Chat</i></button>    
                        </a>
                    </ul>
                    <br>
                    <h6 class="list-group-item list-group-item-action bg-info active"></h6>
                   
                          
<!----------------------------------------Model----------------------->



<div class="container">
    	<div class="row mt-4">
    		<div class="col">
    			<div class="card">
    				<div  class="text-center mb-5"><button style="border-radius: 20px;" class="btn btn-danger text-white" data-toggle="modal" data-target="#bloodModal">Report this ad</button></div>

    				<div class="modal fade" id="bloodModal" tabindex="-1" role="dialog" aria-labelledby="bloodModalLabel" aria-hidden="true">
	                  <div class="modal-dialog modal-lg" role="document">
	                    <div class="modal-content">
		                    <div class="modal-header">
		                      <h4 class="modal-title text-danger font-weight-bold">Report This ad</h4>
		                      <button class="close" data-dismiss="modal">&times;</button>
		                    </div>
			                 <form class="mt-4 col-lg-8 mx-auto">
                             <div class="form-group">
			    					<label class="text-info font-weight-bold">Reason</label>
			    					<select class="form-control" name="reason" id="">
                                        <option value="">Reason</option>
                                    </select>
			    				</div>
                             <div class="form-group">
			    					<label class="text-info font-weight-bold">Email</label>
			    					<input class="form-control" type="" name="" placeholder="Enter Your Phone Email">
			    				</div>
			    				<div class="form-group">
			    					<label class="text-info font-weight-bold">Message</label>
			    					<textarea class="form-control" type="" name="" placeholder="Message"></textarea>
			    				</div>
              
			    				
			    				
			    				<button class="btn btn-danger my-2" type="submit">Send report</button>
			    			</form>
	                	</div>
	                 </div>
                </div>
</div>
</div>
</div>
</div>



			    		<!---End Model--->




                    <!---------------------------area------------------->

                </div>
                <div class="col-lg-9"><br>

                <h5 class="text-primary" style="font-size:20px;"><?php echo $resu['title']; ?></h5>
                <p class="text-primary " style="font-size:16px;">Posted on <?php echo $resu['time']; ?> <?php echo $resu['user_division']; ?>,<?php echo $resu['user_district']; ?></p>

                    <div class="card p-2" style="background:#e7edee; ">
                    <div class="image-gallery" style="">
                <div class="big">
                    <img src="<?php echo $resu['image_1']; ?>"style="width:100%;height:350px;" alt="">
                </div>
                <div class="sub pt-1">
                   <a href="#"><img src="<?php echo $resu['image_1']; ?>" style="width:19%; height:100px;" alt=""></a>
                   <a href="#"> <img src="<?php echo $resu['image_1']; ?>" style="width:19%;height:100px;" alt=""></a>
                   <a href="#"> <img src="<?php echo $resu['image_1']; ?>" style="width:19%;height:100px;"alt=""></a>
                   <a href="#"> <img src="<?php echo $resu['image_1']; ?>" style="width:20%;height:100px;" alt=""></a>
                   <a href="#"> <img src="<?php echo $resu['image_1']; ?>" style="width:20%;height:100px;"alt=""></a>

                </div>
            </div><br>
            </div>

            <!------------------Description-Start----------------------------------------->
            <br>

            <div class="row" style="">
            
                    <div class="col-lg-6">
                    <h3 class="text-info">Tk <?php echo $resu['price']; ?></h3><br>
                        <ul>
                            <li class="list"><strong>Condition : </strong> <?php echo $resu['condition']; ?></li>
                            <li class="list"><strong>Item type : </strong><?php echo $resu['sub_category']; ?></li>
                            <li class="list"><strong>Brand : </strong><?php echo $resu['category']; ?></li>
                        </ul>
                    </div>
                    <div class="col-lg-6"><br><br>
                           
                    </div>
                   </div><br>
                   <h3 class="text-info">Features</h3>
                <h6>Bluetooth, Camera, Expandable Memory, Fingerprint Sensor, GPS, Physical keyboard, 3G, 4G, GSM, Touch screen</h6>
                        <br>
                        <h3 class="text-info">Description</h3>
                        
                        <h6><?php echo $resu['description'];?></h6>
                    <br><br>
                    <br><hr>
                    


           
         </div>     
    </div>
</div>
<br><br>

</div>



<?php include('footer.php'); ?>