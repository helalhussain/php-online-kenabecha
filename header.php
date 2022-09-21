
<?php 
session_start();
include("server.php");

error_reporting(0);

$email =$_SESSION['email'];

$header_query ="SELECT * FROM user WHERE user_email='$email'";
$header_data =mysqli_query($conn,$header_query);
$header_result = mysqli_fetch_assoc($header_data);

?>
<?php 
session_start();
include("server.php");

error_reporting(0);

$email =$_SESSION['email'];

$query ="SELECT * FROM user WHERE user_email='$email'";
$data =mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);

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
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
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
  
<!-----------Header start--------------->

  <nav class="navbar navbar-expand-lg navbar-light bg-info p-3" >
  <div class="container">
    <a class="navbar-brand font-weight-bold text-white" href="onlinekenabecha.php" style="">Online Kenabecha</a>
    <!-- <select class="form-control" style="width:100px; "> -->
      <!-- <option>English</option>
     <option>Bangla</option>
    </select> -->

  <button class="navbar-toggler" type="button" style="color:#fff!important;background: #fff!important;" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link text-white font-weight-bold" href="all-ads.php" style="">ALL ADS</a>
      </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         AREAS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="dhaka.php">Dhaka</a>
          <a class="dropdown-item" href="chattogram.php">Chattogram</a>
          <a class="dropdown-item" href="sylhet.php">Sylhet</a>
          <a class="dropdown-item" href="khulna.php">Khulna</a>
          <a class="dropdown-item" href="borishal.php">Borishal</a>
          <a class="dropdown-item" href="borishal.php">Borishal</a>
          <a class="dropdown-item" href="rajshahi.php">Rajshahi</a>
          <a class="dropdown-item" href="mymenshingh.php">Mymenshingh</a>
          <a class="dropdown-item" href="comilla.php">Comilla</a>
        </div>
      </li>
              <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CATEGORIES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="electronics.php">Electronics</a>
          <a class="dropdown-item" href="mobiles.php">Mobiles</a>
          <a class="dropdown-item" href="vehicles.php">vehicles</a>
          <a class="dropdown-item" href="property.php">Property</a>
          <a class="dropdown-item" href="animals.php">Pets & Animals</a>
          <a class="dropdown-item" href="sports.php">Hobbies & Sports </a>
          <a class="dropdown-item" href="living.php">Home & Living </a>

        </div>
      </li>
    </ul>
    <div class="">
    <?php



      if($email == null){   
      echo '<a href="register.php" class="font-weight-bold btn btn-outline-light ml-2">Sign Up</a>';   
        echo '<a href="login.php" class="font-weight-bold btn btn-outline-light ml-2">Log In</a>';
      }else{?>
     
     <a href="my-acount.php"><img class="card-img-top ml-2" src="<?php echo $result['user_image']; ?>"
         style="height:42px!important;width:43px!important; border:1px solid white;" alt=""></a>
          <a href="logout.php" class="font-weight-bold btn btn-outline-light ml-2">Log Out</a>
     <?php }?>
      </div>
  </div>

  </div>
</nav>