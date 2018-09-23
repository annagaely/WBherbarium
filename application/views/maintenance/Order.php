
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
                    <select id="showOrderClassName" name ="txtcID" class="form-control">
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Order Name:</label> <label style="color: red">*</label>
                    <input type="text" name="txtOName" placeholder="Order Name" class="form-control">
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
                     <select id="showOrderClassName2" name ="sceID" class="form-control">
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Order Name:</label> <label style="color: red">*</label>
                    <input type="text" name="txteOName" placeholder="Class Name" class="form-control">
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
                  <th scope="col" width= "5%">Order ID</th>
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
         "processing": true,
         "serverSide": false,
         "sAjaxSource": "<?php echo base_url('admin/showAllOrder')?>",
         "deferLoading": 10,
         "bPaginate": true,
         "aaSorting": [[0,'asc']],
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
            html +='<option value="'+data[i].intClassID+'">'+data[i].strClassName+'</option>';
          }
          $('#showOrderClassName').html(html);
          $('#showOrderClassName2').html(html);
        },
        error: function(){
          alert('Could not get Data from Database');
        }
      });
    }


$('#btnSave').click(function(){
      var data = $('#addOrderForm').serialize();
      //validate form
      if(confirm("Save data?")){
        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/addOrder',
          data: data,
          async: false,
          dataType: 'json',
          success: function($response){
            if(response.success){
              $('#addOrderForm').modal('hide');
              $('#addOrderForm')[0].reset();
              if(response.type=='add'){
                var type = 'added'
              }else if(response.type=='update'){
                var type ="updated"
              }
             alert('Order Successfully Added!');
              location.reload();

            }else{
              alert('Please fill up all fields.');
            }
          },
          error: function(){
            alert('Could not save Data');
          }
        });
        }   else{
        event.preventDefault();
        }
    });
    //update class
  $('#btnEditSave').click(function(){
      var data = $('#editOrderForm').serialize();
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
$(document).on('click', '.order-edit', function(){
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
