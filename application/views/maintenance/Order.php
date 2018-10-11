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
            <li class="breadcrumb-item active">Order </li>
          </ul>
        </div>
      </div>
  <!--ADD Order MODAL-->
      <div class="card">
        <div class="card-header d-flex align-items-center">
          <button type="button" button data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add Order</button>
        </div>
        <!-- Modal-->
        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Add Order</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">

                <form id= "addOrderForm" method="POST" enctype="multipart/form-data"> <!--dito ka magbabago sa loob nito-->
                  <div class="form-group">
                    <label>Class Name:</label> <label style="color: red">*</label>
                     <input list="classname" name ="txtcID" placeholder="Class Name" class="form-control" autocomplete="off">
                     <datalist id ='classname'>
                     </datalist>
                  </div>
                  <div class="form-group">
                    <label>Order Name:</label> <label style="color: red">*</label>
                    <input id="orderName" type="text" name="txtOName" placeholder="Order Name" class="form-control">
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
            <!--ADD EDIT CLASS MODAL-->

        <!-- Modal-->
        <div id="myEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">

                <h5 id="exampleModalLabel" class="modal-title">Edit Phylum</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">

                <form id= "editOrderForm" method="POST" enctype="multipart/form-data">
                  <!-- <input type="hidden" name="act" id="act" value=""> -->
                  <div class="form-group">
                    <label>
                      <input type="hidden" name="txtId" value="0">
                    </label> <label style="color: red">*</label>
                    <label>Class Name:</label>
                     <input list="classname" name ="sceID" placeholder="Class Name" class="form-control" autocomplete="off">
                     <datalist id ='classname'>
                     </datalist>
                  </div>
                  <div class="form-group">
                    <label>Order Name:</label> <label style="color: red">*</label>
                    <input type="text" id="orderName1" name="txteOName" placeholder="Class Name" class="form-control">
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
            <table class="table dataTable no-footer" id="manageOrdertbl">
              <thead>
                <tr>
<!--                   <th scope="col" width= "5%">Order ID</th> -->
                  <th scope="col" width= "8%">Class Name</th>
                  <th scope="col" width= "8%">Order Name</th>
                  <th scope="col" width= "5%">Actions</th>
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

      <!--Table-->
      <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/dataTables.bootstrap4.min.js"></script>
      <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.dataTables.min.js"></script>

<script>
function resetForm() {
    document.getElementById("addOrderForm").reset();
}
</script>

<script type="text/javascript">

    function showAllOrder()
    {
      $('#manageOrdertbl').dataTable().fnClearTable();
      $('#manageOrdertbl').dataTable().fnDraw();
      $('#manageOrdertbl').dataTable().fnDestroy();
      $('#manageOrdertbl').dataTable({
        "autoWidth":false,
         "processing": true,
         "serverSide": false,
         "sAjaxSource": "<?php echo base_url('admin/showAllOrder')?>",
         "deferLoading": 10,
         "bPaginate": true,
         "aaSorting": [],
         "fnInitComplete": function(){

         }
     });
   }

$(document).ready(function(){
      //show
    showAllOrder();
    showOrderClassName();


function showOrderClassName(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showOrderClassName',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<option value="'+data[i].strClassName+'">'+data[i].strClassName+'</option>';
          }
          $('#classname').html(html);
          $('#showOrderClassName2').html(html);
        },
        error: function(){
          alert('Could not get Data from Database');
        }
      });
    };


$('#btnSave').click(function(event){

  var url = '<?php echo base_url()?>admin/addOrder';
  var data = $('#addOrderForm').serialize();
  if($('#orderClassName').val()!=''){
    if($('#orderName').val()!=''){
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
            url: '<?php echo base_url() ?>admin/addOrder',
            data: data,
            async: false,
            dataType: 'json',
            success: function(response){
              if(response.success){
                $('#addOrderForm').modal('hide');
                $('#addOrderForm')[0].reset();
                if(response.type=='add'){
                  var type = 'added'
                }else if(response.type=='update'){
                  var type ="updated"
                }
                let timerInterval
                swal({
                  title: 'Saved',
                  text: 'Order has been saved.',
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
                  text: 'Order name already exists.'
                });
              }
            },
            error: function(){
              event.preventDefault();
              swal({
                type: 'error',
                title: 'Incorrect input!',
                text: 'Class name does not exist.'
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
    //update class
  $('#btnEditSave').click(function(event){
      var data = $('#editOrderForm').serialize();
      if($('#orderClassName1').val()!=''){
        if($('#orderName1').val()!=''){
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
                url: '<?php echo base_url() ?>admin/updateOrder',
                data: data,
                async: false,
                dataType: 'json',
                success: function(response){
                  if(response.success){
                    $('#editOrderForm').modal('hide');
                    $('#editOrderForm')[0].reset();
                    if(response.type=='add'){
                      var type = 'added'
                    }else if(response.type=='update'){
                      var type ="updated"
                    }
                    let timerInterval
                    swal({
                      title: 'Saved',
                      text: 'Order has been updated.',
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
                      text: 'Order name already exists.'
                    });
                  }
                },
                error: function(){
                  event.preventDefault();
                  swal({
                    type: 'error',
                    title: 'Incorrect input!',
                    text: 'Class name does not exist.'
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
$(document).on('click', '.order-edit', function(event){
      var id = $(this).attr('data');
      $('#myEditModal').modal('show');
      $('#myEditModal').find('.modal-title').text('Edit Order');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editOrder',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=sceID]').val(data.strClassName)
          $('input[name=txteOName]').val(data.strOrderName);
          $('input[name=txtId]').val(data.intOrderID);

        },
        error: function(){
          alert('Could not Edit Data');
        }

    });

  });


  });
</script>
