<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/bower_components/mdbootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url();?>assets/bower_components/mdbootstrap/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?php echo base_url();?>assets/bower_components/mdbootstrap/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/bower_components/mdbootstrap/img/logo1.ico">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

</head>

<body>


    <!-- Start your project here-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url(); ?>user/home"><strong>PUP Herbarium</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto smooth-scroll">
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light" href="<?php echo base_url()?>user/Home">Home

              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light" href="<?php echo base_url()?>user/Collection" data-offset="90">Collection</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link waves-effect waves-light dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-hospopup="true" aria-expanded="false">Appointment</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
<!--                 <a class="dropdown-item" href="<?php echo base_url()?>user/Loans" data-offset="90">Borrow Specimen (Loan)</a>
 -->                <a class="dropdown-item" href="<?php echo base_url()?>user/Deposits" data-offset="90">Deposit Specimen</a>
                <a class="dropdown-item" href="<?php echo base_url()?>user/Appointment" data-offset="90">Visit Herbarium Center</a>

              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light" href="<?php echo base_url()?>user/Contact2" data-offset="90">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light" href="<?php echo base_url()?>user/Queries" data-offset="90">Queries</a>
            </li>

          </ul>
          <!-- Social Icon  -->
          <ul class="navbar-nav nav-flex-icons">

                <!--<?php echo '<script type="text/javascript">alert('.$this->session->userdata('strUserName').') </script>'?>-->
              </a>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="fa fa-user"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo base_url()?>user/Profile">Profile</a>
                    <a class="dropdown-item" href="<?php echo base_url()?>user/Collection">Settings</a>
                    <a class="dropdown-item" href="<?php echo base_url()?>user/logout">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="email" id="defaultForm-email" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
                    </div>
                    <div class="md-form mb-4">
                        <i class="fa fa-lock prefix grey-text"></i>
                        <input type="password" id="defaultForm-pass" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                                            <center>Doesn't have an account yet? Sign up <a href="register.html">here.</a></center>

                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-primary">Login</button>
                </div>
            </div>
        </div>
    </div>
