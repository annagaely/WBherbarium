
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
                <form class="form-horizontal">
                  <div class="form-group row">
                    <div class="col-sm-4">
                      <label style="font-size: 14px;">Loan Request ID:</label>
                    </div>
                    <div class="col-sm-8">
                      <input type='hidden' name='txtId' id="txtID" value=0>
                      <input type="text" name="txtloanreqid" id="loanreqid" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-4">
                      <label style="font-size: 14px;">Borrower's Name:</label>
                    </div>
                    <div class="col-sm-8">
                      <input type="text" name="txtborrowername" id="borrowername" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-4">
                      <label style="font-size: 14px;">Duration:</label>
                    </div>
                    <div class="col-sm-8">
                      <input type="text" name="txtduration" id="duration" class="form-control" >
                    </div>
                  </div>
                   <div class="form-group row">
                    <div class="col-sm-4">
                      <label style="font-size: 14px;">Purpose:</label>
                    </div>
                    <div class="col-sm-8">
                     <textarea class="form-control" rows="3" id="purpose" ></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-4">
                      <label style="font-size: 14px;">Specimens:</label>
                    </div>
                    <div class="col-sm-8">
                     <textarea name="txtSpecimen" id="strSpecimen" class="form-control" rows="5" id="Specimens" ></textarea>
                    </div>
                    <div class="modal-footer">     
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
                <div class="modal-footer">      
                    <input type="accept" value="Accept" id='btnAccept' class="btn btn-primary">
                    <input type="reject" value="Reject" id='btnReject' class="btn btn-primary">
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
          $('#loanreqid').val(data.intLoanReqID);
          $('#borrowername').val(data.strFullName);
          $('#duration').val(data.strDuration);
          $('#purpose').val(data.strPurpose);
          $('#txtID').val(data.intLoanReqID);
          
        },
        error: function(){
          alert('Could not Edit Data');
        }

    });

  });

$('#btnEditSave').click(function(){
      var data = $('#editAccountForm').serialize();
        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/editLoanReq',
          data: data,
          async: false,
          dataType: 'json',
          success: function(response){
            if(response==true){
              $('#myEditModal').modal('hide');
              $('#editAccountForm')[0].reset();
         //     if(response.type=='add'){
           //     var type = 'added'
       //       }else if(response.type=='update'){
          //      var type ="updated"
              //}
              showAllCollector();
            }
            else{
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