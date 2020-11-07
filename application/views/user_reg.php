<head>

    <!-- Basic page needs
	============================================ -->
	<title>Login</title>
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
    <link id="color_scheme" href="<?php echo base_url(); ?>assets/css/home5.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet">



</head>

	<?php
		include("login_header.php");
	 ?>
<body style="background-image:url('<?php echo base_url(); ?>/assets/image/demo/logos/KARA2.jpg'); background-repeat: no-repeat;
  background-size: cover;backdrop-filter: blur(4px); " >
<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">

		</ul>
		<ul class="breadcrumb">

		</ul>
		<div class="row">
			<div id="content" class="col-sm-12">
				<div class="page-login">

					<div class="account-border">
						<div class="row">
							<div class="col-sm-6 new-customer">
								<div class="well">
									<!--<h2><i class="fa fa-file-o" aria-hidden="true"></i> New Customer</h2>
									<p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>-->
									<div class="col-sm-6">
									<img src="<?php echo base_url(); ?>assets/image/demo/logos/images.jpeg" title="Our Store" alt="Our Store" align=/>
									</div>
									<div class="col-sm-6">
									<p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.We also Give you fabulous offers in occasion and bithday offers also!!!</p>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo base_url(); ?>assets/image/demo/logos/logo3.png" title="Our Store" alt="Our Store" align=/>
									<p align="center"><font color="#300ec7" size="0.2"><b>One Stop Mom & Baby Shop</b></font></p>

									</div>

								</div>
								<div class="bottom-form">
										&nbsp;
								</div>

							</div>

							<form action="" method="post" enctype="multipart/form-data">
								<div class="col-sm-6 customer-login">
									<div class="well">
										<h2 align="center"><i class="fa fa-file-text-o" aria-hidden="true"></i> Welcome New Customer</h2>
										<p><strong>Registered here and get execiting offers!!!</strong></p>
										<div class="form-group">
										<div class="col-sm-6">
											<label class="control-label " for="input-email">First Name</label>
											<input type="text" name="fname" value="" id="input-email" class="form-control" />
										</div>
										<div class="col-sm-6">
											<label class="control-label " for="input-email">Last Name</label>
											<input type="text" name="lname" value="" id="input-email" class="form-control" />
							
										</div>
											<label class="control-label " for="input-email">E-Mail Address</label>
											<input type="text" name="email" value="" id="input-email" class="form-control" />
										</div>
										<div class="form-group">
											<label class="control-label " for="input-email">Mobile</label>
											<input type="text" name="mobile" value="" id="input-email" class="form-control" />
										</div>
										<div class="form-group">
											<label class="control-label " for="input-password">Password</label>
											<input type="password" name="password" value="" id="input-password" class="form-control" />
										</div>
									</div>
									<div class="bottom-form">
										<a href="" class="forgot">Forgotten Password?</a>
										<?php echo anchor('User/registration',' Sign Up <i class="fa fa-question"></i>') ?>
										<input type="submit" name="reg" value="Register" class="btn btn-default pull-right" />
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>




	<!-- //Main Container -->



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