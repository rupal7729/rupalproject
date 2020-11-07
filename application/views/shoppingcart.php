
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.smartaddons.com/templates/html/market/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Aug 2020 15:49:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <!-- Basic page needs
	============================================ -->
	<title>My Shopping Cart</title>
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
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/basket.png" >

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
	<link href="<?php echo base_url(); ?>assets/css/checkout.css" rel="stylesheet">
	<link id="color_scheme" href="<?php echo base_url(); ?>assets/css/theme.css" rel="stylesheet">

	<link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet">


</head>

<body class="res layout-subpage">
    <div id="wrapper" class="wrapper-full ">
	<!-- Header Container  -->
		<?php include("header.php") ?>
	<!-- //Header Container  -->
	<!-- Main Container  -->
	<div class="main-container container">
	<br/>
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Shopping Cart</a></li>
		</ul>

		<div class="row">
			<!--Middle Part Start-->
        <div id="content" class="col-sm-12">
          <h2 class="title">Shopping Cart</h2>
            <div class="table-responsive form-group">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <td class="text-center">Image</td>
                    <td class="text-left">Product Name</td>
                    <td class="text-left">Model</td>
                    <td class="text-left">Quantity</td>
                    <td class="text-right">Unit Price</td>
                    <td class="text-right">Total</td>
                  </tr>
                </thead>


                <?php

                	// print_r($items);
                	 	//foreach ($cart as $ckey) {
                 ?>
                <tbody>
                  <tr>
                    <td class="text-center"><a href="product.html"><img width="70px" src="<?php echo base_url(); ?>assets/image/demo/shop/product/E3.jpg" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop" class="img-thumbnail" /></a></td>
                    <td class="text-left"><a href="product.html"><?php //echo $ckey->productName; ?></a><br />
                     </td>
                    <td class="text-left">Pt 001</td>
                    <td class="text-left" width="200px"><div class="input-group btn-block quantity">
                        <input type="text" name="quantity" value="1" size="1" class="form-control" />
                        <span class="input-group-btn">
                        <button type="submit" data-toggle="tooltip" title="Update" class="btn btn-primary"><i class="fa fa-clone"></i></button>
                        <button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger" onClick=""><i class="fa fa-times-circle"></i></button>
                        </span></div></td>
                    <td class="text-right">$120.00</td>
                    <td class="text-right">$120.00</td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="product.html"><img width="70px" src="<?php echo base_url(); ?>assets/image/demo/shop/product/E1.jpg" alt="Xitefun Causal Wear Fancy Shoes" title="Xitefun Causal Wear Fancy Shoes" class="img-thumbnail" /></a></td>
                    <td class="text-left"><a href="product.html">Comas samer rumas</a></td>
                    <td class="text-left">Pt 002</td>
                    <td class="text-left" width="200px"><div class="input-group btn-block quantity">
                        <input type="text" name="quantity" value="1" size="1" class="form-control" />
                        <span class="input-group-btn">
                        <button type="submit" data-toggle="tooltip" title="Update" class="btn btn-primary"><i class="fa fa-clone"</i></button>
                        <button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger" onClick=""><i class="fa fa-times-circle"></i></button>
                        </span></div></td>
                    <td class="text-right">$150.00</td>
                    <td class="text-right">$150.00</td>
                  </tr>
                </tbody>
                <?php //} ?>
              </table>
            </div>
          <h3 class="subtitle no-margin">What would you like to do next?</h3>
          <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
		<div class="panel-group" id="accordion">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a href="#collapse-coupon" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" aria-expanded="true">Use Coupon Code

							<i class="fa fa-caret-down"></i>
						</a>
					</h4>
				</div>
				<div id="collapse-coupon" class="panel-collapse collapse in" aria-expanded="true">
					<div class="panel-body">
						<label class="col-sm-2 control-label" for="input-coupon">Enter your coupon here</label>
						<div class="input-group">
							<input type="text" name="coupon" value="" placeholder="Enter your coupon here" id="input-coupon" class="form-control">
							<span class="input-group-btn"><input type="button" value="Apply Coupon" id="button-coupon" data-loading-text="Loading..." class="btn btn-primary"></span>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a href="#collapse-shipping" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">Estimate Shipping &amp; Taxes

							<i class="fa fa-caret-down"></i>
						</a>
					</h4>
				</div>
				<div id="collapse-shipping" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
					<div class="panel-body">
						<p>Enter your destination to get a shipping estimate.</p>
						<div class="form-horizontal">
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-country">Country</label>
								<div class="col-sm-10">
									<select name="country_id" id="input-country" class="form-control">
										<option value=""> --- Please Select --- </option>
										<option value="244">Aaland Islands</option>
										<option value="1">Afghanistan</option>
										<option value="2">Albania</option>
										<option value="3">Algeria</option>
									</select>
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-zone">Region / State</label>
								<div class="col-sm-10">
									<select name="zone_id" id="input-zone" class="form-control">
										<option value=""> --- Please Select --- </option>
										<option value="3513">Aberdeen</option>
										<option value="3514">Aberdeenshire</option>
										<option value="3515">Anglesey</option>
										<option value="3516">Angus</option>
										<option value="3517">Argyll and Bute</option>
										<option value="3518">Bedfordshire</option>
										<option value="3519">Berkshire</option>
									</select>
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-postcode">Post Code</label>
								<div class="col-sm-10"><input type="text" name="postcode" value="" placeholder="Post Code" id="input-postcode" class="form-control"></div>
							</div>
								<button type="button" id="button-quote" data-loading-text="Loading..." class="btn btn-primary">Get Quotes</button>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a href="#collapse-voucher" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle collapsed" aria-expanded="false">Use Gift Certificate

							<i class="fa fa-caret-down"></i>
						</a>
					</h4>
				</div>
				<div id="collapse-voucher" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
					<div class="panel-body">
						<label class="col-sm-2 control-label" for="input-voucher">Enter your gift certificate code here</label>
						<div class="input-group">
							<input type="text" name="voucher" value="" placeholder="Enter your gift certificate code here" id="input-voucher" class="form-control">
							<span class="input-group-btn"><input type="submit" value="Apply Gift Certificate" id="button-voucher" data-loading-text="Loading..." class="btn btn-primary"></span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-4 col-sm-offset-8">
				<table class="table table-bordered">
					<tbody>
						<tr>
							<td class="text-right">
								<strong>Sub-Total:</strong>
							</td>
							<td class="text-right">$168.71</td>
						</tr>
						<tr>
							<td class="text-right">
								<strong>Flat Shipping Rate:</strong>
							</td>
							<td class="text-right">$4.69</td>
						</tr>
						<tr>
							<td class="text-right">
								<strong>Eco Tax (-2.00):</strong>
							</td>
							<td class="text-right">$5.62</td>
						</tr>
						<tr>
							<td class="text-right">
								<strong>VAT (20%):</strong>
							</td>
							<td class="text-right">$34.68</td>
						</tr>
						<tr>
							<td class="text-right">
								<strong>Total:</strong>
							</td>
							<td class="text-right">$213.70</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		 <div class="buttons">
            <div class="pull-left"><a href="index.html" class="btn btn-primary">Continue Shopping</a></div>
            <div class="pull-right"><a href="checkout.html" class="btn btn-primary">Checkout</a></div>
          </div>
        </div>
        <!--Middle Part End -->

		</div>
	</div>
	<!-- //Main Container -->


	<!-- Footer Container -->
	<?php include("footer.php") ?>
	<!-- //end Footer Container -->

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

</body>

<!-- Mirrored from demo.smartaddons.com/templates/html/market/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Aug 2020 15:49:08 GMT -->
</html>