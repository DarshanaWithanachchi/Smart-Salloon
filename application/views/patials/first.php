<?php 
if (!($this->session->userdata('loggedin'))) {
  redirect('Home/Login');
}

 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Smart Saloon System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url().'bower_components/bootstrap/dist/css/bootstrap.min.css'; ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'bower_components/font-awesome/css/font-awesome.min.css'; ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url().'bower_components/Ionicons/css/ionicons.min.css'; ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'dist/css/AdminLTE.min.css' ;?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'dist/css/skins/_all-skins.min.css'; ?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url().'bower_components/morris.js/morris.css' ;?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url().'bower_components/jvectormap/jquery-jvectormap.css'; ?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url().'bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'; ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url().'bower_components/bootstrap-daterangepicker/daterangepicker.css'; ?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url().'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'; ?>">
    <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'; ?>">


<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="<?php echo base_url().'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic'; ?>">
</head>