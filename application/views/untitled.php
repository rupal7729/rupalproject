
<!-- Mirrored from demo.smartaddons.com/templates/html/market/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Aug 2020 15:48:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <!-- Basic page needs
	============================================ -->
	<title>My Account</title>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style type="text/css">
		.custom-file-input {
  color: transparent;
}
.custom-file-input::-webkit-file-upload-button {
  visibility: hidden;
}
.custom-file-input::before {
  content: 'Upload Pic';
  color: black;
  display: inline-block;
  background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
  border: 0px solid #999;
  border-radius: 3px;
  padding: 5px 8px;
  outline: none;
  white-space: nowrap;
  -webkit-user-select: none;
  cursor: pointer;
  text-shadow: 1px 1px #fff;
  font-weight: 700;
  font-size: 10pt;
  margin-left: 10px;
  margin-top: 10px;


}
.custom-file-input:hover::before {
  border-color: black;
}
.custom-file-input:active {
  outline: 0;
}
.custom-file-input:active::before {
  background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
}

body {
  padding: 20px;
}
	</style>
	<script>

		$(document).ready(function()
			{
				$("#btnshow").click(function()
				{
					$("#myDIV").slideToggle();
					$("#myDIVf").slideToggle();

				});

				$("#btnshwcancle").click(function()
				{
					$("#myDIV").slideToggle();
					$("#myDIVf").slideToggle();

				});



				$("#btnshowadd").click(function()
				{
					$("#myDIVa").slideToggle();

				});

				$("#btncancleadd").click(function()
				{
					$("#myDIVa").slideToggle();


				});




				$("#btnshowupdadd").click(function()
				{
					$("#myDIVa").slideToggle();

				});

				$("#btncancleupdadd").click(function()
				{
					$("#myDIVa").slideToggle();


				});




			});
</script>

		<script type="text/javascript">

			$('.input-group.date').datepicker({
});

				function getdata(s)
				{
					//alert(s);
					//$("#ct").css('visibility','visible');
					$.ajax({
						type:"post",
						url:"<?php echo base_url()?>index.php/User/getcity/"+s,
						 success:function(data)
						 {
						 	$("#cityid").html(data);
						 }
					});

			}

		function forupdategetdata(s)
			{
				//alert(s);
				//$("#ct").css('visibility','visible');
				$.ajax({
					type:"post",
					url:"<?php echo base_url()?>index.php/User/getcity/"+s,
					 success:function(data)
					 {
					 	$("#ucityid").html(data);
					 }
				});

		}
		</script>


</head>

<body class="res layout-subpage">
    <?php
     include("header.php")
     ?>
<br/>
<div id="wrapper" class="wrapper-full ">

	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Account</a></li>
			<li><a href="#">My Account</a></li>
		</ul>

		<div class="row">

				<!--Right Part Start -->
				<aside class="col-sm-3 hidden-xs" id="column-right">
					<h2 class="subtitle">My Account</h2>
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
			<!--Right Part End -->
			<?php
			foreach ($adata as $key) {
			 	?>
				<!--Middle Part Start-->
				<div class="col-sm-9">
					<h2 class="title">My Profile</h2>
					<br/>
					<div class="col-sm-12" style="border:1px;">
						<div class="col-sm-6">
							<p style="font-size:20px;"><b><?php echo $key->firstname; ?> <?php echo $key->lastname; ?> </b><button style="margin-top: 10px;" id="btnshow"><i class="fa fa-pencil-square-o"></i></button></p>
						    <p><?php echo $key->occupasion; ?></p>
						    <br/>
						    <br/>


						</div>
						<div class="col-sm-6">
							<img src="<?php echo base_url(); ?>upload/<?php echo $key->profile; ?>" height="100" width="100" border="1">
							<br/>
							<input type="file" name="pic" class="custom-file-input" id="myDIVf" style="display:none;">
							<!--<button class="btn btn-md btn-primary" style="margin-left:17px;" >save</button>-->
						</div>

			     </div>


