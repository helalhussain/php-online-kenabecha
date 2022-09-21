<?php 	
	include("server.php");
	include("header.php");
 ?>
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
				<div class="col-lg-1">		
				</div>
				<div class="col-lg-10">
					<h2 class="text-success pt-2">Inbox</h2><hr>
	    	<!--------------------------------all-messages------------------------------>
  
            <main class="app-content">
      <!-----------------list-header---------------------->
      <ul class="list-group">
                <a href="#" style="text-decoration: none;">
                  <li class="list-group "style="">
 
                      <div class="row pt-3 pl-4 pr-4">
                        <div class="col-lg-3">
                         
                        </div>
                        <div class="col-lg-3"></div>
                        <div class="col-lg-4">
                          
                        </div>
                      </div>
                </li>
                </a>
                <div class="inbox-lists" style="height:70vh; width:auto; overflow:scroll;">

                    <div class="compose bg-white p-2">
                    <form action="" method="POST">             

                <br>
              
                <div class="form-group ">
                  <label class="font-weight-bold"style="color:#009688;"></label>
                    Online Kenabecha
                    <span class="password_erro"style="color:red;font-size:14px;"> </span>
                  </div>
                  <div class="form-group ">
                  <label class="font-weight-bold"style="color:#009688;"></label>
                    <div class="input-group-append">
                    <input type="password" class="form-control text-info password1" name="password" autocomplete="off" placeholder="Subject:" >
                      <a class="eyepass1" style=" "></a>	
                    </div>
                    <span class="password_erro"style="color:red;font-size:14px;"> </span>
                  </div>
                  <div class="form-group ">
                  <label class="font-weight-bold"style="color:#009688;"></label>
                    <div class="input-group-append">
                    <textarea type="password" class="form-control text-info password1" name="password" style="height:250px;"autocomplete="off" placeholder="Subject:" ></textarea>
                      <a class="eyepass1" style=" "></a>	
                    </div>
                    <span class="password_erro"style="color:red;font-size:14px;"> </span>
                  </div>
                                <div class="form-group">
                    <button class="btn btn-info text-white" style="font-weight:bold;" type="submit" name="">Send</button>
                    <input type="file" class="pl-2"style=""id="img" name="img" accept="image/*">
               
                </div>
            </form><br><br>
                    </div>
    </main>
     



              
              </div>

    
      		<div class="col-lg-1"></div>
      	</div>
    </main>
     


				</div>
			</div>
		</div>
	</div>
	</div>
</div><br><br>
</div>
<?php include("footer.php"); ?>