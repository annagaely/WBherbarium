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
                  <th scope="col" width= "10%">Plant Deposit ID</th>
                  <th scope="col" width= "10%">Accession Number</th>
                  <th scope="col" width= "10%">Validator Name</th>
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
                  <th scope="col" width= "10%">Plant Deposit ID</th>
                  <th scope="col" width= "10%">Accession Number</th>
                  <th scope="col" width= "10%">Validator Name</th>
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
                  <th scope="col" width= "10%">Plant Deposit ID</th>
                  <th scope="col" width= "10%">Accession Number</th>
                  <th scope="col" width= "10%">Collector's Name</th>
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

</main>
      <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
      <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/popper.js/umd/popper.min.js"> </script>

      <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/bootstrap/js/bootstrap.min.js"></script>
      <!--Table-->
      <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/dataTables.bootstrap4.min.js"></script>
      <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    function showExValPending(){

      $('#manageEVReqPendingtbl').dataTable().fnClearTable();
      $('#manageEVReqPendingtbl').dataTable().fnDraw();
      $('#manageEVReqPendingtbl').dataTable().fnDestroy();
      $('#manageEVReqPendingtbl').dataTable({
         "processing": true,
         "serverSide": false,
         "sAjaxSource": "<?php echo base_url('admin/showExValPending')?>",
         "deferLoading": 10,
         "bPaginate": true,
         "aaSorting": [[0,'asc']],
         "fnInitComplete": function(){
                   
         }
     });
   }

 $(document).ready(function() {
    //show
    showExValPending();
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
         "aaSorting": [[0,'asc']],
         "fnInitComplete": function(){
                   
         }
     });
   }

 $(document).ready(function() {
    //show
    showExValOkay();
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
         "aaSorting": [[0,'asc']],
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
