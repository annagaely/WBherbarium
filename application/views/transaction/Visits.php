<script src="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.min.css">
<style>
/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #800000;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #4b0000;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #4b0000;
    color: white;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>



        <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Maintenance/Dashboard" >Home</a></li>
            <li class="breadcrumb-item">Transaction</li>
            <li class="breadcrumb-item">Visits</li>
          </ul>
        </div>
      </div>

<div class="tab" >
  <button id = "defaultOpen" class="tablinks" onclick="openCity(event, 'FirstTab')" style="color:white;">Pending</button>
  <button class="tablinks" onclick="openCity(event, 'SecondTab') " style="color:white;">Expected Visits</button>
  <button class="tablinks" onclick="openCity(event, 'RejectTab') " style="color:white;">Rejected</button>
  <button class="tablinks" onclick="openCity(event, 'ThirdTab') " style="color:white;">All</button>
</div>

<div class="tabcontent" id="FirstTab">
  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped" id="manageVisittbl">
          <thead>
            <tr>
              <th scope="col" width= "10%">Visit ID</th>
              <th scope="col" width= "10%">Visitor's Name</th>
              <th scope="col" width= "10%">Visit Date</th>
              <th scope="col" width= "10%">Visit Purpose</th>
              <th scope="col" width= "10%">Status</th>
              <th scope="col" width= "10%">Actions</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>

         <!-- Modal-->
<div id="viewVisitReq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-justify hide" data-backdrop="static" data-keyboard="false">
       <div role="document" class="modal-dialog" >
         <div class="modal-content" >
           <div class="modal-header">

             <h5 id="exampleModalLabel" class="modal-title">View Visit Details</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>

          <div class="modal-body">
    
<!--               <div class="col-md-6" style="margin-left: auto; margin-right: auto;"> -->
                 <form id= "updateVisitStatusForm" method="POST" enctype="multipart/form-data"class="form-horizontal">


                  
                    <div class="form-group">
                       <label style="font-size: 14px;">Visit ID:</label>
                       <input type="hidden" name="txtId" id="txtID" value="0">
                       <input type="text" name="txtAppointmentID" id="intAppointmentID" class="form-control" disabled="">
                   
                  
                    <div class="form-group">
                       <label style="font-size: 14px;">Visitor's Name:</label>
                       <input type="text" name="txtVisitorName" id="strFullame" class="form-control" disabled>
                    </div>
                 

                 <div class="row">
                  <div class="form-group col-sm-6">
                      <label style="font-size: 14px;">Visit Date:</label>
                      <input type="text" name="txtVisitDate" id="dtAppointmentDate" class="form-control" disabled="">
                  </div>
                 

                     <div class="form-group col-sm-6">
                      <label style="font-size: 14px;">Visit Purpose:</label>
                       <input type="text" name="txtVisitPurpose" id="strVisitPurpose" class="form-control" disabled="">
                     </div>
                </div>

                 <div class="form-group">
                       <label style="font-size: 14px;">Visit Description:</label>
                       <textarea name="txtVisitDescription" id="strVisitDescription" class="form-control" disabled> </textarea>
                    </div>

                 <div class="form-group">
                  <label style="font-size: 14px;">Status:</label>
                   <select name="txtStatus" id="strStatus"  class="form-control">
                        <option value="For Visiting">Approve</option>
                        <option value="Rejected">Reject</option>
                   </select>
                  </div>
                </div>
                 </form>
               </div>

          <div class="modal-footer">
            <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-secondary" style="margin-left: 800px">Cancel</button>
             <input type="submit" value="Save" id="btnSave" class="btn btn-primary" style="float: right;">
          </div>
         </div>
       </div>
     </div>
</div>

<div id="SecondTab" class="tabcontent">
     <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="manageExpecttbl">
              <thead>
                <tr>
                 <th scope="col" width= "10%">Visit ID</th>
                 <th scope="col" width= "10%">Visitor's Name</th>
                 <th scope="col" width= "10%">Visit Date</th>
                 <th scope="col" width= "10%">Visit Purpose</th>
                 <th scope="col" width= "10%">Status</th>
                 <th scope="col" width= "10%">Actions</th>
                </tr>
              </thead>
            </table>
        </div>
      </div>
</div>
</div>

 <div id="EmailVisitCon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
    <div role="document" class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="exampleModalLabel" class="modal-title">Email</h5>
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
        </div>

        <div class="modal-body">
          <form id= "emailform" method="POST" enctype="multipart/form-data">
            <div class="form-group row pr-4">
              <label class="col-sm-2">To:</label>
              <input type ="hidden" name = "txtEmail" id = "txtemail" value ="0">
              <input type="email" name="txtEmailCon" id="strEmailAddress" class="form-control col-sm-10" disabled>
            </div>

            <div class="form-group row pr-4">
                      <label class="col-sm-2">From:</label>
                      <input type="email" class="form-control col-sm-10" value= "WBHerbariumTA@gmail.com" disabled>
            </div>
            <br>
             <div class="form-group">
              <label>Visit Request ID:</label>
              <input type ="hidden" name = "txtId" id = "txtID" value ="0">
              <input type="text" name="txtreqid" id="txtreqID" class="form-control" disabled>
            </div>
            <div class="form-group">
               <label>Message:</label>
                <textarea  id="strCustomMessage" name="txtCustomMessage" class="form-control" placeholder="Type your message here.." ></textarea>
            </div>
                  <div class="modal-footer">
                    <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-secondary">Cancel</button>
                     <input type="submit" id="btnSend" value="Send" class="btn btn-primary">
                     <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
                     <script type="text/javascript">
                            $('#btnSend').click(function(event){
                                var data = $('#emailform').serialize();
                                  event.preventDefault();
           swal({
               title: 'Are you sure?',
               type: 'warning',
               showCancelButton: true,
               confirmButtonColor: '#3085d6',
               cancelButtonColor: '#d33',
               confirmButtonText: 'Yes'
             }).then((result) => {
              $.ajax({
                                  type: 'ajax',
                                  method: 'post',
                                  url: '<?php echo base_url() ?>admin/visitsendMail',
                                  data: data,
                                  async: false,
                                  dataType: 'json',
                                  success: function(){
                                  },
                                  error: function(){
                                      let timerInterval
                    swal({
                      title: 'Email has been sent!',
                      type: 'success',
                      timer: 1500,
                      showConfirmButton: false
                    }).then(function() {
                    
                showAllAppointmentPending();
                showAllAppointmentExpect();
                showAllAppointmentReject();
                showAllAppointmentAll();
                    $('#EmailVisitCon').modal('hide');
                    document.getElementById("emailform").reset();
                  });
                }
            });
        
    })
 });                     </script>
                  </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<div id="VResched" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
    <div role="document" class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="exampleModalLabel" class="modal-title">Re-schedule</h5>
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
        </div>

        <div class="modal-body">
          <form id= "VReschedForm" method="POST" enctype="multipart/form-data">

          <div class="form-group">
               <label>Visit ID:</label> 
                <input type="hidden" name="txtId" id="txtID" value="0">
                 <input type="text" name="txtVisitID" id="intAppointmentID" class="form-control" disabled="">
          </div>
          <div class="form-group">
               <label>Collector's Name:</label> 
               <input type="text" name="txtVisitorName" id="strCollector" class="form-control" disabled="">
          </div>
           <div class="form-group">
           <label>Visit Purpose:</label>
                <input type="text" name="txtVisitPurpose" id="strVisitPurpose" class="form-control" disabled="">
          </div>
          <div class="form-group">
              <label>Date of Visit:</label>
              <input type="Date" name="ntxtdateid" id="txtdateID" class="form-control" >
          </div>
           <div class="modal-footer">
               <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-secondary">Cancel</button>
               <input type="submit" value="Save" id="btnEditSave" class="btn btn-primary">
           </div>
</form>
</div>
</div>
</div>
</div>

<div id="RejectTab" class="tabcontent">
  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped" id="manageRejectbl">
              <thead>
                <tr>
                 <th scope="col" width= "10%">Visit ID</th>
                 <th scope="col" width= "10%">Visitor's Name</th>
                 <th scope="col" width= "10%">Visit Date</th>
                 <th scope="col" width= "10%">Visit Purpose</th>
                 <th scope="col" width= "10%">Status</th>
                 <th scope="col" width= "10%">Actions</th>
                </tr>
              </thead>
            </table>
        </div>
      </div>
 </div>
</div>

 <div id="EmailVisitConReject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
    <div role="document" class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="exampleModalLabel" class="modal-title">Email</h5>
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
        </div>

        <div class="modal-body">
          <form id= "emailformreject">
              <input type ="hidden" name = "txtemailReject" id ="txtemail" value ="0">
             
            <div class="form-group row pr-4">
              <label class="col-sm-2">To:</label>
               <input type="email" name="txtEmailCon" id="strEmailAddressReject" class="form-control col-sm-10" disabledmethod="POST" enctype="multipart/form-data" disabled>
            </div>

            <div class="form-group row pr-4">
              <label class="col-sm-2">From:</label>
              <input type="email" class="form-control col-sm-10" value= "WBHerbariumTA@gmail.com" disabled>
            </div>
            <br>
             <div class="form-group">
              <label>Visit Request ID:</label>
              <input type ="hidden" name = "txtIdReject" id = "txtIDReject" value ="0">
              <input type="text" name="txtreqid" id="txtreqIDReject" class="form-control" disabled>
            </div>
            <div class="form-group">
               <label>Message:</label>
                <textarea  id="strCustomMessage" name="txtCustomMessageReject" class="form-control" placeholder="Type your message here.." ></textarea>
            </div>
                  <div class="modal-footer">
                    <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-secondary">Cancel</button>
                     <input type="submit" id="btnSendReject" value="Send" class="btn btn-primary">
                     <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
                     <script type="text/javascript">
                            $('#btnSendReject').click(function(event){
                                var data = $('#emailformreject').serialize();
            event.preventDefault();
              swal({
               title: 'Are you sure?',
               type: 'warning',
               showCancelButton: true,
               confirmButtonColor: '#3085d6',
               cancelButtonColor: '#d33',
               confirmButtonText: 'Yes'
             }).then((result) => {
               if (result.value) {
                                  $.ajax({
                                  type: 'ajax',
                                  method: 'post',
                                  url: '<?php echo base_url() ?>admin/visitsendMailReject',
                                  data: data,
                                  async: false,
                                  dataType: 'json',
                                  success: function(){
                                  },
                                  error: function(){
                let timerInterval
                    swal({
                      title: 'Email has been sent!',
                      type: 'success',
                      timer: 1500,
                      showConfirmButton: false
                    }).then(function() {
                    
                showAllAppointmentPending();
                showAllAppointmentExpect();
                showAllAppointmentReject();
                showAllAppointmentAll();
                    $('#EmailVisitConReject').modal('hide');
                    document.getElementById("emailformreject").reset();
                  });
                }
            });
         }
    })
 });

                     </script>
                  </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<div id="ThirdTab" class="tabcontent">
     <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="manageAlltbl">
              <thead>
                <tr>
                  <th scope="col" width= "10%">Visit ID</th>
                  <th scope="col" width= "10%">Visitor's Name</th>
                  <th scope="col" width= "10%">Visit Date</th>
                  <th scope="col" width= "10%">Visit Purpose</th>
                  <th scope="col" width= "10%">Status</th>
                </tr>
              </thead>
<!--               <tbody tbody id="showdata2">
            </tbody> -->
            </table>
        </div>
      </div>
</div>
</div>


<div id="VisitConfirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
    <div role="document" class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="exampleModalLabel" class="modal-title">Confirmation</h5>
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
        </div>

        <div class="modal-body">
          <form id= "ConfirmForm" method="POST" enctype="multipart/form-data">
            <div class="form-group row">
                     <div class="col-sm-4">
                       <label style="font-size: 14px;">Visit ID:</label>
                     </div>
                     <div class="col-sm-8">
                      <input type="hidden" name="txtId" id="txtID" value="0">
                       <input type="text" name="txtVisitID" id="intAppointmentID" class="form-control" disabled="">
                     </div>
            </div>
           <div class="form-group row">
                     <div class="col-sm-4">
                       <label style="font-size: 14px;">Visitor's Name:</label>
                     </div>
                     <div class="col-sm-8">

                       <input type="text" name="txtVisitorName" id="strFullName" class="form-control" disabled="">
                     </div>
            </div>
            <div class="form-group row">
                     <div class="col-sm-4">
                       <label style="font-size: 14px;">Status:</label>
                     </div>
                     <div class="col-sm-8">
                     <select name="txtStatus" id="strStatus"  class="form-control">
                        <option value="Arrived">Arrived</option>
                        <option value="Did not arrive">Did not arrive</option>
                      </select>
                     </div>
            </div>

                  <div class="modal-footer">
                    <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-secondary">Cancel</button>
                     <input type="submit" id="btnConfirm" value="Confirm" class="btn btn-primary">
                  </div>
          </form>
        </div>
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

    function showAllAppointmentPending()
    {
      $('#manageVisittbl').dataTable().fnClearTable();
      $('#manageVisittbl').dataTable().fnDraw();
      $('#manageVisittbl').dataTable().fnDestroy();
       $('#manageVisittbl').dataTable({
        "autoWidth":false,
         "processing": true,
         "serverSide": false,
         "sAjaxSource": "<?php echo base_url('admin/showAllAppointmentPending')?>",
         "deferLoading": 10,
         "bPaginate": true,
         "aaSorting": [],
         "fnInitComplete": function(){

         }
     });
    }

    $(document).ready(function() {
      showAllAppointmentPending();
});

  $('#btnSave').click(function(event){

      var data = $('#updateVisitStatusForm').serialize();
     event.preventDefault();
     swal({
               title: 'Are you sure?',
               type: 'warning',
               showCancelButton: true,
               confirmButtonColor: '#3085d6',
               cancelButtonColor: '#d33',
               confirmButtonText: 'Yes'
             }).then((result) => {
               if (result.value) {
        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/updateVisitStatus',
          data: data,
          async: false,
          dataType: 'json',
          success: function(data){

            if(data==true){
              
            }else{
              alert('Error');
            }
              let timerInterval
                    swal({
                      title: 'Saved',
                      text: 'Succesful!',
                      type: 'success',
                      timer: 1500,
                      showConfirmButton: false
                    }).then(function() {
                showAllAppointmentPending();
                showAllAppointmentExpect();
                showAllAppointmentReject();
                showAllAppointmentAll();
                    $('#viewVisitReq').modal('hide');
                    document.getElementById("updateVisitStatusForm").reset();
                  });
          },
          error: function(){
            alert('Could not update data');
          }
        });
      }
    })
    });

$(document).on('click', '.view-appointment', function(){
      var id = $(this).attr('data');
      $('#viewVisitReq').modal('show');
      $('#ViewVisitReq').find('.modal-title').text('Visit Details');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/ViewVisitReq',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txtVisitorName]').val(data.strFullName);
          $('input[name=txtAppointmentID]').val(data.intAppointmentID);
          $('input[name=txtVisitDate]').val(data.dtAppointmentDate);
          $('input[name=txtVisitPurpose]').val(data.strVisitPurpose);
          $('textarea[name=txtVisitDescription]').val(data.strVisitDescription);
          $('input[name=txtId]').val(data.intAppointmentID);


        },
        error: function(){
          alert('Could not Edit Data');
        }

    });
  });



</script>

    <script type="text/javascript">

    function showAllAppointmentExpect()
    {
      $('#manageExpecttbl').dataTable().fnClearTable();
      $('#manageExpecttbl').dataTable().fnDraw();
      $('#manageExpecttbl').dataTable().fnDestroy();
      $('#manageExpecttbl').dataTable({
        "autoWidth":false,
         "processing": true,
         "serverSide": false,
         "sAjaxSource": "<?php echo base_url('admin/showAllAppointmentExpect')?>",
         "deferLoading": 10,
         "bPaginate": true,
         "aaSorting": [],
         "fnInitComplete": function(){

         }
     });
    }
    $(document).ready(function() {
      showAllAppointmentExpect();

     $(document).on('click', '.view-appcon', function(){
      var id = $(this).attr('data');
      $('#VisitConfirmation').modal('show');
      $('#VisitConfirmation').find('.Confirmation').text('Confirmation');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/VisitConfirmation',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txtVisitID').val(data.intAppointmentID);
           $('input[name=txtId').val(data.intAppointmentID);
          $('input[name=txtVisitorName]').val(data.strFullName);
          $('input[name=txtStatus]').val(data.strStatus);


        },
        error: function(){
          alert('Could not Edit Data');
        }

    });
    });

     $(document).on('click', '.view-emailcon', function(){
      var id = $(this).attr('data');
      $('#EmailVisitCon').modal('show');
      $('#EmailVisitCon').find('.EmailVisitCon').text('Email');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/VisitEmailCon',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('#strEmailAddress').val(data.strEmailAddress);
          $('#txtemail').val(data.strEmailAddress);
          $('input[name=txtId]').val(data.intAppointmentID);
          $('#txtreqID').val(data.intAppointmentID);

        },
        error: function(){
          alert('Could not Edit Data');
        }

    });
    });


   $('#btnConfirm').click(function(event){
      var data = $('#ConfirmForm').serialize();
     event.preventDefault();
     swal({
               title: 'Are you sure?',
               type: 'warning',
               showCancelButton: true,
               confirmButtonColor: '#3085d6',
               cancelButtonColor: '#d33',
               confirmButtonText: 'Yes'
             }).then((result) => {
               if (result.value) {

        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/updateVisitConfirmation',
          data: data,
          async: false,
          dataType: 'json',
          success: function(response){

            if(response==true){
            }else{
              alert('Error');
            }
            let timerInterval
                    swal({
                      title: 'Saved',
                      text: 'Succesful!',
                      type: 'success',
                      timer: 1500,
                      showConfirmButton: false
                    }).then(function() {
                    
                    showAllDepositReqPending();
                    showAllDepositReqOkay();
                    showAllDepositReqAll();
                    $('#VisitConfirmation').modal('hide');
                    document.getElementById("ConfirmForm").reset();
                  });
          },
          error: function(){
            alert('Could not update data');
          }
        });
      }
    })
 });
      $(document).on('click', '.view-VResched', function(){
      var id = $(this).attr('data');
      $('#VResched').modal('show');
      $('#VResched').find('.modal-title').text('Re-schedule');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/VResched',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txtId]').val(data.txtID);
          $('input[name=txtVisitID]').val(data.intAppointmentID);
         $('input[name=txtVisitorName]').val(data.strFullName);
         $('input[name=txtVisitPurpose]').val(data.strVisitPurpose);
        },

        error: function(){
          alert('Could not Edit Data');
        }
    });
    });


  });
      
</script>

<script type="text/javascript">
    function showAllAppointmentReject()
    {
      $('#manageRejectbl').dataTable().fnClearTable();
      $('#manageRejectbl').dataTable().fnDraw();
      $('#manageRejectbl').dataTable().fnDestroy();
      $('#manageRejectbl').dataTable({
        "autoWidth":false,
         "processing": true,
         "serverSide": false,
         "sAjaxSource": "<?php echo base_url('admin/showAllAppointmentReject')?>",
         "deferLoading": 10,
         "bPaginate": true,
         "aaSorting": [],
         "fnInitComplete": function(){

         }
     });
    }

    $(document).ready(function() {
      showAllAppointmentReject();
});
     $(document).on('click', '.view-emailConReject', function(){
      var id = $(this).attr('data');
      $('#EmailVisitConReject').modal('show');
      $('#EmailVisitConReject').find('.EmailVisitConReject').text('Email');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/VisitEmailConReject',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('#strEmailAddressReject').val(data.strEmailAddress);
          $('input[name=txtemailReject]').val(data.strEmailAddress);
          $('#txtIDReject').val(data.intAppointmentID);
          $('#txtreqIDReject').val(data.intAppointmentID);

        },
        error: function(){
          alert('Could not Edit Data');
        }

    });
});


</script>

<!-- <script type="text/javascript">

      $(document).on('click', '.view-appointment', function(){
              var id = $(this).attr('data');
      $('#ViewVisitReq').modal('show');
      $('#ViewVisitReq').find('.modal-title').text('Visit Details');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/ViewVisitReq',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txtVisitorName]').val(data.strFullName);
          $('input[name=txtAppointmentID]').val(data.intAppointmentID);
          $('input[name=txtVisitDate]').val(data.dtAppointmentDate);
          $('input[name=txtVisitPurpose]').val(data.strVisitPurpose);
          $('textarea[name=txtVisitDescription]').val(data.strVisitDescription);
          $('input[name=txtId]').val(data.intAppointmentID);
 },
        error: function(){
          alert('Could not Edit Data');
        }

    });
      });



</script> -->
<script>
    function showAllAppointmentAll(){
        
      $('#manageAlltbl').dataTable().fnClearTable();
      $('#manageAlltbl').dataTable().fnDraw();
      $('#manageAlltbl').dataTable().fnDestroy();
       $('#manageAlltbl').dataTable({
        "autoWidth":false,
         "processing": true,
         "serverSide": false,
         "sAjaxSource": "<?php echo base_url('admin/showAllAppointmentAll')?>",
         "deferLoading": 10,
         "bPaginate": true,
         "aaSorting": [],
         "fnInitComplete": function(){

         }
     });
    }

    $(document).ready(function(){
      //show-
    showAllAppointmentAll();


  });
</script>


<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
