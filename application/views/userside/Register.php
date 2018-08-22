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
    <script>
      function disableSubmit(){
        var fname = document.forms["regForm"]["txtfirstname"].value;
        if (fname == "") {
          document.getElementById("btnSubmit").disabled = true;
        }
      }
    </script>

</head>
<body>

<!-- Card -->
<div class="py-5">
<div class="card mx-auto px-4" style="width: 80%;">

    <!-- Card body -->
    <div class="card-body">

        <!-- Material form register -->
        <form name="regForm" id= "RegisterForm" method="POST" enctype="multipart/form-data" onsubmit="return disableSubmit();">
            <p class="card-header white-text text-center py-4 h4" style="background-color: #800000;">Sign Up</p>

            <!-- Material input text -->
            <div class="md-form">
              <div class="row">
                  <div class="col-md-3">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="strFirstName" name="txtfirstname" class="form-control">
                    <label for="strFirstName" class="font-weight-light" style="margin-left: 55px;">First Name</label>
                  </div>
                  <div class="col-md-3">
                    <input type="text" id="strMiddleName" name="txtmidname" class="form-control">
                    <label for="strMiddleName" class="font-weight-light ml-3">Middle Name</label>
                  </div>
                  <div class="col-md-3">
                    <input type="text" id="strLastName" name="txtlastname" class="form-control">
                    <label for="strLastName" class="font-weight-light ml-3">Last Name</label>
                  </div>
                    <div class="col-md-2">

                    <input type="text" id="strNameSuffix" name="txtnamesuffix" class="form-control">
                    <label for="strLastName" class="font-weight-light ml-3">Name Suffix</label>
                  </div>
                </div>
              </div>
              <!-- Material input email -->
              <div class="md-form">
                <div class="row">
                  <div class="col-md-6">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="email" id="strEmailAdd" name="txtemail" class="form-control">
                    <label for="strEmailAdd" class="font-weight-light" style="margin-left: 55px;">Email Address</label>
                  </div>
                  <div class="col-md-6">
                    <i class="fa fa-phone prefix grey-text"></i>
                    <input type="text" id="strPhoneNum" name="txtphonenum" class="form-control">
                    <label for="strPhoneNum" class="font-weight-light" style="margin-left: 55px;">Phone Number</label>
                  </div>

                </div>
              </div>
              <div class="md-form">
                <i class="fas fa-map-marker-alt prefix grey-text"></i>
                <input type="text" id="strPresentAdd" name="txtpresentadd" class="form-control">
                <label for="strPresentAdd" class="font-weight-light">Present Address</label>
              </div>
              <div class="md-form">
                <i class="fa fa-home prefix grey-text"></i>
                <input type="text" id="strPermanentAdd" name="txtpermaadd" class="form-control">
                <label for="strPermanentAdd" class="font-weight-light">Permanent Address</label>
              </div>
              <div class="custom-control custom-checkbox" style="margin-left: 38px;">
                <input type="checkbox" class="custom-control-input" id="defaultChecked2">
                <label class="custom-control-label font-weight-light" for="defaultChecked2">Same as the present address</label>
              </div>
              <div class="md-form">
                <div class="row">
                  <div class="col-md-6">
                    <i class="fa fa-users prefix grey-text"></i>
                    <input type="text" id="strAffiliation" name="txtaffname" class="form-control">
                    <label for="strAffiliation" class="font-weight-light" style="margin-left: 55px;">Affiliation</label>
                  </div>
                  <div class="col-md-6">
                    <i class="fas fa-street-view prefix grey-text"></i>
                    <input type="text" id="strAffiliationPosition" name="txtaffpos" class="form-control">
                    <label for="strAffiliationPosition" class="font-weight-light" style="margin-left: 55px;">Position</label>

                  </div>
                </div>
              </div>
              <div class="md-form">
                <i class="fa fa-map-pin prefix grey-text"></i>
                <input type="text" id="strAffiliationAdd" name="txtaffaddress" class="form-control">
                <label for="strAffiliationAdd" class="font-weight-light">Affiliation Address</label>
              </div>
              <div class="md-form">
                <div class="row">
                  <div class="col-md-6">
                    <i class="fa fa-user-circle prefix grey-text"></i>
                    <input type="text" id="strUsername" name="txtusername" class="form-control">
                    <label for="strUsername" class="font-weight-light" style="margin-left: 55px;">Username</label>
                    <?php

                    ?>
                  </div>
                  <div class="col-md-6">
                    <i class="fa fa-key prefix grey-text"></i>
                    <input type="password" id="strPassword" name="txtpassword" class="form-control">
                    <label for="strPassword" class="font-weight-light" style="margin-left: 55px;">Password</label>
                  </div>
                </div>
              </div>



            <div class="text-center py-4 mt-3">
              <button class="btn btn-danger" type="reset">Reset</button>

              <button class="btn btn-primary" type="submit" id="btnSave">Submit</button>


            </div>
        </form>
        <!-- Material form register -->

    </div>
    <!-- Card body -->

</div>
</div>
<!-- Card -->

<!-- Footer -->
<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">
    $(function(){

$('#btnSave').click(function(){
      var data = $('#RegisterForm').serialize();
      //validate form

        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>user/userRegister',
          data: data,
          async: false,
          dataType: 'json',
          success: function($response){
            if(response.success){
              $('#RegisterForm').modal('hide');
              $('#RegisterForm')[0].reset();
              if(response.type=='add'){
                var type = 'added'
                alert('asd');
              }else if(response.type=='update'){
                var type ="updated"
              }
            }else{
              alert('Error');
            }
          },
          error: function(){
            alert('Could not save Data');
          }
        });

    });
});
</script>
