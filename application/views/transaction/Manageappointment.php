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
            <li class="breadcrumb-item">Manage Appointment</li>
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

   <div id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
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

<div id="SecondTab" class="tabcontent">
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
              <tbody tbody id="showdata1">    
            </tbody>
            </table>
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
                  <th>Name</th>
                  <th>Appointment Date</th>
                  <th>Appointment Time</th>
                  <th>Appointment Reason</th>
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
                  '<td>'+data[i].strFullName+'</td>'+
                  '<td>'+data[i].dtAppointmentDate+'</td>'+
                  '<td>'+data[i].tmAppTime+'</td>'+
                  '<td>'+data[i].strVisitDescription+'</td>'+
                  '<td>'+data[i].strStatus+'</td>'+

                  '<td>'+
                    '<a href="javascript:;" data-toggle="modal" data-target="#myModal" class="btn btn-primary accept-Appoinment" data="'+data[i].intAppointmentID+'">Accept</a>'+
                    '<a href="javascript:;" data-toggle="modal" data-target="#myModal1" class="btn btn-secondary reject-Appoinment" data="'+data[i].intAppointmentID+'" style="margin-left: 0px">Reject</a>'+
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
                  '<td>'+data[i].strFullName+'</td>'+
                  '<td>'+data[i].dtAppointmentDate+'</td>'+
                  '<td>'+data[i].tmAppTime+'</td>'+
                  '<td>'+data[i].strVisitDescription+'</td>'+
                  '<td>'+data[i].strStatus+'</td>'+

                  '<td>'+
                    '<a href="javascript:;"class="btn btn-primary confirmed-Appointment" data="'+data[i].intAppointmentID+'">Confirm</a>'+
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
                  '<td>'+data[i].strFullName+'</td>'+
                  '<td>'+data[i].dtAppointmentDate+'</td>'+
                  '<td>'+data[i].tmAppTime+'</td>'+
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


     