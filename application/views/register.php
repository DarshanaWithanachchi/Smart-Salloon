<!DOCTYPE html>
<html>
<head>
	<title>Login or Registation</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'dist/css/login/register.css' ?>">
</head>
<body>
	<div class="header">
		<h2 class="head">Register</h2>

		<?php if ($this->session->flashdata('msg')) {
			echo "<h2>".$this->session->flashdata('msg')."</h2>";
		} ?>
	</div>

<?php echo form_open('Validation/addAdmin'); ?>
<?php echo validation_errors(); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>

		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email">
		</div>

		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>

		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="cpassword">
		</div>

		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>

		<p>Already a member ? <a href="<?php echo base_url().'index.php/Home/Login' ?>">Sign In</a></p>
<?php echo form_close(); ?>

</body>
</html>