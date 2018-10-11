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
  <div class="row">
    <div class="col-md-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card mt-4">
            <select name="account" class="form-control">
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
      <div class="row">
        <div class="col-md-12">
          <div class="card px-3 py-3">
            <input id="radioCustom2" type="radio" value="option2" name="a" class="form-control-custom radio-custom">
            <label for="radioCustom2">sample</label>
            
            <input id="radioCustom1" type="radio" value="option1" name="a" class="form-control-custom radio-custom">
            <label for="radioCustom1">asd</label>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-8" id='divTable'>
      <div class="card mt-4 px-3 py-3">
        <div class="table-responsive">
          <table class="table table-striped table-hover" id="manageQuerytbl">
            <thead>
              <tr role="row">
                <th>Scientific Name</th>
                <th>Common Name</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-8" id='divTable1'>
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
       "sAjaxSource": "<?php echo base_url('user/showAllVisitsLog')?>",
       "deferLoading": 10,
       "bPaginate": true,
       "aaSorting": [],
       "fnInitComplete": function(){

       }
   });
 $("#radioCustom2").change(function () {
  $('#divTable').hide();
  $('#divTable1').show();

 });

});

</script>
