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

$edit_query ="SELECT * FROM user WHERE user_email='$email'";
$data =mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);
$edit_post_id =$_GET['post_id'];

$edit_query ="SELECT * FROM ad_post WHERE post_id='$edit_post_id'";
$edit_data =mysqli_query($conn,$edit_query);
$edit_result = mysqli_fetch_assoc($edit_data);

$this_email = $edit_result['user_email'];


$user_account = "SELECT * FROM user WHERE user_email='$this_email'";
$user_account_data = mysqli_query($conn,$user_account);
$user_account_result = mysqli_fetch_assoc($user_account_data);



?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Title -->
      <title>Online kenabecha</title>
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
      <!-- Font Google -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
      <!-- Bootstrap Css -->
      <link href="assets/css/bootstrap.min.css" rel="stylesheet">
      <!-- Font Awesome Css -->
      <link href="assets/css/font-awesome.min.css" rel="stylesheet">
	 
      <!-- Magnific Popup Css -->
      <link href="assets/css/magnific-popup.css" rel="stylesheet">
      <!-- Owl Carousel Css -->
      <link href="assets/css/owl.carousel.css" rel="stylesheet">
      <!-- Main Css -->
      <link href="assets/css/style.css" rel="stylesheet">
      <!-- Responsive Css -->
      <link href="assets/css/responsive.css" rel="stylesheet">
      <link href="assets/css/onlinekenabecha.css" rel="stylesheet">
      <link href="assets/css/header.css" rel="stylesheet">
      <link href="assets/css/footer.css" rel="stylesheet">
      <!---login-form-CSS-->
     <link rel="stylesheet" type="text/css" href="assets/css/util.css">
      <link rel="stylesheet" type="text/css" href="assets/css/main.css">
     <link rel="stylesheet" type="text/css" href="assets/css/my-account.css">
   </head>
<body>
<div class="" style="background:#e7edee; ">

<div class="container pt-4">
    <div class="bg-white p-3" style=" border-radius: 2px;">
        <div class="row pt-4 pb-4 ml-1 mr-1 bg-info">

            <div class="col-lg-6">
                <h5 class="font-weight-bold text-white">Edit Your Ad</h5>
            </div>

            <div class="col-lg-3">
                <a href="#" style="font-size:20px;font-weight:bold; color:#fff;"><i class=""></i></a>
            </div>
            <div class="col-lg-3">
            <a href="#" style="font-size:20px;font-weight:bold;color:#fff;"> </a>
            </div>
        </div><br>
        <a href="my-post.php" class="btn btn-info">Back</a>
        <?php
	// 	if(isset($_POST['ad_post'])){
 //      $category= $_POST['category'];
 //      $sub_category = $_POST['sub_category'];
 //      $area = $_POST['area'];
 //      $sub_area = $_POST['sub_area'];
 //      $condition = $_POST['condition'];
 //      $title = $_POST['title'];
 //      $description = $_POST['description'];
 //      $price = $_POST['price'];
 //      $negotiable = $_POST['negotiable'];
 //      $phone = $_POST['phone'];

			

			
	// }else{
 //    $category= "";
 //    $sub_category = "";
 //    $area = "";
 //    $sub_area = "";
 //    $condition = "";
 //    $title = "";
 //    $description = "";
 //    $price = "";
 //    $negotiable = "";
 //    $phone = "";
	// }

	

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
                        <option value="<?php echo $edit_result['user_division']; ?>"><?php echo $edit_result['user_division']; ?></option>
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
                          <option value="<?php echo $edit_result['category']; ?>"><?php echo $edit_result['category']; ?></option>
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
                     <input type="text" class="form-control text-info title" value="<?php echo $edit_result['user_district']; ?>" name="sub_area" placeholder="Sub area" required>
                        <span class="sub_area_error"style="color:red;font-size:14px;"> </span>
                      </div>
                   <br>
                </div>
      
             <div class="col-lg-6">
              <div class="form-group ">
                        <label class="font-weight-bold text-info">Sub category</label>
                        <input type="text" class="form-control text-info title" value="<?php echo $edit_result['sub_category']; ?>" name="sub_category" placeholder="Sub category" required>
                     
                      <span class="sub_category_error"style="color:red;font-size:14px;"> </span>
              </div><br>
            </div>
        </div>

		               <label class="font-weight-bold text-info">Condition</label><br>
                   <div class="form-check form-check-inline">
                      <select class="form-control text-info" name="condition" required> 
                          <option value="<?php echo $edit_result['condition']; ?>"><?php echo $edit_result['condition']; ?></option>
                          <option value="Used">Used</option>
                          <option value="New">New</option>
                        </select>
										</div> 
                    <span class="condition_error"style="color:red;font-size:14px;"> </span>
                    <br><br>

                              <div class="form-group ">
                                    <label class="font-weight-bold text-info">Title</label>
                                    <input type="text" class="form-control text-info title" value="<?php echo $edit_result['title'];  ?>" name="title" placeholder="Keep it short!" required>
                                  <span class="title_error"style="color:red;font-size:14px;"> </span>
                                </div>

                                <div class="form-group ">
                                    <label class="font-weight-bold text-info">Description</label>
                                    <input type="text" class="form-control text-info "  style="height:50px;"value="<?php echo $edit_result['description']; ?>" name="description" placeholder="Description" required>
                                    <span class="description_error"style="color:red;font-size:14px;"> </span>
							              	</div>

                        <div class="form-group ">
                          <label class="font-weight-bold text-info">Price</label>
                            <div class="input-group-append">
                            <input type="text" class="form-control text-info" value="<?php echo $edit_result['price']; ?>" name="price" placeholder="Price" required>
                            </div>
                            <span class="price_error"style="color:red;font-size:14px;"> </span>
                          </div>
            
                            <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" name="negotiable"  value="Negotiable">
                          <label class="form-check-label text-info" for="inlineRadio1">Negotiable</label>
                            </div>
                                <br><br><hr>

                     <div class="row">
                       <div class="col-lg-4">
                       <div class="form-group ">
									          <label class="font-weight-bold text-info">Upto 5 photos</label>
                                <div class="input-group-append">
                                <input type="file" name="uploadfile1" class="btn btn-primary" aria-label="Large" aria-describedby="inputGroup-sizing-sm" >
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
                                <span><?php echo $user_account_result['user_first_name']; ?> &nbsp;<?php echo  $user_account_result['user_last_nam'];  ?></span><br><br>
                                <label class="font-weight-bold text-info">Email </label><br>
                                <span><?php echo $user_account_result['user_email']; ?></span><br><br>

                  <div class="form-group ">
									 <label class="font-weight-bold text-info">Add phone number</label>
									  <div class="input-group-append">
									  <input type="number" class="form-control text-info" value="<?php echo $edit_result['phone_no']; ?>" autocomplete="off" name="phone" placeholder="Phone no" required>
									  </div>
									  <span class="price_error"style="color:red;font-size:14px;"> </span>
							    </div>
                   <div class="form-group">
						    	  <button class="btn btn-info text-white" style="font-weight:bold;" type="submit"
                    name="ad_post">Edit Ad</button>
                    <a href="my-post.php" class="btn btn-danger">Cancel</a>
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
     

     $edit_post =$_GET['post_id'];

    if(isset($_POST['ad_post'])){

      // $user_id = $result['user_id'];
      // $user_first_name = $result['user_first_name'];
      // $user_last_name = $result['user_last_nam'];
      // $user_email = $result['user_email'];
      // $user_image = $result['user_image'];
      // $user_phone_no = $result['phone_no'];
      


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

 


  $edit_now="UPDATE ad_post SET phone_no='$phone',category='$category',sub_category='$sub_category',user_division='$area', user_district='$sub_area', title='$title', description='$description', price='$price',
  image_1='$image_1',image_2='$image_2',image_3='$image_3',image_4='$image_4',image_5='$image_5' WHERE post_id='$edit_post'";
   $edit_post_q = mysqli_query($conn,$edit_now);





              echo '<script type = "text/javascript">
              jQuery(function validation(){
              
              
              swal({
              title: "'.$btn.'",
              text: "Edit ad successfull",
              icon: "success",
              button: "Ok",
            
              });
                  
              });
              
              </script>';


            if($edit_post_q){
              ?>
                <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/onlinekenabecha/my-post.php">

              <?php
            }else{

            }
                            
      
      }

  ?>



<?php include('footer.php'); ?>