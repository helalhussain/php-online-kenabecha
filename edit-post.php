<?php

include("server.php");


$email =$_SESSION['email'];

if($email==true)
{

}else{
	header('location:login.php');
}
 include('header.php');
  ?>

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
<!------------------------- Heading end ------------------------------->
          <div class="bg-white">
          <div class="row">
          <div class="col-lg-3"></div>
          <div class="col-lg-6">
            <form action="" method="POST">
            <br><br>
  			<div class="row">
            <div class="col-lg-6"> 
                <div class="form-group ">
                          <label class="font-weight-bold text-info">Area</label>
                        <select class="form-control text-info  gender" name="gender">
                        <option >Area</option>
                          <option value="male">Dhaka</option>
                          <option value="female">Chattogram</option>
                          <option value="male">Sylhet</option>
                          <option value="female">Khulna</option>
                          <option value="male">Borishal</option>
                          <option value="female">Chattogram</option>
                          <option value="male">Rangpur</option>
                          <option value="female">Rajshahi</option>
                          <option value="female">Mymenshingh</option>
                          <option value="female">Comilla</option>
                        </select>
                        <span class="type_error"style="color:red;font-size:14px;"> </span>
                      </div><br>
                </div>
             <div class="col-lg-6">
              <div class="form-group ">
                        <label class="font-weight-bold text-info">Category</label>
                      <select class="form-control text-info  gender" name="gender">
                          <option value="">Category</option>
                          <option value="">Electronic</option>
                          <option value="">Mobile</option>
                          <option value="">vehicles</option>
                          <option value="">Property</option>
                          <option value="">Pets & Animals</option>
                          <option value="">Hobbies & Sports</option>
                          <option value="">Fashion & Beauty</option>
                          <option value="">Home & Living</option>

                        </select>
                      </select>
                      <span class="type_error"style="color:red;font-size:14px;"> </span>
              </div><br>
            </div>
        </div>

		               <label class="font-weight-bold text-info">Condition</label><br>
									 	<div class="form-check form-check-inline">
										  <input class="form-check-input" type="radio" name="male" id="inlineRadio1" value="option1">
										  <label class="form-check-label text-info" for="inlineRadio1">Used</label>
										</div>
										<div class="form-check form-check-inline">
										  <input class="form-check-input text-info" type="radio" name="femail" id="inlineRadio2" value="option2">
										  <label class="form-check-label text-info" for="inlineRadio2">New</label>
										</div> <br><br>


                              <div class="form-group ">
                                    <label class="font-weight-bold text-info">Title</label>
                                    <input type="text" class="form-control text-info title" name="title" placeholder="Keep it short!" autocomplete="off">
                                  <span class="title_error"style="color:red;font-size:14px;"> </span>
                                </div>

                                <div class="form-group ">
                                    <label class="font-weight-bold text-info">Description</label>
                                    <textarea class="form-control text-info description" name="description" placeholder="" rows="3"></textarea>
                                     <span class="description_error"style="color:red;font-size:14px;"> </span>
							              	</div>

                        <div class="form-group ">
                          <label class="font-weight-bold text-info">Price</label>
                            <div class="input-group-append">
                            <input type="number" class="form-control text-info" autocomplete="off" name="Price" placeholder="Price" >
                            </div>
                            <span class="price_error"style="color:red;font-size:14px;"> </span>
                          </div>
            
                            <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" name="negotiable"  value="negotiable">
                          <label class="form-check-label text-info" for="inlineRadio1">Negotiable</label>
                            </div>
                                <br><br><hr>

                            <div class="form-group ">
									          <label class="font-weight-bold text-info">Add upto 5 photos</label>
                   
                                <div class="input-group-append">
                                <input type="file" name="fileToUpload" id="fileToUpload">

                                </div>
                                <span class="price_error"style="color:red;font-size:14px;"> </span>
                              </div>
                                <br>
                                <h5 class="font-weight-bold ">Contact details</h5><hr>
                                <br>
                                <label class="font-weight-bold text-info">Name </label><br>
                                <span>Helal Hussain</span><br><br>
                                <label class="font-weight-bold text-info">Email </label><br>
                                <span>helalpro7@gmail.com</span><br><br>

                  <div class="form-group ">
									 <label class="font-weight-bold text-info">Add phone number</label>
									  <div class="input-group-append">
									  <input type="number" class="form-control text-info" autocomplete="off" name="Price" placeholder="Phone no" >
									  </div>
									  <span class="price_error"style="color:red;font-size:14px;"> </span>
							    </div>
                                <div class="form-group">
						    	  <button class="btn btn-info text-white" style="font-weight:bold;" type="submit" name="">Post Ad</button>
						    </div>
            </form><br><br>
            </div>
            <div class="col-lg-3"></div>
          </div>
          </div>
          </div>

    </div>
    <br><br>
</div>










<?php include('footer.php'); ?>