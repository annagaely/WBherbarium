
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
                <h3 class="card-header">Viewing of Account</h3>
              </div>


<!--   ACCOUNT -->
              <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">
                <h3 class="card-header">Account</h3>
                <form name="myaccForm" class="needs-validation" id= "myaccForm" method="POST" enctype="multipart/form-data" autocomplete="off" novalidate>
                      <div class="md-form">
                        <div class="row">
                          <div class="col-md-3"></div>
                          <div class="col-md-6">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input type="email" id="strEmailAdd" name="txtemail" class="form-control" autofocus required>
                            <label for="strEmailAdd" class="font-weight-light" style="margin-left: 55px;">Email Address<span style="color: red"> *</span></label>
                          </div>
                        </div>
                      </div>
                      <div class="md-form">
                        <div class="row">
                          <div class="col-md-3"></div>
                          <div class="col-md-6">
                            <i class="fa fa-user-circle prefix grey-text"></i>
                            <input type="text" id="strUsername" name="txtusername" class="form-control" disabled autofocus>
                            <label for="strUsername" class="font-weight-light" style="margin-left: 55px;">Username<span style="color: red"> *</span></label>
                          </div>
                        </div>
                      </div>
                    <div class="text-center py-4 mt-3">
                      <button class="btn btn-danger" onclick="hideNav()">Cancel</button>
                      <button class="btn btn-primary" type="submit" id="btnSaveAccount">Save Changes</button>
                    </div>
                 </form>
              </div>

<!--   PROFILE -->

              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <h3 class="card-header">Profile</h3>
                <form name="profileform" class="needs-validation" id= "myprofileForm" method="POST" enctype="multipart/form-data" autocomplete="off" novalidate>
                  <div class="md-form">
                      <div class="row">
                        <div class="col-md-6">
                          <i class="fa fa-user prefix grey-text"></i>
                          <input type="text" id="strFirstName" name="txtfirstname" class="form-control" autofocus required>
                          <label for="strFirstName" class="font-weight-light" style="margin-left: 55px;">First Name<span style="color: red"> *</span></label>
                        </div>
                        <div class="col-md-6">
                          <input type="text" id="strMiddleName" name="txtmidname" class="form-control" autofocus />
                          <label for="strMiddleName" class="font-weight-light ml-3">Middle Name</label>
                        </div>
                      </div>
                    </div>
                    <div class="md-form">
                      <div class="row">
                        <div class="col-md-8">
                          <input type="text" id="strLastName" name="txtlastname" class="ml-5 form-control" required autofocus>
                          <label for="strLastName" class="font-weight-light ml-5">Last Name<span style="color: red"> *</span></label>
                        </div>
                        <div class="col-md-4">
                          <input type="text" id="strNameSuffix" name="txtnamesuffix" class="form-control" autofocus>
                          <label for="strNameSuffix" class="font-weight-light ml-3">Name Suffix</label>
                        </div>
                      </div>
                    </div>

                      <div class="md-form">
                            <i class="fa fa-phone prefix grey-text"></i>
                            <input type="text" id="strPhoneNum" name="txtphonenum" class="form-control" autofocus required>
                            <label for="strPhoneNum" class="font-weight-light" data-mask="9999 9999 999">Phone Number<span style="color: red"> *</span></label>

                      </div>
                      <div class="md-form">
                        <i class="fas fa-map-marker-alt prefix grey-text"></i>
                        <input type="text" id="strPresentAdd" name="txtpresentadd" class="form-control" onkeyup="enableCheck();" autofocus required>
                        <label for="strPresentAdd" class="font-weight-light">Present Address<span style="color: red"> *</span></label>
                      </div>
                      <div class="md-form">
                        <i class="fa fa-home prefix grey-text"></i>
                        <input type="text" id="strPermanentAdd" name="txtpermaadd"  class="form-control" autofocus required>
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
                            <input type="text" id="strAffiliation" name="txtaffname" class="form-control" autofocus required>
                            <label for="strAffiliation" class="font-weight-light" style="margin-left: 55px;">Affiliation<span style="color: red"> *</span></label>

                          </div>
                          <div class="col-md-6">
                            <i class="fas fa-street-view prefix grey-text"></i>
                            <input type="text" id="strAffiliationPosition" name="txtaffpos" class="form-control" autofocus required>
                            <label for="strAffiliationPosition" class="font-weight-light" style="margin-left: 55px;">Position<span style="color: red"> *</span></label>
                          </div>
                        </div>
                      </div>
                      <div class="md-form">
                        <i class="fa fa-map-pin prefix grey-text"></i>
                        <input type="text" id="strAffiliationAdd" name="txtaffaddress" class="form-control" autofocus required>
                        <label for="strAffiliationAdd" class="font-weight-light">Affiliation Address<span style="color: red"> *</span></label>
                      </div>

                    <div class="text-center py-4 mt-3">
                      <button class="btn btn-danger" onclick="hideNav()">Cancel</button>
                      <button class="btn btn-primary" type="submit" id="btnSaveProfile">Submit</button>
                    </div>
                 </form>
              </div>

<!--   PASSWORD  -->
              <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                <h3 class="card-header">Password</h3>
                <form name="myPasswordForm" class="needs-validation" id= "myPasswordForm" method="POST" enctype="multipart/form-data" autocomplete="off" novalidate>
                <div class="md-form">
                <div class="row">
                  <div class="col-md-3"></div>
                    <div class="col-md-6">

                        <input type="password" id="strCurPw" name= "txtCurPw" class="form-control">
                        <label for="strCurPw" class="ml-3 font-weight-light">Current Password</label>
                      </div>
                    </div>
                  </div>
                  <div class="md-form">
                  <div class="row">
                    <div class="col-md-3"></div>
                      <div class="col-md-6">
                          <input type="password" id="strNewPw" name="txtNewPw" class="form-control">
                          <label for="strNewPw" class="ml-3 font-weight-light">New Password</label>
                        </div>
                      </div>
                    </div>
                    <div class="md-form">
                    <div class="row">
                      <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <input type="password" id="strVerPw" name="txtVerPw" class="form-control">
                            <label for="strVerPw" class="ml-3 font-weight-light" >Verify Password</label>
                          </div>
                        </div>
                    </div>
                    <div class="text-center py-4 mt-3">
                      <button class="btn btn-danger" onclick="hideNav()">Cancel</button>
                      <button class="btn btn-primary" type="submit" id="btnSavePassword">Save Changes</button>
                    </div>
                   </form>
                  <div>

                </div>
              </div>
            </div>

      </div>
    </div>
  </div>
</div>
<script>
function showNav() {
document.getElementById("navi").style.display = 'block';
}
function hideNav() {
  document.getElementById("navi").style.display = 'none';
}


</script>
<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
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


<script type="text/javascript">

function showAccount()
{
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>user/showAccount',
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txtemail]').val(data.strEmailAddress);
          $('input[name=txtusername]').val(data.strUserName);

        },
        error: function(){
          alert('Could not show Data');
        }

    });

  };

    $(document).ready(function(){

    //show
    showAccount();

  });
</script>
<script type="text/javascript">

 $('#btnSaveAccount').click(function(){
      var data = $('#myaccForm').serialize();
        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>user/updateAccount',
          data: data,
          async: false,
          dataType: 'json',
          success: function(response){
            if(response.success){
              if(response.type=='add'){
                var type = 'added'
              }else if(response.type=='update'){
                var type ="updated"
              }
              showAllPhylum();
            }else{
              alert('Error');
            }
          },
          error: function(){
            alert('Could not update data');
          }
        });
    });

</script>
<script type="text/javascript">

function showProfile()
{
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>user/showProfile',
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txtfirstname]').val(data.strFirstname);
          $('input[name=txtmidname]').val(data.strMiddlename);
          $('input[name=txtlastname]').val(data.strLastname);
          $('input[name=txtnamesuffix]').val(data.strNameSuffix);
          $('input[name=txtphonenum]').val(data.strContactNumber);
          $('input[name=txtpresentadd]').val(data.strPresentAddress);
          $('input[name=txtpermaadd]').val(data.strPermanentAddress);
          $('input[name=txtaffname]').val(data.strAffiliationName);
          $('input[name=txtaffpos]').val(data.strAffiliationPosition);
          $('input[name=txtaffaddress]').val(data.strAffiliationAddress);
        },
        error: function(){
          alert('Could not show Data');
        }

    });

  };

    $(document).ready(function(){

    //show
    showProfile();


 $('#btnSaveProfile').click(function(){
      var data = $('#myprofileForm').serialize();
        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>user/updateProfile',
          data: data,
          async: false,
          dataType: 'json',
          success: function(response){
            if(response.success){
              if(response.type=='add'){
                var type = 'added'
              }else if(response.type=='update'){
                var type ="updated"
              }
              showAllPhylum();
            }else{
              alert('Error');
            }
          },
          error: function(){
            alert('Could not update data');
          }
        });
    });
 });


</script>
<script type="text/javascript">

// function showPassword()
// {
//       $.ajax({
//         type: 'ajax',
//         url: '<?php echo base_url() ?>user/showPassword',
//         async: false,
//         dataType: 'json',
//         success: function(data){
//           $('input[name=txtCurPw]').val(data.strPassword);


//         },
//         error: function(){
//           alert('Could not show Data');
//         }

//     });

//   };

//     $(document).ready(function(){

//     //show
//     showPassword();

//   });


$('#btnSavePassword').click(function(){
      var data = $('#myPasswordForm').serialize();

var newpw = document.getElementById("strNewPw").value;
var verpw = document.getElementById("strVerPw").value;

     if (newpw === verpw) {
         $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>user/updatePassword',
          data: data,
          async: false,
          dataType: 'json',
          success: function(response){
            if(response.success){
              if(response.type=='add'){
                var type = 'added'
              }else if(response.type=='update'){
                var type ="updated"
              }
              showAllPhylum();
            }else{
              alert('Error');
            }
          },
          error: function(){
            alert('Could not update data');
          }
        });
      }else{

        alert('di pareho new at verify')
}

    });



</script>
