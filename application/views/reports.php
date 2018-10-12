
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
              <li><a href="<?php echo base_url(); ?>admin/Queries"> <i class="fa fa-database"></i>Queries</a></li>
            <li><a href="#"> <i class="fa fa-file"></i>Reports</a></li>



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
      <section class="dashboard-counts section-padding pb-0">
        <div class="container-fluid">
          <div class="row">

            <!-- Count item widget-->
            <div class="col-xl-3 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="name"><strong class="text-uppercase">Total<br>Accounts</strong>
                  <div class="count-number">
                    <?php
    $query = $this->db->query('select count(intDepositReqID) as totalDeposit from tblDepositReq');
    if($query->num_rows() > 0){
      foreach ($query->row() as $key => $query) {
    echo $query;
    }

    }else{
      return false;
    }
                  // $serverName = "MSI";
                  // $connectionInfo = array( "Database"=>"HerbariumDatabaseBackup", "UID"=>"sa", "PWD"=>"1234");
                  // $conn = sqlsrv_connect( $serverName, $connectionInfo );
                  //   if( $conn === false ) {
                  //     die( print_r( sqlsrv_errors(), true));
                  //     }
                  //        $sql = "select count(intDepositReqID) as totalDeposit
                  //                 from tblDepositReq";
                  //       $stmt = sqlsrv_query( $conn, $sql );
                  //   if( $stmt === false) {
                  //    die( print_r( sqlsrv_errors(), true) );
                  //     }
                  //         while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                  //          echo $row['totalDeposit']." <br />";
                  //     }
                  //       sqlsrv_free_stmt( $stmt);

                    ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-3 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-check"></i></div>
                <div class="name"><strong class="text-uppercase">Total<br>Deposits</strong>
                  <div class="count-number">

                    <?php


    $query = $this->db->query('select count(intOUserID) as totalAcc
                                   from tblOnlineUser');
    if($query->num_rows() > 0){
      foreach ($query->row() as $key => $query) {
    echo $query;
    }

    }else{
      return false;
    }
                  // $serverName = "MSI";

                  // $connectionInfo = array( "Database"=>"HerbariumDatabaseBackup", "UID"=>"sa", "PWD"=>"1234");
                  // $conn = sqlsrv_connect( $serverName, $connectionInfo );
                  //   if( $conn === false ) {
                  //     die( print_r( sqlsrv_errors(), true));
                  //     }
                  //        $sql = "select count(intOUserID) as totalAcc
                  //                 from tblOnlineUser";
                  //       $stmt = sqlsrv_query( $conn, $sql );
                  //   if( $stmt === false) {
                  //    die( print_r( sqlsrv_errors(), true) );
                  //     }
                  //         while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                  //          echo $row['totalAcc']." <br />";
                  //     }
                  //       sqlsrv_free_stmt( $stmt);


                    ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-3 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-bill"></i></div>
                <div class="name"><strong class="text-uppercase">Total<br />Visits</strong>
                  <div class="count-number">

                    <?php


                        $query = $this->db->query('select count(intAppointmentID) as totalVisit
                                  from tblAppointments');
    if($query->num_rows() > 0){
      foreach ($query->row() as $key => $query) {

     echo $query;
    }

    }else{
      return false;
    }
                  // $serverName = "MSI";

                  // $connectionInfo = array( "Database"=>"HerbariumDatabaseBackup", "UID"=>"sa", "PWD"=>"1234");
                  // $conn = sqlsrv_connect( $serverName, $connectionInfo );
                  //   if( $conn === false ) {
                  //     die( print_r( sqlsrv_errors(), true));
                  //     }
                  //        $sql = "select count(intAppointmentID) as totalVisit
                  //                 from tblAppointments";
                  //       $stmt = sqlsrv_query( $conn, $sql );
                  //   if( $stmt === false) {
                  //    die( print_r( sqlsrv_errors(), true) );
                  //     }
                  //         while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                  //          echo $row['totalVisit']." <br />";
                  //     }
                  //       sqlsrv_free_stmt( $stmt);


                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-padnote"></i></div>
                <div class="name"><strong class="text-uppercase">Total<br />Collections</strong>
                  <div class="count-number">

                    <?php

                  // $serverName = "MSI";
                                            $query = $this->db->query('select count(intHerbariumSheetID) as totalCollection
                                  from viewHerbariumSheet');
    if($query->num_rows() > 0){
      foreach ($query->row() as $key => $query) {

     echo $query;
    }

    }else{
      return false;
    }

                  // $connectionInfo = array( "Database"=>"HerbariumDatabaseBackup", "UID"=>"sa", "PWD"=>"1234");
                  // $conn = sqlsrv_connect( $serverName, $connectionInfo );
                  //   if( $conn === false ) {
                  //     die( print_r( sqlsrv_errors(), true));
                  //     }
                  //        $sql = "select count(intHerbariumSheetID) as totalCollection
                  //                 from viewHerbariumSheet";
                  //       $stmt = sqlsrv_query( $conn, $sql );
                  //   if( $stmt === false) {
                  //    die( print_r( sqlsrv_errors(), true) );
                  //     }
                  //         while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                  //          echo $row['totalCollection']." <br/>";
                  //     }
                  //       sqlsrv_free_stmt( $stmt);

                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="dashboard-counts section-padding pt-1">
        <div class="container-fluid">
          <div class="row">

            <!-- Count item widget-->
            <div class="col-xl-3 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="name"><strong class="text-uppercase">Total<br>Accounts</strong>
                  <div class="count-number">
                    <?php
    $query = $this->db->query('select count(intDepositReqID) as totalDeposit from tblDepositReq');
    if($query->num_rows() > 0){
      foreach ($query->row() as $key => $query) {
    echo $query;
    }

    }else{
      return false;
    }
                  // $serverName = "MSI";
                  // $connectionInfo = array( "Database"=>"HerbariumDatabaseBackup", "UID"=>"sa", "PWD"=>"1234");
                  // $conn = sqlsrv_connect( $serverName, $connectionInfo );
                  //   if( $conn === false ) {
                  //     die( print_r( sqlsrv_errors(), true));
                  //     }
                  //        $sql = "select count(intDepositReqID) as totalDeposit
                  //                 from tblDepositReq";
                  //       $stmt = sqlsrv_query( $conn, $sql );
                  //   if( $stmt === false) {
                  //    die( print_r( sqlsrv_errors(), true) );
                  //     }
                  //         while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                  //          echo $row['totalDeposit']." <br />";
                  //     }
                  //       sqlsrv_free_stmt( $stmt);

                    ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-3 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-check"></i></div>
                <div class="name"><strong class="text-uppercase">Total<br>Deposits</strong>
                  <div class="count-number">

                    <?php


    $query = $this->db->query('select count(intOUserID) as totalAcc
                                   from tblOnlineUser');
    if($query->num_rows() > 0){
      foreach ($query->row() as $key => $query) {
    echo $query;
    }

    }else{
      return false;
    }
                  // $serverName = "MSI";

                  // $connectionInfo = array( "Database"=>"HerbariumDatabaseBackup", "UID"=>"sa", "PWD"=>"1234");
                  // $conn = sqlsrv_connect( $serverName, $connectionInfo );
                  //   if( $conn === false ) {
                  //     die( print_r( sqlsrv_errors(), true));
                  //     }
                  //        $sql = "select count(intOUserID) as totalAcc
                  //                 from tblOnlineUser";
                  //       $stmt = sqlsrv_query( $conn, $sql );
                  //   if( $stmt === false) {
                  //    die( print_r( sqlsrv_errors(), true) );
                  //     }
                  //         while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                  //          echo $row['totalAcc']." <br />";
                  //     }
                  //       sqlsrv_free_stmt( $stmt);


                    ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-3 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-bill"></i></div>
                <div class="name"><strong class="text-uppercase">Total<br />Visits</strong>
                  <div class="count-number">

                    <?php


                        $query = $this->db->query('select count(intAppointmentID) as totalVisit
                                  from tblAppointments');
    if($query->num_rows() > 0){
      foreach ($query->row() as $key => $query) {

     echo $query;
    }

    }else{
      return false;
    }
                  // $serverName = "MSI";

                  // $connectionInfo = array( "Database"=>"HerbariumDatabaseBackup", "UID"=>"sa", "PWD"=>"1234");
                  // $conn = sqlsrv_connect( $serverName, $connectionInfo );
                  //   if( $conn === false ) {
                  //     die( print_r( sqlsrv_errors(), true));
                  //     }
                  //        $sql = "select count(intAppointmentID) as totalVisit
                  //                 from tblAppointments";
                  //       $stmt = sqlsrv_query( $conn, $sql );
                  //   if( $stmt === false) {
                  //    die( print_r( sqlsrv_errors(), true) );
                  //     }
                  //         while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                  //          echo $row['totalVisit']." <br />";
                  //     }
                  //       sqlsrv_free_stmt( $stmt);


                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-padnote"></i></div>
                <div class="name"><strong class="text-uppercase">Total<br />Collections</strong>
                  <div class="count-number">

                    <?php

                  // $serverName = "MSI";
                                            $query = $this->db->query('select count(intHerbariumSheetID) as totalCollection
                                  from viewHerbariumSheet');
    if($query->num_rows() > 0){
      foreach ($query->row() as $key => $query) {

     echo $query;
    }

    }else{
      return false;
    }

                  // $connectionInfo = array( "Database"=>"HerbariumDatabaseBackup", "UID"=>"sa", "PWD"=>"1234");
                  // $conn = sqlsrv_connect( $serverName, $connectionInfo );
                  //   if( $conn === false ) {
                  //     die( print_r( sqlsrv_errors(), true));
                  //     }
                  //        $sql = "select count(intHerbariumSheetID) as totalCollection
                  //                 from viewHerbariumSheet";
                  //       $stmt = sqlsrv_query( $conn, $sql );
                  //   if( $stmt === false) {
                  //    die( print_r( sqlsrv_errors(), true) );
                  //     }
                  //         while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                  //          echo $row['totalCollection']." <br/>";
                  //     }
                  //       sqlsrv_free_stmt( $stmt);

                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="card">
        <div class="card-header d-flex align-items-center">
          <button type="button" class="btn btn-primary">Print Reports</button>
        </div>
      </div>
      <div class="card">
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
