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
              <li class="active"><a href="<?php echo base_url(); ?>admin/Queries"> <i class="fa fa-database"></i>Queries</a></li>
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

<!-- HEADER ENDS-->


<div class="breadcrumb-holder">
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/Dashboard" >Home</a></li>
      <li class="breadcrumb-item active">Queries</li>
    </ul>
  </div>
</div>

<div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card mt-4">
            <select id="selectquery" class="form-control">
              <option>Select a query</option>
              <option>Phylum</option>
              <option>Class</option>
              <option>Order</option>
              <option>Family</option>
              <option>Genus</option>
              <option>Species</option>
              <option>External Validators</option>
              <option>Species Author</option>
              <option>Plant Alternate Names</option>
              <option>Online Users</option>
            </select>
          </div>
        </div>
      </div>

    </div>
    <!--PHYLUM PART-->
    <div class="col-md-20" id='divTablePhylum'>
      <div class="card mt-4 px-3 py-3">
        <div class="table-responsive">
          <table class="table table-striped table-hover" id="manageQuerytblPhylum">
            <thead>
              <tr role="row">
                <th>Domain Name</th>
                <th>Kingdom Name</th>
                <th>Phylum Name</th>
                <th>Action</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
    <div id="myPhylumModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">

          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">

                <h5 id="exampleModalLabel" class="modal-title">Phylum Details</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">

                <form id= "editPhylumForm" method="POST" enctype="multipart/form-data">
                  <!-- <input type="hidden" name="act" id="act" value=""> -->

                  <div class="form-group">
                    <label>Domain Name:</label> 
                    <input type="text" name="txtedName" id="strDomainName1" placeholder="Domain Name" class="form-control" disabled>
                  </div>
                  <div class="form-group">
                    <label>Kingdom Name:</label> 
                    <input type="text" name="txtekName" id="strKingdomName1" placeholder="Kingdom Name" class="form-control" disabled>
                  </div>
                      <input type="hidden" name="txtId" value="0">
                  <div class="form-group">
                    <label>Phylum Name:</label> 
                    <input type="text" name="txtepName" id="pNameid1" placeholder="Phylum Name" class="form-control" disabled>
                  </div>
                  <div class="modal-footer">

                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
         <!--CLASS PART-->
    <div class="col-md-20" id='divTableClass'>
      <div class="card mt-4 px-3 py-3">
        <div class="table-responsive">
          <table class="table table-striped table-hover" id="manageQuerytblClass">
            <thead>
              <tr role="row">
                <th>Phylum Name</th>
                <th>Class Name</th>
                <th>Actions</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
           <div id="myClassModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
         <div role="document" class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">

               <h5 id="exampleModalLabel" class="modal-title">Class Details</h5>
               <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
             </div>
             <div class="modal-body">

               <form id= "editClassForm" method="POST" enctype="multipart/form-data" >
                 <!-- <input type="hidden" name="act" id="act" value=""> -->
                 <div class="form-group">
                   <label>
                     <input type="hidden" name="txtId" value="0">
                   </label>
                   <label>Phylum Name:</label> 
                     <input list="phylumname" name ="speID" placeholder="Phylum Name" class="form-control" disabled>
                     <datalist id ='phylumname'>
                     </datalist>
                 </div>
                 <div class="form-group">
                   <label>Class Name:</label> 
                   <input type="text" id="classid2" name="txteCName" placeholder="Class Name" class="form-control" disabled>
                 </div>
                 <div class="modal-footer">

                 </div>

               </form>
             </div>
           </div>
         </div>
       </div>
       <!--ORDER PART-->
   <div class="col-md-20" id='divTableOrder'>
      <div class="card mt-4 px-3 py-3">
        <div class="table-responsive">
          <table class="table table-striped table-hover" id="manageQuerytblOrder">
            <thead>
              <tr role="row">
                <th>Class Name</th>
                <th>Order Name</th>
                <th>Action</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
    <div id="myOrderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">

                <h5 id="exampleModalLabel" class="modal-title">Order Details</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">

                <form id= "editOrderForm" method="POST" enctype="multipart/form-data">
                  <!-- <input type="hidden" name="act" id="act" value=""> -->
                  <div class="form-group">
                    <label>
                      <input type="hidden" name="txtId" value="0">
                    </label> 
                    <label>Class Name:</label>
                     <input list="classname" name ="sceID" placeholder="Class Name" class="form-control" autocomplete="off" disabled>
                     <datalist id ='classname'>
                     </datalist>
                  </div>
                  <div class="form-group">
                    <label>Order Name:</label> 
                    <input type="text" id="orderName1" name="txteOName" placeholder="Class Name" class="form-control" disabled>
                  </div>
                  <div class="modal-footer">

                  </div>

                </form>
              </div>
            </div>
          </div>
        </div><!--Order part-->
 <!--Family PART-->
   <div class="col-md-20" id='divTableFamily'>
      <div class="card mt-4 px-3 py-3">
        <div class="table-responsive">
          <table class="table table-striped table-hover" id="manageQuerytblFamily">
            <thead>
              <tr role="row">
                <th>Order Name</th>
                <th>Family Name</th>
                <th>Action</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
   <div id="myFamilyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">

                <h5 id="exampleModalLabel" class="modal-title">Family Details</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">

                <form id= "editFamilyForm" method="POST" enctype="multipart/form-data">
                  <!-- <input type="hidden" name="act" id="act" value=""> -->
                  <div class="form-group">
                    <label>
                      <input type="hidden" name="txtId" value="0">
                    </label>
                    <label>Order Name:</label> 
                     <input list="ordername" name ="seOID" placeholder="Order Name" class="form-control" autocomplete="off" disabled="">
                     <datalist id ='ordername'>
                     </datalist>
                  </div>
                  <div class="form-group">
                    <label>Family Name:</label> 
                    <input id="famName1" type="text" name="txteFName" placeholder="Class Name" class="form-control" disabled="">
                  </div>
                  <div class="modal-footer">

                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
        <!--Family part-->
        <!--Genus PART-->
   <div class="col-md-20" id='divTableGenus'>
      <div class="card mt-4 px-3 py-3">
        <div class="table-responsive">
          <table class="table table-striped table-hover" id="manageQuerytblGenus">
            <thead>
              <tr role="row">
                <th>Family Name</th>
                <th>Genus Name</th>
                <th>Action</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
   <div id="myGenusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">

                <h5 id="exampleModalLabel" class="modal-title">Genus Details</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close" onclick="resetForm()"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">

                <form id= "editGenusForm" method="POST" enctype="multipart/form-data">
                  <!-- <input type="hidden" name="act" id="act" value=""> -->
                  <div class="form-group">
                    <label>
                      <input type="hidden" name="txtId" value="0">
                    </label>
                    <label>Family Name:</label> 
                     <input list="familyname" name ="segFID" placeholder="Family Name" class="form-control" autocomplete="off" disabled="">
                     <datalist id ='familyname'>
                     </datalist>
                  </div>
                  <div class="form-group">
                    <label>Genus Name:</label>
                    <input id="genusName1" type="text" name="txteGName" placeholder="Class Name" class="form-control" disabled="">
                  </div>
                  <div class="modal-footer">

                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
        <!--GEnus part-->
        <!--Species PART-->
   <div class="col-md-20" id='divTableSpecies'>
      <div class="card mt-4 px-3 py-3">
        <div class="table-responsive">
          <table class="table table-striped table-hover" id="manageQuerytblSpecies">
            <thead>
              <tr role="row">
                <th>Genus Name</th>
                <th>Species Name</th>
                <th>Common Name</th>
                <th>Author's Name</th>
                <th>Action</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
    <div id="mySpeciesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">

                <h5 id="exampleModalLabel" class="modal-title">Species Details</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">

                <form id= "editSpeciesForm" method="POST" enctype="multipart/form-data">
                  <!-- <input type="hidden" name="act" id="act" value=""> -->
                  <div class="form-group">
                    <label>
                      <input type="hidden" name="txtId" value="0">
                    </label>
                    <label>Genus Name:</label> 
                     <input list="genusname" name ="sesGID" placeholder="Family Name" class="form-control" autocomplete="off" disabled="">
                     <datalist id ='genusname'>
                     </datalist>
                  </div>
                  <div class="form-group">
                    <label>Species Name:</label>
                    <input id="speciesName1" type="text" name="txteSName" placeholder="Class Name" class="form-control" disabled="">
                  </div>
                  <div class="form-group">
                    <label>Common Name:</label> 
                    <input id="commonName1" type="text" name="txtecName" placeholder="Class Name" class="form-control" disabled="">
                  </div>
                    <div class="form-group">
                    <label>Author Name:</label> 
                     <input list="authorname" name ="txteaID"  id = 'author' class="form-control" autocomplete="off" disabled="">
                     <datalist id ='authorname'>
                     </datalist>
                  </div>
                  <div class="modal-footer">

                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
        <!--Species part-->
        <!--EX VAl PART-->
   <div class="col-md-20" id='divTableExVal'>
      <div class="card mt-4 px-3 py-3">
        <div class="table-responsive">
          <table class="table table-striped table-hover" id="manageQuerytblExVal">
            <thead>
              <tr role="row">
                <th>Validator Name</th>
                <th>Institution</th>
                <th>Action</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
          <div id="myExValModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">External Validator Details</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
              <form id= "EditValidatorForm" method="POST" enctype="multipart/form-data"><!--dito ka magbabago sa loob nito-->
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <input type="hidden" name="txtId" value="0">
                      <label>First Name:</label> 
                      <input type="text" name="txteFName"  class="form-control" disabled="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <label>Middle Name:</label>
                      <input type="text" name="txteMName"  class="form-control" disabled>
                    </div>
                    <div class="form-group col-sm-4">
                      <label>Middle Initial:</label>
                      <input type="text" name="txteMInitial"  class="form-control" disabled>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <label>Last Name:</label> 
                      <input type="text" name="txteLName"  class="form-control" disabled>
                    </div>
                    <div class="form-group col-sm-4">
                      <label>Name Suffix:</label> 
                      <input type="text" name="txteNSuffix"  class="form-control" disabled>
                    </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-sm-6">
                    <label>Contact Number:</label>
                    <input type="text"  data-mask="99999999999" name="txteCNumber"  class="form-control" disabled>
                  </div>
                  <div class="form-group col-sm-6">
                    <label>Email Address:</label> 
                    <input type="text" name="txteEMail"  class="form-control" disabled>
                  </div>
                </div>
                  <div class="form-group">
                    <label>Institution:</label> 
                    <input type="text" name="txteInstitution"  class="form-control" disabled>
                  </div><!--HANGGANG DITO LANG BOI-->
                  <div class="modal-footer">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--Ex VAl part-->
        <!--author PART-->
   <div class="col-md-20" id='divTableAuthor'>
      <div class="card mt-4 px-3 py-3">
        <div class="table-responsive">
          <table class="table table-striped table-hover" id="manageQuerytblAuthor">
            <thead>
              <tr role="row">
                <th>Author Name</th>
                <th>Author's Suffix</th>
                <th>Action</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
          <div id="myAuthorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">

                <h5 id="exampleModalLabel" class="modal-title">Species Author Detail</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">

                <form id= "editAuthorForm" method="POST" enctype="multipart/form-data">
                  <!-- <input type="hidden" name="act" id="act" value=""> -->

                 <div class="form-group">
                  <input type="hidden" name="txtId" value="0">
                    <label>Author Name:</label> 
                    <input type="text" name="txteAName" id="strAuthorName1" placeholder="Author Name" class="form-control" disabled>
                  </div>
                  <div class="form-group">
                    <label>Species Author Suffix:</label>
                    <input type="text" name="txteSASuffix" id="strAuthorSuffix1" placeholder="Species Author Suffix" class="form-control" disabled >
                  </div>
                  <div class="modal-footer">
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
        <!--author part-->
        <!--ALT NAME PART-->
   <div class="col-md-20" id='divTableAltName'>
      <div class="card mt-4 px-3 py-3">
        <div class="table-responsive">
          <table class="table table-striped table-hover" id="manageQuerytblAltName">
            <thead>
              <tr role="row">
                <th>Taxon Name</th>
                <th>Language</th>
                <th>Alternate Name</th>
                <th>Actions</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
        <div id="myAltNameModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">

                <h5 id="exampleModalLabel" class="modal-title">Species Alternate Name Details</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">

                <form id= "editSpeciesAlternateForm" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="txtId" id="act" value="0">

                <div class="form-group">
                    <label>Taxon Name:</label> 
                    <input list="speciesname" name="txtetaxonName" id="strTaxonName1" placeholder="Taxon Name" class="form-control" disabled="">
                    <datalist id="speciesname">
                    </datalist>
               </div>
                <div class="form-group">
                    <label>Language:</label> 
                    <input type="text" name="txteLanguage" id="strLanguage1" placeholder="Language" class="form-control" disabled="" >
              </div>
              <div class="form-group">
                    <label>Alternate Name:</label> 
                    <input type="text" name="txteAName" id="strAlternateName1" placeholder="Alternate Name" class="form-control" disabled="" >
              </div>
                  <div class="modal-footer">

                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
        <!--Alt NAME part-->
                <!--ALT NAME PART-->
   <div class="col-md-20" id='divTableOUser'>
      <div class="card mt-4 px-3 py-3">
        <div class="table-responsive">
          <table class="table table-striped table-hover" id="manageQuerytblOUser">
            <thead>
              <tr role="row">
                <th>Full Name</th>
                <th>Contact Number</th>
                <th>Email Address</th>
                <th>Present Address</th>
                <th>Affiliation Name</th>
                <th>Affiliation Position</th>
                <th>Actions</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
        <div id="myOUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">

                <h5 id="exampleModalLabel" class="modal-title">Online User Details</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">

              <form name="profileform" class="needs-validation" id= "myprofileForm" method="POST" enctype="multipart/form-data" autocomplete="off" novalidate>
                  <div class="md-form">

                          <label for="strFirstName" class="font-weight-light" style="margin-left: 5px;">Full Name:</label>
                          <input type="text" id="strFirstName" name="txtfirstname" class="form-control" autofocus disabled>
                    </div>
                      <div class="md-form">
                             <label for="strPhoneNum" class="font-weight-light" data-mask="9999 9999 999">Phone Number:</label>
                            <input type="text" id="strPhoneNum" name="txtphonenum" class="form-control" autofocus disabled>
                           
                          </div>
                      
                      <div class="md-form">
                        <label for="strPresentAdd" class="font-weight-light">Present Address:</label>
                        <input type="text" id="strPresentAdd" name="txtpresentadd" class="form-control" onkeyup="enableCheck();" autofocus disabled>
                       
                      </div>
                      <div class="md-form">
                        <label for="strPermanentAdd" class="font-weight-light">Permanent Address:</label>
                        <input type="text" id="strPermanentAdd" name="txtpermaadd"  class="form-control" autofocus disabled>
                        
                      </div>
                      <div class="md-form">
                        <div class="row">
                          <div class="col-md-6">
                          <label for="strAffiliation" class="font-weight-light" style="margin-left: 5px;">Affiliation Name:</label>
                            <input type="text" id="strAffiliation" name="txtaffname" class="form-control" autofocus disabled>
                            
                          </div>
                          <div class="col-md-6">
                             <label for="strAffiliationPosition" class="font-weight-light" style="margin-left: 5px;">Affiliation Position:</label>
                            <input type="text" id="strAffiliationPosition" name="txtaffpos" class="form-control" autofocus disabled>
                           
                          </div>
                        </div>
                      </div>
                      <div class="md-form">
                        <label for="strAffiliationAdd" class="font-weight-light">Affiliation Address:</label>
                        <input type="text" id="strAffiliationAdd" name="txtaffaddress" class="form-control" autofocus disabled>
                      </div>
                 </form>
              </div>

                  <div class="modal-footer">

                  </div>

                
              </div>
            </div>
          </div>
       
        <!--Alt NAME part-->
</div><!-- CONTAINER END-->
<script type="text/javascript">
$(document).ready(function () {
  $('#divTableClass').hide();
  $('#divTableOrder').hide();
  $('#divTableFamily').hide();
  $('#divTablePhylum').hide();
  $('#divTableGenus').hide();
  $('#divTableSpecies').hide();
  $('#divTableExVal').hide();
  $('#divTableAuthor').hide();
  $('#divTableAltName').hide();
  $('#divTableOUser').hide();
  
  showPhylum();
  showClass();
  showOrder();
  showFamily();
  showGenus();
  showSpecies();
  showExVal();
  showAuthor();
  showAltName();
  showOUser();

  });
  function showPhylum(){
  $('#manageQuerytblPhylum').dataTable().fnClearTable();
  $('#manageQuerytblPhylum').dataTable().fnDraw();
  $('#manageQuerytblPhylum').dataTable().fnDestroy();
  $('#manageQuerytblPhylum').dataTable({
   "autoWidth":false,
       "processing": true,
       "serverSide": false,
       "sAjaxSource": "<?php echo base_url('admin/showAllPhylum')?>",
       "deferLoading": 10,
       "bPaginate": true,
       "aaSorting": [],
       "fnInitComplete": function(){

       }
   });
  }
  function showClass(){
  $('#manageQuerytblClass').dataTable().fnClearTable();
  $('#manageQuerytblClass').dataTable().fnDraw();
  $('#manageQuerytblClass').dataTable().fnDestroy();
  $('#manageQuerytblClass').dataTable({
   "autoWidth":false,
       "processing": true,
       "serverSide": false,
       "sAjaxSource": "<?php echo base_url('admin/showAllClass')?>",
       "deferLoading": 10,
       "bPaginate": true,
       "aaSorting": [],
       "fnInitComplete": function(){

       }
   });
  }
  function showOrder(){
  $('#manageQuerytblOrder').dataTable().fnClearTable();
  $('#manageQuerytblOrder').dataTable().fnDraw();
  $('#manageQuerytblOrder').dataTable().fnDestroy();
  $('#manageQuerytblOrder').dataTable({
   "autoWidth":false,
       "processing": true,
       "serverSide": false,
       "sAjaxSource": "<?php echo base_url('admin/showAllOrder')?>",
       "deferLoading": 10,
       "bPaginate": true,
       "aaSorting": [],
       "fnInitComplete": function(){

       }
   });
  } 
  function showFamily(){
  $('#manageQuerytblFamily').dataTable().fnClearTable();
  $('#manageQuerytblFamily').dataTable().fnDraw();
  $('#manageQuerytblFamily').dataTable().fnDestroy();
  $('#manageQuerytblFamily').dataTable({
   "autoWidth":false,
       "processing": true,
       "serverSide": false,
       "sAjaxSource": "<?php echo base_url('admin/showAllFamily')?>",
       "deferLoading": 10,
       "bPaginate": true,
       "aaSorting": [],
       "fnInitComplete": function(){

       }
   });
  } 
  function showGenus(){
  $('#manageQuerytblGenus').dataTable().fnClearTable();
  $('#manageQuerytblGenus').dataTable().fnDraw();
  $('#manageQuerytblGenus').dataTable().fnDestroy();
  $('#manageQuerytblGenus').dataTable({
   "autoWidth":false,
       "processing": true,
       "serverSide": false,
       "sAjaxSource": "<?php echo base_url('admin/showAllGenus')?>",
       "deferLoading": 10,
       "bPaginate": true,
       "aaSorting": [],
       "fnInitComplete": function(){

       }
   });
  } 
    function showSpecies(){
  $('#manageQuerytblSpecies').dataTable().fnClearTable();
  $('#manageQuerytblSpecies').dataTable().fnDraw();
  $('#manageQuerytblSpecies').dataTable().fnDestroy();
  $('#manageQuerytblSpecies').dataTable({
   "autoWidth":false,
       "processing": true,
       "serverSide": false,
       "sAjaxSource": "<?php echo base_url('admin/showAllSpecies')?>",
       "deferLoading": 10,
       "bPaginate": true,
       "aaSorting": [],
       "fnInitComplete": function(){

       }
   });
  } 
  function showExVal(){
  $('#manageQuerytblExVal').dataTable().fnClearTable();
  $('#manageQuerytblExVal').dataTable().fnDraw();
  $('#manageQuerytblExVal').dataTable().fnDestroy();
  $('#manageQuerytblExVal').dataTable({
   "autoWidth":false,
       "processing": true,
       "serverSide": false,
       "sAjaxSource": "<?php echo base_url('admin/showAllValidator')?>",
       "deferLoading": 10,
       "bPaginate": true,
       "aaSorting": [],
       "fnInitComplete": function(){

       }
   });
  } 

  function showAuthor(){
  $('#manageQuerytblAuthor').dataTable().fnClearTable();
  $('#manageQuerytblAuthor').dataTable().fnDraw();
  $('#manageQuerytblAuthor').dataTable().fnDestroy();
  $('#manageQuerytblAuthor').dataTable({
   "autoWidth":false,
       "processing": true,
       "serverSide": false,
       "sAjaxSource": "<?php echo base_url('admin/showAllAuthor')?>",
       "deferLoading": 10,
       "bPaginate": true,
       "aaSorting": [],
       "fnInitComplete": function(){

       }
   });
  }
    function showAltName(){
  $('#manageQuerytblAltName').dataTable().fnClearTable();
  $('#manageQuerytblAltName').dataTable().fnDraw();
  $('#manageQuerytblAltName').dataTable().fnDestroy();
  $('#manageQuerytblAltName').dataTable({
   "autoWidth":false,
       "processing": true,
       "serverSide": false,
       "sAjaxSource": "<?php echo base_url('admin/showAllAltName')?>",
       "deferLoading": 10,
       "bPaginate": true,
       "aaSorting": [],
       "fnInitComplete": function(){

       }
   });
  } 
  function showOUser(){
  $('#manageQuerytblOUser').dataTable().fnClearTable();
  $('#manageQuerytblOUser').dataTable().fnDraw();
  $('#manageQuerytblOUser').dataTable().fnDestroy();
  $('#manageQuerytblOUser').dataTable({
   "autoWidth":false,
       "processing": true,
       "serverSide": false,
       "sAjaxSource": "<?php echo base_url('admin/showAllOUser')?>",
       "deferLoading": 10,
       "bPaginate": true,
       "aaSorting": [],
       "fnInitComplete": function(){

       }
   });
  } 



     $(document).on('click', '.phylum-edit', function(e){
      var id = $(this).attr('data');
      $('#myPhylumModal').modal('show');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editPhylum',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txtedName]').val(data.strDomainName);
          $('input[name=txtekName]').val(data.strKingdomName);
          $('input[name=txtepName]').val(data.strPhylumName);
          $('input[name=txtId]').val(data.intPhylumID);
        },
        error: function(){
          alert('Could not Edit Data');
        }

    });

  });
  $(document).on('click', '.class-edit', function(event){
     var id = $(this).attr('data');
     $('#myClassModal').modal('show');
     $.ajax({
       type: 'ajax',
       method: 'get',
       url: '<?php echo base_url() ?>admin/editClass',
       data: {id: id},
       async: false,
       dataType: 'json',
       success: function(data){

         $('input[name=speID]').val(data.strPhylumName);
         $('input[name=txteCName]').val(data.strClassName);
         $('input[name=txtId]').val(data.intClassID);

       },
       error: function(){
         alert('Could not Edit Data');
       }

   });

 });
$(document).on('click', '.order-edit', function(event){
      var id = $(this).attr('data');
      $('#myOrderModal').modal('show');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editOrder',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=sceID]').val(data.strClassName)
          $('input[name=txteOName]').val(data.strOrderName);
          $('input[name=txtId]').val(data.intOrderID);

        },
        error: function(){
          alert('Could not Edit Data');
        }

    });

  });
$(document).on('click', '.family-edit', function(event){
      var id = $(this).attr('data');
      $('#myFamilyModal').modal('show');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editFamily',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=seOID').val(data.strOrderName)
          $('input[name=txteFName]').val(data.strFamilyName);
          $('input[name=txtId]').val(data.intFamilyID);

        },
        error: function(){
          alert('Could not Edit Data');
        }

    });

  });
$(document).on('click', '.genus-edit', function(event){
      var id = $(this).attr('data');
      $('#myGenusModal').modal('show');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editGenus',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=segFID]').val(data.strFamilyName)
          $('input[name=txteGName]').val(data.strGenusName);
          $('input[name=txtId]').val(data.intGenusID);

        },
        error: function(){
          alert('Could not Edit Data');
        }

    });

  });
 $(document).on('click', '.species-edit', function(event){
      var id = $(this).attr('data');
      $('#mySpeciesModal').modal('show');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editSpecies',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=sesGID').val(data.strGenusName);
          $('input[name=txteSName]').val(data.strSpeciesName);
          $('input[name=txtecName]').val(data.strCommonName);
          $('input[name=txteaID]').val(data.strAuthorsName);
          $('input[name=txtId]').val(data.intSpeciesID);

        },
        error: function(){
          alert('Could not Edit Data');
        }

    });

  });

    $(document).on('click', '.validator-edit', function(){
      var id = $(this).attr('data');
      $('#myExValModal').modal('show');
      
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editValidator',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txteFName]').val(data.strFirstname);
          $('input[name=txteMName]').val(data.strMiddlename);
          $('input[name=txteMInitial]').val(data.strMiddleInitial);
          $('input[name=txteLName]').val(data.strLastname);
          $('input[name=txteNSuffix]').val(data.strNameSuffix);
          $('input[name=txteCNumber]').val(data.strContactNumber);
          $('input[name=txteEMail]').val(data.strEmailAddress);
          $('input[name=txteInstitution]').val(data.strInstitution);
          $('input[name=txtId]').val(data.intValidatorID);

        },
        error: function(){
          alert('Could not Edit Data');
        }

    });

  });

$(document).on('click', '.author-edit', function(e){
      var id = $(this).attr('data');
      $('#myAuthorModal').modal('show');
     
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editAuthor',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txteAName]').val(data.strAuthorsName);
          $('input[name=txteSASuffix]').val(data.strSpeciesSuffix);
          $('input[name=txtId]').val(data.intAuthorID);
        },
        error: function(){
          alert('Could not Edit Data');
        }

    });

  });

$(document).on('click', '.altname-edit', function(e){
      var id = $(this).attr('data');
      $('#myAltNameModal').modal('show');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editAltName',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txtetaxonName]').val(data.strScientificName);
          $('input[name=txteLanguage]').val(data.strLanguage);
          $('input[name=txteAName]').val(data.strAlternateName);
          $('input[name=txtId]').val(data.intAltNameID);
        },
        error: function(){
          alert('Could not Edit Data');
        }

    });

  });

     $(document).on('click', '.OUser-edit', function(e){
      var id = $(this).attr('data');
      $('#myOUserModal').modal('show');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editOUser',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txtfirstname]').val(data.strFullName);
          $('input[name=txtphonenum]').val(data.strContactNumber);
          $('input[name=txtpresentadd]').val(data.strPresentAddress);
          $('input[name=txtpermaadd]').val(data.strPermanentAddress);
          $('input[name=txtaffname]').val(data.strAffiliationName);
          $('input[name=txtaffpos]').val(data.strAffiliationPosition);
          $('input[name=txtaffaddress]').val(data.strAffiliationAddress);
          // $('input[name=txtpresentadd]').val(data.strPresentAddress);
          // $('input[name=txtpresentadd]').val(data.strPresentAddress);

          $('input[name=txtId]').val(data.intPhylumID);
        },
        error: function(){
          alert('Could not Edit Data');
        }

    });

  });



 $("#selectquery").change(function () {
  var val = $(this).val();
  if(val=='Phylum'){
  $('#divTablePhylum').show();
  $('#divTableClass').hide();
  $('#divTableOrder').hide();
  $('#divTableFamily').hide();
  $('#divTableGenus').hide();
  $('#divTableSpecies').hide();
   $('#divTableExVal').hide();
   $('#divTableAuthor').hide();
   $('#divTableAltName').hide();
   $('#divTableOUser').hide();
  }else if(val=='Class'){
  $('#divTableClass').show();
  $('#divTablePhylum').hide();
  $('#divTableOrder').hide();
  $('#divTableFamily').hide();
  $('#divTableGenus').hide();
  $('#divTableSpecies').hide();
   $('#divTableExVal').hide();
   $('#divTableAuthor').hide();
   $('#divTableAltName').hide();
   $('#divTableOUser').hide();
  }else if(val=='Order'){
  $('#divTableOrder').show();
  $('#divTablePhylum').hide();
  $('#divTableClass').hide();
  $('#divTableFamily').hide();
  $('#divTableGenus').hide();
  $('#divTableSpecies').hide();
   $('#divTableExVal').hide();
   $('#divTableAuthor').hide();
   $('#divTableAltName').hide();
   $('#divTableOUser').hide();
  }else if(val=='Family'){
  $('#divTableFamily').show();
  $('#divTablePhylum').hide();
  $('#divTableClass').hide();
  $('#divTableOrder').hide();
  $('#divTableGenus').hide();
  $('#divTableSpecies').hide();
   $('#divTableExVal').hide();
   $('#divTableAuthor').hide();
   $('#divTableAltName').hide();
   $('#divTableOUser').hide();
  }else if(val=='Genus'){
    $('#divTableGenus').show();
  $('#divTableFamily').hide();
  $('#divTablePhylum').hide();
  $('#divTableClass').hide();
  $('#divTableOrder').hide();
  $('#divTableSpecies').hide();
  $('#divTableExVal').hide();
  $('#divTableAuthor').hide();
  $('#divTableAltName').hide();
  $('#divTableOUser').hide();
  }
  else if(val=='Species'){
  $('#divTableSpecies').show();
  $('#divTableGenus').hide();
  $('#divTableFamily').hide();
  $('#divTablePhylum').hide();
  $('#divTableClass').hide();
  $('#divTableOrder').hide();
  $('#divTableExVal').hide();
  $('#divTableAuthor').hide();
  $('#divTableAltName').hide();
  $('#divTableOUser').hide();
  }else if(val=='External Validators'){
  $('#divTableExVal').show();
  $('#divTableSpecies').hide();
  $('#divTableGenus').hide();
  $('#divTableFamily').hide();
  $('#divTablePhylum').hide();
  $('#divTableClass').hide();
  $('#divTableOrder').hide();
  $('#divTableAuthor').hide();
  $('#divTableAltName').hide();
  $('#divTableOUser').hide();
  }else if(val=='Species Author'){
  $('#divTableAuthor').show();
  $('#divTableExVal').hide();
  $('#divTableSpecies').hide();
  $('#divTableGenus').hide();
  $('#divTableFamily').hide();
  $('#divTablePhylum').hide();
  $('#divTableClass').hide();
  $('#divTableOrder').hide();
  $('#divTableAltName').hide();
  $('#divTableOUser').hide();
  }
  else if(val=='Plant Alternate Names'){
  $('#divTableAltName').show();
  $('#divTableAuthor').hide();
  $('#divTableExVal').hide();
  $('#divTableSpecies').hide();
  $('#divTableGenus').hide();
  $('#divTableFamily').hide();
  $('#divTablePhylum').hide();
  $('#divTableClass').hide();
  $('#divTableOrder').hide();
  $('#divTableOUser').hide();
  } else if(val=='Online Users'){
  $('#divTableOUser').show();
  $('#divTableAltName').hide();
  $('#divTableAuthor').hide();
  $('#divTableExVal').hide();
  $('#divTableSpecies').hide();
  $('#divTableGenus').hide();
  $('#divTableFamily').hide();
  $('#divTablePhylum').hide();
  $('#divTableClass').hide();
  $('#divTableOrder').hide();
  }


 });



</script>
