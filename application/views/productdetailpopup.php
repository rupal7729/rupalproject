<!DOCTYPE html>
 <html lang="en">

<!-- Mirrored from demo.smartaddons.com/templates/html/market/quickview.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Aug 2020 16:07:09 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

     <!-- Basic page needs
	============================================ -->
	 <title>Market - Premium Multipurpose HTML5/CSS3 Theme</title>
	 <meta charset="utf-8" />
     <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
     <meta name="author" content="Magentech" />
     <meta name="robots" content="index, follow" />

	 <!-- Mobile specific metas
	============================================ -->
	 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
 <!-- Favicon
	============================================ -->
     <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>assets/ico/apple-touch-icon-144-precomposed.png" />
     <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>assets/ico/apple-touch-icon-114-precomposed.png" />
     <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>assets/ico/apple-touch-icon-72-precomposed.png" />
     <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>assets/ico/apple-touch-icon-57-precomposed.png" />
     <link rel="shortcut icon" href="<?php echo base_url() ?>assets/ico/favicon.png" />

	 <!-- Google web fonts
	============================================ -->
     <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

     <!-- Libs CSS
	============================================ -->
     <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap/css/bootstrap.min.css" />
	 <link href="<?php echo base_url() ?>assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	 <link href="<?php echo base_url() ?>assets/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" />
     <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet" />
	 <link href="<?php echo base_url() ?>assets/css/themecss/lib.css" rel="stylesheet" />
	 <link href="<?php echo base_url() ?>assets/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" />

	 <!-- Theme CSS
	============================================ -->
   	 <link href="<?php echo base_url() ?>assets/css/themecss/so_megamenu.css" rel="stylesheet" />
     <link href="<?php echo base_url() ?>assets/css/themecss/so-categories.css" rel="stylesheet" />
	 <link href="<?php echo base_url() ?>assets/css/themecss/so-listing-tabs.css" rel="stylesheet" />
	 <link href="<?php echo base_url() ?>assets/css/footer1.css" rel="stylesheet">
	 <link href="<?php echo base_url() ?>assets/css/header1.css" rel="stylesheet">
	 <link id="color_scheme" href="<?php echo base_url() ?>assets/css/theme.css" rel="stylesheet" />
	 <link href="<?php echo base_url() ?>assets/css/responsive.css" rel="stylesheet" />




 </head>

 <body class="res layout-subpage">
     <div id="wrapper" class="wrapper-full ">
	<!-- Main Container  -->
	 <div class="main-container container">

		 <div class="row">
			 <!--Middle Part Start-->
			 <div id="content" class="col-md-12 col-sm-12">

				 <div class="product-view row">
					 <div class="left-content-product col-lg-12 col-xs-12">
						 <div class="row">
							 <div class="content-product-left  col-sm-6 col-xs-12 ">
								 <div class="large-image  ">
									 <img itemprop="image" class="product-image-zoom" src="<?php echo base_url() ?>upload/products/<?php echo $productdetail[0]->ImageLogo; ?>" data-zoom-image="<?php echo base_url() ?>upload/products/<?php echo $productdetail[0]->ImageLogo; ?>" title="Bint Beef" alt="Bint Beef" />
								 </div>



							 </div>

							 <div class="content-product-right col-sm-6 col-xs-12">
								 <div class="title-product">
									 <h1><?php echo $productdetail[0]->productTitle; ?> </h1>
								 </div>
								 <!-- Review ---->
								 <div class="box-review form-group">
									 <div class="ratings">
										 <div class="rating-box">
											 <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
											 <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
											 <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
											 <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
											 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										 </div>
									 </div>
									 <a class="reviews_button" href="quickview.php.html" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 reviews </a>
								 </div>

								 <div class="product-label form-group">
									 <div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
										 <span class="price-new" itemprop="price"><i class="fa fa-rupee"></i><?php echo $productdetail[0]->salePrice; ?>.00 </span>
										 <span class="price-old"><i class="fa fa-rupee"></i><?php echo $productdetail[0]->price; ?>.00</span>
										 <span class="status-stock" ><?php
										  $p1=$productdetail[0]->price;
										  $p2=$productdetail[0]->salePrice;
										   $per=($p1-$p2)*100/$p1;
										   echo round($per,2);
										  ?>%OFF</span>
										  <br/>
										<span style="font-size:13px;" >MRP incl. all taxes</span>
										<br/>
									 </div>
									 <div class="stock"><span>Availability: </span>  <span class="status-stock">In Stock </span></div>
								 </div>

								 <div class="product-box-desc">
									 <div class="inner-box-desc">

										 <div class="reward"><span>Product Name: </span> <?php echo $productdetail[0]->productName;?>  </div>
										  <div class="reward"><span>Product For: </span> <?php echo $productdetail[0]->productFor;?>  </div>
										 <div class="brand"><span>Brand: </span><a href="#"><?php echo $productdetail[0]->brandName;?>  </a>		 </div>
										  <div class="brand"><span>Category: </span><a href="#"><?php echo $productdetail[0]->categoryName;?>  </a>		 </div>
										 <div class="model"><span>Product ID: </span> <?php echo $productdetail[0]->productid;?> </div>
										 <div class="reward"><span>Color: </span> <?php echo $productdetail[0]->color;?>  </div>
										 <div class="reward"><span>size: </span> <?php echo $productdetail[0]->description;?>  </div>
									 </div>
								 </div>

								 <a class="reviews_button" onclick="location.href='<?php echo base_url(); ?>index.php/User/productdetail/<?php echo $productdetail[0]->productid ?>'">see Detail Description</a>
								 <br/>
								 <br/>



					<!-- 	<div id="product">
									 <h4>Available Options </h4>
									 <div class="image_option_type form-group required">
										 <label class="control-label">Colors </label>
										 <ul class="product-options clearfix" id="input-option231">
											 <li class="radio">
												 <label>
													 <input class="image_radio" type="radio" name="option[231]" value="33" />
													 <img src="<?php echo base_url() ?>assets/image/demo/colors/blue.jpg" data-original-title="blue +$12.00" class="img-thumbnail icon icon-color" />				 <i class="fa fa-check"></i>
													 <label>  </label>
												 </label>
											 </li>
											 <li class="radio">
												 <label>
													 <input class="image_radio" type="radio" name="option[231]" value="34" />
													 <img src="<?php echo base_url() ?>assets/image/demo/colors/brown.jpg" data-original-title="brown -$12.00" class="img-thumbnail icon icon-color" />				 <i class="fa fa-check"></i>
													 <label>  </label>
												 </label>
											 </li>
											 <li class="radio">
												 <label>
													 <input class="image_radio" type="radio" name="option[231]" value="35" />  <img src="<?php echo base_url() ?>assets/image/demo/colors/green.jpg" data-original-title="green +$12.00" class="img-thumbnail icon icon-color" />				 <i class="fa fa-check"></i>
													 <label>  </label>
												 </label>
											 </li>
											 <li class="selected-option">
											 </li>
										 </ul>
									 </div>

									<div class="box-checkbox form-group required">
										 <label class="control-label">Checkbox </label>
										 <div id="input-option232">
											 <div class="checkbox">
												 <label><input type="checkbox" name="option[232][]" value="36" /> Checkbox 1 (+$12.00)  </label>
											 </div>
											 <div class="checkbox">
												 <label><input type="checkbox" name="option[232][]" value="37" /> Checkbox 2 (+$36.00)  </label>
											 </div>
											 <div class="checkbox">
												 <label><input type="checkbox" name="option[232][]" value="38" /> Checkbox 3 (+$24.00)  </label>
											 </div>
											 <div class="checkbox">
												 <label><input type="checkbox" name="option[232][]" value="39" /> Checkbox 4 (+$48.00)  </label>
											 </div>
										 </div>
									 </div>-->

									 <div class="form-group box-info-product">
										 <div class="option quantity">
											 <div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
												 <label>Qty </label>
												 <input class="form-control" type="text" name="quantity" value="1" />
												 <input type="hidden" name="product_id" value="50" />
												 <span class="input-group-addon product_quantity_down">− </span>
												 <span class="input-group-addon product_quantity_up">+ </span>
											 </div>
										 </div>
										 <div class="cart">
											 <input type="button" data-toggle="tooltip" title="" value="Add to Cart" onclick="cart.add('42', '1');" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" data-original-title="Add to Cart" />
										 </div>
										 <div class="add-to-links wish_comp">
											 <ul class="blank list-inline">
												 <li class="wishlist">
													 <a class="icon" data-toggle="tooltip" title="" onclick="wishlist.add('50');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i>
													 </a>
												 </li>
												 <li class="compare">
													 <a class="icon" data-toggle="tooltip" title="" onclick="compare.add('50');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i>
													 </a>
												 </li>
											 </ul>
										 </div>

									 </div>

								 </div>
								 <!-- end box info product -->

							 </div>
						 </div>
					 </div>


				 </div>

				 <script type="text/javascript">
					// Cart add remove functions
					var cart = {
						'add': function(product_id, quantity) {
							parent.addProductNotice('Product added to Cart', '<img src="image/demo/shop/product/e11.jpg" alt="">', '<h3><a href="#">Apple Cinema 30"</a> added to <a href="#">shopping cart</a>!</h3>', 'success');
						}
					}

					var wishlist = {
						'add': function(product_id) {
							parent.addProductNotice('Product added to Wishlist', '<img src="image/demo/shop/product/e11.jpg" alt="">', '<h3>You must <a href="#">login</a>  to save <a href="#">Apple Cinema 30"</a> to your <a href="#">wish list</a>!</h3>', 'success');
						}
					}
					var compare = {
						'add': function(product_id) {
							parent.addProductNotice('Product added to compare', '<img src="image/demo/shop/product/e11.jpg" alt="">', '<h3>Success: You have added <a href="#">Apple Cinema 30"</a> to your <a href="#">product comparison</a>!</h3>', 'success');
						}
					}


				</script>


			 </div>


		 </div>
		 <!--Middle Part End-->
	 </div>
	 <!-- //Main Container -->

 <style type="text/css">
	#wrapper{box-shadow:none;}
	#wrapper > *:not(.main-container){display: none;}
	#content{margin:0}
	.container{width:100%;}

	.product-info .product-view,.left-content-product,.box-info-product{margin:0;}
	.left-content-product .content-product-right .box-info-product .cart input{padding:12px 16px;}

	.left-content-product .content-product-right .box-info-product .add-to-links{ width: auto;  float: none; margin-top: 0px; clear:none; }
	.add-to-links ul li{margin:0;}

</style></div>
 <!-- Include Libs & Plugins
	============================================ -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-2.2.4.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url() ?>assets/js/owl-carousel/owl.carousel.js"></script>
 <script type="text/javascript" src="<?php echo base_url() ?>assets/js/themejs/libs.js"></script>
 <script type="text/javascript" src="<?php echo base_url() ?>assets/js/unveil/jquery.unveil.js"></script>
 <script type="text/javascript" src="<?php echo base_url() ?>assets/js/countdown/jquery.countdown.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url() ?>assets/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url() ?>assets/js/datetimepicker/moment.js"></script>
 <script type="text/javascript" src="<?php echo base_url() ?>assets/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-ui/jquery-ui.min.js"></script>


 <!-- Theme files
============================================ -->


 <script type="text/javascript" src="<?php echo base_url() ?>assets/js/themejs/so_megamenu.js"></script>
 <script type="text/javascript" src="<?php echo base_url() ?>assets/js/themejs/addtocart.js"></script>
 <script type="text/javascript" src="<?php echo base_url() ?>assets/js/themejs/application.js"></script>
</body>


<!-- Mirrored from demo.smartaddons.com/templates/html/market/quickview.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Aug 2020 16:07:11 GMT -->
</html>