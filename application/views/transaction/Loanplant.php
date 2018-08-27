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
            <li class="breadcrumb-item active">Loan Plant</li>
          </ul>
        </div>
      </div>


        <div class="tab" >
          <button id = "defaultOpen" class="tablinks" onclick="openCity(event, 'FirstTab')" style="color:white;">Pending</button>
          <button class="tablinks" onclick="openCity(event, 'SecondTab') " style="color:white;">For Claiming</button>
          <button class="tablinks" onclick="openCity(event, 'ThirdTab') " style="color:white;">All</button>
        </div>

<div class="tabcontent" id="FirstTab">   

   <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Loan ID</th>
                  <th>Borrower Name</th>
                  <th>Purpose</th>
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
      <div id="viewLoanPlant" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
        <div role="document" class="modal-dialog modal-lg">
          <div class="modal-content" >
            <div class="modal-header">

              <h5 id="exampleModalLabel" class="modal-title">Loan Plant</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()">
               <span aria-hidden="true">×</span>
               </button>
            </div>
          <div class="modal-body">
          <div class="row">
            <div class="col-md-10" style="margin-left: auto; margin-right: auto;">

              <form id= "updateStatusForm" method="POST" enctype="multipart/form-data"class="form-horizontal">
                <div class="form-group row">
                  <div class="col-sm-4">
                    <label style="font-size: 14px;">Loan Request ID:</label>
                  </div>
                  <div class="col-sm-8">
                    <input type='hidden' name='txtId' id="txtID" value="">
                    <input type="text" name="txtLoanreqID" id="intLoanReqID" class="form-control" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-4">
                    <label style="font-size: 14px;">Borrower's Name:</label>
                  </div>
                  <div class="col-sm-8">
                    <input type="text" name="txtBorrowerName" id="strFullName" class="form-control" disabled>
                  </div>
                </div>

                 <div class="form-group row">
                  <div class="col-sm-4">
                    <label style="font-size: 14px;">Purpose:</label>
                  </div>
                  <div class="col-sm-8">
                   <textarea class="form-control" rows="3" name="txtPurpose" id="strPurpose" disabled></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-4">
                    <label style="font-size: 14px;margin-top: 10px">Specimens:</label>
                  </div>
                  <div class="col-sm-8">

                             <div class="table-responsive">
                              <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th>Scientific Name</th>

                                  </tr>
                                 </thead>
                                <tbody tbody id="showplants">
                                </tbody>
                              </table>
                             </div>
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
                  <th>Loan ID</th>
                  <th>Borrower Name</th>

                  <th>Purpose</th>
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

 <div id="EmailCon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
    <div role="document" class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="exampleModalLabel" class="modal-title">Email</h5>
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
        </div>

        <div class="modal-body">
          <form id= "emailform" method="POST" enctype="multipart/form-data">
            <div class="form-group row pr-4">
              <label class="col-sm-2">To:</label>
              <input type ="hidden" name = "txtEmail" id = "txtemail" value ="0">
              <input type="email" name="txtEmailCon" id="strEmailAddress" class="form-control col-sm-10" disabled>
            </div>
              <div class="form-group row pr-4">
              <label class="col-sm-2">Loan Request ID:</label>
              <input type ="hidden" name = "txtId" id = "txtID" value ="0">
              <input type="text" name="txtreqid" id="txtreqID" class="form-control col-sm-10" disabled>
            </div>
            <div class="form-group row pr-4">
                      <label class="col-sm-2">From:</label>
                      <input type="email" class="form-control col-sm-10" value="WBHerbariumTA@gmail.com" disabled>
                    </div>

                  <div class="modal-footer">
                     <input type="submit" id="btnSend" value="Send" class="btn btn-primary">
                     <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
                     <script type="text/javascript">
                            $('#btnSend').click(function(){
                                var data = $('#emailform').serialize();
                                alert(data)
                                  $.ajax({
                                  type: 'ajax',
                                  method: 'post',
                                  url: '<?php echo base_url() ?>admin/loansendMail',
                                  data: data,
                                  async: false,
                                  dataType: 'json',
                                  success: function(){
                                  },
                                  error: function(){
                                    alert('Email Sent');
                                  }
                                });
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
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Loan ID</th>
                  <th>Borrower Name</th>

                  <th>Purpose</th>
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
 <div id="LoanConfirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
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
                       <label style="font-size: 14px;">Loan ID:</label>
                     </div>
                     <div class="col-sm-8">
                      <input type="hidden" name="txtId" id="txtID" value="0">
                       <input type="text" name="txtLoanReqID" id="intLoanReqID" class="form-control" disabled="">
                     </div>
            </div>
           <div class="form-group row">
                     <div class="col-sm-4">
                       <label style="font-size: 14px;">Borrower's Name:</label>
                     </div>
                     <div class="col-sm-8">
                      
                       <input type="text" name="txtBorrowerName" id="strFullName" class="form-control" disabled="">
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
    showLoanReqPending();


    function showLoanReqPending(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showLoanReqPending',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].intLoanReqID+'</td>'+
                  '<td>'+data[i].strFullName+'</td>'+
                  '<td>'+data[i].strPurpose+'</td>'+
                  '<td>'+data[i].strStatus+'</td>'+
                  '<td>'+
                    '<a href="javascript:;" class="btn btn-primary loanreq-edit" data="'+data[i].intLoanReqID+'">View</a>'+
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

//table inside view
    $('#showdata').on('click', '.loanreq-edit', function(){
      var id = $(this).attr('data');
      $('#myModal').modal('show');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/showloanlist',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].strScientificName+'</td>'+
                  '</tr>';
          }
          $('#showplants').html(html);
        },
        error: function(){
          alert('Could not Edit Data');
        }

    });
      });


$('#showdata').on('click', '.loanreq-edit', function(){
      var id = $(this).attr('data');
      $('#viewLoanPlant').modal('show');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editLoanReq',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('#intLoanReqID').val(data.intLoanReqID);
          $('#strFullName').val(data.strFullName);
          $('#strPurpose').val(data.strPurpose);
          $('#txtID').val(data.intLoanReqID);
        },
        error: function(){
          alert('Could not Edit Data');
        }

    });

  });
    });

     $('#btnSave').click(function(){
      var data = $('#updateStatusForm').serialize();

        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/updateLoanStatus',
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

  
    showLoanReqOkay();


    function showLoanReqOkay(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showLoanReqOkay',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].intLoanReqID+'</td>'+
                  '<td>'+data[i].strFullName+'</td>'+
                  '<td>'+data[i].strPurpose+'</td>'+
                  '<td>'+data[i].strStatus+'</td>'+
                  '<td>'+
                  '<a href="javascript:;"   class="btn btn-primary view-emailcon " data="'+data[i].intLoanReqID+'">Email</a>'+
                  '<a href="javascript:;" style="margin-left: 10px" class="btn btn-primary view-loancon" data="'+data[i].intLoanReqID+'">Confirm</a>'+
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

      $('#showdata1').on('click', '.view-loancon', function(){
      var id = $(this).attr('data');
      $('#LoanConfirmation').modal('show');
      $('#LoanConfirmation').find('.Confirmation').text('Confirmation');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/LoanConfirmation',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txtBorrowerName').val(data.strFullName);
          $('input[name=txtLoanReqID]').val(data.intLoanReqID);
          $('input[name=txtLoanId]').val(data.intLoanReqID);
          $('input[name=txtId]').val(data.intLoanReqID);
          $('input[name=txtStatus]').val(data.strStatus);


        },
        error: function(){
          alert('Could not Edit Data');
        }

    });
    });

     $('#showdata1').on('click', '.view-emailcon', function(){
      var id = $(this).attr('data');
      $('#EmailCon').modal('show');
      $('#EmailCon').find('.EmailCon').text('Email');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/LoanEmailCon',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('#strEmailAddress').val(data.strEmailAddress);
          $('#txtemail').val(data.strEmailAddress);
          $('input[name=txtId]').val(data.intLoanReqID);
          $('#txtreqID').val(data.intLoanReqID);
        },
        error: function(){
          alert('Could not Edit Data');
        }

    });
    });
</script>

<script type="text/javascript">
        $(function(){

  
    showLoanReqAll();


    function showLoanReqAll(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showLoanReqAll',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].intLoanReqID+'</td>'+
                  '<td>'+data[i].strFullName+'</td>'+

                  '<td>'+data[i].strPurpose+'</td>'+
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
  
   $('#btnConfirm').click(function(){
      var data = $('#ConfirmForm').serialize();

        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/updateLoanConfirmation',
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
