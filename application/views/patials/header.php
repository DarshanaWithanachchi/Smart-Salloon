<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Smart </b>Saloon</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">

    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown" style="margin-right: 30px;">
        <a href="&" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('type')." ".$this->session->userdata('username') ?></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url('index.php/Login/LogoutUser') ?>">Logout</a></li>
          <li><a href="*">Change Profile</a></li>
        </ul>
      </li>
      
    </ul>
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    </nav>
  </header>