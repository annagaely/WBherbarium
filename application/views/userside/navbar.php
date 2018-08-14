<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/userside/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/userside/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,600">
    <!-- Lightbox-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/userside/vendor/lightbox2/css/lightbox.css">
    <!-- Custom font icons-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/userside/css/fontastic.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/userside/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/userside/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/bower_components/logo1.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->



  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container"><a href="./" class="navbar-brand"><img src="img/logo.svg" alt="" class="img-fluid"></a>
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">Menu<i class="fa fa-bars ml-2"></i></button>
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                  <!-- Link-->
                  <li class="nav-item"> <a href="<?php echo base_url();?>user/Index" class="nav-link active">Home</a></li>
                  <!-- Link-->
                  <li class="nav-item"> <a href="<?php echo base_url();?>user/Faq" class="nav-link">FAQ</a></li>
                  <!-- Link-->
                  <li class="nav-item"> <a href="<?php echo base_url();?>user/Contact" class="nav-link">Contact</a></li>
                  <!-- Link-->
                  <li class="nav-item"> <a href="<?php echo base_url();?>user/Collection" class="nav-link">Collection</a></li>
                  <li class="nav-item dropdown"><a id="pages" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
                    <div class="dropdown-menu">
                      <a href="<?php echo base_url();?>user/Faq" class="dropdown-item">FAQ</a>
                      <a href="<?php echo base_url();?>user/Contact" class="dropdown-item">Contact</a>
                      <a href="<?php echo base_url();?>assets/bower_components/userside/text.html" class="dropdown-item">Text Page</a></div>
              </li>
            </ul><a href="#accModal" class="btn btn-primary navbar-btn ml-0 ml-lg-3" data-toggle="modal">Login</a>

          </div>
        </div>
      </nav>
    </header>


    <div id="accModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="windowTitleLabel" data-backdrop="static" data-keyboard="false">
      <div role="document" class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" >
            <ul class="nav nav-pills nav-justified">
            <li class="nav-item"><a class="nav-link active" href="#tab1" data-toggle="tab" onclick="resetForm()"><h5>Log In</h5></a></li>
            <li class="nav-item"><a class="nav-link" href="#tab2" data-toggle="tab" onclick="resetForm2()"><h5>Sign Up</h5></a></li>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm(); resetForm2()"><span aria-hidden="true">×</span></button>
          </ul>
            
          
          <div class="modal-body p-4 p-lg-5">
            <div class="tab-content">
              <div class="tab-pane active" id="tab1">
                <form action="#" class="login-form text-left" id="loginForm">
              <div class="form-group mb-4">
                <label>Email Address</label>
                <input type="email" name="stremailAdd" placeholder="name@email.com" class="form-control formm">
              </div>
              <div class="form-group mb-4">
                <label>Password</label>
                <input type="password" name="password" placeholder="Min 6 characters" class="form-control formm">
              </div>
              <div class="form-group">
                <input type="submit" value="Login" class="btn btn-primary">
              </div>
             
            </form>
              </div>
              <div class="tab-pane" id="tab2">
                 <form action="#" class="login-form text-left" id="signupForm">
              <div class="row">
                <div class="form-group col-sm-6">
                  <label>First Name</label>
                  <input type="text" name="strFirstname" placeholder="" class="form-control formm">
                </div>
                <div class="form-group col-sm-6">
                  <label>Middle Name</label>
                  <input type="text" name="strMiddlename" placeholder="" class="form-control formm">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-sm-8">
                  <label style="">Last Name</label>
                  <input type="text" name="strLastname" placeholder="" class="form-control formm">
                </div>
                <div class="form-group col-sm-4">
                  <label style="">Name Suffix</label>
                  <input type="text" name="strNamesuffix" placeholder="ex. Jr., Sr." class="form-control formm">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-sm-6">
                  <label style="">Email Address</label>
                  <input type="email" name="strUsername" placeholder="name@email.com" class="form-control formm">
                </div>
                <div class="form-group col-sm-6">
                  <label style="">Contact Number</label>
                  <input type="email" name="strUsername" placeholder="" class="form-control formm">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-sm-6">
                  <label>Password</label>
                  <input type="password" name="pword" placeholder="Min 6 characters" class="form-control formm">
                </div>
                <div class="form-group col-sm-6">
                  <label>Re-enter Password</label>
                  <input type="password" name="pword2" placeholder="Min 6 characters" class="form-control formm">
                </div>
              </div>
              <div class="form-group">
                <input type="submit" value="Sign Up" class="btn btn-primary">
              </div>
            </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 

