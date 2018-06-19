<?php include 'patials/first.php'; ?>
<?php include 'patials/header.php'; ?>
<?php include 'patials/sidebar.php'; ?>

 <div class="content-wrapper">
	<div class="content">
	<h1 align="center">Update Reception</h1><br>
	<div class="modal-body">


<?php if ($msg = $this->session->flashdata('msg')): ?>
	<div class="form-group">
		<div class="col-md-12">
			<div class="alert alert-dismissible alert-success">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<?php echo $msg; ?>
			</div>
		</div>
	</div>
<?php endif ?>

			<?php echo validation_errors(); ?>
            <?php echo form_open("Validation/updateReception/{$post->id}") ?>

				<form action="Validation/updateReception" method="post" accept-charset="utf-8">
					<div class="form-group">
						<label>First Name</label>
						<?php echo form_input(['name'=>'fname',
												'class'=>'form-control',
												'placeholder'=>'First Name',
												'value'=>set_value('fname',$post->fname)
					                         ]); ?>
					    <label>Last Name</label>
						<?php echo form_input(['name'=>'lname',
												'class'=>'form-control',
												'placeholder'=>'Last Name',
												'value'=>set_value('lname',$post->lname)
					                         ]); ?>
						<label>Id Number</label>
						<?php echo form_input(['name'=>'id',
												'class'=>'form-control',
												'placeholder'=>'Id Number',
												'value'=>set_value('id',$post->idnumber)
					                         ]); ?>
						<div class="form-group">
							<label>Gender</label>
							<select name="status" class="form-control">
								<option value="<?php echo $post->gender; ?>"><?php echo $post->gender; ?></option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>                    
						<label>Address</label>
						<?php echo form_input(['name'=>'address1',
												'class'=>'form-control',
												'placeholder'=>'Address 01',
												'value'=>set_value('address',$post->address1)
					                         ]); ?>
					    <?php echo form_input(['name'=>'address2',
												'class'=>'form-control',
												'placeholder'=>'Address 02',
												'value'=>set_value('address',$post->address2)
					                         ]); ?>
					    <?php echo form_input(['name'=>'address3',
												'class'=>'form-control',
												'placeholder'=>'Address 03',
												'value'=>set_value('address',$post->address3)
					                         ]); ?>
						<label>Phone Number</label>
						<?php echo form_input(['name'=>'pnumber',
												'class'=>'form-control',
												'placeholder'=>'Phone Number',
												'value'=>set_value('pnumber',$post->pnumber)
					                         ]); ?>
						<label>Email</label>
						<?php echo form_input(['name'=>'email',
												'class'=>'form-control',
												'placeholder'=>'Email',
												'value'=>set_value('email',$post->email)
					                         ]); ?>
						<label>User Name</label>
						<?php echo form_input(['name'=>'uname',
												'class'=>'form-control',
												'placeholder'=>'User Name',
												'value'=>set_value('uname',$post->uname)
					                         ]); ?>
					    <label>Password</label>
						<?php echo form_input(['name'=>'password',
												'class'=>'form-control',
												'placeholder'=>'Password',
												'value'=>set_value('uname',$post->password)
					                         ]); ?>
						<div class="form-group">
							<label>Type</label>
							<select name="type" class="form-control">
								<option value="<?php echo $post->type; ?>"><?php echo $post->type; ?></option>
								<option value="Receptionist">Receptionist</option>
								<option value="Admin">Admin</option>
							</select>
						</div>  

					<div class="form-group">
						<?php echo form_submit(['name'=>'submit','value'=>'Update','class'=>'btn btn-primary']); ?>
						<?php echo anchor('Home/AddReception','Back',['class'=>'btn btn-default']); ?>
						</div>
					</div>
				</form>
				<?php echo form_close(); ?>
			</div>

	</div>
</div>
<?php include 'patials/footer.php' ?>