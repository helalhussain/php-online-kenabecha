
<?php 	
	include("server.php");
	include("header.php");
 ?>
<div class="" style="">
<div class="container pt-5 ">
<a class=" btn btn-info" href="add-product.php"><i class="fa fa-arrow-left"></i></a><br><br>
	<div class="area p-5 bg-info" style="border-radius: 10px;">
		<div class="choose_option p-5" style="background:#fff; border-radius: 12px; box-shadow: 10px 10px 10px black;">
					<h5 class="text-center text-info font-weight-bold mt-3">Welcome <span><?php echo "User" ?></span>! Let's post an ad.</h5>
			<h6 class="text-center text-secondary pb-3">Choose any option</h6>
			<div class="row  no-gutters" style="background:#fff;">	
			 <div class="col-lg-4">
				<div class="card">
		 		  <div class="card-header text-white bg-info">Selling any product</div>
		 			 <div class="card-body">
					  	<ul class="list-group">
							<a href="select.php" title="">
								  	<li class="list-group-item text-info d-flex font-weight-bold justify-content-between align-items-center">
								  	 Sell an item & product
								    <span class="badge badge-info badge-pill "><i class="fa fa-arrow-right"></i></span>
								  </li>
							  </a>
							  							<a href="#" title="">
								  	<li class="list-group-item text-info d-flex font-weight-bold justify-content-between align-items-center">
								  	Property for rent
								    <span class="badge badge-info badge-pill "><i class="fa fa-arrow-right"></i></span>
								  </li>
							  </a>
						</ul>
		  			</div>
				</div>
		 </div>
		 			 <div class="col-lg-4">
				<div class="card">
		 		  <div class="card-header text-white bg-info">Post a job</div>
		 			 <div class="card-body">
					  	<ul class="list-group">
							<a href="#" title="">
								  	<li class="list-group-item text-info d-flex font-weight-bold justify-content-between align-items-center">
								  	 Post a job in Banladesh
								    <span class="badge badge-info badge-pill "><i class="fa fa-arrow-right"></i></span>
								  </li>
							  </a>
						</ul>
		  			</div>
				</div>
		 </div>
		 			 <div class="col-lg-4">
				<div class="card">
		 		  <div class="card-header text-white bg-info">Look for something</div>
		 			 <div class="card-body">
					  	<ul class="list-group">
							<a href="#" title="">
								  	<li class="list-group-item text-info d-flex font-weight-bold justify-content-between align-items-center">
								  	 Look for something to buy
								    <span class="badge badge-info badge-pill "><i class="fa fa-arrow-right"></i></span>
								  </li>
							  </a>
						</ul>
		  			</div>
				</div>
		 </div>
		</div>
		</div>
	</div>
</div>
</div>	
<?php include("footer.php"); ?>