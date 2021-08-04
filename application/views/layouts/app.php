<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title><?= isset($title) ? $title : 'Dimsum Thafa'; ?> - Dimsum Thafa</title>
    <link rel="icon" href="<?= base_url('images/product/sum.jpg'); ?>">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/navbar-fixed/">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/libs/fontawesome/css/all.min.css">

    <!-- Custom style for this template -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/app.css">
    <script data-pace-options='{ "ajax": false }' src='<?= base_url() ?>assets/libs/pace/pace.min.js'></script>
    <link rel="stylesheet" href="<?= base_url() ?>assets/libs/pace/pace.css">

</head>

<body>

    <!-- Navbar -->
    <?php $this->load->view('layouts/_navbar'); ?>
    <!-- End navbar -->

    <!-- Content -->
    <?php $this->load->view($page); ?>
    <!-- End content -->

    <script src="<?= base_url() ?>assets/libs/jquery/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>assets/js/app.js"></script>
</body>

</html>