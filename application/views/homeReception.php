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
<h1>Recepption</h1>

<?php include 'patials/fter.php' ?>
<?php include 'patials/footer.php' ?>


