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
            <li class="breadcrumb-item active">Add Plant Type</li>
          </ul>
        </div>
      </div>

      <!--ADD PHYLUM MODAL HAHAHAHAHAHA-->
     <div class="card">
        <div class="card-header d-flex align-items-center" >
          <button type="button" id="btnAdd " data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add Plant Type</button>
        </div>

        <!-- Modal-->
        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">

                <h5 id="exampleModalLabel" class="modal-title">Add Plant Type</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">

                <form id= "addPlantTypeForm" method="POST" enctype="multipart/form-data">
                  <!-- <input type="hidden" name="act" id="act" value=""> -->

                  <div class="form-group">
                    <label>Plant Code:</label> <label style="color: red">*</label>
                    <input type="text" name="txtPlantCode" id="strPlantCode" placeholder="Plant Code" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Plant Type:</label> <label style="color: red">*</label>
                    <input type="text" name="txtPlantType" id="strPlantType" placeholder="Plant Type" class="form-control" >
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

                <h5 id="exampleModalLabel" class="modal-title">Edit Species Alternate Name</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">

                <form id= "editPlantTypeForm" method="POST" enctype="multipart/form-data">
                  <!-- <input type="hidden" name="act" id="act" value=""> -->

                <div class="form-group">
                  <input type="hidden" name="txtId" value="0">
                    <label>Plant Code:</label> <label style="color: red">*</label>
                    <input type="text" name="txtePlantCode" id="strPlantCode1" placeholder="Plant Code" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Plant Type:</label> <label style="color: red">*</label>
                    <input type="text" name="txtePlantType" id="strPlantType1" placeholder="Palnt Type" class="form-control" >
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
            <table class="table dataTable no-footer" id="managePlantTypetbl">
              <thead>
                <tr>
                  <!-- <th scope="col" width= "10%">Phylum ID</th> -->
                  <th scope="col" width= "10%">Plant Code</th>
                  <th scope="col" width= "10%">Plant Type</th>
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

<script type="text/javascript">

    function showAllPlantType()
        {
          $('#managePlantTypetbl').dataTable().fnClearTable();
          $('#managePlantTypetbl').dataTable().fnDraw();
          $('#managePlantTypetbl').dataTable().fnDestroy();
          $('#managePlantTypetbl').dataTable({
            "autoWidth":false,
              "processing": true,
              "serverSide": false,
              "sAjaxSource": "<?php echo base_url('admin/showAllPlantType')?>",
              "deferLoading": 10,
              "bPaginate": true,
              "aaSorting": [[0,'asc']],
              "fnInitComplete": function(){
              }
          });
        }


      $(document).ready(function(){ 

    //show
    showAllPlantType();

$(document).on('click', '.ptype-edit', function(e){
      var id = $(this).attr('data');
      $('#myEditModal').modal('show');
      $('#myEditModal').find('.modal-title').text('Edit Author');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editPlantType',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txtePlantCode]').val(data.strPlantTypeCode);
          $('input[name=txtePlantType]').val(data.strPlantTypeName);
          $('input[name=txtId]').val(data.intPlantTypeID);
        },
        error: function(){
          alert('Could not Edit Data');
        }

    });

  });

$('#btnSave').click(function(event){
      var url = '<?php echo base_url() ?>admin/addPlantType';
      var data = $('#addPlantTypeForm').serialize();
      //validate form
      
        if($('#strPlantCode').val()!=''){
          if($('#strPlantType').val()!=''){
            event.preventDefault();
            swal({
              title: 'Are you sure?',

              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, save it!'
            }).then((result) => {
              if (result.value) {
                $.ajax({
                type: 'ajax',
                method: 'post',
                url: url,
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
                    let timerInterval
                    swal({
                      title: 'Saved',
                      text: 'Plant Type has been saved.',
                      type: 'success',
                      timer: 1500,
                      showConfirmButton: false
                    }).then(function() {
                    $('#managePlantTypetbl').dataTable().fnDestroy();
                    showAllPlantType();
                    $('#myModal').modal('hide');
                     document.getElementById("addPlantTypeForm").reset();
                    event.preventDefault();
                    });
                    
                  }
                },
                error: function(){
                  alert('Could not save Data');
                }
              });


              }

            })

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
  
$('#btnEditSave').click(function(event){
      var data = $('#editPlantTypeForm').serialize();
      
        if($('#strPlantCode1').val()!=''){
          if($('#strPlantType1').val()!=''){
            event.preventDefault();
            swal({
              title: 'Are you sure?',
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, save it!'
            }).then((result) => {
              if (result.value) {
                $.ajax({
                  type: 'ajax',
                  method: 'post',
                  url: '<?php echo base_url() ?>admin/updatePlantType',
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
                      let timerInterval
                      swal({
                        title: 'Saved',
                        text: 'Plant Type has been saved.',
                        type: 'success',
                        timer: 1500,
                        showConfirmButton: false
                      }).then(function() {
                        event.preventDefault();
                        $('#managePlantTypetbl').dataTable().fnDestroy();
                    showAllPlantType();
                    $('#myEditModal').modal('hide');
                    document.getElementById("editAuthorForm").reset();
                    
                      });
                      
                    }else{
                      alert('Error');
                    }
                  },
                  error: function(){
                    alert('Could not update data');
                  }
                });

              }

            })

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
