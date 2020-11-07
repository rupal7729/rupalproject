
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.smartaddons.com/templates/html/market/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Aug 2020 15:48:53 GMT -->
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
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/ico/basket.png">

	<!-- Google web fonts
	============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap/css/bootstrap.min.css">
	<link href="<?php echo base_url() ?>assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/themecss/lib.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">

	<!-- Theme CSS
	============================================ -->
   	<link href="<?php echo base_url() ?>assets/css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/themecss/so-categories.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/footer2.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/header5.css" rel="stylesheet">
	<link id="color_scheme" href="<?php echo base_url() ?>assets/css/theme.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/checkout.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/responsive.css" rel="stylesheet">





</head>

<body class="res layout-subpage">
    <div id="wrapper" class="wrapper-full ">
	<!-- Header Container  -->
		<?php include('header.php') ?>
	<!-- //Header Container  -->
	<!-- Main Container  -->
	<div class="main-container container">
	<br/>
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Account</a></li>
			<li><a href="#">My Wish List</a></li>
		</ul>

		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-sm-9">
				<h2 class="title">My Wish List</h2>
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<td class="text-center">Image</td>
								<td class="text-left">Product Name</td>
								<td class="text-left">Model</td>
								<td class="text-right">Stock</td>
								<td class="text-right">Unit Price</td>
								<td class="text-right">Action</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center">
									<a  href="product.html"><img width="70px" src="<?php echo base_url() ?>assets/image/demo/shop/product/18.jpg" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop">
									</a>
								</td>
								<td class="text-left"><a href="product.html">iPad</a>
								</td>
								<td class="text-left">Pt 001</td>
								<td class="text-right">In Stock</td>
								<td class="text-right">
									<div class="price"> <span class="price-new">$45</span> <span class="price-old">$80</span></div>

								</td>
								<td class="text-right">
									<button class="btn btn-primary"
									title="" data-toggle="tooltip"
									onclick="cart.add('48');"
									type="button" data-original-title="Add to Cart"><i class="fa fa-shopping-cart"></i>
									</button>
									<a class="btn btn-danger" title="" data-toggle="tooltip" href="http://localhost/2.2.0.0-compiled/index.html?route=account/wishlist&amp;remove=48"data-original-title="Remove"><i class="fa fa-times"></i></a>
								</td>
							</tr>
							<tr>
								<td class="text-center">
									<a href="product.html"><img width="70px" src="<?php echo base_url() ?>assets/image/demo/shop/product/E1.jpg" alt="Xitefun Causal Wear Fancy Shoes" title="Xitefun Causal Wear Fancy Shoes"></a>
								</td>
								<td class="text-left"><a href="product.html">Comas samer rumas</a>
								</td>
								<td class="text-left">Pt 002</td>
								<td class="text-right">Pre-Order</td>
								<td class="text-right">
									<div class="price"> <span class="price-new">$85</span> </div>
								</td>
								<td class="text-right">
									<button class="btn btn-primary"
									title="" data-toggle="tooltip"
									onclick="" type="button"
									data-original-title="Add to Cart"><i class="fa fa-shopping-cart"></i>
									</button>
									<a class="btn btn-danger" title="" data-toggle="tooltip"
									href="#" data-original-title="Remove"><i class="fa fa-times"></i>
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<!--Middle Part End-->
			<aside class="col-sm-3 hidden-xs" id="column-right">
				<h2 class="subtitle">Account</h2>
				<div class="list-group">
					<ul class="list-item">
						<li><a href="login.html">Login</a>
						</li>
						<li><a href="register.html">Register</a>
						</li>
						<li><a href="#">Forgotten Password</a>
						</li>
						<li><a href="#">My Account</a>
						</li>
						<li><a href="#">Address Books</a>
						</li>
						<li><a href="wishlist.html">Wish List</a>
						</li>
						<li><a href="#">Order History</a>
						</li>
						<li><a href="#">Downloads</a>
						</li>
						<li><a href="#">Reward Points</a>
						</li>
						<li><a href="#">Returns</a>
						</li>
						<li><a href="#">Transactions</a>
						</li>
						<li><a href="#">Newsletter</a>
						</li>
						<li><a href="#">Recurring payments</a>
						</li>
					</ul>
				</div>
			</aside>
		</div>
	</div>
	<!-- //Main Container -->

	<!-- Footer Container -->
		<?php include('footer.php') ?>
	<!-- //end Footer Container -->

    </div>


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

<!-- Mirrored from demo.smartaddons.com/templates/html/market/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Aug 2020 15:48:54 GMT -->
</html>