
       <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Maintenance/Dashboard" >Home</a></li>
            <li class="breadcrumb-item">Transaction</li>
            <li class="breadcrumb-item">Deposit Plant</li>
          </ul>
     <!-- FOR DESGN PURPOSES ONLY-->
         <!-- Modal-->
     <div id="viewDepositReq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-justify hide" data-backdrop="static" data-keyboard="false">
       <div role="document" class="modal-dialog modal-lg" >
         <div class="modal-content" >
           <div class="modal-header">

             <h5 id="exampleModalLabel" class="modal-title">Plant Deposit</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()">
               <span aria-hidden="true">×</span>
             </button>
           </div>

          <div class="modal-body"> 
             <div class="row">
               <div class="card col-md-6" style="max-width: 20rem;margin-bottom: 2px;" >
                 <img id="imgPlant" name="txtPlantImg" class="card-img-center"  style="height: 30rem;object-fit: cover">
             </div>
              <div class="col-md-6" style="margin-left: auto; margin-right: auto;">
                 <form id= "updateStatusForm" method="POST" enctype="multipart/form-data"class="form-horizontal">
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
                       <label style="font-size: 14px;">Scientific Name:</label>
                     </div>
                     <div class="col-sm-8">
                       <input type="text" name="txtScientificName" id="strScientificName" class="form-control" disabled>
                     </div>
                   </div>
                  <div class="form-group row">
                     <div class="col-sm-4">
                       <label style="font-size: 14px;">Common Name:</label>
                     </div>
                    <div class="col-sm-8">
                      <input type="text" name="txtCommonName" id="strCommonName" class="form-control" disabled="">
                     </div>
                   </div>
                  
                    <div class="form-group row">
                     <div class="col-sm-4">
                       <label style="font-size: 14px;">Full Locality:</label>
                     </div>
                     <div class="col-sm-8">
                       <input type="text" name="txtFullLocation" id="strFullLocation" class="form-control" disabled="">
                     </div>
                   </div>
                    <div class="form-group row">
                     <div class="col-sm-4">
                       <label style="font-size: 14px;">Date Collected:</label>
                    </div>
                     <div class="col-sm-8">
                       <input type="text" name="txtdDateCollected" id="dtDateCollected"  class="form-control" disabled="">
                     </div>
                   </div>
                   <div class="form-group row">
                     <div class="col-sm-4">
                       <label style="font-size: 14px;">Collector:</label>
                     </div>
                     <div class="col-sm-8">
                       <input type="text" name="txtCollector" id="strCollector"  class="form-control" disabled="">
                     </div>
                   </div>
                   <div class="form-group row">
                     <div class="col-sm-4">
                       <label style="font-size: 14px;">Description:</label>
                    </div>
                     <div class="col-sm-8">
                      <textarea name="txtDescription" class="form-control" rows="3" id="strPlantDesc" disabled=""></textarea>
                     </div>
                     </div>
                      <div class="form-group row">
                     <div class="col-sm-4">
                       <label style="font-size: 14px;">Status:</label>
                     </div>
                     <div class="col-sm-8">
                      <select name="txtStatus" id="strStatus"  class="form-control">
                        <option value="Accepted">Accept</option>
                        <option value="Rejected">Reject</option>
                      </select>
                     </div>
                   
                     <div class="modal-footer">     
                    <!--<button id ="btnSave">Save</button>-->
                     <input type="submit" value="Save" id='btnSave' class="btn btn-primary" style="margin-left: 300px">
<!--                      <input type="submit" value="Reject" id='btnReject' class="btn btn-primary" style=""> -->
                   </div>
                   </div>
                 </form>
               </div>
             </div>
          </div>
         </div>
       </div>
     </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Deposit ID</th>
                  <th>Plant Image</th>
                  <th>User ID</th>
                  <th>Scientific Name</th>
                  <th>Common Name</th>
                  <th>Date Collected</th>
                  <th>Full Location</th>
                  <th>Plant Description</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
                <tbody tbody id="showdata">
                </tbody>
                <tr>
            </table>
        </div>
      </div>
    </div>


<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">
    
    $(function(){

    //show
    showAllDepositReq();
    function showAllDepositReq(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showAllDepositReq',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].intDepositReqID+'</td>'+
                  '<td>'+data[i].imgPlant+'</td>'+
                  '<td>'+data[i].intOUserID+'</td>'+
                  '<td>'+data[i].strScientificName+'</td>'+
                  '<td>'+data[i].strCommonName+'</td>'+
                  '<td>'+data[i].dtDateCollected+'</td>'+
                  '<td>'+data[i].strFullLocation+'</td>'+
                  '<td>'+data[i].strPlantDesc+'</td>'+
                  '<td>'+data[i].strStatus+'</td>'+
                  '<td>'+
                    '<a href="javascript:;" class="btn btn-primary view-depositReq" data="'+data[i].intDepositReqID+'">View</a>'+
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

//view depositreq
    $('#showdata').on('click', '.view-depositReq', function(){
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
          $('input[name=txtCollector').val(data.strFullName);
          //$('input[name=txtStatus').val(data.strStatus);
          $('input[name=txtDepositReqID]').val(data.intDepositReqID);
          $('input[name=txtScientificName').val(data.strScientificName);
          $('input[name=txtCommonName').val(data.strCommonName);
          $('input[name=txtdDateCollected]').val(data.dtDateCollected);
          $('input[name=txtFullLocation').val(data.strFullLocation);
          $('textarea[name=txtDescription]').val(data.strPlantDesc);
          $('textarea[name=txtDescription]').val(data.strPlantDesc);
          $('input[name=txtId]').val(data.intDepositReqID)


        },
        error: function(){
          alert('Could not Edit Data');
        }

    });



//update status
    $('#btnSave').click(function(){
      var data = $('#updateStatusForm').serialize();
        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/updateAcceptStatus',
          data: data,
          async: false,
          dataType: 'json',
          success: function(response){
            alert(data);
            if(response==true){
             // $('#viewDepositReq').modal('hide');
            //  $('#updateStatusForm')[0].reset();
             // if(response.type=='add'){
             //   var type = 'added'
             //// }else if(response.type=='update'){
             //   var type ="updated"
            //  }
              //showAllDepositReq();

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

