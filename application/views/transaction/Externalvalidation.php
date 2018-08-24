<div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Maintenance/Dashboard" >Home</a></li>
            <li class="breadcrumb-item">Transaction</li>
            <li class="breadcrumb-item active">External Validation</li>
          </ul>
        </div>
      </div>




<div class="tabcontent" id="FirstTab">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Deposit ID</th>
                  <th>Collector's Name</th>
                  <th>Common Name</th>
                  <th>Date Collected</th>
                  <th>Full Location</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
                <tbody tbody id="showdata">
                </tbody>
            </table>
        </div>
      </div>
    </div>


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
                        <option value="Okay">Accept</option>
                        <option value="Rejected">Reject</option>
                        <opton value="ExternalValidation">External Validation</opton>

                      </select>
                     </div>

                     <div class="modal-footer">
                    <!--<button id ="btnSave">Save</button>-->

                     <input type="submit" value="Save" id='btnSave' class="btn btn-primary" style="margin-left: 300px" data-dismiss="modal" data-toggle="modal" data-target="#myModal">

                   </div>
                   </div>
                 </form>
               </div>
             </div>
          </div>
         </div>
       </div>
     </div>
     <!-- Modal-->
  <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
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
              <input type="email" class="form-control col-sm-10" disabled>
            </div>
            <div class="form-group row pr-4">
                      <label class="col-sm-2">From:</label>
                      <input type="email" class="form-control col-sm-10" disabled>
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

</div>





<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">

    $(function(){

    //show
    showAllDepositReqPending();
    function showAllDepositReqPending(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showAllDepositReqPending',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].intDepositReqID+'</td>'+
                  '<td>'+data[i].strFullName+'</td>'+
                  '<td>'+data[i].strCommonName+'</td>'+
                  '<td>'+data[i].dtDateCollected+'</td>'+
                  '<td>'+data[i].strFullLocation+'</td>'+
                  '<td>'+data[i].strStatus+'</td>'+
                  '<td>'+
                    '<a href="javascript:;" data-toggle="modal" data-target="#myModal1" class="btn btn-primary view-depositReq" data="'+data[i].intDepositReqID+'">View</a>'+
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

    $(function(){

    //show
    showAllDepositReqOkay();
    function showAllDepositReqOkay(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showAllDepositReqOkay',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].intDepositReqID+'</td>'+
                  '<td>'+data[i].strFullName+'</td>'+
                  '<td>'+data[i].strCommonName+'</td>'+
                  '<td>'+data[i].dtDateCollected+'</td>'+
                  '<td>'+data[i].strFullLocation+'</td>'+
                  '<td>'+data[i].strStatus+'</td>'+
                  '<td>'+
                    '<a href="javascript:;" class="btn btn-primary view-depositReq" data="'+data[i].intDepositReqID+'">Okay</a>'+
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
  $(function(){

  //show
  showAllDepositReqPending();
  function showAllDepositReqPending(){
    $.ajax({
      type: 'ajax',
      url: '<?php echo base_url() ?>admin/showAllDepositReqExternalValidation',
      async: false,
      dataType: 'json',
      success: function(data){
        var html = '';
        var i;
        for(i=0; i<data.length; i++){
          html +='<tr>'+
                '<td>'+data[i].intDepositReqID+'</td>'+
                '<td>'+data[i].strFullName+'</td>'+
                '<td>'+data[i].strCommonName+'</td>'+
                '<td>'+data[i].dtDateCollected+'</td>'+
                '<td>'+data[i].strFullLocation+'</td>'+
                '<td>'+data[i].strStatus+'</td>'+
                '<td>'+
                  '<a href="javascript:;" data-toggle="modal" data-target="#myModal1" class="btn btn-primary view-depositReq" data="'+data[i].intDepositReqID+'">View</a>'+
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
    $(function(){

    //show
    showAllDepositReqAll();
    function showAllDepositReqAll(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showAllDepositReqAll',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].intDepositReqID+'</td>'+
                  '<td>'+data[i].strFullName+'</td>'+
                  '<td>'+data[i].strCommonName+'</td>'+
                  '<td>'+data[i].dtDateCollected+'</td>'+
                  '<td>'+data[i].strFullLocation+'</td>'+
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


//view depositreq
    $('#showdata').on('click', '.view-depositReq', function(){
      var id = $(this).attr('data');
      $('#viewDepositReq').modal('show');
      $('#viewDepositReq').find('.modal-title').text('For External Validation');
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
