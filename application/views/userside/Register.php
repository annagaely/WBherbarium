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

<!-- Card -->
<div class="py-5">
<div class="card mx-auto px-4" style="width: 80%;">

    <!-- Card body -->
    <div class="card-body">

        <!-- Material form register -->
        <form>
            <p class="card-header white-text text-center py-4 h4" style="background-color: #800000;">Sign Up</p>

            <!-- Material input text -->
            <div class="md-form">
              <div class="row">
                  <div class="col-md-4">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="strFirstName" class="form-control">
                    <label for="strFirstName" class="font-weight-light" style="margin-left: 55px;">First Name</label>
                  </div>
                  <div class="col-md-4">
                    <input type="text" id="strMiddleName" class="form-control">
                    <label for="strMiddleName" class="font-weight-light ml-3">Middle Name</label>
                  </div>
                  <div class="col-md-4">
                    <input type="text" id="strLastName" class="form-control">
                    <label for="strLastName" class="font-weight-light ml-3">Last Name</label>
                  </div>
                </div>
              </div>
              <!-- Material input email -->
              <div class="md-form">
                <div class="row">
                  <div class="col-md-6">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="email" id="strEmailAdd" class="form-control">
                    <label for="strEmailAdd" class="font-weight-light" style="margin-left: 55px;">Email Address</label>
                  </div>
                  <div class="col-md-6">
                    <i class="fa fa-phone prefix grey-text"></i>
                    <input type="email" id="strPhoneNum" class="form-control">
                    <label for="strPhoneNum" class="font-weight-light" style="margin-left: 55px;">Phone Number</label>
                  </div>

                </div>
              </div>
              <div class="md-form">
                <i class="fas fa-map-marker-alt prefix grey-text"></i>
                <input type="text" id="strPresentAdd" class="form-control">
                <label for="strPresentAdd" class="font-weight-light">Present Address</label>
              </div>
              <div class="md-form">
                <i class="fa fa-home prefix grey-text"></i>
                <input type="text" id="strPermanentAdd" class="form-control">
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
                    <input type="text" id="strAffiliation" class="form-control">
                    <label for="strAffiliation" class="font-weight-light" style="margin-left: 55px;">Affiliation</label>
                  </div>
                  <div class="col-md-6">
                    <i class="fas fa-street-view prefix grey-text"></i>
                    <input type="text" id="strAffiliation" class="form-control">
                    <label for="strAffiliation" class="font-weight-light" style="margin-left: 55px;">Position</label>
                  </div>
                </div>
              </div>
              <div class="md-form">
                <i class="fa fa-map-pin prefix grey-text"></i>
                <input type="text" id="strAffiliationAdd" class="form-control">
                <label for="strAffiliationAdd" class="font-weight-light">Affiliation Address</label>
              </div>
              <div class="md-form">
                <div class="row">
                  <div class="col-md-6">
                    <i class="fa fa-user-circle prefix grey-text"></i>
                    <input type="text" id="strUsername" class="form-control">
                    <label for="strUsername" class="font-weight-light" style="margin-left: 55px;">Username</label>
                  </div>
                  <div class="col-md-6">
                    <i class="fa fa-key prefix grey-text"></i>
                    <input type="password" id="strPassword" class="form-control">
                    <label for="strPassword" class="font-weight-light" style="margin-left: 55px;">Password</label>
                  </div>
                </div>
              </div>



            <div class="text-center py-4 mt-3">
                <button class="btn btn-danger" type="submit">Register</button>
            </div>
        </form>
        <!-- Material form register -->

    </div>
    <!-- Card body -->

</div>
</div>
<!-- Card -->

<!-- Footer -->
