<!DOCTYPE html>
<html lang="en">
<!--
<?php
    header('Content-Type: text/html; charset=utf-8' );
    ini_set('default_charset', 'utf-8');
?> -->

<head>
<!--
 <meta http-equiv="Content-Type" content="text/html; charset= utf-8"> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
  <title><?php echo $title; ?></title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!--swal-->
    <script src="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.min.css">


    <!--PREMIUM-->
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/demo/d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-4/vendor/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/demo/d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-4/vendor/font-awesome/css/font-awesome.min.css">
  <!-- Fontastic Custom icon font-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/demo/d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-4/css/fontastic.css">
  <!-- Google fonts - Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
  <!-- DataTables CSS-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/demo/d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-4/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/demo/d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-4/vendor/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">

  <!-- jQuery Circle-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/demo/d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-4/css/grasp_mobile_progress_circle-1.0.0.min.css">
  <!-- Custom Scrollbar-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/demo/d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-4/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
  <!-- theme stylesheet-->
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/demo/d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-4/css/style.default.premium.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
<link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/demo/d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-4/css/custom.css">
    <!--END PREMIUM-->


    <!-- Favicon-->
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/bower_components/logo1.ico">
    <link rel="stylesheet" href="<?php echo base_url();?> https://use.fontawesome.com/releases/v5.1.0/css/solid.css" integrity="sha384-TbilV5Lbhlwdyc4RuIV/JhD8NR+BfMrvz4BL5QFa2we1hQu6wvREr3v6XSRfCTRp" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?> https://use.fontawesome.com/releases/v5.1.0/css/regular.css" integrity="sha384-avJt9MoJH2rB4PKRsJRHZv7yiFZn8LrnXuzvmZoD3fh1aL6aM6s0BBcnCvBe6XSD" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>https://use.fontawesome.com/releases/v5.1.0/css/brands.css" integrity="sha384-7xAnn7Zm3QC1jFjVc1A6v/toepoG3JXboQYzbM0jrPzou9OFXm/fY6Z/XiIebl/k" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>https://use.fontawesome.com/releases/v5.1.0/css/fontawesome.css" integrity="sha384-ozJwkrqb90Oa3ZNb+yKFW2lToAWYdTiF1vt8JiH5ptTGHTGcN7qdoR1F95e0kYyG" crossorigin="anonymous">

</head>
<body>

    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="<?php echo base_url();?>assets/bower_components/logo1.ico" alt="person" class="img-fluid rounded-circle">
             <h2 class="h5">
              <?php
                  echo $this->session->userdata('strFirstname'),' ',$this->session->userdata('strMiddleinitial'),' ',$this->session->userdata('strLastname');
              ?>
            </h2>
              <span>

                <?php
                  echo $this->session->userdata('strRole');
              ?>
              </span>
          </div>

          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="<?php echo base_url(); ?>admin/Dashboard" class="brand-small text-center"> <img src = "<?php echo base_url();?>assets/bower_components/logoto.png"> </a>

         </div>

        </div>


        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>

          <ul id="side-main-menu" class="side-menu list-unstyled">
            <li><a href="<?php echo base_url(); ?>admin/Dashboard" > <i class="fa fa-home"></i>Home</a></li>
<?php if(($this->session->userdata('strRole')=='CURATOR') || ($this->session->userdata('strRole')=='ADMINISTRATOR')):?>
            <li><a href="#MaintenanceDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-cogs"></i>Maintenance </a>
              <ul id="MaintenanceDropdown" class="collapse list-unstyled ">

                <li><a href="#TaxHierDropdown" data-toggle="collapse">Taxonomic Hierarchy</a>
                  <ul id="TaxHierDropdown" class="collapse list-unstyled">

                    <li style="background-color: #303030;"><a href="<?php echo base_url(); ?>admin/Phylum"> &nbsp; &nbsp; &nbsp; &nbsp; Phylum</a></li>

                    <li style="background-color: #303030;"><a href="<?php echo base_url(); ?>admin/Class"> &nbsp; &nbsp; &nbsp; &nbsp; Class</a></li>

                    <li style="background-color: #303030;"><a href="<?php echo base_url(); ?>admin/Order"> &nbsp; &nbsp; &nbsp; &nbsp; Order</a></li>

                    <li style="background-color: #303030;"><a href="<?php echo base_url(); ?>admin/Family"> &nbsp; &nbsp; &nbsp; &nbsp; Family</a></li>

                    <li style="background-color: #303030;"><a href="<?php echo base_url(); ?>admin/Genus"> &nbsp; &nbsp; &nbsp; &nbsp; Genus</a></li>

                    <li style="background-color: #303030;"><a href="<?php echo base_url(); ?>admin/Species"> &nbsp; &nbsp; &nbsp; &nbsp; Species</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo base_url(); ?>admin/Familyboxes">Family Boxes</a></li>
                <li><a href="<?php echo base_url(); ?>admin/Locality">Locality</a></li>
                <li><a href="<?php echo base_url(); ?>admin/Collector">Collector</a></li>

                <li><a href="<?php echo base_url(); ?>admin/accounts">Access Accounts</a></li>
                <li><a href="<?php echo base_url(); ?>admin/Staffmgt">Staff Management</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/Speciesauthor">Species Author</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/PlantType">Plant Type</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/SpeciesAltName">Species Alternate Name</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/Plantborrower">Plant Borrower</a></li>
                <li><a href="<?php echo base_url(); ?>admin/Externalvalidator">External Validators</a></li>
                <li><a href="<?php echo base_url(); ?>admin/CalendarManagement">Calendar Management</a></li>
<!--                 <li><a href="<?php echo base_url(); ?>admin/Featuredplant">Featured Plant</a></li> -->

              </ul>
            </li>
            <li class="active"><a href="#TransactionDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-undo"></i>Transaction </a>
              <ul id="TransactionDropdown" class="collapse list-unstyled show">

                <li><a href="<?php echo base_url(); ?>admin/Depositplant">Deposit Plant</a></li>
                <!--<li><a href="<?php echo base_url(); ?>admin/Loanplant">Loan Plant</a></li>-->
                <li><a href="<?php echo base_url(); ?>admin/Externalvalidation">External Validation</a></li>
                <li class="active"><a href="<?php echo base_url(); ?>admin/Visits">Visits</a>

                </li>
              </ul>
            </li>
              <li><a href="<?php echo base_url(); ?>admin/Queries"> <i class="fa fa-database"></i>Queries</a></li>
            <li><a href="<?php echo base_url(); ?>admin/Reports"> <i class="fa fa-file"></i>Reports</a></li>



          <!-- STUDENT ASSISTANT PART-->
          <?php elseif($this->session->userdata('strRole')==='STUDENT ASSISTANT'):?>
             <li><a href="#MaintenanceDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-cogs"></i>Maintenance </a>
              <ul id="MaintenanceDropdown" class="collapse list-unstyled ">


                <li><a href="<?php echo base_url(); ?>admin/Locality">Locality</a></li>
                <li><a href="<?php echo base_url(); ?>admin/Collector">Collector</a></li>
                <li><a href="<?php echo base_url(); ?>admin/Externalvalidator">External Validators</a></li>
                <li><a href="<?php echo base_url(); ?>admin/Featuredplant">Featured Plant</a></li>

              </ul>
            </li>
            <li><a href="#TransactionDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-undo"></i>Transaction </a>
              <ul id="TransactionDropdown" class="collapse list-unstyled ">

                <li><a href="<?php echo base_url(); ?>admin/Depositplant">Deposit Plant</a></li>
                <!--<li><a href="<?php echo base_url(); ?>admin/Loanplant">Loan Plant</a></li>-->


                </li>
              </ul>
            </li>
              <li><a href="<?php echo base_url(); ?>admin/Queries"> <i class="fa fa-database"></i>Query</a></li>
            <li><a href="#"> <i class="fa fa-file"></i>Reports</a></li>
            <?php endif;?>
        </div>
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="<?php echo base_url(); ?>admin/Dashboard" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span>PUP</span><strong class="text-primary">HERBARIUM</strong>
                  </div></a>
              </div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">

                <!-- Notifications dropdown-->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell" id='clicknotif'></i><span id="BellIcon" class="badge badge-warning count"></span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item">
          <div class="notification d-flex justify-content-between">
          <div class="notification-content"></i>No New Notifications
          </div>
          </div></a></li>
                  </ul>
                </li>
                <!-- Messages dropdown-->
                <!--<li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i onclick="myFunction1()" class="fa fa-envelope"></i><span id= "MessageIcon" class="badge badge-info">3</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                        <div class="msg-profile"> <img src="<?php echo base_url();?>assets/bower_components/Nins.png" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Ni&ntildeo Escueta</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                        <div class="msg-profile"> <img src="<?php echo base_url();?>assets/bower_components/sheng.png" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Rhisiel Valle</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                        <div class="msg-profile"> <img src="<?php echo base_url();?>assets/bower_components/mai.png" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Maica Ope&ntildea</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i>Read all messages    </strong></a></li>
                  </ul>
                </li>-->
                <!-- Log out-->
                 <li class="nav-item"><a href="<?php echo base_url()?>admin/logout" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" >
                        <span class="d-none d-sm-inline-block">Logout</span>&nbsp<i class="fa fa-sign-out"></i></a>

                           <form id="logout-form" action="<?php echo base_url()?>admin/logout" method="POST" style="display: none;">

                           </form>
                  </li>
              </ul>

<script>

function myFunction() {
    var x = document.getElementById("BellIcon");
    if (x.style.display === "none") {
        x.style.display = "none";
    } else {
        x.style.display = "none";
    }
}

function myFunction1() {
    var y = document.getElementById("MessageIcon");
    if (y.style.display === "none") {
        y.style.display = "none";
    } else {
        y.style.display = "none";
    }
}
</script>
 <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
<script>
$(document).ready(function(){

 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"<?php echo base_url();?>admin/showNotif",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {

   var html = '';
   var i;

  for(i=0; i<data.length; i++){
  html +='<li><a rel="nofollow" href="#" class="dropdown-item">'+
          '<div class="notification d-flex justify-content-between">'+
          '<div class="notification-content"><i class="fa fa-envelope"></i>'+data[i].strNotifContent+''+
          '</div>'+
          '</div></a></li>';
    }
    $('.dropdown-menu').html(html);

   }
  });
 }

load_unseen_notification();

$('#clicknotif').click(function(){
  $('.badge').html('');
  load_unseen_notification('yes');

 });

 countunreadnotif();
 function  countunreadnotif ()
 {
  $.ajax({
   url:"<?php echo base_url();?>admin/showNotifCount",
   method:"POST",
   dataType:"json",
   success:function(data)
   {
if(data.intcount!=0){
  $('.count').html(data.intcount);
}


   }
  });
 }

 // setInterval(function(){
 // load_unseen_notification();
 // countunreadnotif();
 // }, 5000);

});
</script>


     </div>
      </div>
      </nav>
      </header>

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
  <button class="tablinks" onclick="openCity(event, 'RejectTab') " style="color:white;">Rejected</button>
  <button class="tablinks" onclick="openCity(event, 'ThirdTab') " style="color:white;">All</button>
</div>

<div class="tabcontent" id="FirstTab">
  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped" id="manageVisittbl">
          <thead>
            <tr>
              <th scope="col" width= "10%">Visit ID</th>
              <th scope="col" width= "10%">Visitor's Name</th>
              <th scope="col" width= "10%">Visit Date</th>
              <th scope="col" width= "10%">Visit Purpose</th>
              <th scope="col" width= "10%">Status</th>
              <th scope="col" width= "10%">Actions</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>

         <!-- Modal-->
<div id="viewVisitReq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-justify hide" data-backdrop="static" data-keyboard="false">
       <div role="document" class="modal-dialog" >
         <div class="modal-content" >
           <div class="modal-header">

             <h5 id="exampleModalLabel" class="modal-title">View Visit Details</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>

          <div class="modal-body">

<!--               <div class="col-md-6" style="margin-left: auto; margin-right: auto;"> -->
                 <form id= "updateVisitStatusForm" method="POST" enctype="multipart/form-data"class="form-horizontal">



                    <div class="form-group">
                       <label style="font-size: 14px;">Visit ID:</label>
                       <input type="hidden" name="txtId" id="txtID" value="0">
                       <input type="text" name="txtAppointmentID" id="intAppointmentID" class="form-control" disabled="">


                    <div class="form-group">
                       <label style="font-size: 14px;">Visitor's Name:</label>
                       <input type="text" name="txtVisitorName" id="strFullame" class="form-control" disabled>
                    </div>


                 <div class="row">
                  <div class="form-group col-sm-6">
                      <label style="font-size: 14px;">Visit Date:</label>
                      <input type="text" name="txtVisitDate" id="dtAppointmentDate" class="form-control" disabled="">
                  </div>


                     <div class="form-group col-sm-6">
                      <label style="font-size: 14px;">Visit Purpose:</label>
                       <input type="text" name="txtVisitPurpose" id="strVisitPurpose" class="form-control" disabled="">
                     </div>
                </div>

                 <div class="form-group">
                       <label style="font-size: 14px;">Visit Description:</label>
                       <textarea name="txtVisitDescription" id="strVisitDescription" class="form-control" disabled> </textarea>
                    </div>

                 <div class="form-group">
                  <label style="font-size: 14px;">Status:</label>
                   <select name="txtStatus" id="strStatus"  class="form-control">
                        <option value="For Visiting">Approve</option>
                        <option value="Rejected">Reject</option>
                   </select>
                  </div>
                </div>
                 </form>
               </div>

          <div class="modal-footer">
            <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-secondary">Cancel</button>
             <input type="submit" value="Save" id="btnSave" class="btn btn-primary" >
          </div>
         </div>
       </div>
     </div>
</div>

<div id="SecondTab" class="tabcontent">
     <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="manageExpecttbl">
              <thead>
                <tr>
                 <th scope="col" width= "10%">Visit ID</th>
                 <th scope="col" width= "10%">Visitor's Name</th>
                 <th scope="col" width= "10%">Visit Date</th>
                 <th scope="col" width= "10%">Visit Purpose</th>
                 <th scope="col" width= "10%">Status</th>
                 <th scope="col" width= "10%">Actions</th>
                </tr>
              </thead>
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
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
        </div>

        <div class="modal-body">
          <form id= "emailform" method="POST" enctype="multipart/form-data">
            <div class="form-group row pr-4">
              <label class="col-sm-2">To:</label>
              <input type ="hidden" name = "txtEmail" id = "txtemail" value ="0">
              <input type="email" name="txtEmailCon" id="strEmailAddress" class="form-control col-sm-10" disabled>
            </div>

            <div class="form-group row pr-4">
                      <label class="col-sm-2">From:</label>
                      <input type="email" class="form-control col-sm-10" value= "WBHerbariumTA@gmail.com" disabled>
            </div>
            <br>
             <div class="form-group">
              <label>Visit Request ID:</label>
              <input type ="hidden" name = "txtId" id = "txtID" value ="0">
              <input type="text" name="txtreqid" id="txtreqID" class="form-control" disabled>
            </div>
            <div class="form-group">
               <label>Message:</label>
                <textarea  id="strCustomMessage" name="txtCustomMessage" class="form-control" placeholder="Type your message here.." ></textarea>
            </div>
                  <div class="modal-footer">
                    <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-secondary">Cancel</button>
                     <input type="submit" id="btnSend" value="Send" class="btn btn-primary">
                     <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
                     <script type="text/javascript">
                    $('#btnSend').click(function(event){
                        var data = $('#emailform').serialize();
                          event.preventDefault();
                         swal({
                             title: 'Are you sure?',
                             type: 'warning',
                             showCancelButton: true,
                             confirmButtonColor: '#3085d6',
                             cancelButtonColor: '#d33',
                             confirmButtonText: 'Yes'
                           }).then((result) => {
                            $.ajax({
                            type: 'ajax',
                            method: 'post',
                            url: '<?php echo base_url() ?>admin/visitsendMail',
                            data: data,
                            async: false,
                            dataType: 'json',
                            success: function(){
                               let timerInterval
                                swal({
                                  title: 'Email has been sent!',
                                  type: 'success',
                                  timer: 1500,
                                  showConfirmButton: false
                                }).then(function() {

                            showAllAppointmentPending();
                            showAllAppointmentExpect();
                            showAllAppointmentReject();
                            showAllAppointmentAll();
                                $('#EmailVisitCon').modal('hide');
                                document.getElementById("emailform").reset();
                              });
                            },
                            error: function(){

                              }
                          });

                          })
                       });
                </script>
                  </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<div id="RejectTab" class="tabcontent">
  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped" id="manageRejectbl">
              <thead>
                <tr>
                 <th scope="col" width= "10%">Visit ID</th>
                 <th scope="col" width= "10%">Visitor's Name</th>
                 <th scope="col" width= "10%">Visit Date</th>
                 <th scope="col" width= "10%">Visit Purpose</th>
                 <th scope="col" width= "10%">Status</th>
                 <th scope="col" width= "10%">Actions</th>
                </tr>
              </thead>
            </table>
        </div>
      </div>
 </div>
</div>
<div id="VResched" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
    <div role="document" class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="exampleModalLabel" class="modal-title">Re-schedule</h5>
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
        </div>

        <div class="modal-body">
          <form id= "VReschedForm" method="POST" enctype="multipart/form-data">

          <div class="form-group">
               <label>Visit ID:</label>
                <input type="hidden" name="txtId" id="txtID" value="0">
                <input type="hidden" name="txtemail" id="txtEmail" value="">
                 <input type="text" name="txtVisitID" id="intAppointmentID" class="form-control" disabled="">
          </div>
          <div class="form-group">
               <label>Collector's Name:</label>
               <input type="text" name="txtVisitorName" id="strCollector" class="form-control" disabled="">
          </div>
           <div class="form-group">
           <label>Visit Purpose:</label>
                <input type="text" name="txtVisitPurpose" id="strVisitPurpose" class="form-control" disabled="">
          </div>
          <div class="form-group">
              <label>Date of Visit:</label>
              <input type="Dextate" name="oldtxtdate" id="txtdateID" class="form-control" disabled >
          </div>
          <div class="form-group">
             <label>Reason for rescheduling :</label>
             <textarea row = '5' name="txtreasonforresched" id="txtreason"  class="form-control" ></textarea>
          </div>
           <div class="form-group">
              <label>New Date of Visit:</label>
              <input type="Date" name="txtReschedDate" id="newtxtdateID" class="form-control" >
          </div>
           <div class="modal-footer">
               <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-secondary">Cancel</button>
               <input type="submit" value="Save" id="btnSaveResched" class="btn btn-primary">
           </div>
           <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
                     <script type="text/javascript">
                     $('#btnSaveResched').click(function(event){
                          var data = $('#VReschedForm').serialize();
                          var todayadd3 = new Date();
                          var dd = todayadd3.getDate()+3;
                          var mm = todayadd3.getMonth()+1; //January is 0!
                          var yyyy = todayadd3.getFullYear();

                          if(dd<10) {
                              dd = '0'+dd
                          }

                          if(mm<10) {
                              mm = '0'+mm
                          }

                          todayadd3 = yyyy + '-' + mm + '-' +dd ;

                                if($('#newtxtdateID').val()<todayadd3){
                                           event.preventDefault();
                                            swal({
                                               type: 'error',
                                               title: 'Invalid Date!',
                                               text: 'The new appointment date should be 3 days from now.'
                                             });
                                }else{
                                    if($('#txtreason').val()!=''){
                                      if($('#newtxtdateID').val()!=''){
                                      event.preventDefault();
                                        swal({
                                           title: 'Are you sure?',
                                           type: 'warning',
                                           showCancelButton: true,
                                           confirmButtonColor: '#3085d6',
                                           cancelButtonColor: '#d33',
                                           confirmButtonText: 'Yes'
                                         }).then((result) => {
                                           if (result.value) {

                                              $.ajax({
                                                type: 'ajax',
                                                method: 'post',
                                                 url: '<?php echo base_url() ?>admin/visitreschedadmin',
                                                data: data,
                                                async: false,
                                                dataType: 'json',
                                                success: function(response){
                                                  if(response==true){
                                                     let timerInterval
                                                          swal({
                                                            title: 'Saved',
                                                            text: 'Succesful!',
                                                            type: 'success',
                                                             timer: 1500,
                                                            showConfirmButton: false
                                                          }).then(function() {

                                                          showAllAppointmentPending();
                                                          showAllAppointmentExpect();
                                                          showAllAppointmentReject();
                                                          showAllAppointmentAll();
                                                          $('#VResched').modal('hide');
                                                          document.getElementById("VReschedForm").reset();
                                                        });
                                               }else{
                                               event.preventDefault();
                                                swal({
                                                  type: 'error',
                                                  title: 'Invalid Date!',
                                                  text: 'The Herbarium center is not available on the selected date.',
                                                  showConfirmButton: true
                                                });
                                                  }

                                                },
                                                error: function(){
                                               event.preventDefault();
                                                swal({
                                                  type: 'error',
                                                  title: 'Fatal Error'
                                                });
                                                }
                                              });
                                            }
                                          })
                                      }else{
                                       event.preventDefault();
                                      swal({
                                        type: 'error',
                                        title: 'Incomplete input!',
                                        text: 'Please fill up all the required fields.'
                                      });
                                      }
                                  }else{
                                     event.preventDefault();
                                    swal({
                                      type: 'error',
                                      title: 'Incomplete input!',
                                      text: 'Please fill up all the required fields.'
                                    });
                                  }
                                  }
                                });
                     </script>
</form>
</div>
</div>
</div>
</div>
 <div id="EmailVisitConReject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
    <div role="document" class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="exampleModalLabel" class="modal-title">Email</h5>
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
        </div>

        <div class="modal-body">
          <form id= "emailformreject">
              <input type ="hidden" name = "txtemailReject" id ="txtemail" value ="0">

            <div class="form-group row pr-4">
              <label class="col-sm-2">To:</label>
               <input type="email" name="txtEmailCon" id="strEmailAddressReject" class="form-control col-sm-10" disabledmethod="POST" enctype="multipart/form-data" disabled>
            </div>

            <div class="form-group row pr-4">
              <label class="col-sm-2">From:</label>
              <input type="email" class="form-control col-sm-10" value= "WBHerbariumTA@gmail.com" disabled>
            </div>
            <br>
             <div class="form-group">
              <label>Visit Request ID:</label>
              <input type ="hidden" name = "txtIdReject" id = "txtIDReject" value ="0">
              <input type="text" name="txtreqid" id="txtreqIDReject" class="form-control" disabled>
            </div>
            <div class="form-group">
               <label>Message:</label>
                <textarea  id="strCustomMessage" name="txtCustomMessageReject" class="form-control" placeholder="Type your message here.." ></textarea>
            </div>
                  <div class="modal-footer">
                    <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-secondary">Cancel</button>
                     <input type="submit" id="btnSendReject" value="Send" class="btn btn-primary">
                     <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
                     <script type="text/javascript">
                            $('#btnSendReject').click(function(event){
                              var data = $('#emailformreject').serialize();
                              event.preventDefault();
                                swal({
                                 title: 'Are you sure?',
                                 type: 'warning',
                                 showCancelButton: true,
                                 confirmButtonColor: '#3085d6',
                                 cancelButtonColor: '#d33',
                                 confirmButtonText: 'Yes'
                               }).then((result) => {
                                 if (result.value) {
                                  $.ajax({
                                  type: 'ajax',
                                  method: 'post',
                                  url: '<?php echo base_url() ?>admin/visitsendMailReject',
                                  data: data,
                                  async: false,
                                  dataType: 'json',
                                  success: function(){
                                  },
                                  error: function(){
                let timerInterval
                    swal({
                      title: 'Email has been sent!',
                      type: 'success',
                      timer: 1500,
                      showConfirmButton: false
                    }).then(function() {

                showAllAppointmentPending();
                showAllAppointmentExpect();
                showAllAppointmentReject();
                showAllAppointmentAll();
                    $('#EmailVisitConReject').modal('hide');
                    document.getElementById("emailformreject").reset();
                  });
                }
            });
         }
    })
 });

                     </script>
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
            <table class="table table-striped" id="manageAlltbl">
              <thead>
                <tr>
                  <th scope="col" width= "10%">Visit ID</th>
                  <th scope="col" width= "10%">Visitor's Name</th>
                  <th scope="col" width= "10%">Visit Date</th>
                  <th scope="col" width= "10%">Visit Purpose</th>
                  <th scope="col" width= "10%">Status</th>
                </tr>
              </thead>
<!--               <tbody tbody id="showdata2">
            </tbody> -->
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
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
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
                  <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-secondary">Cancel</button>
                     <input type="submit" id="btnConfirm" value="Confirm" class="btn btn-primary">
                  </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
      <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
      <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/popper.js/umd/popper.min.js"> </script>
      <!--Table-->
      <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/dataTables.bootstrap4.min.js"></script>
      <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.dataTables.min.js"></script>


<script type="text/javascript">

    function showAllAppointmentPending()
    {
      $('#manageVisittbl').dataTable().fnClearTable();
      $('#manageVisittbl').dataTable().fnDraw();
      $('#manageVisittbl').dataTable().fnDestroy();
       $('#manageVisittbl').dataTable({
        "autoWidth":false,
         "processing": true,
         "serverSide": false,
         "sAjaxSource": "<?php echo base_url('admin/showAllAppointmentPending')?>",
         "deferLoading": 10,
         "bPaginate": true,
         "aaSorting": [],
         "fnInitComplete": function(){

         }
     });
    }

    $(document).ready(function() {
      showAllAppointmentPending();
});

  $('#btnSave').click(function(event){

      var data = $('#updateVisitStatusForm').serialize();
     event.preventDefault();
     swal({
               title: 'Are you sure?',
               type: 'warning',
               showCancelButton: true,
               confirmButtonColor: '#3085d6',
               cancelButtonColor: '#d33',
               confirmButtonText: 'Yes'
             }).then((result) => {
               if (result.value) {
        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/updateVisitStatus',
          data: data,
          async: false,
          dataType: 'json',
          success: function(data){

            if(data==true){

            }else{
              alert('Error');
            }
              let timerInterval
                    swal({
                      title: 'Saved',
                      text: 'Succesful!',
                      type: 'success',
                      timer: 1500,
                      showConfirmButton: false
                    }).then(function() {
                showAllAppointmentPending();
                showAllAppointmentExpect();
                showAllAppointmentReject();
                showAllAppointmentAll();
                    $('#viewVisitReq').modal('hide');
                    document.getElementById("updateVisitStatusForm").reset();
                  });
          },
          error: function(){
            alert('Could not update data');
          }
        });
      }
    })
    });

$(document).on('click', '.view-appointment', function(){
      var id = $(this).attr('data');
      $('#viewVisitReq').modal('show');
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
          $('input[name=txtVisitDate]').val(data.dtAppointmentDate);
          $('input[name=txtVisitPurpose]').val(data.strVisitPurpose);
          $('textarea[name=txtVisitDescription]').val(data.strVisitDescription);
          $('input[name=txtId]').val(data.intAppointmentID);


        },
        error: function(){
          alert('Could not Edit Data');
        }

    });
  });



</script>

    <script type="text/javascript">

    function showAllAppointmentExpect()
    {
      $('#manageExpecttbl').dataTable().fnClearTable();
      $('#manageExpecttbl').dataTable().fnDraw();
      $('#manageExpecttbl').dataTable().fnDestroy();
      $('#manageExpecttbl').dataTable({
        "autoWidth":false,
         "processing": true,
         "serverSide": false,
         "sAjaxSource": "<?php echo base_url('admin/showAllAppointmentExpect')?>",
         "deferLoading": 10,
         "bPaginate": true,
         "aaSorting": [],
         "fnInitComplete": function(){

         }
     });
    }
    $(document).ready(function() {
      showAllAppointmentExpect();

     $(document).on('click', '.view-appcon', function(){
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
           $('input[name=txtId').val(data.intAppointmentID);
          $('input[name=txtVisitorName]').val(data.strFullName);
          $('input[name=txtStatus]').val(data.strStatus);


        },
        error: function(){
          alert('Could not Edit Data');
        }

    });
    });

     $(document).on('click', '.view-emailcon', function(){
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
          $('#txtemail').val(data.strEmailAddress);
          $('input[name=txtId]').val(data.intAppointmentID);
          $('#txtreqID').val(data.intAppointmentID);

        },
        error: function(){
          alert('Could not Edit Data');
        }

    });
    });


   $('#btnConfirm').click(function(event){
      var data = $('#ConfirmForm').serialize();
     event.preventDefault();
     swal({
               title: 'Are you sure?',
               type: 'warning',
               showCancelButton: true,
               confirmButtonColor: '#3085d6',
               cancelButtonColor: '#d33',
               confirmButtonText: 'Yes'
             }).then((result) => {
               if (result.value) {

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
            let timerInterval
                    swal({
                      title: 'Saved',
                      text: 'Succesful!',
                      type: 'success',
                      timer: 1500,
                      showConfirmButton: false
                    }).then(function() {

                    showAllDepositReqPending();
                    showAllDepositReqOkay();
                    showAllDepositReqAll();
                    $('#VisitConfirmation').modal('hide');
                    document.getElementById("ConfirmForm").reset();
                  });
          },
          error: function(){
            alert('Could not update data');
          }
        });
      }
    })
 });

    $(document).on('click', '.view-VResched', function(){
      var id = $(this).attr('data');
      $('#VResched').modal('show');
      $('#VResched').find('.modal-title').text('Re-schedule');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/VResched',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txtId]').val(data.intAppointmentID);
          $('input[name=txtVisitID]').val(data.intAppointmentID);
         $('input[name=txtVisitorName]').val(data.strFullName);
         $('input[name=txtVisitPurpose]').val(data.strVisitPurpose);
        $('input[name=txtemail]').val(data.strEmailAddress);
        $('input[name=oldtxtdate]').val(data.dtAppointmentDate);
        },

        error: function(){
          alert('Could not Edit Data');
        }
    });
    });

  });

</script>

<script type="text/javascript">
    function showAllAppointmentReject()
    {
      $('#manageRejectbl').dataTable().fnClearTable();
      $('#manageRejectbl').dataTable().fnDraw();
      $('#manageRejectbl').dataTable().fnDestroy();
      $('#manageRejectbl').dataTable({
        "autoWidth":false,
         "processing": true,
         "serverSide": false,
         "sAjaxSource": "<?php echo base_url('admin/showAllAppointmentReject')?>",
         "deferLoading": 10,
         "bPaginate": true,
         "aaSorting": [],
         "fnInitComplete": function(){

         }
     });
    }

    $(document).ready(function() {
      showAllAppointmentReject();
});
     $(document).on('click', '.view-emailConReject', function(){
      var id = $(this).attr('data');
      $('#EmailVisitConReject').modal('show');
      $('#EmailVisitConReject').find('.EmailVisitConReject').text('Email');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/VisitEmailConReject',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('#strEmailAddressReject').val(data.strEmailAddress);
          $('input[name=txtemailReject]').val(data.strEmailAddress);
          $('#txtIDReject').val(data.intAppointmentID);
          $('#txtreqIDReject').val(data.intAppointmentID);

        },
        error: function(){
          alert('Could not Edit Data');
        }

    });
});


</script>

<!-- <script type="text/javascript">

      $(document).on('click', '.view-appointment', function(){
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
          $('input[name=txtVisitDate]').val(data.dtAppointmentDate);
          $('input[name=txtVisitPurpose]').val(data.strVisitPurpose);
          $('textarea[name=txtVisitDescription]').val(data.strVisitDescription);
          $('input[name=txtId]').val(data.intAppointmentID);
 },
        error: function(){
          alert('Could not Edit Data');
        }

    });
      });



</script> -->
<script>
    function showAllAppointmentAll(){

      $('#manageAlltbl').dataTable().fnClearTable();
      $('#manageAlltbl').dataTable().fnDraw();
      $('#manageAlltbl').dataTable().fnDestroy();
       $('#manageAlltbl').dataTable({
        "autoWidth":false,
         "processing": true,
         "serverSide": false,
         "sAjaxSource": "<?php echo base_url('admin/showAllAppointmentAll')?>",
         "deferLoading": 10,
         "bPaginate": true,
         "aaSorting": [],
         "fnInitComplete": function(){

         }
     });
    }

    $(document).ready(function(){
      //show-
    showAllAppointmentAll();


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
