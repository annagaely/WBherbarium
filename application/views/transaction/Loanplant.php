
        <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Maintenance/Dashboard" >Home</a></li>
            <li class="breadcrumb-item">Transaction</li>
            <li class="breadcrumb-item">Loan Plant</li>
          </ul>
        </div>
      </div>

       <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Loan ID</th>
                  <th>Borrower Name</th>
                  <th>Duration</th>
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

    <!-- FOR DESiGN PURPOSES ONLY-->
        <!-- Modal-->
        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
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
<<<<<<< HEAD
                      <input type='hidden' name='txtId' id="txtID" value=0>
=======
                      <input type='hidden' name='txtId' id="txtID" value="">
>>>>>>> 84a39538115f2af728d99d991f8f3fb3777f7067
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
                      <label style="font-size: 14px;">Duration:</label>
                    </div>
                    <div class="col-sm-8">
                      <input type="text" name="txtDuration" id="strDuration" class="form-control" disabled>
                    </div>
                  </div>
                   <div class="form-group row">
                    <div class="col-sm-4">
                      <label style="font-size: 14px;">Purpose:</label>
                    </div>
                    <div class="col-sm-8">
<<<<<<< HEAD
                     <textarea class="form-control" rows="3" name="txtPurpose" id="strPurpose" disabled ></textarea>
=======
                     <textarea class="form-control" rows="3" name="txtPurpose" id="strPurpose" disabled></textarea>
>>>>>>> 84a39538115f2af728d99d991f8f3fb3777f7067
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-4">
                      <label style="font-size: 14px;">Specimens:</label>
                    </div>
                      <div class="col-sm-8">
                     <!--      <div class="card"> -->
                           <!--  <div class="card-body"> -->
                               <div class="table-responsive">
                                <table class="table table-striped">
                                  <thead>
                                    <tr>
                                      <th>Family Name</th>
                                      <th>Genus Name</th>
                                      <th>Species Name</th>
                                    </tr>
                                   </thead>
                                  <tbody tbody id="showplants">    
                                  </tbody>
                                </table>
                              </div>
                       </div>
                  </div>
<<<<<<< HEAD
                     <div class="form-group row">
                     <div class="col-sm-4">
                       <label style="font-size: 14px;margin-top: 0px">Status:</label>
                     </div>
                     <div class="col-sm-8">
=======
                      <div class="form-group row">
                      <div class="col-sm-4">
                       <label style="font-size: 14px;">Status:</label>
                     </div>
                     <div class="col-sm-4">
>>>>>>> 84a39538115f2af728d99d991f8f3fb3777f7067
                      <select name="txtStatus" id="strStatus"  class="form-control">
                        <option value="Accepted">Accept</option>
                        <option value="Rejected">Reject</option>
                      </select>
                     </div>
                   </div>
                </form>
              </div>
            </div>
          </div>
<<<<<<< HEAD
                <div class="modal-footer" style="margin-top: 0px">      
                    <input type="submit" value="Save" id='btnAccept' class="btn btn-primary">
=======

                <div class="modal-footer">      
                <input type="submit" value="Save" id='btnSave' class="btn btn-primary" style="margin-left: 200px">
                    <!--<input type="reject" value="Reject" id='btnReject' class="btn btn-primary">-->
>>>>>>> 84a39538115f2af728d99d991f8f3fb3777f7067
                </div>
            </div>
           </div>
          </div>
<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">
    $(function(){

      //show
    showLoanReq();


    function showLoanReq(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showLoanReq',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].intLoanReqID+'</td>'+
                  '<td>'+data[i].strFullName+'</td>'+
                  '<td>'+data[i].strDuration+'</td>'+
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

$('#showdata').on('click', '.loanreq-edit', function(){
      var id = $(this).attr('data');
      $('#myModal').modal('show');
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
          $('#strDuration').val(data.strDuration);
          $('#strPurpose').val(data.strPurpose);
          $('#txtID').val(data.intLoanReqID);
  

          // $('#strSpecimen').val(data.strFamilyName);
        },
        error: function(){
          alert('Could not Edit Data');
        }

    });

  });

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
                  '<td>'+data[i].strFamilyName+'</td>'+
                  '<td>'+data[i].strGenusName+'</td>'+
                  '<td>'+data[i].strSpeciesName+'</td>'+
                  '</tr>';
          }
          $('#showplants').html(html);
        },
        error: function(){
          alert('Could not Edit Data');
        }

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
          success: function(response){
            if(response==true){
             // $('#viewDepositReq').modal('hide');
            //  $('#updateStatusForm')[0].reset();
             // if(response.type=='add'){
             //   var type = 'added'
             //// }else if(response.type=='update'){
             //   var type ="updated"
            //  }
                 alert('Request Sent');
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







    });
</script>