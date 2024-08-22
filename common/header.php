<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Hospital Management System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=roothtml.'assets/img/favicon.png'?>" rel="icon">
  <link href="<?=roothtml.'assets/img/apple-touch-icon.png'?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=roothtml.'assets/vendor/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">
  <link href="<?=roothtml.'assets/vendor/bootstrap-icons/bootstrap-icons.css'?>" rel="stylesheet">
  <link href="<?=roothtml.'assets/vendor/remixicon/remixicon.css'?>" rel="stylesheet">
  <link href="<?=roothtml.'assets/vendor/boxicons/css/boxicons.min.css'?>" rel="stylesheet">
  <link href="<?=roothtml.'assets/vendor/quill/quill.snow.css'?>" rel="stylesheet">
  <link href="<?=roothtml.'assets/vendor/quill/quill.bubble.css'?>" rel="stylesheet">
  <link href="<?=roothtml.'assets/vendor/simple-datatables/style.css'?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=roothtml.'assets/css/style.css'?>" rel="stylesheet">

  <link href="<?=roothtml.'assets/sweet/sweetalert.css'?>" rel="stylesheet" />
  <script src="<?=roothtml.'assets/sweet/sweetalert.min.js'?>"></script>
  <script src="<?=roothtml.'assets/sweet/sweetalert.js'?>"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.1.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard.php" class="logo d-flex align-items-center">
        <img src="<?=roothtml.'assets/img/logo.png'?>" alt="">
        <span class="d-none d-lg-block">Victoria Hospital</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?=roothtml.'assets/img/profile-img.jpg'?>" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block ps-2"><?=$_SESSION['clinic_username']?></span>
          </a><!-- End Profile Iamge Icon -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item <?=(curlink == 'dashboard.php')?'active':''?>">
        <a class="nav-link " href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item <?=(curlink == 'patient.php') || (curlink == 'patientdetail.php')?'active':''?>">
        <a class="nav-link" href="patient.php">
          <i class="bi bi-person"></i>
          <span>Patient</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item <?=(curlink == 'appointment.php')?'active':''?>">
        <a class="nav-link" href="appointment.php">
          <i class="bi bi-question-circle"></i>
          <span>Appointment</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item <?=(curlink == 'doctor.php') || (curlink == 'doctordetail.php')?'active':''?>">
        <a class="nav-link" href="doctor.php">
          <i class="bi bi-envelope"></i>
          <span>Doctor</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item <?=(curlink == 'team.php')?'active':''?>">
        <a class="nav-link" href="team.php">
          <i class="bi bi-envelope"></i>
          <span>Team</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item <?=(curlink == 'ward.php')?'active':''?>">
        <a class="nav-link" href="ward.php">
          <i class="bi bi-card-list"></i>
          <span>Ward</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item <?=(curlink == 'bed.php')?'active':''?>">
        <a class="nav-link" href="bed.php">
          <i class="bi bi-card-list"></i>
          <span>Bed</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item <?=(curlink == 'reportbyward.php') || (curlink == 'reportbyteam.php') || (curlink == 'reportbydoctor.php')?'active':''?>">
        <a class="nav-link" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Report</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav" style="">
          <li class="<?=(curlink == 'reportbyward.php')?'active':''?>">
            <a href="reportbyward.php">
              <i class="bi bi-circle"></i><span>Report by Ward</span>
            </a>
          </li>
          <li class="<?=(curlink == 'reportbyteam.php')?'active':''?>">
            <a href="reportbyteam.php">
              <i class="bi bi-circle"></i><span>Report by Doctor Team</span>
            </a>
          </li>
          <li class="<?=(curlink == 'reportbydoctor.php')?'active':''?>">
            <a href="reportbydoctor.php">
              <i class="bi bi-circle"></i><span>Report by Doctor</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item <?=(curlink == 'activity.php')?'active':''?>">
        <a class="nav-link" href="activity.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Activity Log</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link" href="index.php" id="btnlogout">
          <i class="bi bi-dash-circle"></i>
          <span>Log out</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

    </ul>

  </aside>
  <!-- End Sidebar-->