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
                <!--<li><a href="<?php echo base_url(); ?>admin/Loanplant">Loan Plant</a></li>-->
                <li><a href="<?php echo base_url(); ?>admin/Externalvalidation">External Validation</a></li>
                <li><a href="<?php echo base_url(); ?>admin/Visits">Visits</a>

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
  
            <li><a href="<?php echo base_url();?>admin/Reports"> <i class="fa fa-file"></i>Reports</a></li>



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
      <li class="breadcrumb-item active">External Validation</li>
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
      <option>Further Verification</option>
      <option>Verified</option>
      <option>Not Verified</option>


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
   <div class="col-md-20 mt-4" id="divTablePendingEV">
      <div class="card  px-3 py-3 ">
        <div class="table-responsive">
          <table class="table table-striped table-hover" id="querytblPendingEV">
            <thead>
              <tr role="row">
                <th scope="col" width= "10%">Accession Number</th>
                <th scope="col" width= "20%">Scientific Name</th>
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

<div class="mx-4">
   <div class="col-md-20 mt-4" id="divTableEV">
      <div class="card  px-3 py-3 ">
        <div class="table-responsive">
          <table class="table table-striped table-hover" id="querytblEV">
            <thead>
              <tr role="row">
                <th scope="col" width= "10%">Accession Number</th>
                <th scope="col" width= "20%">Scientific Name</th>
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

<div class="mx-4">
   <div class="col-md-20 mt-4" id="divTableVerifiedEV">
      <div class="card  px-3 py-3 ">
        <div class="table-responsive">
          <table class="table table-striped table-hover" id="querytblVerifiedEV">
            <thead>
              <tr role="row">
                <th scope="col" width= "10%">Accession Number</th>
                <th scope="col" width= "20%">Scientific Name</th>
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


<div class="mx-4">
   <div class="col-md-20 mt-4" id="divTableNotVerifiedEV">
      <div class="card  px-3 py-3 ">
        <div class="table-responsive">
          <table class="table table-striped table-hover" id="querytblNotVerifiedEV">
            <thead>
              <tr role="row">
                <th scope="col" width= "10%">Accession Number</th>
                <th scope="col" width= "20%">Scientific Name</th>
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

<script type="text/javascript">

  $(document).ready(function () {
    $('#divTablePendingEV').hide();
    $('#divTableEV').hide();
    $('#divTableNotVerifiedEV').hide();
    $('#divTableVerifiedEV').hide();
  });

</script> 

<script type="text/javascript">

 $("#statustype").change(function () {
  var val = $(this).val();
  if(val=='Pending'){
    $('#divTablePendingEV').show();
    $('#divTableEV').hide();
    $('#divTableNotVerifiedEV').hide();
    $('#divTableVerifiedEV').hide();
 
}
else if(val=='Further Verification')
{ 
    $('#divTablePendingEV').hide();
    $('#divTableEV').show();
    $('#divTableNotVerifiedEV').hide();
    $('#divTableVerifiedEV').hide();

}
else if(val=='Verified')
{ 
    $('#divTablePendingEV').hide();
    $('#divTableEV').hide();
    $('#divTableNotVerifiedEV').hide();
    $('#divTableVerifiedEV').show();

}
else 
{ 
    $('#divTablePendingEV').hide();
    $('#divTableEV').hide();
    $('#divTableNotVerifiedEV').show();
    $('#divTableVerifiedEV').hide();


}

});

</script>

<script type="text/javascript">

  function showAllPendingEV(){
  $('#querytblPendingEV').dataTable().fnClearTable();
  $('#querytblPendingEV').dataTable().fnDraw();
  $('#querytblPendingEV').dataTable().fnDestroy();
  $('#querytblPendingEV').dataTable({
 
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

   function showAllEV(){
  $('#querytblEV').dataTable().fnClearTable();
  $('#querytblEV').dataTable().fnDraw();
  $('#querytblEV').dataTable().fnDestroy();
  $('#querytblEV').dataTable({
 
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


  function showAllVerifiedEV(){
  $('#querytblVerifiedEV').dataTable().fnClearTable();
  $('#querytblVerifiedEV').dataTable().fnDraw();
  $('#querytblVerifiedEV').dataTable().fnDestroy();
  $('#querytblVerifiedEV').dataTable({
 
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
   function showAllNotVerifiedEV(){
  $('#querytblNotVerifiedEV').dataTable().fnClearTable();
  $('#querytblNotVerifiedEV').dataTable().fnDraw();
  $('#querytblNotVerifiedEV').dataTable().fnDestroy();
  $('#querytblNotVerifiedEV').dataTable({
 
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
          url: '<?php echo base_url() ?>admin/showAllPendingEV',
          data: data,
          async: false,
          dataType: 'json',
          success: function(data){
              $('#querytblPendingEV').dataTable().fnClearTable();
              $('#querytblPendingEV').dataTable().fnDraw();
              $('#querytblPendingEV').dataTable().fnDestroy();
            var t = $('#querytblPendingEV').DataTable();
            var i;
          for(i=0; i<data.length; i++){
            t.row.add( [
            data[i].strAccessionNumber,
            data[i].strScientificName,
            data[i].strCollector,
            data[i].dateDeposited,
            data[i].strStatus


        ] ).draw( false );
          }
           $('#divTablePendingEV').show();
           $('#divTableEV').hide();
           $('#divTableVerifiedEV').hide();
           $('#divTableNotVerifiedEV').hide();

           $('#dtStart').val("");
           $('#dtEnd').val("");
           $('#statustype').val("-- Select Status --");
           // location.reload(true);

          },
          error: function(){ 
          }
        });
}
else if(val=='Further Verification') {
   $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/showAllEV',
          data: data,
          async: false,
          dataType: 'json',
          success: function(data){
             var t = $('#querytblEV').DataTable();
    
            var i;
          for(i=0; i<data.length; i++){
            t.row.add( [
            data[i].strAccessionNumber,
            data[i].strScientificName,
            data[i].strCollector,
            data[i].dateDeposited,
            data[i].strStatus

        ] ).draw( false );
          }

            $('#divTablePendingEV').hide();
           $('#divTableEV').show();
           $('#divTableVerifiedEV').hide();
           $('#divTableNotVerifiedEV').hide();
           $('#dtStart').val("");
           $('#dtEnd').val("");
           $('#statustype').val("-- Select Status --");
          },
          error: function(){
            
          }
        });
}
else if(val=='Verified') {
   $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/showAllVerifiedEV',
          data: data,
          async: false,
          dataType: 'json',
          success: function(data){
             var t = $('#querytblVerifiedEV').DataTable();
    
            var i;
          for(i=0; i<data.length; i++){
            t.row.add( [
            data[i].strAccessionNumber,
            data[i].strScientificName,
            data[i].strCollector,
            data[i].dateDeposited,
            data[i].strStatus

        ] ).draw( false );
          }
           $('#divTablePendingEV').hide();
           $('#divTableEV').hide();
           $('#divTableVerifiedEV').show();
           $('#divTableNotVerifiedEV').hide();
           $('#dtStart').val("");
           $('#dtEnd').val("");
           $('#statustype').val("-- Select Status --");
          },
          error: function(){
            
          }
        });
}
else  {
   $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/showAllNotVerifiedEV',
          data: data,
          async: false,
          dataType: 'json',
          success: function(data){
             var t = $('#querytblNotVerifiedEV').DataTable();
    
            var i;
          for(i=0; i<data.length; i++){
            t.row.add( [
            data[i].strAccessionNumber,
            data[i].strScientificName,
            data[i].strCollector,
            data[i].dateDeposited,
            data[i].strStatus

        ] ).draw( false );
          }
           $('#divTablePendingEV').hide();
           $('#divTableEV').hide();
           $('#divTableVerifiedEV').hide();
           $('#divTableNotVerifiedEV').show();
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
