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
    <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/popper.js/umd/popper.min.js"> </script>
    <!--Table-->
    <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.dataTables.min.js"></script>



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
          <li><a href="#TransactionDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-undo"></i>Transaction </a>
              <ul id="TransactionDropdown" class="collapse list-unstyled ">

                <li><a href="<?php echo base_url(); ?>admin/Depositplant">Deposit Plant</a></li>
                       <li><a href="<?php echo base_url(); ?>admin/Visits">Visits</a>
                <!--<li><a href="<?php echo base_url(); ?>admin/Loanplant">Loan Plant</a></li>-->
                                <li><a href="#ExValidationDropdown" data-toggle="collapse">External Validation</a>
  <ul id="ExValidationDropdown" class="collapse list-unstyled">
    <li style="background-color: #303030;"><a href="<?php echo base_url(); ?>admin/Externalvalidation"> &nbsp; &nbsp; Send to External Validator</a></li>
    <li style="background-color: #303030;"><a href="<?php echo base_url();?>admin/AnswersExValidation"> &nbsp; &nbsp;  Evaluation Results</a></li>
  </ul>
</li>



                </li>
              </ul>
            </li>

  <li class="active"><a href="#QueriesDropdown" aria-expanded="true" data-toggle="collapse"> <i class="fa fa-database"></i>Queries </a>
                <ul id="QueriesDropdown" class="collapse list-unstyled show">
                  <li><a href="<?php echo base_url(); ?>admin/QueriesAccounts">&nbsp &nbsp &nbsp Accounts</a></li>
                  <li><a href="<?php echo base_url(); ?>admin/QueriesEvents">&nbsp &nbsp &nbsp Events </a></li>
                   <li class="active"><a href="<?php echo base_url(); ?>admin/QueriesDeposits">&nbsp &nbsp &nbsp Deposits</a></li>
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

<!-- HEADER ENDS-->


<div class="breadcrumb-holder">
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/Dashboard" >Home</a></li>
      <li class="breadcrumb-item">Queries</li>
      <li class="breadcrumb-item">Transaction</li>
      <li class="breadcrumb-item active">Deposit</li>
    </ul>
  </div>
</div>


<form id= "queriesDateForm" method="POST" enctype="multipart/form-data">
<div class="container-fluid mt-4">
  <div class="row">
 <div class="col-md-4">
  <label>Status:</label>
   <select id="statustype" name="status" class="form-control">
      <option>-- Select Status --</option>
      <option>Pending</option>
      <option>For Depositing</option>
      <option>Arrived</option>
      <option>Did not Arrive</option>

    </select>
  </div>
   <div class="col-md-4">
        <label> Date:</label>
        <input type="date" name="dateStart"  id="dtStart" class="form-control" >
   </div>
  <div class="col-md-4">
        <label> &nbsp</label>
        <input type="date" name="dateEnd"  id="dtEnd" class="form-control" >
  </div>
  <div class="col-md-12 mt-4" >
        <input type="button" id=  "btnApply" class="btn btn-primary" value="Apply" style="float: right;" >
  </div>
  </div>
</div>
</form>

<div class="mx-4">
   <div class="col-md-20 mt-4" id="divTablePendingD">
      <div class="card  px-3 py-3 ">
        <div class="table-responsive">
          <table class="table table-striped table-hover" id="querytblPendingD">
            <thead>
              <tr role="row">
                <th scope="col" width= "10%">Deposit ID</th>
                <th scope="col" width= "20%">Collector's Name </th>
                <th scope="col" width= "10%">Common Name</th>
                <th scope="col" width= "10%">Date Collected</th>
                <th scope="col" width= "30%">Full Location</th>
                <th scope="col" width= "10%">Date of deposit</th>
                <th scope="col" width= "10%">Status</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="mx-4">
   <div class="col-md-20 mt-4" id="divTableForDepositD">
      <div class="card  px-3 py-3 ">
        <div class="table-responsive">
          <table class="table table-striped table-hover" id="querytblForDepositD">
            <thead>
              <tr role="row">
                <th scope="col" width= "10%">Deposit ID</th>
                <th scope="col" width= "20%">Collector's Name </th>
                <th scope="col" width= "10%">Common Name</th>
                <th scope="col" width= "10%">Date Collected</th>
                <th scope="col" width= "30%">Full Location</th>
                <th scope="col" width= "10%">Date of deposit</th>
                <th scope="col" width= "10%">Status</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="mx-4">
   <div class="col-md-20 mt-4" id="divTableArrivedD">
      <div class="card  px-3 py-3 ">
        <div class="table-responsive">
          <table class="table table-striped table-hover" id="querytblArrivedD">
            <thead>
              <tr role="row">
                <th scope="col" width= "10%">Deposit ID</th>
                <th scope="col" width= "20%">Collector's Name </th>
                <th scope="col" width= "10%">Common Name</th>
                <th scope="col" width= "10%">Date Collected</th>
                <th scope="col" width= "30%">Full Location</th>
                <th scope="col" width= "10%">Date of deposit</th>
                <th scope="col" width= "10%">Status</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="mx-4">
   <div class="col-md-20 mt-4" id="divTableDidNotArriveD">
      <div class="card  px-3 py-3 ">
        <div class="table-responsive">
          <table class="table table-striped table-hover" id="querytblDidNotArriveD">
            <thead>
              <tr role="row">
                <th scope="col" width= "10%">Deposit ID</th>
                <th scope="col" width= "20%">Collector's Name </th>
                <th scope="col" width= "10%">Common Name</th>
                <th scope="col" width= "10%">Date Collected</th>
                <th scope="col" width= "30%">Full Location</th>
                <th scope="col" width= "10%">Date of deposit</th>
                <th scope="col" width= "10%">Status</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
    <div class="mx-4">
   <div class="col-md-20 mt-4" id="divTableAllD">
      <div class="card  px-3 py-3 ">
        <div class="table-responsive">
          <table class="table table-striped table-hover" id="querytblAllD">
            <thead>
              <tr role="row">
                <th scope="col" width= "10%">Deposit ID</th>
                <th scope="col" width= "20%">Collector's Name </th>
                <th scope="col" width= "10%">Common Name</th>
                <th scope="col" width= "10%">Date Collected</th>
                <th scope="col" width= "30%">Full Location</th>
                <th scope="col" width= "10%">Date of deposit</th>
                <th scope="col" width= "10%">Status</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>


 <script type="text/javascript">

  $(document).ready(function () {
    $('#divTablePendingD').hide();
    $('#divTableForDepositD').hide();
    $('#divTableArrivedD').hide();
    $('#divTableDidNotArriveD').hide();
    $('#divTableAllD').hide();
  });

</script>

<script type="text/javascript">

 $("#statustype").change(function () {
  var val = $(this).val();
  if(val=='Pending'){
    $('#divTablePendingD').show();
    $('#divTableForDepositD').hide();
    $('#divTableArrivedD').hide();
    $('#divTableDidNotArriveD').hide();
}
else if(val=='For Deposit')
{
   $('#divTablePendingD').hide();
    $('#divTableForDepositD').show();
    $('#divTableArrivedD').hide();
    $('#divTableDidNotArriveD').hide();
}
else if(val=='Arrived')
{
   $('#divTablePendingD').hide();
    $('#divTableForDepositD').hide();
    $('#divTableArrivedD').show();
    $('#divTableDidNotArriveD').hide();
}
else if(vall=='Did not arrive')
{
    $('#divTablePendingD').hide();
    $('#divTableForDepositD').hide();
    $('#divTableArrivedD').hide();
    $('#divTableDidNotArriveD').show();
}
else
{
    $('#divTablePendingD').hide();
    $('#divTableForDepositD').hide();
    $('#divTableArrivedD').hide();
    $('#divTableDidNotArriveD').hide();
    $('#divTableAllD').show();

}
});

</script>

<script type="text/javascript">

  function showAllPendingD(){
  $('#querytblPendingD').dataTable().fnClearTable();
  $('#querytblPendingD').dataTable().fnDraw();
  $('#querytblPendingD').dataTable().fnDestroy();
  $('#querytblPendingD').dataTable({

       "processing": true,
       "serverSide": false,
       // "sAjaxSource": "<?php echo base_url('admin/showAllOUser')?>",
       "deferLoading": 10,
       "bPaginate": true,
       "aaSorting": [],
       "fnInitComplete": function(){

       }
   });
  }

   function showAllForDepositD(){
  $('#querytblForDepositD').dataTable().fnClearTable();
  $('#querytblForDepositD').dataTable().fnDraw();
  $('#querytblForDepositD').dataTable().fnDestroy();
  $('#querytblForDepositD').dataTable({

       "processing": true,
       "serverSide": false,
       // "sAjaxSource": "<?php echo base_url('admin/showAllOUser')?>",
       "deferLoading": 10,
       "bPaginate": true,
       "aaSorting": [],
       "fnInitComplete": function(){

       }
   });
  }

   function showAllArrivedD(){
  $('#querytblArrivedD').dataTable().fnClearTable();
  $('#querytblArrivedD').dataTable().fnDraw();
  $('#querytblArrivedD').dataTable().fnDestroy();
  $('#querytblArrivedD').dataTable({

       "processing": true,
       "serverSide": false,
       // "sAjaxSource": "<?php echo base_url('admin/showAllOUser')?>",
       "deferLoading": 10,
       "bPaginate": true,
       "aaSorting": [],
       "fnInitComplete": function(){

       }
   });
  }

   function showAllDidNotArriveD(){
  $('#querytblDidNotArriveD').dataTable().fnClearTable();
  $('#querytblDidNotArriveD').dataTable().fnDraw();
  $('#querytblDidNotArriveD').dataTable().fnDestroy();
  $('#querytblDidNotArriveD').dataTable({

       "processing": true,
       "serverSide": false,
       // "sAjaxSource": "<?php echo base_url('admin/showAllOUser')?>",
       "deferLoading": 10,
       "bPaginate": true,
       "aaSorting": [],
       "fnInitComplete": function(){

       }
   });
  }


   function showAllD(){
  $('#querytblDidNotArriveD').dataTable().fnClearTable();
  $('#querytblDidNotArriveD').dataTable().fnDraw();
  $('#querytblDidNotArriveD').dataTable().fnDestroy();
  $('#querytblDidNotArriveD').dataTable({

       "processing": true,
       "serverSide": false,
       // "sAjaxSource": "<?php echo base_url('admin/showAllOUser')?>",
       "deferLoading": 10,
       "bPaginate": true,
       "aaSorting": [],
       "fnInitComplete": function(){

       }
   });
  }

 $('#btnApply').click(function(event){
      var data = $('#queriesDateForm').serialize();


  var val = $('#statustype').val();
  if(val=='Pending'){
        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/showAllPendingD',
          data: data,
          async: false,
          dataType: 'json',
          success: function(data){
              $('#querytblPendingD').dataTable().fnClearTable();
              $('#querytblPendingD').dataTable().fnDraw();
              $('#querytblPendingD').dataTable().fnDestroy();
            var t = $('#querytblPendingD').DataTable();
            var i;
          for(i=0; i<data.length; i++){
            t.row.add( [
            data[i].intDepositReqID,
            data[i].strFullName,
            data[i].strCommonName,
            data[i].dtDateCollected,
            data[i].strFullLocation,
            data[i].dtAppointmentDate,
            data[i].strStatus


        ] ).draw( false );
          }
           $('#divTablePendingD').show();
           $('#divTableForDepositD').hide();
           $('#divTableArrivedD').hide();
           $('#divTableDidNotArriveD').hide();
           $('#divTableAllD').hide();
           $('#dtStart').val("");
           $('#dtEnd').val("");
           $('#statustype').val("-- Select Status --");
           // location.reload(true);

          },
          error: function(){
          }
        });
}
else if(val=='For Depositing') {
   $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/showAllForDepositD',
          data: data,
          async: false,
          dataType: 'json',
          success: function(data){
             var t = $('#querytblForDepositD').DataTable();

            var i;
          for(i=0; i<data.length; i++){
            t.row.add( [
            data[i].intDepositReqID,
            data[i].strFullName,
            data[i].strCommonName,
            data[i].dtDateCollected,
            data[i].strFullLocation,
            data[i].dtAppointmentDate,
            data[i].strStatus
        ] ).draw( false );
          }

  $('#divTablePendingD').hide();
           $('#divTableForDepositD').show();
           $('#divTableArrivedD').hide();
           $('#divTableDidNotArriveD').hide();
           $('#divTableAllD').hide();
           $('#dtStart').val("");
           $('#dtEnd').val("");
           $('#statustype').val("-- Select Status --");
          },
          error: function(){

          }
        });
}
else if(val=='Arrived') {
   $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/showAllArrivedD',
          data: data,
          async: false,
          dataType: 'json',
          success: function(data){
             var t = $('#querytblArrivedD').DataTable();

            var i;
          for(i=0; i<data.length; i++){
            t.row.add( [
            data[i].intDepositReqID,
            data[i].strFullName,
            data[i].strCommonName,
            data[i].dtDateCollected,
            data[i].strFullLocation,
            data[i].dtAppointmentDate,
            data[i].strStatus
        ] ).draw( false );
          }
           $('#divTablePendingD').hide();
           $('#divTableForDepositD').hide();
           $('#divTableArrivedD').show();
           $('#divTableDidNotArriveD').hide();
           $('#divTableAllD').hide();
           $('#dtStart').val("");
           $('#dtEnd').val("");
           $('#statustype').val("-- Select Status --");
          },
          error: function(){

          }
        });
}
else if(val=='Did not arrive') {
   $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/showAllDidNotArriveD',
          data: data,
          async: false,
          dataType: 'json',
          success: function(data){
             var t = $('#querytblDidNotArriveD').DataTable();

            var i;
          for(i=0; i<data.length; i++){
            t.row.add( [
            data[i].intDepositReqID,
            data[i].strFullName,
            data[i].strCommonName,
            data[i].dtDateCollected,
            data[i].strFullLocation,
            data[i].dtAppointmentDate,
            data[i].strStatus
        ] ).draw( false );
          }

           $('#divTablePendingD').hide();
           $('#divTableForDepositD').hide();
           $('#divTableArrivedD').hide();
           $('#divTableDidNotArriveD').show();
           $('#divTableAllD').hide();
           $('#dtStart').val("");
           $('#dtEnd').val("");
           $('#statustype').val("-- Select Status --");
          },
          error: function(){

          }
        });
}
else{
   $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/showAllD',
          data: data,
          async: false,
          dataType: 'json',
          success: function(data){
             var t = $('#querytblAllD').DataTable();

            var i;
          for(i=0; i<data.length; i++){
            t.row.add( [
            data[i].intDepositReqID,
            data[i].strFullName,
            data[i].strCommonName,
            data[i].dtDateCollected,
            data[i].strFullLocation,
            data[i].dtAppointmentDate,
            data[i].strStatus
        ] ).draw( false );
          }

           $('#divTablePendingD').hide();
           $('#divTableForDepositD').hide();
           $('#divTableArrivedD').hide();
           $('#divTableDidNotArriveD').hide();
           $('#divTableAllD').show();
           $('#dtStart').val("");
           $('#dtEnd').val("");
           $('#statustype').val("-- Select Status --");
          },
          error: function(){

          }
        });
}
    });


</script>
