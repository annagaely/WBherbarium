<script src="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.min.css">

<div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/Dashboard" >Home</a></li>
            <li class="breadcrumb-item">Maintenance</li>
            <li class="breadcrumb-item active">Add Plant Borrower</li>
          </ul>
        </div>
      </div>

      <!--ADD PHYLUM MODAL HAHAHAHAHAHA-->
<div class="card">
        <div class="card-header d-flex align-items-center" >
          <button type="button" id="btnAdd " data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add Plant Borrower</button>
        </div>

        <!-- Modal-->
  <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
    <div role="document" class="modal-dialog">
      <div class="modal-content">
            <div class="modal-header">

                <h5 id="exampleModalLabel" class="modal-title"> Add Plant Borrower</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()"><span aria-hidden="true">&times;</span></button>
            </div>
        <div class="modal-body">

            <form id= "addPlantBorrowerForm" method="POST" enctype="multipart/form-data">
                  <!-- <input type="hidden" name="act" id="act" value=""> -->

                  <div class="form-group">
                  <label>First Name:</label> <label style="color: red">*</label>
                  <input type="text" id="strFirstname" name="PBFName" placeholder="First Name " class="form-control">
                </div>
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <label>Middle Name:</label>
                      <input type="text" name="PBMName" id="strMiddlename" placeholder="Middle Name" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                      <label>Middle Initial:</label>
                      <input type="text" id="strMiddleInitial" name="PBMInitial" placeholder="Middle Initial" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <label>Last Name:</label> <label style="color: red">*</label>
                      <input type="text" id="strLastname" name="PBLName" placeholder="Last Name" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                      <label>Name Suffix:</label>
                      <input type="text" id="strNameSuffix" name="PBNSuffix" placeholder="Name Suffix" class="form-control">
                    </div>
                  </div>
                <div class="form-group">
                  <label>Home Address:</label> <label style="color: red">*</label>
                    <input type="text" name="PBHAddress" id="strHomeAddress" placeholder="Home Address" class="form-control">
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <label>Contact Number:</label> <label style="color: red">*</label>
                    <input  data-mask="9999 999 9999" type="text" name= "PBCNumber" id="strConactNumber" placeholder="Contact Number" class="form-control">
                  </div>
                <div class="col-sm-6">
                    <label>Email Address:</label> <label style="color: red">*</label>
                    <input type="text" name= "PBEAddress" id="strEmailAddress" placeholder="emailaddress@example.com" class="form-control">
                </div>
                </div>
                <div class="form-group">
                  <label>Affliation:</label> <label style="color: red">*</label>
                    <input type="text" name="PBAffiliation" id="strAffiliation" placeholder="Affliation" class="form-control">
                </div>
                  <div class="modal-footer">
                    <input type="reset" value="Clear" class="btn btn-secondary">
                    <input type="submit" value="Save" id='btnSave' class="btn btn-primary">
                  </div>

            </form>
        </div>
      </div>
    </div>
  </div>
</div>
      <!--END PHYLUM MODAL-->
        <!--ADD EDIT PHYLUM MODAL-->

        <!-- Modal-->
        <div id="myEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">

                <h5 id="exampleModalLabel" class="modal-title">Edit Plant Borrower</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">

                <form id= "editPlantBorrowerForm" method="POST" enctype="multipart/form-data">
                  <!-- <input type="hidden" name="act" id="act" value=""> -->

                  <div class="form-group">
                   <input type="hidden" name="txtId" value="0">
                  <label>First Name:</label> <label style="color: red">*</label>
                  <input type="text" id="strFirstname" name="PBFName" placeholder="First Name " class="form-control">
                </div>
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <label>Middle Name:</label>
                      <input type="text" name="PBMName" id="strMiddlename" placeholder="Middle Name" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                      <label>Middle Initial:</label>
                      <input type="text" id="strMiddleInitial" name="PBMInitial" placeholder="Middle Initial" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <label>Last Name:</label> <label style="color: red">*</label>
                      <input type="text" id="strLastname" name="PBLName" placeholder="Last Name" class="form-control">
                    </div>
                    <div class="form-group col-sm-4">
                      <label>Name Suffix:</label>
                      <input type="text" id="strNameSuffix" name="PBNSuffix" placeholder="Name Suffix" class="form-control">
                    </div>
                  </div>
                <div class="form-group">
                  <label>Home Address:</label> <label style="color: red">*</label>
                    <input type="text" name="PBHAddress" id="strHomeAddress" placeholder="Home Address" class="form-control">
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <label>Contact Number:</label> <label style="color: red">*</label>
                    <input  data-mask="9999 999 9999" type="text" name= "PBCNumber" id="strContactNumber" placeholder="Contact Number" class="form-control">
                  </div>
                <div class="col-sm-6">
                    <label>Email Address:</label> <label style="color: red">*</label>
                    <input type="text" name= "PBEAddress" id="strEmailAddress" placeholder="emailaddress@example.com" class="form-control">
                </div>
                </div>
                <div class="form-group">
                  <label>Affliation:</label> <label style="color: red">*</label>
                    <input type="text" name="PBAffiliation" id="strAffiliation" placeholder="Affliation" class="form-control">
                </div>
                  <div class="modal-footer">
                    <input type="reset" value="Clear" class="btn btn-secondary">
                    <input type="submit" value="Save" id='btnEditSave' class="btn btn-primary">
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      <!--END PHYLUM MODAL-->
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table dataTable no-footer" id="managePlantBorrowertbl">
              <thead>
                <tr>
                  <!-- <th scope="col" width= "10%">Phylum ID</th> -->
                  <th scope="col" width= "10%">Last Name</th>
                  <th scope="col" width= "10%">First Name</th>
                  <th scope="col" width= "10%">Institution</th>
                  <th scope="col" width= "10%">Actions</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>



      </main>
      <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
      <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/popper.js/umd/popper.min.js"> </script>

      <!--Table-->
      <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/dataTables.bootstrap4.min.js"></script>
      <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.dataTables.min.js"></script>

<script>
function resetForm() {
    document.getElementById("addPlantBorrowerForm").reset();
}

</script>

<script type="text/javascript">

    function showAllPlantBorrower()
        {
          $('#managePlantBorrowertbl').dataTable().fnClearTable();
          $('#managePlantBorrowertbl').dataTable().fnDraw();
          $('#managePlantBorrowertbl').dataTable().fnDestroy();
          $('#managePlantBorrowertbl').dataTable({
            "autoWidth":false,
              "processing": true,
              "serverSide": false,
              "sAjaxSource": "<?php echo base_url('admin/showAllPlantBorrower')?>",
              "deferLoading": 10,
              "bPaginate": true,
              "aaSorting": [[0,'asc']],
              "fnInitComplete": function(){
              }
          });
        }

    $(document).ready(function(){

    //show
    showAllPlantBorrower();

$('#btnSave').click(function(){
      
      var data = $('#addPlantBorrowerForm').serialize();

        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/addPlantBorrower',
          data: data,
          async: false,
          dataType: 'json',
          success: function(response){
            if(response.success){
              $('#addPlantBorrowerForm').modal('hide');
              $('#addPlantBorrowerForm')[0].reset();
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
            alert('Could not save Data');
          }
        });

    });

$(document).on('click', '.borrower-edit', function(){
      var id = $(this).attr('data');
      $('#myEditModal').modal('show');
      $('#myEditModal').find('.modal-title').text('Edit Plant Borrower');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editPlantBorrower',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=PBFName]').val(data.strFirstname);
          $('input[name=PBMName]').val(data.strMiddlename);
          $('input[name=PBMInitial]').val(data.strMiddleInitial);
          $('input[name=PBLName]').val(data.strLastname);
          $('input[name=PBNSuffix]').val(data.strNameSuffix);
          $('input[name=PBHAddress]').val(data.strHomeAddress);
          $('input[name=PBCNumber]').val(data.strContactNumber);
          $('input[name=PBEAddress]').val(data.strEmailAddress);
          $('input[name=PBAffiliation]').val(data.strAffiliation);
          $('input[name=txtId]').val(data.intBorrowerID)
        },
        error: function(){
          alert('Could not Edit Data');
        }
      
    });

  });

$('#btnEditSave').click(function(){
      var data = $('#editPlantBorrowerForm').serialize();
        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/updatePlantBorrower',
          data: data,
          async: false,
          dataType: 'json',
          success: function(response){
            if(response.success){
              $('#editPlantBorrowerForm').modal('hide');
              $('#editPlantBorrowerForm')[0].reset();
              if(response.type=='add'){
                var type = 'added'
              }else if(response.type=='update'){
                var type ="updated"
              }
              showAllPlantBorrower();
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