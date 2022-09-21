
<?php 	
	include("server.php");
	include("header.php");
 ?>
<div class="bg-light" style="">
    <div class="container pt-5 ">
        <a class=" btn btn-info" href="add-post.php"><i class="fa fa-arrow-left"></i></a><br><br>

            <div class="row">
                <div class="col-lg-6">
                    <div class="main_category">
                    <h3 class="sub_category text-info  font-weight-bold" >Select a category</h3><br>
                        <form action="" method="POST">

                        <select class="form-control" name="category">
                            <option>Select a category</option>
                            <option  value="electronic">Electronic</option>
                            <option value="property">Property</option>
                            <option value="mobile">Mobiles</option>
                            <option value="Ppets&animals">Pets & Animals</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                        <!-- <ul class="list-group category">
                        <button href="#" class="electronic" name="electronic">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                        <i class="fa fa-laptop text-info font-weight-bold"> Electronics</i>
                            <span class="badge badge-primary badge-pill"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                        </li>
                        </button>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Ads
                            <span class="badge badge-primary badge-pill"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Junk
                            <span class="badge badge-primary badge-pill"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                        </li>
                        </ul> -->
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                <div class="sub_category" style="display:none;">
                    <h3 class="sub_category text-info  font-weight-bold">Select a sub category</h3><br>
                    <select class="form-control" name="category">
                            <option>Select a category</option>
                            <option  value="electronic">Electronic</option>
                            <option value="property">Property</option>
                            <option value="mobile">Mobiles</option>
                            <option value="Ppets&animals">Pets & Animals</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
            
                    </div>
                </div>
            </div>
        <br><br>
       
        <div class="row">
                <div class="col-lg-6">
                    <div class="main_category">
                    <h3 class="sub_category text-info  font-weight-bold" >Select City or Division</h3><br>
                        <form action="" method="POST">

                        <select class="form-control" name="category">
                            <option>Select a category</option>
                            <option  value="electronic">Electronic</option>
                            <option value="property">Property</option>
                            <option value="mobile">Mobiles</option>
                            <option value="Ppets&animals">Pets & Animals</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
               
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                <div class="sub_category font-weight-bold" style="">
                    <h3 class="text-info font-weight-bold">Select a local area within Dhaka</h3><br>
                    <select class="form-control" name="category">
                            <option>Select a category</option>
                            <option  value="electronic">Electronic</option>
                            <option value="property">Property</option>
                            <option value="mobile">Mobiles</option>
                            <option value="Ppets&animals">Pets & Animals</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
            
                    </div><br><br>
                    <a class=" btn btn-info" href="ad-post-details.php"> NEXT<i class="fa fa-arrow-right"></i></a><br><br>
                </div>
            </div>
        <br><br>
    </div>
 </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php

    if(isset($_POST['electronic'])){
        echo "<script>$('.sub_category').show();</script>";
       
    }

?>
<script>

    $(document).ready(function(){
        if('.electronic').click(function(){
            
        })
    })







</script>
<?php include("footer.php"); ?>