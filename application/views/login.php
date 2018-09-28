<script src="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.min.css">
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin - Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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


<!-- 

  **   for case sensitivity -- run sa sql server **
ALTER TABLE tblAccounts
ALTER COLUMN strUsername varchar(50) COLLATE Latin1_General_CS_AS;

ALTER TABLE tblAccounts
ALTER COLUMN strPassword varchar(50) COLLATE Latin1_General_CS_AS;

 -->

    <div class="page login-page"> <img src = "<?php echo base_url();?>assets/bower_components/logoname.png" style= "height: 200px; width:400px;    position: absolute;
          bottom: 8px;
          right: 16px; 
          opacity: 0.3;
          filter: alpha(opacity=50);">

      <div class="container" >
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner"> <img src="<?php echo base_url();?>assets/bower_components/logoto.png" alt="logo"  style= "height: 110px; width: 100px">
            <div class="logo text-uppercase"><strong class="text-primary">PUP</strong><span>Herbarium</span></div>
            <p>
             &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
            </p>
             <form id= "loginForm" method="POST" enctype="multipart/form-data">
              <div class="form-group-material">
                <input id="login-username"  name="loginUsername" required data-msg="Please enter your password" class="input-material">
                <label for="login-username" class="label-material">Username</label>
              </div>
              <div class="form-group-material">
                <input id="login-password" type="password" name="loginPassword" required data-msg="Please enter your password" class="input-material">
                <label for="login-password" class="label-material">Password</label>
              </div>
              <div class="form-group text-center">
                 <?php echo '<span class="text-danger">'.$this->session->flashdata("msg"); ?> <br>
                 <button class="btn btn-primary" type="submit" name="insert" id='btnSave' value="Login">Login</button>

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
    
  </body>
       <script src="<?php echo base_url();?>assets/bower_components/distribution/js/front.js"></script>

      <script type="text/javascript">

    $(document).ready(function(){
    //add
    $('#btnSave').click(function(event){
      var url = '<?php echo base_url();?>admin/auth';
      var data = $('#loginForm').serialize();
      //validate form
      if($('#login-username').val()!=''){
        if($('#login-password').val()!=''){
                $.ajax({
                type: 'ajax',
                method: 'post',
                url: url,
                data: data,
                async: false,
                dataType: 'json',
               success: function(response){
                  if(response.success){
                    let timerInterval
                    swal({
                    title: 'Logged in',
                      text: 'You are now logged in!',
                      type: 'success',
                      timer: 1500,
                      showConfirmButton: false
                    }).then(function() {
window.location.href='<?php echo base_url();?>admin/dashboard';
                    });event.preventDefault();
                  }
                },
                error: function(){
                                    
          event.preventDefault();
          swal({
            type: 'error',
            title: "Can't Log in",
            text: 'Invalid Username or Password.'
          });
                }
              });
        }else{
          event.preventDefault();
          swal({
            type: 'error',
            title: 'Incomplete input!',
            text: 'Please fill up all the required fields.'
          });
          }
      }else{
        event.preventDefault();
        swal({
          type: 'error',
          title: 'Incomplete input!',
          text: 'Please fill up all the required fields.'
        });
        }
    });
  }); 
</script>
  </html>
