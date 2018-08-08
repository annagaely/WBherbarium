
        <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/Dashboard" >Home</a></li>
            <li class="breadcrumb-item">Maintenance</li>

            <li class="breadcrumb-item active">Collector </li>
          </ul>
        </div>
      </div>
<!--ADD Collector MODAL asdadsasd -->
      <div class="card">
        <div class="card-header d-flex align-items-center">
          <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add Collector</button>
        </div>       
        <!-- Modal-->
        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Add Collector</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                
                <form id= "addCollectorForm" method="POST" enctype="multipart/form-data"><!--dito ka magbabago sa loob nito-->
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <label>First Name:</label>
                      <input type="text" name="fName" placeholder="First Name " class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <label>Middle Name:</label>
                      <input type="text" name="mName" placeholder="Middle Name" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                      <label>Middle Initial:</label>
                      <input type="text" name="mInitial" placeholder="Middle Initial" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <label>Last Name:</label>
                      <input type="text" name="lName" placeholder="Last Name" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                      <label>Name Suffix:</label>
                      <input type="text" name="nSuffix" placeholder="Name Suffix" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-sm-6">
                    <label>Contact Number:</label>
                    <input type="text" name="cName" placeholder="Contact Number" class="form-control">
                  </div>
                  <div class="form-group col-sm-6">
                    <label>Email Address:</label>
                    <input type="text" name="eMail" placeholder="Email Address" class="form-control">
                  </div>
                </div>
                  <div class="row">
                  <div class="form-group col-sm-6">
                    <label>College Department:</label>
                    <select name="cdName" class="form-control">
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
                  </div>
                  <div class="form-group col-sm-6">
                    <label>Course/Year/Section:</label>
                    <input type="text" name="secName" placeholder="Course/Year/Section" class="form-control">
                  </div>
                  <!--HANGGANG DITO LANG BOI-->
                  <div class="modal-footer">
                    <input type="reset" value="Clear" class="btn btn-primary">       
                    <input type="submit" id="btnSave" value="Save" class="btn btn-primary">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--END PHYLUM MODAL-->
      <!-- update collector modal -->
          <div id="myEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Add Collector</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                
                <form id= "editCollectorForm" method="POST" enctype="multipart/form-data"><!--dito ka magbabago sa loob nito-->
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <label>First Name:</label>
                      <input type="text" name="feName" placeholder="First Name " class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <label>Middle Name:</label>
                      <input type="text" name="meName" placeholder="Middle Name" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                      <label>Middle Initial:</label>
                      <input type="text" name="meInitial" placeholder="Middle Initial" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <label>Last Name:</label>
                      <input type="text" name="leName" placeholder="Last Name" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                      <label>Name Suffix:</label>
                      <input type="text" name="neSuffix" placeholder="Name Suffix" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-sm-6">
                    <label>Contact Number:</label>
                    <input type="text" name="ceName" placeholder="Contact Number" class="form-control">
                  </div>
                  <div class="form-group col-sm-6">
                    <label>Email Address:</label>
                    <input type="text" name="eeMail" placeholder="Email Address" class="form-control">
                  </div>
                </div>
                  <div class="row">
                  <div class="form-group col-sm-6">
                    <label>College Department:</label>
                    <select name="cdName" class="form-control">
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
                  </div>
                  <div class="form-group col-sm-6">
                    <label>Course/Year/Section:</label>
                    <input type="text" name="seceName" placeholder="Course/Year/Section" class="form-control">
                  </div>
                  <!--HANGGANG DITO LANG BOI-->
                  <div class="modal-footer">
                    <input type="reset" value="Clear" class="btn btn-primary">       
                    <input type="submit" id="editbtnSave" value="Save" class="btn btn-primary">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      <!-- update collector modal -->

      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>CollectorID</th>
                  <th>First Name</th>
                  <th>Middle Initial</th>
                  <th>Last Name</th>
                  <th>Institution/Section</th>
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
    showAllCollector();
    

    function showAllCollector(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showAllCollector',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].intCollectorID+'</td>'+
                  '<td>'+data[i].strFirstName+'</td>'+
                  '<td>'+data[i].strMiddleInitial+'</td>'+
                  '<td>'+data[i].strLastName+'</td>'+
                  '<td>'+data[i].strSection+'</td>'+

                  '<td>'+
                    '<a href="javascript:;" class="btn btn-primary collector-edit" data="'+data[i].intCollectorID+'">Edit</a>'+
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
    $('#btnSave').click(function(){
      var data = $('#addCollectorForm').serialize();
      //validate form

        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/addCollector',
          data: data,
          async: false,
          dataType: 'json',
          success: function($response){
            if(response.success){
              $('#addCollectorForm').modal('hide');
              $('#addCollectorForm')[0].reset();
              if(response.type=='add'){
                var type = 'added'
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

$('#btnEditSave').click(function(){
      var data = $('#editCollectorForm').serialize();
        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/updateCollector',
          data: data,
          async: false,
          dataType: 'json',
          success: function(response){
            if(response.success){
              $('#editCollectorForm').modal('hide');
              $('#editCollectorForm')[0].reset();
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
    //edit class
    $('#showdata').on('click', '.collector-edit', function(){
      var id = $(this).attr('data');
      $('#myEditModal').modal('show');
      $('#myEditModal').find('.modal-title').text('Edit Collector');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editSpecies',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=feName]').val(data.strFirstname);
          $('input[name=meName]').val(data.strMiddlename);
          $('input[name=meInitial]').val(data.strMiddleInitial);
          $('input[name=leName]').val(data.strLastname);
          $('input[name=neSuffix]').val(data.strNameSuffix);
          $('input[name=ceName]').val(data.strContactNumber);
          $('input[name=eeMail]').val(data.strEmailAddress);
          $('input[name=cdeName]').val(data.strCollege);
          $('input[name=seceName]').val(data.strSection);
          $('input[name=Id]').val(data.intCollectorID);
          
        },
        error: function(){
          alert('Could not Edit Data');
        }
      
    });

  });
    });
</script>