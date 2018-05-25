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

	<form method="POST" action="register.php">
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>

		<div class="input-group">
			<label>Password</label>
			<input type="text" name="password">
		</div>

		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>

		<p>Not Yet a Member ? <a href="<?php echo base_url().'index.php/Home/Register' ?>">Sign Up</a></p>
	</form>

</body>
</html>