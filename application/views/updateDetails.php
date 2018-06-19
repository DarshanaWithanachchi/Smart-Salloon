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


 <div class="content-wrapper">
	<div class="content">
	<h1 align="center">Add Post</h1><br>
	<div class="modal-body">
			<?php echo validation_errors(); ?>
            <?php echo form_open("crud/updateData/{$post->id}") ?>

				<form action="crud/updateData" method="post" accept-charset="utf-8">
					<div class="form-group">
						<label>Title</label>
						<?php echo form_input(['name'=>'title',
												'class'=>'form-control',
												'placeholder'=>'Title',
												'value'=>set_value('title',$post->title)
					                         ]); ?>
					</div>
					<div class="col-md-12">
						<?php echo form_error('title','<span class="text-danger">','</span>') ?>
					</div>

					<div class="form-group">
						<label>Description</label>
						<?php echo form_textarea(['name'=>'description',
												'class'=>'form-control',
												'placeholder'=>'Description',
												'value'=>set_value('details',$post->title)
					                         ]); ?>
					</div>
					<div class="col-md-12">
						<?php echo form_error('description','<span class="text-danger">','</span>') ?>
					</div>

					<div class="form-group">
						<label>Image</label>
						<?php echo form_input(['name'=>'image',
												'class'=>'form-control',
												'placeholder'=>'Image',
												'value'=>set_value('image',$post->title)
					                         ]); ?>
					</div>
					<div class="col-md-12">
						<?php echo form_error('image','<span class="text-danger">','</span>') ?>
					</div>

					<div class="form-group">
						<label>Type</label>
						<select name="status" class="form-control">
							<option value="<?php echo $post->type; ?>"><?php echo $post->type; ?></option>
							<option value="hair">Hair</option>
							<option value="nail">Nail</option>
							<option value="other">Other</option>
							<option value="girl hair">Girl</option>
						</select>
					</div>
					<div class="col-md-12">
						<?php echo form_error('status','<span class="text-danger">','</span>') ?>
					</div>

					<div class="form-group">
						<?php echo form_submit(['name'=>'submit','value'=>'Update','class'=>'btn btn-primary']); ?>
						<?php echo anchor('Home/AddDetails','Back',['class'=>'btn btn-default']); ?>
						</div>
					</div>
				</form>
				<?php echo form_close(); ?>
			</div>

	</div>
</div>
<?php include 'patials/footer.php' ?>


