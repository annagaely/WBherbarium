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
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Plant Deposit ID</th>
                  <th>Accession Number</th>
                  <th>Date Deposited</th>
                  
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
</div>
<div id="SecondTab" class="tabcontent">
     <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                   <th>Plant Deposit ID</th>
                  <th>Accession Number</th>
                  <th>Collector's Name</th>
                  <th>Date Deposited</th>
                  <th>Status</th>
                  <th>Action</th>
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
                  <th>Plant Deposit ID</th>
                  <th>Accession Number</th>
                  <th>Collector's Name</th>
                  <th>Date Deposited</th>
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

   <!-- Modal-->
     <div id="view-externalvalidator" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-justify hide" data-backdrop="static" data-keyboard="false">
       <div role="document" class="modal-dialog modal-lg" >
         <div class="modal-content" >
           <div class="modal-header">

             <h5 id="exampleModalLabel" class="modal-title">External Validation</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()">
               <span aria-hidden="true">&times;</span>
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

                     <div class="modal-footer">
                     <input type="submit" value="Save" id='btnSave' class="btn btn-primary" style="margin-left: 300px">

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
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
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
    showExValPending();
    function showExValPending(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showExValPending',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].intPlantDepositID+'</td>'+
                  '<td>'+data[i].strAccessionNumber+'</td>'+
                  '<td>'+data[i].dateDeposited+'</td>'+
                  
                  '<td>'+data[i].strStatus+'</td>'+
                  '<td>'+
                    '<a href="javascript:;" data-target="#view-externalvalidator" data-toggle="modal" class="btn btn-primary " data="'+data[i].intPlantDepositID+'">View</a>'+
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
