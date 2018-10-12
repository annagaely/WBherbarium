<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/popper.js/umd/popper.min.js"> </script>
<!--Table-->
<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.dataTables.min.js"></script>


<div class="breadcrumb-holder">
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/Dashboard" >Home</a></li>
      <li class="breadcrumb-item active">Queries</li>
    </ul>
  </div>
</div>

<div class="container-fluid">

    <div class="col-md-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card mt-4">
            <select id="selectquery" class="form-control">
              <option>Phylum</option>
              <option>Class</option>
              <option>Order</option>
              <option>Family</option>
              <option>Genus</option>
              <option>Species</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-20" id='divTable'>
      <div class="card mt-4 px-3 py-3">
        <div class="table-responsive">
          <table class="table table-striped table-hover" id="manageQuerytbl">
            <thead>
              <tr role="row">
                <th>Domain Name</th>
                <th>Kingdom Name</th>
                <th>Phylum Name</th>
                <th>Action</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
    <div id="myEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">

                <h5 id="exampleModalLabel" class="modal-title">Edit Phylum</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">

                <form id= "editPhylumForm" method="POST" enctype="multipart/form-data">
                  <!-- <input type="hidden" name="act" id="act" value=""> -->

                  <div class="form-group">
                    <label>Domain Name:</label> <label style="color: red">*</label>
                    <input type="text" name="txtedName" id="strDomainName1" placeholder="Domain Name" class="form-control" disabled>
                  </div>
                  <div class="form-group">
                    <label>Kingdom Name:</label> <label style="color: red">*</label>
                    <input type="text" name="txtekName" id="strKingdomName1" placeholder="Kingdom Name" class="form-control" disabled>
                  </div>
                      <input type="hidden" name="txtId" value="0">
                  <div class="form-group">
                    <label>Phylum Name:</label> <label style="color: red">*</label>
                    <input type="text" name="txtepName" id="pNameid1" placeholder="Phylum Name" class="form-control" disabled>
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
    <div class="col-md-20" id='divTable1'>
      <div class="card mt-4 px-3 py-3">
        <div class="table-responsive">
          <table class="table table-striped table-hover" id="manageQuerytbl2">
            <thead>
              <tr role="row">
                <th>Scientific Name2</th>
                <th>Common Name</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>

</div>
<script type="text/javascript">
$(document).ready(function () {
  $('#divTable1').hide();
  $('#manageQuerytbl').dataTable().fnClearTable();
  $('#manageQuerytbl').dataTable().fnDraw();
  $('#manageQuerytbl').dataTable().fnDestroy();
  $('#manageQuerytbl').dataTable({
   "autoWidth":false,
       "processing": true,
       "serverSide": false,
       "sAjaxSource": "<?php echo base_url('admin/showAllPhylum')?>",
       "deferLoading": 10,
       "bPaginate": true,
       "aaSorting": [],
       "fnInitComplete": function(){

       }
   });

     $(document).on('click', '.phylum-edit', function(e){
      var id = $(this).attr('data');
      $('#myEditModal').modal('show');
      $('#myEditModal').find('.modal-title').text('Edit Phylum');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editPhylum',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txtedName]').val(data.strDomainName);
          $('input[name=txtekName]').val(data.strKingdomName);
          $('input[name=txtepName]').val(data.strPhylumName);
          $('input[name=txtId]').val(data.intPhylumID);
        },
        error: function(){
          alert('Could not Edit Data');
        }

    });

  });




 $("#selectquery").change(function () {
  var val = $(this).val();
  if(val=='Phylum'){
  $('#divTable1').hide();
  $('#divTable').show();
  }else{
  $('#divTable').hide();
  $('#divTable1').show();
  }
 

 });

});

</script>
