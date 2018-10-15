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
  <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>

    <script src="<?php echo base_url();?>assets/bower_components/demo/d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-4/vendor/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>

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
        </div>
      </div>
    </nav>

<!-- Card -->
<div class="py-5 mt-5">
<div class="card mx-auto px-4" style="width: 80%;">

    <!-- Card body -->
    <div class="card-body">

        <!-- Material form register -->
        <form name="regForm" class="needs-validation" id= "RegisterForm" method="POST" enctype="multipart/form-data" autocomplete="off" novalidate>
            <p class="card-header white-text text-center py-4 h4" style="background-color: #800000;">Sign Up</p>

            <!-- Material input text -->
            <div class="md-form">
              <div class="row">
                <div class="col-md-3">
                  <i class="fa fa-user prefix grey-text"></i>
                  <input type="text" id="strFirstName" name="txtfirstname" class="form-control" required>
                  <label for="strFirstName" class="font-weight-light" style="margin-left: 55px;">First Name<span style="color: red"> *</span></label>
                  <div class="invalid-feedback">
                    Please enter your first name.
                  </div>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-3">
                  <input type="text" id="strMiddleName" name="txtmidname" class="form-control" />
                  <label for="strMiddleName" class="font-weight-light ml-3">Middle Name</label>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-3">
                  <input type="text" id="strLastName" name="txtlastname" class="form-control" required>
                  <label for="strLastName" class="font-weight-light ml-3">Last Name<span style="color: red"> *</span></label>
                  <div class="invalid-feedback">
                    Please enter your last name.
                  </div>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-2">
                  <input type="text" id="strNameSuffix" name="txtnamesuffix" class="form-control">
                  <label for="strNameSuffix" class="font-weight-light ml-3">Name Suffix</label>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>
            </div>
              <!-- Material input email -->
              <div class="md-form">
                <div class="row">
                  <div class="col-md-6">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="email" id="strEmailAdd" name="txtemail" class="form-control" required>
                    <label for="strEmailAdd" class="font-weight-light" style="margin-left: 55px;">Email Address<span style="color: red"> * </span></label>
                    <div class="invalid-feedback">
                      Please enter your valid email address.
                    </div>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-6">
                    <i class="fa fa-phone prefix grey-text"></i>
                    <input type="text" id="strPhoneNum"  data-mask = "99999999999"  name="txtphonenum" class="form-control" required>
                    <label for="strPhoneNum"class="font-weight-light" style="margin-left: 55px;">Phone Number (ex. 09*********)<span style="color: red"> *</span></label>
                  </div>
                  <div class="invalid-feedback">
                    Please enter your active phone number.
                  </div>
                  <div class="valid-feedback">
                    Looks good!
                  </div>

                </div>
              </div>
              <div class="md-form">
                <i class="fas fa-map-marker-alt prefix grey-text"></i>
                <input type="text" id="strPresentAdd" name="txtpresentadd" class="form-control" onkeyup="enableCheck();" required>
                <label for="strPresentAdd" class="font-weight-light">Present Address<span style="color: red"> *</span></label>
                <div class="invalid-feedback">
                  Please enter your present address.
                </div>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="md-form">
                <i class="fa fa-home prefix grey-text"></i>
                <input type="text" id="strPermanentAdd" name="txtpermaadd"  class="form-control" required>
                <label for="strPermanentAdd" class="font-weight-light">Permanent Address<span style="color: red"> *</span></label>
                <div class="invalid-feedback">
                  Please enter your permanent.
                </div>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="custom-control custom-checkbox" style="margin-left: 38px;">
                <input type="checkbox" class="custom-control-input" id="checkbox1" name="checkbox1" onclick="copy()" disabled>
                <label class="custom-control-label font-weight-light" for="checkbox1">Same as the present address</label>
              </div>
              <div class="md-form">
                <div class="row">
                  <div class="col-md-6">
                    <i class="fa fa-users prefix grey-text"></i>
                    <input type="text" id="strAffiliation" name="txtaffname" class="form-control" required>
                    <label for="strAffiliation" class="font-weight-light" style="margin-left: 55px;">Affiliation<span style="color: red"> *</span></label>
                    <div class="invalid-feedback">
                      Please enter the affiliation name you are associated with.
                    </div>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-6">
                    <i class="fas fa-street-view prefix grey-text"></i>
                    <input type="text" id="strAffiliationPosition" name="txtaffpos" class="form-control" required>
                    <label for="strAffiliationPosition" class="font-weight-light" style="margin-left: 55px;">Position<span style="color: red"> *</span></label>
                    <div class="invalid-feedback">
                      Please enter your position in your affiliation.
                    </div>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
              </div>
              <div class="md-form">
                <i class="fa fa-map-pin prefix grey-text"></i>
                <input type="text" id="strAffiliationAdd" name="txtaffaddress" class="form-control" required>
                <label for="strAffiliationAdd" class="font-weight-light">Affiliation Address<span style="color: red"> *</span></label>
                <div class="invalid-feedback">
                  Please enter your affiliation's address.
                </div>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="md-form">
                <div class="row">
                  <div class="col-md-6">
                    <i class="fa fa-user-circle prefix grey-text"></i>
                    <input type="text" id="strUsername" name="txtusername" class="form-control" required>
                    <label for="strUsername" class="font-weight-light" style="margin-left: 55px;">Username<span style="color: red"> *</span></label>
                    <div class="invalid-feedback">
                      Please enter unique username.
                    </div>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-6">
                    <i class="fa fa-key prefix grey-text"></i>
                    <input style="width: 420px; display: inline;" type="password" pattern=".{6,}" id="strPassword" name="txtpassword" class="form-control"  required><i style = "float: right;padding-bottom: 0px; size: 100px" class="fas fa-eye" onclick="showPassword()"></i>
                    <label for="strPassword" class="font-weight-light" style="margin-left: 55px;">Password (6 or more characters)<span style="color: red"> *</span></label>
                    <div class="invalid-feedback">
                      Please enter your password.
                    </div>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>

                </div>

              </div>

              <div class="md-form">
                <div class="alert alert-danger font-weight-light" role="alert">
                    * Indicates required fields.
                </div>
              </div>



            <div class="text-center py-4 mt-3">
              <a href="<?php echo base_url()?>user/index"><button class="btn btn-danger" type="button" >Back to Home</button></a>
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

    <script type="text/javascript">
    $(function(){
      $('#btnSave').click(function(event){

        var data = $('#RegisterForm').serialize();

        if($('#strFirstName').val()!=''){
          if($('#strLastName').val()!=''){
            if($('#strEmailAdd').val()!=''){
              if($('#strPhoneNum').val()!=''){
                if($('#strPresentAdd').val()!=''){
                  if($('#strPermanentAdd').val()!=''){
                    if($('#strAffiliation').val()!=''){
                      if($('#strAffiliationPosition').val()!=''){
                        if($('#strAffiliationAdd').val()!=''){
                          if($('#strUsername').val()!=''){
                            if($('#strPassword').val()!=''){
                              value = document.getElementById('strPassword').value;
 // if (value.length < 3)
                               if (value.length > 5){
                              event.preventDefault();
                              swal({
                                title: 'Are you sure?',
                                type: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, save it!'
                              }).then((result) => {
                                if (result.value){
                                  //validate form
                                  $.ajax({
                                    type: 'ajax',
                                    method: 'post',
                                    url: '<?php echo base_url() ?>user/userRegister',
                                    data: data,
                                    async: false,
                                    dataType: 'json',
                                    success: function(data){
                                      if(data==true){
                                        let timerInterval
                                        swal({
                                          title: 'Registered',
                                          text: 'You have successfully created your account .',
                                          type: 'success',
                                          timer: 1500,
                                          showConfirmButton: false
                                        }).then(function() {
                                          document.getElementById("RegisterForm").reset();
                                          window.location.href='<?php echo base_url();?>user/index';
                                        });event.preventDefault();
                                      }else {
                                        if($('#strUsername').val()==data.strUserName){
                                          event.preventDefault();
                                          swal({
                                            type: 'error',
                                            title: 'Error!',
                                            text: 'Username already exists.'
                                          });
                                        }if($('#strEmailAdd').val()==data.strEmailAddress){
                                          event.preventDefault();
                                          swal({
                                            type: 'error',
                                            title: 'Error!',
                                            text: 'Email Address already exists.'
                                          });
                                        }

                                      }
                                    },
                                    error: function(){
                                      event.preventDefault();
                                      swal({
                                        type: 'error',
                                        title: "Can't Sign Up",
                                        text: 'Invalid input.'
                                      });
                                    }
                                  });
                                }
                              })
                              }else{
                              event.preventDefault();
                              swal({
                                type: 'error',
                                title: 'Invalid input!',
                                text: 'Password must be 6 characters and above.'
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
<script type="text/javascript">
  function showPassword() {
    var x = document.getElementById("strPassword");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<script>
$('input[name=txtpresentadd]').keyup(function(){
  if (this.value.length > 0) {
     $('input[name="checkbox1"]').prop('disabled', false)
  } else {
     $('input[name="checkbox1"]').prop('disabled', true);
     $('input[name="checkbox1"]').prop('checked', false);
  }
})
</script>

<script>
function copy()
{
  var n1 = document.getElementById('strPresentAdd');
  var n2 = document.getElementById('strPermanentAdd');
  var ch = document.getElementById('checkbox1');

    if (ch.checked){
      n2.value = n1.value;
      n2.focus();
    }
    else {
      n2.value = '';
      n2.trigger('blur');
    }



}

</script>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
'use strict';
window.addEventListener('load', function() {
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.getElementsByClassName('needs-validation');
  // Loop over them and prevent submission
  var validation = Array.prototype.filter.call(forms, function(form) {
    form.addEventListener('submit', function(event) {
      if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
}, false);
})();
    </script>
