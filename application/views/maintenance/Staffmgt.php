
        <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Maintenance/Dashboard" >Home</a></li>
            <li class="breadcrumb-item">Maintenance</li>
            <li class="breadcrumb-item active">Staff Management </li>
          </ul>
        </div>
      </div>

      <!--ADD STAFFMGT-->
      <div class="card">
        <div class="card-header d-flex align-items-center">
          <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add Staff</button>
        </div>  

        <!-- Modal-->
        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Add Staff</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
        
         <div class="modal-body">

                <form id= "addStaffForm" method="POST" enctype="multipart/form-data">
                  <div class="row">

                    <div class="col-sm-6">
                    <label>Role:</label> <label style="color: red">*</label>
                    <select name="txtStaffRole" class="form-control">
                      <option id="SA" value= "Super Administrator"> Super Administrator</option>
                      <option id="CR" value= "Curator"> Curator</option>
                      <option id="StA" value= "Student Assistant"> Student Assistant</option>
                    </select>
                  </div>
                  </div>
                 <label>First Name:</label> <label style="color: red">*</label>
                      <input type="text" name="SMgtFName" placeholder="First Name " class="form-control">
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <label>Middle Name:</label>
                      <input type="text" name="SMgtMName" placeholder="Middle Name" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                      <label>Middle Initial:</label>
                      <input type="text" name="mInitial" placeholder="Middle Initial" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <label>Last Name:</label> <label style="color: red">*</label>
                      <input type="text" name="SMgtLName" placeholder="Last Name" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                      <label>Name Suffix:</label> <label style="color: red">*</label>
                      <input type="text" name="txtNSuffix" placeholder="Name Suffix" class="form-control">
                    </div>
                  </div>

                  <div class="row">
                  <div class="col-sm-6">
                    <label>Contact Number:</label> <label style="color: red">*</label>
                    <input type="text" name= "SMgtCNumber" placeholder="Contact Number" class="form-control">
                  </div>

                     <div class="col-sm-6">
                    <label>Email Address:</label> <label style="color: red">*</label>
                    <input type="text" name= "SMgtEAdd"placeholder="emailaddress@example.com" class="form-control">
                  </div>
                </div>

                  <div class="row">
                    <div class="col-sm-6">
                    <label>College Department:</label> <label style="color: red">*</label>
                    <select name = "sCollege" class="form-control">
                      <option value= "College of Accountancy and Finance"> College of Accountancy and Finance</option>
                      <option value= "College of Architecture and Fine Arts"> College of Architecture and Fine Arts</option>
                      <option value= "College of Arts and Letters"> College of Arts and Letters</option>
                      <option value= "College of Business Administration"> College of Business Administration</option>
                      <option value= "College of Communication">College of Communication</option>
                      <option value= "College of Computer and Information Sciences"> College of Computer and Information Sciences </option>
                      <option value= "College of Education"> College of Education</option>
                      <option value= "College of Engineering">College of Engineering</option>
                      <option value= "College of Human Kinetics"> College of Human Kinetics</option>
                      <option value= "College of Law"> College of Law</option>
                      <option value= "College of Public Administration"> College of Public Administration</option>
                      <option value= "College of Science"> College of Science</option>
                      <option value= "College of Social Sciences and Development"> College of Social Sciences and Development</option>
                      <option value= "College of Tourism, Hospitality and Transportation Management"> College of Tourism, Hospitality and Transportation Management</option>
                      <option value= "Institute of Technology"> Institute of Technology</option>
                      <option value= "Laboratory High School"> Laboratory High School</option>
                      <option value= "Senior High School"> Senior High School</option>
                      <option value= "Graduate School">Graduate School</option>
                    </select>
                  </div>

                    <div class="col-sm-6">
                    <label>Course/Year/Section:</label> <label style="color: red">*</label>
                    <input type="text" name= "SMgtCYS" placeholder="Course/Year/Section" class="form-control">
                  </div>
                </div>
                <br>


                  <div class="modal-footer">
                    <input type="reset" value="Clear" class="btn btn-secondary">       
                    <input type="submit" id="btnSave" value="Save" class="btn btn-primary">

                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--END ACCESS ACCOUNT MODAL--> 
      <!--EDIT ACCESS ACCOUNT MODAL--> 
      <div id="myEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Add Staff</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
        
         <div class="modal-body">

                <form id= "editStaffForm" method="POST" enctype="multipart/form-data">
                  <div class="row">

                    <div class="col-sm-6">
                    <label>Role:</label>
                    <select name="esRole" class="form-control">
                      <option value= "Super Administrator"> Super Administrator</option>
                      <option value= "Curator"> Curator</option>
                      <option value= "Student Assistant"> Student Assistant</option>
                    </select>
                  </div>
                  </div>
                 <label>First Name:</label> <label style="color: red">*</label>
                      <input type="text" name="eSMgtFName" placeholder="First Name " class="form-control">
                      <input type="hidden" name="txtId" value="0">
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <label>Middle Name:</label> 
                      <input type="text" name="eSMgtMName" placeholder="Middle Name" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                      <label>Middle Initial:</label>
                      <input type="text" name="emInitial" placeholder="Middle Initial" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <label>Last Name:</label> <label style="color: red">*</label>
                      <input type="text" name="eSMgtLName" placeholder="Last Name" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                      <label>Name Suffix:</label> <label style="color: red">*</label>
                      <input type="text" name="etxtNSuffix" placeholder="Name Suffix" class="form-control">
                    </div>
                  </div>

                  <div class="row">
                  <div class="col-sm-6">
                    <label>Contact Number:</label> <label style="color: red">*</label>
                    <input type="text" name= "eSMgtCNumber" placeholder="Contact Number" class="form-control">
                  </div>

                     <div class="col-sm-6"> <label style="color: red">*</label>
                    <label>Email Address:</label>
                    <input type="text" name= "eSMgtEAdd"placeholder="emailaddress@example.com" class="form-control">
                  </div>
                </div>

                  <div class="row">
                    <div class="col-sm-6">
                    <label>College Department:</label> <label style="color: red">*</label>
                    <select name = "esCollege" class="form-control">
                      <option value= "College of Accountancy and Finance"> College of Accountancy and Finance</option>
                      <option value= "College of Architecture and Fine Arts"> College of Architecture and Fine Arts</option>
                      <option value= "College of Arts and Letters"> College of Arts and Letters</option>
                      <option value= "College of Business Administration"> College of Business Administration</option>
                      <option value= "College of Communication">College of Communication</option>
                      <option value= "College of Computer and Information Sciences"> College of Computer and Information Sciences </option>
                      <option value= "College of Education"> College of Education</option>
                      <option value= "College of Engineering">College of Engineering</option>
                      <option value= "College of Human Kinetics"> College of Human Kinetics</option>
                      <option value= "College of Law"> College of Law</option>
                      <option value= "College of Public Administration"> College of Public Administration</option>
                      <option value= "College of Science"> College of Science</option>
                      <option value= "College of Social Sciences and Development"> College of Social Sciences and Development</option>
                      <option value= "College of Tourism, Hospitality and Transportation Management"> College of Tourism, Hospitality and Transportation Management</option>
                      <option value= "Institute of Technology"> Institute of Technology</option>
                      <option value= "Laboratory High School"> Laboratory High School</option>
                      <option value= "Senior High School"> Senior High School</option>
                      <option value= "Graduate School">Graduate School</option>
                    </select>
                  </div>

                    <div class="col-sm-6">
                    <label>Course/Year/Section:</label>
                    <input type="text" name= "eSMgtCYS" placeholder="Course/Year/Section" class="form-control">
                  </div>
                </div>
                <br>


                  <div class="modal-footer">
                    <input type="reset" value="Clear" class="btn btn-secondary">       
                    <input type="submit" id="btnEditSave" value="Save" class="btn btn-primary">

                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>        
      
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Staff ID</th>
                  <th>Staff Name</th>
                  <th>Role</th>
                  <th>College</th>
                  <th>Position</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody tbody id="showdata">
                        
            </tbody>
            </table>
        </div>
      </div>
    </div>

<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">  
    $(function(){
    
      //show
    showAllStaff();
    

    function showAllStaff(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showAllStaff',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].intStaffID+'</td>'+
                  '<td>'+data[i].strFullName+'</td>'+
                  '<td>'+data[i].strRole+'</td>'+
                  '<td>'+data[i].strCollegeDepartment+'</td>'+
                  '<td>'+data[i].strPosition+'</td>'+
                  '<td>'+
                    '<a href="javascript:;" class="btn btn-primary staff-edit" data="'+data[i].intStaffID+'">Edit</a>'+
                  '</td>'+
                  '</tr>';
          }
          $('#showdata').html(html);
        },
        error: function(){
          alert('Could not get Data from Database');
        }
      });
    }


    ///////adding//////
$('#btnSave').click(function(){
      var data = $('#addStaffForm').serialize();
      //validate form

        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/addStaff',
          data: data,
          async: false,
          dataType: 'json',
          success: function($response){
            if(response.success){
              $('#addStaffForm').modal('hide');
              $('#addStaffForm')[0].reset();
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

    $('#showdata').on('click', '.staff-edit', function(){
      var id = $(this).attr('data');
      $('#myEditModal').modal('show');
      $('#myEditModal').find('.modal-title').text('Edit Collector');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editStaff',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=eSMgtFName]').val(data.strFirstname);
          $('input[name=eSMgtMName]').val(data.strMiddlename);
          $('input[name=emInitial]').val(data.strMiddleInitial);
          $('input[name=eSMgtLName]').val(data.strLastname);
          $('input[name=etxtNSuffix]').val(data.strNameSuffix);
          $('input[name=eSMgtCNumber]').val(data.strContactNumber);
          $('input[name=eSMgtEAdd]').val(data.strEmailAddress);
          $('input[name=esCollege]').val(data.strCollegeDepartment);
          $('input[name=eSMgtCYS]').val(data.strPosition);
          $('input[name=txtId]').val(data.intStaffID);
          
        },
        error: function(){
          alert('Could not Edit Data');
        }
      
    });

  });

$('#btnEditSave').click(function(){
      var data = $('#editStaffForm').serialize();
        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/updateStaff',
          data: data,
          async: false,
          dataType: 'json',
          success: function(response){
            if(response==true){
              $('#myEditModal').modal('hide');
              $('#editStaffForm')[0].reset();
         //     if(response.type=='add'){
           //     var type = 'added'
       //       }else if(response.type=='update'){
          //      var type ="updated"
              //}
              showAllCollector();
            }
            else{
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