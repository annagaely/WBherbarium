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
    <script src="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.min.css">

</head>

<body>


    <!-- Start your project here-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url()?>user/index"><strong>PUP Herbarium</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto smooth-scroll">
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light" href="<?php echo base_url()?>user/home">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light" href="<?php echo base_url()?>user/CollectionUser" data-offset="90">Collection</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light" href="<?php echo base_url()?>user/Contactuser" data-offset="90">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light" href="<?php echo base_url()?>user/FAQsUser" data-offset="90">FAQs</a>
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
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"  onclick="resetForm()" >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="loginForm" method ="post" enctype="multipart/form-data">
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="text" id="defaultForm-text" name="loginUsername" class="form-control validate">
                        <label  for="defaultForm-text">Your Username</label>

                    </div>
                    <div class="md-form mb-4">
                        <i class="fa fa-lock prefix grey-text"></i>
                        <input type="password" id="defaultForm-pass" name="loginPassword" class="form-control validate">
                        <label for="defaultForm-pass">Your password</label>

                          <center>Doesn't have an account yet? Register <a href="<?php echo base_url(); ?>user/Register">here.</a>
                          </center>
                    </div>
                </div>
             <center> <?php echo '<span class="text-danger">'.$this->session->flashdata("error"); ?> </center>
                <div class="modal-footer d-flex justify-content-center">
                  <button class="btn btn-danger" type="reset">Reset</button>
                  <!--<a href="<?php echo base_url()?>user/Home"><button class="btn btn-primary">Login</button></a>-->
                  <button id="btnSave" class="btn btn-primary" type="submit" name="insert" value="Login">Login</button>

                </div>
              </form>
            </div>
        </div>
    </div>
<script>
function resetForm() {
    document.getElementById("loginForm").reset();
}

</script>
<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#btnSave').click(function(event){
          var url = '<?php echo base_url();?>user/login_validation';
          var data = $('#loginForm').serialize();

         if($('#defaultForm-text').val()!=''){
            if($('#defaultForm-pass').val()!=''){
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
                      window.location.href='<?php echo base_url();?>user/home';
                    });event.preventDefault();
                  }
                },
                error: function() {
                  event.preventDefault();
                  swal({
                    type: 'error',
                    title: "Can't Log In",
                    text: 'Invalid Username or Password.'
                  });
                }
              });
            }else {
              event.preventDefault();
              swal({
                type: 'error',
                title: 'Incomplete input!',
                text: 'Please fill up all the require fields.'
              });
            }
          }else {
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
