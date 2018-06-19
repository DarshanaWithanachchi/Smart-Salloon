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
    <!-- Content Header (Page header) -->
    <section class="content-header">
         

  <div class="content-wrapper">
<?php if ($this->session->flashdata('welcome')) {
	echo "<h3>".$this->session->flashdata('welcome')."</h3>";
} ?>


<img src="../assets/image/logo.png">


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


