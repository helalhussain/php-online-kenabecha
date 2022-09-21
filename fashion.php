
<?php 
session_start();
include("server.php");

error_reporting(0);
$email =$_SESSION['email'];

$query ="SELECT * FROM user WHERE user_email='$email'";
$data =mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);


?>
<?php include('header.php'); ?>

<div class="" style="background:#e7edee; ">
<div class="container pt-4">
            <div class="faq bg-white p-3 " style=" border-radius: 2px;">
            <div class="p-2">
        <div class="row pt-3 bg-info">
            <div class="col-lg-3">
                <a href="#" style="font-size:20px;font-weight:bold; color:#fff;"><i class="fas fa-map-marker-alt"></i> Bangladesh</a>
            </div>
            <div class="col-lg-3">
            <a href="#" style="font-size:20px;font-weight:bold;color:#fff;"><i class=""></i> Fashion & Beauty</a>
            </div>
            <div class="col-lg-6">
            <form action="" method="GET">
            <div class="input-group mb-3">
                <input type="text" name="search" class="form-control" value="<?php if(isset($_GET['search'])){
                    echo $_GET['search'];
                } ?>" placeholder="What are you looking for?" required>
                <div class="input-group-append">
                    <button type="submit" class="btn btn-light" name="sear" id="basic-addon2">Search</button>
                </div>
            </div>
            </form>
            </div>
        </div>
        </div>
<!-------------------------------------------------------->
            <div class="row pt-4 pb-4 bg-white">
                <div class="col-lg-3">
                    <h6 class="list-group-item list-group-item-action active bg-info">Sort results by</h6>
                    <ul class="list-group">
                    <a href="all-ads.php">
                        <li class="list-group-item d-flex font-weight-bold justify-content-between align-items-center">
                            Newest on top
                            <span class="badge badge badge-pill "><i class="fa fa-angle-right"></i></span>
                        </li>
                        </a>
                    </ul>
                    <br>
                    <h6 class="list-group-item list-group-item-action bg-info active">All Categories</h6>
                    <ul class="list-group">
                        <a href="mobiles.php">
                        <li class="list-group-item d-flex font-weight-bold align-items-center">
                        <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                        Mobiles
                        </li>
                        </a>
                        <a href="electronics.php">
                        <li class="list-group-item text d-flex font-weight-bold align-items-center">
                        <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                            Electronics
                        </li>
                        </a>
                        <a href="vehicles.php">
                        <li class="list-group-item d-flex font-weight-bold align-items-center">
                        <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                        vehicles
                        </li>
                        </a>
                        <a href="property.php">
                        <li class="list-group-item d-flex font-weight-bold align-items-center">
                        <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                            Property
                        </li>
                        </a>
                        <a href="animals.php">
                        <li class="list-group-item d-flex font-weight-bold align-items-center">
                        <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                        Pets & Animals
                        </li>
                        </a>
                        <a href="sports.php">
                        <li class="list-group-item d-flex font-weight-bold align-items-center">
                        <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                        Hobbies & Sports
                        </li>
                        </a>
                        <a href="fashion.php">
                        <li class="list-group-item text-primary d-flex font-weight-bold align-items-center">
                        <span class="badge badge-primary badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                        Fashion & Beauty
                        </li>
                        </a>
                        <a href="living.php">
                        <li class="list-group-item d-flex font-weight-bold align-items-center">
                        <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                        Home & Living
                        </li>
                        </a>
                    </ul>
                    <br>
                    <!---------------------------area------------------->
                    <h6 class="list-group-item list-group-item-action bg-info active">All of Bangladesh</h6>
                    <ul class="list-group">
                        <a href="dhaka.php">
                        <li class="list-group-item d-flex font-weight-bold align-items-center">
                        <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                        Dhaka
                        </li>
                        </a>
                        <a href="chattogram.php">
                        <li class="list-group-item d-flex font-weight-bold align-items-center">
                        <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                        Chattogram
                        </li>
                        </a>
                        <a href="sylhet.php">
                        <li class="list-group-item d-flex font-weight-bold align-items-center">
                        <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                        Sylhet
                        </li>
                        </a>
                        <a href="khulna.php">
                        <li class="list-group-item d-flex font-weight-bold align-items-center">
                        <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right"></i> </span>
                        Khulna
                        </li>
                        </a>
                        <a href="#">
                        <li class="list-group-item d-flex font-weight-bold align-items-center">
                        <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                        Borishal
                        </li>
                        </a>
                        <a href="#">
                        <li class="list-group-item d-flex font-weight-bold align-items-center">
                        <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                        Rangpur
                        </li>
                        </a>
                        <a href="rajshahi.php">
                        <li class="list-group-item d-flex font-weight-bold align-items-center">
                        <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                        Rajshahi
                        </li>
                        </a>
                        <a href="mymenshingh.php">
                        <li class="list-group-item d-flex font-weight-bold align-items-center">
                        <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                        Mymenshingh
                        </li>
                        </a>
                        </a>
                        <a href="comilla.php">
                        <li class="list-group-item d-flex font-weight-bold align-items-center">
                        <span class="badge badge badge-pill mr-2"><i class="fa fa-angle-right font-weight-bold"></i> </span>
                        Comilla
                        </li>
                        </a>
                    </ul>
                </div>
                <div class="col-lg-9"><br>
                <h5 class="text-dark" style="font-size:14px;"><a href="onlinekenabecha.php">Home</a> / <a href="all-ads.php">All ads</a> / <a href="fashion.php">Fashion & Beauty</a></h5>
                <h5 class="font-weight-bold text-info">Fashion & Beauty in Bangladesh</h5><hr><br>

              
                 <!---------------------------Search-Start--------------------->
                 <div class="row">
          <?php 
                                    

                                    if(isset($_GET['sear']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM ad_post WHERE CONCAT(category,user_division,sub_category,user_district) LIKE '%$filtervalues%' ORDER BY post_id DESC";

                                      $query_run = mysqli_query($conn, $query);


                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                
            <div class="col-lg-4 pb-3">
                 <div class="card bg-light pt-2 pr-2 pl-2">
                   <div class="row">
         
                      
                     </div>
                     <img class="card-img-top" src="<?php echo $items['image_1']; ?>" style="height:170px;" alt="">
                      <div class="card-body">
                            <h6 class="card-title  font-weight-bold" style=" font-size:13px;"><?php echo $items['title'];?></h6>
                                <h6 class="card-title text-primary font-weight-bold text-capitalize " style=" font-size:15px;"><?php echo $items['category'];?>, &nbsp; <?php echo $items['sub_category']; ?> </h6>
                                <h6 class="card-title font-weight-bold text-capitalize " style=" font-size:15px;"><?php echo $items['user_division']; ?>, &nbsp; <?php echo $items['user_district']; ?> </h6>
                                        <div class="row">
                             <div class="col-lg-8">
                                <h6 class="card-text text-primary font-weight-bold">Tk <?php echo $items['price']; ?> </h6> 
                            </div>   
                              <div class="col-lg-4">
                                 <div class="text-right">
                                     <?php echo "<a class='btn btn-info' href='product-details.php?post_id=$items[post_id]'>View</a>";?>
                                 </div>
                              </div>  

                          </div>
                            </div>
                </div>
           </div>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
         </div>
                                 <!---------------------------Search-End--------------------->
   <div class="row">
<!----------------------------------------all ads echo start-------------------------->
     <?php
             $limit = 9;
             if(isset($_GET['page'])){
                $page = $_GET['page'];
            }else{
                $page = 1;
            }
              $offset =($page -1) * $limit;
                 $qu ="SELECT * FROM ad_post WHERE able='able' and category='Fashion' ORDER BY post_id DESC LIMIT {$offset}, {$limit}";
                 $d =mysqli_query($conn,$qu);
                 $row=mysqli_num_rows($d);
                 while($res =mysqli_fetch_assoc($d)){
                     $post_id = $res['user_id'];
                    $queryfrom ="SELECT * FROM user WHERE user_id='$post_id'";
                    $datafrom =mysqli_query($conn,$queryfrom);
                    $userfrom = mysqli_fetch_assoc($datafrom);                          
                   ?>     

          <div class="col-lg-4 pb-3">
          <div class="card bg-light pt-2 pr-2 pl-2">
              <div class="row">
                  <div class="col-lg-10">
                      <div class="row">
                          <div class="col-lg-3">
                          <img class="card-img-top" src="<?php echo $userfrom['user_image']; ?>" style="height:37px!important;width:37px!important; border:1px solid black; border-radius:50%;" alt="">
                          </div>
                          <div class="col-lg-9" style="">
                              <h6 class="text-info"style="font-size:14px;"><strong><?php echo $userfrom['user_first_name'];?></strong> <strong><?php echo $userfrom['user_last_nam']; ?></strong></h6>
                              <p class="card-text text-left " style="font-size:12px;"><?php echo $res['time']; ?> </p>
                          </div>
                      </div>
                  </div><br><br>
              </div>          
                        <img class="card-img-top" src="<?php echo $res['image_1']; ?>" style="height:170px;" alt="">
                            <div class="card-body">
                            <h6 class="card-title  font-weight-bold" style=" font-size:13px;"><?php echo $res['title'];?></h6>
                                <h6 class="card-title text-primary font-weight-bold text-capitalize " style=" font-size:15px;"><?php echo $res['category'];?>, &nbsp; <?php echo $res['sub_category']; ?> </h6>
                                <h6 class="card-title font-weight-bold text-capitalize " style=" font-size:15px;"><?php echo $res['user_division']; ?>, &nbsp; <?php echo $res['user_district']; ?> </h6>
                                                    
                            
                        <div class="row">
                             <div class="col-lg-8">
                                <h6 class="card-text text-primary font-weight-bold">Tk <?php echo $res['price']; ?> </h6> 
                            </div>   
                              <div class="col-lg-4">
                                 <div class="text-right">
                                     <?php echo "<a class='btn btn-info' href='product-details.php?post_id=$res[post_id]'>View</a>";?>
                                 </div>
                              </div>  

                          </div>
                        </div>
                </div>
            </div>
            <?php }?>
                 </div>
     <!--------------------------------Ads echo end--------------------------------->
                    <br>
                    <?php 

                        $sql1 = "SELECT * FROM ad_post WHERE able='able' and category='Fashion'";
                        $result1 = mysqli_query($conn,$sql1) or die("query Failed.");
                        if(mysqli_num_rows($result1) > 0){
                            $total_records = mysqli_num_rows($result1);
                            $limit =9;
                    
                             $page = $_GET['page'];
                          
                            $offset =($page -1) * $limit;
                            $total_page = ceil($total_records / $limit);

                            echo '<nav  class="pt-4 pl-" aria-label="...">
                            <ul class="pagination">';
                            if($page > 1){
                                echo '<li class="page-item ">
                                <a href="fashion.php?page='.($page - 1).'" class="page-link font-weight-bold">Prev</a>
                                </li>';
                            }
                            for($i =1; $i<=$total_page; $i++){
                                if($i == $page){
                                    $active = "active";
                                }else{
                                    $active = "";
                                }
                                echo '<li class="'.$active.' page-item ">
                                <a class="page-link font-weight-bold" href="fashion.php?page='.$i.'">'.$i.'</a>
                                </li>  ';
                             
                            }
                            if($total_page > $page){
                                echo '<li class="page-item ">
                            <a  href="fashion.php?page='.($page + 1).'" class="page-link font-weight-bold" >Next</a>
                            </li>';
                            }
                            echo '</ul></nav>';

                        }

                    ?>

           
               

                </div>
            </div>
           
    </div>
    
</div>
<br><br>
<br>
    

</div>


<?php include('footer.php'); ?>