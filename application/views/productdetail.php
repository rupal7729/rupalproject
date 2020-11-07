
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.smartaddons.com/templates/html/market/product-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Aug 2020 16:05:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <!-- Basic page needs
	============================================ -->
	<title>Market - Premium Multipurpose HTML5/CSS3 Theme</title>
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
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/favicon.png">

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
	<link href="<?php echo base_url(); ?>assets/js/lightslider/lightslider.css" rel="stylesheet">

	<!-- Theme CSS
	============================================ -->
   	<link href="<?php echo base_url(); ?>assets/css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/themecss/so-categories.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/ss/footer2.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/header5.css" rel="stylesheet">
	<link id="color_scheme" href="<?php echo base_url(); ?>assets/css/theme.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet">

<!--<link id="color_scheme" href="<?php echo base_url(); ?>assets/css/home5.css" rel="stylesheet">-->



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
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/lightslider/lightslider.js"></script>

	<!-- Theme files
	============================================ -->


	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/themejs/addtocart.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/themejs/application.js"></script>
 <style>
            .wrapper {
                padding: 20px;
                margin: 100px auto;
                width: 400px;
                min-height: 200px;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0,0,0,.1);
                background-color: #fff;
            }
            .rating{
                overflow: hidden;
                vertical-align: bottom;
                display: inline-block;
                width: auto;
                height: 30px;
            }
            .rating > input{
                opacity: 0;
                margin-right: -100%;
            }
            .rating > label{
                position: relative;
                display: block;
                float: right;
                background: url('<?php echo base_url() ?>assets/star-off-big.png');
                background-size: 30px 30px;
            }
            .rating > label:before{
                display: block;
                opacity: 0;
                content: '';
                width: 30px;
                height: 30px;
                background: url('<?php echo base_url() ?>assets/star-on-big.png');
                background-size: 30px 30px;
                transition: opacity 0.2s linear;
            }
            .rating > label:hover:before,
            .rating > label:hover ~ label:before,
            .rating:not(:hover) > :checked ~ label:before{
                opacity: 1;
            }

        </style>
</head>

<body class="res layout-subpage">
    <div id="wrapper" class="wrapper-full ">
	<!-- Header Container  -->
		<?php
		include("header.php");
		 ?>
	<!-- //Header Container  -->
	<!-- Main Container  -->
	<br/>

	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Smartphone & Tablets</a></li>
			<li><a href="#"><?php echo $productdetail[0]->productTitle;?></a></li>
		</ul>


		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-md-12 col-sm-12">

				<div class="product-view row">
					<div class="left-content-product col-lg-10 col-xs-12">
						<div class="row">
							<div class="content-product-left  col-sm-7 col-xs-12 ">
								<div id="thumb-slider-vertical" class="thumb-vertical-outer">
									<span class="btn-more prev-thumb nt"><i class="fa fa-angle-up"></i></span>
									<span class="btn-more next-thumb nt"><i class="fa fa-angle-down"></i></span>
									<ul class="thumb-vertical">
									    <?php foreach($images as $key){ ?>
										<li class="owl2-item">
											<a data-index="" class="img thumbnail" data-image="<?php echo base_url(); ?>upload/products/<?php echo $key->imageName; ?>" title="Canon EOS 5D">
												<img src="<?php echo base_url(); ?>upload/products/<?php echo $key->imageName; ?>" title="Canon EOS 5D" alt="Canon EOS 5D">
											</a>
										</li>

										<?php } ?>

									</ul>


								</div>
								<div class="large-image  vertical">
									<img itemprop="image" class="product-image-zoom" src="<?php echo base_url(); ?>upload/products/<?php echo $key->imageName; ?>" data-zoom-image="<?php echo base_url(); ?>upload/products/<?php echo $key->imageName; ?>" title="Bint Beef" alt="Bint Beef">
								</div>
								<a class="thumb-video pull-left" href="https://www.youtube.com/watch?v=HhabgvIIXik"><i class="fa fa-youtube-play"></i></a>

							</div>

							<div class="content-product-right col-sm-5 col-xs-12">
								<div class="title-product">
									<h1><?php echo $productdetail[0]->productTitle;?></h1>
								</div>
								<!-- Review -->
								<div class="box-review form-group">
									<div class="ratings">
										<div class="rating-box">
										 <?php $rating_value = ceil($rate[0]['avarage']); ?>

											   <span class="fa fa-stack">
											   <i class=" <?php if($rating_value >=1){
											   	echo 'fa fa-star fa-stack-1x';
											   	}else
											   	{ echo 'fa fa-star-o fa-stack-1x';

											   		} ?>"></i></span>
											   		 <span class="fa fa-stack">
											   		<i class="<?php if($rating_value >=2){
											   	echo 'fa fa-star fa-stack-1x';
											   	}else
											   	{ echo 'fa fa-star-o fa-stack-1x';

											   		} ?>"></i></span>
											   		 <span class="fa fa-stack">
											   		<i class="<?php if($rating_value >=3){
											   	echo 'fa fa-star fa-stack-1x';
											   	}else
											   	{ echo 'fa fa-star-o fa-stack-1x';

											   		} ?>"></i></span>
											   		 <span class="fa fa-stack">
											   		<i class="<?php if($rating_value >=4){
											   	echo 'fa fa-star fa-stack-1x';
											   	}else
											   	{ echo 'fa fa-star-o fa-stack-1x';

											   		} ?>"></i></span>
											   		 <span class="fa fa-stack">
											   		<i class="<?php if($rating_value >=5){
											   	echo 'fa fa-star fa-stack-1x';
											   	}else
											   	{ echo 'fa fa-star-o fa-stack-1x';

											   		} ?>"></i></span>

										</div>
									</div>

									<a class="reviews_button" href="#" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;"><?php echo $rate[0]['count'];?> reviews</a>	|
									<a class="write_review_button" href="#" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Write a review</a>
								</div>

								<div class="product-label form-group">
									<div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
										<span class="price-new" itemprop="price"><i class="fa fa-rupee"></i><?php echo $productdetail[0]->salePrice; ?>.00</span>
										<span class="price-old"><i class="fa fa-rupee"></i><?php echo $productdetail[0]->price; ?>.00</span>

									</div>
									<div class="stock"><span>Availability:</span> <span class="status-stock">In Stock</span></div>
									<p style="font-size: 18px;margin-right:50%;">(<?php
										  $p1=$productdetail[0]->price;
										  $p2=$productdetail[0]->salePrice;
										   $per=($p1-$p2)*100/$p1;
										   echo round($per,2);
										  ?>%OFF)</p><p>MRP incl. all taxes</p>

								</div>

								<div class="product-box-desc">
									 <div class="inner-box-desc">

										 <div class="reward"><b><?php echo $productdetail[0]->productName;?></b><a class="write_review_button" href="#" onclick="$('a[href=\'#tab-1\']').trigger('click'); return false;"> See Details</a> </div>

										  <div class="reward"><span>Product For: </span> <?php echo $productdetail[0]->productFor;?>  </div>
										 <div class="brand"><span>Brand: </span><a href="#"><?php echo $productdetail[0]->brandName;?>  </a>		 </div>
										  <div class="brand"><span>Category: </span><a href="#"><?php echo $productdetail[0]->categoryName;?>  </a>		 </div>
										 <div class="model"><span>Product ID: </span> <?php echo $productdetail[0]->productid;?> </div>
										 <div class="reward"><span>Color: </span> <?php echo $productdetail[0]->color;?>  </div>
										 <div class="reward"><span>size: </span> <?php echo $productdetail[0]->size;?>  </div>
									 </div>
								 </div>

								<div id="product">
									<h4>Available Options</h4>
									<div class="image_option_type form-group required">
										<label class="control-label">Colors</label>
										<ul class="product-options clearfix"id="input-option231">
											<li class="radio active">
												<label>
													<input class="image_radio" type="radio" name="option[231]" value="33"> <img src="<?php echo base_url(); ?>assets/image/demo/colors/blue.jpg"									data-original-title="blue +$12.00" class="img-thumbnail icon icon-color"><i class="fa fa-check"></i>
													<label> </label>
												</label>
											</li>
											<li class="radio">
												<label>
													<input class="image_radio" type="radio" name="option[231]" value="34"> <img src="<?php echo base_url(); ?>assets/image/demo/colors/brown.jpg"									data-original-title="brown -$12.00" class="img-thumbnail icon icon-color"><i class="fa fa-check"></i>
													<label> </label>
												</label>
											</li>
											<li class="radio">
												<label>
													<input class="image_radio" type="radio" name="option[231]" value="35"> <img src="<?php echo base_url(); ?>assets/image/demo/colors/green.jpg"
													data-original-title="green +$12.00" class="img-thumbnail icon icon-color">				<i class="fa fa-check"></i>
													<label> </label>
												</label>
											</li>
											<li class="selected-option">
											</li>
										</ul>
									</div>



									<div class="form-group box-info-product">
										<div class="option quantity">
											<div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
												<label>Qty</label>
												<input class="form-control" type="text" name="quantity"
												value="1">
												<input type="hidden" name="product_id" value="50">
												<span class="input-group-addon product_quantity_down">−</span>
												<span class="input-group-addon product_quantity_up">+</span>
											</div>
										</div>
										<div class="cart">
										 <?php if (isset($_SESSION['user'])) { ?>
											<input type="button" data-toggle="tooltip" title="" value="Add to Cart" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" onclick="cart.add('<?php echo $productdetail[0]->productid ?>', '1','<?php echo $productdetail[0]->productName ?>','<?php echo base_url() ?>upload/products/<?php echo $productdetail[0]->ImageLogo ?>');" data-original-title="Add to Cart">
												    <?php }else{ ?>
												    <input type="button" data-toggle="tooltip" title="" value="Add to Cart" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" onclick="alert('You Must Have Login First');window.location = '<?php echo base_url() ?>index.php/User/login'" data-original-title="Add to Cart">
												     <?php } ?>


										</div>
										<div class="add-to-links wish_comp">
											<ul class="blank list-inline">
												<li class="wishlist">
												 <?php if (isset($_SESSION['user'])) { ?>
													<a class="icon" data-toggle="tooltip" title="" onclick="wishlist.add('<?php echo $productdetail[0]->productid ?>','1','<?php echo $productdetail[0]->productName ?>','<?php echo base_url() ?>upload/products/<?php echo $productdetail[0]->ImageLogo ?>');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i>
													</a>
													 <?php }else{ ?>
													 <a class="icon" data-toggle="tooltip" title=""
													onclick="alert('You Must Have Login First');window.location = '<?php echo base_url() ?>index.php/User/login'" data-original-title="Add to Wish List"><i class="fa fa-heart"></i>
													</a>
													   <?php } ?>
												</li>
												<li class="compare">
													<a class="icon" data-toggle="tooltip" title=""
													onclick="compare.add('50');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i>
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

					<section class="col-lg-2 hidden-sm hidden-md hidden-xs slider-products">
						<div class="module col-sm-12 four-block">
							<div class="modcontent clearfix">
								<div class="policy-detail">
									<div class="banner-policy">
										<div class="policy policy1">
											<a href="#"> <span class="ico-policy">&nbsp;</span>	90 day
											<br> money back </a>
										</div>
										<div class="policy policy2">
											<a href="#"> <span class="ico-policy">&nbsp;</span>	In-store exchange </a>
										</div>
										<div class="policy policy3">
											<a href="#"> <span class="ico-policy">&nbsp;</span>	lowest price guarantee </a>
										</div>
										<div class="policy policy4">
											<a href="#"> <span class="ico-policy">&nbsp;</span>	shopping guarantee </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>

				<!-- Product Tabs -->
				<div class="producttab ">
	<div class="tabsslider  col-xs-12">
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
			<li class="item_nonactive"><a data-toggle="tab" href="#tab-review">Reviews</a></li>

			<li class="item_nonactive"><a data-toggle="tab" href="#tab-5">Brand Information</a></li>
		</ul>
		<div class="tab-content col-xs-12">
			<div id="tab-1" class="tab-pane fade active in">

					<h3>Product Description:</h3>
					<ul>

						<li><?php echo $productdetail[0]->productDesc; ?></li>
					</ul>



			</div>
			<div id="tab-review" class="tab-pane fade">

					<div id="review">
						<?php foreach ($ratings as $rkey) {
							 ?>
						<table class="table table-striped table-bordered">
							<tbody>
								<tr>
									<td style="width: 50%;"><strong><?php echo $rkey->username; ?></strong></td>
									<td class="text-right"><?php echo $rkey->reviewDate; ?></td>
								</tr>
								<tr>
									<td colspan="2">
										<p><?php echo $rkey->reviewDesc; ?></p>
										<div class="ratings">
											<div class="rating-box">
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
						<?php } ?>
						<div class="text-right"></div>
					</div>
				<form method="post" action="<?php echo base_url() ?>index.php/User/rating?pid=<?php echo $productdetail[0]->productid; ?>">
					<h2 id="review-title">Write a review</h2>
					<div class="contacts-form">
						<div class="form-group"> <span class="icon icon-user"></span>
							<input type="text" name="username" class="form-control" placeholder="Your Name">
						</div>
						<div class="form-group"> <span class="icon icon-bubbles-2"></span>
							<textarea class="form-control" name="reviewdesc" placeholder="Your review"></textarea>
						</div>
						<span style="font-size: 11px;"><span class="text-danger">Note:</span>						HTML is not translated!</span>

						<div class="form-group">
						 <b>Rating</b>
						<span class="rating">
						  <input id="rating5" type="radio" name="rating" value="5">
						  <label for="rating5">5</label>
						  <input id="rating4" type="radio" name="rating" value="4">
						  <label for="rating4">4</label>
						  <input id="rating3" type="radio" name="rating" value="3">
						  <label for="rating3">3</label>
						  <input id="rating2" type="radio" name="rating" value="2">
						  <label for="rating2">2</label>
						  <input id="rating1" type="radio" name="rating" value="1">
						  <label for="rating1">1</label>
						</span>
						</div>
						<div class="buttons clearfix"><input type="submit" value="submit" name="btnadd"></div>
					</div>
				</form>
			</div>
			<div id="tab-4" class="tab-pane fade">
				<a href="#">Monitor</a>,
				<a href="#">Apple</a>
			</div>
			<div id="tab-5" class="tab-pane fade">
			<h2 id="review-title" style="margin-left: 1%;">Brand Description</h2>
			<br/>
				<div class="col-sm-3">
						<img src="<?php echo base_url() ?>/upload/<?php echo $productdetail[0]->brandLogo;?>" style="border: 1px solid black;">
				</div>
				<div class="col-md-9">
				<p><?php echo $productdetail[0]->brandDesc; ?></p>
				</div>
		</div>
	</div>
</div>
				<!-- //Product Tabs -->

				<!-- Related Products -->
				<div class="related titleLine products-list grid module ">
	<h3 class="modtitle">Related Products  </h3>
	<div class="releate-products ">
		<div class="product-layout">
			<div class="product-item-container">
				<div class="left-block">
					<div class="product-image-container second_img ">
						<img  src="<?php echo base_url(); ?>assets/image/demo/shop/product/e11.jpg"  title="Apple Cinema 30&quot;" class="img-responsive" />
						<img  src="<?php echo base_url(); ?>assets/image/demo/shop/product/e12.jpg"  title="Apple Cinema 30&quot;" class="img_0 img-responsive" />
					</div>
					<!--Sale Label-->
					<span class="label label-sale">Sale</span>
					<!--full quick view block-->
					<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
					<!--end full quick view block-->
				</div>


				<div class="right-block">
					<div class="caption">
						<h4><a href="product.html">Apple Cinema 30&quot;</a></h4>
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
							<span class="price-new">$74.00</span>
							<span class="price-old">$122.00</span>
							<span class="label label-percent">-40%</span>
						</div>
						<div class="description item-desc hidden">
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut l..</p>
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
		<div class="product-layout ">
			<div class="product-item-container">
				<div class="left-block">
					<div class="product-image-container second_img ">
						<img  src="<?php echo base_url(); ?>assets/image/demo/shop/product/11.jpg"  title="Apple Cinema 30&quot;" class="img-responsive" />
						<img  src="<?php echo base_url(); ?>assets/image/demo/shop/product/10.jpg"  title="Apple Cinema 30&quot;" class="img_0 img-responsive" />

					</div>
					<!--Sale Label-->
					<span class="label label-sale">Sale</span>
					<!--full quick view block-->
					<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
					<!--end full quick view block-->
				</div>


				<div class="right-block">
					<div class="caption">
						<h4><a href="product.html">Apple Cinema 30&quot;</a></h4>
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
							<span class="price-new">$74.00</span>
							<span class="price-old">$122.00</span>
							<span class="label label-percent">-40%</span>
						</div>
						<div class="description item-desc hidden">
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut l..</p>
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
		<div class="product-layout ">
			<div class="product-item-container">
				<div class="left-block">
					<div class="product-image-container second_img ">
						<img  src="<?php echo base_url(); ?>assets/image/demo/shop/product/35.jpg"  title="Apple Cinema 30&quot;" class="img-responsive" />
						<img  src="<?php echo base_url(); ?>assets/image/demo/shop/product/34.jpg"  title="Apple Cinema 30&quot;" class="img_0 img-responsive" />
					</div>
					<!--Sale Label-->
					<span class="label label-sale">Sale</span>
					<!--full quick view block-->
					<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
					<!--end full quick view block-->
				</div>


				<div class="right-block">
					<div class="caption">
						<h4><a href="product.html">Apple Cinema 30&quot;</a></h4>
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
							<span class="price-new">$74.00</span>
							<span class="price-old">$122.00</span>
							<span class="label label-percent">-40%</span>
						</div>
						<div class="description item-desc hidden">
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut l..</p>
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
		<div class="product-layout ">
			<div class="product-item-container">
				<div class="left-block">
					<div class="product-image-container second_img ">
						<img  src="<?php echo base_url(); ?>assets/image/demo/shop/product/14.jpg"  title="Apple Cinema 30&quot;" class="img-responsive" />
						<img  src="<?php echo base_url(); ?>assets/image/demo/shop/product/15.jpg"  title="Apple Cinema 30&quot;" class="img_0 img-responsive" />
					</div>
					<!--Sale Label-->
					<span class="label label-sale">Sale</span>
					<!--full quick view block-->
					<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
					<!--end full quick view block-->
				</div>


				<div class="right-block">
					<div class="caption">
						<h4><a href="product.html">Apple Cinema 30&quot;</a></h4>
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
							<span class="price-new">$74.00</span>
							<span class="price-old">$122.00</span>
							<span class="label label-percent">-40%</span>
						</div>
						<div class="description item-desc hidden">
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut l..</p>
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
	</div>
</div>

				<script type="text/javascript">
					$(document).ready(function() {
						var zoomCollection = '.large-image img';
						$( zoomCollection ).elevateZoom({
							zoomType    : "inner",
							lensSize    :"200",
							easing:true,
							gallery:'thumb-slider-vertical',
							cursor: 'pointer',
							galleryActiveClass: "active"
						});
						$('.large-image').magnificPopup({
							items: [
								{src: '<?php echo base_url(); ?>assets/image/demo/shop/product/J9.jpg' },
								{src: '<?php echo base_url(); ?>assets/image/demo/shop/product/J6.jpg' },
								{src: '<?php echo base_url(); ?>assets/image/demo/shop/product/J5.jpg' },
								{src: '<?php echo base_url(); ?>assets/image/demo/shop/product/J4.jpg' },
							],
							gallery: { enabled: true, preload: [0,2] },
							type: 'image',
							mainClass: 'mfp-fade',
							callbacks: {
								open: function() {

									var activeIndex = parseInt($('#thumb-slider-vertical .img.active').attr('data-index'));
									var magnificPopup = $.magnificPopup.instance;
									magnificPopup.goTo(activeIndex);
								}
							}
						});
						$("#thumb-slider-vertical .owl2-item").each(function() {
							$(this).find("[data-index='0']").addClass('active');
						});

						$('.thumb-video').magnificPopup({
						  type: 'iframe',
						  iframe: {
							patterns: {
							   youtube: {
								  index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
								  id: 'v=', // String that splits URL in a two parts, second part should be %id%
								  src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe.
									},
								}
							}
						});

						$('.product-options li.radio').click(function(){
							$(this).addClass(function() {
								if($(this).hasClass("active")) return "";
								return "active";
							});

							$(this).siblings("li").removeClass("active");
							$(this).parent().find('.selected-option').html('<span class="label label-success">'+ $(this).find('img').data('original-title') +'</span>');
						});

						var _isMobile = {
						  iOS: function() {
						   return navigator.userAgent.match(/iPhone/i);
						  },
						  any: function() {
						   return (_isMobile.iOS());
						  }
						};

						$(".thumb-vertical-outer .next-thumb").click(function () {
							$( ".thumb-vertical-outer .lSNext" ).trigger( "click" );
						});

						$(".thumb-vertical-outer .prev-thumb").click(function () {
							$( ".thumb-vertical-outer .lSPrev" ).trigger( "click" );
						});

						$(".thumb-vertical-outer .thumb-vertical").lightSlider({
							item: 3,
							autoWidth: false,
							vertical:true,
							slideMargin: 15,
							verticalHeight:340,
				            pager: false,
							controls: true,
				            prevHtml: '<i class="fa fa-angle-up"></i>',
				            nextHtml: '<i class="fa fa-angle-down"></i>',
							responsive: [
								{
									breakpoint: 1199,
									settings: {
										verticalHeight: 330,
										item: 3,
									}
								},
								{
									breakpoint: 1024,
									settings: {
										verticalHeight: 235,
										item: 2,
										slideMargin: 5,
									}
								},
								{
									breakpoint: 768,
									settings: {
										verticalHeight: 340,
										item: 3,
									}
								}
								,
								{
									breakpoint: 480,
									settings: {
										verticalHeight: 100,
										item: 1,
									}
								}

							]

				        });



						// Product detial reviews button
						$(".reviews_button,.write_review_button").click(function (){
							var tabTop = $(".producttab").offset().top;
							$("html, body").animate({ scrollTop:tabTop }, 1000);
						});
					});

				</script>


			</div>


		</div>
		<!--Middle Part End-->
	</div>
	<!-- //Main Container -->


	<!-- Footer Container -->
		<?php
		include("footer.php");
		 ?>
	<!-- //end Footer Container -->

    </div>




</body>

<!-- Mirrored from demo.smartaddons.com/templates/html/market/product-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Aug 2020 16:05:57 GMT -->
</html>