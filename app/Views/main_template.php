<?php

/**
 * @var \CodeIgniter\View\View $this
 */
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>APISOFT Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url() ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>/assets/css/style.css" rel="stylesheet">

  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- DataTable -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

  <!-- Sweet Alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

  <?= $this->include('includes/header') ?>

  <?= $this->include('includes/sidebar_menu') ?>

  <main id="main" class="main">

    <?= $this->include('includes/flash_messages') ?>

    <?php $this->renderSection('content') ?>

  </main><!-- End #main -->

  <?= $this->include('includes/footer') ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/chart.js/chart.min.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/quill/quill.min.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>/assets/js/main.js"></script>

</body>

</html>