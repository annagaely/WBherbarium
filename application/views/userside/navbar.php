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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

</head>

<body>


    <!-- Start your project here-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="#"><strong>PUP Herbarium</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto smooth-scroll">
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light" href="<?php echo base_url()?>user/index">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light" href="<?php echo base_url()?>user/Collection" data-offset="90">Collection</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light" href="<?php echo base_url()?>user/Contact" data-offset="90">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light" href="<?php echo base_url()?>user/Queries" data-offset="90">Queries</a>
            </li>

          </ul>
          <!-- Social Icon  -->
          <ul class="navbar-nav nav-flex-icons">

            <li class="nav-item">
                <button type="button" data-toggle="modal" data-target="#modalLoginForm" class=" btn btn-outline-light py-2" style="border-bottom-left-radius: 25px; border-bottom-right-radius: 25px; border-top-left-radius: 25px; border-top-right-radius: 25px;">Login</button>
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
                <form method ="post" action="<?php echo base_url();?>user/login_validation">
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="text" id="defaultForm-text" name="loginUsername" class="form-control validate">
                        <label  for="defaultForm-text">Your Username</label>
                        <span class="text-danger"><?php echo form_error('loginUsername');?></span>
                    </div>
                    <div class="md-form mb-4">
                        <i class="fa fa-lock prefix grey-text"></i>
                        <input type="password" id="defaultForm-pass" name="loginPassword" class="form-control validate">
                        <label for="defaultForm-pass">Your password</label>
                        <span class="text-danger"><?php echo form_error('loginPassword');?></span>
                          <center>Doesn't have an account yet? Register <a href="<?php echo base_url(); ?>user/Register">here.</a>
                          </center>
                    </div>
                </div>
             <center> <?php echo '<span class="text-danger">'.$this->session->flashdata("error"); ?> </center>
                <div class="modal-footer d-flex justify-content-center">
                  <button class="btn btn-danger" type="reset">Reset</button>
                  <!--<a href="<?php echo base_url()?>user/Home"><button class="btn btn-primary">Login</button></a>-->
                  <button class="btn btn-primary" type="submit" name="insert" value="Login">Login</button>
                  
                </div>
              </form>
            </div>
        </div>
    </div>
