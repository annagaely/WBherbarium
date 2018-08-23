
        <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Maintenance/Dashboard" >Home</a></li>
            <li class="breadcrumb-item">Maintenance</li>
            <li class="breadcrumb-item active">External Validator</li>
          </ul>
        </div>
      </div>
<!--ADD EV MODAL-->
      <div class="card">
        <div class="card-header d-flex align-items-center">
          <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add External Validator</button>
        </div>         
        <!-- Modal-->
        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Add External Validator</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
              <form id= "addValidatorForm" method="POST" enctype="multipart/form-data"><!--dito ka magbabago sa loob nito-->
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <label>First Name:</label> <label style="color: red">*</label>
                      <input type="text" name="txtFName" placeholder="First Name " class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <label>Middle Name:</label>
                      <input type="text" name="txtMName" placeholder="Middle Name" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                      <label>Middle Initial:</label>
                      <input type="text" name="txtMInitial" placeholder="Middle Initial" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <label>Last Name:</label> <label style="color: red">*</label>
                      <input type="text" name="txtLName" placeholder="Last Name" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                      <label>Name Suffix:</label> <label style="color: red">*</label>
                      <input type="text" name="txtNSuffix" placeholder="Name Suffix" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-sm-6">
                    <label>Contact Number:</label> <label style="color: red">*</label>
                    <input type="text" name="txtCNumber" placeholder="Contact Number" class="form-control">
                  </div>
                  <div class="form-group col-sm-6">
                    <label>Email Address:</label> <label style="color: red">*</label>
                    <input type="text" name="txtEMail" placeholder="Email Address" class="form-control">
                  </div>
                </div>
                  <div class="form-group">
                    <label>Institution:</label> <label style="color: red">*</label>
                    <input type="text" name="txtInstitution" placeholder="Institution" class="form-control">
                  </div><!--HANGGANG DITO LANG BOI-->
                  <div class="modal-footer">
                    <input type="reset" value="Clear" class="btn btn-secondary">       
                    <input type="submit" value="Save" id="btnSave" class="btn btn-primary">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--END PHYLUM MODAL-->
       <!--START EDIT MODAL-->
      <div id="myEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Add External Validator</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
              <form id= "EditValidatorForm" method="POST" enctype="multipart/form-data"><!--dito ka magbabago sa loob nito-->
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <input type="hidden" name="txtId" value="0">
                      <label>First Name:</label> <label style="color: red">*</label>
                      <input type="text" name="txteFName" placeholder="First Name " class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <label>Middle Name:</label>
                      <input type="text" name="txteMName" placeholder="Middle Name" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                      <label>Middle Initial:</label>
                      <input type="text" name="txteMInitial" placeholder="Middle Initial" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <label>Last Name:</label> <label style="color: red">*</label>
                      <input type="text" name="txteLName" placeholder="Last Name" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                      <label>Name Suffix:</label> <label style="color: red">*</label>
                      <input type="text" name="txteNSuffix" placeholder="Name Suffix" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-sm-6">
                    <label>Contact Number:</label> <label style="color: red">*</label>
                    <input type="text" name="txteCNumber" placeholder="Contact Number" class="form-control">
                  </div>
                  <div class="form-group col-sm-6">
                    <label>Email Address:</label> <label style="color: red">*</label>
                    <input type="text" name="txteEMail" placeholder="Email Address" class="form-control">
                  </div>
                </div>
                  <div class="form-group">
                    <label>Institution:</label> <label style="color: red">*</label>
                    <input type="text" name="txteInstitution" placeholder="Institution" class="form-control">
                  </div><!--HANGGANG DITO LANG BOI-->
                  <div class="modal-footer">
                    <input type="reset" value="Clear" class="btn btn-secondary">       
                    <input type="submit" value="Save" id="btnEditSave" class="btn btn-primary">
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
                  <th>Validator ID</th>
                  <th>Validator Name</th>
                  <th>Institution</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody tbody id="showdata">
                        
            </tbody>
            </table>
        </div>
      </div>
    </div>
 <!--EDIT EDIT MODAL-->
<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">  
    $(function(){
    
      //show
    showAllFamilyBoxes();
    

    function showAllFamilyBoxes(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showAllValidator',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].intValidatorID+'</td>'+
                  '<td>'+data[i].strFullName+'</td>'+
                  '<td>'+data[i].strInstitution+'</td>'+
                  '<td>'+
                    '<a href="javascript:;" class="btn btn-primary validator-edit" data="'+data[i].intValidatorID+'">Edit</a>'+
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
    //////////// add validator
    $('#btnSave').click(function(){
      var data = $('#addValidatorForm').serialize();
      //validate form

        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/addValidator',
          data: data,
          async: false,
          dataType: 'json',
          success: function($response){
            if(response.success){
              $('#addValidatorForm').modal('hide');
              $('#addValidatorForm')[0].reset();
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
    ////// edit validator
    $('#showdata').on('click', '.validator-edit', function(){
      var id = $(this).attr('data');
      $('#myEditModal').modal('show');
      $('#myEditModal').find('.modal-title').text('Edit Validator');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editValidator',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txteFName]').val(data.strFirstname);
          $('input[name=txteMName]').val(data.strMiddlename);
          $('input[name=txteMInitial]').val(data.strMiddleInitial);
          $('input[name=txteLName]').val(data.strLastname);
          $('input[name=txteNSuffix]').val(data.strNameSuffix);
          $('input[name=txteCNumber]').val(data.strContactNumber);
          $('input[name=txteEMail]').val(data.strEmailAddress);
          $('input[name=txteInstitution]').val(data.strInstitution);
          $('input[name=txtId]').val(data.intValidatorID);
          
        },
        error: function(){
          alert('Could not Edit Data');
        }
      
    });

  });

    $('#btnEditSave').click(function(){
      var data = $('#EditValidatorForm').serialize();
        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/updateValidator',
          data: data,
          async: false,
          dataType: 'json',
          success: function(response){
            if(response==true){
              $('#myEditModal').modal('hide');
              $('#EditValidatorForm')[0].reset();
              showAllValidator();
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