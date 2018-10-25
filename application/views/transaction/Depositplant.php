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
    <!--PREMIUM-->
    <!--swal=->
    <script src="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.all.min.js"></script>
  <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
  <script src="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.min.css">


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
            <!--    <li><a href="<?php echo base_url(); ?>admin/Locality">Locality</a></li>-->
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
              <ul id="TransactionDropdown" class="collapse list-unstyled ">

                <li><a href="<?php echo base_url(); ?>admin/Depositplant">Deposit Plant</a></li>
                   <li><a href="<?php echo base_url(); ?>admin/Visits">Visits</a>
                <!--<li><a href="<?php echo base_url(); ?>admin/Loanplant">Loan Plant</a></li>-->
                <li><a href="#ExValidationDropdown" data-toggle="collapse">External Validation</a>
  <ul id="ExValidationDropdown" class="collapse list-unstyled">
    <li style="background-color: #303030;"><a href="<?php echo base_url(); ?>admin/Externalvalidation"> &nbsp; &nbsp;Send to External Validator</a></li>
    <li style="background-color: #303030;"><a href="<?php echo base_url();?>admin/AnswersExValidation"> &nbsp; &nbsp;  Verification</a></li>
  </ul>
</li>
            

                </li>
              </ul>
            </li>
 <li><a href="#QueriesDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-database"></i>Queries </a>
                <ul id="QueriesDropdown" class="collapse list-unstyled ">
                  <li><a href="<?php echo base_url(); ?>admin/QueriesAccounts">&nbsp &nbsp &nbsp Accounts</a></li>
                  <li><a href="<?php echo base_url(); ?>admin/QueriesEvents">&nbsp &nbsp &nbsp Events </a></li>
                   <li><a href="<?php echo base_url(); ?>admin/QueriesDeposits">&nbsp &nbsp &nbsp Deposits</a></li>
                    <li><a href="<?php echo base_url(); ?>admin/QueriesVisits">&nbsp &nbsp &nbsp Visits</a></li>
                     <li><a href="<?php echo base_url(); ?>admin/QueriesExternalvalidation">&nbsp &nbsp &nbsp External Validation</a></li>
                   </ul>
                </li>       
            <li><a href="<?php echo base_url(); ?>admin/Reports"> <i class="fa fa-file"></i>Reports</a></li>



          <!-- STUDENT ASSISTANT PART-->
          <?php elseif($this->session->userdata('strRole')==='STUDENT ASSISTANT'):?>
             <li><a href="#MaintenanceDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-cogs"></i>Maintenance </a>
              <ul id="MaintenanceDropdown" class="collapse list-unstyled ">


            <!--    <li><a href="<?php echo base_url(); ?>admin/Locality">Locality</a></li>-->
                <li><a href="<?php echo base_url(); ?>admin/Collector">Collector</a></li>
                <li><a href="<?php echo base_url(); ?>admin/Externalvalidator">External Validators</a></li>
<!--                 <li><a href="<?php echo base_url(); ?>admin/Featuredplant">Featured Plant</a></li> -->

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
            <li><a href="<?php echo base_url(); ?>admin/Reports"> <i class="fa fa-file"></i>Reports</a></li>
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
            <li class="breadcrumb-item active">Deposit Plant</li>
          </ul>
        </div>
      </div>


<div class="tab" >
  <button id = "defaultOpen" class="tablinks" onclick="openCity(event, 'FirstTab')" style="color:white;">Pending</button>
  <button class="tablinks" onclick="openCity(event, 'SecondTab') " style="color:white;">For Deposit</button>
  <button class="tablinks" onclick="openCity(event, 'ThirdTab') " style="color:white;">All</button>
</div>


<div class="tabcontent" id="FirstTab">
       <div class="card mx-4 mt-4">
        <div class="card-body">
         <div class="table-responsive">
            <table class="table dataTable no-footer" id="manageDepositReqPendingtbl">
              <thead>
                <tr>
                  <th scope="col" width= "10%">Deposit ID</th>
                  <th scope="col" width= "10%">Collector's Name</th>
                  <th scope="col" width= "10%">Common Name</th>
                  <th scope="col" width= "10%">Date Collected</th>
                  <th scope="col" width= "10%">Full Location</th>
                  <th scope="col" width= "10%">Date of deposit</th>
                  <th scope="col" width= "10%">Status</th>
                  <th scope="col" width= "10%">Action</th>
                </tr>
              </thead>
<!--                 <tbody id="showdata">
                </tbody> -->
            </table>
        </div>
      </div>
    </div>


         <!-- Modal-->
<div id="viewDepositReq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-justify hide" data-backdrop="static" data-keyboard="false">
  <div role="document" class="modal-dialog" >
    <div class="modal-content" >
           <div class="modal-header">

             <h5 id="exampleModalLabel" class="modal-title">Plant Deposit</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>

      <div class="modal-body">
          <form id= "updateStatusForm" method="POST" enctype="multipart/form-data">



                  <div class="form-group">
                      <label style="font-size: 14px;">Deposit ID:</label>
                      <input type="hidden" name="txtId" id="txtID" value="0">
                       <input type="text" name="txtDepositReqID" id="intDepositReqID" class="form-control" disabled="">
                   </div>

            <div class="row">
                   <div class="col-sm-6" >
                       <label style="font-size: 14px;">Scientific Name:</label>
                       <input type="text" name="txtScientificName" id="strScientificName" class="form-control" disabled>
                   </div>
                     <div class="col-sm-6">
                      <label style="font-size: 14px;">Common Name:</label>
                      <input type="text" name="txtCommonName" id="strCommonName" class="form-control" disabled="">
                    </div>
            </div>

                     <div class="form-group">
                       <label style="font-size: 14px;">Full Locality:</label>
                       <textarea name="txtFullLocation" id="strFullLocation" class="form-control" disabled=""></textarea>
                     </div>


            <div class="row">
                     <div class="col-sm-6">
                       <label style="font-size: 14px;">Date Collected:</label>
                       <input type="text" name="txtdDateCollected" id="dtDateCollected"  class="form-control" disabled="">
                      </div>

                     <div class="col-sm-6">
                       <label style="font-size: 14px;">Collector:</label>
                       <input type="text" name="txtCollector" id="strCollector"  class="form-control" disabled="">
                     </div>
            </div>
                    <div class="form-group">
                      <label style="font-size: 14px;">Description:</label>
                      <textarea name="txtDescription" class="form-control" rows="3" id="strPlantDesc" disabled=""></textarea>
                    </div>

                     <div class="modal-footer">
                      <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-secondary">Cancel</button>

                      <input type="submit" id="btnSave" value="Proceed" class="btn btn-primary">
                     </div>

                 </form>
         </div>
             </div>
          </div>
         </div>
       </div>


<div id="SecondTab" class="tabcontent">
   <div class="card mx-4 mt-4">
        <div class="card-body">
         <div class="table-responsive">
            <table class="table dataTable no-footer" id="manageDepositReqForDepositingtbl">
              <thead>
                <tr>
                  <th scope="col" width= "50%">Deposit ID</th>
                  <th scope="col" width= "50%">Collector's Name</th>
                  <th scope="col" width= "50%">Common Name</th>
                  <th scope="col" width= "50%">Full Location</th>
                  <th scope="col" width= "50%">Date of deposit</th>
                  <th scope="col" width= "50%">Status</th>
                  <th scope="col" width= "50%">Action</th>
                </tr>
              </thead>
<!--            <tbody tbody id="showdata1">
                </tbody> -->
            </table>
        </div>
      </div>
    </div>
<div id="DResched" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-justify hide" data-backdrop="static" data-keyboard="false">
  <div role="document" class="modal-dialog" >
    <div class="modal-content" >
           <div class="modal-header">

             <h5 id="exampleModalLabel" class="modal-title">Re-schedule</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>

      <div class="modal-body">
          <form id= "reschedform" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                      <label>Deposit ID:</label>
                      <input type="hidden" name="txtId" id="txtID" value="0">
                      <input type="hidden" name="txtemail" id="txtEmail" value="">
                       <input type="text" name="txtDepositReqID" id="intDepositReqID" class="form-control" disabled="">
                   </div>

                   <div class="form-group">
                     <label>Collector:</label>
                     <input type="text" name="txtCollector" id="strFullName"  class="form-control" disabled="">
                   </div>

                   <div class="form-group">
                     <label>Date :</label>
                     <input type="Date" name="txtolddate" id="dtoldDate"  class="form-control" disabled="">
                   </div>


                   <div class="form-group">
                       <label>Reason for rescheduling :</label>
                       <textarea row = '5' name="txtreasonforresched" id="txtreason"  class="form-control" ></textarea>
                    </div>

                    <div class="form-group">
                       <label>New Date :</label>
                       <input type="Date" name="txtReschedDate" id="dtReschedDate"   class="form-control">
                   </div>

                   </div>

                     <div class="modal-footer">
                       <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-secondary">Cancel</button>
                      <input type="submit" id="btnSaveResched" value="Proceed" class="btn btn-primary">
                     </div>
                    </form>
                    <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
                     <script type="text/javascript">
                     $('#btnSaveResched').click(function(event){
                          var data = $('#reschedform').serialize();
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

                                if($('#dtReschedDate').val()<todayadd3){
                                           event.preventDefault();
                                            swal({
                                               type: 'error',
                                               title: 'Invalid Date!',
                                               text: 'The new appointment date should be 3 days from now.'
                                             });
                                }else{
                                    if($('#txtreason').val()!=''){
                                      if($('#dtReschedDate').val()!=''){
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
                                                 url: '<?php echo base_url() ?>admin/depreschedadmin',
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

                                                          showAllDepositReqPending();
                                                          showAllDepositReqOkay();
                                                          showAllDepositReqAll();
                                                          $('#DResched').modal('hide');
                                                          document.getElementById("reschedform").reset();
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
         </div>
 </div>
</div>
 <div id="EmailCon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
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
              <input type="email" name="txtEmailCon" id="strEmailAdress" class="form-control col-sm-10" disabled>
            </div>

            <div class="form-group row pr-4">
                      <label class="col-sm-2">From:</label>
                      <input type="email" class="form-control col-sm-10" value= "WBHerbariumTA@gmail.com" disabled>
            </div>
            <br>
             <div class="form-group">
              <label>Deposit Request ID:</label>
              <input type ="hidden" name = "txtId" id = "txtID" value ="0">
              <input type="text" name="txtreqid" id="txtreqID" class="form-control" disabled>
            </div>
              <div class="form-group">
              <label>Date of Visit:</label>
              <input type ="hidden" name = "txtdate" id = "txtID" value ="0">
              <input type="text" name="ntxtdateid" id="txtdateID" class="form-control" disabled>
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
                                   if (result.value) {

                                  $.ajax({
                                  type: 'ajax',
                                  method: 'post',
                                  url: '<?php echo base_url() ?>admin/depositsendMail',
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

                                showAllDepositReqPending();
                                showAllDepositReqOkay();
                                showAllDepositReqAll();
                                $('#EmailCon').modal('hide');
                                document.getElementById("emailform").reset();
                              });
                                  },
                                  error: function(){
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

</div>


 <div id="ThirdTab" class="tabcontent">
  <div class="card mx-4 mt-4">
        <div class="card-body">
         <div class="table-responsive">
            <table class="table dataTable no-footer" id="manageAllDeposittbl">
              <thead>
                <tr>
                  <th scope="col" width= "10%">Deposit ID</th>
                  <th scope="col" width= "10%">Collector's Name</th>
                  <th scope="col" width= "10%">Common Name</th>
                  <th scope="col" width= "10%">Date Collected</th>
                  <th scope="col" width= "10%">Full Location</th>
                  <th scope="col" width= "10%">Status</th>

                </tr>
              </thead>
<!--                 <tbody tbody id="showdata2">
                </tbody> -->
            </table>
        </div>
      </div>
    </div>
 </div>

 <div id="Confirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
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
              <label style="font-size: 14px;">Deposit ID:</label>
              </div>
              <div class="col-sm-8">
                      <input type="hidden" name="txtId" id="txtID" value="0">
                       <input type="text" name="txtDepositReqID" id="intDepositReqID" class="form-control" disabled="">
                     </div>
            </div>
           <div class="form-group row">
            <div class="col-sm-4">
                     <label style="font-size: 14px;">Collector's Name:</label>
                   </div>
                      <div class="col-sm-8">
                      <input type="hidden" name="txtId" id="txtID" value="0">
                       <input type="text" name="txtCollectorName" id="strFullName" class="form-control" disabled="">
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


 </main>
      <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>


 <script type="text/javascript">
    function showAllDepositReqPending()
    {
      $('#manageDepositReqPendingtbl').dataTable().fnClearTable();
      $('#manageDepositReqPendingtbl').dataTable().fnDraw();
      $('#manageDepositReqPendingtbl').dataTable().fnDestroy();
      $('#manageDepositReqPendingtbl').dataTable({
        "autoWidth":false,
         "processing": true,
         "serverSide": false,
         "sAjaxSource": "<?php echo base_url('admin/showAllDepositReqPending')?>",
         "deferLoading": 10,
         "bPaginate": true,
         "aaSorting": [],
         "fnInitComplete": function(){

         }
     });
   }

    $(document).ready(function() {

    //show
    showAllDepositReqPending();

$('#btnSave').click(function(event){
      var data = $('#updateStatusForm').serialize();
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
          url: '<?php echo base_url() ?>admin/updateAcceptStatus',
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
                    $('#viewDepositReq').modal('hide');
                    document.getElementById("updateStatusForm").reset();
                  });
          },
          error: function(){
            alert('Could not update data');
          }
        });
      }
    })
    });


      $(document).on('click', '.view-depositReq', function(){
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
          $('input[name=txtCollector]').val(data.strFullName);
          $('input[name=txtDepositReqID]').val(data.intDepositReqID);
          $('input[name=txtScientificName').val(data.strScientificName);
          $('input[name=txtCommonName').val(data.strCommonName);
          $('input[name=txtdDateCollected]').val(data.dtDateCollected);
          $('textarea[name=txtFullLocation').val(data.strFullLocation);
          $('textarea[name=txtDescription]').val(data.strPlantDesc);
          $('input[name=txtId]').val(data.intDepositReqID)

        },
        error: function(){
          alert('Could not Edit Data');
        }
    });
    });
});
</script>

<script>
    function showAllDepositReqOkay(){

        $('#manageDepositReqForDepositingtbl').dataTable().fnClearTable();
        $('#manageDepositReqForDepositingtbl').dataTable().fnDraw();
        $('#manageDepositReqForDepositingtbl').dataTable().fnDestroy();
        $('#manageDepositReqForDepositingtbl').dataTable({
         "autoWidth":false,
         "processing": true,
         "serverSide": false,
         "sAjaxSource": "<?php echo base_url('admin/showAllDepositReqOkay')?>",
         "deferLoading": 10,
         "bPaginate": true,
         "aaSorting": [],
         "fnInitComplete": function(){

         }
     });
   }

$(document).ready(function() {
    //show
    showAllDepositReqOkay();

    //Show Confirmation
    $(document).on('click', '.view-depositcon', function(){
      var id = $(this).attr('data');
      $('#Confirmation').modal('show');
      $('#Confirmation').find('.Confirmation').text('Confirmation');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/Confirmation',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txtCollectorName').val(data.strFullName);
          $('input[name=txtDepositReqID]').val(data.intDepositReqID);
          $('input[name=txtId]').val(data.intDepositReqID);
          $('input[name=txtStatus]').val(data.strStatus);


        },
        error: function(){
          alert('Could not Edit Data');
        }

    });
    });

     $(document).on('click', '.view-emailcon', function(event){
      var id = $(this).attr('data');
      $('#EmailCon').modal('show');
      $('#EmailCon').find('.EmailCon').text('Email');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/EmailCon',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('#strEmailAdress').val(data.strEmailAddress);
          $('#txtemail').val(data.strEmailAddress);
          $('input[name=txtId]').val(data.intDepositReqID);
          $('#txtreqID').val(data.intDepositReqID);
          $('input[name=txtdate]').val(data.dtAppointmentDate);
          $('#txtdateID').val(data.dtAppointmentDate);

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
          url: '<?php echo base_url() ?>admin/updateConfirmation',
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
                    $('#Confirmation').modal('hide');
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
      $(document).on('click', '.view-DResched', function(){
      var id = $(this).attr('data');
      $('#DResched').modal('show');
      $('#DResched').find('.modal-title').text('Re-Schedule');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/DResched',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txtId]').val(data.intDepositReqID)
          $('input[name=txtCollector]').val(data.strFullName);
          $('input[name=txtDepositReqID]').val(data.intDepositReqID);
          $('input[name=txtolddate]').val(data.dtAppointmentDate);
          $('input[name=txtemail]').val(data.strEmailAddress);


        },
        error: function(){
          alert('Could not Edit Data');
        }
    });
    });

       });
</script>
<script>
    function showAllDepositReqAll()
    {
      $('#manageAllDeposittbl').dataTable().fnClearTable();
      $('#manageAllDeposittbl').dataTable().fnDraw();
      $('#manageAllDeposittbl').dataTable().fnDestroy();
      $('#manageAllDeposittbl').dataTable({
        "autoWidth":false,
         "processing": true,
         "serverSide": false,
         "sAjaxSource": "<?php echo base_url('admin/showAllDepositReqAll')?>",
         "deferLoading": 10,
         "bPaginate": true,
         "aaSorting": [],
         "fnInitComplete": function(){

         }
     });
   }

$(document).ready(function() {
    //show
    showAllDepositReqAll();


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
