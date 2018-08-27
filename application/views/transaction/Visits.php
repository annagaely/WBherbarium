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
  <button class="tablinks" onclick="openCity(event, 'ThirdTab') " style="color:white;">All</button>
</div>

<div class="tabcontent" id="FirstTab">
  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Visit ID</th>
              <th>Visitor's Name</th>
                 <th>Visit Date</th>
                  <th>Visit Description</th>
                  <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
            <tbody tbody id="showdata">    
            </tbody>
        </table>
      </div>
    </div>
  </div>

         <!-- Modal-->
     <div id="viewVisitReq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-justify hide" data-backdrop="static" data-keyboard="false">
       <div role="document" class="modal-dialog modal-lg" >
         <div class="modal-content" >
           <div class="modal-header">

             <h5 id="exampleModalLabel" class="modal-title">View Visit Details</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()">
               <span aria-hidden="true">×</span>
             </button>
           </div>

          <div class="modal-body">
             <div class="row">
              <div class="col-md-6" style="margin-left: auto; margin-right: auto;">
                 <form id= "updateVisitStatusForm" method="POST" enctype="multipart/form-data"class="form-horizontal">
                  <div class="form-group row">
                     <div class="col-sm-4">
                       <label style="font-size: 14px;">Visit ID:</label>
                     </div>
                     <div class="col-sm-8">
                      <input type="hidden" name="txtId" id="txtID" value="0">
                       <input type="text" name="txtAppointmentID" id="intAppointmentID" class="form-control" disabled="">
                     </div>
                   </div>
                  <div class="form-group row">
                     <div class="col-sm-4">
                       <label style="font-size: 14px;">Visitor's Name:</label>
                     </div>
                     <div class="col-sm-8">
                       <input type="text" name="txtVisitorName" id="strFullame" class="form-control" disabled>
                     </div>
                   </div>
                  <div class="form-group row">
                     <div class="col-sm-4">
                       <label style="font-size: 14px;">Visit Date:</label>
                     </div>
                    <div class="col-sm-8">
                      <input type="text" name="txtVisitDate" id="dtAppointmentDate" class="form-control" disabled="">
                     </div>
                   </div>

                    <div class="form-group row">
                     <div class="col-sm-4">
                       <label style="font-size: 14px;">Visit Purpose:</label>
                     </div>
                     <div class="col-sm-8">
                       <input type="text" name="txtVisitPurpose" id="strVisitDescription" class="form-control" disabled="">
                     </div>
                   </div>
                 <div class="form-group row">
                  <div class="col-sm-4">
                    <label style="font-size: 14px;">Status:</label>
                  </div>
                  <div class="col-sm-8">
                   <select name="txtStatus" id="strStatus"  class="form-control">
                        <option value="Approved">Approve</option>
                        <option value="Reject">Reject</option>
                   </select>
                  </div>
                </div>
                 </form>
               </div>
             </div>
          </div>
          <div class="modal-footer">
             <input type="submit" value="Save" id='btnSave' class="btn btn-primary" style="margin-left: 300px">
          </div>
         </div>
       </div>
     </div>
</div>

<div id="SecondTab" class="tabcontent">
     <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Visit ID</th>
                  <th>Visitor's Name</th>
                 <th>Visit Date</th>
                  <th>Visit Description</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody tbody id="showdata1">    
            </tbody>
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
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
        </div>

        <div class="modal-body">
          <form id= "addAccountForm" method="POST" enctype="multipart/form-data">
            <div class="form-group row pr-4">
              <label class="col-sm-2">To:</label>
              <input type="email" name="txtEmailCon" id="strEmailAddress" class="form-control col-sm-10" disabled>
            </div>
            <div class="form-group row pr-4">
                      <label class="col-sm-2">From:</label>
                      <input type="email" class="form-control col-sm-10" value="WBHerbariumTA@gmail.com" disabled>
                    </div>
                    <div class="form-group pr-2">
                      <label>Message:</label>
                      <textarea class="form-control"></textarea>
                    </div>

                  <div class="modal-footer">
                     <input type="submit" id="btnSend" value="Send" class="btn btn-primary">
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
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Visit ID</th>
                  <th>Visitor's Name</th>
                  <th>Visit Date</th>
                  <th>Visit Description</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody tbody id="showdata2">    
            </tbody>
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
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
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
                     <input type="submit" id="btnConfirm" value="Confirm" class="btn btn-primary">
                  </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">
    
    $(function(){

    //show
    showAllAppointmentPending();
    function showAllAppointmentPending(){

      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showAllAppointmentPending',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].intAppointmentID+'</td>'+
                  '<td>'+data[i].strFullName+'</td>'+
                  '<td>'+data[i].dtAppointmentDate+'</td>'+   
                  '<td>'+data[i].strVisitDescription+'</td>'+
                  '<td>'+data[i].strStatus+'</td>'+
                  '<td>'+
                    '<a href="javascript:;" data-target="#viewVisitReq" data-toggle="modal" class="btn btn-primary view-appointment" data="'+data[i].intAppointmentID+'">View</a>'+
     
                  '</td>'+
                  '</tr>';
          }
          $('#showdata').html(html);
        },
        error: function(){
          alert('Could not get Data from Database');
        }
      });
    }
        });

  $('#btnSave').click(function(){

      var data = $('#updateVisitStatusForm').serialize();
      alert(data);
        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/updateVisitStatus',
          data: data,
          async: false,
          dataType: 'json',
          success: function(data){
         
            if(data=true){
              location.reload();
            }else{
              alert('Error');
            }
          },
          error: function(){
            alert('Could not update data');
          }
        });
    });

</script>

    <script type="text/javascript">
    
    $(function(){

    //show
    showAllAppointmentExpect();
    function showAllAppointmentExpect(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showAllAppointmentExpect',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].intAppointmentID+'</td>'+
                  '<td>'+data[i].strFullName+'</td>'+
                  '<td>'+data[i].dtAppointmentDate+'</td>'+
                  '<td>'+data[i].strVisitDescription+'</td>'+
                  '<td>'+data[i].strStatus+'</td>'+

                  '<td>'+
                   '<a href="javascript:;" class="btn btn-primary view-emailcon " data="'+data[i].intAppointmentID+'">Email</a>'+
                  '<a href="javascript:;" style="margin-left: 10px" class="btn btn-primary view-appcon" data="'+data[i].intAppointmentID
                  +'">Confirm</a>'+
                  '</td>'+
                  '</tr>';
          }
          $('#showdata1').html(html);
        },
        error: function(){
          alert('Could not get Data from Database');
        }
      });
    }
  });

     $('#showdata1').on('click', '.view-appcon', function(){
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
          $('input[name=txtVisitorName]').val(data.strFullName);
          $('input[name=txtStatus]').val(data.strStatus);


        },
        error: function(){
          alert('Could not Edit Data');
        }

    });
    });

     $('#showdata1').on('click', '.view-emailcon', function(){
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

        },
        error: function(){
          alert('Could not Edit Data');
        }

    });
    });
</script>

   <script type="text/javascript">
    
    $(function(){

    //show
    showAllAppointmentAll();
    function showAllAppointmentAll(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showAllAppointmentAll',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].intAppointmentID+'</td>'+
                  '<td>'+data[i].strFullName+'</td>'+
                  '<td>'+data[i].dtAppointmentDate+'</td>'+
                  
                  '<td>'+data[i].strVisitDescription+'</td>'+
                  '<td>'+data[i].strStatus+'</td>'+
                  '</tr>';
          }
          $('#showdata2').html(html);
        },
        error: function(){
          alert('Could not get Data from Database');
        }
      });
    }
  });
</script>
<script type="text/javascript">
      $('#showdata').on('click', '.view-appointment', function(){
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
          $('input[name=txtVisitDate').val(data.dtAppointmentDate);
          $('input[name=txtVisitPurpose').val(data.strVisitDescription);
          $('input[name=txtId').val(data.intAppointmentID);

        },
        error: function(){
          alert('Could not Edit Data');
        }

    });
    });
</script>
<script type="text/javascript">
  
   $('#btnConfirm').click(function(){
      var data = $('#ConfirmForm').serialize();

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
          },
          error: function(){
            alert('Could not update data');
          }
        });
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


     