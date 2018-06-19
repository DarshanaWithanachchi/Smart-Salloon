<?php include 'patials/first.php'; ?>
<?php include 'patials/header.php'; ?>
<?php 
  $usertype = $this->session->userData('type');

  if($usertype == "Admin"){

        include 'patials/sidebar.php';

  }elseif ($usertype == "Receptionist") {
    include 'patials/sidebarReceptionist.php';
  }

 ?>


<style type="text/css">
	.wrap{
		width: 350px;
		margin: auto;
		margin-top: 50px;
		padding: 5px;
		border: dotted;
	}
</style>

<div class="content-wrapper">
	<div class="container">

<div class="wrap">		
		<h2>View Customer</h2>
	<form>
		<tr>
			<td><label>First Name : </label></td>
			<td><?php echo $post->fname; ?></td>
		</tr>
		<br>
		<tr>
			<td><label>Last Name : </label></td>
			<td><?php echo $post->lname; ?></td>
		</tr>
		<br>
		<tr>
			<td><label>Id Number : </label></td>
			<td><?php echo $post->idnumber; ?></td>
		</tr>
		<br>
		<tr>
			<td><label>Gender : </label></td>
			<td><?php echo $post->gender; ?></td>
		</tr>
		<br>
		<tr>
			<td><label>Birthday : </label></td>
			<td><?php echo $post->birthday; ?></td>
		</tr>
		<br>
		<tr>
			<td><label>Age : </label></td>
			<td><?php echo $post->age; ?></td>
		</tr>
		<br>
		<tr>
			<td><label>Address 01 : </label></td>
			<td><?php echo $post->address1; ?></td>
		</tr>
		<br>
		<tr>
			<td><label>Address 02 : </label></td>
			<td><?php echo $post->address2; ?></td>
		</tr>
		<br>
		<tr>
			<td><label>Address 03 : </label></td>
			<td><?php echo $post->address3; ?></td>
		</tr>
		<br>
		<tr>
			<td><label>Phone Number : </label></td>
			<td><?php echo $post->pnumber; ?></td>
		</tr>
		<br>
		<tr>
			<td><label>Email : </label></td>
			<td><?php echo $post->email; ?></td>
		</tr>
		<br>
		<tr>
			<td><label>User Name : </label></td>
			<td><?php echo $post->uname; ?></td>
		</tr>
	</form>
	</div>
</div>	
</div>	

<?php include 'patials/footer.php' ?>


