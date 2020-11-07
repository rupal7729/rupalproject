
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.smartaddons.com/templates/html/market/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Aug 2020 16:05:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <!-- Basic page needs
	============================================ -->
	<title>Product List</title>
	<meta charset="utf-8">
    <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />

	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Favicon
	============================================ -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-57-precomposed.png">
      <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/basket.png">

	<!-- Google web fonts
	============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Libs CSS
	============================================ -->
     <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/css/bootstrap.min.css">
    <link href="<?php echo base_url(); ?>assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/themecss/lib.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">

	<!-- Theme CSS
	============================================ -->


	<link href="<?php echo base_url(); ?>assets/css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/themecss/so-categories.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/footer2.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/header5.css" rel="stylesheet">
		<link id="color_scheme" href="<?php echo base_url(); ?>assets/css/theme.css" rel="stylesheet">

	<link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet">

</head>

<body class="res layout-subpage banners-effect-6">
    <div id="wrapper" class="wrapper-full ">
	<!-- Header Container  -->
	   <?php
	   Include("header.php")
	    ?>
	<!-- //Header Container  -->


	<!-- Main Container  -->
	<div class="main-container container">
		<br/>
		<ul class="breadcrumb">

			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Products</a></li>
		</ul>
			<div class="row">
							<div class="col-sm-12">
								<div class="banners">
									<div>
										<a  href="#"><img src="<?php echo base_url() ?>assets/image/demo/shop/category/baner1.png" alt="Apple Cinema 30&quot;"><br></a>
									</div>
								</div>

							</div>
						</div>
		<div class="row">
			<aside class="col-sm-4 col-md-3" id="column-right">

				<div class="module latest-product titleLine">
   <h3 class="modtitle">Filter </h3>
   <div class="modcontent ">
		<form class="type_2">

		<div class="table_layout filter-shopby">
			<div class="table_row">
				<!-- - - - - - - - - - - - - - Category filter - - - - - - - - - - - - - - - - -->
				<div class="table_cell" style="z-index: 103;">
					<legend>Search</legend>
					<input class="form-control" id="searchname" type="text" value="" size="50" autocomplete="off" placeholder="Search" name="search">
				</div><!--/ .table_cell -->
				<!-- - - - - - - - - - - - - - End of category filter - - - - - - - - - - - - - - - - -->
				<!-- - - - - - - - - - - - - - SUB CATEGORY - - - - - - - - - - - - - - - - -->

				<!-- - - - - - - - - - - - - - End SUB CATEGORY - - - - - - - - - - - - - - - - -->
				<!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->

					<div class="table_cell">

					<fieldset>

						<legend>Color</legend>

						<div class="row">

							<div class="col-sm-6">

								<ul class="simple_vertical_list">

									<li>

										<input type="radio" name="search_color" value="Green" id="color_btn_1"  class="filter_all color">
										<label for="color_btn_1" class="color_btn green">Green</label>

									</li>

									<li>

										<input type="radio" name="search_color" value="Yellow" id="color_btn_2" class="filter_all color">
										<label for="color_btn_2" class="color_btn yellow">Yellow</label>

									</li>

									<li>
										<input type="radio" name="search_color" value="Red" id="color_btn_3" class="filter_all color">
										<label for="color_btn_3" class="color_btn red">Red</label>

									</li>

								</ul>

							</div>

							<div class="col-sm-6">

								<ul class="simple_vertical_list">

									<li>
										<input type="radio" name="search_color" value="Blue" id="color_btn_4" class="filter_all color">
										<label for="color_btn_4" class="color_btn blue">Blue</label>
									</li>

									<li>
										<input type="radio" name="search_color" value="Grey" id="color_btn_5" class="filter_all color">
										<label for="color_btn_5" class="color_btn grey">Grey</label>
									</li>

									<li>
										<input type="radio" name="search_color" value="Orange" id="color_btn_6" class="filter_all color">
										<label for="color_btn_6" class="color_btn orange">Orange</label>
									</li>

								</ul>

							</div>


						</div>

					</fieldset>

				</div><!--/ .table_cell -->


				<div class="table_cell">
					<fieldset>
						<legend>Discount</legend>
						<ul class="checkboxes_list">
							<li>
								<input type="checkbox" value="10" name="discount" id="dis1" class="filter_all dis">
								<label for="dis1">Upto 10%</label>
							</li>
							<li>
								<input type="checkbox" value="20" name="discount" id="dis2" class="filter_all dis">
								<label for="dis2">More Than 20%</label>
							</li>
							<li>
								<input type="checkbox" value="30" name="discount" id="dis3" class="filter_all dis">
								<label for="dis3">More Than 30%</label>
							</li>
							<li>
								<input type="checkbox" value="40" name="discount" id="dis4" class="filter_all dis">
								<label for="dis4">More Than 40%</label>
							</li>
							<li>
								<input type="checkbox" value="50" name="discount" id="dis5" class="filter_all dis">
								<label for="dis5">More Than 50%</label>
							</li>

						</ul>

					</fieldset>

				</div><!--/ .table_cell -->
				<!-- - - - - - - - - - - - - - End manufacturer - - - - - - - - - - - - - - - - -->

				<!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->
				<div class="table_cell">
					<fieldset>
						<legend>Price</legend>
						<div class="range">
							Range :
							  <p id="price_show"><i class="fa fa-rupee"></i> 10 - <i class="fa fa-rupee"></i> 900</p>
							<input type="hidden" id="min_price_hide" name="" class="min_value"/>
							<input type="hidden" id="max_price_hide" name="" class="max_value"/>

						</div>





						<div id="slider-range"" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
							<div class="ui-slider-range ui-widget-header ui-corner-all"></div>
							<span class="ui-slider-handle ui-state-default ui-corner-all" ></span>
							<span class="ui-slider-handle ui-state-default ui-corner-all" ></span>
						</div>
					</fieldset>
				</div><!--/ .table_cell -->

				<!-- - - - - - - - - - - - - - End price - - - - - - - - - - - - - - - - -->

				<!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->


				<!-- - - - - - - - - - - - - - End price - - - - - - - - - - - - - - - - -->

			</div><!--/ .table_row -->


			<div class="table_cell">
					<fieldset>
						<legend>Age</legend>
						<ul class="checkboxes_list">
							<li>
								<input type="checkbox" name="age" value="0-3 M" id="age1" class="filter_all age">
								<label for="age1">0-3 M</label>
							</li>
							<li>
								<input type="checkbox" name="age" value="3-6 M" id="age2" class="filter_all age">
								<label for="age2">3-6 M</label>
							</li>
							<li>
								<input type="checkbox" name="age" value="6-9 M" id="age3" class="filter_all age">
								<label for="age3">6-9 M</label>
							</li>
							<li>
								<input type="checkbox" name="age" value="9-12 M" id="age4" class="filter_all age">
								<label for="age4">9-12 M</label>
							</li>
							<li>
								<input type="checkbox"  name="age" value="12-18 M" id="age5" class="filter_all age">
								<label for="age5">12-18 M</label>
							</li>
							<li>
								<input type="checkbox"  name="age" value="18-24 M" id="age6" class="filter_all age">
								<label for="age6">18-24 M</label>
							</li>
							<li>
								<input type="checkbox"  name="age" value="2-4 Y" id="age7" class="filter_all age">
								<label for="age7">2-4 Y</label>
							</li>
							<li>
								<input type="checkbox"  name="age" value="4-6 Y" id="age8" class="filter_all age">
								<label for="age8">4-6 Y</label>
							</li>
							<li>
								<input type="checkbox"  name="age" value="6-8 Y" id="age9" class="filter_all age">
								<label for="age9">6-8 YM</label>
							</li>
							<li>
								<input type="checkbox"  name="age" value="8-10 Y" id="age10" class="filter_all age">
								<label for="age10">8-10 Y</label>
							</li>

						</ul>

					</fieldset>

				</div><!--/ .table_cell -->
			<footer class="bottom_box">
				<div class="buttons_row">
					<button type="submit" class="button_grey button_submit">Search</button>
					<button type="reset" class="button_grey filter_reset">Reset</button>
				</div>
			</footer>
		</div><!--/ .table_layout -->



	</form>
   </div>

</div>

				<div class="module latest-product titleLine">
   <h3 class="modtitle">Latest Product</h3>
   <div class="modcontent ">
		<div class="product-latest-item">
			<div class="media">
			   <div class="media-left">
				  <a href="#"><img src="<?php echo base_url() ?>assets/image/demo/shop/product/m1.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 100px; height: 82px;"></a>
			   </div>
			   <div class="media-body">
				  <div class="caption">
					 <h4><a href="#">Sunt Molup</a></h4>

					 <div class="price">
						<span class="price-new">$100.00</span>
					 </div>
					 <div class="ratings">
						<div class="rating-box">
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						</div>
					 </div>
				  </div>

			   </div>
			</div>
		</div>
		<div class="product-latest-item">
			<div class="media">
			   <div class="media-left">
				  <a href="#"><img src="<?php echo base_url() ?>assets/image/demo/shop/product/m2.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 100px; height: 82px;"></a>
			   </div>
			   <div class="media-body">
				  <div class="caption">
					 <h4><a href="#">Et Spare</a></h4>

					 <div class="price">
						<span class="price-new">$99.00</span>
					 </div>
					 <div class="ratings">
						<div class="rating-box">
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
						</div>
					 </div>
				  </div>

			   </div>
			</div>
		</div>
		<div class="product-latest-item">
			<div class="media">
			   <div class="media-left">
				  <a href="#"><img src="<?php echo base_url() ?>assets/image/demo/shop/product/18.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 100px; height: 82px;"></a>
			   </div>
			   <div class="media-body">
				  <div class="caption">
					 <h4><a href="#">Cisi Chicken</a></h4>

					 <div class="price">
						<span class="price-new">$59.00</span>
					 </div>
					 <div class="ratings">
						<div class="rating-box">
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
						</div>
					 </div>
				  </div>

			   </div>
			</div>
		</div>
		<div class="product-latest-item transition">
			<div class="media">
			   <div class="media-left">
				  <a href="#"><img src="<?php echo base_url() ?>assets/image/demo/shop/product/9.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 100px; height:82px;"></a>
			   </div>
			   <div class="media-body">
				  <div class="caption">
					 <h4><a href="#">Kevin Labor</a></h4>
					 <div class="price">
						<span class="price-new">$245.00</span>
					 </div>
					 <div class="ratings">
						<div class="rating-box">
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
						</div>
					 </div>
				  </div>

			   </div>
			</div>
		 </div>


   </div>

</div>
				<div class="module tags-product titleLine">
   <h3 class="modtitle">Tags</h3>
   <div class="modcontent ">
		<ul class="tags_cloud">
			<li><a href="#" class="button_grey">allergy</a></li>
			<li><a href="#" class="button_grey">baby</a></li>
			<li><a href="#" class="button_grey">beauty</a></li>
			<li><a href="#" class="button_grey">ear care</a></li>
			<li><a href="#" class="button_grey">for her</a></li>
			<li><a href="#" class="button_grey">for him</a></li>
			<li><a href="#" class="button_grey">first aid</a></li>
			<li><a href="#" class="button_grey">gift sets</a></li>
			<li><a href="#" class="button_grey">spa</a></li>
			<li><a href="#" class="button_grey">hair care</a></li>
			<li><a href="#" class="button_grey">herbs</a></li>
			<li><a href="#" class="button_grey">medicine</a></li>
			<li><a href="#" class="button_grey">natural</a></li>
			<li><a href="#" class="button_grey">oral care</a></li>
			<li><a href="#" class="button_grey">pain</a></li>
			<li><a href="#" class="button_grey">pedicure</a></li>
			<li><a href="#" class="button_grey">personal care</a></li>
			<li><a href="#" class="button_grey">probiotics</a></li>

		</ul>

   </div>

</div>
			</aside>
			<!--Right Part End -->


			<!--Middle Part Start-->
			<div id="content" class="col-md-9 col-sm-8">
				<div class="products-category">
					<div class="category-derc">

					</div>
					<!-- Filters -->
					<div class="product-filter filters-panel">
						<div class="row">
							<div class="col-md-2 visible-lg">
								<div class="view-mode">
									<div class="list-view">
										<button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip"  data-original-title="Grid"><i class="fa fa-th"></i></button>
										<button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
									</div>
								</div>
							</div>
							<div class="short-by-show form-inline text-right col-md-7 col-sm-8 col-xs-12">
								<div class="form-group short-by">
									<label class="control-label" for="input-sort">Sort By:</label>
									<select id="input-sort" class="form-control">

										<option value="AtoZ" selected="selected">Name (A - Z)</option>
										<option value="ZtoA">Name (Z - A)</option>
										<option value="LowtoHigh">Price (Low &gt; High)</option>
										<option value="HightoLow">Price (High &gt; Low)</option>
										<option value="HighRate">Rating (Highest)</option>
										<option value="LowRate">Rating (Lowest)</option>

									</select>
								</div>
								<div class="form-group">
									<label class="control-label" for="input-limit">Show:</label>
									<select id="input-limit" class="form-control">
									   <option value="5" selected="selected">5</option>
										<option value="9">9</option>
										<option value="25">25</option>
										<option value="50">50</option>
										<option value="75">75</option>
										<option value="100">100</option>
									</select>
								</div>
							</div>
							<div class="box-pagination col-md-3 col-sm-4 col-xs-12 text-right">
								<ul class="pagination">
									<li class="active"><span>1</span></li>
									<li><a href="#">2</a></li><li><a href="#">&gt;</a></li>
									<li><a href="#">&gt;|</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- //end Filters -->
					<!--changed listings-->
					<div class="products-list row grid">
					 <?php

					  $i=0;

					   if(isset($bproduct)!=null)
					   {
					   		$product=$bproduct;
					   }


					  foreach($product as $bkey){
					  	if($i==3)
					  	{
					  ?>
						<div class="product-layout col-md-4 col-sm-6 col-xs-12 clear">
						<?php
						$i=0;
						}else{
						 ?>
						 <div class="product-layout col-md-4 col-sm-6 col-xs-12">
						 <?php }  $i++;?>
							<div class="product-item-container">
								<div class="left-block">
									<div class="product-image-container lazy second_img ">
										<img data-src="<?php echo base_url() ?>upload/products/<?php echo $bkey->ImageLogo;?>"  alt="Apple Cinema 30&quot;" class="img-responsive" />
										<img data-src="<?php echo base_url() ?>upload/products/<?php echo $bkey->ImageLogo;?>" alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
									</div>
									<!--Sale Label-->
									<?php
										$p1=$bkey->price;
										  $p2=$bkey->salePrice;
										   $per=($p1-$p2)*100/$p1;
										   if($per !=0)
										  {
									 ?>
									<span class="label label-sale">Sale</span>
									<!--countdown box-->
									<?php  } ?>
									<!--end countdown box-->

									<!--full quick view block-->
								<a class="quickview" href='<?php echo base_url() ?>index.php/User/productdetail/<?php echo $bkey->productid; ?>'>  Quickview</a>
									<!--end full quick view block-->
								</div>


								<div class="right-block">
									<div class="caption">
										<div class="col-md-12">

											<h4><a href='<?php echo base_url() ?>index.php/User/productdetail/<?php echo $bkey->productid; ?>'><?php echo $bkey->productTitle; ?></a></h4>
										</div>

										<div class="ratings col-md-12">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>

										<div class="price col-md-12">
											<span class="price-new"><i class="fa fa-rupee"></i><?php echo $bkey->salePrice; ?>.00</span>
											<span class="price-old"><i class="fa fa-rupee"></i><?php echo $bkey->price; ?>.00</span>
											<span class="label label-percent">
											-<?php
											 $p1=$bkey->price;
										  	 $p2=$bkey->salePrice;
										     $per=($p1-$p2)*100/$p1;
										     echo round($per,2);
										    ?>%
										   </span>
										</div>
										<div class="description item-desc hidden">
											<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
										</div>
									</div>

									  <div class="button-group">
								 <?php if (isset($_SESSION['user'])) { ?>
                                                <button class="addToCart" type="button" onclick="cart.add('<?php echo $bkey->productid ?>','1','<?php echo $bkey->productName ?>','<?php echo base_url() ?>upload/products/<?php echo $bkey->ImageLogo ?>');"><i class="fa fa-shopping-cart"></i> <span class="button-group__text">Add to Cart</span></button>


                                                  	<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('<?php echo $bkey->productid ?>','1','<?php echo $bkey->productName ?>','<?php echo base_url() ?>upload/products/<?php echo $bkey->ImageLogo ?>');"><i class="fa fa-heart"></i></button>


                                                <?php }else{ ?>
                                                <button class="addToCart" type="button" onclick="alert('You Must Have login First');window.location = '<?php echo base_url() ?>index.php/User/login'"><i class="fa fa-shopping-cart"></i> <span class="button-group__text">Add to Cart</span></button>


										       <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="alert('You Must Have login First');window.location = '<?php echo base_url() ?>index.php/User/login'"><i class="fa fa-heart"></i></button>

                                                 <?php } ?>



										<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
									  </div>
								</div><!-- right block -->

							</div>
						</div>
						<?php } ?>



					</div>
					<!--// End Changed listings-->
					<!-- Filters -->
					<div class="product-filter product-filter-bottom filters-panel" >
						<div class="row">
							<div class="col-md-2 hidden-sm hidden-xs">
							</div>
						   <div class="short-by-show text-center col-md-7 col-sm-8 col-xs-12">
								<div class="form-group" style="margin: 7px 10px">Showing 1 to 9 of 10 (2 Pages)</div>
							</div>
							<div class="box-pagination col-md-3 col-sm-4 text-right"><ul class="pagination"><li class="active"><span>1</span></li><li><a href="#">2</a></li><li><a href="#">&gt;</a></li><li><a href="#">&gt;|</a></li></ul></div>

						 </div>
					</div>
					<!-- //end Filters -->

				</div>

			</div>


		</div>
		<!--Middle Part End-->
	</div>
	<!-- //Main Container -->


	<!-- Footer Container -->
	<?php
     include("footer.php")
     ?>
     <!-- //end Footer Container -->

    </div>


	<div hidden="hidden" id="lbl1" value=""><?php echo $genders['gender1']; ?></div>
	<div hidden="hidden" id="lbl2" value=""><?php echo $genders['gender2']; ?></div>
	<!-- Cpanel Block -->
	<div id="sp-cpanel_btn" class="isDown visible-lg">
	<i class="fa fa-cog"></i>
</div>

<!-- Include Libs & Plugins
	============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->


	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/themejs/libs.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/unveil/jquery.unveil.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/countdown/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/datetimepicker/moment.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui/jquery-ui.min.js"></script>


	<!-- Theme files
	============================================ -->


	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/themejs/addtocart.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/themejs/application.js"></script>
	<script type="text/javascript"><!--
	// Check if Cookie exists
		if($.cookie('display')){
			view = $.cookie('display');
		}else{
			view = 'grid';
		}
		if(view) display(view);
	//--></script>

	<script type="text/javascript">

       $(document).ready(function(){
       //	alert("hii");
                  var action = 'fetching';
       	 $('#input-sort').change(function(){
          	 //alert('hii');

                filter_data();
       	 });




       	 	function filter_data() {

                    var sortingwise = $('#input-sort').val();
                    var sortinglimit = $('#input-limit').val();
                    // alert(sortinglimit);
                   var minimum_price = $('#min_price_hide').val();
                    var maximum_price = $('#max_price_hide').val();
                    //var name= $('#searchname').val();
                    var gen1='<?php echo $genders['gender1']; ?>';
                     var gen2='<?php echo $genders['gender2']; ?>';
                     var cat='<?php echo $genders['catid'] ?>;'
                    //var color = $('color').val();
                //  alert(gen2+gen1);
                    var age = get_filter('age');
                    var color = get_filter('color');
                    var dis=get_filter('dis');
                  // alert(cat);
                    $.ajax({
                        url: "<?php echo base_url() ?>index.php/User/filterdata",
                        method: "POST",
                        data: {
                        	 action: action,
                            sortingwise:sortingwise,
                            sortinglimit:sortinglimit,
                            minimum_price:minimum_price,
                            maximum_price:maximum_price,
                           // name:name,
                            gen1:gen1,
                            gen2:gen2,
                            color:color,
                            age:age,
                            discount:dis,
                            catid:cat

                        },
                        success: function(data) {
                            $('.products-list').html(data);
                        }
                    });

            }

            $('.filter_all').click(function() {
            	//alert("hii");
                filter_data();
            });

          function get_filter(class_name) {
                var filter = [];
                $('.' + class_name + ':checked').each(function() {
                    filter.push($(this).val());
                });
                return filter;
            }

        $("#slider-range").slider({
            range: true,
            min: 1,
            max: 900,
            values: [1, 900],
            step:11,
            stop: function(event, ui) {
                $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
                $('#min_price_hide').val(ui.values[0]);
                $('#max_price_hide').val(ui.values[1]);
            filter_data();
        }
        });



        });
     $(document).ready(function(){
		  $("#searchname").on("keyup", function() {
		    var value = $(this).val().toLowerCase();
		   //alert(value);
		   $(".products-list .product-layout").filter(function() {
		     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		    //alert("hello");
		    });
		  });
		});

    </script>

</body>


</html>