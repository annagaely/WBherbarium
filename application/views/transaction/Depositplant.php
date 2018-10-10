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
            <li class="breadcrumb-item active">Deposit Plant</li>
          </ul>
        </div>
      </div>


<div class="tab" >
  <button id = "defaultOpen" class="tablinks" onclick="openCity(event, 'FirstTab')" style="color:white;">Pending</button>
  <button class="tablinks" onclick="openCity(event, 'SecondTab') " style="color:white;">For Deposit</button>
  <button class="tablinks" onclick="openCity(event, 'ThirdTab') " style="color:white;">All</button>
</div>


<div class="tabcontent" id="FirstTab">
       <div class="card">
        <div class="card-body">
         <div class="table-responsive">
            <table class="table dataTable no-footer" id="manageDepositReqPendingtbl">
              <thead>
                <tr>
                  <th scope="col" width= "10%">Deposit ID</th>
                  <th scope="col" width= "10%">Collector's Name</th>
                  <th scope="col" width= "10%">Common Name</th>
                  <th scope="col" width= "10%">Date Collected</th>
                  <th scope="col" width= "10%">Full Location</th>
                  <th scope="col" width= "10%">Date of deposit</th>
                  <th scope="col" width= "10%">Status</th>
                  <th scope="col" width= "10%">Action</th>
                </tr>
              </thead>
<!--                 <tbody id="showdata">
                </tbody> -->
            </table>
        </div>
      </div>
    </div>


         <!-- Modal-->
<div id="viewDepositReq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-justify hide" data-backdrop="static" data-keyboard="false">
  <div role="document" class="modal-dialog" >
    <div class="modal-content" >
           <div class="modal-header">

             <h5 id="exampleModalLabel" class="modal-title">Plant Deposit</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>

      <div class="modal-body">
          <form id= "updateStatusForm" method="POST" enctype="multipart/form-data">
            
          
             
                  <div class="form-group">
                      <label style="font-size: 14px;">Deposit ID:</label>
                      <input type="hidden" name="txtId" id="txtID" value="0">
                       <input type="text" name="txtDepositReqID" id="intDepositReqID" class="form-control" disabled="">
                   </div>

            <div class="row">
                   <div class="col-sm-6" >
                       <label style="font-size: 14px;">Scientific Name:</label>
                       <input type="text" name="txtScientificName" id="strScientificName" class="form-control" disabled>
                   </div>
                     <div class="col-sm-6">
                      <label style="font-size: 14px;">Common Name:</label>
                      <input type="text" name="txtCommonName" id="strCommonName" class="form-control" disabled="">
                    </div>
            </div>

                     <div class="form-group">
                       <label style="font-size: 14px;">Full Locality:</label>
                       <textarea name="txtFullLocation" id="strFullLocation" class="form-control" disabled=""></textarea>
                     </div>
                  

            <div class="row">
                     <div class="col-sm-6">
                       <label style="font-size: 14px;">Date Collected:</label>
                       <input type="text" name="txtdDateCollected" id="dtDateCollected"  class="form-control" disabled="">
                      </div>

                     <div class="col-sm-6">
                       <label style="font-size: 14px;">Collector:</label>
                       <input type="text" name="txtCollector" id="strCollector"  class="form-control" disabled="">
                     </div>
            </div>
                    <div class="form-group">
                      <label style="font-size: 14px;">Description:</label>
                      <textarea name="txtDescription" class="form-control" rows="3" id="strPlantDesc" disabled=""></textarea>
                    </div>
              
                     <div class="modal-footer">
                      <input type="submit" id="btnSave" value="Proceed" class="btn btn-primary">
                     </div>
  
                 </form>
         </div>
             </div>
          </div>
         </div>
       </div>


<div id="SecondTab" class="tabcontent">
   <div class="card">
        <div class="card-body">
         <div class="table-responsive">
            <table class="table dataTable no-footer" id="manageDepositReqForDepositingtbl">
              <thead>
                <tr>
                  <th scope="col" width= "50%">Deposit ID</th>
                  <th scope="col" width= "50%">Collector's Name</th>
                  <th scope="col" width= "50%">Common Name</th>
                  <th scope="col" width= "50%">Full Location</th>
                  <th scope="col" width= "50%">Date of deposit</th>
                  <th scope="col" width= "50%">Status</th>
                  <th scope="col" width= "50%">Action</th>
                </tr>
              </thead>
<!--            <tbody tbody id="showdata1">
                </tbody> -->
            </table>
        </div>
      </div>
    </div>

 <div id="EmailCon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
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
              <input type="email" name="txtEmailCon" id="strEmailAdress" class="form-control col-sm-10" disabled>
            </div>
             
            <div class="form-group row pr-4">
                      <label class="col-sm-2">From:</label>
                      <input type="email" class="form-control col-sm-10" value= "WBHerbariumTA@gmail.com" disabled>
            </div>
            <br>
             <div class="form-group">
              <label>Deposit Request ID:</label>
              <input type ="hidden" name = "txtId" id = "txtID" value ="0">
              <input type="text" name="txtreqid" id="txtreqID" class="form-control" disabled>
            </div>
              <div class="form-group">
              <label>Date of Visit:</label>
              <input type ="hidden" name = "txtdate" id = "txtID" value ="0">
              <input type="text" name="ntxtdateid" id="txtdateID" class="form-control" disabled>
            </div>
            <div class="form-group">
               <label>Message:</label>
                <textarea  id="strCustomMessage" name="txtCustomMessage" class="form-control" placeholder="Type your message here.." ></textarea> 
            </div>

                  <div class="modal-footer">
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
               if (result.value) {

                                  $.ajax({
                                  type: 'ajax',
                                  method: 'post',
                                  url: '<?php echo base_url() ?>admin/depositsendMail',
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
                    
                    showAllDepositReqPending();
                    showAllDepositReqOkay();
                    showAllDepositReqAll();
                    $('#EmailCon').modal('hide');
                    document.getElementById("emailform").reset();
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

</div>


 <div id="ThirdTab" class="tabcontent">
  <div class="card">
        <div class="card-body">
         <div class="table-responsive">
            <table class="table dataTable no-footer" id="manageAllDeposittbl">
              <thead>
                <tr>
                  <th scope="col" width= "10%">Deposit ID</th>
                  <th scope="col" width= "10%">Collector's Name</th>
                  <th scope="col" width= "10%">Common Name</th>
                  <th scope="col" width= "10%">Date Collected</th>
                  <th scope="col" width= "10%">Full Location</th>
                  <th scope="col" width= "10%">Status</th>

                </tr>
              </thead>
<!--                 <tbody tbody id="showdata2">
                </tbody> -->
            </table>
        </div>
      </div>
    </div>
 </div>

 <div id="Confirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
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
                       <label style="font-size: 14px;">Deposit ID:</label>
                     </div>
                     <div class="col-sm-8">
                      <input type="hidden" name="txtId" id="txtID" value="0">
                       <input type="text" name="txtDepositReqID" id="intDepositReqID" class="form-control" disabled="">
                     </div>
            </div>
           <div class="form-group row">
                     <div class="col-sm-4">
                       <label style="font-size: 14px;">Collector's Name:</label>
                     </div>
                     <div class="col-sm-8">
                      <input type="hidden" name="txtId" id="txtID" value="0">
                       <input type="text" name="txtCollectorName" id="strFullName" class="form-control" disabled="">
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
                     <input type="submit" id="btnConfirm" value="Confirm" class="btn btn-primary">
                  </div>
          </form>
        </div>
      </div>
    </div>
  </div>

 </main>
      <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
 

 <script type="text/javascript">
    function showAllDepositReqPending()
    {
      $('#manageDepositReqPendingtbl').dataTable().fnClearTable();
      $('#manageDepositReqPendingtbl').dataTable().fnDraw();
      $('#manageDepositReqPendingtbl').dataTable().fnDestroy();
      $('#manageDepositReqPendingtbl').dataTable({
        "autoWidth":false,
         "processing": true,
         "serverSide": false,
         "sAjaxSource": "<?php echo base_url('admin/showAllDepositReqPending')?>",
         "deferLoading": 10,
         "bPaginate": true,
         "aaSorting": [],
         "fnInitComplete": function(){
                   
         }
     });
   }

    $(document).ready(function() {

    //show
    showAllDepositReqPending();

$('#btnSave').click(function(event){
      var data = $('#updateStatusForm').serialize();
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
          url: '<?php echo base_url() ?>admin/updateAcceptStatus',
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
                    $('#viewDepositReq').modal('hide');
                    document.getElementById("updateStatusForm").reset();
                  });
          },
          error: function(){
            alert('Could not update data');
          }
        });
      }
    })
    });


      $(document).on('click', '.view-depositReq', function(){
      var id = $(this).attr('data');
      $('#viewDepositReq').modal('show');
      $('#viewDepositReq').find('.modal-title').text('View Deposit Request');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/viewDepositReq',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txtCollector]').val(data.strFullName);
          $('input[name=txtDepositReqID]').val(data.intDepositReqID);
          $('input[name=txtScientificName').val(data.strScientificName);
          $('input[name=txtCommonName').val(data.strCommonName);
          $('input[name=txtdDateCollected]').val(data.dtDateCollected);
          $('textarea[name=txtFullLocation').val(data.strFullLocation);
          $('textarea[name=txtDescription]').val(data.strPlantDesc);
          $('input[name=txtId]').val(data.intDepositReqID)

        },
        error: function(){
          alert('Could not Edit Data');
        }
    });
    });
});
</script>

<script>
    function showAllDepositReqOkay(){

        $('#manageDepositReqForDepositingtbl').dataTable().fnClearTable();
        $('#manageDepositReqForDepositingtbl').dataTable().fnDraw();
        $('#manageDepositReqForDepositingtbl').dataTable().fnDestroy();
        $('#manageDepositReqForDepositingtbl').dataTable({
         "autoWidth":false,
         "processing": true,
         "serverSide": false,
         "sAjaxSource": "<?php echo base_url('admin/showAllDepositReqOkay')?>",
         "deferLoading": 10,
         "bPaginate": true,
         "aaSorting": [],
         "fnInitComplete": function(){
                   
         }
     });
   }

$(document).ready(function() {
    //show
    showAllDepositReqOkay();

    //Show Confirmation
    $(document).on('click', '.view-depositcon', function(){
      var id = $(this).attr('data');
      $('#Confirmation').modal('show');
      $('#Confirmation').find('.Confirmation').text('Confirmation');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/Confirmation',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txtCollectorName').val(data.strFullName);
          $('input[name=txtDepositReqID]').val(data.intDepositReqID);
          $('input[name=txtId]').val(data.intDepositReqID);
          $('input[name=txtStatus]').val(data.strStatus);


        },
        error: function(){
          alert('Could not Edit Data');
        }

    });
    });

     $(document).on('click', '.view-emailcon', function(event){
      var id = $(this).attr('data');
      $('#EmailCon').modal('show');
      $('#EmailCon').find('.EmailCon').text('Email');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/EmailCon',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('#strEmailAdress').val(data.strEmailAddress);
          $('#txtemail').val(data.strEmailAddress);
          $('input[name=txtId]').val(data.intDepositReqID);
          $('#txtreqID').val(data.intDepositReqID);
          $('input[name=txtdate]').val(data.dtAppointmentDate);
          $('#txtdateID').val(data.dtAppointmentDate);

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
          url: '<?php echo base_url() ?>admin/updateConfirmation',
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
                    $('#Confirmation').modal('hide');
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
       });
</script>
<script>
    function showAllDepositReqAll()
    {
      $('#manageAllDeposittbl').dataTable().fnClearTable();
      $('#manageAllDeposittbl').dataTable().fnDraw();
      $('#manageAllDeposittbl').dataTable().fnDestroy();
      $('#manageAllDeposittbl').dataTable({
        "autoWidth":false,
         "processing": true,
         "serverSide": false,
         "sAjaxSource": "<?php echo base_url('admin/showAllDepositReqAll')?>",
         "deferLoading": 10,
         "bPaginate": true,
         "aaSorting": [],
         "fnInitComplete": function(){
                   
         }
     });
   }

$(document).ready(function() {
    //show
    showAllDepositReqAll(); 


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
