
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
                <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                
                <form id= "addCollectorForm" method="POST" enctype="multipart/form-data"><!--dito ka magbabago sa loob nito-->
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <label>First Name:</label> <label style="color: red">*</label>
                      <input type="text" name="fName" id="strFirstname" placeholder="First Name " class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <label>Middle Name:</label> 
                      <input type="text" name="mName"  id="strMiddlename" placeholder="Middle Name" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                      <label>Middle Initial:</label>
                      <input type="text" name="mInitial"  id="strMiddleInitial" placeholder="Middle Initial" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <label>Last Name:</label> <label style="color: red">*</label>
                      <input type="text" name="lName"  id="strLastname" placeholder="Last Name" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                      <label>Name Suffix:</label>
                      <input type="text" name="nSuffix"  id="strNameSuffix" placeholder="Name Suffix" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-sm-6">
                    <label>Contact Number:</label> <label style="color: red">*</label>
                    <input type="text" name="cName" placeholder="Contact Number" class="form-control">
                  </div>
                  <div class="form-group col-sm-6">
                    <label>Email Address:</label> <label style="color: red">*</label>
                    <input type="text" name="eMail" placeholder="Email Address" class="form-control">
                  </div>
                </div>
                  <div class="row">
                    <div class="form-group col-sm-12">
                    <label>Home Address:</label> <label style="color: red">*</label>
                    <input type='text' name="cdName" id="strCollege" placeholder="Home Address" class="form-control">
                  </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-sm-12">
                    <label>Affiliation:</label> <label style="color: red">*</label>
                    <input type="text" name="secName" placeholder="Affiliation" class="form-control">
                  </div>
                </div>
                  <!--HANGGANG DITO LANG BOI-->
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
      <!--END PHYLUM MODAL-->
      <!-- update collector modal -->
          <div id="myEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Add Collector</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                
                <form id= "editCollectorForm" method="POST" enctype="multipart/form-data"><!--dito ka magbabago sa loob nito-->
                  <div class="row">
                    <div class="form-group col-sm-8">
                       <input type="hidden" name="txtId" value="0">
                      <label>First Name:</label> <label style="color: red">*</label>
                      <input type="text" name="feName" placeholder="First Name " class="form-control" >
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <label>Middle Name:</label> 
                      <input type="text" name="meName" placeholder="Middle Name" class="form-control" >
                    </div>
                    <div class="form-group col-sm-4">
                      <label>Middle Initial:</label>
                      <input type="text" name="meInitial" placeholder="Middle Initial" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <label>Last Name:</label> <label style="color: red">*</label>
                      <input type="text" name="leName" placeholder="Last Name" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                      <label>Name Suffix:</label> <label style="color: red">*</label>
                      <input type="text" name="neSuffix" placeholder="Name Suffix" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-sm-6">
                    <label>Contact Number:</label> <label style="color: red">*</label>
                    <input type="text" name="ceName" placeholder="Contact Number" class="form-control">
                  </div>
                  <div class="form-group col-sm-6">
                    <label>Email Address:</label> <label style="color: red">*</label>
                    <input type="text" name="eeMail" placeholder="Email Address" class="form-control">
                  </div>
                </div>
                  <div class="row">
                    <div class="form-group col-sm-12">
                    <label>Home Address:</label> <label style="color: red">*</label>
                    <input type='text' name="cedName" id="strCollege" placeholder="Home Address" class="form-control">
                  </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-sm-12">
                    <label>Affiliation:</label> <label style="color: red">*</label>
                    <input type="text" name="esecName" placeholder="Affiliation" class="form-control">
                  </div>
                </div>
                  <!--HANGGANG DITO LANG BOI-->
                  <div class="modal-footer">
                    <input type="reset" value="Clear" class="btn btn-secondary">       
                    <input type="submit" id="btnEditSave" value="Save" class="btn btn-primary">
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
              <table class="table dataTable no-footer" id="manageCollectortbl">
              <thead>
                <tr>
                   <th scope="col" width= "10%">CollectorID</th>
                   <th scope="col" width= "10%">Full Name</th>
                   <th scope="col" width= "10%">Institution/Section</th>
                   <th scope="col" width= "10%">Actions</th>
                </tr>
              </thead>
<!--               <tbody tbody id="showdata"> 
            </tbody> -->
            </table>
        </div>
      </div>
    </div>

 </main>
      <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
      <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/popper.js/umd/popper.min.js"> </script>

      <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/bootstrap/js/bootstrap.min.js"></script>
      <!--Table-->
      <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/dataTables.bootstrap4.min.js"></script>
      <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.dataTables.min.js"></script>

<script>
function resetForm() {
    document.getElementById("addCollectorForm").reset();

}
</script>

<script type="text/javascript"> 

    function showAllCollector()
    {
      $('#manageCollectortbl').dataTable().fnClearTable();
      $('#manageCollectortbl').dataTable().fnDraw();
      $('#manageCollectortbl').dataTable().fnDestroy();
       $('#manageCollectortbl').dataTable({
         "processing": true,
         "serverSide": false,
         "sAjaxSource": "<?php echo base_url('admin/showAllCollector')?>",
         "deferLoading": 10,
         "bPaginate": true,
         "aaSorting": [[0,'asc']],
         "fnInitComplete": function(){
                   
         }
     });
   }


$(document).ready(function() {
      //show
    }
    showAllCollector();

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
                alert('New Collector Successfully Added!');
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
            if(response==true){
              $('#myEditModal').modal('hide');
              $('#editCollectorForm')[0].reset();
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
    //edit class
    $('#showdata').on('click', '.collector-edit', function(){
      var id = $(this).attr('data');
      $('#myEditModal').modal('show');
      $('#myEditModal').find('.modal-title').text('Edit Collector');

      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editCollector',
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
          $('input[name=cdName]').val(data.strHomeAddress);
          $('input[name=secName]').val(data.strAffiliation);
          $('input[name=txtId]').val(data.intCollectorID);
          
        },
        error: function(){
          alert('Could not Edit Data');
        }
      
    });

  });
    });
</script>