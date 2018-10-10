<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.18/b-1.5.4/b-flash-1.5.4/b-print-1.5.4/r-2.2.2/rg-1.1.0/sc-1.5.0/sl-1.2.6/datatables.min.css"/>

  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.18/b-1.5.4/b-flash-1.5.4/b-print-1.5.4/r-2.2.2/rg-1.1.0/sc-1.5.0/sl-1.2.6/datatables.min.js"></script>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url();?>assets/bower_components/mdbootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo base_url();?>assets/bower_components/mdbootstrap/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->

  <!-- Bootstrap cor/e JavaScript -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/bower_components/mdbootstrap/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/bower_components/mdbootstrap/js/mdb.min.js"></script>
<!-- Footer -->
<body>
<div class="table-responsive">
  <table id="manageCurrentVisits" class="table table-striped"  width="100%">
  <thead>
    <tr>
      <th class="th-sm">Date
        
      </th>
      <th class="th-sm">Type of Visit
       
      </th>
      <th class="th-sm">Description
        
      </th>
            <th class="th-sm">Status
       
      </th>
      <th class="th-sm">Action
      
      </th>


    </tr>
  </thead>

</table>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <form id= "editCurrentVisitform" method="POST" enctype="multipart/form-data"> <!--dito ka magbabago sa loob nito-->
                
              <div class="row">
                 <div class="form-group col-sm-6">
                   <input type="hidden" name="txtId" value="0">
                   <label>Appointment Date:<span style="color: red">*</span></label> 
                   <input type="text" name ="txtAppointment"  class="form-control" autocomplete=off disabled>
                 </div>
                 <div class="form-group col-sm-6">
                   <label>Visit Type:<span style="color: red">*</span></label>
                   <input type="text" name="txtvisitp" class="form-control" autocomplete=off disabled>
                 </div>
               </div>

                  <div class="form-group">
                   <label>Visit Description:</label> <label style="color: red">*</label>
                   <input type="text" name="txtvisitdesc" class="form-control" autocomplete=off disabled>
                 </div>
                    <div class="form-group">
                   <label>Status:</label> <label style="color: red">*</label>
                   <input type="text" name="txtstatus" class="form-control" autocomplete=off disabled>
                 </div>
                 <div class="form-group">
                   <label>Actions:</label><label style="color: red">*</label><label style="color: red; font-size: 9px">     Don't change anything here if you don't need to.</label>
                   <select id='txtChange' class="form-control" autocomplete=off>
                    <option value='None'>None</option>
                    <option value='Reschedule'>Reschedule</option>
                    <option value='Cancel'>Cancel</option>
                   </select>
                 </div>
                 <div class="form-group">
                   <label>New Date:</label><label style="color: red">*</label>
                   <input type='date' name='dtnewDate' id='dtnewDateid' class="form-control" autocomplete=off disabled required>
                 </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id='btnSave' class="btn btn-primary">Save changes</button>
      </div>
       </form>
    </div>
  </div>
</div>
</div>

</body>
    <script src="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.min.css">
<script type="text/javascript">
$(document).ready(function () {

        $("#txtChange").change(function () {
          var val = $(this).val();
          if (val == "Reschedule") {
            document.getElementById('dtnewDateid').disabled = false;
          }else{
            document.getElementById('dtnewDateid').disabled = true;
          }
        });
 
 function showVisitCurrentTable(){ 
  $('#manageCurrentVisits').dataTable().fnClearTable();
  $('#manageCurrentVisits').dataTable().fnDraw();
  $('#manageCurrentVisits').dataTable().fnDestroy();
  $('#manageCurrentVisits').dataTable({
   "autoWidth":false,
       "processing": true,
       "serverSide": false,
       "sAjaxSource": "<?php echo base_url('user/showCurrentVisitsLog')?>",
       "deferLoading": 10,
       "bPaginate": true,
       "aaSorting": [],
       "fnInitComplete": function(){

       }
   });
}showVisitCurrentTable();

      $(document).on('click', '.visitcurent-edit', function(event){
     var id = $(this).attr('data');
     $('#myModal').modal('show');
     $('#myModal').find('.modal-title').text('Edit Appointment');
     $.ajax({
       type: 'ajax',
       method: 'get',
       url: '<?php echo base_url() ?>user/editCurrentVisit',
       data: {id: id},
       async: false,
       dataType: 'json',
       success: function(data){

         $('input[name=txtAppointment]').val(data.dtAppointmentDate);
         $('input[name=txtvisitp]').val(data.strVisitPurpose);
         $('input[name=txtvisitdesc]').val(data.strVisitDescription);
         $('input[name=txtstatus]').val(data.strVisitDescription);
        $('input[name=txtId]').val(data.intAppointmentID);
       },
       error: function(){
         alert('Could not Edit Data');
       }

   });
 });


$('#btnSave').click(function(event){
     var data = $('#editCurrentVisitform').serialize();
     //validate form
    if($('#txtChange').val()==='Reschedule'){
if(document.getElementById('dtnewDateid').disabled == false){
  if($('#dtnewDateid').val()!=''){
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
               url: '<?php echo base_url() ?>user/updateCurrentVisitResched',
               data: data,
               async: false,
               dataType: 'json',
               success: function(response){
                 if(response.success){
                   let timerInterval
                   swal({
                     title: 'Saved',
                     text: 'Your changes has been saved.',
                     type: 'success',
                     timer: 1500,
                     showConfirmButton: false
                   }).then(function() {
                     showVisitCurrentTable();
                    $('#myModal').modal('hide');
                    document.getElementById("editCurrentVisitform").reset();
                   
                   });


                 }else{
                  event.preventDefault();
                 swal({
                   type: 'error',
                   title: 'Incorrect Date!',
                   text: 'Herbarium Center is not Available on that date.'
                 });
                 }
               },
               error: function(){
                 alert('error')
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
}
            }else if($('#txtChange').val()==='Cancel'){

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
               url: '<?php echo base_url() ?>user/updateCurrentVisitCancel',
               data: data,
               async: false,
               dataType: 'json',
               success: function(response){
                 if(response.success){
                   let timerInterval
                   swal({
                     title: 'Saved',
                     text: 'Your changes has been saved.',
                     type: 'success',
                     timer: 1500,
                     showConfirmButton: false
                   }).then(function() {
                     showVisitCurrentTable();
                    $('#myModal').modal('hide');
                    document.getElementById("editCurrentVisitform").reset();
                    event.preventDefault();
                   });


                 }else{
                  event.preventDefault();
                 swal({
                   type: 'error',

                 });
                 }
               },
               error: function(){
                 alert('error')
               }
             });
            }
          })



            }else{
                       swal({
           title: 'Error',
           type: 'warning',
           text: 'No action selected',
           confirmButtonColor: '#3085d6',
           cancelButtonColor: '#d33',
           confirmButtonText: 'Okay!'
         });
          }

       
      

    });



});
</script>
</html>
