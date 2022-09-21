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
<div class="" style="background:#e7edee; ">
<div class="container pt-4">
    <div class="bg-white p-3" style=" border-radius: 2px;">
        <div class="row pt-4 pb-4 ml-1 mr-1 bg-info">

            <div class="col-lg-6">
                <h5 class="font-weight-bold text-white">Fill in the details</h5>
            </div>

            <div class="col-lg-3">
                <a href="#" style="font-size:20px;font-weight:bold; color:#fff;"><i class=""></i></a>
            </div>
            <div class="col-lg-3">
            <a href="#" style="font-size:20px;font-weight:bold;color:#fff;"> </a>
            </div>
        </div>
        <?php
		if(isset($_POST['ad_post'])){
      $loadcategory = $_POST['category'];
      $unloadcategory = $_POST['category'];
      $sub_category = $_POST['sub_category'];
      $loadarea = $_POST['area'];
      $unloadarea = $_POST['area'];
      $sub_area = $_POST['sub_area'];
      $condition = $_POST['condition'];
      $uncondition = $_POST['condition'];
      $title = $_POST['title'];
      $description = $_POST['description'];
      $price = $_POST['price'];
      $negotiable = $_POST['negotiable'];
      $phone = $_POST['phone'];

			
	}else{
    $loadcategory ="Select Category";
    $unloadcategory ="";
    $sub_category = "";
    $loadarea ="Select Area";
    $unloadarea ="";
    $sub_area = "";
    $condition = "Select Condition";
    $uncondition = "";
    $title = "";
    $description = "";
    $price = "";
    $negotiable = "";
    $phone = "";
  
	}

	

	?>
<!------------------------- Heading end ------------------------------->
          <div class="bg-white">
          <div class="row">
          <div class="col-lg-2"></div>
          <div class="col-lg-8">
            <form action="" method="POST" enctype="multipart/form-data">
            <br><br>
  			<div class="row">
            <div class="col-lg-6"> 
                <div class="form-group ">
                     <label class="font-weight-bold text-info">Area</label>
                        <select class="form-control text-info area" name="area" required>
                        <option value="<?php echo $unloadarea; ?>"><?php echo  $loadarea; ?></option>
                        <option value="Dhaka">Dhaka</option>
                          <option value="Chattogram">Chattogram</option>
                          <option value="Sylhet">Sylhet</option>
                          <option value="Khulna">Khulna</option>
                          <option value="Borishal">Borishal</option>
                          <option value="Rangpur">Rangpur</option>
                          <option value="Rajshahi">Rajshahi</option>
                          <option value="Mymenshingh">Mymenshingh</option>
                          <option value="Comilla">Comilla</option>
                        </select>
                        <span class="area_error"style="color:red;font-size:14px;"> </span>
                      </div>
                   <br>
                </div>
      
             <div class="col-lg-6">
              <div class="form-group ">
                        <label class="font-weight-bold text-info">Category</label>
                      <select class="form-control text-info Category" name="category" required> 
                          <option value="<?php $unloadcategory; ?>"><?php echo $loadcategory; ?></option>
                          <option value="Electronic">Electronic</option>
                          <option value="Mobile">Mobile</option>
                          <option value="Vehicle">vehicles</option>
                          <option value="Property">Property</option>
                          <option value="Animal">Pets & Animals</option>
                          <option value="Sport">Hobbies & Sports</option>
                          <option value="Fashion">Fashion & Beauty</option>
                          <option value="Living">Home & Living</option>

                        </select>
                      
                      <span class="category_error"style="color:red;font-size:14px;"> </span>
              </div><br>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6"> 
                <div class="form-group ">
                     <label class="font-weight-bold text-info">Sub area</label>
                     <input type="text" class="form-control text-info title" value="<?php echo $sub_area; ?>" name="sub_area" placeholder="Sub area" required>
                        <span class="sub_area_error"style="color:red;font-size:14px;"> </span>
                      </div>
                   <br>
                </div>
      
             <div class="col-lg-6">
              <div class="form-group ">
                        <label class="font-weight-bold text-info">Sub category</label>
                        <input type="text" class="form-control text-info title" value="<?php echo $sub_category; ?>" name="sub_category" placeholder="Sub category" required>
                     
                      <span class="sub_category_error"style="color:red;font-size:14px;"> </span>
              </div><br>
            </div>
        </div>

		               <label class="font-weight-bold text-info">Condition</label><br>
										<div class="form-check form-check-inline">
                      <select class="form-control text-info" name="condition" required> 
                          <option value="<?php echo $uncondition; ?>"><?php echo $condition; ?></option>
                          <option value="Used">Used</option>
                          <option value="New">New</option>
                        </select>
										</div> 
                    <span class="condition_error"style="color:red;font-size:14px;"> </span>
                    <br><br>

                              <div class="form-group ">
                                    <label class="font-weight-bold text-info">Title</label>
                                    <input type="text" class="form-control text-info title" value="<?php echo $title; ?>" name="title" placeholder="Keep it short!" required>
                                  <span class="title_error"style="color:red;font-size:14px;"> </span>
                                </div>

                                <div class="form-group ">
                                    <label class="font-weight-bold text-info">Description</label>
                                    <input type="text" class="form-control text-info "  style="height:50px;"value="<?php echo $description; ?>" name="description" placeholder="Description" required>
                                    <span class="description_error"style="color:red;font-size:14px;"> </span>
							              	</div>

                        <div class="form-group ">
                          <label class="font-weight-bold text-info">Price</label>
                            <div class="input-group-append">
                            <input type="text" class="form-control text-info" value="<?php echo $price; ?>" name="price" placeholder="Price" required>
                            </div>
                            <span class="price_error"style="color:red;font-size:14px;"> </span>
                          </div>
            
                            <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" name="negotiable"  value="negotiable">
                          <label class="form-check-label text-info" for="inlineRadio1">Negotiable</label>
                            </div>
                                <br><br><hr>

                     <div class="row">
                       <div class="col-lg-4">
                       <div class="form-group ">
									          <label class="font-weight-bold text-info">Upto 5 photos</label>
                                <div class="input-group-append">
                                <input type="file" name="uploadfile1" class="btn btn-primary" aria-label="Large" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                                
                            </div>
                       </div>
                       <div class="col-lg-4">
                       <div class="form-group ">
									          <label class="font-weight-bold text-info"></label>
                                <div class="input-group-append">
                                <input type="file" name="uploadfile2" class="btn btn-primary" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                                </div>
                               
                            </div>
                       </div>
                       <div class="col-lg-4">
                       <div class="form-group ">
									          <label class="font-weight-bold text-info"></label>
                                <div class="input-group-append">
                                <input type="file" name="uploadfile3" class="btn btn-primary" aria-label="Large" aria-describedby="inputGroup-sizing-sm" > 
                                </div>
                                
                            </div>
                       </div>
                       <div class="col-lg-4">
                       <div class="form-group ">
									          <label class="font-weight-bold text-info"></label>
                                <div class="input-group-append">
                                <input type="file" name="uploadfile4" class="btn btn-primary" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                                </div>
                                
                            </div>
                       </div>
                       <div class="col-lg-4">
                       <div class="form-group ">
									          <label class="font-weight-bold text-info"></label>
                                <div class="input-group-append">
                                <input type="file" name="uploadfile5" class="btn btn-primary" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                                </div>
                               
                            </div>
                       </div>
                     </div>

                                <br>
                                <h5 class="font-weight-bold ">Contact details</h5><hr>
                                <br>
                                <label class="font-weight-bold text-info">Name </label><br>
                                <span><?php echo $result['user_first_name']; ?> &nbsp;<?php echo  $result['user_last_nam'];  ?></span><br><br>
                                <label class="font-weight-bold text-info">Email </label><br>
                                <span><?php echo  $result['user_email'];  ?></span><br><br>

                  <div class="form-group ">
									 <label class="font-weight-bold text-info">Add phone number</label>
									  <div class="input-group-append">
									  <input type="number" class="form-control text-info" value="<?php echo $phone; ?>" autocomplete="off" name="phone" placeholder="Phone no" required>
									  </div>
									  <span class="price_error"style="color:red;font-size:14px;"> </span>
							    </div>
                   <div class="form-group">
						    	  <button class="btn btn-info text-white" style="font-weight:bold;" type="submit"
                    name="ad_post">Post Ad</button>
						    </div>
            </form><br><br>
            </div>
            <div class="col-lg-2"></div>
          </div>
          </div>
          </div>

    </div>
    <br><br>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <?php
     



    if(isset($_POST['ad_post'])){

      $user_id = $result['user_id'];
      $user_first_name = $result['user_first_name'];
      $user_last_name = $result['user_last_nam'];
      $user_email = $result['user_email'];
      $user_image = $result['user_image'];
      $user_phone_no = $result['phone_no'];
      


      ////         ////
      ////         ////
      ////         ////
      ////         ////
      ////         ////
      /////////////////
      ////         ////
      ////         ////
      ////         ////
      ////         //// 

      $category= $_POST['category'];
      $sub_category = $_POST['sub_category'];
      $area = $_POST['area'];
      $sub_area = $_POST['sub_area'];
      $condition = $_POST['condition'];
      $title = $_POST['title'];
      $description = $_POST['description'];
      $price = $_POST['price'];
      $negotiable = $_POST['negotiable'];
      $phone = $_POST['phone'];
      $time =date("h:m:a d-m-Y");
   


      $filename1 = $_FILES['uploadfile1']['name'];
      $tempname1 =$_FILES['uploadfile1']['tmp_name'];
      $image_1 ="image/ad_post/".$filename1;
      move_uploaded_file($tempname1,$image_1);

      $filename2 = $_FILES['uploadfile2']['name'];
      $tempname2 =$_FILES['uploadfile2']['tmp_name'];
      $image_2 ="image/ad_post/".$filename2;
      move_uploaded_file($tempname2,$image_2);
      
      $filename3 = $_FILES['uploadfile3']['name'];
      $tempname3 =$_FILES['uploadfile3']['tmp_name'];
      $image_3 ="image/ad_post/".$filename3;
      move_uploaded_file($tempname3,$image_3);
      
      $filename4 = $_FILES['uploadfile4']['name'];
      $tempname4 =$_FILES['uploadfile4']['tmp_name'];
      $image_4 ="image/ad_post/".$filename4;
      move_uploaded_file($tempname4,$image_4);

      $filename5 = $_FILES['uploadfile5']['name'];
      $tempname5 =$_FILES['uploadfile5']['tmp_name'];
      $image_5 ="image/ad_post/".$filename5;
      move_uploaded_file($tempname5,$image_5);

     $able = "able";

   $email =$_SESSION['email'];

   
      if(strlen($description) < 5 || strlen($description) > 300){
        echo "<script>$('.description_error').html('Sub description must be 10 to 300 digits.');</script>";
      }
   else{
    
        $sql = "INSERT INTO ad_post VALUES(NULL,'$user_id','$email',
        '$phone','$category','$sub_category','$area','$sub_area','$condition','$title','$description',
        '$price','$negotiable','$image_1','$image_2','$image_3','$image_4','$image_5','$time','$able')";
        $query = mysqli_query($conn,$sql);
        
     
      if($query){
          ?>
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/onlinekenabecha/my-post.php">

          <?php
        }else{
  
      }}

      }



  ?>



<?php include('footer.php'); ?>