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
<?php if($this->session->userdata('strRole')==='CURATOR'):?>
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

              
                 <li><a href="<?php echo base_url(); ?>admin/Speciesauthor">Species Author</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/PlantType">Plant Type</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/SpeciesAltName">Species Alternate Name</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/Plantborrower">Plant Borrower</a></li>
                <li><a href="<?php echo base_url(); ?>admin/Externalvalidator">External Validators</a></li>
                <li><a href="<?php echo base_url(); ?>admin/CalendarManagement">Calendar Management</a></li>
<!--                 <li><a href="<?php echo base_url(); ?>admin/Featuredplant">Featured Plant</a></li> -->

              </ul>
            </li>
            <li><a href="#TransactionDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-undo"></i>Transaction </a>
              <ul id="TransactionDropdown" class="collapse list-unstyled ">

                <li><a href="<?php echo base_url(); ?>admin/Depositplant">Deposit Plant</a></li>
                   <li><a href="<?php echo base_url(); ?>admin/Visits">Visits</a>
                <!--<li><a href="<?php echo base_url(); ?>admin/Loanplant">Loan Plant</a></li>-->
                <li><a href="#ExValidationDropdown" data-toggle="collapse">External Validation</a>
  <ul id="ExValidationDropdown" class="collapse list-unstyled">
    <li style="background-color: #303030;"><a href="<?php echo base_url(); ?>admin/Externalvalidation"> &nbsp; &nbsp;Send to External Validator</a></li>
    <li style="background-color: #303030;"><a href="<?php echo base_url();?>admin/AnswersExValidation"> &nbsp; &nbsp;  Evaluation Results</a></li>
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
             <li><a href="#ReportsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-file"></i>Reports </a>
                <ul id="ReportsDropdown" class="collapse list-unstyled ">
                  <li><a href="<?php echo base_url(); ?>admin/ReportsDeposits">&nbsp;&nbsp;&nbsp;Deposits</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/ReportsVisits">&nbsp;&nbsp;&nbsp;Visits</a></li>
                  <li><a href="<?php echo base_url(); ?>admin/ReportsExVal">&nbsp;&nbsp;&nbsp;External Validation</a></li>
</ul>
</li>

<!--ADMIN-->
 
<?php elseif($this->session->userdata('strRole')=='ADMINISTRATOR'):?>
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
            <li><a href="#TransactionDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-undo"></i>Transaction </a>
              <ul id="TransactionDropdown" class="collapse list-unstyled ">

                <li><a href="<?php echo base_url(); ?>admin/Depositplant">Deposit Plant</a></li>
                   <li><a href="<?php echo base_url(); ?>admin/Visits">Visits</a>
                <!--<li><a href="<?php echo base_url(); ?>admin/Loanplant">Loan Plant</a></li>-->
                <li><a href="#ExValidationDropdown" data-toggle="collapse">External Validation</a>
  <ul id="ExValidationDropdown" class="collapse list-unstyled">
    <li style="background-color: #303030;"><a href="<?php echo base_url(); ?>admin/Externalvalidation"> &nbsp; &nbsp;Send to External Validator</a></li>
    <li style="background-color: #303030;"><a href="<?php echo base_url();?>admin/AnswersExValidation"> &nbsp; &nbsp;  Evaluation Results</a></li>
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
             <li><a href="#ReportsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-file"></i>Reports </a>
                <ul id="ReportsDropdown" class="collapse list-unstyled ">
                  <li><a href="<?php echo base_url(); ?>admin/ReportsDeposits">&nbsp;&nbsp;&nbsp;Deposits</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/ReportsVisits">&nbsp;&nbsp;&nbsp;Visits</a></li>
                  <li><a href="<?php echo base_url(); ?>admin/ReportsExVal">&nbsp;&nbsp;&nbsp;External Validation</a></li>
</ul>
</li>


          <!-- STUDENT ASSISTANT PART-->
<?php elseif($this->session->userdata('strRole')==='STUDENT ASSISTANT'):?>
             <li><a href="#MaintenanceDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-cogs"></i>Maintenance </a>
              <ul id="MaintenanceDropdown" class="collapse list-unstyled ">


              <!--  <li><a href="<?php echo base_url(); ?>admin/Locality">Locality</a></li>-->
                <li><a href="<?php echo base_url(); ?>admin/Collector">Collector</a></li>
                <li><a href="<?php echo base_url(); ?>admin/Externalvalidator">External Validators</a></li>
               <!--  <li><a href="<?php echo base_url(); ?>admin/Featuredplant">Featured Plant</a></li> -->

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

        <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/Dashboard"  >Home</a></li>
            <li class="breadcrumb-item">Maintenance</li>
            <li class="breadcrumb-item active">Locality </li>
          </ul>
        </div>
      </div>

<!--ADD Locality MODAL-->
      <div class="card mx-4">
        <div class="card-header d-flex align-items-center">
          <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add Locality</button>
        </div>
        <!-- Modal-->
        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Add Locality</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                <form id= "addLocalityForm" method="POST" enctype="multipart/form-data">
                  <!--dito ka magbabago sa loob nito-->
                  <div class="form-group">
                    <label for="sCountry">&nbsp; Country</label>
                     <select id ="sCountry" name ="sCountryName"  class="form-control">
                      <option>-- select one --</option>
                    </select>
                   </div>
                 <div class="form-group">
                    <label>Full Location:</label> <label style="color: red">*</label>
                    <input type="text" id="strfullloc" name="txtfullloc" placeholder="Full Location" class="form-control" disabled>
                  </div>
                  <div class="row">
                  <div class="form-group col-sm-6">
                    <label>Province:</label> <label style="color: red">*</label> <br>
                    <select id="sprov" name ="sprovname" class="form-control">
                      <option>-- select one --</option>
                    </select>
                  </div>
                  <div class="form-group col-sm-6">
                  <label>City/Municipality:</label>  <label style="color: red">*</label>
                    <select id="smunicipality" name ="smunicipalityname" class="form-control">
                    </select>
                  </div>
                </div>

                  <div class="form-group">
                    <label>Specific Location:</label> <label style="color: red">*</label>
                    <input type="text" id="sspecificloc" name="spLocName" placeholder="Specific Location" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Shortcut Location:</label> <label style="color: red">*</label>
                    <input type="text" id="sshortcutloc" name="spShorName" placeholder="Shortcut Location" class="form-control">
                  </div>
                 <div class="row">
                  <div class="form-group col-sm-6">
                  <label>Latitude:</label>
                    <input type="text" id="slatitude" name ="slatitudename" placeholder= "Latitude" class="form-control">
                  </div>
                  <div class="form-group col-sm-6">
                    <label>Longitude:</label>
                    <input type="text" id= "slongtitude" name="slongtitudename" placeholder="Longtitude" class="form-control">
                  </div>
                </div>


                  <!--HANGGANG DITO LANG BOI-->
                  <div class="modal-footer">
                    <input type="reset" value="Clear" class="btn btn-secondary">
                    <input type="submit" ID = "btnSave" value="Save" class="btn btn-primary">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--END PHYLUM MODAL-->
      <!--start edit MODAL-->
              <div id="myEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Edit Locality</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                <form id= "editLocalityForm" method="POST" enctype="multipart/form-data"><!--dito ka magbabago sa loob nito-->
                   <div class="row form-group">
                  <div class="col-sm-6">
                     <input type="radio" id="radioPH1"  name="radioChoose1"  onclick="radioCountry1()">
                     <label for="radioPH1">&nbsp; From the Philippines</label>
                   </div>
                   <div class="col-sm-6">
                     <input type="radio" id="radioOthers1" name="radioChoose1" onclick="radioCountry1()">
                     <label for="radioOthers1">&nbsp; From the other Country</label>
                  </div>
                </div>
                 <div class="row">
                  <div class="form-group col-sm-4">

                    <label>Island:</label> <label style="color: red">*</label> <br>

                    <select id ="sisland1" name ="seislandname"  class="form-control">
                      <option value="island0">--Select an Item--</option>
                      <option Value="Luzon"> Luzon</option>
                      <option Value="Visayas">Visayas</option>
                      <option Value="Mindanao">Mindanao</option>
                    </select>
                  </div>
                  <div class="form-group col-sm-4">
                    <label>Region:</label> <label style="color: red">*</label> <br>
                    <select id="sregion1" name ="seregionname" class="form-control">

                    </select>
                    <input type="hidden" name="txtId" value="0">
                  </div>
                  <div class="form-group col-sm-4">
                    <label>Province:</label> <label style="color: red">*</label> <br>
                    <select id="sprov1" name ="seprovname" class="form-control">

                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-sm-6">
                    <label>City/Municipality:</label> <label style="color: red">*</label>
                    <select id="smunicipality1" name ="semunicipalityname" class="form-control">

                    </select>
                  </div>
                  <div class="form-group col-sm-6">
                    <label>Area:</label>
                    <input type="text" name="eaName" id="sarea1" placeholder="Area" class="form-control">
                  </div>
                </div>
                  <div class="form-group">
                    <label>Specific Location:</label> <label style="color: red">*</label>
                    <input type="text" name="espLocName" id="sspecificloc1" placeholder="Specific Location" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Shortcut Location:</label>
                    <input type="text" name="espShorName" id ="sshortcutloc1" placeholder="Shortcut Location" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Country:</label> <label style="color: red">*</label> <br>
                    <input type="text" id="scountry1" value="Philippines" name="scountry" class="form-control"><br>


                    <label id="sotherlocalitylabel">Locality:</label> <label style="color: red">*</label> <br>
                    <input type="text" id = "sotherlocality1" class="form-control" placeholder="Input full locality">
                  </div>
                   <div class="row">
                  <div class="form-group col-sm-6">
                  <label>Latitude:</label>
                    <input type="text" id="slatitude" name ="slatitudename" placeholder= "Latitude" class="form-control">
                  </div>
                  <div class="form-group col-sm-6">
                    <label>Longhitude:</label>
                    <input type="text" id= "slongtitude" name="slongtitudename" placeholder="Longtitude" class="form-control">
                  </div>
                </div>
                  <!--HANGGANG DITO LANG BOI-->
                  <div class="modal-footer">
                    <input type="reset" value="Clear" class="btn btn-secondary">
                    <input type="submit" ID = "btnEditSave" value="Save"class="btn btn-primary">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
       <div class="card mx-4">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table dataTable no-footer" id="manageLocalitytbl">
              <thead>
                <tr>
<!--                   <th scope="col" width= "10%">Locality ID</th> -->

                  <th scope="col" width= "50%">Full Locality</th>
                  <th scope="col" width= "10%">Country</th>
                  <th scope="col" width= "10%">Actions</th>
                </tr>
              </thead>
<!--         <tbody tbody id="showdata">
            </tbody> -->
            </table>
        </div>
      </div>
    </div>

    </main>
    <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/popper.js/umd/popper.min.js"> </script>

    <!--Table-->
    <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.dataTables.min.js"></script>


<script>
function resetForm() {
    document.getElementById("addLocalityForm").reset();

}
</script>


    <script>
      ///FOR ADD FORM//////
      $(document).ready(function () {
        $("#sCountry").change(function () {
          var val = $(this).val();
          if (val != "Philippines") {
            document.getElementById('sprov').disabled = true;
            document.getElementById('smunicipality').disabled = true;
            document.getElementById('sspecificloc').disabled = true;
            document.getElementById('strfullloc').disabled = false;
            }else{
            document.getElementById('sprov').disabled = false;
            document.getElementById('smunicipality').disabled = false;
            document.getElementById('sspecificloc').disabled = false;
            document.getElementById('strfullloc').disabled = true;
            }
        });
        $("#sprov").change(function () {
          var val = $(this).val();

        });
      });



///FOR ADD FORM//////
      $(document).ready(function () {
        $("#sisland1").change(function () {
          var val = $(this).val();
          if (val == "Luzon") {
            $("#sregion1").html("<option value='region0'>-- select one --</option><option value='Region I'>Ilocos Region (Region 1)</option><option value='CAR'>Cordillera Administrative Region</option><option value='Region II'>Cagayan Valley (Region II)</option><option value='Region III'>Central Luzon (Region III)</option><option value='Region IV-A'>CALABARZON (Region IV-A)</option><option value='Region IV-B'>MIMAROPA (Region IV-B)</option><option value='NCR'>National Capital Region (NCR)</option><option value='Region V'>Bicol Region (Region V)</option>");

          } else if (val == "Visayas") {
            $("#sregion1").html("<option value='region0'>-- select one --</option><option value='Region VI'>Western Visayas(Region VI)</option><option value='Region VII'>Central Visayas (Region VII)</option><option value='Region VIII'>Eastern Visayas (Region VIII)</option>");
          } else if (val == "Mindanao") {
            $("#sregion1").html("<option value='region0'>-- select one --</option><option value='Region IX'>Zamboanga Peninsula (Region IX)</option><option value='Region X'>Northern Mindanao (Region X)</option><option value='Region XI'>Davao Region (Region XI)</option><option value='Region XII'>SOCCSKSARGEN (Region XII)</option><option value='Region XIII'>Caraga Region (Region XIII)</option><option value='ARMM'>Autonomous Region in Muslim Mindanao (ARMM)</option>");
          } else if (val == "island0") {
            $("#sregion1").html("<option value='region0'>-- select one --</option>");
          }
        });
        $("#sregion1").change(function () {
          var val = $(this).val();
          if (val == "Region I") {
            $("#sprov1").html("<option value='prov0'>-- select one --</option><option value='Ilocos Norte'>Ilocos Norte</option><option value='Ilocos Sur'>Ilocos Sur</option><option value='La Union'>La Union</option><option value='Pangasinan'>Pangasinan</option>");
          } else if (val == "Region II") {
            $("#sprov1").html("<option value='prov0'>-- select one --</option><option value='Batanes'>Batanes</option><option value='Cagayan'>Cagayan</option><option value='Isabela'>Isabela</option><option value='Nueva Vizcaya'>Nueva Vizcaya</option><option value='Quirino'>Quirino</option>");
          } else if (val == "CAR") {
            $("#sprov1").html("<option value='prov0'>-- select one --</option><option value='Abra'>Abra</option><option value='Apayao'>Apayao</option><option value='Benguet'>Benguet</option><option value='Ifugao'>Ifugao</option><option value='Kalinga'>Kalinga</option><option value='Mountain Province'>Mountain Province</option>")
          } else if (val == "Region III") {
            $("#sprov1").html("<option value='prov0'>-- select one --</option><option value='Aurora'>Aurora</option><option value='Bataan'>Bataan</option><option value='Bulacan'>Bulacan</option><option value='Nueva Ecija'>Nueva Ecija</option><option value='Pampanga'>Pampanga</option><option value='Tarlac'>Tarlac</option><option value='Zambales'>Zambales</option>")
          } else if (val == "Region IV-A") {
            $("#sprov1").html("<option value='prov0'>-- select one --</option><option value='Batangas'>Batangas</option><option value='Cavite'>Cavite</option><option value='Laguna'>Laguna</option><option value='Rizal'>Rizal</option><option value='Quezon'>Quezon</option>")
          } else if (val == "Region IV-B") {
            $("#sprov1").html("<option value='prov0'>-- select one --</option><option value='Marinduque'>Marinduque</option><option value='Occidental Mindoro'>Occidental Mindoro</option><option value='Oriental Mindoro'>Oriental Mindoro</option><option value='Palawan'>Palawan</option><option value='Romblon'>Romblon</option>")
          } else if (val == "Region V") {
            $("#sprov1").html("<option value='prov0'>-- select one --</option><option value='Albay'>Albay</option><option value='Camarines Norte'>Camarines Norte</option><option value='Camarines Sur'>Camarines Sur</option><option value='Catanduanes'>Catanduanes</option><option value='Masbate'>Masbate</option><option value='Sorsogon'>Sorsogon</option>")
          } else if (val == "Region VI") {
            $("#sprov1").html("<option value='prov0'>-- select one --</option><option value='Aklan'>Aklan</option><option value='Antique'>Antique</option><option value='Capiz'>Capiz</option><option value='Guimaras'>Guimaras</option><option value='Iloilo'>Iloilo</option><option value='Negros Occidental'>Negros Occidental</option>")
          } else if (val == "Region VII") {
            $("#sprov1").html("<option value='prov0'>-- select one --</option><option value='Bohol'>Bohol</option><option value='Cebu'>Cebu</option><option value='Negros Oriental'>Negros Oriental</option><option value='Siquijor'>Siquijor</option>")
          } else if (val == "Region VIII") {
            $("#sprov1").html("<option value='prov0'>-- select one --</option><option value='Biliran'>Biliran</option><option value='Eastern Samar'>Eastern Samar</option><option value='Leyte'>Leyte</option><option value='Northern Samar'>Northern Samar</option><option value='Southern Leyte'>Southern Leyte</option><option value='Western Samar'>Western Samar (Samar)</option>")
          } else if (val == "Region IX") {
            $("#sprov1").html("<option value='prov0'>-- select one --</option><option value='Zamboanga del Norte'>Zamboanga del Norte</option><option value='Zamboanga Sibugay'>Zamboanga Sibugay</option><option value='Zamboanga del Sur'>Zamboanga del Sur</option>")
          } else if (val == "Region X") {
            $("#sprov1").html("<option value='prov0'>-- select one --</option><option value='Bukidnon'>Bukidnon</option><option value='Camiguin'>Camiguin</option><option value='Lanao del Norte'>Lanao del Norte</option><option value='Misamis Occidental'>Misamis Occidental</option><option value='Misamis Oriental'>Misamis Oriental</option>")
          } else if (val == "Region XI") {
            $("#sprov1").html("<option value='prov0'>-- select one --</option><option value='Compostela Valley'>Compostela Valley</option><option value='Davao del Norte'>Davao del Norte</option><option value='Davao del Sur'>Davao del Sur</option><option value='Davao Oriental'>Davao Oriental</option>")
          } else if (val == "Region XII") {
            $("#sprov1").html("<option value='prov0'>-- select one --</option><option value='Cotabato'>North Cotabato</option><option value='Sarangani'>Sarangani</option><option value='South Cotabato'>South Cotabato</option><option value='Sultan Kudarat'>Sultan Kudarat</option>")
          } else if (val == "Region XIII") {
            $("#sprov1").html("<option value='prov0'>-- select one --</option><option value='Agusan del Norte'>Agusan del Norte</option><option value='Agusan del Sur'>Agusan del Sur</option><option value='Dinagat Islands'>Dinagat Islands</option><option value='Surigao del Norte'>Surigao del Norte</option><option value='Surigao del Sur'>Surigao del Sur</option><option value='Butuan'>Butuan</option>")
          } else if (val == "ARMM") {
            $("#sprov1").html("<option value='prov0'>-- select one --</option><option value='Basilan'>Basilan</option><option value='Lanao del Sur'>Lanao del Sur</option><option value='Maguindanao'>Maguindanao</option><option value='Sulu'>Sulu</option><option value='Tawi-Tawi'>Tawi-Tawi</option>")
          } else if (val == "NCR") {
            $("#sprov1").html("<option value='prov0'>-- none --</option>")
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Caloocan'>Caloocan</option><option value='Las Piñas'>Las Piñas</option><option value='Makati'>Makati</option><option value='Malabon'>Malabon</option><option value='Mandaluyong'>Mandaluyong</option><option value='Manila'>City of Manila</option><option value='Marikina'>Marikina</option><option value='Muntinlupa'>Muntinlupa</option><option value='Navotas'>Navotas</option><option value='Parañaque'>Parañaque</option><option value='Pasay'>Pasay</option><option value='Pasig'>Pasig</option><option value='Pateros'>Pateros</option><option value='Quezon City'>Quezon City</option><option value='San Juan'>San Juan</option><option value='Taguig'>Taguig</option><option value='Valenzuela'>Valenzuela</option>")
          }
        });
        $("#sprov1").change(function () {
          var val = $(this).val();
          if (val == "Ilocos Norte") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Adams'>Adams</option><option value='Bacarra'>Bacarra</option><option value='Badoc'>Badoc</option><option value='Bangui'>Bangui</option><option value='Batac'>Batac</option><option value='Burgos'>Burgos</option><option value='Carasi'>Carasi</option><option value='Currimao'>Currimao</option><option value='Dingras'>Dingras</option><option value='Dumalneg'>Dumalneg</option><option value='Espiritu'>Espiritu</option><option value='Laoag City'>Laoag City</option><option value='Marcos'>Marcos</option><option value='Nueva Era'>Nueva Era</option><option value='Pagudpud'>Pagudpud</option><option value='Paoay'>Paoay</option><option value='Pasuquin'>Pasuquin</option><option value='Piddig'>Piddig</option><option value='Pinili'>Pinili</option><option value='San Nicolas'>San Nicolas</option><option value='Sarrat'>Sarrat</option><option value='Solsona'>Solsona</option><option value='Vintar'>Vintar</option>")
          } else if (val == "Ilocos Sur") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Alilem'>Alilem</option><option value='Banayoyo'>Banayoyo</option><option value='Bantay'>Bantay</option><option value='Burgos'>Burgos</option><option value='Cabugao'>Cabugao</option><option value='Candon'>Candon</option><option value='Caoayan'>Caoayan</option><option value='Cervantes'>Cervantes</option><option value='Galimuyod'>Galimuyod</option><option value='Gergorio del Pilar'>Gergorio del Pilar</option><option value='Lidlida'>Lidlida</option><option value='Magsingal'>Magsingal</option><option value='Nagbukel'>Nagbukel</option><option value='Narvacan'>Narvacan</option><option value='Quirino'>Quirino</option><option value='Salcedo'>Salcedo</option><option value='San Emilio'>San Emilio</option><option value='San Esteban'>San Esteban</option><option value='San Ildefonso'>San Ildefonso</option><option value='San Juan'>San Juan</option><option value='San Vicente'>San Vicente</option><option value='Santa'>Santa</option><option value='Santa Catalina'>Santa Catalina</option><option value='Santa Cruz'>Santa Cruz</option><option value='Santa Lucia'>Santa Lucia</option><option value='Santa Maria'>Santa Maria</option><option value='Santiago'>Santiago</option><option value='Santo Domingo'>Santo Domingo</option><option value='Sicay'>Sicay</option><option value='Sinait'>Sinait</option><option value='Sugpon'>Sugpon</option><option value='Suyo'>Suyo</option><option value='Tagudin'>Tagudin</option><option value='Vigan'>Vigan</option>")
          } else if (val == "La Union") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Agoo'>Agoo</option><option value='Aringay'>Aringay</option><option value='Bacnotan'>Bacnotan</option><option value='Bagulin'>Bagulin</option><option value='Balaoan'>Balaoan</option><option value='Bangar'>Bangar</option><option value='Bauang'>Bauang</option><option value='Burgos'>Burgos</option><option value='Caba'>Caba</option><option value='Damortis'>Damortis</option><option value='Luna'>Luna</option><option value='Naguilian'>Naguilian</option><option value='Pugo'>Pugo</option><option value='Rosario'>Rosario</option><option value='San Fernando'>San Fernando</option><option value='San Gabriel'>San Gabriel</option><option value='San Juan'>San Juan</option><option value='Santol'>Santol</option><option value='Sto. Tomas'>Sto. Tomas</option><option value='Sudipen'>Sudipen</option><option value='Tubao'>Tubao</option>")
          } else if (val == "Pangasinan") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Agno'>Agno</option><option value='Aguilar'>Aguilar</option><option value='Alaminos'>Alaminos</option><option value='Alcala'>Alcala</option><option value='Anda'>Anda</option><option value='Asingan'>Asingan</option><option value='Balungao'>Balungao</option><option value='Bani'>Bani</option><option value='Basista'>Basista</option><option value='Bautista'>Bautista</option><option value='Bayambang'>Bayambang</option><option value='Binalonan'>Binalonan</option><option value='Binmaley'>Binmaley</option><option value='Bolinao'>Bolinao</option><option value='Bugallon'>Bugallon</option><option value='Burgos'>Burgos</option><option value='Calasiao'>Calasiao</option><option value='Dagupan City'>Dagupan City</option><option value='Dasol'>Dasol</option><option value='Infanta'>Infanta</option><option value='Labrador'>Labrador</option><option value='Laoac'>Laoac</option><option value='Lingayen'>Lingayen</option><option value='Mabini'>Mabini</option><option value='Malasigui'>Malasigui</option><option value='Manaoag'>Manaoag</option><option value='Mangaldan'>Mangaldan</option><option value='Mangatarem'>Mangatarem</option><option value='Mapandan'>Mapandan</option><option value='Natividad'>Natividad</option><option value='Pozorrubio'>Pozorrubio</option><option value='Rosales'>Rosales</option><option value='San Carlos City'>San Carlos City</option><option value='San Fabian'>San Fabian</option><option value='San Jacinto'>San Jacinto</option><option value='San Manuel'>San Manuel</option><option value='San Nicolas'>San Nicolas</option><option value='San Quintin'>San Quintin</option><option value='Sison'>Sison</option><option value='Sta. Barbara'>Sta. Barbara</option><option value='Sta. Maria'>Sta. Maria</option><option value='Sto. Tomas'>Sto. Tomas</option><option value='Sual'>Sual</option><option value='Tayug'>Tayug</option><option value='Umingan'>Umingan</option><option value='Urbiztondo'>Urbiztondo</option><option value='Urdaneta'>Urdaneta</option><option value='Villasis'>Villasis</option>")
          } else if (val == "Abra") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Bucloc'>Bucloc</option><option value='Bucay'>Bucay</option><option value='Daguioman'>Daguioman</option><option value='Danglas'>Danglas</option><option value='Dolores'>Dolores</option><option value='La Paz'>La Paz</option><option value='Lacub'>Lacub</option><option value='Lagayan'>Lagayan</option><option value='Lagiden'>Lagiden</option><option value='Langagilang'>Langagilang</option><option value='Licuan (baay)'>Licuan (baay)</option><option value='Luba'>Luba</option><option value='Malibcong'>Malibcong</option><option value='Manabo'>Manabo</option><option value='Peñarubia'>Peñarubia</option><option value='Pidigan'>Pidigan</option><option value='Pilar'>Pilar</option><option value='Sal-Lapadan'>Sal-Lapadan</option><option value='San Isidro'>San Isidro</option><option value='San Juan'>San Juan</option><option value='San Quintin'>San Quintin</option><option value='Tayum'>Tayum</option><option value='Tineg'>Tineg</option><option value='Tubo'>Tubo</option><option value='Villaviciosa'>Villaviciosa</option>")
          } else if (val == "Apayao") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Calanasan'>Calanasan</option><option value='Conner'>Conner</option><option value='Flora'>Flora</option><option value='Kabugao'>Kabugao</option><option value='Luna'>Luna</option><option value='Pudtol'>Pudtol</option><option value='Sta. Marcela'>Sta. Marcela</option>")
          } else if (val == "Benguet") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Atok'>Atok</option><option value='Baguio City'>Baguio City</option><option value='Bakun'>Bakun</option><option value='Bokod'>Bokod</option><option value='Buguias'>Buguias</option><option value='Itogon'>Itogon</option><option value='Kabayan'>Kabayan</option><option value='Kapangan'>Kapangan</option><option value='Kibungan'>Kibungan</option><option value='La Trinidad'>La Trinidad</option><option value='Mankayan'>Mankayan</option><option value='Sablan'>Sablan</option><option value='Tuba'>Tuba</option><option value='Tablay'>Tablay</option>")
          } else if (val == "Ifugao") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Aguinaldo'>Aguinaldo</option><option value='Asipulo'>Asipulo</option><option value='Banaue'>Banaue</option><option value='Hingyon'>Hingyon</option><option value='Hungduan'>Hungduan</option><option value='Kiangan'>Kiangan</option><option value='Lagawe'>Lagawe</option><option value='Lamut'>Lamut</option><option value='Mayaoyao'>Mayaoyao(Mayoyao)</option><option value='Potia'>Potia</option><option value='Tinoc'>Tinoc</option>")
          } else if (val == "Kalinga") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Balbalan'>Balbalan</option><option value='Lubuagan'>Lubuagan</option><option value='Pasil'>Pasil</option><option value='Pinukpuk'>Pinukpuk</option><option value='Rizal'>Rizal</option><option value='Tabuk'>Tabuk</option><option value='Tanudan'>Tanudan</option>")
          } else if (val == "Mountain Province"){
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Barlig'>Barlig</option><option value='Bauko'>Bauko</option><option value='Besao'>Besao</option><option value='Bontoc'>Bontoc</option><option value='Natonin'>Natonin</option><option value='Paracelis'>Paracelis</option><option value='Sabangan'>Sabangan</option><option value='Sadanga'>Sadanga</option><option value='Sagada'>Sagada</option><option value='Tadian'>Tadian</option>")
          } else if (val == "Batanes") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='basco'>Basco</option><option value='Itbayat'>Itbayat</option><option value='Ivana'>Ivana</option><option value='Mahatao'>Mahatao</option><option value='Sabtang'>Sabtang</option><option value='Uyugan'>Uyugan</option>")
          } else if(val == "Cagayan") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Abulug'>Abulug</option><option value='Alcala'>Alcala</option><option value='Allacapan'>Allacapan</option><option value='Amulung'>Amulung</option><option value='Aparri'>Aparri</option><option value='Baggao'>Baggao</option><option value='Ballesteros'>Ballesteros</option><option value='Buguey'>Buguey</option><option value='Calayan'>Calayan</option><option value='Camalaniugan'>Camalaniugan</option><option value='Claveria'>Claveria</option><option value='Enrile'>Enrile</option><option value='Gattaran'>Gattaran</option><option value='Gonzaga'>Gonzaga</option><option value='Iguig'>Iguig</option><option value='Lal-lo'>Lal-lo</option><option value='Lasam'>Lasam</option><option value='Pamplona'>Pamplona</option><option value='Peñablanca'>Peñablanca</option><option value='Piat'>Piat</option><option value='Rizal'>Rizal</option><option value='Sanchez-Mira'>Sanchez-Mira</option><option value='Santa Ana'>Santa Ana</option><option value='Santa Praxedes'>Santa Praxedes</option><option value='Santa Teresita'>Santa Teresita</option><option value='Santo Niño'>Santo Niño</option><option value='Solana'>Solana</option><option value='Turao'>Turao</option>")
          } else if(val == "Isabela") {
           $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Alicia'>Alicia</option><option value='Angadanan'>Angadanan</option><option value='Aurora'>Aurora</option><option value='Benito Soliven'>Benito Soliven</option><option value='Burgos'>Burgos</option><option value='Cabagan'>Cabagan</option><option value='Cabatuan'>Cabatuan</option><option value='Cordon'>Cordon</option><option value='Delfin Albano'>Delfin Albano</option><option value='Dinapigue'>Dinapigue</option><option value='Divilcan'>Divilacan</option><option value='Echague'>Echague</option><option value='Gamu'>Gamu</option><option value='Jones'>Jones</option><option value='Luna'>Luna</option><option value='Maconacon'>Maconacon</option><option value='Mallig'>Mallig</option><option value='Naguilian'>Naguilian</option><option value='Palanan'>Palanan</option><option value='Quezon'>Quezon</option><option value='Quirino'>Quirino</option><option value='Ramon'>Ramon</option><option value='Reina Mercedes'>Reina Mercedes</option><option value='Roxas'>Roxas</option><option value='San Agustin'>San Agustin</option><option value='San Guillermo'>San Guillermo</option><option value='San Isidro'>San Isidro</option><option value='San Manuel'>San Manuel</option><option value='San Mariano'>San Mariano</option><option value='San Mateo'>San Mateo</option><option value='San Pablo'>San Pablo</option><option value='Santa Maria'>Santa Maria</option><option value='Santo Tomas'>Santo Tomas</option><option value='Tumauini'>Tumauini</option>")
          } else if(val == "Nueva Vizcaya") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Alfonso Castañeda'>Alfonso Castañeda</option><option value='Ambaguio'>Ambaguio</option><option value='Aritao'>Aritao</option><option value='Bagabag'>Bagabag</option><option value='Bambang'>Bambang</option><option value='Bayombong'>Bayombong</option><option value='Diadi'>Diadi</option><option value='Dupax del Norte'>Dupax del Norte</option><option value='Dupax del Sur'>Dupax del Sur</option><option value='Kasibu'>Kasibu</option><option value='Kayapa'>Kayapa</option><option value='Quezon'>Quezon</option><option value='Santa Fe'>Santa Fe</option><option value='Solano'>Solano</option><option value='Villaverde'>Villaverde</option>")
          } else if(val == "Quirino") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Aglipay'>Aglipay</option><option value='Cabarroguis'>Cabarroguis</option><option value='Diffun'>Diffun</option><option value='Maddela'>Maddela</option><option value='Nagptipunan'>Nagtipunan</option><option value='Saguday'>Saguday</option>")
          } else if (val == "Aurora") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Baler'>Baler</option><option value='Casiguran'>Casiguran</option><option value='Dilasag'>Dilasag</option><option value='Dinalungan'>Dinalungan</option><option value='Dingalan'>Dingalan</option><option value='Dipaculao'>Dipaculao</option><option value='Maria Aurora'>Maria Aurora</option><option value='San Luis'>San Luis</option>")
          } else if (val == "Bataan") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Abucay'>Abucay</option><option value='Bagac'>Bagac</option><option value='Balanga City'>Balanga City</option><option value='Dinalupihan'>Dinalupihan</option><option value='Hermosa'>Hermosa</option><option value='Limay'>Limay</option><option value='Mariveles'>Mariveles</option><option value='Morong'>Morong</option><option value='Orani'>Orani</option><option value='Orion'>Orion</option><option value='Pilar'>Pilar</option><option value='Samal'>Samal</option>")
          } else if (val == "Bulacan") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Angat'>Angat</option><option value='Balagtas'>Balagtas</option>option value='Baliuag'>Baliuag</option><option value='Bocaue'>Bocaue</option><option value='Bulacan'>Bulacan</option><option value='Bustos'>Bustos</option><option value='Bustos'>Bustos</option><option value='Calumpit'>Calumpit</option><option value='Doña Remedios Trinidad'>Doña Remedios Trinidad</option><option value='Guiguinto'>Guiguinto</option><option value='Hagonoy'>Hagonoy</option><option value='Malolos City'>Malolos City</option><option value='Marilao'>Marilao</option><option value='Meycauayan City'>Meycauayan City</option><option value='Norzagaray'>Norzagaray</option><option value='Obando'>Obando</option><option value='Pandi'>Pandi</option><option value='Paombong'>Paombong</option><option value='Plaridel'>Plaridel</option><option value='Pulilan'>Pulilan</option><option value='San Ildefonso'>San Ildefonso</option><option value='San Jose del Monte City'>San Jose del Monte City</option><option value='San Miguel'>San Miguel</option><option value='San Rafael'>San Rafael</option><option value='Santa Maria'>Santa Maria</option>")
          } else if (val == "Nueva Ecija") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Aliaga'>Aliaga</option><option value='Bongabon'>Bongabon</option><option value='Cabanatuan'>Cabanatuan</option><option value='Cabiao'>Cabiao</option><option value='Carranglan'>Carranglan</option><option value='Cuyapo'>Cuyapo</option><option value='Gabaldon'>Gabaldon</option><option value='Gapan'>Gapan</option><option value='General Mamerto Natividad'>General Mamerto Natividad</option><option value='General Tinio'>General Tinio</option><option value='Guimba'>Guimba</option><option value='Jaen'>Jaen</option><option value='Laur'>Laur</option><option value='Licab'>Licab</option><option value='Llanera'>Llanera</option><option value='Muñoz'>Muñoz</option><option value='Nampicuan'>Nampicuan</option><option value='Palayan'>Palayan</option><option value='Pantabangan'>Pantabangan</option><option value='Peñaranda'>Peñaranda</option><option value='Quezon'>Quezon</option><option value='Rizal'>Rizal</option><option value='San Antonio'>San Antonio</option><option value='San Isidro'>San Isidro</option><option value='Cabaritan'>Cabaritan (San Jose)</option><option value='San Leonardo'>San Leonardo</option><option value='Santa Rosa'>Santa Rosa</option><option value='Santo Domingo'>Santo Domingo</option><option value='Talavera'>Talavera</option><option value='Talugtug'>Talugtug</option><option value='Zaragosa'>Zaragosa</option>")
          } else if (val == "Pampanga") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Angeles'>Angeles</option><option value='Apalit'>Apalit</option><option value='Arayat'>Arayat</option><option value='Bacolor'>Bacolor</option><option value='Candaba'>Candaba</option><option value='Floridablanca'>Floridablanca</option><option value='Guagua'>Guagua</option><option value='Lubao'>Lubao</option><option value='Mabalacat'>Mabalacat</option><option value='Macabebe'>Macabebe</option><option value='Magalang'>Magalang</option><option value='Masantol'>Masantol</option><option value='Mexico'>Mexico</option><option value='Minalin'>Minalin</option><option value='Porac'>Porac</option><option value='San Fernando'>San Fernando</option><option value='San Luis'>San Luis</option><option value='San Simon'>San Simon</option><option value='Santa Ana'>Santa Ana</option><option value='Santa Rita'>Santa Rita</option><option value='Santo Tomas'>Santo Tomas</option><option value='Sasmuan'>Sasmuan</option>")
          } else if (val == "Tarlac") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Anao'>Anao</option><option value='Bamban'>Bamban</option><option value='Camiling'>Camiling</option><option value='Capas'>Capas</option><option value='Concepcion'>Concepcion</option><option value='Gerona'>Gerona</option><option value='La Paz'>La Paz</option><option value='Mayantoc'>Mayantoc</option><option value='Moncada'>Moncada</option><option value='Paniqui'>Paniqui</option><option value='Pura'>Pura</option><option value='Ramos'>Ramos</option><option value='San Clemente'>San Clemente</option><option value='San Jose'>San Jose</option><option value='San Manuel'>San Manuel</option><option value='Santa Ignacia'>Santa Ignacia</option><option value='Tarlac City'>Tarlac City</option><option value='Victoria'>Victoria</option>")
          } else if (val == "Zambales") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Botolan'>Botolan</option><option value='Cabangan'>Cabangan</option><option value='Candelaria'>Candelaria</option><option value='Castillejos'>Castillejos</option><option value='Iba'>Iba</option><option value='Masinloc'>Masinloc</option><option value='Olongapo'>Olongapo</option><option value='Palauig'>Palauig</option><option value='San Antonio'>San Antonio</option><option value='San Felipe'>San Felipe</option><option value='San Marcelino'>San Marcelino</option><option value='San Narciso'>San Narciso</option><option value='Santa Cruz'>Santa Cruz</option><option value='Subic'>Subic</option>")
          } else if (val == "Batangas") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Agoncillo'>Agoncillo</option><option value='Alitagtag'>Alitagtag</option><option value='Balayan'>Balayan</option><option value='Balete'>Balete</option><option value='Batangas City'>Batangas City</option><option value='Bauan'>Bauan</option><option value='Calaca'>Calaca</option><option value='Calatagan'>Calatagan</option><option value='Cuenca'>Cuenca</option><option value='Ibaan'>Ibaan</option><option value='Laurel'>Laurel</option><option value='Lemery'>Lemery</option><option value='Lian'>Lian</option><option value='Lipa'>Lipa</option><option value='Lobo'>Lobo</option><option value='Mabini'>Mabini</option><option value='Malvar'>Malvar</option><option value='Mataasnakahoy'>Mataasnakahoy</option><option value='Nasugbu'>Nasugbu</option><option value='Padre Garcia'>Padre Garcia</option><option value='Rosario'>Rosario</option><option value='San Jose'>San Jose</option><option value='San Juan'>San Juan</option><option value='San Luis'>San Luis</option><option value='San Nicolas'>San Nicolas</option><option value='San Pascual'>San Pascual</option><option value='Santa Teresita'>Santa Teresita</option><option value='Santo Tomas'>Santo Tomas</option><option value='Taal'>Taal</option><option value='Talisay'>Talisay</option><option value='Tanauan'>Tanauan</option><option value='Taysan'>Taysan</option><option value='Tingloy'>Tingloy</option><option value='Tuy'>Tuy</option>")
          } else if (val == "Laguna") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Alaminos'>Alaminos</option><option value='Bay'>Bay</option><optiion value='Biñan'>Biñan</option><option value='Cabuyao'>Cabuyao</option><option value='Calamba'>Calamba</option><option value='Calauan'>Calauan</option><option value='Cavinti'>Cavinti</option><option value='Famy'>Famy</option><option value='Kalayaan'>Kalayaan</option><option value='Liliw'>Liliw</option><option value='Los Baños'>Los Baños</option><option value='Luisiana'>Luisiana</option><option value='Lumban'>Lumban</option><option value='Mabitac'>Mabitac</option><option value='Magdalena'>Magdalena</option><option value='Majayjay'>Majayjay</option><option value='Nagcarlan'>Nagcarlan</option><option value='Paete'>Paete</option><option value='Pagsanjan'>Pagsanjan</option><option value='Pakil'>Pakil</option><option value='Pangil'>Pangil</option><option value='Pila'>Pila</option><option value='Rizal'>Rizal</option><option value='San Pablo'>San Pablo</option><option value='Santa Cruz'>Santa Cruz</option><option value='Santa Maria'>Santa Maria</option><option value='Santa Rosa'>Santa Rosa</option><option value='Siniloan'>Siniloan</option><option value='Victoria'>Victoria</option>")
          }
          else if (val == "Cavite") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Alfonso'>Alfonso</option><option value='Amadeo'>Amadeo</option><option value='Bacoor'>Bacoor</option><option value='Carmona'>Carmona</option><option value='Cavite City'>Cavite City</option><option value='Dasmariñas'>Dasmariñas</option><option value='Gen. Emilio Aguinaldo'>Gen. Emilio Aguinaldo</option><option value='Gen. Mariano Alvarez'>Gen. Mariano Alvarez</option><option value='General Trias'>General Trias</option><option value='Imus'>Imus</option><option value='Indang'>Indang</option><option value='Kawit'>Kawit</option><option value='Magallanes'>Magallanes</option><option value='Maragondon'>Maragondon</option><option value='Mendez'>Mendez</option><option value='Naic'>Naic</option><option value='Noveleta'>Noveleta</option><option value='Rosario'>Rosario</option><option value='Silang'>Silang</option><option value='Tagaytay'>Tagaytay</option><option value='Tanza'>Tanza</option><option value='Ternate'>Ternate</option><option value='Trece Martires'>Trece Martires</option>")
          } else if (val == "Rizal") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Antipolo'>Antipolo</option><option value='Baras'>Baras</option><option value='Binangonan'>Binangonan</option><option value='Cainta'>Cainta</option><option value='Cardona'>Cardona</option><option value='Jalajala'>Jalajala</option><option value='Morong'>Morong</option><option value='Pililla'>Pililla</option><option value='Rodriguez'>Rodriguez</option><option value='San Mateo'>San Mateo</option><option value='Tanay'>Tanay</option><option value='Taytay'>Taytay</option><option value='Teresa'>Teresa</option>")
          } else if (val == "Quezon") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Agdangan'>Agdangan</option><option value='Alabat'>Alabat</option><option value='Atimonan'>Atimonan</option><option value='Buenavista'>Buenavista</option><option value='Burdeos'>Burdeos</option><option value='Calauag'>Calauag</option><option value='Candelaria'>Candelaria</option><option value='Catanauan'>Catanauan</option><option value='Dolores'>Dolores</option><option value='General Luna'>General Luna</option><option value='General Nakar'>General Nakar</option><option value='Guinayangan'>Guinayangan</option><option value='Gumaca'>Gumaca</option><option value='Infanta'>Infanta</option><option value='Jomalig'>Jomalig</option><option value='Lopez'>Lopez</option><option value='Lucban'>Lucban</option><option value='Lucena'>Lucena</option><option value='Macalelon'>Macalelon</option><option value='Mauban'>Mauban</option><option value='Mulanay'>Mulanay</option><option value='Padre Burgos'>Padre Burgos</option><option value='Pagbilao'>Pagbilao</option><option value='Panukulan'>Panukulan</option><option value='Patnanungan'>Patnanungan</option><option value='Perez'>Perez</option><option value='Pitogo'>Pitogo</option><option value='Plaridel'>Plaridel</option><option value='Polillo'>Polillo</option><option value='Quezon'>Quezon</option><option value='Real'>Real</option><option value='Sampaloc'>Sampaloc</option><option value='San Andres'>San Andres</option><option value='San Antonio'>San Antonio</option><option value='San Francisco'>San Francisco (Aurora)</option><option value='San Narciso'>San Narciso</option><option value='Sariaya'>Sariaya</option><option value='Tangkawayan'>Tangkawayan</option><option value='Tayabas'>Tayabas</option><option value='Tiaong'>Tiaong</option><option value='Unisan'>Unisan</option>")
          } else if (val == "Marinduque") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Boac'>Boac</option><option value='Buenavista'>Buenavista</option><option value='Gasan'>Gasan</option><option value='Mogpog'>Mogpog</option><option value='Santa Cruz'>Santa Cruz</option><option value='Torrijos'>Torrijos</option>")
          } else if (val == "Occidental Mindoro") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Abra de Ilog'>Abra de Ilog</option><option value='Calintaan'>Calintaan</option><option value='Looc'>Looc</option><option value='Lubang'>Lubang</option><option value='Magsaysay'>Magsaysay</option><option value='Mamburao'>Mamburao</option><option value='Paluan'>Paluan</option><option value='Rizal'>Rizal</option><option value='Sablayan'>Sablayan</option><option value='San Jose'>San Jose</option><option value='Santa Cruz'>Santa Cruz</option>")
          } else if (val == "Oriental Mindoro") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Baco'>Baco</option><option value='Bansud'>Bansud</option><option value='Bongabong'>Bongabong</option><option value='Bulalacao'>Bulalacao (San Pedro)</option><option value='Calapan'>Calapan</option><option value='Gloria'>Gloria</option><option value='Mansalay'>Mansalay</option><option value='Naujan'>Naujan</option><option value='Pinamalayan'>Pinamalayan</option><option value='Pola'>Pola</option><option value='Puerto Galera'>Puerto Galera</option><option value='Roxas'>Roxas</option><option value='San Teodoro'>San Teodoro</option><option value='Socorro'>Socorro</option><option value='Victoria'>Victoria</option>")
          } else if (val == "Palawan") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Aborlan'>Aborlan</option><option value='Agutaya'>Agutaya</option><option value='Araceli'>Araceli</option><option value='Balabac'>Balabac</option><option value='Bataraza'>Bataraza</option><option value='Brooke's Point'>Brooke's Point</option>")
          } else if (val == "Romblon") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Alcantara'>Alcantara</option><option value='Banton'>Banton (Jones)</option><option value='Cajidiocan'>Cajidiocan</option><option value='Calatrava'>Calatrava</option><option value='Concepcion'>Concepcion</option><option value='Corcuera'>Corcuera</option><option value='Ferrol'>Ferrol</option><option value='Looc'>Looc</option><option value='Magdiwang'>Magdiwang</option><option value='Odiongan'>Odiongan</option><option value='Romblon'>Romblon</option><option value='San Agustin'>San Agustin</option><option value='San Andres'>San Andres</option><option value='San Fernando'>San Fernando</option><option value='San Jose'>San Jose</option><option value='Santa Fe'>Santa Fe</option><option value='Santa Maria'>Santa Maria (Imelda)</option>")
          } else if (val == "Albay") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Bacacay'>Bacacay</option><option value='Camalig'>Camalig</option><option value='Daraga'>Daraga</option><option value='Guinobatan'>Guinobatan</option><option value='Jovellar'>Jovellar</option><option value='Libon'>Libon</option><option value='Malilipot'>Malilipot</option><option value='Malinao'>Malinao</option><option value='Manito'>Manito</option><option value='Oas'>Oas</option><option value='Pio Duran'>Pio Duran</option><option value='Polangui'>Polangui</option><option value='Rapu-rapu'>Rapu-rapu</option><option value='Santo Domingo'>Santo Domingo</option><option value='Tiwi'>Tiwi</option>")
          } else if (val== "Camarines Norte") {
            $("#smunicipality1").html("<option value = 'mun0'> -- select one -- </option><option value='Basud'>Basud</option><option value='Capalonga'>Capalonga</option><option value='Daet'>Daet</option><option value='Jose Panganiban'>Jose Panganiban</option><option value='Labo'>Labo</option><option value='Mercedes'>Mercedes</option><option value='Paracale'>Paracale</option><option value='San Lorenzo Ruiz'>San Lorenzo Ruiz</option><option value='San Vicente'>San Vicente</option><option value='Santa Elena'>Santa Elena</option><option value='Talisay'>Talisay</option><option value='Vinzons'>Vinzons</option>")
          } else if (val== "Camarines Sur") {
            $("#smunicipality1").html("<option value = 'mun0'> -- select one -- </option><option value='Baao'>Baao</option><option value='Balatan'>Balatan</option><option value='Bato'>Bato</option><option value='Bombon'>Bombon</option><option value='Buhi'>Buhi</option><option value='Bula'>Bula</option><option value='Cabusao'>Cabusao</option><option value='Calabanga'>Calabanga</option><option value='Camaligan'>Camaligan</option><option value='Canaman'>Canaman</option><option value='Caramoan'>Caramoan</option><option value='Del Gallego'>Del Gallego</option><option value='Gainza'>Gainza</option><option value='Garchitorena'>Garchinotera</option><option value='Goa'>Goa</option><option value='Lagonoy'>Lagonoy</option><option value='Libmanan'>Libmanan</option><option value='Lupi'>Lupi</option><option value='Magarao'>Magarao</option><option value='Milaor'>Milaor</option><option value='Minalabac'>Minalabac</option><option value='Nabua'>Nabua</option><option value='Ocampo'>Ocampo</option><option value='Pamplona'>Pamplona</option><option value='Pasacao'>Pasacao</option><option value='Pili'>Pili</option><option value='Presentacion'>Presentacion</option><option value='Ragay'>Ragay</option><option value='Sagñay'>Sagñay</option><option value='San Fernando'>San Fernando</option><option value='Sipocot'>Sipocot</option><option value='Siruma'>Siruma</option><option value='Tigaon'>Tigaon</option><option value='Tinambac'>Tinambac</option>")
          } else if (val == "Catanduanes") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Bagamonoc'>Bagamonoc</option><option value='Baras'>Baras</option><optiion value='Bato'>Bato</option><option value='Caramoran'>Caramoran</option><opiion value='Gigmoto'>Gigmoto</option><option value='Pandan'>Pandan</option><option value='Panganiban'>Panganiban</option><option value='San Andres'>San Andres</option><option value='San Miguel'>San Miguel</option><option value='Viga'>Viga</option><option value='Virac'>Virac</option>")
          }
          else if (val== "Masbate") {
            $("#smunicipality1").html("<option value = 'mun0'> -- select one -- </option><option value='Aroroy'>Aroroy</option><option value='Baleno'>Baleno</option><option value='Balud'>Balud</option><option value='Batuan'>Batuan</option><option value='Cataingan'>Cataingan</option><option value='Cawayan'>Cawayan</option><option value='Claveria'>Claveria</option><option value='Dimasalang'>Dimasalang</option><option value='Esperanza'>Esperanza</option><option value='Mandaon'>Mandaon</option><option value='Milagros'>Milagros</option><option value='Mobo'>Mobo</option><option value='Monreal'>Monreal</option><option value='Palanas'>Palanas</option><option value='Pio V. Corpuz'>Pio V. Corpuz</option><option value='Placer'>Placer</option><option value='San Fernando'>San Fernando</option><option value='San Jacinto'>San Jacinto</option><option value='San Pascual'>San Pascual</option><option value='Uson'>Uson</option>")
          } else if (val== "Sorsogon") {
            $("#smunicipality1").html("<option value = 'mun0'> -- select one -- </option><option value='Barcelona'>Barcelona</option><option value='Bulan'>Bulan</option><option value='Bulusan'>Bulusan</option><option value='Casiguran'>Casiguran</option><option value='Castilla'>Castilla</option><option value='Donsol'>Donsol</option><option value='Gubat'>Gubat</option><option value='Irosin'>Irosin</option><option value='Juban'>Juban</option><option value='Magallanes'>Magallanes</option><option value='Matnog'>Matnog</option><option value='Pilar'>Pilar</option><option value='Prieto Diaz'>Prieto Diaz</option><option value='Santa Magdalena'>Santa Magdalena</option>")
          } else if (val == "Aklan") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Altavas'>Altavas</option><option value='Balete'>Balete</option><option value='Banga'>Banga</option><option value='Batan'>Batan</option><option value='Buruanga'>Buruanga</option><option value='Ibajay'>Ibajay</option><option value='Kalibo'>Kalibo</option><option value='Lezo'>Lezo</option><option value='Libacao'>Libacao</option><option value='Madalag'>Madalag</option><option value='Makato'>Makato</option><option value='Malay'>Malay</option><option value='Malinao'>Malinao</option><option value='Nabas'>Nabas</option><option value='New Washington'>New Washington</option><option value='Numancia'>Numancia</option><option value='Tangalan'>Tangalan</option>")
          } else if (val == "Antique") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Anini-y'>Anini-y</option><option value='Barbaza'>Barbaza</option><option value='Belison'>Belison</option><option value='Bugasong'>Bugasong</option><option value='Caluya'>Caluya</option><option value='Culasi'>Culasi</option><option value='Hamtic'>Hamtic</option><option value='Laua-an'>Laua-an</option><option value='Libertad'>Libertad</option><option value='Pandan'>Pandan</option><option value='Patnongon'>Patnongon</option><option value='San Jose de Buenavista'>San Jose de Buenavista</option><option value='San Remigio'>San Remigio</option><option value='Sebaste'>Sebaste</option><option value='Sibalom'>Sibalom</option><option value='Tibiao'>Tibiao</option><option value='Tobias Fornier'>Tobias Fornier</option><option value='Valderrama'>Valderrama</option>")
          } else if (val == "Capiz") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Cuartero'>Cuartero</option><option value='Dao'>Dao</option><option value='Dumalag'>Dumalag</option><option value='Dumarao'>Dumarao</option><option value='Ivisan'>Ivisan</option><option value='Jamindan'>Jamindan</option><option value='Maayon'>Maayon</option><option value='Mambusao'>Mambusao</option><option value='Panay'>Panay</option><option value='Panitan'>Panitan</option><option value='Pilar'>Pilar</option><option value='Pontevedra'>Pontevedra</option><option value='President Roxas'>President Roxas</option><option value='Roxas City'>Roxas City</option><option value='Sapian'>Sapian</option><option value='Sigma'>Sigma</option><option value='Tapaz'>Tapaz</option>")
          } else if (val == "Guimaras") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Buenavista'>Buenavista</option><option value='Jordan'>Jordan</option><option value='Nueva Valencia'>Nueva Valencia</option><option value='San Lorenzo'>San Lorenzo</option><option value='Sibunag'>Sibunag</option>")
          } else if (val == "Iloilo") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Ajuy'>Ajuy</option><option value='Alimodian'>Alimodian</option><option value='Anilao'>Anilao</option><option value='Badiangan'>Badiangan</option><option value='Balasan'>Balasan</option><option value='Banate'>Banate</option><option value='Barotac Nuevo'>Barotac Nuevo</option><option value='Barotac Viejo'>Barotac Viejo</option><option value='Batad'>Batad</option><option value='Bingawan'>Bingawan</option><option value='Cabatuan'>Cabatuan</option><option value='Calinog'>Calinog</option><option value='Carles'>Carles</option><option value='Concepcion'>Concepcion</option><option value='Dingle'>Dingle</option><option value='Dueñas'>Dueñas</option><option value='Dumangas'>Dumangas</option><option value='Estancia'>Estancia</option><option value='Guimbal'>Guimbal</option><option value='Igbaras'>Igbaras</option><option value='Iloilo City'>Iloilo City</option><option value='Janiuay'>Janiuay</option><option value='Lambunao'>Lambunao</option><option value='Leganes'>Leganes</option><option value='Leon'>Leon</option><option value='Maasin'>Maasin</option><option value='Miagao'>Miagao</option><option value='Mina'>Mina</option><option value='New Lucena'>New Lucena</option><option value='Oton'>Oton</option><option value='Passi'>Passi</option><option value='Pavia'>Pavia</option><option value='Pototan'>Pototan</option><option value='San Dionisio'>San Dionisio</option><option value='San Enrique'>San Enrique</option><option value='San Joaquin'>San Joaquin</option><option value='San Miguel'>San Miguel</option><option value='San Rafael'>San Rafael</option><option value='Santa Barbara'>Santa Barbara</option><option value='Sara'>Sara</option><option value='Tigbauan'>Tigbauan</option><option value='Tubungan'>Tubungan</option><option value='Zarraga'>Zarraga</option>")
          } else if (val == "Negros Occidental") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Bacolod'>Bacolod</option><option value='Bago'>Bago</option><option value='Binalbagan'>Binalbagan</option><option value='Cadiz'>Cadiz</option><option value='Calatrava'>Calatrava</option><option value='Candoni'>Candoni</option><option value='Cauayan'>Cauayan</option><option value='Enrique B. Magalona'>Enrique B. Magalona (Saravia)</option><option value='Escalante'>Escalante</option><option value='Himamaylan'>Himamaylan</option><option value='Hinigaran'>Hinigaran</option><option value='Hinoba-an'>Hinoba-an (Asia)</option><option value='Ilog'>Ilog</option><option value='Isabela'>Isabela</option><option value='Kabankalan'>Kabankalan</option><option value='La Carlota'>La Carlota</option><option value='La Castellana'>La Castellana</option><option value='Manapla'>Manapla</option><option value='Moises Padilla'>Moises Padilla (Magallon)</option><option value='Murcia'>Murcia</option><option value='Pontevedra'>Pontevedra</option><option value='Pulupudan'>Pulupudan</option><option value='Sagay'>Sagay</option><option value='Salvador Benedicto'>Salvador Benedicto</option><option value='San Carlos'>San Carlos</option><option value='San Enrique'>San Enrique</option><option value='Silay'>Silay</option><option value='Sipalay'>Sipalay</option><option value='Talisay'>Talisay</option><option value='Toboso'>Toboso</option><option value='Valladolid'>Valladolid</option><option value='Victorias'>Victorias</option>")
          } else if (val == "Bohol") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Albuquerque'>Albuquerque</option><option value='Alicia'>Alicia</option><option value='Anda'>Anda</option><option value='Antequera'>Antequera</option><option value='Baclayon'>Baclayon</option><option value='Balilihan'>Balilihan</option><option value='Batuan'>Batuan</option><option value='Bien Unido'>Bien Unido</option><option value='Bilar'>Bilar</option><option value='Buenavista'>Buenavista</option><option value='Calape'>Calape</option><option value='Candijay'>Candijay</option><option value='Carmen'>Carmen</option><option value='Catigbian'>Catigbian</option><option value='Clarin'>Clarin</option><option value='Corella'>Corella</option><option value='Cortes'>Cortes</option><option value='Dagohoy'>Dagohoy</option><option value='Danao'>Danao</option><option value='Dauis'>Dauis</option><option value='Dimiao'>Dimiao</option><option value='Duero'>Duero</option><option value='Garcia-Hernandez'>Garcia-Hernandez</option><option value='Guindulman'>Guindulman</option><option value='Inabanga'>Inabanga</option><option value='Jagna'>Jagna</option><option value='Jetafe'>Jetafe</option><option value='Lila'>Lila</option><option value='Loay'>Loay</option><option value='Loboc'>Loboc</option><option value='Loon'>Loon</option><option value='Mabini'>Mabini</option><option value='Maribojoc'>Maribojoc</option><option value='Panglao'>Panglao</option><option value='Pilar'>Pilar</option><option value='President Garcia'>President Garcia</option><option value='Sagbayan'>Sagbayan</option><option value='San Isidro'>San Isidro</option><option value='San Miguel'>San Miguel</option><option value='Sevilla'>Sevilla</option><option value='Sierra Bullones'>Sierra Bullones</option><option value='sikatuna'>sikatuna</option><option value='Tagbilaran City'>Tagbilaran City</option><option value='Talibon'>Talibon</option><option value='Trinidad'>Trinidad</option><option value='Tubigon'>Tubigon</option><option value='Ubay'>Ubay</option><option value='Valencia'>Valencia</option>")
          } else if (val == "Cebu") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Alcantara'>Alcantara</option><option value='Alcoy'>Alcoy</option><option value='Alegria'>Alegria</option><option value='Aloguinsan'>Aloguinsan</option><option value='Argao'>Argao</option><option value='Asturias'>Asturias</option><option value='Badian'>Badian</option><option value='Balamban'>Balamban</option><option value='Bantayan'>Bantayan</option><option value='Barili'>Barili</option><option value='Bogo'>Bogo</option><option value='Boljoon'>Boljoon</option><option value='Borbon'>Borbon</option><option value='Carcar'>Carcar</option><option value='Carmen'>Carmen</option><option value='Catmon'>Catmon</option><option value='Cebu City'>Cebu City</option><option value='Compostela'>Compostela</option><option value='Consolacion'>Consolacion</option><option value='Cordova'>Cordova</option><option value='Daanbantayan'>Daanbantayan</option><option value='Dalaguete'>Dalaguete</option><option value='Danao'>Danao</option><option value='Dumanjug'>Dumanjug</option><option value='Ginatilan'>Ginatilan</option><option value='Lapu-Lapu'>Lapu-Lapu</option><option value='Liloan'>Liloan</option><option value='Madridejos'>Madridejos</option><option value='Malabuyoc'>Malabuyoc</option><option value='Mandaue'>Mandaue</option><option value='Medellin'>Medellin</option><option value='Minglanilla'>Minglanilla</option><option value='Moalboat'>Moalboat</option><option value='Naga'>Naga</option><option value='Oslob'>Oslob</option><option value='Pilar'>Pilar</option><option value='Pinamungajan'>Pinamungajan</option><option value='Poro'>Poro</option><option value='Ronda'>Ronda</option><option value='Samboan'>Samboan</option><option value='San Fernando'>San Fernando</option><option value='San Francisco'>San Francisco</option><option value='San Remigio'>San Remigio</option><option value='Santa Fe'>Santa Fe</option><option value='Santander'>Santander</option><option value='Sibonga'>Sibonga</option><option value='Sogod'>Sogod</option><option value='Tabogon'>Tabogon</option><option value='Tabuelan'>Tabuelan</option><option value='Talisay'>Talisay</option><option value='Toledo'>Toledo</option><option value='Tuburan'>Tuburan</option><option value='Tudela'>Tudela</option>")
          } else if (val == "Negros Oriental") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Amlan'>Amlan (Ayuquitan)</option><option value='Ayungon'>Ayungon</option><option value='Bacong'>Bacong</option><option value='Bais'>Bais</option><option value='Basay'>Basay</option><option value='Bayawan'>Bayawan (Tulong)</option><option value='Bindoy'>Bindoy (Payabon)</option><option value='Canlaon'>Canlaon</option><option value='Dauin'>Dauin</option><option value='Dumaguete'>Dumaguete</option><option value='Guihulngan'>Guihulngan</option><option value='Jimalalud'>Jimalalud</option><option value='La Libertad'>La Libertad</option><option value='Mabinay'>Mabinay</option><option value='Manjuyod'>Manjuyod</option><option value='Pamplona'>Pamplona</option><option value='San Jose'>San Jose</option><option value='Santa Catalina'>Santa Catalina</option><option value='Siaton'>Siaton</option><option value='Sibulan'>Sibulan</option><option value='Tanjay'>Tanjay</option><option value='Tayasan'>Tayasan</option><option value='Valencia'>Valencia (Luzurriaga)</option><option value='Vallehermoso'>Vallehermoso</option><option value='Zamboanguita'>Zamboanguita</option>")
          } else if (val == "Siquijor") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Enrique Villanueva'>Enrique Villanueva</option><option value='Larena'>Larena</option><option value='Lazi'>Lazi</option><option value='Maria'>Maria</option><option value='San Juan'>San Juan</option><option value='Siquijor'>Siquijor</option>")
          } else if (val == "Biliran") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Almeria'>Almeria</option><option value='Biliran'>Biliran</option><option value='Cabucgayan'>Cabucgayan</option><option value='Caibiran'>Caibiran</option><option value='Culaba'>Culaba</option><option value='Kawayan'>Kawayan</option><option value='Maripipi'>Maripipi</option><option value='Naval'>Naval</option>")
          } else if (val == "Eastern Samar") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Arteche'>Arteche</option><option value='Balangiga'>Balangiga</option><option value='Balangkayan'>Balangkayan</option><option value='Borongan'>Borongan</option><option value='Can-avid'>Can-avid</option><option value='Dolores'>Dolores</option><option value='General MacArthur'>General MacArthur</option><option value='Giporlos'>Giporlos</option><option value='Guiuan'>Guiuan</option><option value='Hernani'>Hernani</option><option value='Jipapad'>Jipapad</option><option value='Lawaan'>Lawaan</option><option value='Llorente'>Llorente</option><option value='Maslog'>Maslog</option><option value='Maydolong'>Maydolong</option><option value='Mercedes'>Mercedes</option><option value='Oras'>Oras</option><option value='Quinapondan'>Quinapondan</option><option value='Salcedo'>Salcedo</option><option value='San Julian'>San Julian</option><option value='San Policarpio'>San Policarpio</option><option value='Sulat'>Sulat</option><option value='Taft'>Taft</option>")
          } else if (val == "Leyte") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Abuyog'>Abuyog</option><option value='Alangalang'>Alangalang</option><option value='Albuera'>Albuera</option><option value='Babatngon'>Babatngon</option><option value='Barauen'>Barauen</option><option value='Barugo'>Barugo</option><option value='Bato'>Bato</option><option value='Baybay'>Baybay</option><option value='Calubian'>Calubian</option><option value='Capoocan'>Capoocan</option><option value='Carigara'>Carigara</option><option value='Dagami'>Dagami</option><option value='Dulag'>Dulag</option><option value='Hilongos'>Hilongos</option><option value='Hindang'>Hindang</option><option value='Inopacan'>Inopacan</option><option value='Isabel'>Isabel</option><option value='Jaro'>Jaro</option><option value='Javier'>Javier</option><option value='Julita'>Julita</option><option value='Kananga'>Kananga</option><option value='La Paz'>La Paz</option><option value='Leyte'>Leyte</option><option value='MacArthur'>MacArthur</option><option value='Mahaplag'>Mahaplag</option><option value='Matag-ob'>Matag-ob</option><option value='Matalom'>Matalom</option><option value='Mayorga'>Mayorga</option><option value='Merida'>Merida</option><option value='Ormoc City'>Ormoc City</option><option value='Palo'>Palo</option><option value='Palompom'>Palompom</option><option value='Pastrana'>Pastrana</option><option value='San Isidro'>San Isidro</option><option value='San Miguel'>San Miguel</option><option value='Santa Fe'>Santa Fe</option><option value='Tabango'>Tabango</option><option value='Tabontabon'>Tabontabon</option><option value='Tacloban City'>Tacloban City</option><option value='Tanauan City'>Tanauan City</option><option value='Tolosa'>Tolosa</option><option value='Tunga'>Tunga</option><option value='Villaba'>Villaba</option>")
          } else if (val == "Northern Samar") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Allen'>Allen</option><option value='Biri'>Biri</option><option value='Bobon'>Bobon</option><option value='Capul'>Capul</option><option value='Catarman'>Catarman</option><option value='Catubig'>Catubig</option><option value='Gamay'>Gamay</option><option value='Laoang'>Laoang</option><option value='Lapinig'>Lapinig</option><option value='Las Navas'>Las Navas</option><option value='Lavezares'>Lavezares</option><option value='Lope de Vega'>Lope de Vega</option><option value='Mapanas'>Mapanas</option><option value='Mondragon'>Mondragon</option><option value='Palapag'>Palapag</option><option value='Pambujan'>Pambujan</option><option value='Rosario'>Rosario</option><option value='San Antonio'>San Antonio</option><option value='San Isidro'>San Isidro</option><option value='San Jose'>San Jose</option><option value='San Roque'>San Roque</option><option value='San Vicente'>San Vicente</option><option value='Silvino Lobos'>Silvino Lobos</option><option value='Victoria'>Victoria</option>")
          } else if (val == "Southern Leyte") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option> <option value='Anahawan'>Anahawan</option> <option value='Bontoc'>Bontoc</option> <option value='Hinunangan'>Hinunangan</option> <option value='Hinundayan'>Hinundayan</option> <option value='Libagon'>Libagon</option> <option value='Liloan'>Liloan</option> <option value='Limasawa'>Limasawa</option> <option value='Macrohon'>Macrohon</option> <option value='Malitbog'>Malitbog</option> <option value='Padre Burgos'>Padre Burgos</option> <option value='Pintuyan'>Pintuyan</option> <option value='Saint Bernard'>Saint Bernard</option> <option value='San Francisco'>San Francisco</option> <option value='San Juan'>San Juan</option> <option value='San Ricardo'>San Ricardo</option> <option value='Silago'>Silago</option> <option value='Sogod'>Sogod</option> <option value='Tomas Oppus'>Tomas Oppus</option>")
          } else if (val== "Western Samar") {
            $("#smunicipality1").html("<option value = 'mun0'> --select one-- </option> <option value='Almagro'>Almagro</option> <option value='Daram'>Daram</option> <option value='Gandara'>Gandara</option> <option value='Hinabangan'>Hinabangan</option> <option value='Jiabong'>Jiabong</option> <option value='Marabut'>Marabut</option> <option value='Matuguinao'>Matuguinao</option> <option value='Motiong'>Motiong</option> <option value='Pagsanghan'>Pagsanghan</option> <option value='Paranas'>Paranas</option> <option value='Pinabacdao'>Pinabacdao</option> <option value='San Jorge'>San Jorge</option> <option value='San Jose de Buan'>San Jose de Buan</option> <option value='San Sebastian'>San Sebastian</option> <option value='Santa Margarita'>Santa Margarita</option> <option value='Santa Rita'>Santa Rita</option> <option value='Santo Niño'>Santo Niño</option> <option value='Tagapul-an'>Tagapul-an</option> <option value='Talalora'>Talalora</option> <option value='Tarangnan'>Tarangnan</option> <option value='Villareal'>Villareal</option> <option value='Zumarraga'>Zumarraga</option>")
        }
          else if (val == "Zamboanga del Norte") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Baliguian'></option><option value='Godod'>Godod</option><option value='Gutalac'>Gutalac</option><option value='Jose Dalman'>Jose Dalman<option value='Kalawit'>Kalawit</option></option><option value='Katipunan'></option><option value='La Libertad'>La Libertad</option><option value='Labason'>Labason</option><option value='Leon B. Postigo'>Leon B. Postigo</option><option value='Liloy'>Liloy</option><option value='Manukan'>Manukan</option><option value='Mutia'>Mutia</option><option value='Piñan'>Piñan</option><option value='Polanco'>Polanco</option><option value='President Manuel A. Roxas'>President Manuel A. Roxas</option><option value='Rizal'>Rizal</option><option value='Salug'>Salug</option><option value='Sergio Osmeña Sr.'>Sergio Osmeña Sr.</option><option value='Siayan'>Siayan</option><option value='Sibuco'>Sibuco</option><option value='Sibutad'>Sibutad</option><option value='Sindangan'>Sindangan</option><option value='Siocon'>Siocon</option><option value='Sirawai'>Sirawai</option><option value='Tampilisan'>Tampilisan</option>")
          } else if (val== "Zamboanga Sibugay") {
            $("#smunicipality1").html("<option value = 'mun0'> --select one-- </option><option value='Alicia'>Alicia</option><option value='Buug'>Buug</option><option value='Diplahan'>Diplahan</option><option value='Imelda'>Imelda</option><option value='Ipil'>Ipil</option><option value='Kabasalan'>Kabasalan</option><option value='Mabuhay'>Mabuhay</option><option value='Malangas'>Malangas</option><option value='Naga'>Naga</option><option value='Olutanga'>Olutanga</option><option value='Payao'>Payao</option><option value='Roseller Lim'>Roseller Lim</option><option value='Siay'>Siay</option><option value='Talusan'>Talusan</option><option value='Titay'>Titay</option><option value='Tungawan'>Tungawan</option>")
          } else if (val== "Zamboanga del Sur") {
            $("#smunicipality1").html("<option value = 'mun0'> --select one-- </option><option value='Aurora'>Aurora</option><option value='Bayog'>Bayog</option><option value='Dimataling'>Dimataling</option><option value='Dinas'>Dinas</option><option value='Dumalinao'>Dumalinao</option><option value='Dumingag'>Dumingag</option><option value='Guipos'>Guipos</option><option value='Josefina'>Josefina</option><option value='Kumalarang'>Kumalarang</option><option value='Labangan'></option><option value='Lakewood'>Lakewood</option><option value='Lapuyan'>Lapuyan</option><option value='Mahayag'>Mahayag</option><option value='Margosatubig'>Margosatubig</option><option value='Midsalip'>Midsalip</option><option value='Molave'>Molave</option><option value='Pitogo'>Pitogo</option><option value='Ramon Magsaysay'>Ramon Magsaysay</option><option value='San Miguel'>San Miguel</option><option value='San Pablo'>San Pablo</option><option value='Sominot'>Sominot</option><option value='Tabina'>Tabina</option><option value='Tambulig'>Tambulig</option><option value='Tigbao'>Tigbao</option><option value='Tukuran'>Tukuran</option><option value='Vincenzo A. Sagun'>Vincenzo A. Sagun</option>")
          } else if (val == "Bukidnon") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Baungon'>Baungon</option><option value='Cabanglasan'>Cabanglasan</option><option value='Damulog'>Damulog</option><option value='Dangcagan'>Dangcagan</option><option value='Don Carlos'>Don Carlos</option><option value='Impasugong'>Impasugong</option><option value='Kadingilan'>Kadingilan</option><option value='Kalilangan'>Kalilangan</option><option value='Kibawe'>Kibawe</option><option value='Kitaotao'>Kitaotao</option><option value='Lantapan'>Lantapan</option><option value='Libona'>Libona</option><option value='Malitbog'>Malitbog</option><option value='Manolo Fortich'>Manolo Fortich</option><option value='Maramag'>Maramag</option><option value='Pangantucan'>Pangantucan</option><option value='Quezon'>Quezon</option><option value='San Fernando'>San Fernando</option><option value='Sumilao'>Sumilao</option><option value='Talakag'>Talakag</option>")
          } else if (val== "Camiguin") {
            $("#smunicipality1").html("<option value = 'mun0'> --select one-- </option><option value='Catarman'>Catarman</option><option value='Guinsiliban'>Guinsiliban</option><option value='Mahinog'>Mahinog</option><option value='Mambajao'>Mambajao</option><option value='Sagay'>Sagay</option>")
          } else if (val== "Lanao del Norte") {
            $("#smunicipality1").html("<option value = 'mun0'> --select one-- </option><option value='Bacolod'>Bacolod</option><option value='Balo-i'>Balo-i</option><option value='Baroy'>Baroy</option><option value='Kapatagan'>Kapatagan</option><option value='Kauswagan'>Kauswagan</option><option value='Kolambugan'>Kolambugan</option><option value='Lala'>Lala</option><option value='Linamon'>Linamon</option><option value='Magsaysay'>Magsaysay</option><option value='Maigo'>Maigo</option><option value='Matungao'>Matungao</option><option value='Munai'>Munai</option><option value='Nunungan'>Nunungan</option><option value='Pantao Ragat'>Pantao Ragat</option><option value='Pantar'>Pantar</option><option value='Poona Piagapo'>Poona Piagapo</option><option value='Salvador'>Salvador</option><option value='Sapad'>Sapad</option><option value='Sultan Naga Dimaporo'>Sultan Naga Dimaporo</option><option value='Tagoloan'>Tagoloan</option><option value='Tangcal'>Tangcal</option><option value='Tubod'>Tubod</option>")
          } else if (val== "Misamis Occidental") {
            $("#smunicipality1").html("<option value = 'mun0'> --select one-- </option><option value='Aloran'>Aloran</option><option value='Baliangao'>Baliangao</option><option value='Bonifacio'>Bonifacio</option><option value='Calamba'>Calamba</option><option value='Clarin'>Clarin</option><option value='Concepcion'>Conception</option><option value='Don Victoriano Chiongbian'>Don Victoriano Chiongbian</option><option value='Jimenez'>Jimenez</option><option value='Lopez Jaena'>Lopez Jaena</option><option value='Panaon'>Panaon</option><option value='Plaridel'>Plaridel</option><option value='Sapang Dalaga'>Sapang Dalaga</option><option value='Sinacaban'>Sinacaban</option><option value='Tudela'>Tudela</option>")
          } else if (val == "Misamis Oriental") {
            $("#smunicipality1").html("<option value = 'mun0'> --select one-- </option><option value='Alubijid'>Alubijid</option><option value='Balingasag'>Balingasag</option><option value='Balingoan'>Balingoan</option><option value='Binuangan'>Binaungan</option><option value='Claveria'>Claveria</option><option value='Gitagum'>Gitagum</option><option value='Initao'>Initao</option><option value='Jasaan'>Jasaan</option><option value='Kinoguitan'>Kinoguitan</option><option value='Lagonglong'>Lagonglong</option><option value='Laguindingan'>Laguindingan</option><option value='Libertad'>Libertad</option><option value='Lugait'>Lugait</option><option value='Magsaysay'>Magsaysay</option><option value='Manticao'>Manticao</option><option value='Medina'>Medina</option><option value='Naawan'>Naawan</option><option value='Opol'>Opol</option><option value='Salay'>Salay</option><option value='Sugbongcogon'>Sugbongcogon</option><option value='Tagoloan'>Tagoloan</option><option value='Talisayan'>Talisayan</option><option value='Villanueva'>Villanueva</option>")
          } else if (val == "Compostela Valley") {
            $("#smunicipality1").html("<option value = 'mun0'> --select one-- </option><option value='Compostela'>Compostela</option><option value='Laak'>Laak</option><option value='Mabini'>Mabini</option><option value='Maco'>Maco</option><option value='Maragusan'>Maragusan</option><option value='Mawab'>Mawab</option><option value='Monkayo'>Monkayo</option><option value='Montevista'>Montevista</option><option value='Nabunturan'>Nabunturan</option><option value='New Bataan'>New Bataan</option><option value='Pantukan'>Pantukan</option>")
          } else if (val== "Davao del Norte") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Asuncion'>Asuncion</option><option value='Braulio E. Dujali'>Braulio E. Dujali</option><option value='Carmen'>Carmen</option><option value='Kapalong'>Kapalong</option><option value='New Corella'>New Corella</option><option value='Panabo'>Panabo</option><option value='Samal'>Samal</option><option value='San Isidro'>San Isidro</option><option value='Santo Tomas'>Santo Tomas</option><option value='Tagum'>Tagum</option><option value='Talaingod'>Talaingod</option>")
        } else if (val== "Davao del Sur") {
          $("#smunicipality1").html("<option value = 'mun0'> --select one-- </option><option value='Bansalan'>Bansalan</option><option value='Hagonoy'>Hagonoy</option><option value='Kiblawan'>Kiblawan</option><option value='Magsaysay'>Magsaysay</option><option value='Malalag'>Malalag</option><option value='Matanao'>Matanao</option><option value='Padada'>Padada</option><option value='Santa Cruz'>Santa Cruz</option><option value='Sulop'>Sulop</option>")
        } else if (val== "Davao Oriental") {
          $("#smunicipality1").html("<option value = 'mun0'> --select one-- </option><option value='Baganga'>Baganga</option><option value='Banaybanay'>Banaybanay</option><option value='Boston'>Boston</option><option value='Caraga'>Caraga</option><option value='Cateel'>Cateel</option><option value='Governor Generoso'>Governor Generoso</option><option value='Lupon'>Lupon</option><option value='Manay'>Manay</option><option value='San Isidro'>San Isidro</option><option value='Tarragona'>Tarragona</option>")
        } else if (val == "North Cotabato") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Alamada'>Alamada</option><option value='Aleosan'>Aleosan</option><option value='Antipas'>Antipas</option><option value='Arakan'>Arakan</option><option value='Banisilan'>Banisilan</option><option value='Carmen'>Carmen</option><option value='Cotabato'>Cotabato</option><option value='Kabacan'>Kabacan</option><option value='Kidapawan'>Kidapawan</option><option value='Libungan'>Libungan</option><option value='M'lang'>M'lang</option><option value='Magpet'>Magpet</option><option value='Makilala'>Makilala</option><option value='Matalam'>Matalam</option><option value='Midsayap'>Midsayap</option><option value='Pigcawayan'>Pigcawayan</option><option value='Pikit'>Pikit</option><option value='President Roxas'>President Roxas</option><option value='Tulunan'>Tulunan</option>")
          } else if (val == "Sarangani") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Alabel'>Alabel</option><option value='Glan'>Glan</option><option value='Kiamba'>Kiamba</option><option value='Maasim'>Maasim</option><option value='Maitum'>Maitum</option><option value='Malapatan'>Malapatan</option><option value='Malungon'>Malungon</option>")
          } else if (val == "South Cotabato") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Banga'>Banga</option><option value='General Santos'>General Santos</option><option value='Koronadal'>Koronadal</option><option value='Lake Sebu'>Lake Sebu</option><option value='Norala'>Norala</option><option value='Polomolok'>Polomolok</option><option value='Santo Niño'>Santo Niño</option><option value='Surallah'>Surallah</option><option value='T'Boli'>T'Boli</option><option value='Tampakan'>Tampakan</option><option value='Tantangan'>Tantangan</option><option value='Tupi'>Tupi</option>")
          } else if (val == "Sultan Kudarat") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Bagumbayan'>Bagumbayan</option><option value='Columbio'>Columbio</option><option value='Esperanza'>Esperanza</option><option value='Isulan'>Isulan</option><option value='Kalamansig'>Kalamansig</option><option value='Lambayong'>Lambayong (Mariano Marcos)</option><option value='Lebak'>Lebak</option><option value='Lutayan'>Lutayan</option><option value='Palimbang'>Palimbang</option><option value='President Quirino'>President Quirino</option><option value='Senator Ninoy Aquino'>Senator Ninoy Aquino</option><option value='Tacurong'>Tacurong</option>")
          } else if (val == "Agusan del Norte") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Buenavista'>Buenavista</option><option value='Butuan'>Butuan</option><option value='Cabadbaran'>Cabadbaran</option><option value='Carmen'>Carmen</option><option value='Jabonga'>Jabonga</option><option value='Kitcharao'>Kitcharao</option><option value='Las Nieves'>Las Nieves</option><option value='Magallanes'>Magallanes</option><option value='Nasipit'>Nasipit</option><option value='Remedios T. Romualdez'>Remedios T. Romualdez</option><option value='Santiago'>Santiago</option><option value='Tubay'>Tubay</option>")
          } else if (val == "Agusan del Sur") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Bayugan'>Bayugan</option><option value='Bunawan'>Bunawan</option><option value='Esperanza'>Esperanza</option><option value='La Paz'>La Paz</option><option value='Loreto'>Loreto</option><option value='Prosperidad'>Prosperidad</option><option value='Rosario'>Rosario</option><option value='San Francisco'>San Francisco</option><option value='San Luis'>San Luis</option><option value='Santa Josefa'>Santa Josefa</option><option value='Sibagat'>Sibagat</option><option value='Talacogon'>Talacogon</option><option value='Trento'>Trento</option><option value='Veruela'>Veruela</option>")
          } else if (val == "Dinagat Islands") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Basilisa'>Basilisa</option><option value='Cagdianao'>Cagdianao</option><option value='Dinagat'>Dinagat</option><option value='Libjo'>Libjo</option><option value='Loreto'>Loreto</option><option value='San Jose'>San Jose</option><option value='Tubajon'>Tubajon</option>")
          } else if (val == "Surigao del Norte") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Alegria'>Alegria</option><option value='Bacuag'>Bacuag</option><option value='Burgos'>Burgos</option><option value='Claver'>Claver</option><option value='Dapa'>Dapa</option><option value='Del Carmen'>Del Carmen</option><option value='General Luna'>General Luna</option><option value='Gigaquit'>Gigaquit</option><option value='Mainit'>Mainit</option><option value='Malimono'>Malimono</option><option value='Pilar'>Pilar</option><option value='Placer'>Placer</option><option value='San Benito'>San Benito</option><option value='San Francisco'>San Francisco (Anao-Aon)</option><option value='San Isidro'>San Isidro</option><option value='Santa Monica'>Santa Monica (Sapao)</option><option value='Sison'>Sison</option><option value='Socorro'>Socorro</option><option value='Surigao City'>Surigao City</option><option value='Tagana-an'>Tagana-an</option><option value='Tubod'>Tubod</option>")
          } else if (val == "Surigao del Sur") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Barobo'>Barobo</option><option value='Bislig'>Bislig</option><option value='Cagwait'>Cagwait</option><option value='Cantilan'>Cantilan</option><option value='Carmen'>Carmen</option><option value='Carrascal'>Carrascal</option><option value='Cortes'>Cortes</option><option value='Hinatuan'>Hinatuan</option><option value='Lanuza'>Lanuza</option><option value='Lianga'>Lianga</option><option value='Lingig'>Lingig</option><option value='Madrid'>Madrid</option><option value='Marihatag'>Marihatag</option><option value='San Agustin'>San Agustin</option><option value='San Miguel'>San Miguel</option><option value='Tagbina'>Tagbina</option><option value='Tago'>Tago</option><option value='Tandag'>Tandag</option>")
          } else if (val == "Butuan") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Butuan'>Butuan City</option>")
          } else if (val == "Basilan") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Akbar'>Akbar</option><option value='Al-Barka'>Al-Barka</option><option value='Hadji Mohammad Ajul'>Hadji Mohammad Ajul</option><option value='Hadji Muhtamad'>Hadji Muhtamad</option><option value='Isabela City'>Isabela City</option><option value='Lamitan'>Lamitan</option><option value='Lantawan'>Lantawan</option><option value='Maluso'>Maluso</option><option value='Sumisip'>Sumisip</option><option value='Tabuan-Lasa'>Tabuan-Lasa</option><option value='Tipo-Tipo'>Tipo-Tipo</option><option value='Tuburan'>Tuburan</option><option value='Ungkaya Pukan'>Ungkaya Pukan</option>")
          } else if (val == "Lanao del Sur") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Amai Manabilang'>Amai Manabilang (Bumbaran)</option><option value='Bacolod-Kalawi'>Bacolod-Kalawi (Bacolod-Grande)</option><option value='Balabagan'>Balabagan</option><option value='Balindong'>Balindong (Watu)</option><option value='Bayang'>Bayang</option><option value='Binidayan'>Binidayan</option><option value='Buadiposo-Buntong'>Buadiposo-Buntong</option><option value='Bubong'>Bubong</option><option value='Butig'>Butig</option><option value='Calanogas'>Calanogas</option><option value='Ditsaan-Ramain'>Ditsaan-Ramain</option><option value='Ganassi'>Ganassi</option><option value='Kapai'>Kapai</option><option value='Kapatagan'>Kapatagan</option><option value='Lumba-Bayabao'>Lumba-Bayabao (Maguing)</option><option value='Lumbaca-Unayan'>Lumbaca-Unayan</option><option value='Lumbatan'>Lumbatan</option><option value='Lumbayanague'>Lumbayanague</option><option value='Madalum'>Madalum</option><option value='Madamba'>Madamba</option><option value='Maguing'>Maguing</option><option value='Malabang'>Malabang</option><option value='Marantao'>Marantao</option><option value='Marawi'>Marawi</option><option value='Marogong'>Marogong</option><option value='Masiu'>Masiu</option><option value='Mulondo'>Mulondo</option><option value='Pagayawan'>Pagayawan (Tatarikan)</option><option value='Piagapo'>Piagapo</option><option value='Picong'>Picong (Sultan Gumander)</option><option value='Poona Bayabao'>Poona Bayabao (Gata)</option><option value='Pualas'>Pualas</option><option value='Saguiaran'>Saguiaran</option><option value='Sultan Dumalondong'>Sultan Dumalondong</option><option value='Tagoloan II'>Tagoloan II</option><option value='Tamparan'>Tamparan</option><option value='Taraka'>Taraka</option><option value='Tubaran'>Tubaran</option><option value='Tugaya'>Tugaya</option><option value='Wao'>Wao</option>")
          } else if (val == "Maguindanao") {

            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value=''></option><option value='Ampatuan'>Ampatuan</option><option value='Barira'>Barira</option><option value='Buldon'>Buldon</option><option value='Buluan'>Buluan</option><option value='Datu Abdullah Sangki'>Datu Abdullah Sangki</option><option value='Datu Anggal Midtimbang'>Datu Anggal Midtimbang</option><option value='Datu  Blah T. Sinsuat'>Datu Blah T. Sinsuat</option><option value='Datu Hoffer Ampatuan'>Datu Hoffer Ampatuan</option><option value='Datu Montawal'>Datu Montawal</option><option value='Datu Odin Sinsuat'>Datu Odin Sinsuat</option><option value='Datu Paglas'>Datu Paglas</option><option value='Datu Piang'>Datu Piang</option><option value='Datu Salibo'>Datu Salibo</option><option value='Datu Saudi-Ampatuan'>Datu Saudi-Ampatuan</option><option value='Datu Unsay'>Datu Unsay</option><option value='General Salipada K. Pendatun'>Datu Salipada K. Pendatun</option><option value='Guindulungan'>Guindulungan</option><option value='Kabuntalan'>Kabuntalan</option><option value='Mamasapano'>Mamasapano</option><option value='Mangudadatu'>Mangudadatu</option><option value='Matanog'>Matanog</option><option value='Northern Kabuntalan'>Northern Kabuntalan</option><option value='Pagalungan'>Pagalungan</option><option value='Paglat'>Paglat</option><option value='Pandag'>Pandag</option><option value='Parang'>Parang</option><option value='Rajah Buayan'>Rajah Buayan</option><option value='Shariff Aguak'>Shariff Aguak</option><option value='Shariff Saydona Mustapha'>Shariff Saydona Mustapha</option><option value='South Upi'>South Upi</option><option value='Sultan Kudarat'>Sultan Kudarat</option><option value='Sultan Mastura'>Sultan Mastura</option><option value='Sultan sa Barongis'>Sultan sa Barongis</option><option value='Sultan Sumagka'>Sultan Sumagka</option><option value='Talayan'>Talayan</option><option value='Upi'>Upi</option>")
          } else if (val == "Sulu") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Banguingui'>Banguingui</option><option value='Hadji Panglima Tahil'>Hadji Panglima Tahil</option><option value='Indanan'>Indanan</option><option value='Jolo'>Jolo</option><option value='Kalingalan Caluang'>Kalingalan Caluang</option><option value='Lugus'>Lugus</option><option value='Luuk'>Luuk</option><option value='Maimbung'>Maimbung</option><option value='Old Panamao'>Old Panamao</option><option value='Omar'>Omar</option><option value='Pandami'>Pandami</option><option value='Panglima Estino'>Panglima Estino</option><option value='Pangutaran'>Pangutaran</option><option value='Parang'>Parang</option><option value='Pata'>Pata</option><option value='Patikul'>Patikul</option><option value='Siasi'>Siasi</option><option value='Talipao'></option><option value='Tapul'></option>")
          } else if (val == "Tawi-Tawi") {
            $("#smunicipality1").html("<option value='mun0'>-- select one --</option><option value='Bongao'>Bongao</option><option value='Languyan'>Languyan</option><option value='Mapun'>Mapun</option><option value='Panglima Sugala'>Panglima Sugala</option><option value='Sapa-Sapa'>Sapa-Sapa</option><option value='Sibutu'>Sibutu</option><option value='Simunul'>Simunul</option><option value='Sitangkai'>Sitangkai</option><option value='South Ubian'>South Ubian</option><option value='Tandubas'>Tandubas</option><option value='Turtle Islands'>Turtle island</option>")
          }
        });
      });

    </script>

<script type="text/javascript">
    function showAllLocality()
    {
      $('#manageLocalitytbl').dataTable().fnClearTable();
      $('#manageLocalitytbl').dataTable().fnDraw();
      $('#manageLocalitytbl').dataTable().fnDestroy();
      $('#manageLocalitytbl').dataTable({
          // "autoWidth":false,
         "processing": true,
         "serverSide": false,
         "sAjaxSource": "<?php echo base_url('admin/showAllLocality')?>",
         "deferLoading": 10,
         "bPaginate": true,
         "aaSorting": [],
         "fnInitComplete": function(){

         }
     });
   }

 $(document).ready(function() {
      //show
    showAllLocality();
showCountries();
function showCountries(){
     $.ajax({
       type: 'ajax',
       url: '<?php echo base_url() ?>admin/showCountries',
       async: false,
       dataType: 'json',
       success: function(data){
         var html = '';
         var i;
         for(i=0; i<data.length; i++){
           html +='<option value="'+data[i].strCountry+'">'+data[i].strCountry+'</option>';
         }
          $('#sCountry').append(html);


       },
       error: function(){
         alert('Could not get Data from Database');
       }
     });
   };
   showProvinces();
function showProvinces(){
     $.ajax({
       type: 'ajax',
       url: '<?php echo base_url() ?>admin/showProvinces',
       async: false,
       dataType: 'json',
       success: function(data){
         var html = '';
         var i;
         for(i=0; i<data.length; i++){
           html +='<option value="'+data[i].strProvince+'">'+data[i].strProvince+'</option>';
         }
          $('#sprov').append(html);


       },
       error: function(){
         alert('Could not get Data from Database');
       }
     });
   };


   showCity();



function showCity(){
  var data = $('#addLocalityForm').serialize();

     $.ajax({
       type: 'ajax',
       url: '<?php echo base_url() ?>admin/showCity',
       async: false,
       data: data,
       dataType: 'json',
       success: function(data){
         var html = '';
         var i;
         for(i=0; i<data.length; i++){
           html +='<option value="'+data[i].strProvince+'">'+data[i].strProvince+'</option>';
         }
          $('#sprov').append(html);


       },
       error: function(){
         alert('Could not get Data from Database');
       }
     });
   };


/////////////adding locality//////////
    $('#btnSave').click(function(){
      var data = $('#addLocalityForm').serialize();
      //validate form

        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/addLocality',
          data: data,
          async: false,
          dataType: 'json',
          success: function($response){
            if(response.success){
              $('#addLocalityForm').modal('hide');
              $('#addLocalityForm')[0].reset();
              showAllLocality();
              }else{
              alert('Error');
            }
          },
          error: function(){
            alert('Could not save Data');
          }
        });

    });



////////////////editing locality////////////
$(document).on('click', '.locality-edit', function(){
      var id = $(this).attr('data');
      $('#myEditModal').modal('show');
      $('#myEditModal').find('.modal-title').text('Edit Locality');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editLocality',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=eaName]').val(data.strArea);
          $('input[name=espLocName]').val(data.strSpecificLocation);
          $('input[name=espShorName]').val(data.strShortLocation);
          $('input[name=txtId]').val(data.intLocalityID);
          $('input[name=slongtitudename]').val(data.strLongtitude);
          $('input[name=slatitudename]').val(data.strLatitude);


        },
        error: function(){$('input[name=txtId]').val(data.intLocalityID);
          alert('Could not Edit Data');
        }

    });

  });

    $('#btnEditSave').click(function(){
      var data = $('#editLocalityForm').serialize();
          $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/updateLocality',
          data: data,
          async: false,
          dataType: 'json',
          success: function(response){
            if(response==true){
              $('#myEditModal').modal('hide');
              $('#editLocalityForm')[0].reset();
              showAllLocality();
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
