
<!DOCTYPE html>
<html lang="en">

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




		      <div class="row" >
							<div class="col-sm-9" id="myDIV" style="display:none;">
							<fieldset id="personal-details">
							<form method="post" action="<?php echo base_url(); ?>index.php/User/update_personal_details">

								<legend>Personal Details</legend>
								<div class="form-group required">
									<label for="input-firstname" class="control-label">First Name</label>
									<input type="text" class="form-control" id="input-firstname" placeholder="First Name" value="<?php echo $key->firstname; ?>" name="firstname">
								</div>
								<div class="form-group required">
									<label for="input-lastname" class="control-label">Last Name</label>
									<input type="text" class="form-control" id="input-lastname" placeholder="Last Name" value="<?php echo $key->lastname; ?>" name="lastname">
								</div>
								<div class="form-group required">
									<label for="input-email" class="control-label">E-Mail</label>
									<input type="email" class="form-control" id="input-email" placeholder="E-Mail" value="<?php echo $key->email; ?>" name="email">
								</div>
								<div class="form-group required">
									<label for="input-telephone" class="control-label">Telephone</label>
									<input type="tel" class="form-control" id="input-telephone" placeholder="Telephone" value="<?php echo $key->mobile; ?>" name="telephone">
								</div>
								<div class="form-group required">

									<label  for="input-occupasion" class="control-label">Occupasion</label>&nbsp;&nbsp;&nbsp;&nbsp;


											<input type="radio" name="occupasion" id="input-occupasion" value="Gaurdian" checked="checked">Guardian

											<input type="radio" value="Mom" name="occupasion">Mom

											<input type="radio" value="Dad" name="occupasion">Dad


								</div>
								<div class="buttons clearfix">
									<div class="pull-right">

									<input type="submit" class="btn btn-md btn-primary" value="Save Changes" name="updatedetails">
										<lable id="btnshwcancle" class="btn btn-md btn-primary">Cancel</lable>
								    </div>
								</div>
								</form>
								<br/>
								<div class="buttons clearfix">
									<div class="pull-right">



								    </div>
								</div>
							</fieldset>
							<br>

						</div>



				<div class="col-sm-9">
						<h2 class="title">My Contacts</h2>

						<div class="col-sm-12" style="border:1px;">
							<div class="col-sm-6">
							    	E-Mail ID :&nbsp;&nbsp;&nbsp; <b> <?php echo $key->email; ?>   </b>
							    	<br/>
							    	<br/>
							    	Mobile No :&nbsp;&nbsp;&nbsp; <b> <?php echo $key->mobile; ?>   </b>
							    	<br/>
							    	<br/>
							    	&#x2714; Your E-Mail Id has been Verified
							</div>

							<div class="col-sm-6">

							</div>

							</div>


				</div>

				  	<div class="col-sm-9">

					  		<h2 class="title">My Address Book</h2>
					  		<div class="col-sm-12">
						  		<div class="col-sm-6">

						  			<h4 class="title">My Default Address</h4>

						  		</div>
						  		<div class="col-sm-6">
						  			<label id="btnshowadd" class="btn btn-md btn-primary"  style="margin-top:0px;margin-left: 180px;">Add New Address</label>
						  		</div>
					  		 </div>


							<div class="col-sm-12" style="border:1px;">

								<div class="col-sm-6">
								     <b> <?php echo $key->username; ?>   </b>
								      <br/>
								      <b> <?php echo $key->mobile; ?>   </b>
								      <br/>
								       <?php echo $key->cityname; ?> -<?php echo $key->pincode; ?>
								       <br/>
								       <?php echo $key->statename; ?> ,  <?php echo $key->country; ?>
								       <br/>

								        <?php echo $key->houseNo; ?> ,
								       <br/>
								       <?php echo $key->streetAddress; ?> ,
								       <br/>
								       <?php echo $key->landmark; ?>

								      <br/>

								      <button id="btnshowupdadd"><i class="fa fa-pencil-square-o"></i></button>


								</div>


							</div>


					</div>



					<div class="row">

						<div class="col-sm-9" id="myDIVa" style="display:none;">
							<fieldset id="address">
							<form method="post" action="<?php echo base_url() ?>index.php/User/saveaddress">
									<legend>Address Details</legend>
									<div class="form-group">
										<label for="input-name" class="control-label">Name</label>
										<input type="text" class="form-control" id="input-name" placeholder="Name" value="" name="name">

									</div>
									<div class="form-group required">
										<label for="input-address-1" class="control-label">Flat/House No/Building No</label>
										<input type="text" class="form-control" id="input-address-1" placeholder="Flat/House No/Building No" value="" name="houseno" required>
									</div>
									<div class="form-group required">
										<label for="input-address-1" class="control-label">Street Address /Colony </label>
										<input type="text" class="form-control" id="input-address-1" placeholder="Street Address /Colony" value="" name="street" required>
									</div>
									<div class="form-group required">
										<label for="input-landmark" class="control-label">Landmark(optional)</label>
										<input type="text" class="form-control" id="input-landmark" placeholder="Landmark" value="" name="landmark" required>
									</div>
									<div class="form-group required">
										<label for="input-postcode" class="control-label">Post Code</label>
										<input type="text" class="form-control" id="input-postcode" placeholder="Post Code" value="" name="pincode" required>
									</div>
									<div class="form-group required">
										<label for="input-country" class="control-label">Country</label>
										<input type="text" class="form-control" id="input-country" placeholder="" value="India" name="country">
									</div>

									<div class="form-group required">
										<label for="stateid" class="control-label">Region / State</label>
										<select class="form-control" id="stateid" name="stateid"  onchange="getdata(this.value)" required>
											<option value=""> --- Please Select --- </option>
											<?php
										 foreach ($statedata as $key1 ) {


										?>
										<option value="<?php echo $key1->stateid ?>"><?php echo $key1->statename; ?></option>
										<?php
									}


									 ?>
										</select>
									</div>


									<div class="form-group required">
										<label for="stateid" class="control-label">City / Location</label>
										<select class="form-control" id="cityid" name="cityid">
											<option value=""> --- Please Select --- </option>
											<?php
									 foreach ($ptn as $key ) {


										?>
										<option value="<?php echo $key->cityid ?>"><?php echo $key->cityname; ?></option>
										<?php
									}


									 ?>
										</select>
									</div>

									<div class="form-group required">
										<label for="input-mobile" class="control-label">Mobile</label>
										<input type="text" class="form-control" id="input-mobile" placeholder="" value="" name="mobile">
									</div>

									<div class="buttons clearfix">
										<div class="pull-right">

											<input type="submit" name="btnsaveaddress" class="btn btn-md btn-primary" value="Save">
											<lable id="btncancleadd" class="btn btn-md btn-primary">Cancel</lable>
									    </div>
										</div>

								</form>

							</fieldset>
							</div>
			       </div>





					<div class="row">

						<div class="col-sm-9" id="myDIVup" style="display:none;">
							<fieldset id="address">
							<form method="post" action="<?php echo base_url() ?>index.php/User/update_address">
								<legend>Address Details</legend>
								<div class="form-group">
									<label for="input-name" class="control-label">Name</label>
									<input type="text" class="form-control" id="input-name" value="<?php echo $key->username; ?>" name="name">

								</div>
								<div class="form-group required">
									<label for="input-address-1" class="control-label">Flat/House No/Building No</label>
									<input type="text" class="form-control" id="input-address-1" value="<?php echo $key->houseNo; ?>" name="houseno" required>
								</div>
									<div class="form-group required">
									<label for="input-address-1" class="control-label">Street Address /Colony </label>
									<input type="text" class="form-control" id="input-address-1" value="<?php echo $key->streetAddress; ?>" name="street" required>
								</div>
								<div class="form-group required">
									<label for="input-landmark" class="control-label">Landmark(optional)</label>
									<input type="text" class="form-control" id="input-landmark" value="<?php echo $key->landmark; ?>" name="landmark" required>
								</div>
								<div class="form-group required">
									<label for="input-postcode" class="control-label">Post Code</label>
									<input type="text" class="form-control" id="input-postcode" value="<?php echo $key->pincode; ?>" name="pincode" required>
								</div>
								<div class="form-group required">
									<label for="input-country" class="control-label">Country</label>
									<input type="text" class="form-control" id="input-country" value="<?php echo $key->country; ?>" name="country">
								</div>

								<div class="form-group required">
									<label for="stateid" class="control-label">Region / State</label>
									<select class="form-control" id="stateid" onchange="forupdategetdata(this.value)" name="stateid" required>
										<option value=""> --- Please Select --- </option>
										<?php
									 foreach ($statedata as $key1 ) {

									 	if($adata[0]->stateid==$key1->stateid)
									 	{


									?>
									<option value="<?php echo $key1->stateid ?>" selected="selected"><?php echo $key1->statename; ?></option>

									<?php
									 }
									else
									{
										?>
										<option value="<?php echo $key1->stateid ?>"><?php echo $key1->statename; ?></option>
								<?php
								}
							}

								 ?>
									</select>
								</div>


								<div class="form-group required">
									<label for="stateid" class="control-label">City / Location</label>
									<select class="form-control" id="ucityid" name="cityid">
										<option value=""> --- Please Select --- </option>
										<?php
								      foreach ($citydata as $key1 ) {
								 	if($adata[0]->cityid==$key1->cityid)
									{

									?>
									<option value="<?php echo $key->cityid ?>"  selected="selected"><?php echo $key1->cityname; ?></option>
									<?php
										}
										else
										{

									 ?>
										<option value="<?php echo $key->cityid ?>"><?php echo $key1->cityname; ?></option>
									<?php
									}
								}

								 ?>
									</select>
								</div>

								<div class="form-group required">
									<label for="input-mobile" class="control-label">Mobile</label>
									<input type="text" class="form-control" id="input-mobile"  value="<?php echo $key->mobile; ?>" name="mobile">
								</div>

								<div class="buttons clearfix">
									<div class="pull-right">

										<input type="submit" name="btnupdateaddress" class="btn btn-md btn-primary" value="Save">
										<lable id="btncancleupdadd" class="btn btn-md btn-primary">Cancel</lable>
									</div>
								</div>
										</form>

							</fieldset>
						</div>

					</div>



					<div class="row" >


						<div class="col-sm-9" id="myDIVp">
							<fieldset>
							<form method="post" action="<?php echo base_url() ?>index.php/User/updatepass">
								<legend>Change Password</legend>

								<div class="form-group required">
									<label for="input-password" class="control-label">Enter your Registered Email-IdL</label>
									<input type="password" class="form-control" id="input-password" placeholder="Old Password" value="" name="old">
								</div>
								<div class="form-group required">
									<label for="input-password" class="control-label">New Password</label>
									<input type="password" class="form-control" id="input-password" placeholder="New Password" value="" name="new">
								</div>
								<div class="form-group required">
									<label for="input-confirm" class="control-label">New Password Confirm</label>
									<input type="password" class="form-control" id="input-confirm" placeholder="New Password Confirm" value="" name="cpass">
								</div>
								<div class="buttons clearfix">
									<div class="pull-right">

									<input type="submit" class="btn btn-md btn-primary" name="savepassword" value="Save Changes">
								</div>
								</div>
								</form>
							</fieldset>

						</div>


					</div>


						<div class="row">
							<div class="col-sm-9" id="myDIVa">
								<fieldset id="address">
								<form method="post" action="<?php echo base_url() ?>index.php/user/addchild" enctype="multipart/form-data">
									<legend>Child Details</legend>
									<div class="form-group">
										<label for="input-company" class="control-label">Child Name;</label>

										<input type="text" class="form-control" id="input-company" placeholder="Enter your child's Name" value="" name="childname">

									</div>
									<div class="form-group required">
										<label for="input-address-1" class="control-label">Date of Birth</label>
										<div class="input-group date">
	 									 <input type="text" class="form-control" name="dob" placeholder="Enter your child's Date of Birth"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
										</div>
									</div>
									<div class="form-group required">
										<label for="input-city" class="control-label">Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="radio" value="Girl" name="gender"> Girl&nbsp;&nbsp;

									   <input type="radio" value="Boy" name="gender"> Boy

									</div>
									   <div class="form-group">

										<label for="input-company" class="control-label">Child Photo;</label>
										<input type="file" name="imgnm">
										</div>



									<div class="buttons clearfix">
										<div class="pull-right">

											<input type="submit" class="btn btn-md btn-primary" name="btnaddchild" value="Save">
										</div>
									</div>
									</form>
								</fieldset>
							</div>

						</div>
				</div>

			</div>
			<?php

				}
			 ?>
			<!--Middle Part End-->
		</div>
	</div>
	<!-- //Main Container -->

</div>

	<?php
     include("footer.php")
     ?>

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

<!-- Mirrored from demo.smartaddons.com/templates/html/market/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Aug 2020 15:48:53 GMT -->
</html>