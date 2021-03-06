
<!DOCTYPE html>
<html lang="en">
<!--
<?php
    header('Content-Type: text/html; charset=utf-8' );
    ini_set('default_charset', 'utf-8');
?> -->

<head>
      <!--SWAL-->
    <script src="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/package/dist/sweetalert2.min.css">
<!--
 <meta http-equiv="Content-Type" content="text/html; charset= utf-8"> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
  <title><?php echo $title; ?></title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
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
  <!-- Full Calendar-->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/demo/d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-4/vendor/fullcalendar/fullcalendar.min.css">
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
            <li class="active"><a href="#MaintenanceDropdown" aria-expanded="true" data-toggle="collapse"> <i class="fa fa-cogs"></i>Maintenance </a>
              <ul id="MaintenanceDropdown" class="collapse list-unstyled show ">

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
                <li class="active"><a href="<?php echo base_url(); ?>admin/CalendarManagement">Calendar Management</a></li>
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
            <li class="active"><a href="#MaintenanceDropdown" aria-expanded="true" data-toggle="collapse"> <i class="fa fa-cogs"></i>Maintenance </a>
              <ul id="MaintenanceDropdown" class="collapse list-unstyled show">

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
                <li class="active"><a href="<?php echo base_url(); ?>admin/CalendarManagement">Calendar Management</a></li>
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
            <!--     <li><a href="<?php echo base_url(); ?>admin/Featuredplant">Featured Plant</a></li>
 -->
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



  <div class="modal" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Update Calendar Event</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
      <!-- ?php echo form_open(base_url("admin/edit_event"), array("class" => "form-horizontal")) ?> -->
      <form id= "edit_event" method="POST" enctype="multipart/form-data">
      <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Event Name</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="name" value="" id="eeventname">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Description</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="description" id="edescription">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Date</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="estart_date" id="estart_date">
                </div>
        </div>
                <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Start Time</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="estart_time" id="estart_time">
                </div>
        </div>
                <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">End Time</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="eend_time" id="eend_time">
                </div>
        </div>
<!--         <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Delete Event</label>
                    <div class="col-md-8">
                        <input type="checkbox" name="delete" value="1">
                    </div>
            </div> -->
            <input type="hidden" name="eventid" id="event_id" value="0" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" id=btnEditSave value="Update Event">
        <!-- <?php echo form_close() ?> -->
      </form>
      </div>
    </div>
  </div>
</div>




      <section class="pt-4">
        <div class="container-fluid">
          <div class="card">
          <div class="card-header d-flex align-items-center">
            <button type="button" data-toggle="modal" data-target="#addModal" class="btn btn-primary">Add Event</button>
          </div>
    <div class="modal fade text-left hide" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Add Calendar Event</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <form id= "add_event" method="POST" enctype="multipart/form-data">
      <!--   <?php echo form_open(base_url("admin/add_event"), array("class" => "form-horizontal")) ?> -->
        <div class="form-group">
                  <label for="p-in" class="col-md-4 label-heading">Event Name</label>
                  <div class="col-md-8 ui-front">
                      <input type="text" class="form-control" id='name' name="name" value="" autocomplete="off">
                  </div>
          </div>
          <div class="form-group">
                  <label for="p-in" class="col-md-4 label-heading">Description</label>
                  <div class="col-md-8 ui-front">
                      <input type="text" class="form-control" id='description' name="description">
                  </div>
          </div>
          <div class="form-group">
                  <label for="p-in" class="col-md-4 label-heading">Date:</label>
                  <div class="col-md-8">
                      <input type="date" class="form-control" id='start_date' name="start_date">
                  </div>
          </div>
          <div class="form-group">
                  <label for="p-in" class="col-md-4 label-heading">Start Time:</label>
                  <div class="col-md-8">
                      <select class="form-control" id='start_time' name="start_time">
                        <option>08:00</option>
                        <option>08:30</option>
                        <option>09:00</option>
                        <option>09:30</option>
                        <option>10:00</option>
                        <option>10:30</option>
                        <option>11:00</option>
                        <option>11:30</option>
                        <option>13:00</option>
                        <option>13:30</option>
                        <option>14:00</option>
                        <option>14:30</option>
                        <option>15:00</option>
                        <option>15:30</option>
                        <option>16:00</option>
                        <option>16:30</option>
                        <option>17:00</option>
                        <option>17:30</option>
                      </select>
                  </div>
          </div>
                    <div class="form-group">
                  <label for="p-in" class="col-md-4 label-heading">End time:</label>
                  <div class="col-md-8">
                      <select class="form-control" id='end_time' name="end_time">
                                                <option>8:00</option>
                        <option>08:30</option>
                        <option>09:00</option>
                        <option>09:30</option>
                        <option>10:00</option>
                        <option>10:30</option>
                        <option>11:00</option>
                        <option>11:30</option>
                        <option>13:00</option>
                        <option>13:30</option>
                        <option>14:00</option>
                        <option>14:30</option>
                        <option>15:00</option>
                        <option>15:30</option>
                        <option>16:00</option>
                        <option>16:30</option>
                        <option>17:00</option>
                        <option>17:30</option>
                      </select>
                  </div>
          </div>

        <div class="modal-footer">
          <input type="button" class="btn btn-secondary" value="Close" data-dismiss="modal">
          <input type="submit" class="btn btn-primary" id='btnSave' value="Add Event">
          <!-- <?php echo form_close() ?> -->
        </form>
        <script type="text/javascript">
          $('#btnSave').click(function(event){
        var url = '<?php echo base_url()?>admin/add_event';
        var data = $('#add_event').serialize();
        alert($('#start_date').val())
        //validate form
             var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();

    if(dd<10) {
      dd = '0'+dd
    }

    if(mm<10) {
      mm = '0'+mm
    }

    today = yyyy + '-' + mm + '-' +dd ;

        if($('#start_date').val()<today){//check if date is before today

          event.preventDefault();
          swal({
            type: 'error',
            title: 'Invalid Date!',
            text: 'Date selected is past the current date.'
          });

         }else{
           
             
            if($('#end_time').val()>$('#start_time').val()){
             //check if bigger end time
          if($('#name').val()!=''){//check ng values
          if($('#description').val()!=''){
            if($('#start_date').val()!=''){
            event.preventDefault();
            swal({
              title: 'Are you sure?',
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, save it!'
            }).then((result) => {
              if (result.value) {
                $.ajax({
                type: 'ajax',
                method: 'post',
                url: url,
                data: data,
                async: false,
                dataType: 'json',
                success: function(response){
                  if(response=='true'){
                      let timerInterval
                      swal({
                        title: 'Saved',
                        text: 'Your Event has been saved.',
                        type: 'success',
                        timer: 1500,
                        showConfirmButton: true
                      }).then(function() {
                        location.reload();
                      });
                  }else{
                    if(response=='eventsamedttime'){
                      swal({
                    type: 'error',
                    title: 'Already have an Event',
                    text: 'Date and time Already have an Event.'
                   });
                    }else if(response=='visitsamedttime'){
                    swal({
                    type: 'error',
                    title: 'Conflict with Visits',
                    text: 'Date has pending appointments or on going appointments, cancel it first.'
                  });
                    }else{
                    swal({
                    type: 'error',
                    title: 'Conflict with Deposits',
                    text: 'Date has pending appointments or on going appointments, cancel it first.'
                  });
                    }
                }
                },
                error: function(){
alert('error');
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
            title: 'Incorrect input!',
            text: 'Please set a correct time.'
          });
            }
           }

         
      });

        $('#btnEditSave').click(function(event){
      var url = '<?php echo base_url()?>admin/edit_event';
      var data = $('#edit_event').serialize();

var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

if(dd<10) {
    dd = '0'+dd
}
if(mm<10) {
    mm = '0'+mm
}
today = yyyy + '-' + mm + '-' +dd ;
      //validate form
    if($('#estart_date').val()<today){//check if date is before today
      event.preventDefault();
      swal({
        type: 'error',
        title: 'Invalid Date!',
        text: 'Date selected is past the current date.'
      });
    }else{
      if($('#eeventname').val()!=''){
        if($('#edescription').val()!=''){
          if($('#estart_date').val()!=''){
          event.preventDefault();
          swal({
            title: 'Are you sure?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, save it!'
          }).then((result) => {
            if (result.value) {
              $.ajax({
              type: 'ajax',
              method: 'post',
              url: url,
              data: data,
              async: false,
              dataType: 'json',
              success: function(response){
                  if(response=='true'){
                      let timerInterval
                      swal({
                        title: 'Saved',
                        text: 'Your Event has been saved.',
                        type: 'success',
                        timer: 1500,
                        showConfirmButton: true
                      }).then(function() {
                        location.reload();
                      });
                  }else{
                    if(response=='eventsamedttime'){
                      swal({
                    type: 'error',
                    title: 'Already have an Event',
                    text: 'Date and time Already have an Event.'
                   });
                    }else if(response=='visitsamedttime'){
                    swal({
                    type: 'error',
                    title: 'Conflict with Visits',
                    text: 'Date has pending appointments or on going appointments, cancel it first.'
                  });
                    }else{
                    swal({
                    type: 'error',
                    title: 'Conflict with Deposits',
                    text: 'Date has pending appointments or on going appointments, cancel it first.'
                  });
                    }
                }
              },
              error: function(){
                event.preventDefault();
                swal({
                  type: 'error',
                  title: 'Date Invalid',
                  text: 'Date has pending appointments or on going appointments, cancel it first.'
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
    </div>
    </div>
    </div>
        </div>

</section>
      <section>
              <div class="container-fluid">

                <div class="card">
                  <div class="card-header">
                    <h4>Calendar</h4>
                  </div>
                  <div class="card-body">

                    <div id="calendar"></div>
                  </div>
                </div>
              </div>
            </section>
            <script type="text/javascript">
            $(document).ready(function() {
              var date_last_clicked = null;
              $('#calendar').fullCalendar({
                eventSources: [
                {
                  events: function(start, end, timezone, callback) {
                    $.ajax({
                      url: '<?php echo base_url() ?>admin/get_events',
                      dataType: 'json',
                      data: {
                      // our hypothetical feed requires UNIX timestamps
                      start: start.unix(),
                      end: end.unix()
                    },
                    success: function(msg) {
                      var events = msg.events;
                      callback(events);
                    }
                  });
                  }
                },
                ],
                eventClick: function(event, jsEvent, view) {
                      $('#eeventname').val(event.title);
                      $('#edescription').val(event.description);
                      $('#estart_date').val(moment(event.start).format('YYYY-MM-DD'));
                      if(event.end) {
                        $('#end_date').val(moment(event.end).format('YYYY-MM-DD'));
                      } else {
                        $('#end_date').val(moment(event.start).format('YYYY-MM-DD'));
                      }
                      $('#event_id').val(event.id);
                      $('#estart_time').val(event.start_time);
                      $('#eend_time').val(event.end_time);
                      $('#editModal').modal();

            },

              });


            });


            </script>
