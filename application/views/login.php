<!DOCTYPE html>
<html>
<head>
	<title>Login or Registation</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'dist/css/login/register.css' ?>">
</head>
<body>
	<div class="header">
		<h2 class="head">Login</h2>
	</div>

<?php echo form_open('Login/LoginUser'); ?>

<?php echo validation_errors(); ?>


<?php if ($this->session->flashdata('msg')) {
	echo "<h3>".$this->session->flashdata('msg')."</h3>";
} ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>

		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>

		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>

 <?php echo form_close(); ?>
</body>
</html>