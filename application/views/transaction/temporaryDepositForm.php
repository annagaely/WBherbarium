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
        <link class="jsbin" href="<?php echo base_url();?>http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
        <script class="jsbin" src="<?php echo base_url();?>http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script class="jsbin" src="<?php echo base_url();?>http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
        <meta charset=utf-8 />
  </head>
  <body>


<!-- " -->
          <div class="row mx-5 my-5">
              <div class="card col-6 mx-5 my-5" style="max-width: 20rem;margin-bottom: 2px;background-color: #c3c3c3" >
                <img id = "sample" class="card-img-center" src="<?php echo base_url();?>assets/bower_components/NUP.png">
              </div>
              <div class="col-md-5 mx-5 my-5" style="margin-left: auto; margin-right: auto;">
                <form class="form-horizontal">
                  <div class="form-group row">
                    <div class="col-sm-4">
                     <br><br> <label style="font-size: 14px;">Upload Image here:</label>
                    </div>
                    <div class="col-sm-8">
                    <br><br> <input type="file" name="imgPlantDeposit" onchange="readURL(this);">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <div class="col-sm-4">
                      <label style="font-size: 14px;">Collector's Name:</label>
                    </div>
                    <div class="col-sm-8">
                      <input type="text" name="txtdName" id="strDomainName" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-4">
                      <label style="font-size: 14px;">Location:</label>
                    </div>
                    <div class="col-sm-8">
                      <input type="text" name="txtdName" id="strDomainName" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-4">
                      <label style="font-size: 14px;">Date Collected:</label>
                    </div>
                    <div class="col-sm-8">
                      <input type="text" name="txtdName" id="strDomainName" class="form-control">
                    </div>
                  </div>
                   <div class="form-group row">
                    <div class="col-sm-4">
                      <label style="font-size: 14px;">Plant Description:</label>
                    </div>
                    <div class="col-sm-8">
                      <textarea class="form-control" rows="5" id="comment" ></textarea>
                    </div>
                  </div>
                  <div class="buttonFooter" style="float: right;">
                  <input type="reset" value="Clear" class="btn btn-primary">       
                    <input type="submit" value="Proceed" id='btnEditSave' class="btn btn-primary">
                  </div>
                </form>
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


<script type="text/javascript">
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#sample')
                        .attr('src', e.target.result)
                        .width(300)
                        .height(500);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

      </script>
  </body>
  </html>