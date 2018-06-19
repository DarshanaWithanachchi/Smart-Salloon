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


   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
<style type="text/css">
		body
		{
			margin: 0;
			padding: 0;
			background-color:#f1f1f1; 
		}
		.box
		{
			width: 900px;
			padding: 20px;
			background-color: #fff;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin top: 10px; 
		}
</style>
    
<body> 
<div class="content">
	<h1 align="center">Add Products & Posts</h1><br>

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

	<a style="margin-bottom: 10px;" href="" class="btn btn-primary" data-toggle="modal" data-target = "#AddModel">ADD</a> <br>

   	<table id="datatable" class="table table-hover table-striped">
		<thead>
			<tr>
				<th width="25%">Product Type</th>
				<th width="25%">Product Name</th>
				<th width="30%">Image</th>
				<th width="20%">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php if (count($posts)):?>
				<?php foreach ($posts as $post): ?>
			<tr>
				<td><?php echo $post->pro_type; ?></td>
				<td><?php echo $post->pro_name; ?></td>
				<td><?php echo $post->id; ?></td>
				<td>
					<?php echo anchor("Home/view/{$post->id}","View",['class'=>'btn btn-primary']); ?>
					<?php echo anchor("Home/updateDetails/{$post->id}","Edit",['class'=>'btn btn-success']); ?>
					<?php echo anchor("Home/delete/{$post->id}","Delete",['class'=>'btn btn-danger']); ?>
				</td>
			</tr>
		<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td>No Records Founds</td>
				</tr>
			<?php endif; ?>	
		</tbody>
	</table>
</div>   

<div id="AddModel" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<div class="modal-title">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h1 align="center">Add Products</h1>
				</div>
			</div>
			<div class="modal-body">
			<?php echo validation_errors(); ?>
            <?php echo form_open('crud/insertData') ?>

				<form action="crud/insertData" method="post" accept-charset="utf-8" enctype="form-data"/>
					<div class="form-group">
							<label>Product Type</label>
							<select name="status" class="form-control">
								<option value="<?php echo $post->status; ?>"><?php echo $post->status; ?></option>
								<option value="Makeup">Makeup</option>
								<option value="Facial_Treatment">Facial Treatment</option>
								<option value="Hair_Treatment">Hair Treatment</option>
							</select>
						</div> 
					<div class="col-md-12">
						<?php echo form_error('status','<span class="text-danger">','</span>') ?>
					</div>

					<div class="form-group">
						<label>Image</label>
						<input type="file" name="file_name">
						<input type="submit" name="upload" value="upload">
					</div> 
					<div class="col-md-12">
						<?php echo form_error('image','<span class="text-danger">','</span>') ?>
					</div>  

					<div class="form-group">
						<label>Product Name</label>
					    <input class="form-control" type="text" name="pro_name" placeholder="Product Name" >
					</div>
					<div class="col-md-12">
						<?php echo form_error('pro_name','<span class="text-danger">','</span>') ?>
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea rows="4" cols="20" class="form-control" id="exampleInputPassword1" placeholder="Description" name="description" ></textarea>
					</div>
					<div class="col-md-12">
						<?php echo form_error('description','<span class="text-danger">','</span>') ?>
					</div>


					<div class="form-group">
						<label>Ingredients</label>
					    <textarea rows="4" cols="20" class="form-control" id="exampleInputPassword1" placeholder="Ingredients" name="ingredients" ></textarea>
					</div>
					<div class="col-md-12">
						<?php echo form_error('ingredients','<span class="text-danger">','</span>') ?>
					</div>

					<div class="form-group">
						<label>Manufactured</label>
						<textarea rows="4" cols="20" class="form-control" id="exampleInputPassword1" placeholder="Manufactured" name="manufactured"></textarea>
					</div>
					<div class="col-md-12">
						<?php echo form_error('manufactured','<span class="text-danger">','</span>') ?>
					</div>

					<div class="form-group">
						<input class="btn btn-default" type="button" value="cancel" data-dismiss="modal">
						<input class="btn btn-primary" type="submit" value="submit">
					</div>
				</form>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>

</body>

<script type="text/javascript">
	$(document).ready(function(){
		$('#datatable').dataTable();	
	});

</script>


<!-- jQuery 3 -->
<script src="<?php echo base_url().'bower_components/jquery/dist/jquery.min.js'; ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url().'bower_components/bootstrap/dist/js/bootstrap.min.js'; ?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'bower_components/datatables.net/js/jquery.dataTables.min.js'; ?>"></script>
<script src="<?php echo base_url().'bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'; ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'bower_components/jquery-slimscroll/jquery.slimscroll.min.js'; ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'bower_components/fastclick/lib/fastclick.js'; ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'dist/js/adminlte.min.js'; ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'dist/js/demo.js'; ?>"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</div>

<?php include 'patials/footer.php' ?> 


