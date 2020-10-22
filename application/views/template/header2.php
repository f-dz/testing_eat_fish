<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $judul; ?></title>

    <!-- Bootstrap -->
    <link href="<?= filter_var(base_url('assets/template/vendors/bootstrap/dist/css/bootstrap.min.css'), FILTER_SANITIZE_URL)?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= filter_var(base_url('assets/template/vendors/font-awesome/css/font-awesome.min.css'), FILTER_SANITIZE_URL)?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?= filter_var(base_url('assets/template/vendors/animate.css/animate.min.css'), FILTER_SANITIZE_URL)?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= filter_var(base_url('assets/template/build/css/custom.min.css'), FILTER_SANITIZE_URL)?>" rel="stylesheet">
  </head>

  <style>
    * {box-sizing: border-box}

    /* Set height of body and the document to 100% */
    body, html {
      height: 100%;
      margin: 0;
      font-family: Arial;
    }

    /* Style tab links */
    .tablink {
      background-color: #555;
      color: white;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 16px;
      font-size: 17px;
      width: 25%;
    }

    .tablink:hover {
      background-color: #777;
    }

    /* Style the tab content (and add height:100% for full page content) */
    .tabcontent {
      color: white;
      display: none;
      padding: 100px 20px;
      height: 100%;
    }

    .modal-img {
      display: block;
      margin-left: auto;
      margin-right: auto;
      text-align: center;
    }

    .btn.small {
      padding:0.5%;
      margin: 5%;
      width: 30px;
      height: 30px;
      border-radius:20%;
    }
</style>

  <body class="login">