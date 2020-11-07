<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php if($error=$this->session->flashdata('msg'))
{
	?>
	<p style="color:green;"><strong>Success!</strong><?php echo $error; ?></p>
	<?php
	} ?>
<form method="post" action="<?php echo base_url()?>index.php/User/send">
	Email:<input type="email" name="from" >
	<textarea name="message">
		
	</textarea>
	<input type="submit" name="submit" value="Send Message">
</form>
</body>
</html>