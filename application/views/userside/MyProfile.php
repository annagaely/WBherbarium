<script>
function showNav() {
document.getElementById("navi").style.display = 'block';
}
function hideNav() {
  document.getElementById("navi").style.display = 'none';
}


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
 

<!-- <script type="text/javascript">



$(document).on('click', '.account', function(e){
      var id = $(this).attr('data');
      $('#account').modal('show');

      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>user/showAccount',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txtemail]').val(data.strEmailAdd);
          $('input[name=txtusername]').val(data.strUsername);

        },
        error: function(){
          alert('Could not show Data');
        }

    });

  });


</script> -->



<img src="<?php echo base_url()?>assets/bower_components/mdbootstrap/img/loan.jpg" style="height: 50vh; width: 100%;"  class="banner">

<div class="container">
      <div class="row py-5">
        <div class="col-md-3">
          <img src="<?php echo base_url();?>assets/bower_components/mdbootstrap/img/user.png" class="avatar img-thumbnail" alt="Responsive image">
          <div class="row py-3">
            <div class="col-md-12" style="text-align: center;">
              <button class="btn btn-primary" onclick="showNav();">Edit Profile</button>
            </div>
            <div class="col-md-12 mt-3" id="navi" style="display: none;">

                  <nav class=" nav flex-column white lighten-3 py-4 mb-r font-weight-bold z-depth-1">
                    <a class="nav-link dark-grey-text" data-toggle="tab" href="#account">Account</a>
                    <a class="nav-link dark-grey-text"  data-toggle="tab" href="#profile">Profile</a>
                    <a class="nav-link dark-grey-text" data-toggle="tab" href="#password">Password</a>
                  </nav>

            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="card card-body">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade active show" id="viewprofile" role="tabpanel">
                <h3 class="card-title">Viewing of Account</h3>
              </div>


<!--   ACCOUNT -->
              <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">
                <h3 class="card-title">Account</h3>
                <form name="myaccForm" class="needs-validation" id= "myaccForm" method="POST" enctype="multipart/form-data" autocomplete="off" novalidate>
                      <div class="md-form">
                        <div class="row">
                          <div class="col-md-3"></div>
                          <div class="col-md-6">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input type="email" id="strEmailAdd" name="txtemail" class="form-control" required>
                            <label for="strEmailAdd" class="font-weight-light" style="margin-left: 55px;">Email Address<span style="color: red"> *</span></label>
                          </div>
                        </div>
                      </div>
                      <div class="md-form">
                        <div class="row">
                          <div class="col-md-3"></div>
                          <div class="col-md-6">
                            <i class="fa fa-user-circle prefix grey-text"></i>
                            <input type="text" id="strUsername" name="txtusername" class="form-control" required>
                            <label for="strUsername" class="font-weight-light" style="margin-left: 55px;">Username<span style="color: red"> *</span></label>
                          </div>
                        </div>
                      </div>
                    <div class="text-center py-4 mt-3">
                      <button class="btn btn-danger" onclick="hideNav()">Cancel</button>
                      <button class="btn btn-primary" type="submit" id="btnSave">Save Changes</button>
                    </div>
                 </form>
              </div>

<!--   PROFILE -->

              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <h3 class="card-title">Profile</h3>
                <form name="regForm" class="needs-validation" id= "RegisterForm" method="POST" enctype="multipart/form-data" autocomplete="off" novalidate>
                  <div class="md-form">
                      <div class="row">
                        <div class="col-md-6">
                          <i class="fa fa-user prefix grey-text"></i>
                          <input type="text" id="strFirstName" name="txtfirstname" class="form-control" required>
                          <label for="strFirstName" class="font-weight-light" style="margin-left: 55px;">First Name<span style="color: red"> *</span></label>
                        </div>
                        <div class="col-md-6">
                          <input type="text" id="strMiddleName" name="txtmidname" class="form-control" />
                          <label for="strMiddleName" class="font-weight-light ml-3">Middle Name</label>
                        </div>
                      </div>
                    </div>
                    <div class="md-form">
                      <div class="row">
                        <div class="col-md-8">
                          <input type="text" id="strLastName" name="txtlastname" class="form-control" required>
                          <label for="strLastName" class="font-weight-light ml-3">Last Name<span style="color: red"> *</span></label>
                        </div>
                        <div class="col-md-4">
                          <input type="text" id="strNameSuffix" name="txtnamesuffix" class="form-control">
                          <label for="strNameSuffix" class="font-weight-light ml-3">Name Suffix</label>
                        </div>
                      </div>
                    </div>

                      <div class="md-form">
                            <i class="fa fa-phone prefix grey-text"></i>
                            <input type="text" id="strPhoneNum" name="txtphonenum" class="form-control" required>
                            <label for="strPhoneNum" class="font-weight-light" data-mask="9999 9999 999">Phone Number<span style="color: red"> *</span></label>

                      </div>
                      <div class="md-form">
                        <i class="fas fa-map-marker-alt prefix grey-text"></i>
                        <input type="text" id="strPresentAdd" name="txtpresentadd" class="form-control" onkeyup="enableCheck();" required>
                        <label for="strPresentAdd" class="font-weight-light">Present Address<span style="color: red"> *</span></label>
                      </div>
                      <div class="md-form">
                        <i class="fa fa-home prefix grey-text"></i>
                        <input type="text" id="strPermanentAdd" name="txtpermaadd"  class="form-control" required>
                        <label for="strPermanentAdd" class="font-weight-light">Permanent Address<span style="color: red"> *</span></label>
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

                          </div>
                          <div class="col-md-6">
                            <i class="fas fa-street-view prefix grey-text"></i>
                            <input type="text" id="strAffiliationPosition" name="txtaffpos" class="form-control" required>
                            <label for="strAffiliationPosition" class="font-weight-light" style="margin-left: 55px;">Position<span style="color: red"> *</span></label>
                          </div>
                        </div>
                      </div>
                      <div class="md-form">
                        <i class="fa fa-map-pin prefix grey-text"></i>
                        <input type="text" id="strAffiliationAdd" name="txtaffaddress" class="form-control" required>
                        <label for="strAffiliationAdd" class="font-weight-light">Affiliation Address<span style="color: red"> *</span></label>
                      </div>

                    <div class="text-center py-4 mt-3">
                      <button class="btn btn-danger" onclick="hideNav()">Cancel</button>
                      <button class="btn btn-primary" type="submit" id="btnSave">Submit</button>
                    </div>
                 </form>
              </div>

<!--   PASSWORD  -->
              <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                <h3 class="card-title">Password</h3>
                <form name="myPasswordForm" class="needs-validation" id= "myaccForm" method="POST" enctype="multipart/form-data" autocomplete="off" novalidate>
                <div class="md-form">
                <div class="row">
                  <div class="col-md-3"></div>
                    <div class="col-md-6">

                        <input type="text" id="strCurPw" class="form-control">
                        <label for="strCurPw" class="ml-3 font-weight-light">Current Password</label>
                      </div>
                    </div>
                  </div>
                  <div class="md-form">
                  <div class="row">
                    <div class="col-md-3"></div>
                      <div class="col-md-6">
                          <input type="text" id="strNewPw" class="form-control">
                          <label for="strNewPw" class="ml-3 font-weight-light">New Password</label>
                        </div>
                      </div>
                    </div>
                    <div class="md-form">
                    <div class="row">
                      <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <input type="text" id="strVerPw" class="form-control">
                            <label for="strVerPw" class="ml-3 font-weight-light" >Verify Password</label>
                          </div>
                        </div>
                    </div>
                    <div class="text-center py-4 mt-3">
                      <button class="btn btn-danger" onclick="hideNav()">Cancel</button>
                      <button class="btn btn-primary" type="submit" id="btnSave">Save Changes</button>
                    </div>
                   </form>
                  <div>

                </div>
              </div>
            </div>

      </div>
    </div>
  </div>
