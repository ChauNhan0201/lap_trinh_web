
<?php
include "inc/header.php";
include "inc/slider.php";
?>

 	<div class="badichvu">
 		<div class="container ">
 			<div class="row">
 				<div class="col-sm-4 wow flipInY">
 					<a href=""><img src="images/3dichvu.jpg" alt="" class="img-fluid"></a>
 					<h3><a href="">Our Restaruant Story</a></h3>
 					<p>Sed ut perspiciatis unde omnis iste natus errorsit voluptatem accusantium doloremque laudantium thes hatles tooest surf totam rem aperiam.</p>
 					<a href="" class="readmore">Read More</a>
 				</div>
				<div class="col-sm-4 wow flipInY" data-wow-delay="0.2s">
 					<a href=""><img src="images/3dichvu.jpg" alt="" class="img-fluid"></a>
 					<h3><a href="">Our Restaruant Story</a></h3>
 					<p>Sed ut perspiciatis unde omnis iste natus errorsit voluptatem accusantium doloremque laudantium thes hatles tooest surf totam rem aperiam.</p>
 					<a href="" class="readmore">Read More</a>
 				</div>
				<div class="col-sm-4 wow flipInY" data-wow-delay="0.4s">
 					<a href=""><img src="images/3dichvu.jpg" alt="" class="img-fluid"></a>
 					<h3><a href="">Our Restaruant Story</a></h3>
 					<p>Sed ut perspiciatis unde omnis iste natus errorsit voluptatem accusantium doloremque laudantium thes hatles tooest surf totam rem aperiam.</p>
 					<a href="" class="readmore">Read More</a>	
 				</div>				
 			</div> <!-- het row -->
 		</div> <!--  het container -->
 	</div>  <!-- het badichvu -->
  


  	<div class="slidemonan  wow fadeInUp">
 		<div class="container">
 			<div class="row">
 				<div class="col-sm-12">
 					<h4> Our New Dishes</h4>
 				</div>
 			</div>

 			<div class="row">
 			<div class="col-sm-12">
 						<div id="slidemonanduoi" data-interval="3000" class="carousel slide" data-ride="carousel">


 							<div class="carousel-inner" role="listbox">
 								<div class="carousel-item active">
 									<div class="row">
										 

									 <?php 
											$show_pro_new= $product->get_product_new();
											if($show_pro_new){
												$i=0;
												while($result2 = $show_pro_new->fetch_assoc()){
													$i++;
									?> 

 										<div class="sanpham">
 											<img src="admin/uploads/<?php echo $result2['product_img']?>" alt="" class="anhspslide">
 											<div class="tensp">
 												<div class="gia float-xs-right"><?php echo $fm->format_currency($result2['price'])." "."VND"?></div>
 												<div class="ten"><?php echo $result2['product_name']?></div>
 											</div>
 											<!-- <div class="tencongthuc">
											 <?php echo $fm->textShorten($result2['product_desc'],20) ?>
 											</div> -->
											 <a class="btn btn-warning wow bounce" data-wow-iteration="3" href="preview.php?proid=<?php echo $result2['product_id'] ?>" >Mua</a> 
 										</div> <!-- SAN PHAM -->

 									<?php
												}
											}
											?>	

 										

 										
 									</div> <!-- het row -->	


 								</div>  <!-- HET CAROUSEL ITEM -->
 								 
 							</div>
 						</div>
 				</div> <!-- het colsm12 cu monan -->
 			</div>  <!-- HET ROW -->
 		</div> <!-- HET CONTAINER -->

 	</div>  <!-- HET SLIDE MON AN -->


 	

	<div class="sloganhome wow fadeInUp">
		<div class="container text-xs-center">
		 	 <div class="row">
		 	 	<div class="col-sm-8 push-sm-2">
		 	 		<h3 class="fontdancing"> Enjoy Pleasant Pastime With Friends and Partners</h3>
					<span class="fontroboto">Relaxing Atmosphere</span>
		 	 	</div>
		 	 </div>
			
		</div>
	</div> <!-- het slogan home  -->

	<div class="khoidatban text-xs-center wow fadeInUp" data-wow-delay="0s">
		<div class="container">

		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="thongtindatban fontroboto">
					<h2 class="fontroboto">Make A Reservation</h2>
					<p class="tt ">Booking a table has never been so easy with free   instant online restaurant reservations, booking now!!</p>
					<p class="giodb">Monday to Friday   <span class="vang"> 9:00 am - 23:00 pm </span> Saturday to Sunday <span class="vang"> 10:00 am - 22:00 pm</span>
	Note: Arctica Restaurant is closed on holidays.</p>
					<div class="dtdb fontoswarld">0844.335.1211</div>
				</div>
			</div>
			

		</div> <!-- het row -->
			
		</div><!--  het container -->
		
	</div>  <!-- HET DAT BAN -->

	<div class="phanhoinguoidung wow  fadeInUp" data-wow-delay="0s">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 push-sm-1 text-xs-center">
					<div id="slidetestimnial" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slidetestimnial" data-slide-to="0" class="active"></li>
							<li data-target="#slidetestimnial" data-slide-to="1"></li>
							<li data-target="#slidetestimnial" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
							 	 <i class="fa fa-quote-right"></i>
							 	 <div class="quote">
							 	 	We enjoy sharing the projects and posts we make just as much as we enjoy creating them.
 consectetur adipiscing elit, sed do eiusmod tempor incididunt Sit back & take a moment to browse through some of our recent completed work.
							 	 </div>
							 	 <b class="fontdancing tennguoi"> Marvel </b>

							</div> 
							 <div class="carousel-item ">
							 	 <i class="fa fa-quote-right"></i>
							 	 <div class="quote">
							 	 	We enjoy sharing the projects and posts we make just as much as we enjoy creating them.
 consectetur adipiscing elit, sed do eiusmod tempor incididunt Sit back & take a moment to browse through some of our recent completed work.
							 	 </div>
							 	 <b class="fontdancing tennguoi"> Marvel </b>

							</div> 
							<div class="carousel-item ">
							 	 <i class="fa fa-quote-right"></i>
							 	 <div class="quote">
							 	 	We enjoy sharing the projects and posts we make just as much as we enjoy creating them.
 consectetur adipiscing elit, sed do eiusmod tempor incididunt Sit back & take a moment to browse through some of our recent completed work.
							 	 </div>
							 	 <b class="fontdancing tennguoi"> Marvel </b>

							</div> 
							
						</div>
						 
					</div>
				</div>
			</div>
		</div>
	</div>  <!-- HET PHAN HOI NGUOI DUNG -->

	<div class="tintuchome wow   " data-wow-delay="0s">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-xs-center wow  flipInY" data-wow-delay="0s">
					<div class="tdtintuchome">
						<span class="fontdancing">Our Blog</span>
						<h2 class="fontroboto">Lastest News Update</h2>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12 wow  flipInY" data-wow-delay="0s">

					<div class="mottinchuan">
						<a href=""><img src="images/f1.jpg" alt=""></a>
						<a href="" class="tieudetin1 fontoswarld">The Best Tips For Tasty Food</a>
						<div class="ngaythang1">10 June 2016  by <span class="vang"> Peter Parker</span></div>
						<p class="fontroboto">Curabitur quas nets lacusets nulat iaculis loremis etis nisle varius vitae seditum fugiatum ligul aliquam qui sequi nets lacusets nulat </p>

						<div class="docthem mb-2">
							<div class="like float-xs-right fontroboto">10 like</div>
							<a href="" class="rm fontroboto">Read More</a>
						</div>
					</div>
				</div> 
				<div class="col-md-4 col-sm-6 col-xs-12 wow  flipInY" data-wow-delay="0s">
					<div class="mottinchuan">

						<a href=""><img src="images/f1-03.jpg" alt=""></a>
						<a href="" class="tieudetin1 fontoswarld">The Best Tips For Tasty Food</a>
						<div class="ngaythang1">10 June 2016  by <span class="vang"> Peter Parker</span></div>
						<p class="fontroboto">Curabitur quas nets lacusets nulat iaculis loremis etis nisle varius vitae seditum fugiatum ligul aliquam qui sequi nets lacusets nulat </p>

						<div class="docthem mb-2">
							<div class="like float-xs-right fontroboto">10 like</div>
							<a href="" class="rm fontroboto">Read More</a>
						</div> 
					</div> 

				</div> 
				<div class="col-md-4 col-sm-6 col-xs-12 wow  flipInY" data-wow-delay="0s">
					<div class="mottinchuan">

						<a href=""><img src="images/f1-02.jpg" alt=""></a>
						<a href="" class="tieudetin1 fontoswarld">The Best Tips For Tasty Food</a>
						<div class="ngaythang1">10 June 2016  by <span class="vang"> Peter Parker</span></div>
						<p class="fontroboto">Curabitur quas nets lacusets nulat iaculis loremis etis nisle varius vitae seditum fugiatum ligul aliquam qui sequi nets lacusets nulat </p>

						<div class="docthem mb-2">
							<div class="like float-xs-right fontroboto">10 like</div>
							<a href="" class="rm fontroboto">Read More</a>
						</div>
					</div>

				</div> 

			</div>
		</div>

	</div>  <!-- HET TIN TUC O TRANG HOME -->

<?php
include "inc/footer.php";
?>