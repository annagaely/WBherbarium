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
                <!--<li><a href="<?php echo base_url(); ?>admin/Locality">Locality</a></li>-->
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
            <li class="active">
              <a href="#TransactionDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-undo"></i>Transaction </a>
              <ul id="TransactionDropdown" class="collapse list-unstyled show">

                <li><a href="<?php echo base_url(); ?>admin/Depositplant">Deposit Plant</a></li>
                <!--<li><a href="<?php echo base_url(); ?>admin/Loanplant">Loan Plant</a></li>-->
                <li class="active"><a href="<?php echo base_url(); ?>admin/Externalvalidation">External Validation</a></li>
                <li><a href="<?php echo base_url(); ?>admin/Visits">Visits</a>

                </li>
              </ul>
            </li>
              <li><a href="<?php echo base_url(); ?>admin/Queries"> <i class="fa fa-database"></i>Queries</a></li>
            <li><a href="<?php echo base_url(); ?>admin/Reports"> <i class="fa fa-file"></i>Reports</a></li>



          <!-- STUDENT ASSISTANT PART-->
          <?php elseif($this->session->userdata('strRole')==='STUDENT ASSISTANT'):?>
             <li><a href="#MaintenanceDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-cogs"></i>Maintenance </a>
              <ul id="MaintenanceDropdown" class="collapse list-unstyled ">


              <!--  <li><a href="<?php echo base_url(); ?>admin/Locality">Locality</a></li>-->
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
       <div class="card mx-4 mt-4">
        <div class="card-body">
         <div class="table-responsive">
            <table class="table dataTable no-footer" id="manageEVReqPendingtbl">
              <thead>
                <tr>
                  <th scope="col" width= "10%">Accession Number</th>
                  <th scope="col" width= "10%">Species Name</th>
                  <th scope="col" width= "10%">Collector Name</th>
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
     <div class="card mx-4 mt-4">
        <div class="card-body">
         <div class="table-responsive">
            <table class="table dataTable no-footer" id="manageEVReqOkaytbl">
              <thead>
                <tr>
                  <th scope="col" width= "10%">Accession Number</th>
                  <th scope="col" width= "10%">Species Name</th>
                  <th scope="col" width= "10%">Collector Name</th>
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
       <div class="card mx-4 mt-4">
        <div class="card-body">
         <div class="table-responsive">
            <table class="table dataTable no-footer" id="manageEVReqAlltbl">
              <thead>
                <tr>
                  <th scope="col" width= "10%">Accession Number</th>
                  <th scope="col" width= "10%">Species Name</th>
                  <th scope="col" width= "10%">Collector Name</th>
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
 <div id="viewEV" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-justify hide" data-backdrop="static" data-keyboard="false">
  <div role="document" class="modal-dialog modal-lg" >
    <div class="modal-content" >
           <div class="modal-header">

             <h5 id="exampleModalLabel" class="modal-title">External Validation</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>

      <div class="modal-body">
        <form id="viewEVForm"  method="post" enctype="multipart/form-data">
              <div class = "row">
                <div class="col-sm-6">
                  <label style="font-size: 14px;">Select photos of the specimen <span style="color: red"> *</span></label>
                  <input type="file" name="userfile[]" accept=".jpeg,.jpg,.png" multiple id='files'>
                </div>
              </div>
<hr>
              <div class = "row">
                  <div class="col-sm-6" >
                        <label style="font-size: 14px;">Accession Number:</label>
                        <input type="hidden" name="txtId" id="txtID" value="0">
                        <input type="text" name="txtAccNum" id="strAccessionNumber" class="form-control" disabled="">
                  </div>
                  <div class="col-sm-6" >
                        <label style="font-size: 14px;">Family Name:</label>
                        <input type="text" name="txtFamilyName" id="strFamilyName" class="form-control" disabled>
                  </div>
              </div>
              <div class = "row"  style="margin-top: 5px">
                  <div class="col-sm-6">
                       <label style="font-size: 14px;">Scientific Name:</label>
                      <input type="text" name="txtScientificName" id="strScientificName" class="form-control" disabled="">
                  </div>
                  <div class="col-sm-6" >
                       <label style="font-size: 14px;">Common Name:</label>
                       <input type="text" name="txtCommonName" id="strCommonName" class="form-control" disabled="">
                   </div>
              </div>
                   <div class="form-group"  style="margin-top: 5px">
                       <label style="font-size: 14px;">Full Locality:</label>
                       <!-- <input type="text" name="txtFullLocality" class="form-control" id="strFullLocality" disabled=""> -->
                       <textarea type="text" name="txtFullLocality" class="form-control" id="strFullLocality" disabled=""></textarea>
                  </div>
              <div class = "row"  style="margin-top: 5px">
                  <div class="col-sm-6" >
                       <label style="font-size: 14px;">Collector:</label>
                       <input type="text" name="txtCollector" id="strCollector"  class="form-control" disabled="">
                  </div>
                     <div class="col-sm-6" >
                       <label style="font-size: 14px;">Staff:</label>
                       <input type="text" name="txtStaff" class="form-control" id="strStaff" disabled="">
                     </div>
              </div>
              <div class = "row"  style="margin-top: 5px">
                    <div class="col-sm-6" >
                       <label style="font-size: 14px;">Date Collected:</label>
                       <input type="text" name="txtdDateCollected" class="form-control" id="dtDateCollected" disabled="">
                     </div>
                    <div class="col-sm-6" >
                       <label style="font-size: 14px;">Date Deposited:</label>
                       <input type="text" name="txtDateDeposited" class="form-control" id="dtDateDeposited" disabled="">
                     </div>
              </div>
                    <div class="form-group"  style="margin-top: 5px">
                       <label style="font-size: 14px;">Description:</label>
                       <textarea name="txtDescription" class="form-control" id="strDescription" disabled=""></textarea>
                     </div>
                    <hr>

              <div class = "row">
                <div class="col-sm-6">
                  <label style="font-size: 14px;">Select where to send the Specimen <span style="color: red"> *</span></label>
                 <select name = 'externalvalidator' id='externalvalidators' class='form-control' required>
                  <option value=''>Select External Validator</option>
                 </select>
                </div>
              </div>

                   <div class="form-group">
                     <div class="modal-footer">
                    <button style="margin-left: 300px" type="button" data-dismiss="modal" aria-label="Close" class="btn btn-secondary"> Cancel</button>
                     <input type="submit" id="btnSave" value="Send" class="btn btn-primary" style="margin-left: 300px">
                    </div>
                   </div>

            </form>
            <script type="text/javascript">

            </script>
          </div>
          </div>
        </div>
      </div>

 <div id="EVEmailCon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
    <div role="document" class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="exampleModalLabel" class="modal-title">Email For Follow Up</h5>
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
        </div>

        <div class="modal-body">
          <form id= "EVemailform" method="POST" enctype="multipart/form-data">
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
             <!-- <div class="form-group">
              <label>Deposit Request ID:</label>
              <input type ="hidden" name = "txtId" id = "txtID" value ="0">
              <input type="text" name="txtreqid" id="txtreqID" class="form-control" disabled>
            </div>
              <div class="form-group">
              <label>Date of Visit:</label>
              <input type ="hidden" name = "txtdate" id = "txtID" value ="0">
              <input type="text" name="ntxtdateid" id="txtdateID" class="form-control" disabled>
            </div> -->
            <div class="form-group">
               <label>Message:</label>
                <textarea  id="strCustomMessage" name="txtCustomMessage" class="form-control" placeholder="Type your message here.." ></textarea>
            </div>

                  <div class="modal-footer">
                    <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-secondary"> Cancel</button>
                     <input type="submit" id="btnSend" value="Send" class="btn btn-primary">
                     <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
                     <script type="text/javascript">
                            $('#btnSend').click(function(event){
                                var data = $('#EVemailform').serialize();
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
                                  url: '<?php echo base_url() ?>admin/EVSendMail',
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

                    showAllExValidators();
                    showExValOkay();
                    showExValAll();
                    $('#EVEmailCon').modal('hide');
                    document.getElementById("EVemailform").reset();
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
<div id="EVConfirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
    <div role="document" class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="exampleModalLabel" class="modal-title">Confirmation</h5>
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
        </div>

        <div class="modal-body">
          <form id= "EVConfirmForm" method="POST" enctype="multipart/form-data">
            <div class="form-group row">
                     <div class="col-sm-4">
                       <label style="font-size: 14px;">Plant Deposit ID:</label>
                     </div>
                     <div class="col-sm-8">
                      <input type="hidden" name="txtId" id="txtID" value="0">
                       <input type="text" name="txtPlantDepositReq" id="intPlantDepositID " class="form-control" disabled="">
                     </div>
                     <div class="col-sm-4">
                       <label style="font-size: 14px;">Validator Name:</label>
                     </div>
                       <div class="col-sm-8">
                      <input type="hidden" name="txtId2" id="txtID" value="0">
                       <input type="text" name="txtvalidatorname" id="txtvalidatornames " class="form-control" disabled="">
                     </div>
            </div>
           <!-- <div class="form-group row">
                     <div class="col-sm-4">
                       <label style="font-size: 14px;">Collector's Name:</label>
                     </div>
                     <div class="col-sm-8">
                      <input type="hidden" name="txtId" id="txtID" value="0">
                       <input type="text" name="txtCollectorName" id="strFullName" class="form-control" disabled="">
                     </div>
            </div> -->
            <div class="form-group row">
                     <div class="col-sm-4">
                       <label style="font-size: 14px;">Status:</label>
                     </div>
                     <div class="col-sm-8">
                     <select name="txtStatus" id="strStatus"  class="form-control">
                        <option value="Verified">Verified</option>
                        <option value="Not Verified">Not Verified</option>
                      </select>
                     </div>
            </div>

                  <div class="modal-footer">
                    <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-secondary"> Cancel</button>
                     <input type="submit" id="btnConfirm" value="Confirm" class="btn btn-primary">
                  </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
      <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>


<script type="text/javascript">
    function showExValPending(){

      $('#manageEVReqPendingtbl').dataTable().fnClearTable();
      $('#manageEVReqPendingtbl').dataTable().fnDraw();
      $('#manageEVReqPendingtbl').dataTable().fnDestroy();
      $('#manageEVReqPendingtbl').dataTable({
        "autoWidth":false,
         "processing": true,
         "serverSide": false,
         "sAjaxSource": "<?php echo base_url('admin/showExValPending')?>",
         "deferLoading": 10,
         "bPaginate": true,
         "aaSorting": [],
         "fnInitComplete": function(){

         }
     });
   }

 $(document).ready(function() {
    //show
    showExValPending();

showAllExValidators();

     function showAllExValidators(){
     $.ajax({
       type: 'ajax',
       url: '<?php echo base_url() ?>admin/showAllExValidators',
       async: false,
       dataType: 'json',
       success: function(data){
         var html = '';
         var i;
         for(i=0; i<data.length; i++){
           html +='<option value='+data[i].intValidatorID+'|'+data[i].strEmailAddress+'>'+data[i].strFullName+' from '+data[i].strInstitution+'</option>';
         }
         $('#externalvalidators').append(html);
       },
       error: function(){
         alert('Could not get Data from Database');
       }
     });
   };
    });
  // action="<?php echo base_url(); ?>admin/SendtoExValidator"
              $('#viewEVForm').on('submit',function(event){
              var data = $('#viewEVForm').serialize();
              if($('#files').val()!=''){
              if($('#externalvalidators').val()!=''){
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
                url: '<?php echo base_url() ?>admin/SendtoExValidator',
                data: new FormData(this),
                processData: false,
                contentType: false,
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

                    showExValPending();
                    showExValOkay();
                    showExValAll();
                    $('#viewEV').modal('hide');
                    document.getElementById("viewEVForm").reset();
                         });
                        }
                       });
                      }
                    });

  }else{
    event.preventDefault();
          swal({
            type: 'error',
            title: 'Incomplete input!',
            text: 'Please select a validator.'
          });
  }
}else{
    event.preventDefault();
          swal({
            type: 'error',
            title: 'Incomplete input!',
            text: 'Please select a File.'
          });
  }
   });

$(document).on('click', '.view-EVPending', function(){
      var id = $(this).attr('data');
      $('#viewEV').modal('show');
      $('#viewEV').find('.modal-title').text('View Details');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/viewEV',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){

          $('input[name=txtAccNum').val(data.strAccessionNumber);
          $('input[name=txtFamilyName]').val(data.strFamilyName);
          $('input[name=txtScientificName]').val(data.strScientificName);
          $('input[name=txtCommonName]').val(data.strCommonName);
          $('input[name=txtCollector').val(data.strCollector);
          $('textarea[name=txtFullLocality]').val(data.strFullLocality);
          $('input[name=txtStaff]').val(data.strStaff);
          $('input[name=txtdDateCollected').val(data.dateCollected);
          $('input[name=txtDateDeposited]').val(data.dateDeposited);
          $('textarea[name=txtDescription]').val(data.strDescription);
          $('input[name=txtId]').val(data.intPlantDepositID)
   },
        error: function(){
          alert('Could not Edit Data');
        }

    });
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
         "aaSorting": [],
         "fnInitComplete": function(){

         }
     });
   }

 $(document).ready(function() {
    //show
    showExValOkay();
});
       $(document).on('click', '.view-EVConfirmation', function(){
      var id = $(this).attr('data');
      $('#EVConfirmation').modal('show');
      $('#EVConfirmation').find('.modal-title').text('Confirmation');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/EVConfirmation',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          // $('input[name=txtCollectorName').val(data.strFullName);
          $('input[name=txtPlantDepositReq]').val(data.intDepositID);
          $('input[name=txtId]').val(data.intDepositID);
          $('input[name=txtStatus]').val(data.strStatus);
          $('input[name=txtvalidatorname]').val(data.strFullName);
          $('input[name=txtId2]').val(data.intValidatorID);

        },
        error: function(){
          alert('Could not Edit Data');
        }

    });
    });

      //  $(document).on('click', '.view-EVemailcon', function(){
      //   var id = $(this).attr('data');
      //   $('#EVEmailCon').modal('show');
      //   $('#EVEmailCon').find('.modal-title').text('Email');
      //   $.ajax({
      //     type: 'ajax',
      //     method: 'get',
      //     url: '<?php echo base_url() ?>admin/EVEmailCon',
      //     data: {id: id},
      //     async: false,
      //     dataType: 'json',
      //     success: function(data){
      //       $('#strEmailAdress').val(data.strEmailAddress);
      //       $('#txtemail').val(data.strEmailAddress);
      //       $('input[name=txtId]').val(data.intDepositID);
      //       $('#txtreqID').val(data.intDepositID);

      //     },
      //     error: function(){
      //       alert('Could not Edit Data');
      //     }

      // });
      // });

$('#btnConfirm').click(function(event){
      var data = $('#EVConfirmForm').serialize();
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
          url: '<?php echo base_url() ?>admin/updateEVConfirmation',
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

                    showExValPending();
                    showExValOkay();
                    showExValAll();
                    $('#EVConfirmation').modal('hide');
                    document.getElementById("EVConfirmForm").reset();
                  });

            }else{
              alert('Error');
            }

          },
          error: function(){
            alert('Could not update data');
          }
        });
      }
    })
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
         "aaSorting": [],
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
