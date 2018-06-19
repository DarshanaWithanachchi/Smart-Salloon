<?php include 'patials/first.php'; ?>
<?php include 'patials/header.php'; ?>
<?php include 'patials/sidebar.php'; ?>

   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Reception
        <small>Preview</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Reception</h3>
            </div>
            <!-- /.box-header -->

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
            <?php echo form_open('Validation/validateReception') ?>
            <div class="box-body">
               
                <div class="form-group">
                  <label for="exampleInputEmail1">First Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="First Name" name="fname" required="required">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Last Name</label>
                  <input type="Text" class="form-control" id="exampleInputPassword1" placeholder="Last Name" name="lname" required="required">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Id Number</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Id Number" name="id" required="required">
                </div> 
                <div class="form-group">
                  <label >Gender</label>
                   <div class="radio">
                     <label>
                       <input type="radio" name="gender" id="optionsRadios1" value="Male">
                       Male
                     </label>
                   </div>
                <div class="radio">
                  <label>
                     <input type="radio" name="gender" id="optionsRadios2" value="Female">
                      Female
                  </label>
                </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Address</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Address 01" name="address1" required="required">
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Address 02" name="address2" required="required">
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Address 03" name="address3" required="required">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Phone Number</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Phone Number" name="pnumber" required="required">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Email" name="email" required="required">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">User Name</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="User Name" name="uname" required="required">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required="required">
                </div> 
                <div class="form-group">
                  <label >Type</label>
                   <div class="radio">
                     <label>
                       <input type="radio" name="type" id="optionsRadios1" value="Recepitionist">
                       Receptionist
                     </label>
                   </div>
                <div class="radio">
                  <label>
                     <input type="radio" name="type" id="optionsRadios2" value="Admin">
                      Admin
                  </label>
                </div>
                </div>              
              <!-- /.box-body -->
              <div class="box-footer">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <?php echo form_close(); ?>
          </div>
        </div>
       </div>
    </section>   

        <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Recepition</h3>
            </div>
           <table id="example1" class="table table-bordered table-striped">
             <thead>
               <th width="%">First Name</th>
               <th width="%">User Name</th>
               <th width="%">Id Number</th>
               <th width="%">Phone Number</th>
               <th width="%">Email</th>
               <th width="%">Action</th>
             </thead>
                 <?php if (count($posts)):?>
                  <?php foreach ($posts as $post): ?>
              <tr>
                <td><?php echo $post->fname; ?></td>
                <td><?php echo $post->uname; ?></td>
                <td><?php echo $post->idnumber; ?></td>
                <td><?php echo $post->pnumber; ?></td>
                <td><?php echo $post->email; ?></td>
                <td>
                  <?php echo anchor("Home/ViewReception/{$post->id}","View",['class'=>'btn btn-primary']); ?>
                  <?php echo anchor("Home/updateReception/{$post->id}","Edit",['class'=>'btn btn-success']); ?>
                  <?php echo anchor("Home/deleteReception/{$post->id}","Delete",['class'=>'btn btn-danger']); ?>
                </td>
              </tr>
                <?php endforeach; ?>
              <?php else: ?>
              <tr>
                <td>No Records Founds</td>
              </tr>
                <?php endif; ?> 
             <tbody>
               
             </tbody>
           </table>
          </div>
      	</div>
      </div>
    </section>  		


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


