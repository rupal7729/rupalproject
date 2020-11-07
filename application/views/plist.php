
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
			<div class="products-category">
					<div class="category-derc">
						<div class="row">
							<div class="col-sm-12">
								<div class="banners">
									<div>
										<a  href="#"><img src="<?php echo base_url() ?>assets/image/demo/shop/category/8664715_orig.jpg" alt="Apple Cinema 30&quot;"><br></a>
									</div>
								</div>

							</div>
						</div>
					</div>
		</div>
		<div class="row">
			<aside class="col-sm-3 col-md-3" id="column-right">

				<div class="module latest-product titleLine">
   <h3 class="modtitle">Filter </h3>
   <div class="modcontent ">
			<form class="type_2">

				<div class="table_layout filter-shopby">
					<div class="table_row">
						<!-- - - - - - - - - - - - - - Category filter - - - - - - - - - - - - - - - - -->
						<div class="table_cell" style="z-index: 103;">
							<legend>Search</legend>
							<input class="form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search" name="search">
						</div><!--/ .table_cell -->
						<!-- - - - - - - - - - - - - - End of category filter - - - - - - - - - - - - - - - - -->
						<!-- - - - - - - - - - - - - - SUB CATEGORY - - - - - - - - - - - - - - - - -->
						<div class="table_cell">
							<fieldset>
								<legend>Sub Category</legend>
								<ul class="checkboxes_list">
									<li>
										<input type="checkbox" checked="" name="category" id="category_1">
										<label for="category_1">Smartphone & Tablets</label>
									</li>
									<li>
										<input type="checkbox" name="category" id="category_2">
										<label for="category_2">Electronics</label>
									</li>
									<li>
										<input type="checkbox" name="category" id="category_3">
										<label for="category_3">Shoes</label>
									</li>
									<li>
										<input type="checkbox" name="category" id="category_4">
										<label for="category_4">Watches</label>
									</li>

								</ul>

							</fieldset>

						</div><!--/ .table_cell -->
						<!-- - - - - - - - - - - - - - End SUB CATEGORY - - - - - - - - - - - - - - - - -->
						<!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->
						<div class="table_cell">
							<fieldset>
								<legend>Manufacturer</legend>
								<ul class="checkboxes_list">
									<li>
										<input type="checkbox" checked="" name="manufacturer" id="manufacturer_1">
										<label for="manufacturer_1">Manufacturer 1</label>
									</li>
									<li>
										<input type="checkbox" name="manufacturer" id="manufacturer_2">
										<label for="manufacturer_2">Manufacturer 2</label>
									</li>
									<li>
										<input type="checkbox" name="manufacturer" id="manufacturer_3">
										<label for="manufacturer_3">Manufacturer 3</label>
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
									<span class="min_val">$188.73</span> -
									<span class="max_val">$335.15</span>
									<input type="hidden" name="" class="min_value" value="188.73">
									<input type="hidden" name="" class="max_value" value="335.15">
								</div>
								<div id="slider" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
									<div class="ui-slider-range ui-widget-header ui-corner-all"></div>
									<span class="ui-slider-handle ui-state-default ui-corner-all" ></span>
									<span class="ui-slider-handle ui-state-default ui-corner-all" ></span>
								</div>
							</fieldset>
						</div><!--/ .table_cell -->

						<!-- - - - - - - - - - - - - - End price - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->

						<div class="table_cell">

							<fieldset>

								<legend>Color</legend>

								<div class="row">

									<div class="col-sm-6">

										<ul class="simple_vertical_list">

											<li>

												<input type="checkbox" name="" id="color_btn_1">
												<label for="color_btn_1" class="color_btn green">Green</label>

											</li>

											<li>

												<input type="checkbox" name="" id="color_btn_2">
												<label for="color_btn_2" class="color_btn yellow">Yellow</label>

											</li>

											<li>
												<input type="checkbox" name="" id="color_btn_3">
												<label for="color_btn_3" class="color_btn red">Red</label>

											</li>

										</ul>

									</div>

									<div class="col-sm-6">

										<ul class="simple_vertical_list">

											<li>
												<input type="checkbox" name="" id="color_btn_4">
												<label for="color_btn_4" class="color_btn blue">Blue</label>
											</li>

											<li>
												<input type="checkbox" name="" id="color_btn_5">
												<label for="color_btn_5" class="color_btn grey">Grey</label>
											</li>

											<li>
												<input type="checkbox" name="" id="color_btn_6">
												<label for="color_btn_6" class="color_btn orange">Orange</label>
											</li>

										</ul>

									</div>

								</div>

							</fieldset>

						</div><!--/ .table_cell -->

						<!-- - - - - - - - - - - - - - End price - - - - - - - - - - - - - - - - -->

					</div><!--/ .table_row -->
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
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
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
									<select id="input-sort" class="form-control"
									onchange="location = this.value;">
										<option value="" selected="selected">Default</option>
										<option value="">Name (A - Z)</option>
										<option value="">Name (Z - A)</option>
										<option value="">Price (Low &gt; High)</option>
										<option value="">Price (High &gt; Low)</option>
										<option value="">Rating (Highest)</option>
										<option value="">Rating (Lowest)</option>
										<option value="">Model (A - Z)</option>
										<option value="">Model (Z - A)</option>
									</select>
								</div>
								<div class="form-group">
									<label class="control-label" for="input-limit">Show:</label>
									<select id="input-limit" class="form-control" onchange="location = this.value;">
										<option value="" selected="selected">9</option>
										<option value="">25</option>
										<option value="">50</option>
										<option value="">75</option>
										<option value="">100</option>
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

					<?php foreach($bproduct as $bkey){ ?>
						<div class="product-layout col-md-4 col-sm-6 col-xs-12 ">
							<div class="product-item-container">
								<div class="left-block">
									<div class="product-image-container lazy second_img ">
										<img data-src="<?php echo base_url() ?>upload/products/<?php echo $bkey->ImageLogo; ?>" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="Apple Cinema 30&quot;" class="img-responsive" />
										<img data-src="<?php echo base_url() ?>upload/products/<?php echo $bkey->ImageLogo; ?>" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
									</div>

									<!--full quick view block-->
									<a class="quickview" href='<?php echo base_url() ?>index.php/User/productdetail/<?php echo $bkey->productid; ?>'>  Quickview</a>
									<!--end full quick view block-->
								</div>


								<div class="right-block">
									<div class="caption">
										<h4><a href='<?php echo base_url() ?>index.php/User/productdetail/<?php echo $bkey->productid; ?>'><?php echo $bkey->productTitle; ?></a></h4>
										<div class="ratings">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>

										<div class="price">
											<span class="price-new">$120.00</span>

										</div>
										<div class="description item-desc hidden">
											<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
										</div>
									</div>

									  <div class="button-group">
										<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs">Add to Cart</span></button>
										<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
										<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
									  </div>
								</div><!-- right block -->

							</div>
						</div>
						<div class="clearfix visible-xs-block"></div>

					<?php } ?>



		</div>					<!--// End Changed listings-->
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
</body>

<!-- Mirrored from demo.smartaddons.com/templates/html/market/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Aug 2020 16:05:23 GMT -->
</html>