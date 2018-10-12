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
            <li class="breadcrumb-item active">External Validation</li>
          </ul>
        </div>
</div>


<div class="tab" >
          <button id = "defaultOpen" class="tablinks" onclick="openCity(event, 'FirstTab')" style="color:white;">Pending</button>
          <button class="tablinks" onclick="openCity(event, 'SecondTab') " style="color:white;">Sent For Validation</button>
          <button class="tablinks" onclick="openCity(event, 'ThirdTab') " style="color:white;">All</button>
</div>



<div class="tabcontent" id="FirstTab">
       <div class="card">
        <div class="card-body">
         <div class="table-responsive">
            <table class="table dataTable no-footer" id="manageEVReqPendingtbl">
              <thead>
                <tr>
                  <th scope="col" width= "10%">Accession Number</th>
                  <th scope="col" width= "10%">Species Name</th>
                  <th scope="col" width= "10%">Collector Name</th>
                  <th scope="col" width= "10%">Date Deposited</th>
                  <th scope="col" width= "10%">Status</th>
                  <th scope="col" width= "10%">Action</th>
                </tr>
              </thead>
<!--                 <tbody tbody id="showdata">
                </tbody> -->
            </table>
        </div>
      </div>
    </div>
</div>
<div id="SecondTab" class="tabcontent">
     <div class="card">
        <div class="card-body">
         <div class="table-responsive">
            <table class="table dataTable no-footer" id="manageEVReqOkaytbl">
              <thead>
                <tr>
                  <th scope="col" width= "10%">Accession Number</th>
                  <th scope="col" width= "10%">Species Name</th>
                  <th scope="col" width= "10%">Collector Name</th>
                  <th scope="col" width= "10%">Date Deposited</th>
                  <th scope="col" width= "10%">Status</th>
                  <th scope="col" width= "10%">Action</th>
                </tr>
              </thead>
            </table>
<!--               <tbody tbody id="showdata1">
            </tbody> -->
        </div>
      </div>
    </div>
</div>

<div id="ThirdTab" class="tabcontent">   
       <div class="card">
        <div class="card-body">
         <div class="table-responsive">
            <table class="table dataTable no-footer" id="manageEVReqAlltbl">
              <thead>
                <tr>
                  <th scope="col" width= "10%">Accession Number</th>
                  <th scope="col" width= "10%">Species Name</th>
                  <th scope="col" width= "10%">Collector Name</th>
                  <th scope="col" width= "10%">Date Deposited</th>
                  <th scope="col" width= "10%">Status</th>
                </tr>
              </thead>
            </table>
        </div>
      </div>
    </div>
</div>

   <!-- Modal-->
 <div id="viewEV" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-justify hide" data-backdrop="static" data-keyboard="false">
  <div role="document" class="modal-dialog modal-lg" >
    <div class="modal-content" >
           <div class="modal-header">

             <h5 id="exampleModalLabel" class="modal-title">External Validation</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>

      <div class="modal-body">
        <form id="viewEVForm"  method="post" enctype="multipart/form-data">
              <div class = "row">
                <div class="col-sm-6">
                  <label style="font-size: 14px;">Select photos of the specimen <span style="color: red"> *</span></label>
                  <input type="file" name="userfile[]" accept=".jpeg,.jpg,.png" multiple id='files'>
                </div>
              </div>
<hr>
              <div class = "row">
                  <div class="col-sm-6" >
                        <label style="font-size: 14px;">Accession Number:</label>
                        <input type="hidden" name="txtId" id="txtID" value="0">
                        <input type="text" name="txtAccNum" id="strAccessionNumber" class="form-control" disabled="">
                  </div>
                  <div class="col-sm-6" >
                        <label style="font-size: 14px;">Family Name:</label>
                        <input type="text" name="txtFamilyName" id="strFamilyName" class="form-control" disabled>
                  </div>
              </div>
              <div class = "row"  style="margin-top: 5px">
                  <div class="col-sm-6">
                       <label style="font-size: 14px;">Scientific Name:</label>
                      <input type="text" name="txtScientificName" id="strScientificName" class="form-control" disabled="">
                  </div>
                  <div class="col-sm-6" >
                       <label style="font-size: 14px;">Common Name:</label>
                       <input type="text" name="txtCommonName" id="strCommonName" class="form-control" disabled="">
                   </div>
              </div>
                   <div class="form-group"  style="margin-top: 5px">
                       <label style="font-size: 14px;">Full Locality:</label>
                       <!-- <input type="text" name="txtFullLocality" class="form-control" id="strFullLocality" disabled=""> -->
                       <textarea type="text" name="txtFullLocality" class="form-control" id="strFullLocality" disabled=""></textarea>
                  </div>
              <div class = "row"  style="margin-top: 5px">
                  <div class="col-sm-6" >
                       <label style="font-size: 14px;">Collector:</label>
                       <input type="text" name="txtCollector" id="strCollector"  class="form-control" disabled="">
                  </div>
                     <div class="col-sm-6" >
                       <label style="font-size: 14px;">Staff:</label>
                       <input type="text" name="txtStaff" class="form-control" id="strStaff" disabled="">
                     </div>
              </div>
              <div class = "row"  style="margin-top: 5px">
                    <div class="col-sm-6" >
                       <label style="font-size: 14px;">Date Collected:</label>
                       <input type="text" name="txtdDateCollected" class="form-control" id="dtDateCollected" disabled="">
                     </div>
                    <div class="col-sm-6" >
                       <label style="font-size: 14px;">Date Deposited:</label>
                       <input type="text" name="txtDateDeposited" class="form-control" id="dtDateDeposited" disabled="">
                     </div>
              </div>
                    <div class="form-group"  style="margin-top: 5px">
                       <label style="font-size: 14px;">Description:</label>
                       <textarea name="txtDescription" class="form-control" id="strDescription" disabled=""></textarea> 
                     </div>
                    <hr>

              <div class = "row">
                <div class="col-sm-6">
                  <label style="font-size: 14px;">Select where to send the Specimen <span style="color: red"> *</span></label>
                 <select name = 'externalvalidator' id='externalvalidators' class='form-control' required>
                  <option value=''>Select External Validator</option>
                 </select>
                </div>
              </div>

                   <div class="form-group">
                     <div class="modal-footer">
                    <button style="margin-left: 300px" type="button" data-dismiss="modal" aria-label="Close" class="btn btn-secondary"> Cancel</button>
                     <input type="submit" id="btnSave" value="Send" class="btn btn-primary" style="margin-left: 300px">
                    </div>
                   </div>

            </form>
            <script type="text/javascript">
              
            </script>
          </div>
          </div>
        </div>
      </div>

 <div id="EVEmailCon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
    <div role="document" class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="exampleModalLabel" class="modal-title">Email For Follow Up</h5>
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
        </div>

        <div class="modal-body">
          <form id= "EVemailform" method="POST" enctype="multipart/form-data">
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
             <!-- <div class="form-group">
              <label>Deposit Request ID:</label>
              <input type ="hidden" name = "txtId" id = "txtID" value ="0">
              <input type="text" name="txtreqid" id="txtreqID" class="form-control" disabled>
            </div>
              <div class="form-group">
              <label>Date of Visit:</label>
              <input type ="hidden" name = "txtdate" id = "txtID" value ="0">
              <input type="text" name="ntxtdateid" id="txtdateID" class="form-control" disabled>
            </div> -->
            <div class="form-group">
               <label>Message:</label>
                <textarea  id="strCustomMessage" name="txtCustomMessage" class="form-control" placeholder="Type your message here.." ></textarea> 
            </div>

                  <div class="modal-footer">
                    <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-secondary"> Cancel</button>
                     <input type="submit" id="btnSend" value="Send" class="btn btn-primary">
                     <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
                     <script type="text/javascript">
                            $('#btnSend').click(function(event){
                                var data = $('#EVemailform').serialize();
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
                                  url: '<?php echo base_url() ?>admin/EVSendMail',
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
                    
                    showAllExValidators();
                    showExValOkay();
                    showExValAll();
                    $('#EVEmailCon').modal('hide');
                    document.getElementById("EVemailform").reset();
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
<div id="EVConfirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
    <div role="document" class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="exampleModalLabel" class="modal-title">Confirmation</h5>
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
        </div>

        <div class="modal-body">
          <form id= "EVConfirmForm" method="POST" enctype="multipart/form-data">
            <div class="form-group row">
                     <div class="col-sm-4">
                       <label style="font-size: 14px;">Plant Deposit ID:</label>
                     </div>
                     <div class="col-sm-8">
                      <input type="hidden" name="txtId" id="txtID" value="0">
                       <input type="text" name="txtPlantDepositReq" id="intPlantDepositID " class="form-control" disabled="">
                     </div>
                     <div class="col-sm-4">
                       <label style="font-size: 14px;">Validator Name:</label>
                     </div>
                       <div class="col-sm-8">
                      <input type="hidden" name="txtId2" id="txtID" value="0">
                       <input type="text" name="txtvalidatorname" id="txtvalidatornames " class="form-control" disabled="">
                     </div>
            </div>
           <!-- <div class="form-group row">
                     <div class="col-sm-4">
                       <label style="font-size: 14px;">Collector's Name:</label>
                     </div>
                     <div class="col-sm-8">
                      <input type="hidden" name="txtId" id="txtID" value="0">
                       <input type="text" name="txtCollectorName" id="strFullName" class="form-control" disabled="">
                     </div>
            </div> -->
            <div class="form-group row">
                     <div class="col-sm-4">
                       <label style="font-size: 14px;">Status:</label>
                     </div>
                     <div class="col-sm-8">
                     <select name="txtStatus" id="strStatus"  class="form-control">
                        <option value="Verified">Verified</option>
                        <option value="Not Verified">Not Verified</option>
                      </select>
                     </div>
            </div>
                    
                  <div class="modal-footer">
                    <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-secondary"> Cancel</button>
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
    function showExValPending(){

      $('#manageEVReqPendingtbl').dataTable().fnClearTable();
      $('#manageEVReqPendingtbl').dataTable().fnDraw();
      $('#manageEVReqPendingtbl').dataTable().fnDestroy();
      $('#manageEVReqPendingtbl').dataTable({
        "autoWidth":false,
         "processing": true,
         "serverSide": false,
         "sAjaxSource": "<?php echo base_url('admin/showExValPending')?>",
         "deferLoading": 10,
         "bPaginate": true,
         "aaSorting": [],
         "fnInitComplete": function(){
                   
         }
     });
   }

 $(document).ready(function() {
    //show
    showExValPending();

showAllExValidators();

     function showAllExValidators(){
     $.ajax({
       type: 'ajax',
       url: '<?php echo base_url() ?>admin/showAllExValidators',
       async: false,
       dataType: 'json',
       success: function(data){
         var html = '';
         var i;
         for(i=0; i<data.length; i++){
           html +='<option value='+data[i].intValidatorID+'|'+data[i].strEmailAddress+'>'+data[i].strFullName+' from '+data[i].strInstitution+'</option>';
         }
         $('#externalvalidators').append(html);
       },
       error: function(){
         alert('Could not get Data from Database');
       }
     });
   };
    });
  // action="<?php echo base_url(); ?>admin/SendtoExValidator"
              $('#viewEVForm').on('submit',function(event){
              var data = $('#viewEVForm').serialize();
              if($('#files').val()!=''){
              if($('#externalvalidators').val()!=''){
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
                url: '<?php echo base_url() ?>admin/SendtoExValidator',
                data: new FormData(this),
                processData: false,
                contentType: false,
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
                    
                    showExValPending();
                    showExValOkay();
                    showExValAll();
                    $('#viewEV').modal('hide');
                    document.getElementById("viewEVForm").reset();
                         });
                        }
                       });
                      }
                    });
                   
  }else{
    event.preventDefault();
          swal({
            type: 'error',
            title: 'Incomplete input!',
            text: 'Please select a validator.'
          });
  }
}else{
    event.preventDefault();
          swal({
            type: 'error',
            title: 'Incomplete input!',
            text: 'Please select a File.'
          });
  }
   });          

$(document).on('click', '.view-EVPending', function(){
      var id = $(this).attr('data');
      $('#viewEV').modal('show');
      $('#viewEV').find('.modal-title').text('View Details');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/viewEV',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){

          $('input[name=txtAccNum').val(data.strAccessionNumber);
          $('input[name=txtFamilyName]').val(data.strFamilyName);
          $('input[name=txtScientificName]').val(data.strScientificName);
          $('input[name=txtCommonName]').val(data.strCommonName);
          $('input[name=txtCollector').val(data.strCollector);
          $('textarea[name=txtFullLocality]').val(data.strFullLocality);
          $('input[name=txtStaff]').val(data.strStaff);      
          $('input[name=txtdDateCollected').val(data.dateCollected);
          $('input[name=txtDateDeposited]').val(data.dateDeposited);
          $('textarea[name=txtDescription]').val(data.strDescription);
          $('input[name=txtId]').val(data.intPlantDepositID)
   },
        error: function(){
          alert('Could not Edit Data');
        }

    });
   });

</script>


<script type="text/javascript">
    function showExValOkay(){

      $('#manageEVReqOkaytbl').dataTable().fnClearTable();
      $('#manageEVReqOkaytbl').dataTable().fnDraw();
      $('#manageEVReqOkaytbl').dataTable().fnDestroy();
      $('#manageEVReqOkaytbl').dataTable({
        "autoWidth":false,
         "processing": true,
         "serverSide": false,
         "sAjaxSource": "<?php echo base_url('admin/showExValOkay')?>",
         "deferLoading": 10,
         "bPaginate": true,
         "aaSorting": [],
         "fnInitComplete": function(){
                   
         }
     });
   }

 $(document).ready(function() {
    //show
    showExValOkay();
});
       $(document).on('click', '.view-EVConfirmation', function(){
      var id = $(this).attr('data');
      $('#EVConfirmation').modal('show');
      $('#EVConfirmation').find('.modal-title').text('Confirmation');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/EVConfirmation',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          // $('input[name=txtCollectorName').val(data.strFullName);
          $('input[name=txtPlantDepositReq]').val(data.intDepositID);
          $('input[name=txtId]').val(data.intDepositID);
          $('input[name=txtStatus]').val(data.strStatus);
          $('input[name=txtvalidatorname]').val(data.strFullName);
          $('input[name=txtId2]').val(data.intValidatorID);

        },
        error: function(){
          alert('Could not Edit Data');
        }

    });
    });

      //  $(document).on('click', '.view-EVemailcon', function(){
      //   var id = $(this).attr('data');
      //   $('#EVEmailCon').modal('show');
      //   $('#EVEmailCon').find('.modal-title').text('Email');
      //   $.ajax({
      //     type: 'ajax',
      //     method: 'get',
      //     url: '<?php echo base_url() ?>admin/EVEmailCon',
      //     data: {id: id},
      //     async: false,
      //     dataType: 'json',
      //     success: function(data){
      //       $('#strEmailAdress').val(data.strEmailAddress);
      //       $('#txtemail').val(data.strEmailAddress);
      //       $('input[name=txtId]').val(data.intDepositID);
      //       $('#txtreqID').val(data.intDepositID);

      //     },
      //     error: function(){
      //       alert('Could not Edit Data');
      //     }

      // });
      // });

$('#btnConfirm').click(function(event){
      var data = $('#EVConfirmForm').serialize();
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
          url: '<?php echo base_url() ?>admin/updateEVConfirmation',
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
                    
                    showAllExValidators();
                    showExValOkay();
                    showExValAll();
                    $('#EVConfirmation').modal('hide');
                    document.getElementById("EVConfirmForm").reset();
                  });
          },
          error: function(){
            alert('Could not update data');
          }
        });
      }
    })
    });

</script>


<script type="text/javascript">
    function showExValAll(){

      $('#manageEVReqAlltbl').dataTable().fnClearTable();
      $('#manageEVReqAlltbl').dataTable().fnDraw();
      $('#manageEVReqAlltbl').dataTable().fnDestroy();
      $('#manageEVReqAlltbl').dataTable({
        "autoWidth":false,
         "processing": true,
         "serverSide": false,
         "sAjaxSource": "<?php echo base_url('admin/showExValAll')?>",
         "deferLoading": 10,
         "bPaginate": true,
         "aaSorting": [],
         "fnInitComplete": function(){
                   
         }
     });
   }

 $(document).ready(function() {
    //show
    showExValAll();
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
