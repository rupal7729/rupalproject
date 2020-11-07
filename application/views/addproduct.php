<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		  <link rel="stylesheet" href="<?php echo base_url() ?>assets/site.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/richtext.min.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/jquery.richtext.js"></script>
         <script>
        $(document).ready(function() {
            $('.content').richText();
        });
        </script>
</head>
<body align="center">
<div class="page-wrapper box-content">



<form method="post" enctype="multipart/form-data">
	product Title:<input type="text" name="ptitle">
	<br/>
	Product name:<input type="text" name="pname">
	<br/>
	Decription:<textarea type="text" name="pdesc" class="content" id="productDesc"></textarea>
	<br/>
	size:<input type="text" name="psize">
	<br/>
	color:<input type="text" name="pcolor">
	<br/>
	productFor:<input type="text" name="pfor">
	<br/>
	original price:<input type="text" name="page">
	<br/>
	quantity:<input type="text" name="pquan">
	<br/>
	stock:<input type="text" name="pstock">
	<br/>
	saleprice:<input type="text" name="psale">
	<br/>
	brandid:<select id="bid" name="pbid">
											<option value=""> --- Please Select --- </option>
											<?php
									 foreach ($brand as $key ) {


										?>
										<option value="<?php echo $key->brandid ?>"><?php echo $key->brandName; ?></option>
										<?php
									}


									 ?>
										</select>
	<br/>
	categoryid:<select id="cid" name="pcid">
											<option value=""> --- Please Select --- </option>
											<?php
									 foreach ($category as $key1 ) {


										?>
										<option value="<?php echo $key1->categoryid ?>"><?php echo $key1->categoryName; ?></option>
										<?php
									}


									 ?>
										</select>
	<br/>
	Images:<input type="file" name="files[]"  multiple> <br/><br/>

	<input type="submit" name="add" value="add Product">
</form>

        </div>
</body>
</html>