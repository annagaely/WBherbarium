<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin - Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/distribution/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/distribution/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/distribution/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="<?php echo base_url();?> https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/distribution/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/distribution/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/distribution/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/distribution/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/bower_components/logo1.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>

    <div class="page login-page">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner"> <img src="<?php echo base_url();?>assets/bower_components/logoto.png" alt="logo"  style= "height: 110px; width: 100px">
            <div class="logo text-uppercase"><strong class="text-primary">PUP</strong><span>Herbarium</span></div>
            <p>
             &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
            </p>
             <form method ="post" action="<?php echo base_url();?>admin/adminlogin_validation">
              <div class="form-group-material">
                <input id="login-username"  name="loginUsername" required data-msg="Please enter your password" class="input-material">
                <label for="login-username" class="label-material">Username</label>
              </div>
              <div class="form-group-material">
                <input id="login-password" type="password" name="loginPassword" required data-msg="Please enter your password" class="input-material">
                <label for="login-password" class="label-material">Password</label>
              </div>
              <div class="form-group text-center">
                 <?php echo '<span class="text-danger">'.$this->session->flashdata("error"); ?> <br>
                 <button class="btn btn-primary" type="submit" name="insert" value="Login">Login</button>

              </div>
           </form>
            <a href="#" class="forgot-pass">Forgot Password?</a> 
          </div>
        </div>
      </div>
    </div>

     <!-- JavaScript files-->
    <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/bower_components/distribution/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    <script src="<?php echo base_url();?>assets/bower_components/distribution/js/front.js"></script>
  </body>
  </html>