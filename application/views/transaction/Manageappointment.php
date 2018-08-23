
        <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Maintenance/Dashboard" >Home</a></li>
            <li class="breadcrumb-item">Transaction</li>
            <li class="breadcrumb-item">Manage Appointment</li>
          </ul>
        </div>
      </div>

     <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Appointment Date</th>
                  <th>Appointment Time</th>
                  <th>Appointment Reason</th>
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

           <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Email</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>

         <div class="modal-body">

               <form id= "addAccountForm" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>To:</label> <label style="color: red">*</label>
                     <input type="text" id="AccTo" name ="AcceptTo" class="form-control">
                   
                  </div>

                   <div class="form-group">
                    <label>From:</label> <label style="color: red">*</label>
                    <input type = "text" id="AccFrom" name ="AcceptFrom" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Message:</label> <label style="color: red">*</label>
                    <textarea row = "5" id="AccMessage" name ="AcceptMessage" class="form-control"></textarea>
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


           <div id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Email</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>

         <div class="modal-body">

               <form id= "addAccountForm" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>To:</label> <label style="color: red">*</label>
                     <input type="text" id="AccTo" name ="AcceptTo" class="form-control">
                   
                  </div>

                   <div class="form-group">
                    <label>From:</label> <label style="color: red">*</label>
                    <input type = "text" id="AccFrom" name ="AcceptFrom" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Message:</label> <label style="color: red">*</label>
                    <textarea row = "5" id="AccMessage" name ="AcceptMessage" class="form-control"></textarea>
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
    showAllAppointment();
    function showAllAppointment(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showAllAppointment',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].strFullName+'</td>'+
                  '<td>'+data[i].dtAppointmentDate+'</td>'+
                  '<td>'+data[i].tmAppTime+'</td>'+
                  '<td>'+data[i].strVisitDescription+'</td>'+
                  '<td>'+data[i].strStatus+'</td>'+

                  '<td>'+
                    '<a href="javascript:;" data-toggle="modal" data-target="#myModal" class="btn btn-primary accept-Appoinment" data="'+data[i].intAppointmentID+'">Accept</a>'+
                    '<a href="javascript:;" data-toggle="modal" data-target="#myModal1" class="btn btn-secondary reject-Appoinment" data="'+data[i].intAppointmentID+'" style="margin-left: 10px">Reject</a>'+
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
</script>
