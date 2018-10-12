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
            <li class="breadcrumb-item">Taxonomic Hierarchy</li>
            <li class="breadcrumb-item active">Family </li>
          </ul>
        </div>
      </div>
  <!--ADD FAM MODAL-->
      <div class="card">
        <div class="card-header d-flex align-items-center">
          <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add Family</button>
        </div>
        <!-- Modal-->
        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Add Family</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">

                <form id= "addFamilyForm" method="POST" enctype="multipart/form-data"><!--dito ka magbabago sa loob nito-->
                  <div class="form-group">
                    <label>Order Name:</label> <label style="color: red">*</label>
                     <input list="ordername" name ="txtoID" placeholder="Order Name" class="form-control" autocomplete="off">
                     <datalist id ='ordername'>
                     </datalist>

                  </div>
                  <div class="form-group">
                    <label>Family Name:</label> <label style="color: red">*</label>
                    <input id="famName" type="text" name="txtfName" placeholder="Family Name" class="form-control">
                  </div><!--HANGGANG DITO LANG BOI-->
                  <div class="modal-footer">
                    <input type="reset" value="Clear" class="btn btn-secondary">
                    <input type="submit" id = "btnSave" value="Save" class="btn btn-primary">
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!--END PHYLUM MODAL-->
      <!--ADD EDIT CLASS MODAL-->

        <!-- Modal-->
        <div id="myEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">

                <h5 id="exampleModalLabel" class="modal-title">Edit Phylum</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">

                <form id= "editFamilyForm" method="POST" enctype="multipart/form-data">
                  <!-- <input type="hidden" name="act" id="act" value=""> -->
                  <div class="form-group">
                    <label>
                      <input type="hidden" name="txtId" value="0">
                    </label>
                    <label>Order Name:</label> <label style="color: red">*</label>
                     <input list="ordername" name ="seOID" placeholder="Order Name" class="form-control" autocomplete="off">
                     <datalist id ='ordername'>
                     </datalist>
                  </div>
                  <div class="form-group">
                    <label>Family Name:</label> <label style="color: red">*</label>
                    <input id="famName1" type="text" name="txteFName" placeholder="Class Name" class="form-control">
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
      <!--END EDIT CLASS MODAL-->
 <div class="card">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table dataTable no-footer" id="manageFamilytbl">
         <thead>
          <tr>
<!--             <th scope="col" width= "10%">Family ID</th> -->
            <th scope="col" width= "10%">Order Name</th>
            <th scope="col" width= "10%">Family Name</th>
            <th scope="col" width= "10%">Actions</th>
          </tr>
        </thead>
<!--       <tbody tbody id="showdata">
            </tbody>  -->
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
    document.getElementById("addFamilyForm").reset();
}

</script>
    <script type="text/javascript">

    function showAllFamily()
      {
        $('#manageFamilytbl').dataTable().fnClearTable();
        $('#manageFamilytbl').dataTable().fnDraw();
        $('#manageFamilytbl').dataTable().fnDestroy();
        $('#manageFamilytbl').dataTable({
          "autoWidth":false,
         "processing": true,
         "serverSide": false,
         "sAjaxSource": "<?php echo base_url('admin/showAllFamily')?>",
         "deferLoading": 10,
         "bPaginate": true,
         "aaSorting": [],
         "fnInitComplete": function(){

         }
     });
   }
      $(document).ready(function(){
       //show
        showAllFamily();
        showFamilyOrderName();


function showFamilyOrderName(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showFamilyOrderName',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<option value="'+data[i].strOrderName+'">'+data[i].strOrderName+'</option>';
          }
          $('#ordername').html(html);
          $('#showFamilyOrderName1').html(html);

        },
        error: function(){
          alert('Could not get Data from Database');
        }
      });
    };


$('#btnSave').click(function(event){
  var url = '<?php echo base_url()?>admin/addFamily';
      var data = $('#addFamilyForm').serialize();
      //validate form
      if($('#orderName').val()!=''){
        if($('#famName').val()!=''){
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
          url: '<?php echo base_url() ?>admin/addFamily',
          data: data,
          async: false,
          dataType: 'json',
          success: function(response){
            if(response.success){
              $('#addFamilyForm').modal('hide');
              $('#addFamilyForm')[0].reset();
              if(response.type=='add'){
                var type = 'added'
              }else if(response.type=='update'){
                var type ="updated"
              }
            let timerInterval
            swal({
              title: 'Saved',
              text: 'Family has been saved.',
              type: 'success',
              timer: 1500,
              showConfirmButton: false
            }).then(function() {
              location.reload();
            });
          }else {
            event.preventDefault();
            swal({
              type: 'error',
              title: 'Error!',
              text: 'Family name already exists.'
            });
          }
          },
          error: function(){
            event.preventDefault();
            swal({
              type: 'error',
              title: 'Incorrect input!',
              text: 'Order name does not exist.'
            });
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
      var data = $('#editFamilyForm').serialize();
      if($('#orderName1').val()!=''){
        if($('#famName1').val()!=''){
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
          url: '<?php echo base_url() ?>admin/updateFamily',
          data: data,
          async: false,
          dataType: 'json',
          success: function(response){
            if(response.success){
              $('#editFamilyForm').modal('hide');
              $('#editFamilyForm')[0].reset();
              if(response.type=='add'){
                var type = 'added'
              }else if(response.type=='update'){
                var type ="updated"
              }
            let timerInterval
            swal({
              title: 'Saved',
              text: 'Family has been updated.',
              type: 'success',
              timer: 1500,
              showConfirmButton: false
            }).then(function() {
              location.reload();
            });
          }else {
            event.preventDefault();
            swal({
              type: 'error',
              title: 'Error!',
              text: 'Family name already exists.'
            });
          }
          },
          error: function(){
            event.preventDefault();
            swal({
              type: 'error',
              title: 'Incorrect input!',
              text: 'Order name does not exist.'
            });
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


    //edit class
$(document).on('click', '.family-edit', function(event){
      var id = $(this).attr('data');
      $('#myEditModal').modal('show');
      $('#myEditModal').find('.modal-title').text('Edit Family');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editFamily',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=seOID').val(data.strOrderName)
          $('input[name=txteFName]').val(data.strFamilyName);
          $('input[name=txtId]').val(data.intFamilyID);

        },
        error: function(){
          alert('Could not Edit Data');
        }

    });

  });
  });

</script>
